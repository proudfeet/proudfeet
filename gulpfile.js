var gulp = require('gulp'),
sass = require('gulp-sass'),
concat = require('gulp-concat'),
jshint = require('gulp-jshint'),
autoprefixer = require('gulp-autoprefixer');
cleanCSS = require('gulp-clean-css');

gulp.task('styles', function(){
	return gulp.src('styles/*.scss')
	.pipe(sass().on('error', sass.logError))
	.pipe(concat('style.css'))
	.pipe(autoprefixer('last 2 versions', 'safari 5', 'ie 8', 'ie9', 'opera 12.1'))
	.pipe(gulp.dest('styles/'))
});

gulp.task('minify-css', function() {
  return gulp.src('styles/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('styles/'));
});

gulp.task('jshint', function() {
  return gulp.src('js/*.js')
    .pipe(jshint())
});

gulp.task('jshint', function() {
  return gulp.src('js/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'))
});

gulp.task('watch', function() {
  gulp.watch('styles/*.scss', ['styles']);
  gulp.watch('styles/*.css', ['minify-css']);
  gulp.watch('js/*.js', ['jshint']);
});