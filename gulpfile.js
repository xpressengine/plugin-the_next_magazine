var gulp = require('gulp')
var $ = require('gulp-load-plugins')()
var autoprefixer = require('gulp-autoprefixer')
var runSequence = require('run-sequence')

var config = {
  isProduction: !!$.util.env.production,
  useSourceMaps: !$.util.env.production
}

gulp.task('default', function (callback) {
  runSequence(
    'sass',
    callback)
})

gulp.task('sass', function () {
  return gulp.src(['./assets/src/style/*.scss', '!_*.scss'])
    .pipe($.if(config.useSourceMaps, $.sourcemaps.init()))
    .pipe($.plumber())
    .pipe($.sass({outputStyle: 'compressed'}).on('error', $.sass.logError))
    .pipe(autoprefixer({
      browsers: [
        'last 2 versions'
      ],
      cascade: false
    }))
    .pipe($.if(config.useSourceMaps, $.sourcemaps.write('.')))
    .pipe(gulp.dest('./assets'))
})

gulp.task('watch', function () {
  gulp.watch('**/*.scss', ['sass'])
})
