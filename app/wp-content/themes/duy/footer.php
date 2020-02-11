</html>
<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/js/all.min.js" integrity="sha256-0vuk8LXoyrmCjp1f0O300qo1M75ZQyhH9X3J6d+scmk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    jQuery('#aioslider_106').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: false,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 4000,
    });

</script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#canho ul.slide_top').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
        ////
        jQuery('#new_home ul').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
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
        ////
        jQuery('#tienich ul.default_post').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true
        });
    });
</script>