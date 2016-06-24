var gulp = require('gulp'),
    connect = require('gulp-connect');

gulp.task('webserver', function() {
  connect.server({
    livereload: true,
  });
});

gulp.task('html', function() {
  gulp.src('*.html').pipe(connect.reload());
});

gulp.task('css', function() {
  gulp.src('css/*.css').pipe(connect.reload());
});

gulp.task('js', function() {
  gulp.src('js/*.js').pipe(connect.reload());
});

gulp.task('img', function() {
  gulp.src('img/*').pipe(connect.reload());
});

gulp.task('watch', function() {
    gulp.watch('*.html', ['html']);
    gulp.watch('css/*.css', ['css']);
    gulp.watch('js/*.js', ['js']);
    gulp.watch('img/*', ['img']);
});

gulp.task('default', ['webserver', 'watch']);
