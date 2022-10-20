module.exports = function (gulp, plugins, config, sass) {
	gulp.task('sass-compile', function () {
		return gulp.src(config.publicStylesOrigin + '/**/*.scss')
			.pipe(plugins.sourcemaps.init())
			.pipe(sass())
			.pipe(plugins.concat('main.css'))
			.pipe(plugins.cleanCss({compatibility: 'ie8'}))
			.pipe(plugins.sourcemaps.write())
			.pipe(gulp.dest(config.publicStyleDestination))
	});
}