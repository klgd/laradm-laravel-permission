const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
/*mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.css$/,
                loader: 'css-loader',
                options: {
                    modules: true,
                    getLocalIdent: (context, localIdentName, localName, options) => {
                        return 'whatever_random_class_name';
                    },
                },
            },
            {
                test: /\.less$/,
                loader: 'less-loader',
                options: {
                    javascriptEnabled: true
                }
            },
        ]
    }
});*/

mix.js('resources/js/app.js', 'public/js')
    .less('resources/less/app.less', 'public/css', {
        javascriptEnabled: true,
    })
    // .options({
        // postCss: [
        //     require('postcss-class-prefix')('laradm-', { ignore: [/ant-/, 'some-class-to-ignore']})
        // ]
    // });
    // .sass('resources/sass/app.scss', 'public/css');
