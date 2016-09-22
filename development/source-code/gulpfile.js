var elixir = require('laravel-elixir'),
    gulp = require('gulp');
    // browserSync = require('browser-sync').create(),
    // browserSyncOptions = {
    //     proxy: {
    //         target: "localhost:8000"
    //     }
    // };
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

elixir(function (mix) {
    mix.sass('app.scss', 'public/assets/css')
            .task('js', 'resources/app/**/*.*')
            // .task('sync');
});

gulp.task('js', function () {
    return gulp.src(['resources/css/**/*.*'])
        .pipe(gulp.dest('public/css'));
});

gulp.task('sync', function() {
    // browserSync.init(browserSyncOptions);
    // gulp.watch('./**/*.*')
    //     .on('change', function(event) {
    //         browserSync.reload();
    //     });
});