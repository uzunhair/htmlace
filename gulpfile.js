"use strict";

var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename'),
    zip = require('gulp-zip'),
    changed = require('gulp-changed'),
    debug = require('gulp-debug');

// app_name - имя виджета
// app_dist  - папка в которую будут выгружаться файлы виджета. Например:
//              D:/Program Files/OpenServer/domains/instantcms/
//              ./dist/

var app_name= 'htmlace',
    app_src  = './app/package/**/*.*',
    app_dist= 'D:/Program Files/OpenServer/domains/onenews/';

gulp.task('copyto:cms', function () {
    gulp.src(app_src)
        .pipe(changed(app_dist))
        .pipe(debug({title: '' + app_name + ':'}))
        .pipe(gulp.dest(app_dist));
});

gulp.task('watch', function () {
    gulp.watch(app_src, ['copyto:cms']);
});

gulp.task('archive', function () {
    gulp.src(['./app/**/*.*', '! ./app/package/**/*.*'])
        .pipe(zip('' + app_name + '.zip'))
        .pipe(gulp.dest('./'))
});

gulp.task('default', ['copyto:cms', 'watch']);