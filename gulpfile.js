const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
        .webpack('app.js');
});

elixir(mix => {
    mix.copy('bower_components/bootstrap/dist/css/bootstrap.css','public/vendor/bootstrap/')
        .copy('bower_components/bootstrap/dist/js/bootstrap.js','public/vendor/bootstrap/')
        .copy('bower_components/jquery/dist/jquery.js','public/vendor/jquery/')
        .copy('bower_components/clean-blog/css/clean-blog.css','public/vendor/clean-blog/')
        .copy('bower_components/clean-blog/js/clean-blog.js','public/vendor/clean-blog/')
        .copy('bower_components/font-awesome/css/font-awesome.css','public/vendor/font-awesome/');
});