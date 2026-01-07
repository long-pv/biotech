<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package biotech
 */

get_header();
?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="overflow: hidden">
				<div class="breadcrumb">
					<a href="<?php echo home_url('/'); ?>">
						<i class="glyphicon glyphicon-home"></i><?php _e('Trang chủ', 'biotech'); ?>
					</a>

					<?php
					$categories = get_the_category();

					if (!empty($categories)) {
						$cat = $categories[0];

						if ($cat->parent != 0) {
							$parent = get_category($cat->parent);
							echo ' / <a href="' . get_category_link($parent->term_id) . '">' . esc_html($parent->name) . '</a>';
							echo ' / <a href="' . get_category_link($cat->term_id) . '">' . esc_html($cat->name) . '</a>';
						} else {
							echo ' / <a href="' . get_category_link($cat->term_id) . '">' . esc_html($cat->name) . '</a>';
						}
					}

					echo ' / <span class="current">' . get_the_title() . '</span>';
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="project" id="product_detail">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-9 col_right">
				<h1 class="custom-detail">
					<?php the_title(); ?>
				</h1>
				<small><i class="glyphicon glyphicon-time" aria-hidden="true"></i> <?php echo get_the_date('d/m/Y H:i'); ?></small>
				<div class="top20 news_detail">
					<?php the_content(); ?>
				</div>

				<br clear="all" />


				<?php
				$current_post_id = get_the_ID();

				$args = [
					'post_type'      => 'post',
					'posts_per_page' => 3,
					'post_status'    => 'publish',
					'orderby'        => 'date',
					'order'          => 'DESC',
					'post__not_in'   => [$current_post_id],
				];

				$query = new WP_Query($args);
				?>

				<?php if ($query->have_posts()) : ?>
					<div class="title3 os-tuyendart w3danima">
						<div class="fleft">
							<h3 style="color: #062245">
								<?php _e('Tin tức khác', 'biotech'); ?>
							</h3>
						</div>
						<br clear="all" />
					</div>

					<div class="row list1">
						<?php while ($query->have_posts()) : $query->the_post(); ?>
							<div class="col-xs-12 col-sm-6 col-md-4 tintuc-mobile">

								<a href="<?php the_permalink(); ?>">
									<?php if (has_post_thumbnail()) : ?>
										<?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
									<?php endif; ?>
								</a>

								<h5>
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h5>

								<p>
									<?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
								</p>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

				<?php wp_reset_postdata(); ?>
			</div>

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
		</div>
	</div>
</section>

<?php
get_footer();
