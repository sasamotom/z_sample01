const path = require("path"); // ファイルのパス用モジュール
const glob = require("glob"); // *でのファイル指定に使用
const MiniCssExtractPlugin = require("mini-css-extract-plugin"); // cssをjsから抽出して別ファイルとして出力
const FixStyleOnlyEntriesPlugin = require("webpack-fix-style-only-entries");
const scssDir = "src/assets/scss"; // scssファイルを配置しているディレクトリ
const distDir = "htdocs/assets/css/"; // cssを出力するディレクトリ

// 引数チェック（開発環境かどうか）
const devMode = process.argv[2] === "--mode=development";
const devtool = devMode ? "cheap-module-source-map" : false;

// 対象ファイル一覧作成
const entries = glob
  .sync("**/*.scss", { ignore: "**/_*.scss", cwd: scssDir })
  .map(function (key) {
    return [distDir + key.replace(".scss", ""), path.resolve(scssDir, key)];
  }); // [ '**/files' , './src/**/files.scss' ]という形式の配列になる
const entryObj = Object.fromEntries(entries); // 配列→{key:value}の連想配列へ変換

module.exports = {
  entry: entryObj,
  output: {
    path: __dirname,
    filename: "[name].js",
  },
  devtool: devtool,
  module: {
    rules: [
      {
        test: /\.(scss|css)$/i, // 対象にするファイルを指定
        use: [
          MiniCssExtractPlugin.loader, // JSとCSSを別々に出力する
          {
            loader: "css-loader",
            options: {
              url: false,
              sourceMap: devMode,
              importLoaders: 2,
            },
          },
          {
            loader: "postcss-loader",
            options: {
              postcssOptions: {
                // ベンダープレフィックスを自動付与する
                plugins: [require("autoprefixer")({ grid: true })],
              },
            },
          },
          "sass-loader",
          "glob-import-loader",
          // 下から順にコンパイル処理が実行されるので、記入順序に注意
        ],
      },
    ],
  },
  plugins: [
    // 不要なJSファイルは削除
    new FixStyleOnlyEntriesPlugin({
      silent: true,
    }),
    // cssの出力先を指定する
    new MiniCssExtractPlugin({
      filename: "[name].css",
    }),
  ],
};
