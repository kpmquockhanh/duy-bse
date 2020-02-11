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