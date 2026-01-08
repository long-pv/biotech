<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biotech
 */

?>

<footer id="footer" style="background: url(https://www.ecobaent.vn/templates/images/ecoba-footer.png) no-repeat bottom center; background-size: 100% auto">
	<div class="container" id="footer_content">
		<div id="top_footer" style="background: rgba(98, 98, 98, 0.05)">
			<div class="row">
				<?php
				$footer_vi = get_field('footer_vi', 'option');
				?>
				<div class="col-md-8">
					<?php if ($footer_vi):
						$company_name  = $footer_vi['company_name'] ?? '';
						$address       = $footer_vi['head_office_address'] ?? '';
						$phone         = $footer_vi['head_office_phone'] ?? '';
						$sales_hotline = $footer_vi['sales_hotline'] ?? '';
						$om_hotline    = $footer_vi['om_hotline'] ?? '';
						$website_url   = $footer_vi['website_url'] ?? '';
						$company_email = $footer_vi['company_email'] ?? '';
					?>


						<?php if ($company_name): ?>
							<div class="title-footer">
								<p class="title"><?php echo esc_html($company_name); ?></p>
							</div>
						<?php endif; ?>

						<?php if ($address || $phone || $sales_hotline || $om_hotline || $website_url || $company_email): ?>
							<div class="mota-lienhe">
								<table style="width:100%" cellspacing="0" cellpadding="0">
									<tbody>
										<?php if ($address): ?>
											<tr>
												<td><strong>Địa chỉ</strong></td>
												<td>: <?php echo esc_html($address); ?></td>
											</tr>
										<?php endif; ?>

										<?php if ($phone): ?>
											<tr>
												<td><strong>Điện thoại</strong></td>
												<td>
													: <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $phone)); ?>">
														<?php echo esc_html($phone); ?>
													</a>
												</td>
											</tr>
										<?php endif; ?>

										<?php if ($sales_hotline): ?>
											<tr>
												<td><strong>Hotline KD</strong></td>
												<td>
													: <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $sales_hotline)); ?>">
														<?php echo esc_html($sales_hotline); ?>
													</a>
												</td>
											</tr>
										<?php endif; ?>

										<?php if ($om_hotline): ?>
											<tr>
												<td><strong>Dịch vụ O&amp;M</strong></td>
												<td>
													: <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $om_hotline)); ?>">
														<?php echo esc_html($om_hotline); ?>
													</a>
												</td>
											</tr>
										<?php endif; ?>

										<?php if ($website_url): ?>
											<tr>
												<td><strong>Website</strong></td>
												<td>
													: <a href="<?php echo esc_url($website_url); ?>">
														<?php echo esc_html($website_url); ?>
													</a>
												</td>
											</tr>
										<?php endif; ?>

										<?php if ($company_email): ?>
											<tr>
												<td><strong>Email</strong></td>
												<td>
													: <a href="mailto:<?php echo esc_attr($company_email); ?>">
														<?php echo esc_html($company_email); ?>
													</a>
												</td>
											</tr>
										<?php endif; ?>

									</tbody>
								</table>
							</div>
						<?php endif; ?>
					<?php endif; ?>
				</div>

				<div class="col-md-4" style="margin-bottom: 15px">
					<div class="title-footer title-mobile">
						<p class="title">ĐĂNG KÝ TƯ VẤN</p>
					</div>
					<div class="form-dangky">
						<?php
						$consultation_form  = get_field('footer_vi_consultation_form', 'option') ?? '';
						if ($consultation_form) :
							echo $consultation_form;
						endif;
						?>
					</div>

					<?php
					$fanpage_title = get_field('footer_vi_fanpage_title', 'option');
					$fanpage_link  = get_field('footer_vi_fanpage_link', 'option');

					if ($fanpage_link) :
					?>
						<div class="title-footer">
							<p class="title">FANPAGE</p>
						</div>
						<div>
							<div class="fb-page"
								data-href="<?php echo esc_url($fanpage_link); ?>"
								data-tabs="timeline"
								data-width=""
								data-height="250"
								data-small-header="false"
								data-adapt-container-width="true"
								data-hide-cover="false"
								data-show-facepile="true">

								<blockquote cite="<?php echo esc_url($fanpage_link); ?>" class="fb-xfbml-parse-ignore">
									<a href="<?php echo esc_url($fanpage_link); ?>" rel="nofollow external noopener noreferrer">
										<?php echo esc_html($fanpage_title); ?>
									</a>
								</blockquote>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- top_footer -->

		<div id="bottom_footer" class="bgopa" style="padding: 0px">
			<div class="container">
				<!-- CỘT 1: GIỚI THIỆU -->
				<div class="col-md-2 col-xs-6">
					<p class="title">Giới thiệu</p>
					<ul id="menu-mn-aboutus" class="list">
						<?php if (have_rows('footer_vi_footer_col_about')) : ?>
							<?php while (have_rows('footer_vi_footer_col_about')) : the_row();
								$link = get_sub_field('link');
								if ($link) :
							?>
									<li class="menu-item">
										<a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>">
											<?php echo esc_html($link['title']); ?>
										</a>
									</li>
							<?php endif;
							endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>

				<!-- CỘT 2: DỰ ÁN -->
				<div class="col-md-2 col-xs-6 min-mobile" style="min-height: 250px">
					<p class="title">Dự án</p>
					<ul id="menu-mn-footer-project" class="list">
						<?php if (have_rows('footer_vi_footer_col_project')) : ?>
							<?php while (have_rows('footer_vi_footer_col_project')) : the_row();
								$link = get_sub_field('link');
								if ($link) :
							?>
									<li class="menu-item">
										<a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>">
											<?php echo esc_html($link['title']); ?>
										</a>
									</li>
							<?php endif;
							endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>

				<!-- CỘT 3: DỊCH VỤ - SẢN PHẨM -->
				<div class="col-md-3 col-xs-6">
					<p class="title">Dịch vụ - Sản phẩm</p>
					<ul id="menu-mn-footer-sp" class="list">
						<?php if (have_rows('footer_vi_footer_col_service')) : ?>
							<?php while (have_rows('footer_vi_footer_col_service')) : the_row();
								$link = get_sub_field('link');
								if ($link) :
							?>
									<li class="menu-item">
										<a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>">
											<?php echo esc_html($link['title']); ?>
										</a>
									</li>
							<?php endif;
							endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>

				<!-- CỘT 4: CÔNG NGHỆ XỬ LÝ -->
				<div class="col-md-3 col-xs-6">
					<p class="title">Công nghệ xử lý</p>
					<ul id="menu-mn-footer-tech" class="list">
						<?php if (have_rows('footer_vi_footer_col_technology')) : ?>
							<?php while (have_rows('footer_vi_footer_col_technology')) : the_row();
								$link = get_sub_field('link');
								if ($link) :
							?>
									<li class="menu-item">
										<a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>">
											<?php echo esc_html($link['title']); ?>
										</a>
									</li>
							<?php endif;
							endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>

				<!-- CỘT 5: TÀI LIỆU -->
				<div class="col-md-2 col-xs-6">
					<p class="title">Tài liệu</p>
					<ul id="menu-mn-footer-download" class="list">
						<?php if (have_rows('footer_vi_footer_col_document')) : ?>
							<?php while (have_rows('footer_vi_footer_col_document')) : the_row();
								$link = get_sub_field('link');
								if ($link) :
							?>
									<li class="menu-item">
										<a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>">
											<?php echo esc_html($link['title']); ?>
										</a>
									</li>
							<?php endif;
							endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- bottom_footer -->
	</div>
</footer>
<!-- footer -->

<section style="background: #005228">
	<?php
	$footer_vi = get_field('footer_vi', 'option');
	?>
	<div class="container" id="copyright" style="padding: 2px 15px 3px">
		<span class="pull-left">
			<?php
			if (isset($footer_vi['copyright_text']) && $footer_vi['copyright_text']) {
				echo esc_html($footer_vi['copyright_text']);
			}
			?>
		</span>

		<span class="pull-right" style="padding: 15px 0px;">

			<?php if (isset($footer_vi['facebook']) && $footer_vi['facebook']) : ?>
				<a rel="nofollow external noopener noreferrer"
					href="<?php echo esc_url($footer_vi['facebook']); ?>"
					target="_blank">
					<img src="<?php echo THEME_URI; ?>/dist/images/facebook.png" alt="Facebook" />
				</a>
			<?php endif; ?>

			<?php if (isset($footer_vi['youtube']) && $footer_vi['youtube']) : ?>
				<a rel="nofollow"
					href="<?php echo esc_url($footer_vi['youtube']); ?>"
					target="_blank">
					<img src="<?php echo THEME_URI; ?>/dist/images/youtube.png" alt="Youtube" />
				</a>
			<?php endif; ?>

			<?php if (isset($footer_vi['twitter']) && $footer_vi['twitter']) : ?>
				<a rel="nofollow"
					href="<?php echo esc_url($footer_vi['twitter']); ?>"
					target="_blank">
					<img src="<?php echo THEME_URI; ?>/dist/images/twitter.png" alt="Twitter" />
				</a>
			<?php endif; ?>

		</span>
	</div>
</section>

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php echo THEME_URI; ?>/dist/js/jquery.form.min.js"></script>
<script type="text/javascript" src="<?php echo THEME_URI; ?>/dist/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo THEME_URI; ?>/dist/js/postviews-cache.js"></script>
<script type="text/javascript" src="<?php echo THEME_URI; ?>/dist/js/tabby.js"></script>
<link rel="stylesheet" id="tabby-print-css" href="<?php echo THEME_URI; ?>/dist/css/tabby-print.css" type="text/css" media="all" />
<link rel="stylesheet" id="tabby-css" href="<?php echo THEME_URI; ?>/dist/css/tabby.css" type="text/css" media="all" />
<script>
	jQuery(document).ready(function($) {
		RESPONSIVEUI.responsiveTabs();
	});
</script>

<script>
	var read_more = "Xem thêm";
</script>

<script type="text/javascript" src="<?php echo THEME_URI; ?>/dist/js/jquery-2.1.1.min.js"></script>

<script src="<?php echo THEME_URI; ?>/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo THEME_URI; ?>/dist/js/myscript.js"></script>

<script src="<?php echo THEME_URI; ?>/dist/js/jquery.hc-sticky.js"></script>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true" style="z-index: 99999">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div><iframe width="100%" height="350" src="" frameborder="0" allowfullscreen=""></iframe></div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo THEME_URI; ?>/dist/js/jquery.slimscroll.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$("#menu_top").hcSticky({
			top: -1,
			bottomEnd: 100,
			wrapperClassName: "sidebar-sticky"
		});

		$("#menu_mobile").hcSticky({
			top: 1,
			bottomEnd: 100,
			wrapperClassName: "sidebar-sticky"
		});

		autoPlayYouTubeModal();

		function autoPlayYouTubeModal() {
			var trigger = $("body").find('[data-toggle="modal"]');

			trigger.click(function() {
				var theModal = $(this).data("target"),
					videoSRC = $(this).attr("data-theVideo"),
					videoSRCauto = videoSRC + "?autoplay=1";

				$(theModal + " iframe").attr("src", videoSRCauto);

				$(theModal + " button.close").click(function() {
					$(theModal + " iframe").attr("src", videoSRC);
				});
			});
		}

		$("#inner-content-div").slimScroll({
			height: "200px",
			wheelStep: 20,
			alwaysVisible: true
		});
	});
</script>
<script type="text/javascript" src="<?php echo THEME_URI; ?>/dist/js/owl.carousel.js"></script>
<script src="<?php echo THEME_URI; ?>/dist/js/jssor.slider-24.1.5.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo THEME_URI; ?>/dist/js/index.js"></script>
<script type="text/javascript" src="<?php echo THEME_URI; ?>/dist/js/gistfile1.js"></script>
<script type="text/javascript">
	jssor_1_slider_init();
</script>
<link rel="stylesheet" href="<?php echo THEME_URI; ?>/dist/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="<?php echo THEME_URI; ?>/dist/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
			theme: "light_square",
			social_tools: false
		});
	});
</script>

<style>
	div.ppt,
	.pp_description {
		display: none !important;
	}
</style>

</body>

</html>