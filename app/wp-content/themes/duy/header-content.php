<header class="aio_wrapper header header_desktop">
	<div class="midle_header">
		<div class="container">
			<div class="logo">
				<a href="<?= get_bloginfo('url'); ?>" class="logo_link">
					<img class="logo_img"
					     src="<?= get_theme_mod('owner_logo') ?>"
					     alt="<?= get_bloginfo('url'); ?>">
				</a>
			</div>
			<div class="hotline_number">
				<a href="tel:<?= get_theme_mod('owner_phone') ?>">
					<label>Đường dây nóng:</label><span><?= get_theme_mod('owner_phone') ?></span>
				</a>
			</div>
			<?php
			wp_nav_menu( [
				'theme_location' => 'header-menu',
				'container' => 'nav',
				'container_class' => 'nav__primary clearfix hidden-xs',
				'menu_class' => 'sf-menu',
				'menu_id' => 'topnav',
				'fallback_cb' => false
			]); ?>
		</div>
	</div>
</header>