module.exports = function (gulp, plugins, config) {
    gulp.task('js-compile-admin', function() {
        return gulp.src(config.adminJSOrigin + '/**/*.js')
            .pipe(plugins.sourcemaps.init())
            .pipe(plugins.uglify()) // minify
            .pipe(plugins.sourcemaps.write()) // write sourcemaps
            .pipe(gulp.dest(config.adminJSDestination)) // send minify file
    });
}