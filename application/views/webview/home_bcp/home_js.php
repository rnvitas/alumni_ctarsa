<!-- Bootstrap and Owl Carousel JavaScript -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {


        $('.slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            dots: false,
            infinite: true,
            arrows: false,
            centerMode: true,
            variableWidth: true,
        });

    });

    (function($) {
        "use strict";

        // Initialize carousel
        function initCarousel() {
            $(".owl-carousel1").owlCarousel({
                loop: true,
                center: true,
                margin: 0,
                responsiveClass: true,
                nav: false,
                dots: true, // Add this line to enable dots navigation
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    680: {
                        items: 2,
                        nav: false,
                        loop: false,
                    },
                    1000: {
                        items: 3,
                        nav: true,
                    },
                },
            });
        }

        // Call initialization function when the document is ready
        $(document).ready(function() {
            initCarousel();
        });
    })(jQuery);
</script>

<script>
    $(".donations").slick({
        slidesToShow: 3.2, // Number of slides to show initially
        slidesToScroll: 1,
        dots: false,
        speed: 300, // Number of slides to scroll at a time
        prevArrow: ".prevbutton", // Custom previous arrow button
        nextArrow: ".nextbutton", // Custom next arrow button
        responsive: [{
                breakpoint: 1200, // Change settings for screens <= 1024px wide
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 1008, // Change settings for screens <= 768px wide
                settings: {
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 800, // Change settings for screens <= 768px wide
                settings: {
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 320, // Change settings for screens <= 768px wide
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
</script>