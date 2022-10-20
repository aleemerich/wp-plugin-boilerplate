module.exports = function (gulp, plugins, config) {
    gulp.task('js-compile', function() {
		return gulp.src(config.publicJSOrigin + '/**/*.js')
			.pipe(plugins.sourcemaps.init())
			.pipe(plugins.uglify()) // minify
			.pipe(plugins.sourcemaps.write()) // write sourcemaps
			.pipe(gulp.dest(config.publicJSDestination)) // send minify file
	});
};