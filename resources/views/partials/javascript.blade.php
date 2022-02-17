<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<!--script src="assets/vendor/php-email-form/validate.js"></!--script-->

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<!--for flipcard-->
<script>
    $(document).ready(function () {
        var front = document.getElementsByClassName("front");
        var back = document.getElementsByClassName("back");

        var highest = 0;
        var absoluteSide = "";

        for (var i = 0; i < front.length; i++) {
            if (front[i].offsetHeight > back[i].offsetHeight) {
                if (front[i].offsetHeight > highest) {
                    highest = front[i].offsetHeight;
                    absoluteSide = ".front";
                }
            } else if (back[i].offsetHeight > highest) {
                highest = back[i].offsetHeight;
                absoluteSide = ".back";
            }
        }
        $(".front").css("height", highest);
        $(".back").css("height", highest);
        $(absoluteSide).css("position", "absolute");
    });

</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-D4F8H5W87Y"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-D4F8H5W87Y');

</script>
