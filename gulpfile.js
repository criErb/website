
var gulp = require('gulp');
var util = require('gulp-util');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var browserSync = require('browser-sync');
var connect = require('gulp-connect-php');
var uglify = require('gulp-uglify');
//
// gulp.task('browser-sync', function() {
//     browserSync.init({
//       server: {
//         baseDir: 'public'
//       },
//     });
// });

gulp.task('connect', function() {
    connect.server({}, function (){
        browserSync({
            proxy: '127.0.0.1:8000/public/'
        });
    });
});

gulp.task('copy-php', function() {
  return gulp.src('source/**/*.php')
    .pipe(gulp.dest('public'));
});

gulp.task('copy-img', function() {
  return gulp.src('source/img/**/*')
    .pipe(gulp.dest('public/assets/img'));
});

gulp.task('copy-favicon', function() {
  return gulp.src('source/favicons/**/*')
  .pipe(gulp.dest('public/assets/favicons'));
});

gulp.task('copy-font', function() {
  return gulp.src('source/fonts/**/*')
    .pipe(gulp.dest('public/assets/fonts'));
});

//covert scss in css
gulp.task('build-css', function() {
  return gulp.src('source/scss/**/*.scss')
      .pipe(sourcemaps.init())
      .pipe(sass({
        outputStyle: 'compressed'
      }))
      .pipe(sourcemaps.write())
      .pipe(gulp.dest('public/assets/css'));
});


gulp.task('build-js', function() {
    return gulp.src('source/js/**/*.js')
      .pipe(sourcemaps.init())
      .pipe(concat('main.js'))
      .pipe(sourcemaps.write())
      // .pipe(uglify())
      .pipe(gulp.dest('public/assets/js'));
});

// configure the jshint task
gulp.task('jshint', function() {
  return gulp.src('source/javascript/**/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'));
});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch', function() {
  gulp.watch('source/javascript/**/*.js', ['jshint']);
  gulp.watch('source/scss/**/*.scss', ['build-css']);
  gulp.watch('source/**/*.php', ['copy-php']);
  gulp.watch('source/img/**/*', ['copy-img']);
  gulp.watch('source/**/*.php', ['copy-favicon']);
  gulp.watch('source/**/*.php', ['copy-font']);
  gulp.watch('source/**/*.js', ['build-js']);
  gulp.watch('public/**/*').on('change', browserSync.reload);
});

//define default task
gulp.task('default', ['connect', 'watch', 'build-css', 'copy-php', 'build-js', 'copy-img', 'copy-favicon', 'copy-font']);
