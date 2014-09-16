var gulp = require('gulp');
var sass = require('gulp-sass');
var codecept = require('gulp-codeception');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function() {
    gulp.src('app/assets/scss/main.scss')
        .pipe(sass({ includePaths : ['app/assets/scss/'] }))
        .pipe(autoprefixer('last 10 versions'))
        .pipe(gulp.dest('public/css'));
});

gulp.task('codecept_functional', function() {
    var options = {clear: true, debug: true, testSuite: 'functional', flags: '-vvv'};
    gulp.src('./tests/functional/*.php').pipe(codecept('', options));
});

gulp.task('codecept_integration', function() {
    var options = {clear: true, debug: true, testSuite: 'integration', flags: '-vvv'};
    gulp.src('./tests/integration/*.php').pipe(codecept('', options));
});

gulp.task('codecept_unit', function() {
    var options = {clear: true, debug: true, testSuite: 'unit', flags: '-vvv'};
    gulp.src('./tests/unit/*.php').pipe(codecept('', options));
});

gulp.task('watch', function() {
    gulp.watch('app/assets/scss/**/*.scss', ['css']);
    gulp.watch('./tests/functional/*.php', ['codecept_functional']);
    gulp.watch('./tests/integration/*.php', ['codecept_integration']);
    gulp.watch('./tests/unit/*.php', ['codecept_unit']);
});

gulp.task('default', ['watch']);
