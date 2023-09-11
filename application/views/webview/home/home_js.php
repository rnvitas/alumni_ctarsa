<!-- Bootstrap and Owl Carousel JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script>
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