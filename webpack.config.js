const webpack = require("webpack");
const devtool =
  process.argv[2] === "--mode=development" ? "cheap-module-source-map" : false;

module.exports = {
  entry: "./src/assets/js/index.js",
  output: {
    path: __dirname,
    filename: "./htdocs/assets/js/app.js",
  },
  devtool: devtool,
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: [
          {
            loader: "babel-loader",
          },
        ],
      },
    ],
  },
  target: ["web", "es5"],
  plugins: [
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery",
    }),
  ],
};
