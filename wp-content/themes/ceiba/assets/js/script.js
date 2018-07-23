(function($) {
    
    // Comprueba si el formulario debe de estar abierto
    var url = window.location.href; 
    // console.log(url, url.indexOf("wpcf7") > -1);
    if (url.indexOf("wpcf7-f28-o2") > -1) {
        $('#contactoModal').modal('show')
    }

    $("a[href='#top']").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });

    $(window).scroll(function (event) {
        var y = $(this).scrollTop(); //set position from top when to change style in pixels
        if (y >= 650) {
            // $('#navbar-id .container').addClass('resized-menu');
            $('.logo-nav').css('width', "3.5em");
        } else {
            // $('#navbar-id .container').removeClass('resized-menu');
            $('.logo-nav').css('width', "4.6em");
        }
    });

})( jQuery );