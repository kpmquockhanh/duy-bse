<?php
/*
 Template Name: Room introduction
 */
?>
<?php $tienIch = get_field('tien_ich'); ?>
<?php the_post(); ?>
<?php get_header() ?>
<body class="">
<?php get_template_part('header', 'content'); ?>
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
							<div class="sophongngu"><?= get_field('so_phong_ngu') ?> phòng ngủ</div>
							<div class="dientich"><?= get_field('dien_tich') ?> m2</div>
						</div>
						<div class="tienich_canho">
							<div class="title"><span>Tiện ích</span></div>
							<div class="content_tienich">
								<ul>
									<?php foreach($tienIch as $item) : ?>
										<li><?= $item ?></li>
									<?php endforeach; ?>
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
				<?php if($image = get_field( "hinh_anh_can_ho$i" )) : ?>
					<li class="wow fadeInUp col-xs-6 col-sm-4">
						<a href="#"
						   class="zoom_img">
							<div class="ajax_image"
								 data-image="<?= $image ?>"
								 data-title=""></div>
						</a>
					</li>
				<?php endif ?>
			<?php endfor; ?>
		</ul>
	</div>
	<div class="next_prew">
		<div class="container">
			<?php if($prevPost = get_previous_post()) : ?>
				<div class="prew_post">
					<a class="post_title" href="<?= get_post_permalink($prevPost->ID) ?>">
						<label><i class="fa fa-reply"></i></label>
						<span><?= $prevPost->post_title ?></span>
					</a>
				</div>
			<?php endif; ?>
			<?php if($nextPost = get_next_post()) : ?>
				<div class="next_post">
					<a class="post_title" href="<?= get_post_permalink($nextPost->ID) ?>">
						<label><i class="fa fa-share"></i></label>
						<span><?= $nextPost->post_title ?></span>
					</a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_template_part( 'footer', 'content' ); ?>
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
