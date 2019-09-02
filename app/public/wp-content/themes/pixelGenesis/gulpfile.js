const { watch, series, gulp, src, dest } = require('gulp');
const sass = require('gulp-sass');

sass.compiler = require('node-sass');

function clean(cb) {
    // body omitted
    cb();
}

function javascript(cb) {
    // body omitted
    cb();
}

function styles(cb) {
    // body omitted
    console.log('styles is firing');
    src('./content/sass/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(dest('./content/css'));
    cb();
}

exports.watch = function() {
// You can use a single task
watch('src/*.sass', styles);
// Or a composed task
// watch('src/*.js', series(clean, javascript));
};

exports.default = series(clean, styles, javascript);