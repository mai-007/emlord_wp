export default function slider() {
  var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
  if (windowwidth > 768){
    var responsiveImage = [//PC用の画像
      { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/mainview_01.jpg' },
      { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/mainview_02.jpg' },
      { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/mainview_03.jpg' },
      { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/mainview_04.jpg'},
    ];
  } else {
    var responsiveImage = [//タブレットサイズ（768px）以下用の画像
    { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/sp-mainview_01.jpg' },
    { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/sp-mainview_02.jpg' },
    { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/sp-mainview_03.jpg' },
    { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/sp-mainview_04.jpg'},
    ];
  }

//Vegas全体の設定

  jQuery(function ($) {
    $('#js-vegas').vegas({
      overlay: false,//画像の上に網線やドットのオーバーレイパターン画像を指定。
      transition: 'blur2',
      transitionDuration: 2000,//切り替わりのアニメーション時間をミリ秒単位で設定
      delay: 5000,//スライド間の遅延をミリ秒単位で。
      animationDuration: 20000,
      slides: responsiveImage,//画像設定を読む
      cover: true,
    });
  });
};
