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
    .js(['public/plugins/jquery.min.js',
    'public/bootstrap/js/bootstrap.bundle.min.js',
    'public/plugins/magnific-popup/jquery.magnific-popup.min.js',
    'public/plugins/waypoints/jquery.waypoints.min.js',
    'public/plugins/waypoints/sticky.min.js',
    //'public/plugins/countTo/jquery.countTo.js',
    'public/plugins/slick/slick.min.js',
    'public/js/template.js'
    ], 'public/js/app.js')
   .sass('resources/sass/etincelle.scss', 'public/css/etincelle.css')
;


