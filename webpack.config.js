const Encore = require('@symfony/webpack-encore');
const path = require('path');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    .setOutputPath(path.resolve(__dirname, "./public/build"))
    .setPublicPath('/build/')
    .cleanupOutputBeforeBuild([path.resolve(__dirname, "./public/build")])
    .addEntry('app', './assets/js/app.js')
    .enableSingleRuntimeChunk()
    .enableVersioning(Encore.isProduction())
    .addLoader({test: /\.stache$/,   loader: 'can-stache-loader'})
    .configureBabel((config) => {
        config.plugins.push('@babel/plugin-proposal-class-properties')
    })
    .addAliases({
        '@': path.resolve(__dirname, 'assets/js')
    })
    .enableBuildNotifications()
;

module.exports = Encore.getWebpackConfig();
