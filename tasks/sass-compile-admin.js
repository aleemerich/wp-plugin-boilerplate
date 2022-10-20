module.exports = function (gulp, plugins, config, sass) {
    gulp.task('sass-compile-admin', function () {
        return gulp.src(config.adminStylesOrigin + '/**/*.scss')
            .pipe(plugins.sourcemaps.init())
            .pipe(sass())
            .pipe(plugins.concat('main.css'))
            .pipe(plugins.cleanCss({compatibility: 'ie8'}))
            .pipe(plugins.sourcemaps.write())
            .pipe(gulp.dest(config.adminStyleDestination))
    });
}