<?php

/**
 * Template name: Dự án
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
<section class="project">
	<div class="container">
		<div class="row">
			<?php
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;

			$args = array(
				'post_type'      => 'du_an',
				'posts_per_page' => 9,
				'paged'          => $paged,
				'post_status'    => 'publish',
			);

			$query = new WP_Query($args);
			?>
			<div class="col-xs-12 col-sm-9 col-md-9 col_right">
				<div class="title3">
					<h1 class="custom-detail">
						<?php the_title(); ?>
					</h1>
				</div>

				<?php if ($query->have_posts()) : ?>
					<div class="row list1" style="padding-bottom: 7px">

						<?php
						$count = 0;
						while ($query->have_posts()) : $query->the_post();
							$count++;
						?>
							<div class="col-xs-12 col-sm-6 col-md-4 duan-img">
								<div class="pic">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
										<?php if (has_post_thumbnail()) :
											the_post_thumbnail('large', array(
												'class' => 'pic-image',
												'alt'   => get_the_title(),
											));
										endif; ?>
									</a>
								</div>

								<h5>
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h5>

								<h6>
									<a href="<?php the_permalink(); ?>">
										<?php _e('Xem thêm', 'biotech'); ?>
									</a>
								</h6>
							</div>

							<?php if ($count % 3 === 0) : ?>
					</div>
					<div class="row list1" style="padding-bottom: 7px">
					<?php endif; ?>

				<?php endwhile; ?>
					</div>
				<?php endif; ?>

				<?php
				$total_pages  = $query->max_num_pages;
				$current_page = max(1, $paged);

				if ($total_pages > 1) :
				?>
					<div id="pagination">
						<nav>
							<ul class="pagination">

								<?php if ($current_page > 1) : ?>
									<li class="prev">
										<a href="<?php echo get_pagenum_link($current_page - 1); ?>">&lt;</a>
									</li>
								<?php endif; ?>

								<?php for ($i = 1; $i <= min(5, $total_pages); $i++) : ?>
									<?php if ($i == $current_page) : ?>
										<li class="active"><span><?php echo $i; ?></span></li>
									<?php else : ?>
										<li class="after delta-<?php echo abs($i - $current_page); ?>">
											<a href="<?php echo get_pagenum_link($i); ?>"><?php echo $i; ?></a>
										</li>
									<?php endif; ?>
								<?php endfor; ?>

								<?php if ($current_page < $total_pages) : ?>
									<li class="next">
										<a href="<?php echo get_pagenum_link($current_page + 1); ?>">&gt;</a>
									</li>
									<li class="last">
										<a href="<?php echo get_pagenum_link($total_pages); ?>">»</a>
									</li>
								<?php endif; ?>

							</ul>
						</nav>
					</div>
				<?php endif; ?>
			</div>
			<?php wp_reset_postdata(); ?>


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
<br clear="all" />

<?php
get_footer();
