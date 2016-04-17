var gulp = require('gulp');

var minifyCSS = require('gulp-minify-css');
var sass = require('gulp-sass');

gulp.task('css', function () {
    gulp.src('assets/p/**/*.css')
        // 压缩
        // .pipe(minifyCSS()).pipe(gulp.dest('./assets'))
});

gulp.task('sass', function() {
    gulp.src('./assets/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('./assets'));
});

gulp.task('default', function(){
    gulp.run('css', 'sass');
    gulp.watch('./assets/**/*.scss', function(){
        gulp.run('sass');
    });
});