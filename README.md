# Quick Start
1. インストールしたDockerを起動します。

2. フォルダごとVS Codeで開きます。

3. `npm run wp-start` でWordPressを起動させます。

4. `npm start` でブラウザと同期しながら開発できます。

5. `control + c` で開発を終了します。

6. `npm run wp-stop` でWordPressを終了します。

7. `npm run build` でテーマをビルドします。



# できること
- ローカルでWordPressのテーマ開発

- 画像パスの簡略化

- SCSSのコンパイル

- JSのバンドル

- 画像ファイルの圧縮

- BrowserSync

# 導入
## Dockerのインストール
[公式サイト](https://www.docker.com/)からDockerをインストール

## node.jsのインストール
[公式サイト](https://nodejs.org/ja/)から推奨版のnode.jsをインストール

## npmインストール
フォルダを開いて `npm install`

# 構造
my_theme : ビルドされるフォルダ

src : テーマ開発フォルダ

.gitignore : gitから除外するファイル・フォルダの指定

.wp-env.json : wpの環境設定ファイル

gulpfile.js : gulpの設定ファイル

package.json : パッケージの設定ファイル

webpack.config.js : webpackの設定ファイル


# 開発スタート
1. `npm start` でBrowserSyncを起動させると、http://localhost:8888/ でブラウザが開きます。

2. http://localhost:3000/wp-admin/ からログインします。ID/PASS は admin/password 。

3. ダッシュボードは英語かと思います。Settings > General からSite Language を日本語に、Timezone を Tokyo にしましょう。

4. テーマをmy_themeに変更します。

5. srcフォルダ内で開発します。

6. 納品時は`npm run build`でビルドします。

7. my_themeのフォルダ名、style.cssのTheme Name:を変更してアップしましょう。


# 画像のパス
function.phpでパス簡略化を設定。
例.echo get_theme_img('/images/common/logo.png')
