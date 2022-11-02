jQuery(document).ready(function($){
    $('.mainmanu ul#primary-menu').slicknav({
        allowParentLinks: true,
        prependTo: '.striknav'
    });
});
jQuery(window).load(function(){
    jQuery(".preloader-wrapper").fadeOut();
});