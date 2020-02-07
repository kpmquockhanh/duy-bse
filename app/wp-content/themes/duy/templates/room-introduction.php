<?php
/*
 Template Name: Room introduction
 */
?>
<?php the_post(); ?>
<?php get_header() ?>
<body class="">
<header class="aio_wrapper header header_desktop">
	<div class="midle_header">
		<div class="container">
			<div class="logo">
				<a href="https://theparkhome.vn/" class="logo_link">
					<img class="logo_img"
						 src="https://theparkhome.vn/wp-content/uploads/2019/10/logo-the-park-home.jpg"
						 alt="theparkhome.vn">
				</a>
			</div>
			<div class="hotline_number">
				<a href="tel:0913.909.155">
					<label>Đường dây nóng:</label><span>0913.909.155</span>
				</a>
			</div>
			<nav class="hidden-xs nav nav__primary clearfix">
				<ul id="topnav" class="sf-menu">
					<li id="menu-item-132"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-132">
						<a href="https://theparkhome.vn/">Trang chủ</a></li>
					<li id="menu-item-372"
						class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-370 current_page_item menu-item-372">
						<a href="https://theparkhome.vn/vi-tri-the-park-home/" aria-current="page">Vị trí</a></li>
					<li id="menu-item-135"
						class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-135"><a
								href="https://theparkhome.vn/tien-ich-the-park-home/">Tiện ích</a></li>
					<li id="menu-item-137"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137"><a
								href="https://theparkhome.vn/mat-bang-the-park-home/">Căn hộ</a></li>
					<li id="menu-item-375"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-375"><a
								href="https://theparkhome.vn/gia-ban-the-park-home/">Giá bán</a></li>
					<li id="menu-item-134"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-134"><a
								href="https://theparkhome.vn/lien-he-mua-the-park-home/">Liên hệ</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<div class="aio_wrapper aio_content_page">
	<div class="background_product_cat">
		<div class="has_thumbnail">
			<div class="ajax_image" data-image="<?= get_the_post_thumbnail_url() ?>"
				 data-title="Vị trí The Park Home"></div>
			<div class="wow fadeInUp duongdan" data-wow-delay="0.2s">
				<div class="container">
					<section class="title-section">
						<h1 class="entry-title title-header">
								<span>
									<?= get_the_title() ?>
								</span>
						</h1>
					</section><!-- .title-section -->
					<?php
					if ( function_exists( 'yoast_breadcrumb' ) ) {
						yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<div id="content_page" class="content_page">
		<div class="container">
			<div class="row top_canho">
				<div class="wow fadeInUp col-xs-12 col-sm-6" data-wow-delay="0.3s">
					<div class="tab_canho">
						<div class="tab_chitiet">
							<div id="tabs_list">
								<ul>
									<li class="active"><a class="title" alt="#matbang">Mặt bằng</a></li>
									<li class=""><a class="title" alt="#vitri">Vị trí</a></li>
								</ul>
							</div>
							<div class="tab_content_container">
								<div id="matbang" class="content_tab">
									<a href="#"
									   class="zoom_large cboxElement">
										<img src="<?php the_field( 'mat_bang' ) ?>"
											 alt="Mặt bằng">
									</a>
								</div>
								<div id="vitri" class="content_tab" style="display: none;">
									<a href="#"
									   class="zoom_large cboxElement">
										<img src="<?php the_field( 'vi_tri' ) ?>"
											 alt="Vị trí">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wow fadeInUp col-xs-12 col-sm-6" data-wow-delay="0.5s">
					<div class="canho_meta">
						<div class="phongngu_dientich">
							<div class="sophongngu">2 phòng ngủ</div>
							<div class="dientich">80 m2</div>
						</div>
						<div class="tienich_canho">
							<div class="title"><span>Tiện ích</span></div>
							<div class="content_tienich">
								<ul>
									<li>Sàn gỗ Janmi</li>
									<li>Chuông Honeywell</li>
									<li>Báo cháy Simplex</li>
									<li>Điều hòa Mitsubishi</li>
									<li>Kính hộp hệ Xingfa</li>
									<li>Trần thạch cao Zinca</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="wow fadeInUp noidung" data-wow-delay="0.2s">
			</div>
		</div>
	</div>
	<div class="container hinhanh">
		<div class="wow fadeInUp title_hinhanh" data-wow-delay="0.2s">Hình ảnh căn hộ</div>
		<ul class="row image_single">
			<?php for($i=1; $i<=6; $i++) : ?>
				<li class="wow fadeInUp col-xs-6 col-sm-4">
					<a href="#"
					   class="zoom_img">
						<div class="ajax_image"
							 data-image="<?php the_field( "hinh_anh_can_ho$i" ) ?>"
							 data-title="Căn hộ 2 phòng ngủ2"></div>
					</a>
				</li>
			<?php endfor; ?>
		</ul>
	</div>
	<div class="next_prew">
		<div class="container">
			<div class="prew_post">
				<a class="post_title" href="https://theparkhome.vn/can-ho-3-phong-ngu-86-m2/">
					<label><i class="fa fa-reply"></i></label>
					<span>Căn hộ 3 phòng ngủ 86 m2</span>
				</a>
			</div>
		</div>
	</div>
</div>
<?php get_template_part( 'footer', 'content' ); ?>
<div id="aio_backtop" class="visible-desktop"></div>
<div class="fixed_custom_contact">
	<ul>
		<li class="chat_facebook"><a href="https://m.me/Uocdn" target="_blank"></a></li>
		<li class="call_zalo"><a href="http://zalo.me/0913.909.155" target="_blank">0913.909.155</a></li>
		<li class="call_phone">
			<a href="tel:0913.909.155">
				<div class="phone_animation">
					<div class="phone_animation_circle_fill_img"></div>
				</div>
			</a>
		</li>
	</ul>
</div>
<?php get_template_part( 'script' ); ?>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery("#tabs_list ul li ").click(function () { //Khai báo sự kiện khi click vào một tab nào đó
            var activeTab = jQuery(this).children('a').attr("alt");
            jQuery("#tabs_list ul li ").removeClass("active");
            jQuery(this).addClass("active");
            jQuery(".content_tab").hide();
            jQuery(activeTab).stop().show();
        });
    }); //////////////
</script>
<!--Style-->
</body>
<?php get_footer(); ?>
