const path = require('path');
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

mix.disableNotifications()
    .webpackConfig({
        resolve: {
            alias: {
                '@redux': path.resolve(__dirname, './resources/assets/js/redux'),
                '@utils': path.resolve(__dirname, './resources/assets/js/utils'),
                '@config': path.resolve(__dirname, './resources/assets/js/config'),
                '@components': path.resolve(__dirname, './resources/assets/js/components'),
            },
        },
    })
    .sass('resources/assets/scss/style.scss', 'public/css')
    .react('resources/assets/js/index.js', 'public/js')
    .sourceMaps()
