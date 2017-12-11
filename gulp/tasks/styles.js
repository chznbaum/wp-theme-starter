const gulp = require('gulp'),
notify = require('gulp-notify'),
postcss = require('gulp-postcss'),
autoprefixer = require('autoprefixer'),
sass = require('gulp-sass');

const onError = function(errorMsg) {
  notify({
    title: 'Gulp Task Error',
    message: 'Check the console.'
  }).write(errorMsg);

  console.log(errorMsg.toString());

  this.emit('end');
};

gulp.task('styles', function() {
  return gulp.src('./app/assets/sass/style.sass')
    .pipe(postcss([autoprefixer]).on('error', onError))
    .pipe(sass().on('error', onError))
    .pipe(gulp.dest('./app/temp/css'));
});