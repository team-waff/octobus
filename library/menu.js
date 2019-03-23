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

/*  ==========================================================================
    Popup
    ==========================================================================  */

    function openPopup(popup) {
        $('body').addClass('no_scroll');
        $('.popup').removeClass('popup--visible');
        $('.popup[data-popup='+popup+']').addClass('popup--visible');
    };

    function closePopup(popup) {
        $('body').removeClass('no_scroll');
        $('.popup[data-popup='+popup+']').removeClass('popup--visible');
    };

    $('.js_open_popup').on('click', function(e){
        e.preventDefault();
        var popup = $(this).data('popup');
        openPopup(popup);
    });

    $('.js_close_popup').on('click', function(e){
        e.preventDefault();
        var popup = $(this).data('popup');
        closePopup(popup);
    });

});
