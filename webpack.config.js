const path = require('path');
const webpack = require("webpack");
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

var config = {

    entry: ["./src/main/webpacker/ts/main.ts", "./src/main/webpacker/scss/main.scss"],
    plugins: [
        new MiniCssExtractPlugin({
            filename: "../css/[name].css",
        }),
    ],
    target: 'es5',
    module: {
        rules: [
            {
                test: /\.tsx?$/,
                use: 'ts-loader',
                exclude: /node_modules/,
            },
            {
                test: /\.(css|sass|scss)$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader
                    },
                    {
                        loader: "css-loader",
                        options: {
                            sourceMap: true,
                            modules: false
                        }
                    },
                    {
                        loader: "sass-loader",
                        options: {
                            // Prefer `dart-sass`
                            sourceMap: true,
                            implementation: require("sass"),
                            sassOptions: {
                                fiber: require("fibers"),

                            },
                        },
                    },
                ],
            },
            {
                test: /\.(woff|woff2|eot|ttf|otf)$/i,
                type: 'asset/resource',
                generator: {
                    filename: '../fonts/[name][ext][query]'
                }
            },
            {
                test: /\.(png|svg|jpg|jpeg|gif)$/i,
                type: 'asset/resource',
                generator: {
                    filename: '../static/[hash][ext][query]'
                }
            },
        ],
    },
    resolve: {
        mainFields: ['browser', 'module', 'main'],
        extensions: ['.tsx', '.ts', '.js',"scss"],
    },
    output: {
        filename: '[name]-bundle.js',
        chunkFormat: 'array-push',
        path: path.resolve(__dirname, './src/main/webapp/js'),
        clean: true,
    },

};

module.exports = config;