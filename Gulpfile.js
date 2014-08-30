var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function() {
    gulp.src('app/assets/scss/main.scss')
        .pipe(sass({ includePaths : ['app/assets/scss/'] }))
        .pipe(autoprefixer('last 10 versions'))
        .pipe(gulp.dest('public/css'));
});

gulp.task('watch', function() {
    gulp.watch('app/assets/scss/**/*.scss', ['css']);
});

gulp.task('default', ['watch']);
