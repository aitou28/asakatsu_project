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

const mix = require('laravel-mix')
/*BrowserSync というツールを組み合わせて、JavaScript や PHP ファイルが変更されたときに自動的にブラウザがリロードされる*/
mix.browserSync({
    proxy: {
        target: 'nginx',
    }
})
.js('resources/js/app.js', 'public/js')
.sass('resources/sass/app.scss', 'public/css')
.version()
