const elixir = require('laravel-elixir');
const sass = require('gulp-sass');

elixir((mix) => {
      mix.sass('./assets/sass/style.scss', './style.css');
});