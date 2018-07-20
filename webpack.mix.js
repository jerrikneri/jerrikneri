const mix = require('laravel-mix').mix;
// const glob = require("glob");
// const path = require("path");
// const webpack = require("webpack");
// const ExtractTextPlugin = require("extract-text-webpack-plugin");

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

// let rules = [];

// rules.push({
//     test: /\.jsx?$/,
//     exclude: /node_modules\/(?!(@sendlane|quill)\/).*/,
//     use: [{
//         loader: "babel-loader",
//         options: Config.babel()
//     }]
// });

// mix.webpackConfig({
//     module: { rules },
// });