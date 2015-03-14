
var gulp = require ('gulp'),
autoprefixer = require('gulp-autoprefixer')
;
var sass = require ('gulp-sass');

gulp.task('styles',function() {
	gulp.src('wp-content/themes/theme-hackeryou/style.scss')
	.pipe(sass({errLogToConsole: true}))
	.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
	.pipe(gulp.dest('wp-content/themes/theme-hackeryou/'))
	});

gulp.task('watch',function() {
	gulp.watch('wp-content/themes/theme-hackeryou/style.scss',['styles']);
	});
