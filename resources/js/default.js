import 'owl.carousel/dist/assets/owl.carousel.css';

import 'owl.carousel';

$(document).ready(function() {

    if (window.location.pathname === '/profile') {
        $("nav.navbar").css('background', '#fff');
        $("nav.navbar").css('box-shadow', "2px 2px 8px black");
        $(".navbar-brand").css('color', "#000");
        $(".nav-link").css('color', "#000");
        $(".nav-item.active .nav-link").css('color', "gray");
    }
    $(document).on('scroll', function() {

        if (window.location.pathname !== '/profile') {
            if (pageYOffset > 60) {
                $("nav.navbar").css('background', '#fff');
                $("nav.navbar").css('box-shadow', "2px 2px 8px black");
                $(".navbar-brand").css('color', "#000");
                $(".nav-link").css('color', "#000");
                $(".nav-item.active .nav-link").css('color', "gray");

            } else {
                $("nav.navbar").css('background', 'transparent');
                $("nav.navbar").css('box-shadow', "none");
                $(".navbar-brand").css('color', "#fff");
                $(".nav-link").css('color', "#fff");
                $(".nav-item.active .nav-link").css('color', "#000");
            }
        } else {
            $("nav.navbar").css('background', '#fff');
            $("nav.navbar").css('box-shadow', "2px 2px 8px black");
            $(".navbar-brand").css('color', "#000");
            $(".nav-link").css('color', "#000");
            $(".nav-item.active .nav-link").css('color', "gray");
        }
    });

    /// niceScroll

    $("html").niceScroll({
        zindex: 3,
        cursorborder: 0,
        background: "white",
        cursorcolor: "#00FF00",
        cursorwidth: "8px",
        border: 0,
        overflowX: "hidden",
        cursorborderradius: 0,
    });


    $(document).on('click', 'div.footer-back', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, '500');
    });

    setTimeout(() => {

        $('div.preloader').fadeOut();

    }, 300);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});