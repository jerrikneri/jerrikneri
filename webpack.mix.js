const mix = require('laravel-mix').mix;

mix.js('resources/assets/js/index.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');