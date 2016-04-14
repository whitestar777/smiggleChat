var elixir = require('laravel-elixir');

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

elixir(function(mix) {
 mix.sass('app.scss');

 mix.copy('bower_components/jquery/dist/jquery.min.js', 'public/js');
 mix.copy('bower_components/foundation-sites/dist/foundation.js', 'public/js');
 mix.copy('bower_components/what-input/what-input.js', 'public/js');
 mix.copy('bower_components/foundation-sites/dist/foundation.css', 'resources/assets/sass/foundation.scss');
 mix.copy('bower_components/vue/dist/vue.js', 'resources/assets/js');
 mix.copy('bower_components/vue-resource/dist/vue-resource.js', 'resources/assets/js');
 mix.copy('bower_components/vue-router/dist/vue-router.js', 'resources/assets/js');

 mix.version('css/app.css');
 mix.browserify('app.js');
});
