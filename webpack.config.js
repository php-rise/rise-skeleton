var ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
	entry: {
		'default.js': './assets/js/default.js',
		'default.css': './assets/scss/default.scss'
	},
	output: {
		path: './public/assets',
		filename: '[name]'
	},
	module: {
		loaders: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				loader: 'babel-loader'
			},
			{
				test: /\.scss$/,
				loader: ExtractTextPlugin.extract('style', 'css!sass')
			}
		]
	},
	plugins: [
		new ExtractTextPlugin('[name]')
	]
};
