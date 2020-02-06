<script
	src="https://code.jquery.com/jquery-1.12.4.min.js"
	integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
	crossorigin="anonymous"></script>
<script type='text/javascript'
        src='https://theparkhome.vn/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://theparkhome.vn/wp-includes/js/wp-embed.min.js?ver=5.2.5'></script>
<script type="text/javascript">document.body.className = document.body.className.replace("siteorigin-panels-before-js", "");</script>
<script type='text/javascript'
        src='https://theparkhome.vn/wp-content/themes/aioframework/assets/js/page.js'></script>
<script type="text/javascript" defer>
    jQuery(document).ready(function () {
        jQuery('.ajax_image[data-image]').bind('load', img_load_complete);
        jQuery(window).bind('resize', img_loader).bind('scroll', img_loader).trigger('scroll');

        function img_loader() {
            jQuery('.ajax_image[data-image]').each(function () {
                var get_img = jQuery(this);
                if (get_img[0]) {
                    get_img.html('<img src="' + get_img.attr('data-image') + '" alt="' + get_img.attr('data-title') + '"/>').removeAttr('data-image').removeAttr('data-title');
                } else {
                    jQuery(window).unbind('resize', img_loader).unbind('scroll', img_loader);
                }
            });
        }

        function img_load_complete() {
            jQuery(this).unbind('load');
            img_loader();
        }
    });
</script>