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

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);
mix.sass('public/css/template/main.sass', 'public/css/template/main.css')
.sass('public/css/quiz/quiz.sass', 'public/css/quiz/quiz.css')
.sass('public/css/profile/profile.sass', 'public/css/profile/profile.css')
.sass('public/css/about/about.sass', 'public/css/about/about.css')
.sass('public/css/login_register/login_register.sass', 'public/css/login_register/login_register.css');


