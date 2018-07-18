const path = require('path')
const UglifyJsPlugin = require('uglifyjs-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

const ENV = process.env.NODE_ENV || 'development'
const ROOT_PATH = path.resolve(__dirname, '..')

function root(...args) {
	args.unshift(ROOT_PATH)
	return path.join.apply(path, args)
}

module.exports = {
	mode: ENV,
	devtool: ENV === 'production' ? false : 'cheap-module-source-map',

	entry: {
		'main': [
			root('assets/scripts/main/index.js'),
			root('assets/styles/main/index.scss')
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

	optimization: {
		minimizer: [
			new UglifyJsPlugin(),
		]
	},

	plugins: [
		new MiniCssExtractPlugin({
			filename: '[name].css',
		})
	],

	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				loader: 'babel-loader',
				options: {
					babelrc: false,
					presets: [
						['env', {
							targets: {
								browsers: ['> 1%']
							}
						}],
					],
					plugins: [
						'transform-object-rest-spread',
						'transform-class-properties',
					],
				},
			},
			{
				test: /\.scss$/,
				use: [
					MiniCssExtractPlugin.loader,
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
				]
			}
		]
	},
};
