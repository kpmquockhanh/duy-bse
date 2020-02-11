<?php
	$categories = get_terms( 'category', [
		'search' => 'tong-quan'
	]);

	$room_pages = get_posts(
		[
            'post_type' => 'page',
            'meta_key' => '_wp_page_template',
            'meta_value' => 'templates/room-introduction.php',
			'number' => 4
		]
	);
?>
<?php get_header(); ?>
	<body class="home desktop">
	<?php get_template_part('header', 'content'); ?>
	<div class="clearfix">
		<div class="content_page">
			<div id="pl-27" class="panel-layout">
				<div id="pg-27-0" class="panel-grid panel-has-style">
					<div id="banner_home" class="panel-row-style panel-row-style-for-27-0">
						<div id="pgc-27-0-0" class="panel-grid-cell">
							<div id="panel-27-0-0-0"
								 class="widget_text so-panel widget widget_custom_html panel-first-child panel-last-child"
								 data-index="0">
								<div class="textwidget custom-html-widget">
									<div id="aioslider_106">
										<div class="banner_slider_item_1">
											<div class="content_item">
												<div class="image_banner"><a href="<?= get_site_url() ?>">
														<div class="ajax_image"
															 data-image="<?= get_theme_mod('homepage_banner') ?>"
															 data-title="banner_106_1"></div>
													</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if(count($categories)): $homepage_posts = get_posts([
						'category' => $categories[0]->term_id
                ]);?>
<!--					Get post by category-->
					<?php foreach ($homepage_posts as $index => $homepage_post) : ?>
						<div class="panel-grid panel-has-style">
							<div id="<?= $index % 2 ? 'vitri' : 'gioithieu'?>" class="panel-row-style">
								<div class="panel-grid-cell">
									<div
										 class="so-panel widget widget_aio_single_image aio_single_image panel-first-child panel-last-child"
										 data-index="1">
										<div class="container panel-widget-style panel-widget-style-for-27-1-0-0">
											<div id="aio-widget-aio_single_image-2720007-template" class="aio_single_image">
												<div class="content_image">
													<figure class="featured-thumbnail thumbnail">
														<a href="<?= get_the_permalink($homepage_post->ID) ?>">
															<div class="ajax_image"
																 data-image="<?= get_the_post_thumbnail_url($homepage_post->ID)?>"
																 data-title="aio_single_image_aio-widget-aio_single_image-2720007-template"></div>
														</a></figure>
													<div class="aio_image_meta">
														<div class="widget-title"><span><?= get_the_title($homepage_post->ID) ?></span></div>
														<div class="desc">

															<div>
																<?= get_the_excerpt($homepage_post->ID) ?>
															</div>
														</div>
														<div class="read_more">
															<a href="<?= get_the_permalink($homepage_post->ID) ?>">
																<span>Xem chi tiết</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif ?>
				<div class="panel-grid panel-has-style">
					<div id="canho" class="panel-row-style panel-row-style-for-27-3">
						<div id="pgc-27-3-0" class="panel-grid-cell">
							<div id="panel-27-3-0-0"
								 class="widget_text so-panel widget widget_custom_html panel-first-child panel-last-child"
								 data-index="3">
								<div class="widget_text container panel-widget-style panel-widget-style-for-27-3-0-0">
									<div class="widget-title"><span>Căn hộ điển hình</span></div>
									<div class="textwidget custom-html-widget">
										<div class="canho canho_template_">
											<?php foreach($room_pages as $room_page): ?>
												<div class=" list_canho">
												<div class="content_item">
													<div class="col-xs-12 col-sm-6 slide_canho l_item">
														<ul class="slide_top">
                                                            <?php for($i=1; $i<=6; $i++) : ?>
                                                                <?php if($image = $room_page->{"hinh_anh_can_ho$i"} ) : ?>
																	<li>
																		<div class="ajax_image"
																			 data-image="<?= wp_get_attachment_image_url($room_page->mat_bang) ?>"
																			 data-title="Căn hộ 2 phòng ngủ">
																		</div>
																	</li>
                                                                <?php endif ?>
                                                            <?php endfor; ?>
														</ul>
													</div>
													<div class="col-xs-12 col-sm-6 r_canho">
														<div class="canho_meta">
															<div class="post-list_h">
																<a class="post-title" href="<?= get_permalink($room_page->ID) ?>" rel="bookmark" title="<?= get_the_title($room_page->ID) ?>">
																	<?= get_the_title($room_page->ID) ?>
																</a>
															</div>
															<div class="phongngu_dientich">
																<div class="sophongngu"><?= $room_page->so_phong_ngu ?> phòng ngủ</div>
																<div class="dientich"><?= $room_page->dien_tich ?> m2</div>
																<div class="chitiet">
																	<a href="<?= get_permalink($room_page->ID) ?>">
																		Xem chi tiết
																	</a>
																</div>
															</div>
															<div class="matbang_vitri">
																<div class="matbang">
																	<div class="ajax_image"
																		 data-image="<?= wp_get_attachment_image_url($room_page->mat_bang) ?>"
																		 data-title="<?= get_the_title($room_page->ID) ?>-matbang"></div>
																</div>
																<div class="vitri">
																	<div class="ajax_image"
																		 data-image="<?= wp_get_attachment_image_url($room_page->vi_tri) ?>"
																		 data-title="<?= get_the_title($room_page->ID) ?>-vitri">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="pg-27-4" class="panel-grid panel-has-style">
					<div class="chinhsach panel-row-style panel-row-style-for-27-4">
						<div id="pgc-27-4-0" class="panel-grid-cell">
							<div id="panel-27-4-0-0"
								 class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child"
								 data-index="4">
								<div class="container panel-widget-style panel-widget-style-for-27-4-0-0">
									<div class="widget-title"><span>Chính sách bán hàng</span></div>
									<div class="textwidget"></div>
								</div>
							</div>
							<div id="panel-27-4-0-1"
								 class="so-panel widget widget_siteorigin-panels-builder panel-last-child"
								 data-index="5">
								<div class="container panel-widget-style panel-widget-style-for-27-4-0-1">
									<div id="pl-w5df84ade57d4e" class="panel-layout">
										<div id="pg-w5df84ade57d4e-0" class="panel-grid panel-no-style">
											<div id="pgc-w5df84ade57d4e-0-0" class="panel-grid-cell">
												<div id="panel-w5df84ade57d4e-0-0-0"
													 class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child"
													 data-index="0">
													<div class="textwidget"><p style="text-align: center;"><span
																	style="font-size: 20px; color: #000000;"><strong>MỞ BÁN CÁC SUẤT NGOẠI GIAO, SUẤT MUA BAN ĐẦU CỦA CÁN BỘ CHIẾN SỸ</strong></span>
														</p>
														<blockquote>
															<p style="text-align: center;"><span
																		style="color: #000000;">Giá bán: <span
																			style="font-size: 24px; color: #ff0000;"><strong>38 - 40</strong></span> triệu/m2 </span><span
																		style="color: #000000;">(<em>Giá bán đã bao gồm: VAT, 2% bảo trì và nội thất cao cấp kèm theo</em>)</span>
															</p>
															<p style="text-align: center;"><span
																		style="color: #000000;"><strong>CAM KẾT GIÁ CHUẨN VÀ ƯU ĐÃI NHẤT THỊ TRƯỜNG</strong></span>
															</p>
														</blockquote>
													</div>
												</div>
											</div>
										</div>
										<div id="pg-w5df84ade57d4e-1" class="panel-grid panel-no-style">
											<div id="pgc-w5df84ade57d4e-1-0" class="panel-grid-cell">
												<div id="panel-w5df84ade57d4e-1-0-0"
													 class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child"
													 data-index="1">
													<div class="textwidget"><p><span style="color: #000000;"><strong>Tiến độ thanh toán:</strong></span>
														</p>
														<p><span style="color: #000000;">Được chia thành 6 đợt giúp khách hàng dễ dàng thanh toán:</span>
														</p>
														<ul>
															<li>
																<p><span style="color: #000000;">Đợt 1: 25% giá trị căn hộ – Khi ký HĐMB.</span>
																</p>
															</li>
															<li>
																<p><span style="color: #000000;">Đợt 2: 20% giá trị căn hộ – Khi công trình xây lên tầng 10.</span>
																</p>
															</li>
															<li>
																<p><span style="color: #000000;">Đợt 3: 15% giá trị căn hộ – Khi công trình xây lên tầng 18.</span>
																</p>
															</li>
															<li>
																<p><span style="color: #000000;">Đợt 4: 10% giá trị căn hộ – Khi công trình Cất nóc.</span>
																</p>
															</li>
															<li>
																<p><span style="color: #000000;">Đợt 5: 25% giá trị căn hộ – Khi bàn giao căn hộ quý 2/2021.</span>
																</p>
															</li>
															<li>
																<p><span style="color: #000000;">Đợt 6: 5% giá trị căn hộ – Khi tiến hành làm Sổ Hồng.</span>
																</p>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div id="pgc-w5df84ade57d4e-1-1" class="panel-grid-cell">
												<div id="panel-w5df84ade57d4e-1-1-0"
													 class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child"
													 data-index="2">
													<div class="textwidget"><p><span style="color: #000000;"><strong>Chính sách vay vốn ngân hàng:</strong></span>
														</p>
														<ul>
															<li>
																<p><span style="color: #000000;">Khách hàng có thể vay lên đến 70% giá trị căn hộ với lãi suất ưu đãi.</span>
																</p>
															</li>
															<li><span style="color: #000000;">Đối tác ngân hàng đa dạng: Vietcombank, BIDV, Techcombank, MBbank ...</span>
															</li>
															<li>
																<p><span style="color: #000000;">Hình thức pháp lý: Thế chấp bằng chính căn hộ cần mua.</span>
																</p>
															</li>
														</ul>
														<p><span style="color: #000000;"><strong>Chính sách bán hàng của chủ đầu tư:</strong></span>
														</p>
														<ul>
															<li>
																<p><span style="color: #000000;">TẶNG NGAY GÓI NỘI THẤT LÊN TỚI</span>
																	<strong><span
																				style="color: #ff0000;">60 TRIỆU ĐỒNG</span></strong>.
																</p>
															</li>
															<li>
																<p><span style="color: #000000;">CHIẾT KHẤU NGAY 3% GIÁ TRỊ CĂN HỘ KHI THANH TOÁN SỚM 95%.</span>
																</p>
															</li>
															<li>
																<p><span style="color: #000000;">HỖ TRỢ VAY LÃI SUẤT 0% TRONG 12 THÁNG<strong>.</strong></span>
																</p>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div id="pg-w5df84ade57d4e-2" class="panel-grid panel-no-style">
											<div id="pgc-w5df84ade57d4e-2-0" class="panel-grid-cell">
												<div id="panel-w5df84ade57d4e-2-0-0"
													 class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child"
													 data-index="3">
													<div class="textwidget"><p>&nbsp;</p>
														<h2 style="color: red; margin: auto; text-align: center">
                                                            <?= get_theme_mod('owner_phone') ?>
														</h2>
														<p style="text-align: center;"><span
																	style="color: #000000;"><strong>KHÁCH HÀNG LIÊN HỆ TRỰC TIẾP ĐỂ NHẬN THÔNG TIN CHUẨN GIÁ BÁN VÀ CHÍNH SÁCH MỞ BÁN</strong></span>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="pg-27-5" class="panel-grid panel-has-style">
					<div id="tienich" class="panel-row-style panel-row-style-for-27-5">
						<div id="pgc-27-5-0" class="panel-grid-cell">
							<div id="panel-27-5-0-0"
								 class="so-panel widget widget_postcustom my_posts_type_widget panel-first-child panel-last-child"
								 data-index="6">
								<div class="widget-title"><span>Tiện ích nổi bật</span></div>
								<ul class='default_post post-list unstyled'>
									<li class="wow fadeInUp list_item_1 " data-wow-delay="0.2s">
										<div class="content_item">
											<figure class="featured-thumbnail thumbnail">
												<a href="https://theparkhome.vn/khu-vuc-do-xe-rong-rai/">
													<div class="ajax_image"
														 data-image="https://theparkhome.vn/wp-content/uploads/2018/10/tien-ich-chung-cu-the-park-home-bai-xe-thong-minh-min.jpg"
														 data-title="KHU VỰC ĐỖ XE RỘNG RÃI"></div>
												</a>
											</figure>
											<div class="post-list_h"><a class="post-title"
																		href="https://theparkhome.vn/khu-vuc-do-xe-rong-rai/"
																		rel="bookmark" title="KHU VỰC ĐỖ XE RỘNG RÃI">KHU
													VỰC ĐỖ XE RỘNG RÃI</a></div>
										</div>
									</li><!--//.post-list_li -->
									<li class="wow fadeInUp list_item_2 " data-wow-delay="0.3s">
										<div class="content_item">
											<figure class="featured-thumbnail thumbnail">
												<a href="https://theparkhome.vn/he-thong-bao-mat-3-lop/">
													<div class="ajax_image"
														 data-image="https://theparkhome.vn/wp-content/uploads/2018/10/tien-ich-chung-cu-the-park-home-bao-mat-min.jpg"
														 data-title="HỆ THỐNG BẢO MẬT 3 LỚP"></div>
												</a>
											</figure>
											<div class="post-list_h"><a class="post-title"
																		href="https://theparkhome.vn/he-thong-bao-mat-3-lop/"
																		rel="bookmark" title="HỆ THỐNG BẢO MẬT 3 LỚP">HỆ
													THỐNG BẢO MẬT 3 LỚP</a></div>
										</div>
									</li><!--//.post-list_li -->
									<li class="wow fadeInUp list_item_3 " data-wow-delay="0.4s">
										<div class="content_item">
											<figure class="featured-thumbnail thumbnail">
												<a href="https://theparkhome.vn/phong-gym-chat-luong-cao/">
													<div class="ajax_image"
														 data-image="https://theparkhome.vn/wp-content/uploads/2018/10/tien-ich-chung-cu-the-park-home-gym.png"
														 data-title="PHÒNG GYM CHẤT LƯỢNG CAO"></div>
												</a>
											</figure>
											<div class="post-list_h"><a class="post-title"
																		href="https://theparkhome.vn/phong-gym-chat-luong-cao/"
																		rel="bookmark" title="PHÒNG GYM CHẤT LƯỢNG CAO">PHÒNG
													GYM CHẤT LƯỢNG CAO</a></div>
										</div>
									</li><!--//.post-list_li -->
									<li class="wow fadeInUp list_item_4 " data-wow-delay="0.5s">
										<div class="content_item">
											<figure class="featured-thumbnail thumbnail">
												<a href="https://theparkhome.vn/be-boi-bon-mua/">
													<div class="ajax_image"
														 data-image="https://theparkhome.vn/wp-content/uploads/2018/10/tien-ich-chung-cu-the-park-home-be-boi-min.jpg"
														 data-title="BỂ BƠI BỐN MÙA"></div>
												</a>
											</figure>
											<div class="post-list_h"><a class="post-title"
																		href="https://theparkhome.vn/be-boi-bon-mua/"
																		rel="bookmark" title="BỂ BƠI BỐN MÙA">BỂ BƠI BỐN
													MÙA</a></div>
										</div>
									</li><!--//.post-list_li -->
									<li class="wow fadeInUp list_item_5 " data-wow-delay="0.6s">
										<div class="content_item">
											<figure class="featured-thumbnail thumbnail">
												<a href="https://theparkhome.vn/truong-mam-non-chuan-quoc-te/">
													<div class="ajax_image"
														 data-image="https://theparkhome.vn/wp-content/uploads/2018/10/truong-mam-non-dat-chuan-quoc-gia-2-700x500.jpg"
														 data-title="TRƯỜNG MẦM NON CHUẨN QUỐC TẾ"></div>
												</a>
											</figure>
											<div class="post-list_h"><a class="post-title"
																		href="https://theparkhome.vn/truong-mam-non-chuan-quoc-te/"
																		rel="bookmark"
																		title="TRƯỜNG MẦM NON CHUẨN QUỐC TẾ">TRƯỜNG MẦM
													NON CHUẨN QUỐC TẾ</a></div>
										</div>
									</li><!--//.post-list_li -->
								</ul>
							</div>
						</div>
					</div>
				</div>
                <?php
                $chudautu = get_posts( array(
                    'name' => 'chu-dau-tu'
                ));
                ?>
                <?php if(count($chudautu)): $chudautu = $chudautu[0] ?>
				<div id="pg-27-6" class="panel-grid panel-has-style">
					<div id="chudautu" class="panel-row-style panel-row-style-for-27-6">
						<div id="pgc-27-6-0" class="panel-grid-cell">
							<div id="panel-27-6-0-0"
								 class="so-panel widget widget_aio_single_image aio_single_image panel-first-child panel-last-child"
								 data-index="7">
								<div class="container panel-widget-style panel-widget-style-for-27-6-0-0">
									<div class="widget-title"><span>Chủ đầu tư</span></div>
									<div id="aio-widget-aio_single_image-2720007-template" class="aio_single_image">
										<div class="content_image">
											<figure class="featured-thumbnail thumbnail">
												<a href="https://theparkhome.vn/chu-dau-tu/">
													<div class="ajax_image"
														 data-image="<?= get_the_post_thumbnail_url($chudautu->ID) ?>"
														 data-title="aio_single_image_aio-widget-aio_single_image-2720007-template"></div>
												</a></figure>
											<div class="aio_image_meta">
												<div class="desc">
													<?= get_the_excerpt($chudautu->ID) ?>
												</div>
												<div class="read_more">
													<a href="<?= get_permalink($chudautu->ID) ?>">
														<span>Xem chi tiết</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <?php endif; ?>
<!--				<div id="pg-27-7" class="panel-grid panel-has-style">-->
<!--					<div id="thuvienanh" class="panel-row-style panel-row-style-for-27-7">-->
<!--						<div id="pgc-27-7-0" class="panel-grid-cell">-->
<!--							<div id="panel-27-7-0-0"-->
<!--								 class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child"-->
<!--								 data-index="8">-->
<!--								<div class="container text_custom panel-widget-style panel-widget-style-for-27-7-0-0">-->
<!--									<div class="widget-title"><span>Thư viện ảnh</span></div>-->
<!--									<div class="textwidget">-->
<!--										<p style="text-align: justify;">-->
<!--											<span-->
<!--													style="font-size: 14px;">-->
<!--												<strong>-->
<!--													<a href="--><?//= get_bloginfo('url') ?><!--">CHUNG CƯ THE PARK HOME</a> - Nhà ở CBCS Cục Cảnh sát Bảo vệ Bộ công an</strong> là một trong những dự án sở hữu vị trí đắc địa tại Cầu giấy cũng như của Hà Nội. Tọa lạc ngay tại Lô N02, Ô đất D12 – Khu đô thị mới Cầu Giấy – Q. Cầu Giấy – Hà Nội nằm trên trục đường trung tâm và đẹp nhất khu vực quận Cầu Giấy hiện nay.</span>-->
<!--										</p>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div id="panel-27-7-0-1"-->
<!--								 class="so-panel widget widget_siteorigin-panels-builder panel-last-child"-->
<!--								 data-index="9">-->
<!--								<div class="container">-->
<!--									<div class="panel-layout">-->
<!--										<div class="panel-grid panel-no-style row">-->
<!--											<div class="panel-grid-cell col-xs-6 col-sm-6">-->
<!--												<div id="panel-w5db151fe0c779-0-0-0"-->
<!--													 class="widget_text so-panel widget widget_custom_html panel-first-child panel-last-child"-->
<!--													 data-index="0">-->
<!--													<div class="textwidget custom-html-widget">-->
<!--														<iframe width="560" height="360"-->
<!--																src="https://www.youtube.com/embed/kz8zeYgptIc"-->
<!--																frameborder="0"-->
<!--																allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"-->
<!--																allowfullscreen></iframe>-->
<!--													</div>-->
<!--												</div>-->
<!--											</div>-->
<!--											<div class="panel-grid-cell col-xs-6 col-sm-6">-->
<!--												<div id="panel-w5db151fe0c779-0-1-0"-->
<!--													 class="so-panel widget widget_postcustom my_posts_type_widget panel-first-child panel-last-child"-->
<!--													 data-index="1">-->
<!--													<ul class='default_post post-list unstyled'>-->
<!--														<li class="wow fadeInUp list_item_1 col-xs-6 col-sm-6 col-md-6"-->
<!--															data-wow-delay="0.2s">-->
<!--															<div class="content_item">-->
<!--																<figure class="featured-thumbnail thumbnail">-->
<!--																	<a href="https://theparkhome.vn/mau-can-ho-2-ngu-the-park-home/">-->
<!--																		<div class="ajax_image"-->
<!--																			 data-image="https://theparkhome.vn/wp-content/uploads/2018/10/can-ho-2-ngu-chung-cu-the-park-home-1-360x240.jpg"-->
<!--																			 data-title="Mẫu căn hộ cao cấp 2 ngủ"></div>-->
<!--																	</a>-->
<!--																</figure>-->
<!--																<div class="post-list_h"><a class="post-title"-->
<!--																							href="https://theparkhome.vn/mau-can-ho-2-ngu-the-park-home/"-->
<!--																							rel="bookmark"-->
<!--																							title="Mẫu căn hộ cao cấp 2 ngủ">Mẫu-->
<!--																		căn hộ cao cấp 2 ngủ</a></div>-->
<!--															</div>-->
<!--														</li><!--//.post-list_li -->-->
<!--														<li class="wow fadeInUp list_item_2 col-xs-6 col-sm-6 col-md-6"-->
<!--															data-wow-delay="0.3s">-->
<!--															<div class="content_item">-->
<!--																<figure class="featured-thumbnail thumbnail">-->
<!--																	<a href="https://theparkhome.vn/mau-can-ho-3-ngu-the-park-home/">-->
<!--																		<div class="ajax_image"-->
<!--																			 data-image="https://theparkhome.vn/wp-content/uploads/2019/10/chung-cu-the-park-home-can-ho-3-ngu-2-360x240.jpg"-->
<!--																			 data-title="Mẫu căn hộ cao cấp 3 ngủ"></div>-->
<!--																	</a>-->
<!--																</figure>-->
<!--																<div class="post-list_h"><a class="post-title"-->
<!--																							href="https://theparkhome.vn/mau-can-ho-3-ngu-the-park-home/"-->
<!--																							rel="bookmark"-->
<!--																							title="Mẫu căn hộ cao cấp 3 ngủ">Mẫu-->
<!--																		căn hộ cao cấp 3 ngủ</a></div>-->
<!--															</div>-->
<!--														</li><!--//.post-list_li -->-->
<!--														<li class="wow fadeInUp list_item_3 col-xs-6 col-sm-6 col-md-6"-->
<!--															data-wow-delay="0.4s">-->
<!--															<div class="content_item">-->
<!--																<figure class="featured-thumbnail thumbnail">-->
<!--																	<a href="https://theparkhome.vn/mau-can-ho-3-ngu-the-park-home-2/">-->
<!--																		<div class="ajax_image"-->
<!--																			 data-image="https://theparkhome.vn/wp-content/uploads/2019/10/can-ho-3-ngu-chung-cu-the-park-home-4-360x240.jpg"-->
<!--																			 data-title="Mẫu căn hộ cao cấp 3 ngủ"></div>-->
<!--																	</a>-->
<!--																</figure>-->
<!--																<div class="post-list_h"><a class="post-title"-->
<!--																							href="https://theparkhome.vn/mau-can-ho-3-ngu-the-park-home-2/"-->
<!--																							rel="bookmark"-->
<!--																							title="Mẫu căn hộ cao cấp 3 ngủ">Mẫu-->
<!--																		căn hộ cao cấp 3 ngủ</a></div>-->
<!--															</div>-->
<!--														</li><!--//.post-list_li -->-->
<!--														<li class="wow fadeInUp list_item_4 col-xs-6 col-sm-6 col-md-6"-->
<!--															data-wow-delay="0.5s">-->
<!--															<div class="content_item">-->
<!--																<figure class="featured-thumbnail thumbnail">-->
<!--																	<a href="https://theparkhome.vn/mau-can-ho-cao-cap-4-ngu-the-park-home/">-->
<!--																		<div class="ajax_image"-->
<!--																			 data-image="https://theparkhome.vn/wp-content/uploads/2019/10/chung-cu-the-park-home-can-4-ngu-1-360x240.jpg"-->
<!--																			 data-title="Mẫu căn hộ cao cấp 4 ngủ"></div>-->
<!--																	</a>-->
<!--																</figure>-->
<!--																<div class="post-list_h"><a class="post-title"-->
<!--																							href="https://theparkhome.vn/mau-can-ho-cao-cap-4-ngu-the-park-home/"-->
<!--																							rel="bookmark"-->
<!--																							title="Mẫu căn hộ cao cấp 4 ngủ">Mẫu-->
<!--																		căn hộ cao cấp 4 ngủ</a></div>-->
<!--															</div>-->
<!--														</li><!--//.post-list_li -->-->
<!--													</ul>-->
<!--												</div>-->
<!--											</div>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div id="pg-27-8" class="panel-grid panel-has-style">-->
<!--					<div id="new_home" class="panel-row-style panel-row-style-for-27-8">-->
<!--						<div id="pgc-27-8-0" class="panel-grid-cell">-->
<!--							<div id="panel-27-8-0-0"-->
<!--								 class="so-panel widget widget_postcustom my_posts_type_widget panel-first-child panel-last-child"-->
<!--								 data-index="10">-->
<!--								<div class="container panel-widget-style panel-widget-style-for-27-8-0-0">-->
<!--									<div class="widget-title"><span>Tin tức, sự kiện</span></div>-->
<!--									<ul class='default_post post-list unstyled row'>-->
<!--										<li class="wow fadeInUp list_item_1 col-xs-6 col-sm-6 col-md-4"-->
<!--											data-wow-delay="0.2s">-->
<!--											<div class="content_item">-->
<!--												<figure class="featured-thumbnail thumbnail">-->
<!--													<a href="https://theparkhome.vn/mua-can-ho-chung-cu-the-park-home-o-dau/">-->
<!--														<div class="ajax_image"-->
<!--															 data-image="https://theparkhome.vn/wp-content/uploads/2019/12/mua-can-ho-the-park-home-o-dau-360x240.jpg"-->
<!--															 data-title="Nên tìm hiểu và mua căn hộ chung cư The Park Home ở đâu ?"></div>-->
<!--													</a>-->
<!--												</figure>-->
<!--												<div class="post-list_h"><a class="post-title"-->
<!--																			href="https://theparkhome.vn/mua-can-ho-chung-cu-the-park-home-o-dau/"-->
<!--																			rel="bookmark"-->
<!--																			title="Nên tìm hiểu và mua căn hộ chung cư The Park Home ở đâu ?">Nên-->
<!--														tìm hiểu và mua căn hộ chung cư The Park Home ở đâu ?</a></div>-->
<!--												<a href="https://theparkhome.vn/mua-can-ho-chung-cu-the-park-home-o-dau/"-->
<!--												   class="btn btn-primary link">Xem thêm</a>-->
<!--											</div>-->
<!--										</li><!--//.post-list_li -->-->
<!--										<li class="wow fadeInUp list_item_2 col-xs-6 col-sm-6 col-md-4"-->
<!--											data-wow-delay="0.3s">-->
<!--											<div class="content_item">-->
<!--												<figure class="featured-thumbnail thumbnail">-->
<!--													<a href="https://theparkhome.vn/top-10-chung-cu-cao-cap-quan-cau-giay-dang-mua-nhat-2020/">-->
<!--														<div class="ajax_image"-->
<!--															 data-image="https://theparkhome.vn/wp-content/uploads/2019/11/top-10-chung-cu-cao-cap-quan-cau-giay-dang-mua-nhat-2020-360x240.jpg"-->
<!--															 data-title="TOP 10 chung cư &#8220;Cao Cấp&#8221; quận Cầu Giấy đáng mua nhất 2020"></div>-->
<!--													</a>-->
<!--												</figure>-->
<!--												<div class="post-list_h"><a class="post-title"-->
<!--																			href="https://theparkhome.vn/top-10-chung-cu-cao-cap-quan-cau-giay-dang-mua-nhat-2020/"-->
<!--																			rel="bookmark"-->
<!--																			title="TOP 10 chung cư &#8220;Cao Cấp&#8221; quận Cầu Giấy đáng mua nhất 2020">TOP-->
<!--														10 chung cư &#8220;Cao Cấp&#8221; quận Cầu Giấy đáng mua nhất-->
<!--														2020</a></div>-->
<!--												<a href="https://theparkhome.vn/top-10-chung-cu-cao-cap-quan-cau-giay-dang-mua-nhat-2020/"-->
<!--												   class="btn btn-primary link">Xem thêm</a>-->
<!--											</div>-->
<!--										</li><!--//.post-list_li -->-->
<!--										<li class="wow fadeInUp list_item_3 col-xs-6 col-sm-6 col-md-4"-->
<!--											data-wow-delay="0.4s">-->
<!--											<div class="content_item">-->
<!--												<figure class="featured-thumbnail thumbnail">-->
<!--													<a href="https://theparkhome.vn/6-chu-y-ve-dien-tich-khi-chon-mua-can-ho-chung-cu-the-park-home/">-->
<!--														<div class="ajax_image"-->
<!--															 data-image="https://theparkhome.vn/wp-content/uploads/2019/10/dien-tich-can-ho-chung-cu-the-park-home-360x240.jpg"-->
<!--															 data-title="6 Chú ý về &#8220;diện tích&#8221; khi chọn mua căn hộ chung cư The Park Home"></div>-->
<!--													</a>-->
<!--												</figure>-->
<!--												<div class="post-list_h"><a class="post-title"-->
<!--																			href="https://theparkhome.vn/6-chu-y-ve-dien-tich-khi-chon-mua-can-ho-chung-cu-the-park-home/"-->
<!--																			rel="bookmark"-->
<!--																			title="6 Chú ý về &#8220;diện tích&#8221; khi chọn mua căn hộ chung cư The Park Home">6-->
<!--														Chú ý về &#8220;diện tích&#8221; khi chọn mua căn hộ chung cư-->
<!--														The Park Home</a></div>-->
<!--												<a href="https://theparkhome.vn/6-chu-y-ve-dien-tich-khi-chon-mua-can-ho-chung-cu-the-park-home/"-->
<!--												   class="btn btn-primary link">Xem thêm</a>-->
<!--											</div>-->
<!--										</li><!--//.post-list_li -->-->
<!--										<li class="wow fadeInUp list_item_4 col-xs-6 col-sm-6 col-md-4"-->
<!--											data-wow-delay="0.5s">-->
<!--											<div class="content_item">-->
<!--												<figure class="featured-thumbnail thumbnail">-->
<!--													<a href="https://theparkhome.vn/cach-tinh-dien-tich-can-ho-chung-cu-the-park-home/">-->
<!--														<div class="ajax_image"-->
<!--															 data-image="https://theparkhome.vn/wp-content/uploads/2019/10/cach-tinh-dien-tich-chung-cu-the-park-home-360x240.jpg"-->
<!--															 data-title="Cách tính Diện tích căn hộ Chung cư The Park Home"></div>-->
<!--													</a>-->
<!--												</figure>-->
<!--												<div class="post-list_h"><a class="post-title"-->
<!--																			href="https://theparkhome.vn/cach-tinh-dien-tich-can-ho-chung-cu-the-park-home/"-->
<!--																			rel="bookmark"-->
<!--																			title="Cách tính Diện tích căn hộ Chung cư The Park Home">Cách-->
<!--														tính Diện tích căn hộ Chung cư The Park Home</a></div>-->
<!--												<a href="https://theparkhome.vn/cach-tinh-dien-tich-can-ho-chung-cu-the-park-home/"-->
<!--												   class="btn btn-primary link">Xem thêm</a>-->
<!--											</div>-->
<!--										</li><!--//.post-list_li -->-->
<!--										<li class="wow fadeInUp list_item_5 col-xs-6 col-sm-6 col-md-4"-->
<!--											data-wow-delay="0.6s">-->
<!--											<div class="content_item">-->
<!--												<figure class="featured-thumbnail thumbnail">-->
<!--													<a href="https://theparkhome.vn/8-tieu-chi-khach-hang-chon-mua-can-ho-chung-cu-the-park-home/">-->
<!--														<div class="ajax_image"-->
<!--															 data-image="https://theparkhome.vn/wp-content/uploads/2019/10/vi-tri-chung-cu-the-park-home-tien-ich-360x240.jpg"-->
<!--															 data-title="8 Tiêu chí Khách hàng quyết định chọn mua căn hộ chung cư The Park Home"></div>-->
<!--													</a>-->
<!--												</figure>-->
<!--												<div class="post-list_h"><a class="post-title"-->
<!--																			href="https://theparkhome.vn/8-tieu-chi-khach-hang-chon-mua-can-ho-chung-cu-the-park-home/"-->
<!--																			rel="bookmark"-->
<!--																			title="8 Tiêu chí Khách hàng quyết định chọn mua căn hộ chung cư The Park Home">8-->
<!--														Tiêu chí Khách hàng quyết định chọn mua căn hộ chung cư The Park-->
<!--														Home</a></div>-->
<!--												<a href="https://theparkhome.vn/8-tieu-chi-khach-hang-chon-mua-can-ho-chung-cu-the-park-home/"-->
<!--												   class="btn btn-primary link">Xem thêm</a>-->
<!--											</div>-->
<!--										</li><!--//.post-list_li -->-->
<!--										<li class="wow fadeInUp list_item_6 col-xs-6 col-sm-6 col-md-4"-->
<!--											data-wow-delay="0.7s">-->
<!--											<div class="content_item">-->
<!--												<figure class="featured-thumbnail thumbnail">-->
<!--													<a href="https://theparkhome.vn/khoi-cong-the-park-home-nha-o-can-bo-chien-sy-cuc-canh-sat-bao-ve-bo-cong-an/">-->
<!--														<div class="ajax_image"-->
<!--															 data-image="https://theparkhome.vn/wp-content/uploads/2019/10/khoi-cong-the-park-home-nha-o-can-bo-chien-sy-cuc-canh-sat-bao-ve-bo-cong-an-2-360x240.jpg"-->
<!--															 data-title="Lễ khởi công The Park Home &#8211; Nhà ở cho Cán bộ Chiến sỹ Cục Cảnh sát Bảo vệ Bộ công an"></div>-->
<!--													</a>-->
<!--												</figure>-->
<!--												<div class="post-list_h"><a class="post-title"-->
<!--																			href="https://theparkhome.vn/khoi-cong-the-park-home-nha-o-can-bo-chien-sy-cuc-canh-sat-bao-ve-bo-cong-an/"-->
<!--																			rel="bookmark"-->
<!--																			title="Lễ khởi công The Park Home &#8211; Nhà ở cho Cán bộ Chiến sỹ Cục Cảnh sát Bảo vệ Bộ công an">Lễ-->
<!--														khởi công The Park Home &#8211; Nhà ở cho Cán bộ Chiến sỹ Cục-->
<!--														Cảnh sát Bảo vệ Bộ công an</a></div>-->
<!--												<a href="https://theparkhome.vn/khoi-cong-the-park-home-nha-o-can-bo-chien-sy-cuc-canh-sat-bao-ve-bo-cong-an/"-->
<!--												   class="btn btn-primary link">Xem thêm</a>-->
<!--											</div>-->
<!--										</li><!--//.post-list_li -->-->
<!--									</ul>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
			</div>
		</div>
	</div>
		<?php get_template_part('footer', 'content'); ?>
		<?php get_template_part('script'); ?>
	</body>
<?php get_footer(); ?>