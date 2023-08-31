// webpack.mix.js
let mix = require('laravel-mix');
let minifier = require('minifier');

require('mix-tailwindcss');

mix.sass('assets/scss/style.scss', 'style.css')
  .tailwind('tailwind.config.js')
  .minify('style.css');
mix.sass('assets/scss/hamburgers.scss', 'hamburgers.css')
  .minify('hamburgers.css');

mix.combine(['assets/js/main.js', 'assets/js/form-consulenza.js'], 'script.js')

mix.webpackConfig({
  watchOptions: {
    ignored: /node_modules/
  }
});