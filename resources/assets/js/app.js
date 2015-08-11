'use strict';

window.$ = window.jQuery = require('jquery');
require('../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js');

$(function() {
    var burger = $('#menu-switch');
    var menu = $('#menu');

    burger.on('click', function (event) {
        event.preventDefault();
        burger.toggleClass('active');
    });

    burger.popover({
        html: true,
        placement: 'bottom',
        title: menu.data('title'),
        content: menu.html()
    });
});
