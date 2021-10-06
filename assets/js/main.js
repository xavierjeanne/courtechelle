jQuery(document).ready(function() {

    new WOW().init();
    /**
     * Smooth scrolling to page anchor on click
     **/
    jQuery("a[href*='#']:not([href='#'])").click(function() {
        if (location.hostname == this.hostname && this.pathname.replace(/^\//, "") == location.pathname.replace(/^\//, "")) {
            var anchor = $(this.hash);
            anchor = anchor.length ? anchor : jQuery("[name=" + this.hash.slice(1) + "]");
            if (anchor.length) {
                anchor = anchor.offset().top;
                anchor = anchor - 100;
                jQuery("html, body").animate({ scrollTop: anchor }, 1300);

                return false;
            }
        }
    });





    /**
     *
     * Slider paghe d'accueil Partenaires
     */
    jQuery("#partenaires").owlCarousel({
        items: 1,
        loop: true,
        margin: 100,
        autoplay: true,
        autoWidth: true,
        center: true,
        autoplayTimeout: 3000,
        pagination: true,
        responsive: {
            600: {
                items: 2,
            },
            1000: {
                items: 5,
            },
        },
    });

});