<?php the_post(); ?>
<?php get_header() ?>
	<body data-rsssl=1 class="page-template-default">
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
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div id="content_page" class="wow fadeInUp content_page">
				<?= get_the_content() ?>
			</div>
		</div>
	</div>
	<?php get_template_part('footer', 'content'); ?>
	<div id="aio_backtop" class="visible-desktop"></div>
	<div class="fixed_custom_contact">
		<ul>
			<li class="chat_facebook"><a href="https://m.me/Uocdn" target="_blank"></a></li>
			<li class="call_zalo"><a href="http://zalo.me/<?= get_theme_mod('owner_phone')?>" target="_blank"><?= get_theme_mod('owner_phone')?></a></li>
			<li class="call_phone">
				<a href="tel:<?= get_theme_mod('owner_phone')?>">
					<div class="phone_animation">
						<div class="phone_animation_circle_fill_img"></div>
					</div>
				</a>
			</li>
		</ul>
	</div>
	<?php get_template_part( 'script' ); ?>
	<!--Style-->
	</body>
<?php get_footer(); ?>