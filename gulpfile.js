var gulp = require('gulp'),
    php = require('gulp-connect-php'),
    browserSync = require('browser-sync');

var reload = browserSync.reload;

var plugins = require("gulp-load-plugins")({
    pattern: ['gulp-*', 'gulp.*'],
    replaceString: /\bgulp[\-.]/
});

var basePath = 'node_modules/';
var theme = 'cms/wp-content/themes/da3/';
var srcFiles = theme + 'inc/';

var plumberErrorHandler = {
    errorHandler: plugins.notify.onError({
        title: 'Gulp',
        message: 'Error: <%= error.message %>'
    })
};


gulp.task('sass', function() {
    return gulp.src(srcFiles + 'scss/style.scss')
        .pipe(plugins.plumber(plumberErrorHandler))
        .pipe(plugins.sass())
        .pipe(gulp.dest(theme))
        .pipe(plugins.livereload());
});

// gulp.task('browser-sync', function() {

//     var files = [
//         theme + '*.php',
//         srcFiles + 'img/*.png',
//         srcFiles + 'js/*.js',
//         srcFiles + 'scss/*.scss',
//         srcFiles + 'scss/**/.scss',
//     ];

//     browserSync.init(files, {
//         server: {
//             proxy: "127.0.0.1",
//             port: 8080
//         }
//     });
// });

// gulp.task('php', function() {
//     php.server({
//         base: 'cms',
//         port: 8010,
//         keepalive: true,
//     });
// });


// gulp.task('browser-sync', ['php'], function() {
//     browserSync({
//         proxy: '127.0.0.1:8010',
//         port: 8080,
//         open: true,
//         notify: false
//     });
// });

gulp.task('js', function() {
    return gulp.src([
            basePath + '/fastclick/lib/fastclick.js',
            srcFiles + 'js/*.js'
        ])
        .pipe(plugins.concat('main.js'))
        .pipe(gulp.dest(theme))
        .pipe(plugins.livereload());
});

// still not working
gulp.task('concat-js', function() {
    return gulp.src('js/*.js')
        .pipe(plugins.useref())
        .pipe(gulp.dest(theme));
});

gulp.task('watch', function() {
    plugins.livereload.listen();
    gulp.watch(srcFiles + 'scss/**/*.scss', ['sass']);
    gulp.watch(srcFiles + 'scss/*.scss', ['sass']);
    gulp.watch(srcFiles + 'js/*.js', ['js']);
});

gulp.task('build', function() {
    return gulp.src(srcFiles + 'scss/style.scss')
        .pipe(plugins.plumber(plumberErrorHandler))
        .pipe(plugins.sass())
        .pipe(plugins.cssnano())
        .pipe(plugins.rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(theme))
})

gulp.task('webserver', function() {
    plugins.connect.server();
});

gulp.task('default', ['sass', 'js', 'watch'], function() {

    console.log('Start Gulp Tasks')

});

