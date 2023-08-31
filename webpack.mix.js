// webpack.mix.js
let mix = require('laravel-mix');
let minifier = require('minifier');

require('mix-tailwindcss');

mix.sass('assets/scss/style.scss', 'style.css')
  .tailwind('tailwind.config.js');
mix.sass('assets/scss/hamburgers.scss', 'hamburgers.css');

mix.combine(['assets/js/main.js'], 'script.js');

mix.webpackConfig({
  watchOptions: {
    ignored: /node_modules/
  }
});