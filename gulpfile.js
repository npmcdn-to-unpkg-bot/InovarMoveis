/*
 |--------------------------------------------------------------------------
 | Required components
 |--------------------------------------------------------------------------
 */
var elixir = require('laravel-elixir');
            require('laravel-elixir-jade');
var gulp = require('gulp'),
    bower = require('gulp-bower'),
    livereload = require('gulp-livereload');

/*
 |--------------------------------------------------------------------------
 | Path var
 |--------------------------------------------------------------------------
 */
var devBower = './resources/assets/bower/',
    devLess  = './resources/assets/less',
    devJade  = './resources/assets/jade',
    pubCSS   = 'public/css',
    pubJS    = 'public/js',
    pubLib   = '.public/libs';

/*
 |--------------------------------------------------------------------------
 | Bower task
 |--------------------------------------------------------------------------
 */
gulp.task('bower', function() {
    return bower({directory:devBower, cmd:'update'});
});

/*
 |--------------------------------------------------------------------------
 | Elixir task
 |--------------------------------------------------------------------------
 */

//sourcemaps preferances
elixir.config.sourcemaps = false;

//GULP running task
elixir(function(mix) {

    //JADE settings
    mix.jade({
        baseDir: './resources',
        src: '/assets/jade/',
        search: '/**/*.jade',
        dest: '/views/',
        pretty: true,
        blade: true
    });




    //LESS and JS pages settings
    mix.less([ devLess + '/pages/home.less'], pubCSS + "/home.css");//delete less


    mix.scripts(["components/layout.js", "pages/home.js"], pubJS + "/home.min.js");

    //LESS and JS lib settings





    mix.browserSync({
        proxy: 'inovarcompleto.dev/'
    });

    /*gulp.task('watch', function() {
        livereload.listen();
        gulp.watch(pubCSS+'/*.css', ['less']);
        gulp.watch(pubJS+'/*.js', ['scripts']);
        gulp.watch(devJade+'/*.less', ['jade']);
    });*/
});

