jQuery(document).ready(function(){
// Tooltip
// Back to Top
// ---------------------------------------------------------
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 60) {
			jQuery('#aio_backtop').fadeIn();
			jQuery('.midle_header').addClass('fixed_header');
		} else {
			jQuery('#aio_backtop').fadeOut();
			jQuery('.midle_header').removeClass('fixed_header');
		}
	});
	jQuery('#aio_backtop').click(function () {
		jQuery('body,html').stop(false, false).animate({
			scrollTop: 0
		}, 800);
		return false;
	});
///////
// ---------------------------------------------------------
// ---------------------------------------------------------
jQuery(function(){
	jQuery('#aio_menu_mobile ul li.menu-item-has-children').append("<span>+</span>");
	jQuery('#aio_menu_mobile ul li.menu-item-has-children span').click(function(){
		jQuery(this).closest("li.menu-item-has-children").find('ul.sub-menu').slideUp(300);
				if (!jQuery(this).closest("li.menu-item-has-children").hasClass('active')) {
				  jQuery(this).closest("li.menu-item-has-children").removeClass('active');
				  jQuery(this).closest("li.menu-item-has-children").addClass('active');
				  jQuery(this).html("-");
				  jQuery('#aio_menu_mobile ul .active').find('ul:first').stop().slideDown(300);
				}
				else
				  if (jQuery(this).closest("li.menu-item-has-children").hasClass('active')) {
				  	jQuery(this).html("+");
					  jQuery(this).closest("li.menu-item-has-children").find('ul').slideUp(300);
					  jQuery(this).closest("li.menu-item-has-children").removeClass('active');
				}
	});
});
jQuery(function(){
	jQuery(".icon_mobile_click").click(function(){
		jQuery(this).fadeOut(300);
		jQuery('.close_menu').fadeIn(300);
		jQuery('.bg_menu_mobile').fadeIn(300);
		jQuery(".icon_mobile_active").fadeIn(300);
		jQuery("#aio_page_wapper").addClass('aio_page_wapper_active');
		jQuery("#aio_menu_mobile").addClass('menu_show').stop().animate({left: "0px"},260);
	});
	jQuery(".close_menu").click(function(){
		jQuery(this).fadeOut(100);
		jQuery('.bg_menu_mobile').fadeOut(300);
		jQuery('.icon_mobile_active').fadeOut(300);
		jQuery(".icon_mobile_click").fadeIn(300);
		jQuery("#aio_menu_mobile").animate({left: "-480px"},260).removeClass('menu_show');
		jQuery("#aio_page_wapper").removeClass('aio_page_wapper_active');
	});
	jQuery(".bg_menu_mobile").click(function(){
		jQuery(this).fadeOut(300);
		jQuery('.close_menu').fadeOut(300);
		jQuery('.icon_mobile_active').fadeOut(300);
		jQuery(".icon_mobile_click").fadeIn(300);
		jQuery("#aio_menu_mobile").animate({left: "-480px"},260).removeClass('menu_show');
		jQuery("#aio_page_wapper").removeClass('aio_page_wapper_active');
	});
});
/////
// ---------------------------------------------------------
// Contact form notvalid tip fadeOut
// ---------------------------------------------------------
jQuery(function() {
  // clear cf7 error msg on mouseover
	jQuery(".wpcf7-form-control-wrap").on("mouseover", function(){
		jQuery("span.wpcf7-not-valid-tip", this).fadeOut();
	});
});
});
function scroll_to(div){
	jQuery('html, body').animate({scrollTop: jQuery(div).offset().top-20},1000);
}