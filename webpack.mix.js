const mix = require("laravel-mix");

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

mix.styles(
    [
        "resources/views/site/css/default/layout.css",
        "resources/views/site/css/default/header.css",
        "resources/views/site/css/home.css",
    ],
    "public/site/css/style.css"
)
    .scripts(
        ["resources/views/site/js/default/header.js"],
        "public/site/js/script.js"
    )
    .styles(["resources/views/site/css/home.css"], "public/site/css/home.css")
    .scripts(["resources/views/site/js/home.js"], "public/site/js/home.js")
    .styles(
        ["resources/views/calculator/css/rulesOfThree.css"],
        "public/calculator/css/rulesOfThree.css"
    )
    .scripts(
        ["resources/views/calculator/js/rulesOfThree.js"],
        "public/calculator/js/rulesOfThree.js"
    )
    .styles(
        ["resources/views/calculator/css/index.css"],
        "public/calculator/css/index.css"
    )
    .sass("resources/sass/app.scss", "public/site/css/fontawesome.css")
    .version();
