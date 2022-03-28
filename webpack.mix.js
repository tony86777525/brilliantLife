const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.sass('resources/sass/user/index.scss', 'public/assets/user/', [
//         //
//     ]);

function mixScssFiles(folder) {
    let fs = require('fs');
    var relativePath = `resources/sass${folder}`;
    var paths = fs.readdirSync(relativePath);
    for (var i = 0; i < paths.length; i++) {
        if (paths[i].indexOf('.scss') > 0 && paths[i].charAt(0) != '_') {
            var filePath = relativePath + paths[i]
            console.log(filePath);
            console.log(`public/assets/css${folder}`);
            mix.sass(filePath, `public/assets/css${folder}`);
        }
    }
}
mixScssFiles('/user/');
// mix.scripts(
//     'resources/js/**/*.js',
//     'public/assets/js/**');
