var elixir = require('laravel-elixir');

var paths = {
    'jquery': './bower_components/jquery/',
    'bootstrap': './bower_components/bootstrap-sass-official/assets/',
    'font_awesome': './bower_components/font-awesome/scss'
};

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix){

    mix.sass("app.scss", '../html/public/css/', {includePaths: [paths.bootstrap + 'stylesheets/', paths.font_awesome]})
});
