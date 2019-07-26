let mix = require('laravel-mix');
let build = require('./tasks/build.js');
let tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch([
            "source/**/*.md",
            "source/**/*.php",
            "source/**/*.scss",
            "!source/**/_tmp/*"
        ])
    ],
    watchOptions: {
        ignored: /node_modules/
    }
});

mix.sass('source/_assets/sass/app.scss', 'css').options({
    processCssUrls: false,
    postCss: [tailwindcss('tailwind.config.js')]
}).version();

mix.js('source/_assets/js/app.js', 'js');

mix.copyDirectory(
    'node_modules/@fortawesome/fontawesome-free/webfonts',
    'source/assets/webfonts'
);

mix.purgeCss({
    folders: ['source']
});
