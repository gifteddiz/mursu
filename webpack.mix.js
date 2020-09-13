/*
 * amst uses Laravel Mix
 *
 * Check the documentation at
 * https://laravel.com/docs/5.6/mix
 */

let mix = require("laravel-mix");

// BrowserSync and LiveReload on `npm run watch` command
// Update the `proxy` and the location of your SSL Certificates if you're developing over HTTPS
mix.browserSync({
  proxy: "http://mursu.test/",
  // https: {
  //   key: "/your/certificates/location/your-local-domain.key",
  //   cert: "/your/certificates/location/your-local-domain.crt"
  // },
  files: ["**/*.html", "css/**/*.css", "js/**/*.js"],
  injectChanges: true,
  open: false,
});

// Autloading jQuery to make it accessible to all the packages, because, you know, reasons
// You can comment this line if you don't need jQuery
mix.autoload({
  jquery: ["$", "window.jQuery", "jQuery"],
});

mix.setPublicPath("./");

// Compile assets
mix.js("js/index.js", "js/final.js").sass("css/style.scss", "css/").options({
  processCssUrls: false,
});

// Add versioning to assets in production environment
if (mix.inProduction()) {
  mix.version();
}
