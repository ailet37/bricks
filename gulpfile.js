 var gulp = require('gulp'),
 rigger = require('gulp-rigger'),
 browserSync = require('browser-sync'),
 sass = require('gulp-sass'),
 sourcemaps = require('gulp-sourcemaps'),
 autoprefixer = require('gulp-autoprefixer'),
 cssmin = require('gulp-minify-css'),
 svgo = require('gulp-svgo'),
 imagemin     = require('gulp-imagemin'),
 cache = require('gulp-cache'),
 plumber = require('gulp-plumber');

 var path = {
     build: { //Тут мы укажем куда складывать готовые после сборки файлы
         html: 'build/',
         js: 'js/',
         css: '',
         img: 'assets/img/',
         svg: 'assets/svg/',
         fonts: 'assets/fonts/'
     },
     src: { //Пути откуда брать исходники
         html: 'dev/*.html', //Синтаксис src/*.html говорит gulp что мы хотим взять все файлы с расширением .html
         js: 'dev/js/script.js',//В стилях и скриптах нам понадобятся только main файлы
         scss: 'style.scss',
         img: 'dev/assets/img/**/*.*', //Синтаксис img/**/*.* означает - взять все файлы всех расширений из папки и из вложенных каталогов
         svg: 'dev/assets/svg/**/*.*',
         fonts: 'dev/assets/fonts/**/*.*'
     },
     watch: { //Тут мы укажем, за изменением каких файлов мы хотим наблюдать
         html: 'dev/**/*.html',
         js: 'dev/js/*.js',
         scss: 'css/**/*.scss',
         img: 'dev/assets/img/**/*.*',
         svg: 'dev/assets/svg/**/*.*',
         fonts: 'dev/assets/fonts/**/*.*'
     },
     clean: './build'
 };

 var config = {
     server: {
         baseDir: "./build"
     },
     tunnel: true,
     host: 'localhost',
     port: 8888,
     logPrefix: "Frontend_Bricks"
 };


 gulp.task('webserver', function () {
     browserSync(config);
 });


 gulp.task('html:build', function () {
     gulp.src(path.src.html) //Выберем файлы по нужному пути
         .pipe(rigger()) //Прогоним через rigger
         .pipe(gulp.dest(path.build.html)) //Выплюнем их в папку build
         .pipe(browserSync.reload({stream: true})); //И перезагрузим наш сервер для обновлений
 });


 gulp.task('scss:build', function () {
     gulp.src(path.src.scss) //Выберем наш main.scss
         .pipe(plumber())
         .pipe(sourcemaps.init())
         .pipe(sass()) //Скомпилируем
         .pipe(autoprefixer()) //Добавим вендорные префиксы
         //.pipe(cssmin()) //Сожмем
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
  * Look at src/images, optimize the images and send them to the appropriate place
  */
 gulp.task('images', function() {

// Add the newer pipe to pass through newer images only
     return 	gulp.src(path.src.img)
         //.pipe(newer('./assets/img/'))
         ///.pipe(rimraf({ force: true }))
         .pipe(imagemin({ optimizationLevel: 7, progressive: true, interlaced: true }))
         .pipe(gulp.dest(path.build.img))
 });


 gulp.task('svg', function() {
     gulp.src(path.src.svg)
         .pipe(gulp.dest(path.build.svg))
 });

 gulp.task('fonts:build', function() {
     gulp.src(path.src.fonts)
         .pipe(gulp.dest(path.build.fonts))
 });

 gulp.task('clear', function () {
     cache.clearAll();
 });



 gulp.task('build', [
     'html:build',
     'js:build',
     'scss:build',
     'fonts:build',
     'svg',
     'images'
 ]);


 gulp.task('watch', function(){
     gulp.watch('css/*.scss', ['scss:build']);
     gulp.watch('*.scss', ['scss:build']);
     gulp.watch('dev/blocks/**/*.scss', ['scss:build']);
     gulp.watch(path.watch.js, ['js:build']);
     gulp.watch(path.watch.svg, ['svg']);
     gulp.watch(path.watch.img, ['images']);
     // Other watchers
 });

 gulp.task('default', ['webserver', 'watch']);