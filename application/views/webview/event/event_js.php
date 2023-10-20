<script>
    $(document).ready(function() {



        $('.eventcard').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            prevArrow: ".prevbutton-event", // Custom previous arrow button
            nextArrow: ".nextbutton-event",
            speed: 300,
            autoplay: true,
            autoplaySpeed: 5000,
        });

        // var myEvents =[];
        // $.ajax({
        //     type: 'GET',
        //     dataType: "JSON",
        //        url: "<?php echo site_url('event/getDate') ?>",
        //                         success: function(data) {
        //                             jQuery.each(data, function(i, data) {
        //                                 alert(JSON.stringify(data.date_event));
        //                                 myEvents = [{
        //                                 id: "required-id-1",
        //                                 name: "New Year",
        //                                 date: JSON.stringify(data.date_event),
        //                                 type: "event",
        //                                 everyYear: true
        //                                 },
        //                                 ];
        //                             });
        //                            }
        //         });

        myEvents = [
            <?php
            $now = date("Y-m-d");
            foreach ($events as $r) {
            ?> {
                    id: "required-id-1",
                    name: "<?php echo $r->title; ?>",
                    date: "<?php echo $r->date_event; ?>",
                    <?php if ($now > $r->date_event) { ?>
                        type: "holiday",
                    <?php } else if ($now <= $r->date_event) { ?>
                        type: "event",
                    <?php } ?>
                    description: "<?php echo substr($r->description, 0, 30) . '...'; ?>"

                },
            <?php } ?>

        ];

        $('#calendar').evoCalendar({
            calendarEvents: myEvents,
            theme: 'Royal Navy',
            // todayHighlight: true,


        });

    });

    // var btnContainer = document.getElementById("portfolio-filters");
    // var btns = btnContainer.getElementsByClassName("filter-event");
    // for (var i = 0; i < btns.length; i++) {
    //     btns[i].addEventListener("click", function() {
    //         var current = document.getElementsByClassName("filter-active");
    //         current[0].className = current[0].className.replace(" filter-active", "");
    //         this.className += " filter-active";
    //     });
    // }
</script>

<script>
    $('#type0,#type1,#type2').click(function(e) {
        e.preventDefault();
        var value = $(this).val();
        var uri = "<?php echo $this->uri->segment(2); ?>";
        var val_se = $('#search').val();

        //condtion if category have search
        if (uri == 'search') {
            if (value == 'All') {
                url = "<?php echo site_url('event/search?se=') ?>" + val_se,
                    window.location = url;

            } else {
                url = "<?php echo site_url('event/search?se=') ?>" + val_se + '&ev=' + value, //accommodate search and sort category
                    window.location = url;
            }
        } else {
            url = "<?php echo site_url('event/type?ev=') ?>" + value,
                window.location = url;
        }

    });

    // search
    $(function() {

        $('#sec').change(function(e) {
            var value = $(this).find('#search').val();

            //   alert(value);

            var uri = "<?php echo $this->uri->segment(2); ?>";
            var val_e = "<?php echo $this->input->get('ev'); ?>";

            //condtion if search have category
            if (value == '') {
                url = "<?php echo site_url('event') ?>",
                    window.location = url;

            } else {

                if (uri == 'type') {
                    if (value == 'All') {
                        url = "<?php echo site_url('event/search?se=') ?>" + value,
                            window.location = url;

                    } else {
                        url = "<?php echo site_url('event/search?se=') ?>" + value + '&ev=' + val_e, //accommodate search and sort category
                            window.location = url;

                    }
                } else {
                    url = "<?php echo site_url('event/search?se=') ?>" + value,
                        window.location = url;

                }
            }

        });
    });
</script>