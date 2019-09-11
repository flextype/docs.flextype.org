//
// Flextype Gulp.js
// (c) Sergey Romanenko <https://github.com/Awilum>
//

var Promise = require("es6-promise").Promise,
    gulp = require('gulp'),
    csso = require('gulp-csso'),
    concat = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function() {
    return gulp.src('assets/dist/css/docs.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(csso())
        .pipe(concat('docs.min.css'))
        .pipe(gulp.dest('assets/dist/css/'));
});


gulp.task('default', ['css']);
