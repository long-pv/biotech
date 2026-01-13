<?php

/**
 * Template name: Giới thiệu
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
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 col_left">
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

			<div class="col-xs-12 col-sm-8 col-md-8 news_detail">
				<div class="title3">
					<h1 class="custom-detail">
						<p><?php the_title(); ?></p>
					</h1>
				</div>

				<div class="top20">
					<p></p>

					<?php if ($video = get_field('company_video')): ?>
						<div class="video-container">
							<?php echo $video; ?>
						</div>
					<?php endif; ?>

					<?php $info = get_field('company_info'); ?>
					<?php if ($info): ?>
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td style="text-align: left"><?php echo __('Tên đầy đủ:', 'biotech'); ?></td>
										<td><strong><?php echo $info['full_name']; ?></strong></td>
									</tr>
									<tr>
										<td style="text-align: left" nowrap="nowrap"><?php echo __('Tên tiếng anh:', 'biotech'); ?></td>
										<td><strong><?php echo $info['english_name']; ?></strong></td>
									</tr>
									<tr>
										<td style="text-align: left"><?php echo __('Tên viết tắt:', 'biotech'); ?></td>
										<td><strong><?php echo $info['short_name']; ?></strong></td>
									</tr>
									<tr>
										<td style="text-align: left"><?php echo __('Mã số thuế:', 'biotech'); ?></td>
										<td>
											<?php echo $info['tax_code']; ?>
											&nbsp;&nbsp;&nbsp;
											<?php echo __('Ngày cấp:', 'biotech'); ?>
											<?php echo $info['tax_date']; ?>
											&nbsp;&nbsp;&nbsp;
											<?php echo __('Nơi cấp:', 'biotech'); ?>
											<?php echo $info['tax_place']; ?>
										</td>
									</tr>
									<tr>
										<td style="text-align: left">
											<p><?php echo __('Trụ sở chính:', 'biotech'); ?></p>
											<p><?php echo __('VPDD:', 'biotech'); ?></p>
										</td>
										<td nowrap="nowrap">
											<p><?php echo nl2br($info['head_office']); ?></p>
											<p><?php echo nl2br($info['branch_office']); ?></p>
										</td>
									</tr>
									<tr>
										<td style="text-align: left"><?php echo __('Điện thoại:', 'biotech'); ?></td>
										<td>
											<?php echo $info['phone']; ?>
											&nbsp;&nbsp;&nbsp;
											<?php echo __('Hotline:', 'biotech'); ?>
											<?php echo $info['hotline']; ?>
										</td>
									</tr>
									<tr>
										<td style="text-align: left"><?php echo __('Website:', 'biotech'); ?></td>
										<td>
											<a href="<?php echo $info['website']; ?>" data-wpel-link="internal">
												<?php echo $info['website']; ?>
											</a>
											&nbsp;&nbsp;&nbsp;
											<?php echo __('Email:', 'biotech'); ?>
											<a href="mailto:<?php echo $info['email']; ?>" data-wpel-link="internal">
												<?php echo $info['email']; ?>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					<?php endif; ?>

					<div class="responsive-tabs">

						<?php if (have_rows('company_tabs')): ?>
							<?php while (have_rows('company_tabs')): the_row(); ?>
								<h2 class="tabtitle"><?php the_sub_field('tab_title'); ?></h2>
								<div class="tabcontent">
									<?php the_sub_field('tab_content'); ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>

					</div>

					<p></p>
				</div>

			</div>
		</div>
	</div>
</section>

<?php
get_footer();
