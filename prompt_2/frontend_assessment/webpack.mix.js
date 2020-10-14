let mix = require('laravel-mix');

/*
 * Sets the development path to assets. By default, this is the `/resources`
 * folder in the theme.
 */
const devPath = 'app/';

mix.setPublicPath('public/assets/dist');

/*
 * Add custom Webpack configuration.
 *
 * Laravel Mix doesn't currently minimize images while using its `.copy()`
 * function, so we're using the `CopyWebpackPlugin` for processing and copying
 * images into the distribution folder.
 *
 * @link https://laravel.com/docs/5.6/mix#custom-webpack-configuration
 * @link https://webpack.js.org/configuration/
 */
mix.webpackConfig({
    stats: 'minimal',
    devtool: mix.inProduction() ? false : 'source-map',
    performance: { hints: false },
    externals: { jquery: 'jQuery' }
});

/*
 * Compile JavaScript.
 *
 * @link https://laravel.com/docs/5.6/mix#working-with-scripts
 */

// CREATE
mix.js(`${ devPath }/js/Create/create-autoloader.es6.js`, 'js');

// PROFILE
mix.js(`${ devPath }/js/Profile/profile-autoloader.es6.js`, 'js');

// PROFILE
mix.js(`${ devPath }/js/Dashboard/dashboard-autoloader.es6.js`, 'js');

// General UI elements used across the entire site
mix.js(`${ devPath }/js/UI/ui-autoloader.es6.js`, 'js');


/*
 * Builds sources maps for assets.
 *
 * @link https://laravel.com/docs/5.6/mix#css-source-maps
 */
mix.sourceMaps();


/*
 * Versioning and cache busting. Append a unique hash for production assets. If
 * you only want versioned assets in production, do a conditional check for
 * `mix.inProduction()`.
 *
 * @link https://laravel.com/docs/5.6/mix#versioning-and-cache-busting
 */
mix.version();