/*  ==========================================================================
    Global
    ==========================================================================  */

var domain = $("body").data("domain");
var baseroot = $("body").data("baseroot");

$(document).ready(function() {

/*  ==========================================================================
    Menu
    ==========================================================================  */

    $('.js_menu_close').on('click', function(e){
        e.preventDefault();
        $('.menu').removeClass('menu--open');
    });

    $('.js_menu_open').on('click', function(e){
        e.preventDefault();
        $('.menu').addClass('menu--open');
    });

});
