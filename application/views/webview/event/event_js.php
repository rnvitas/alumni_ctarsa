<script>
    $(document).ready(function() {
        myEvents = [{
                id: "required-id-1",
                name: "New Year",
                date: "2023-09-30",
                type: "holiday",
                everyYear: true
            },
            {
                id: "required-id-2",
                name: "Valentine's Day",
                date: "2023-09-14",
                type: "holiday",
                everyYear: true,
                color: "#222"
            },
            {
                id: "required-id-3",
                name: "Custom Date",
                badge: "08/03 - 08/05",
                date: ["2023-12-23", "2023-12-25"],
                description: "Description here",
                type: "event"
            },
            // more events here
        ];

        $('#evoCalendar').evoCalendar({
            calendarEvents: myEvents

        });



        $(".eventcard").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            prevArrow: ".prevbutton", // Custom previous arrow button
            nextArrow: ".nextbutton",
            speed: 300,
            autoplay: true,
            autoplaySpeed: 5000,
        });
    });
</script>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->