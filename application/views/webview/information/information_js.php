<script type="text/javascript">
    $(document).ready(function() {
        $('.sliders').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        $('.slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            dots: true,
            infinite: true,
            arrows: true,
            centerMode: true,
            variableWidth: true,
        });

        $('.sliders').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true,
            variableHeight: true,
            arrows: false,

        });



    });
</script>