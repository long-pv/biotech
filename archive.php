<?php

/**
 * The template for displaying archive pages
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
				<div class="breadcrumb">
					<span>
						<a href="<?php echo home_url('/'); ?>">
							<i class="glyphicon glyphicon-home"></i><?php _e('Trang chủ', 'biotech'); ?>
						</a>
					</span>

					<?php if (is_category()) : ?>
						/ <span class="current">
							<?php single_cat_title(); ?>
						</span>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="project" id="product_detail">
	<div class="container">
		<div class="row tintuc">
			<div class="col-xs-12 col-sm-9 col-md-9 col-right">

				<div class="title os-tuyendart w3danima">
					<div class="fleft">
						<h3 style="color: #062245">
							<?php single_cat_title(); ?>
						</h3>
					</div>
					<br clear="all" />
				</div>

				<?php if (have_posts()) : ?>
					<?php $i = 0; ?>
					<?php while (have_posts()) : the_post();
						$i++; ?>

						<?php if ($i == 1) : ?>
							<!-- BIG POST -->
							<div class="row mgb10 custom-big">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<a class="post-thumbnail image-link" href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('large', ['class' => 'img-responsive']); ?>
									</a>

									<?php
									$cats = get_the_category();
									if (!empty($cats)) :
									?>
										<span class="term-title term-<?php echo esc_attr($cats[0]->term_id); ?>">
											<a class="colorf" href="<?php echo get_category_link($cats[0]->term_id); ?>">
												<?php echo esc_html($cats[0]->name); ?>
											</a>
										</span>
									<?php endif; ?>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<h2 class="title-news">
										<a class="post-url" rel="bookmark" href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h2>

									<div class="post-summary summary the-content">
										<p><?php echo wp_trim_words(get_the_excerpt(), 35, '…'); ?></p>
									</div>

									<a class="btn btn-read-more" href="<?php the_permalink(); ?>">Xem thêm</a>
								</div>
							</div>
							<hr />

						<?php else : ?>
							<!-- SMALL POSTS -->
							<div class="row mgb10 custom-small">
								<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
									<a class="post-thumbnail image-link" href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('medium', ['class' => 'img-responsive']); ?>
									</a>

									<?php
									$cats = get_the_category();
									if (!empty($cats)) :
									?>
										<span class="term-title term-<?php echo esc_attr($cats[0]->term_id); ?>">
											<a class="colorf" href="<?php echo get_category_link($cats[0]->term_id); ?>">
												<?php echo esc_html($cats[0]->name); ?>
											</a>
										</span>
									<?php endif; ?>
								</div>

								<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
									<h2 class="title-news">
										<a class="post-url" rel="bookmark" href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h2>

									<div class="post-summary summary the-content">
										<p><?php echo wp_trim_words(get_the_excerpt(), 30, '…'); ?></p>
									</div>

									<a class="btn btn-read-more" href="<?php the_permalink(); ?>">Xem thêm</a>
								</div>
							</div>
							<hr />
						<?php endif; ?>

					<?php endwhile; ?>
				<?php endif; ?>

				<!-- PAGINATION -->
				<div id="pagination">
					<nav>
						<?php
						echo paginate_links([
							'prev_text' => '&lt;',
							'next_text' => '&gt;',
						]);
						?>
					</nav>
				</div>

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
