$(document).ready( function(){
    $(".alert-message").animate({ 'height':'toggle','opacity':'toggle'});
    window.setTimeout( function(){
        $(".alert-message").slideUp();
    }, 2500);
});

