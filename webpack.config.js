const path = require('path')
const ExtractTextPlugin = require('extract-text-webpack-plugin');

const ENV = process.env.NODE_ENV || 'development'
const ROOT_PATH = path.resolve(__dirname)

function root(...args) {
	args.unshift(ROOT_PATH)
	return path.join.apply(path, args)
}

module.exports = {
	devtool: ENV === 'production' ? false : 'cheap-module-source-map',

	entry: {
		'main': [
			'./assets/scripts/main/index.js',
			'./assets/styles/main/index.scss'
		]
	},

	output: {
		path: root('/public/assets'),
		filename: '[name].bundle.js',
		sourceMapFilename: '[file].map'
	},

	resolve: {
		extensions: ['.js']
	},

	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				loader: 'babel-loader'
			},
			{
				test: /\.scss$/,
				use: ExtractTextPlugin.extract({
					fallback: 'style-loader',
					use: [
						{
							loader: 'css-loader',
							options: Object.assign({
								sourceMap: true,
							}, (ENV === 'production' && {
								minimize: true,
								sourceMap: false,
							})),
						},
						{
							loader: 'sass-loader',
							options: {
								sourceMap: true,
							}
						}
					],
				}),
			}
		]
	},

	plugins: [
		new ExtractTextPlugin({
			filename: ENV === 'production' ? '[name].[contenthash].css' : '[name].css',
			allChunks: true,
		})
	]
};
