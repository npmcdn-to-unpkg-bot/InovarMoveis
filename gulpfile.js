/*
 |--------------------------------------------------------------------------
 | Required components
 |--------------------------------------------------------------------------
 */
var elixir = require('laravel-elixir');
            require('laravel-elixir-jade');
var gulp = require('gulp');
var bower = require('gulp-bower');

/*
 |--------------------------------------------------------------------------
 | Bower setup
 |--------------------------------------------------------------------------
 */
var bowerDir = './resources/assets/bower/';

gulp.task('bower', function() {
    return bower({directory:bowerDir, cmd:'update'})
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

    //Path LESS and JS production and CSS & JS production
    var lessDir  = './resources/assets/less';
    var pubCSS = 'public/css';
    var pubJS = 'public/js';


    //LESS and JS settings
    mix.less([ lessDir + '/pages/home.less'], pubCSS + "home.css");//delete less


    mix.scripts(["components/layout.js", "pages/home.js"], pubJS + "home.min.js");



    //setting Bower resources copy
    if (elixir.config.production) {

        //Path directory resources compiled
        var lib = '.public/libs';

        //CSS libraries
        mix.styles([
            bowerDir + "/css/font-awesome.min.css",
            bowerDir + "/select2-bootstrap.min.css"
        ], lib + '/css/bower.css');

        //JS libraries
        mix.scripts([
            bowerDir + "/jquery.js",
            bowerDir + "palette.js"
        ], lib + '/js/bower.js');
    }

});