 var gulp = require('gulp'),
     browserSync = require('browser-sync'),
     sass = require('gulp-sass'),
     sourcemaps = require('gulp-sourcemaps'),
     autoprefixer = require('gulp-autoprefixer'),
     cssmin = require('gulp-minify-css'),
     imagemin     = require('gulp-imagemin'),
     cache = require('gulp-cache'),
     newer = require('gulp-newer'),
     plumber = require('gulp-plumber');

 var path = {
     build: { //Тут мы укажем куда складывать готовые после сборки файлы
         js: 'js/',
         css: '',
         img: 'assets/img/',
         svg: 'assets/svg/'
     },
     src: { //Пути откуда брать исходники
         js: 'dev/js/script.js',
         scss: 'style.scss',
         img: 'dev/assets/img/**/*.*', //Синтаксис img/**/*.* означает - взять все файлы всех расширений из папки и из вложенных каталогов
         svg: 'dev/assets/svg/**/*.*'
     },
     watch: { //Тут мы укажем, за изменением каких файлов мы хотим наблюдать
         js: 'dev/js/*.js',
         scss: 'css/**/*.scss',
         img: 'dev/assets/img/**/*.*',
         svg: 'dev/assets/svg/**/*.*',
     },
     clean: './build'
 };

 var config = {
     //proxy: 'bricks.dev',
     proxy: "localhost:8888",
     //tunnel: true,
     //host: 'localhost',
     //port: 8888,
     //logPrefix: "Frontend_Bricks",
     injectChanges: true
 };


 gulp.task('webserver', function () {
     browserSync(config);
 });


 gulp.task('scss', function () {
     gulp.src(path.src.scss) //Выберем наш main.scss
         .pipe(plumber())
         .pipe(sourcemaps.init())
         .pipe(sass()) //Скомпилируем
         .pipe(autoprefixer()) //Добавим вендорные префиксы
         .pipe(cssmin()) //Сожмем
         .pipe(sourcemaps.write())
         .pipe(gulp.dest(path.build.css)) //И в build
         .pipe(browserSync.reload({stream: true}));
 });

 /**
  * Scripts: Custom
  *
  * Look at src/js and concatenate those files, send them to assets/js where we then minimize the concatenated file.
  */

 gulp.task('js:build', function() {
     return 	    gulp.src(path.src.js)
         //.pipe(concat('custom.js'))
         .pipe(gulp.dest(path.build.js))
         // .pipe(rename( {
         //     basename: "custom",
         //     suffix: '.min'
         // }))
         // .pipe(uglify())
         // .pipe(gulp.dest('./assets/js/'))
         // .pipe(notify({ message: 'Custom scripts task complete', onLast: true }));
 });

 /**
  * Images
  *
  * Look at assets/img, optimize the images and send them to the appropriate place
  */
 gulp.task('images', function() {

// Add the newer pipe to pass through newer images only
     return 	gulp.src(path.src.img)
         .pipe(newer(path.build.img))
         ///.pipe(rimraf({ force: true }))

         .pipe(imagemin({ optimizationLevel: 7, progressive: true, interlaced: true }))
         .pipe(gulp.dest(path.build.img))
 });


 gulp.task('svg', function() {
     return gulp.src(path.src.svg)
         .pipe(imagemin())
         .pipe(gulp.dest(path.build.svg))
 });


 gulp.task('clear', function () {
     cache.clearAll();
 });


 gulp.task('watch', function(){
     gulp.watch('css/**/*.scss', ['scss']);
     gulp.watch('./*.scss', ['scss']);

     gulp.watch(path.watch.js, ['js']);
     gulp.watch(path.watch.svg, ['svg']);
     gulp.watch(path.watch.img, ['images']);
     // Other watchers
 });

 gulp.task('default', ['webserver', 'watch']);