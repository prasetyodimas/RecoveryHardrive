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

mix.js('resources/assets/js/app.js','public/frontend/fronthemes/js/app.js')
   .js('resources/assets/js/global.js','public/frontend/fronthemes/js/app.js')
   .js('resources/assets/plugins/nicescroll/jquery.nicescroll.min.js','public/frontend/fronthemes/js/app.js')
   .js('resources/assets/js/jquery.mobile.custom.js','public/frontend/fronthemes/js/app.js')
   .sass('resources/assets/sass/front-base.scss','public/frontend/fronthemes/css/base.css')
   .sass('resources/assets/font-awesome/scss/font-awesome.scss', 'public/frontend/fronthemes/css/font-awesome.css')
   .copyDirectory('resources/assets/asset-images','public/frontend/fronthemes/asset-images');

mix.browserSync({
    proxy: 'http://localhost:8000'
});

