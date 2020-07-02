// gulp 4
var { src, dest, series, watch, parallel } = require("gulp");
var browserSync = require("browser-sync").create();
var sass = require("gulp-sass");
var concat = require("gulp-concat");
const del = require("del");
const zip = require("gulp-zip");
const imagemin = require("gulp-imagemin");

let scss = () => {
  return src("sass/*.scss")
    .pipe(sass())
    .pipe(concat("style.css"))
    .pipe(dest("css", { overwrite: true }));
};

let server = () => {
  return browserSync.init({
    proxy: "http://localhost:8888",
  });
};

let reload = (done) => {
  browserSync.reload();
  done();
};



watch(["**/*.scss"], series(scss, reload));

watch(["**/*.js", "**/*.php", "!dist"], reload);

let copyMainFiles = () => {
  return src(["*.php", "!dist/*.php", "*.css", "!dist/*.css"])
    .pipe(dest("dist", { overwrite: true }));
    
};
let copyCSSFolder = () => {
  return src("css/*.css")
    .pipe(dest("dist/css", { overwrite: true }));
    
};
let copyAssetsFolder = () => {
  return src("assets/*", "screenshot.jpg")
    .pipe(imagemin())
    .pipe(dest("dist/assets", { overwrite: true }));
    
};


function clean() {
  return del('dist/**/*');
}
function zipUp() {
  return src("dist/**/*")
    .pipe(zip("cork&canvas.zip"))
    .pipe(dest("dist"));
  
} 
function cleanAfterZip() {
  return del(["dist/**/*", "!dist/cork&canvas.zip"]);

}

exports.scss = scss;
exports.server = server;
exports.default = series(scss, server);
exports.copyFiles = series(clean, copyMainFiles, copyCSSFolder, copyAssetsFolder);
exports.finishUp = series(zipUp, cleanAfterZip);