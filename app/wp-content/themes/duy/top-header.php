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
					<label>Đường dây nóng:</label><span>0917.349.123</span>
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
<!--			<nav class="hidden-xs nav nav__primary clearfix">-->
<!--				<ul id="topnav" class="sf-menu">-->
<!--					<li id="menu-item-132"-->
<!--					    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-27 current_page_item menu-item-132">-->
<!--						<a href="https://theparkhome.vn/" aria-current="page">Trang chủ</a></li>-->
<!--					<li id="menu-item-372"-->
<!--					    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-372"><a-->
<!--							href="https://theparkhome.vn/vi-tri-the-park-home/">Vị trí</a></li>-->
<!--					<li id="menu-item-135"-->
<!--					    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-135"><a-->
<!--							href="https://theparkhome.vn/tien-ich-the-park-home/">Tiện ích</a></li>-->
<!--					<li id="menu-item-137"-->
<!--					    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137"><a-->
<!--							href="https://theparkhome.vn/mat-bang-the-park-home/">Căn hộ</a></li>-->
<!--					<li id="menu-item-375"-->
<!--					    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-375"><a-->
<!--							href="https://theparkhome.vn/gia-ban-the-park-home/">Giá bán</a></li>-->
<!--					<li id="menu-item-134"-->
<!--					    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-134"><a-->
<!--							href="https://theparkhome.vn/lien-he-mua-the-park-home/">Liên hệ</a></li>-->
<!--				</ul>-->
<!--			</nav>-->
		</div>
	</div>
</header>