/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

global.$ = global.jQuery = $;

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

import '@pugx/autocompleter-bundle/js/autocompleter-jqueryui';

require('jquery-ui/ui/widgets/autocomplete');
require('jquery-ui/themes/base/all.css');

$(document).ready(function() {
    console.log('jquery loaded in app.js file');
});
