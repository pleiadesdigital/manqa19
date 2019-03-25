const path = require('path');

module.exports = {
  entry: "./wp-content/themes/manqa/js/App.js",
  output: {
    path: path.resolve(__dirname, "./wp-content/themes/manqa/scripts"),
    filename: "App.js"
  },
  module: {
    rules: [
      {
        loader: 'babel-loader',
        query: {
          presets: ["env"]
        },
        test: /\.js$/,
        exclude: /node_modules/
      }
    ]
  },
  mode: 'development'
}
