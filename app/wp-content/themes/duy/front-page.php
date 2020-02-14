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
																			 data-image="<?=
																			 ($room_page->image) ?>"
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
                <?php dynamic_sidebar('block-after-content'); ?>
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
			</div>
		</div>
	</div>
		<?php get_template_part('footer', 'content'); ?>
		<?php get_template_part('script'); ?>
	</body>
<?php get_footer(); ?>