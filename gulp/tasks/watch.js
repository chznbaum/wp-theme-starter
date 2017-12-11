const gulp = require('gulp'),
watch = require('gulp-watch'),
browserSync = require('browser-sync').create();

gulp.task('watch', function() {
  browserSync.init({
    notify: false,
    proxy: 'local.wordpress.test'
  });

  watch('./*.php', function() {
    browserSync.reload();
  });

  watch('./app/assets/sass/**/', function() {
    gulp.start('cssInject');
  });
});

gulp.task('cssInject', ['styles'], function() {
  return gulp.src('./style.css')
    .pipe(browserSync.stream());
});
