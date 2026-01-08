<?php

/**
 * Template name: Trang chủ
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package biotech
 */

get_header();
?>

<?php
// ===== LẤY DỮ LIỆU ACF AN TOÀN =====
$marquee = get_field('marquee');
$marquee = is_array($marquee) ? $marquee : [];

$scroll_speed = isset($marquee['scroll_speed']) ? $marquee['scroll_speed'] : 5;
$marquee_content = isset($marquee['content']) ? $marquee['content'] : '';
?>

<section id="slider">
	<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 462px; overflow: hidden; visibility: hidden">
		<div data-u="loading" style="position: absolute; top: 0px; left: 0px; background: url('<?php echo THEME_URI; ?>/dist/images/loading.gif') no-repeat 50% 50%; background-color: rgba(0, 0, 0, 0.7)"></div>

		<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 462px; overflow: hidden">

			<?php if (have_rows('home_slider')) : ?>
				<?php while (have_rows('home_slider')) : the_row();
					$image = get_sub_field('image');
					$link  = get_sub_field('link');
				?>
					<div>
						<a href="<?php echo esc_url($link); ?>" data-wpel-link="internal">
							<img data-u="image" src="<?php echo esc_url($image); ?>" alt="" />
						</a>
						<div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 1; background: rgba(4, 4, 4, 0.35); height: 38px; font-size: 20px; color: #fff; text-align: left; padding: 5px"></div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>

		<div data-u="navigator" class="jssorb01" style="bottom: 16px; right: 16px">
			<div data-u="prototype" style="width: 12px; height: 12px"></div>
		</div>

		<span data-u="arrowleft" class="jssora05l" style="top: 0px; left: 8px; width: 40px; height: 40px" data-autocenter="2"></span>
		<span data-u="arrowright" class="jssora05r" style="top: 0px; right: 8px; width: 40px; height: 40px" data-autocenter="2"></span>
	</div>

	<nav class="marquee" style="width: 100%; padding: 15px 0px; height: 60px; background: #005228">
		<marquee
			behavior="scroll"
			scrollamount="<?php echo esc_attr($scroll_speed); ?>"
			direction="left"
			width="100%">

			<div class="pointer" style="font-size: 22px; color: #faffbd">

				<?php echo wp_kses_post($marquee_content); ?>
			</div>
		</marquee>
	</nav>
</section>


<main>
	<section id="top_content" style="padding-top: 13px; padding-bottom: 8px; clear: both">
		<div class="container">
			<h2 class="title_main text-upper"></h2>

			<div id="sl_duan">
				<?php
				$args = [
					'post_type'      => 'du_an',
					'post_status'    => 'publish',
					'posts_per_page' => -1,
					'orderby'        => 'date',
					'order'          => 'DESC',
				];

				$duan_query = new WP_Query($args);

				if ($duan_query->have_posts()):
					while ($duan_query->have_posts()):
						$duan_query->the_post();

						$link  = get_permalink();
						$title = get_the_title();

						// Ảnh đại diện
						if (has_post_thumbnail()) {
							$image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
						} else {
							$image = THEME_URI . '/dist/images/no-image.png'; // fallback nếu thiếu ảnh
						}
				?>
						<div class="wrap_duan">
							<div class="box_duan pic">
								<a href="<?php echo esc_url($link); ?>">
									<img
										class="pic-image"
										src="<?php echo esc_url($image); ?>"
										alt="<?php echo esc_attr($title); ?>" />
								</a>
							</div>

							<a href="<?php echo esc_url($link); ?>">
								<h3 style="text-transform: capitalize">
									<p><?php echo esc_html($title); ?></p>
								</h3>
							</a>

							<p class="mota"></p>
						</div>
				<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>
			<!-- sl_duan -->
		</div>
	</section>

	<!-- top_content -->
	<section id="bottom_content" style="padding: 8px 0px 0px 0px">
		<div class="container">
			<div id="col_blog" class="col-md-8" style="padding: 0px">
				<h2 class="title text-upper">Tin tức mới</h2>

				<?php
				// ===== BÀI VIẾT CHÍNH =====
				$main_query = new WP_Query([
					'post_type'      => 'post',
					'post_status'    => 'publish',
					'posts_per_page' => 1,
				]);

				if ($main_query->have_posts()):
					while ($main_query->have_posts()):
						$main_query->the_post();

						$link    = get_permalink();
						$title   = get_the_title();
						$thumb   = has_post_thumbnail()
							? get_the_post_thumbnail_url(get_the_ID(), 'medium')
							: THEME_URI . '/dist/images/no-image.png';
						$excerpt = get_the_excerpt();
				?>

						<div id="blog_main" class="col-md-6">
							<a href="<?php echo esc_url($link); ?>">
								<img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($title); ?>" />
								<h3><?php echo esc_html($title); ?></h3>
							</a>

							<a href="<?php echo esc_url($link); ?>" style="text-decoration: none">
								<p class="mota"></p>
								<p><?php echo esc_html($excerpt); ?></p>
								<p></p>
							</a>
						</div>

				<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>

				<?php
				// ===== DANH SÁCH BÀI VIẾT =====
				$list_query = new WP_Query([
					'post_type'      => 'post',
					'post_status'    => 'publish',
					'posts_per_page' => 6,
					'offset'         => 1,
				]);

				if ($list_query->have_posts()):
				?>
					<div id="blog_list" class="col-md-6">
						<ul id="sl_blog_list">
							<?php
							while ($list_query->have_posts()):
								$list_query->the_post();

								$link    = get_permalink();
								$title   = get_the_title();
								$thumb   = has_post_thumbnail()
									? get_the_post_thumbnail_url(get_the_ID(), 'medium')
									: THEME_URI . '/dist/images/no-image.png';
								$excerpt = get_the_excerpt();
							?>
								<li>
									<a href="<?php echo esc_url($link); ?>">
										<img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($title); ?>" />
										<h3><?php echo esc_html($title); ?></h3>
									</a>

									<div class="mota-1">
										<a href="<?php echo esc_url($link); ?>" style="text-decoration: none">
											<?php echo esc_html($title); ?>
										</a>
									</div>

									<div class="mota-hidden">
										<a href="<?php echo esc_url($link); ?>" style="text-decoration: none">
											<p><?php echo esc_html($excerpt); ?></p>
										</a>
									</div>
								</li>
							<?php endwhile; ?>
						</ul>

						<?php
						$view_all_link = get_field('blog_view_all_link');

						if ($view_all_link):
						?>
							<a class="xemtatca pull-right" style="margin: 0 0 10px"
								href="<?php echo esc_url($view_all_link); ?>">
								» Xem tất cả
							</a>
						<?php endif; ?>
					</div>
				<?php
					wp_reset_postdata();
				endif;
				?>
			</div>

			<!-- col_blog -->
			<div class="col-md-4">
				<?php
				$operate_desc        = get_field('operate_desc');
				$operate_btn_1_text  = get_field('operate_btn_1_text');
				$operate_btn_1_link  = get_field('operate_btn_1_link');
				$operate_btn_2_text  = get_field('operate_btn_2_text');
				$operate_btn_2_link  = get_field('operate_btn_2_link');
				?>

				<div class="box operate">
					<p class="title title-bg clearfix os-tuyendart w3danima">
						Hợp tác cùng Ecoba ENT
					</p>

					<div>
						<div class="media pad15">
							<div class="media-body">
								<?php if ($operate_desc): ?>
									<?php echo wp_kses_post($operate_desc); ?>
								<?php endif; ?>
							</div>
						</div>

						<div class="text-center button-link">
							<?php if ($operate_btn_1_text && $operate_btn_1_link): ?>
								<a class="btn btn-primary"
									style="width: 148px"
									href="<?php echo esc_url($operate_btn_1_link); ?>">
									<?php echo esc_html($operate_btn_1_text); ?>
								</a>
							<?php endif; ?>

							<?php if ($operate_btn_2_text && $operate_btn_2_link): ?>
								<a class="btn btn-primary"
									style="width: 148px"
									href="<?php echo esc_url($operate_btn_2_link); ?>">
									<?php echo esc_html($operate_btn_2_text); ?>
								</a>
							<?php endif; ?>
						</div>
					</div>
				</div>

				<?php
				$hotline_list = get_field('hotline_list');

				if ($hotline_list):
				?>
					<div id="col_video">
						<p class="title">Hotline</p>

						<div>
							<?php foreach ($hotline_list as $item):
								$text = $item['text'] ?? '';
								$tel  = $item['tel'] ?? '';
								if (!$text || !$tel) continue;
							?>
								<div style="font-size: 19px">
									<a href="tel:<?php echo esc_attr($tel); ?>">
										<p><?php echo esc_html($text); ?></p>
									</a>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>

				<?php
				$video_list = get_field('video_list');

				if ($video_list):
				?>
					<div id="col_video">
						<p class="title">VIDEO</p>

						<ul id="list_video" class="list_video">
							<?php foreach ($video_list as $video):
								$iframe = $video['iframe'] ?? '';
								if (!$iframe) continue;
							?>
								<li>
									<div class="list_video_item">
										<?php echo $iframe; ?>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>

				<style>
					.list_video .list_video_item {
						width: 100%;
						height: 0px;
						padding-bottom: 56.25%;
						position: relative;
						overflow: hidden;
					}

					.list_video .list_video_item iframe {
						position: absolute;
						width: 100% !important;
						height: 100% !important;
						top: 0px;
						left: 0px;
					}
				</style>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	<!-- bottom_content -->
	<?php
	$args = array(
		'post_type'      => 'khach_hang_doi_tac',
		'posts_per_page' => -1,
		'post_status'    => 'publish',
	);

	$query = new WP_Query($args);

	if ($query->have_posts()):
	?>
		<section>
			<div class="container" style="margin-top: -14px">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 os-tuyendart">
						<div class="title-underline">
							<h3>khách hàng - đối tác</h3>
						</div>

						<div id="owl-demo3" class="owl-carousel">
							<?php
							while ($query->have_posts()):
								$query->the_post();

								$link = get_field('link_post');
								$link = $link ? esc_url($link) : 'javascript:void(0);';

								if (!has_post_thumbnail()) continue;

								$img = get_the_post_thumbnail_url(get_the_ID(), 'full');
								$title = get_the_title();
							?>
								<div class="item col-xs-11" style="padding: 0px 7px">
									<a href="<?php echo $link; ?>">
										<img src="<?php echo esc_url($img); ?>"
											alt="<?php echo esc_attr($title); ?>" />
									</a>
								</div>
							<?php endwhile; ?>
						</div>

					</div>
				</div>
			</div>
		</section>
	<?php
		wp_reset_postdata();
	endif;
	?>

</main>

<?php
get_footer();
?>