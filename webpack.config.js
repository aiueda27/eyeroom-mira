const MiniCssExtractPlugin = require("mini-css-extract-plugin");

// [定数] webpack の出力オプションを指定します
// 'production' か 'development' を指定
const MODE = "production";

// ソースマップの利用有無(productionのときはソースマップを利用しない)
const enabledSourceMap = MODE === "development";

module.exports = {
  // モード値を production に設定すると最適化された状態で、
  // development に設定するとソースマップ有効でJSファイルが出力される
  mode: MODE,
  // source-map 方式でないと、CSSの元ソースが追跡できないため
  devtool: "source-map",

  // メインとなるjsファイル（エントリーポイント）
  entry: { index: `./src/js/index.js` },

  // ファイルの出力設定
  output: {
    // 出力ファイルのディレクトリ名
    path: `${__dirname}/dist`,
    // 出力ファイル名
    filename: "main.js",
  },

  //   CSSバンドル
  module: {
    rules: [
      // sassファイル読み込みとコンパイル
      {
        // 対象となるファイルの拡張子
        test: /\.scss/,
        // ローダー名
        use: [
          // CSSファイルを書き出すオプションを有効にする
          {
            loader: MiniCssExtractPlugin.loader,
          },
          {
            loader: "css-loader",
            options: {
              // オプションでCSS内のurl()メソッドの取り込みを禁止する
              url: false,
              //   ソースマップを有効にする
              sourceMap: enabledSourceMap,

              // 0 => no loaders (default);
              // 1 => postcss-loader;
              // 2 => postcss-loader, sass-loader
              importLoaders: 2,
            },
          },
          {
            loader: "postcss-loader",
            options: {
              // PostCSS側でもソースマップを有効にする
              // sourceMap: true,
              postcssOptions: {
                plugins: [
                  // Autoprefixerを有効化
                  // ベンダープレフィックスを自動付与する
                  ["autoprefixer", { grid: true }],
                ],
              },
            },
          },
          {
            loader: "sass-loader",
            options: {
              // ソースマップを有効にする
              sourceMap: enabledSourceMap,
            },
          },
        ],
      },
      //   {
      //     // 対象となるファイルの拡張子
      //     test: /\.(gif|png|jpg|svg)$/,
      //     // 画像をBase64として取り込む
      //     // type: "asset/inline",
      //     // 画像を埋め込まず任意のフォルダに保存する
      //     // type: "asset/resource",
      //     // 閾値以上だったら埋め込まずファイルとして分離する
      //     type: "asset",
      //     parser: {
      //       dataUrlCondition: {
      //         // 100KB以上だったら埋め込まずファイルとして分離する
      //         maxSize: 100 * 1024,
      //       },
      //     },
      //   },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "style.css",
    }),
  ],

  // ES5(IE11等)向けの指定
  target: ["web", "es5"],

  // ローカル開発用環境を立ち上げる
  // 実行時にブラウザが自動的に localhost を開く
  devServer: {
    static: "dist",
    open: true,
  },
};
