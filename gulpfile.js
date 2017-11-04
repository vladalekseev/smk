'use strict';

const gulp         = require('gulp');
const sass         = require('gulp-sass');
const concat       = require('gulp-concat');
const uglify       = require('gulp-uglify');
const cleanCSS     = require('gulp-clean-css');
const imagemin     = require('gulp-imagemin');
const pngquant     = require('imagemin-pngquant');
const rename       = require('gulp-rename');
const cache        = require('gulp-cache');
const notify       = require('gulp-notify');
const autoprefixer = require('gulp-autoprefixer');
const babel        = require('gulp-babel');
const csscomb      = require('gulp-csscomb');
const del          = require('del');

gulp.task('sass', function() {

    return gulp.src('web/src/features/**/*.scss')
        .pipe(sass().on('error', notify.onError({
            message: '<%= error.message %>',
            title: 'Sass Error!'
        })))
        .pipe(autoprefixer(['last 15 version', '>1%', 'ie 8', 'ie 7'], {cascade: true}))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('web/features'));
});

gulp.task('csscomb', ['sass'], function() {

    return gulp.src('web/src/features/**/*.scss')
        .pipe(csscomb())
        .on('error', notify.onError({
            message: '<%= error.message %>',
            title: 'Csscomb Error!'
        }))
        .pipe(gulp.dest('web/src/features'));
});

gulp.task('scripts', function() {

    return gulp.src('web/src/features/**/*.js')
        .pipe(babel({presets: ['es2015']}))
        .on('error', notify.onError({
            message: '<%= error.message %>',
            title: 'Babel Error!'
        }))
        .pipe(rename({suffix: '.compiled'}))
        .pipe(gulp.dest('web/features'));
});

gulp.task('img', function() {

    return gulp.src('web/src/img/**/*')
        .pipe(cache(imagemin({
            interlaced: true,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            une: [pngquant()]
        })))
        .pipe(gulp.dest('web/img'));
});
gulp.task('del', function() { return del.sync('web/features'); });

gulp.task('default', ['sass', 'scripts', 'img'], function() {
    gulp.watch('web/src/features/**/*.scss', ['sass']);
    gulp.watch('web/src/features/**/*.js', ['scripts']);
    gulp.watch('web/src/img/**/*', ['img']);
});
