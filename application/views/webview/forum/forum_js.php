<script>
    // Add active class to the current button (highlight it)
    // var header = document.getElementById("cont-button");
    // var btns = header.getElementsByClassName("btn-outline-primary");
    // for (var i = 0; i < btns.length; i++) {
    //     btns[i].addEventListener("click", function() {
    //         var current = document.getElementsByClassName("btnnya-active");
    //         if (current.length > 0) {
    //             current[0].className = current[0].className.replace(" btnnya-active", "");
    //         }
    //         this.className += " btnnya-active";
    //     });
    // }
</script>

<script>
    var header1 = document.getElementById("filter-forum");
    var btns1 = header1.getElementsByClassName("btn-outline-primary");
    for (var j = 0; j < btns1.length; j++) {
        btns1[j].addEventListener("click", function() {
            var current1 = document.getElementsByClassName("btnnya-actived");
            if (current1.length > 0) {
                current1[0].className = current1[0].className.replace(" btnnya-actived", "");
            }
            this.className += " btnnya-actived";
        });
    }
</script>