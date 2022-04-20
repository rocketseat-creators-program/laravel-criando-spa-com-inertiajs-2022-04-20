const mix = require('laravel-mix');
const webpackConfig = require('./webpack.config');

mix.js('resources/js/app.js', 'public/js')
  .extract()
  .version()
  .vue(3)
  .sass('resources/sass/app.scss', 'public/css', {}, [
    require('tailwindcss')
  ])
  .alias({'@': 'resources/js'})
  .webpackConfig(webpackConfig);
