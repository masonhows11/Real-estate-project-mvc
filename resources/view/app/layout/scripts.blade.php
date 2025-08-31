<script src="<?= asset('app_assets/js/jquery-3.7.1.min.js') ?>"></script>
<script src="<?= asset('app_assets/js/jquery-migrate.js') ?>"></script>
<script src="<?= asset('app_assets/js/jquery-ui.min.js') ?>"></script>

<script src="<?= asset('app_assets/js/bootstrap.min.js') ?>"></script>

<script src="<?= asset('app_assets/js/aos.min.js') ?>"></script>

<script src="<?= asset('app_assets/js/ckeditor.min.js') ?>"></script>

<script src="<?= asset('app_assets/js/select2-js.min.js') ?>"></script>

<script src="<?= asset('app_assets/js/video-popup.min.js') ?>"></script>

<script src="<?= asset('app_assets/js/swiper-slider.min.js') ?>"></script>

<script src="<?= asset('app_assets/js/flex-slider.js') ?>"></script>


<script src="<?= asset('app_assets/js/waypoints.min.js') ?>"></script>

<script src="<?= asset('app_assets/js/jquery.counterup.min.js') ?>"></script>

<script src="<?= asset('app_assets/js/easing.min.js') ?>"></script>

<script src="<?= asset('app_assets/js/active.js') ?>"></script>


<script type="text/javascript">
    $(window).load(function () {
        //  if (jQuery) {
        // jQuery is loaded
        //   alert("Yeah!");
        // } else {
        // jQuery is not loaded
        //  alert("Doesn't Work");
        //}

        $("#f1").flexslider({
            animation: "fade",
            controlNav: false,
            directionNav: false,
            start: function (slider) {
                $("body").removeClass("loading");
            },
        });

        $("#f2").flexslider({
            animation: "slide",
            animationLoop: true,
            itemWidth: 200,
            itemMargin: 0,
            pausePlay: false,
            mousewheel: true,
            asNavFor: ".flexslider",
            controlNav: false,
            move: 1,
            pauseOnAction: false,
            slideshow: false,
            manualControls: true,
        });

    });
</script>
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
