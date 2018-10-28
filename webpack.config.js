const path = require('path')

const config = {
	entry: './src/index.js',
	output: {
		path: path.resolve(__dirname,'./dist'),
		filename: 'main.js',
		publicPath: 'dist/'
	},
	davServer: {
		overlay: true
	}

}


module.exsports = config


var MiniCssExtractPlugin = require('mini-css-extract-plugin')

module.exports = {
  module: {
    rules: [
      {
        test: /\.css$/,
        use: [
          process.env.NODE_ENV !== 'production'
            ? 'vue-style-loader'
            : MiniCssExtractPlugin.loader,
          'css-loader'
        ]
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'style.css'
    })
  ]
}