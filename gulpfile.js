const { src, dest, watch, series, parallel } = require('gulp');
// css
const sass = require('gulp-sass')(require('sass'));
const del = require('del');
const gulpPostcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
//　js
const webpack = require('webpack');
const webpackStream = require('webpack-stream');
const webpackConfig = require('./webpack.config');
// images
const imagemin = require('gulp-imagemin');

// browserSync
const browserSync = require('browser-sync').create();

// ==============================
// distの中身を削除
// ==============================
function removeFiles(done) {
  del(['./my_theme/**/*']);
  done();
};

// ==============================
// images / phpファイルコピー
// ==============================
function copyFiles() {
  return src([
    './src/images/**/*',
    './src/**/*.php',
    './src/style.css',
    './src/screenshot.png'
  ],
    { base: './src' })  //ディレクトリ構造を維持する
    .pipe(dest('./my_theme'));
};

// ==============================
// sassのコンパイル。
// ==============================
function buildSass() {
  return src('./src/scss/**/*.scss', { sourcemaps: true })
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpPostcss([autoprefixer("last 2 versions"), cssnano()]))
    .pipe(dest('./my_theme/css', { sourcemaps: './sourcemaps' }));
};

// ==============================
// JSのバンドル
// ==============================
function buildJS() {
  return src(`.src/js/**/*.js`)
    .pipe(webpackStream(webpackConfig, webpack))
    .pipe(dest('./my_theme/js'));
};

// ==============================
// 画像の圧縮
// ==============================
function imagesMin() {
  return src('./src/images/**/*')
    .pipe(
      imagemin([
        imagemin.gifsicle({ interlaced: true }),
        imagemin.mozjpeg({ quality: 75, progressive: true }),
        imagemin.optipng({ optimizationLevel: 3}),
        imagemin.svgo()
      ])
    )
    .pipe(dest('./my_theme/images'));
};

// ==============================
// browserSync
// ==============================
function staticServer(done) {
  browserSync.init({
    files: ["./src/**/*"],
    proxy: 'localhost:8888'
  });
  done();
};
// reload
function reloadBrowser(done) {
  browserSync.reload();
  return done();
}
// watch
function watchingFiles() {
  watch(
    [
      './src/**/*.php',
      './src/scss/**/*.scss',
      './src/images/**/*',
      './src/js/**/*.js',
    ],
    series(removeFiles, parallel(buildSass, buildJS), copyFiles, reloadBrowser)
  );
};


if (process.env.NODE_ENV === 'development') {
  exports.default = series(
    removeFiles,
    parallel(buildSass, buildJS),
    copyFiles,
    imagesMin,
    staticServer,
    watchingFiles
  );
}
if (process.env.NODE_ENV === 'production') {
  exports.default = series(
    removeFiles,
    parallel(buildSass, buildJS),
    copyFiles,
    imagesMin
  );
}
