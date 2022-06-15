const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/backend/home/index.js', 'public/js/backend/home')
mix.js('resources/js/backend/hunian/index.js', 'public/js/backend/hunian')
mix.js('resources/js/backend/hunian/detail.js', 'public/js/backend/hunian')
mix.js('resources/js/backend/hunian/form.js', 'public/js/backend/hunian')
mix.js('resources/js/backend/prasarana-sarana-umum/index.js', 'public/js/backend/prasarana-sarana-umum')
mix.js('resources/js/backend/prasarana-sarana-umum/edit.js', 'public/js/backend/prasarana-sarana-umum')

mix.css('resources/css/backend/home/index.css', 'public/css/backend/home')
mix.css('resources/css/backend/hunian/index.css', 'public/css/backend/hunian')
