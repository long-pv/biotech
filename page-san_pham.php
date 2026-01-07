<?php

/**
 * Template name: Sản phẩm
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

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="overflow: hidden">
				<div class="breadcrumb" vocab="http://rdf.data-vocabulary.org/#">
					<span typeof="v:Breadcrumb">
						<a rel="v:url" property="v:title" href="<?php echo home_url('/'); ?>">
							<i class="glyphicon glyphicon-home"></i><?php _e('Trang chủ', 'biotech'); ?>
						</a>
					</span>
					/
					<span class="current">
						<?php the_title(); ?>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="project" id="product_detail">
	<div class="container">
		<div class="row custom-project-list">
			<div class="col-xs-12 col-sm-3 col-md-3 col_left">
				<?php
				$args = [
					'post_type'      => 'post',
					'posts_per_page' => 5,
					'post_status'    => 'publish',
					'orderby'        => 'date',
					'order'          => 'DESC',
				];

				$query = new WP_Query($args);
				?>

				<div class="box box-tintuc">
					<div class="title">
						<h3>
							<?php _e('Tin tức mới nhất', 'biotech'); ?>
						</h3>
					</div>

					<div class="boxlink">
						<ul>
							<?php if ($query->have_posts()) : ?>
								<?php while ($query->have_posts()) : $query->the_post(); ?>
									<li>
										» <a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</li>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
				</div>

				<?php wp_reset_postdata(); ?>
				<br clear="all" />
			</div>

			<?php
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;

			$args = [
				'post_type'      => 'san_pham',
				'post_status'    => 'publish',
				'posts_per_page' => 9, // 3 cột x 3 hàng
				'paged'          => $paged,
			];

			$query = new WP_Query($args);
			?>

			<div class="col-xs-12 col-sm-9 col-md-9">
				<div class="title3">
					<h1 class="custom-detail">Sản phẩm</h1>
				</div>

				<?php if ($query->have_posts()) : ?>
					<div class="row" style="padding-bottom: 7px">
						<?php
						$i = 0;
						while ($query->have_posts()) : $query->the_post();
							$i++;
						?>
							<div class="col-xs-12 col-sm-6 col-md-4 project-box">
								<div class="pic">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
										<?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('medium', ['class' => 'pic-image']);
										}
										?>
									</a>
								</div>

								<h5>
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h5>
							</div>

							<?php
							// Sau mỗi 3 item thì xuống dòng
							if ($i % 3 == 0) {
								echo '</div><div class="row" style="padding-bottom: 7px">';
							}
							?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

				<br clear="all" />

				<!-- PAGINATION -->
				<?php if ($query->max_num_pages > 1) : ?>
					<div id="pagination">
						<nav>
							<ul class="pagination">
								<?php
								$big = 999999999;

								$links = paginate_links([
									'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
									'format'    => 'page/%#%/',
									'current'   => max(1, $paged),
									'total'     => $query->max_num_pages,
									'type'      => 'array',
									'prev_text' => '<',
									'next_text' => '>',
								]);

								if ($links) :
									foreach ($links as $link) :
										if (strpos($link, 'current') !== false) {
											echo '<li class="active"><span>' . strip_tags($link) . '</span></li>';
										} else {
											echo '<li class="after">' . str_replace('page-numbers', '', $link) . '</li>';
										}
									endforeach;
								endif;
								?>
							</ul>
						</nav>
					</div>
				<?php endif; ?>
			</div>

			<?php wp_reset_postdata(); ?>

		</div>
	</div>
</section>

<br clear="all" />

<?php
get_footer();
