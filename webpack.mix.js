let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');

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

mix.js('resources/js/orchestra.js', 'public/js')
  .copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts')
  .sass('resources/sass/orchestra.scss', 'public/css')
    .options({
      processCssUrls: false,
      postCss: [ tailwindcss('tailwind.orchestra.js') ],
    });
