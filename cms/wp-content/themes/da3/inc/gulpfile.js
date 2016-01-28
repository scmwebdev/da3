var gulp = require('gulp');
var plugins = require("gulp-load-plugins")({
  pattern: ['gulp-*', 'gulp.*'],
  replaceString: /\bgulp[\-.]/
});

var basePath = 'node_modules/';

var plumberErrorHandler = {
	errorHandler: plugins.notify.onError({
		title: 'Gulp',
		message: 'Error: <%= error.message %>'
	})
};
gulp.task('sass', function(){
	return gulp.src('scss/style.scss')
		.pipe(plugins.plumber(plumberErrorHandler))
		.pipe(plugins.sass())
		.pipe(gulp.dest('../'))
		.pipe(plugins.livereload());
});

gulp.task('js', function(){
	return gulp.src([
			basePath + '/fastclick/lib/fastclick.js',
			'js/*.js'
		])
		.pipe(plugins.concat('main.js'))
		.pipe(gulp.dest('../'))
		.pipe(plugins.livereload());
});

// still not working
gulp.task('concat-js', function () {
    return gulp.src('js/*.js')
        .pipe(plugins.useref())
        .pipe(gulp.dest(wpDest));
});

 gulp.task('watch',  function(){
 	plugins.livereload.listen();
 	gulp.watch('scss/**/*.scss', ['sass']);
 	gulp.watch('scss/*.scss', ['sass']);
 	gulp.watch('js/*.js', ['js']);
 });

 gulp.task('build', function(){
  return gulp.src(wpDest + 'scss/style.scss')
		.pipe(plugins.plumber(plumberErrorHandler))
		.pipe(plugins.sass())
	    .pipe(plugins.cssnano())
	    .pipe(plugins.rename({suffix: '.min'}))
		.pipe(gulp.dest(wpDest))
 })

gulp.task('webserver', function() {
	  plugins.connect.server();
});
gulp.task('default', ['sass', 'js', 'watch'], function(){

    console.log('Start Gulp Tasks')

});
