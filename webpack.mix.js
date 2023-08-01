// webpack.mix.js
let mix = require('laravel-mix');
let minifier = require('minifier');

require('mix-tailwindcss');

mix.sass('assets/scss/style.scss', 'style.css')
  .tailwind('tailwind.config.js')
  .minify('style.css');

// mix.combine(['assets/js/main.js', ''], 'script.js')
mix.minify(['assets/js/main.js'], 'script.min.js');

mix.webpackConfig({
  watchOptions: {
    ignored: /node_modules/
  }
});