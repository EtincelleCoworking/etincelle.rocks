const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    //.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/style.scss', 'public/css')
   .sass('resources/sass/skins/light_blue.scss', 'public/css')
   .sass('resources/sass/typography-scheme-3.scss', 'public/css/typography.css')
;
