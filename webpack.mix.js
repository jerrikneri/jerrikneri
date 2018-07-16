const mix = require('laravel-mix').mix;
// const glob = require("glob");
// const path = require("path");
// const webpack = require("webpack");
// const ExtractTextPlugin = require("extract-text-webpack-plugin");

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

