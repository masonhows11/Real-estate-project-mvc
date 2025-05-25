<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-migrate.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/aos.min.js"></script>

<script src="assets/js/ckeditor.min.js"></script>

<script src="assets/js/select2-js.min.js"></script>

<script src="assets/js/video-popup.min.js"></script>

<script src="assets/js/swiper-slider.min.js"></script>

<script src="assets/js/waypoints.min.js"></script>

<script src="assets/js/jquery.counterup.min.js"></script>

<script src="assets/js/easing.min.js"></script>

<script src="assets/js/active.js"></script>
<script>
    var swiper = new Swiper(".homec-slider-agent", {
        autoplay: {
            delay: 344500,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        mousewheel: true,
        keyboard: true,
        loop: true,
        grabCursor: true,
        spaceBetween: 30,
        centeredSlides: false,
        pagination: {
            el: ".swiper-pagination__agent",
            type: "bullets",
            clickable: true,
        },
        slidesPerView: "4",
        breakpoints: {
            320: {
                slidesPerView: "1",
            },
            428: {
                slidesPerView: "2",
            },
            640: {
                slidesPerView: "2",
            },
            768: {
                slidesPerView: "3",
            },
            1024: {
                slidesPerView: "4",
            },
        },
    });
</script>
