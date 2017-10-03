const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/frontend/js/app.js')
   .js('resources/assets/js/bootstrap.js', 'public/frontend/js/app.js')
   .sass('resources/assets/sass/app.scss', 'public/frontend/fronthemes/css/base.css')
   .sass('public/frontend/fronthemes/sass/front-base.scss', 'public/frontend/fronthemes/css/base.css');
