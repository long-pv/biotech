<?php

/**
 * Template name: Liên hệ
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
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-7 col-md-7">
			<div>
				<?php if (get_field('office_title')) : ?>
					<h1 class="page-heading">
						<span class="h-title"><?php the_field('office_title'); ?></span>
					</h1>
				<?php endif; ?>

				<ul class="list-f lienhe-f">

					<?php if (get_field('office_address')) : ?>
						<li>
							<strong><?php _e('Địa chỉ', 'biotech'); ?></strong>:
							<?php the_field('office_address'); ?>
						</li>
					<?php endif; ?>

					<?php if (get_field('tax_code')) : ?>
						<li>
							<strong><?php _e('Mã số thuế', 'biotech'); ?></strong>:
							<?php the_field('tax_code'); ?>
						</li>
					<?php endif; ?>

					<?php if (get_field('phone_business_1') || get_field('phone_business_2') || get_field('phone_om')) : ?>
						<li>
							<strong><?php _e('Kinh doanh', 'biotech'); ?></strong>:

							<?php if (get_field('phone_business_1')) : ?>
								<a href="tel:<?php the_field('phone_business_1'); ?>">
									<?php the_field('phone_business_1'); ?>
								</a>
							<?php endif; ?>

							<?php if (get_field('phone_business_2')) : ?>
								<?php if (get_field('phone_business_1')) echo ' / '; ?>
								<a href="tel:<?php the_field('phone_business_2'); ?>">
									<?php the_field('phone_business_2'); ?>
								</a>
							<?php endif; ?>

							<?php if (get_field('phone_om')) : ?>
								– <strong><?php _e('Dịch vụ O&M', 'biotech'); ?></strong>:
								<a href="tel:<?php the_field('phone_om'); ?>">
									<?php the_field('phone_om'); ?>
								</a>
							<?php endif; ?>
						</li>
					<?php endif; ?>

					<?php if (get_field('phone_landline')) : ?>
						<li>
							<strong><?php _e('Điện thoại', 'biotech'); ?></strong>:
							<a href="tel:<?php the_field('phone_landline'); ?>">
								<?php the_field('phone_landline'); ?>
							</a>
						</li>
					<?php endif; ?>

					<?php if (get_field('email_business') || get_field('email_logistics')) : ?>
						<li>
							<strong><?php _e('Email', 'biotech'); ?></strong>:

							<?php if (get_field('email_business')) : ?>
								<a href="mailto:<?php the_field('email_business'); ?>">
									<?php the_field('email_business'); ?>
								</a>
								(<?php _e('P. Kinh doanh', 'biotech'); ?>)
							<?php endif; ?>

							<?php if (get_field('email_logistics')) : ?>
								<?php if (get_field('email_business')) echo ' – '; ?>
								<a href="mailto:<?php the_field('email_logistics'); ?>">
									<?php the_field('email_logistics'); ?>
								</a>
								(<?php _e('P. Hậu cần – Thu mua', 'biotech'); ?>)
							<?php endif; ?>
						</li>
					<?php endif; ?>

				</ul>
			</div>

			<?php if (get_field('google_map_iframe')) : ?>
				<div class="map-embed">
					<?php the_field('google_map_iframe'); ?>
				</div>
			<?php endif; ?>
		</div>

		<div class="col-xs-12 col-sm-5 col-md-5">
			<div>
				<h3><?php _e('Liên hệ', 'biotech'); ?></h3>
			</div>
			<div>
				<?php echo get_field('contact_form') ?? ''; ?>
			</div>
		</div>
	</div>
</div>

<?php
/*
<div class="form-group">
    [text* your-name class:form-control placeholder "Tên"]
</div>

<div class="form-group">
    [email* your-email class:form-control placeholder "Email"]
</div>

<div class="form-group">
    [text your-subject class:form-control placeholder "Tiêu đề"]
</div>

<div class="form-group">
    [textarea your-message class:form-control placeholder "Nội dung"]
</div>

<div class="form-group">
    [submit class:btn class:btn-success class:btn-lg "Gửi"]
</div>

*/
?>

<?php
get_footer();
