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

mix.js('resources/js/app.js', 'public/js')
   .sass( 'resources/sass/app.scss', 'public/css')
   .styles([
    'resources/sass/material/font-awesome/css/fontawesome-all.css',
    // 'resources/sass/sass/material/icons/simple-line-icons/css/simple-line-icons.css',
    // 'resources/sass/material/icons/weather-icons/css/weather-icons.min.css',
    // 'resources/sass/material/icons/linea-icons/linea.css',
    // 'resources/sass/material/icons/themify-icons/themify-icons.css',
    // 'resources/sass/material/icons/flag-icon-css/flag-icon.min.css',
    // 'resources/sass/material/icons/material-design-iconic-font/css/materialdesignicons.min.css',
   ], 'public/css/fonts.css')
