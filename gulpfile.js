/**
 * 组件安装
 * npm install gulp gulp-if gulp-rev gulp-rev-replace minimist run-sequence gulp-concat gulp-rename gulp-clean gulp-jshint gulp-uglify gulp-jsonminify gulp-ruby-sass gulp-clean-css gulp-imagemin gulp-minify-html gulp-ng-annotate gulp-sourcemaps gulp-requirejs-optimize gulp-sftp q --save-dev
 */

// 引入 gulp及组件
var gulp = require('gulp'),                   //基础库
    gulpif = require('gulp-if')              //条件执行
    rev = require('gulp-rev')                //rev
    revReplace = require('gulp-rev-replace') //rev替换
    minimist = require('minimist')            //命令行参数解析
    runSequence = require('run-sequence')    //顺序执行
    concat = require('gulp-concat'),          //合并文件
    rename = require('gulp-rename'),          //重命名
    clean = require('gulp-clean')            //清空文件夹
    // jshint = require('gulp-jshint'),          //js检查
    uglify = require('gulp-uglify'),          //js压缩
    jsonminify = require('gulp-jsonminify')  //json压缩
    sass = require('gulp-ruby-sass'),         //sass
    cleanCSS = require('gulp-clean-css'),     //css压缩
    imagemin = require('gulp-imagemin'),      //image压缩
    minifyHtml = require("gulp-minify-html") //html压缩
    ngAnnotate = require('gulp-ng-annotate'), //ng注释
    sourcemaps = require('gulp-sourcemaps'),  //source map
    requirejsOptimize = require('gulp-requirejs-optimize') //requirejs打包

const exec =require('child_process').exec
const sftp = require('gulp-sftp')
const Q = require('q')

var SRC = './resources/assets/'
var DIST = './public/assets/'
var args = minimist(process.argv.slice(2))

gulp.task('clean-js', function() {
    return gulp.src(DIST + 'js/*')
        .pipe(clean())
})

gulp.task('clean-css', function(){
    return gulp.src(DIST +'css/*')
        .pipe(clean())
})

gulp.task('clean-img', function(){
    return gulp.src(DIST + 'img/*')
        .pipe(clean())
})

gulp.task('clean-fonts', function() {
    return gulp.src(DIST + 'fonts/*')
        .pipe(clean())
})

gulp.task('clean-img', function(){
    return gulp.src(DIST + 'img/*')
        .pipe(clean())
})

gulp.task('js',['clean-js'] , function(){
    var jsSrc = SRC + 'js/**/*.js'
    var jsDst = DIST + 'js/'

    gulp.src(jsSrc)
    .pipe(gulp.dest(jsDst))
})

gulp.task('css', ['clean-css'], function(){

    //复制已存在CSS
    var cssSrc = SRC + 'css/**'
    var cssDst = DIST + 'css/'
    var sassSrc = SRC + 'sass/*.scss'

    gulp.src(cssSrc)
    .pipe(gulp.dest(cssDst))

    return sass(sassSrc, {style: 'expanded'})
        // .pipe(autoprefixer())
        .pipe(gulpif(args.release, cleanCSS()))
        .pipe(gulp.dest(cssDst))
})

gulp.task('img', ['clean-img'], function() {
    var imgSrc = SRC + 'img/**/*'
    var imgDst = DIST + 'img/'

    gulp.src(imgSrc)
        .pipe(gulp.dest(imgDst))
})

gulp.task('fonts', ['clean-fonts'], function() {
    var fontsSrc = SRC + 'fonts/**/*'
    var fontsDst = DIST + 'fonts/'

    gulp.src(fontsSrc)
        .pipe(gulp.dest(fontsDst))
})

gulp.task('phpmd', function() {
    exec('phpmd app/ html ./phpmd-rulesets/phpmd_ruleset.xml --reportfile phpmd-rulesets/reports/report.html', function(err, stdout, stderr) {
        console.log(stdout)
    })
})

gulp.task('phpdoc', function() {
    exec('phpdoc run -d app -d packages -t docs', function(err, stdout, stderr) {
        console.log(stdout)
    })
})



// 默认任务
gulp.task('default', ['js', 'css', 'img', 'fonts'],function() {
})

gulp.task('upload', () => {
    if (!args.file) {
        console.log('please spec file use "--file"')
        return
    }

    var files = args.file.split(',')
    var options = args.remotePath ? {
        remotePath: args.remotePath
    } : {}

    return upload(files, options)
})

function upload(files, options) {
    var defer = Q.defer()

    var defaultOptions = require('./public/courseList/data')
    options = Object.assign(defaultOptions, options)

    gulp.src(files)
        .pipe(sftp(options))
        .on('end', defer.resolve)
        .on('error', defer.reject)

    return defer.promise
}
