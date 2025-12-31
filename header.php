<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biotech
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script src="<?php echo THEME_URI; ?>/dist/js/wp-emoji-release.min.js" type="text/javascript" defer=""></script>
	<link rel="stylesheet" href="<?php echo THEME_URI; ?>/dist/css/bootstrap.min.css" />
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel="stylesheet" id="cptch_stylesheet-css" href="<?php echo THEME_URI; ?>/dist/css/front_end_style.css" type="text/css" media="all" />
	<link rel="stylesheet" id="dashicons-css" href="<?php echo THEME_URI; ?>/dist/css/dashicons.min.css" type="text/css" media="all" />
	<link rel="stylesheet" id="cptch_desktop_style-css" href="<?php echo THEME_URI; ?>/dist/css/desktop_style.css" type="text/css" media="all" />
	<link rel="stylesheet" id="contact-form-7-css" href="<?php echo THEME_URI; ?>/dist/css/styles.css" type="text/css" media="all" />
	<link rel="stylesheet" id="wpdm-bootstrap-css" href="<?php echo THEME_URI; ?>/dist/css/bootstrap.css" type="text/css" media="all" />
	<link rel="stylesheet" id="math-captcha-frontend-css" href="<?php echo THEME_URI; ?>/dist/css/frontend.css" type="text/css" media="all" />
	<link rel="stylesheet" id="qts_front_styles-css" href="<?php echo THEME_URI; ?>/dist/css/qts-default.css" type="text/css" media="all" />
	<script type="text/javascript" src="<?php echo THEME_URI; ?>/dist/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo THEME_URI; ?>/dist/js/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="<?php echo THEME_URI; ?>/dist/js/front.js"></script>
	<script type="text/javascript" src="<?php echo THEME_URI; ?>/dist/js/chosen.jquery.min.js"></script>
	<style type="text/css" id="wp-custom-css">
		.video-container {
			position: relative;
			padding-bottom: 56.25%;
			padding-top: 30px;
			height: 0;
			overflow: hidden;
		}

		.video-container iframe,
		.video-container object,
		.video-container embed {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}

		.entry-content img,
		.entry-content iframe,
		.entry-content object,
		.entry-content embed {
			max-width: 100%;
		}

		@media (max-width: 800px) {
			.detail img {
				width: 100% !important;
				height: auto !important;
			}
		}
	</style>
	<link rel="stylesheet" href="<?php echo THEME_URI; ?>/dist/css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

	<link href="<?php echo THEME_URI; ?>/dist/css/menu_mobile.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo THEME_URI; ?>/dist/css/style_media.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo THEME_URI; ?>/dist/css/style-custom.css" rel="stylesheet" />
	<link href="<?php echo THEME_URI; ?>/dist/css/style_media.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo THEME_URI; ?>/dist/css/style.css" type="text/css" rel="stylesheet" />
	<script>
		var base_url = "https://www.ecobaent.vn";
	</script>
	<style type="text/css">
		body {
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		}

		.news_detail p {
			font-size: 14px;
			/*line-height: 1.9em;*/
			line-height: 1.6em;
		}

		.news_detail ul,
		ol {
			font-size: 14px;
			/*line-height: 1.9em;*/
			line-height: 1.6em;
		}

		.news_detail h2,
		h3 {
			font-weight: bold;
		}

		.news_detail h2 span {
			font-size: 20px !important;
		}

		.news_detail h3 span {
			font-size: 16px !important;
		}

		.news_detail h2 {
			font-size: 20px !important;
		}

		.news_detail h3 {
			font-size: 16px !important;
		}

		.detail p {
			font-size: 17px;
			line-height: 1.9em;
		}

		.detail ul,
		ol {
			font-size: 17px;
			line-height: 1.9em;
		}

		.detail h2,
		h3 {
			font-weight: bold;
		}

		@media (max-width: 800px) {
			.box-tintuc {
				display: none;
			}

			.sidebar-duan {
				display: none;
			}

			.duan-img img {
				width: 100% !important;
				height: auto !important;
			}

			.mota-duan {
				padding: 15px;
				text-align: center;
			}

			.title-mobile {
				margin-top: 15px;
			}

			.tintuc-mobile img {
				width: 100% !important;
				height: auto !important;
			}

			.img-wrapper img {
				height: auto !important;
			}
		}

		.custom-video p {
			font-size: 16px;
			line-height: unset;
		}

		.lienhe-footer-col-left {
			width: 15%;
			float: left;
		}

		.lienhe-footer-col-right {
			width: 85%;
			float: left;
		}

		.title-footer {
			color: #005228;
			font-weight: bold;
		}

		.mota-lienhe {
			color: black;
		}

		.form-edit {
			padding: 0px 0px 0px 5px;
			border-radius: 0px;
			border: 0px;
			border-bottom: 2px solid #005228;
		}

		.btn-edit {
			padding: 0px 10px;
		}

		.form-group-edit {
			margin-bottom: 5px;
		}

		.form-dangky>.wpcf7>.wpcf7-form>.wpcf7-response-output {
			color: black;
		}

		@media (max-width: 346px) {
			.min-mobile {
				min-height: 280px !important;
			}
		}
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header id="header">
		<div class="container">
			<div class="col-md-7" id="right_header">
				<div id="top_header">
					<div class="text row">

						<?php
						$kinh_doanh = get_field('kinh_doanh', 'option') ?? '';
						$dich_vu_om = get_field('dich_vu_om', 'option') ?? '';
						?>

						<?php if ($kinh_doanh): ?>
							<div class="col-md-5 col-sm-12">Kinh doanh: <a href="tel:<?php echo preg_replace('/\D/', '', $kinh_doanh); ?>" data-wpel-link="internal"><?php echo $kinh_doanh; ?></a></div>
						<?php endif; ?>
						<?php if ($dich_vu_om): ?>
							<div class="col-md-5 col-sm-12">Dịch vụ O&M: <a href="tel:<?php echo preg_replace('/\D/', '', $dich_vu_om); ?>" data-wpel-link="internal"><?php echo $dich_vu_om; ?></a></div>
						<?php endif; ?>

						<?php
						if (function_exists('pll_the_languages')) {
							$languages = pll_the_languages(array(
								'raw' => 1
							));
						}
						?>

						<div class="col-md-2 col-sm-12">

							<?php if (!empty($languages['vi'])) : ?>
								<a href="<?php echo esc_url($languages['vi']['url']); ?>"
									hreflang="vi"
									title="Tiếng Việt"
									class="<?php echo $languages['vi']['current_lang'] ? 'active' : ''; ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/dist/images/vn.png" alt="Tiếng Việt">
								</a>
							<?php endif; ?>

							<?php if (!empty($languages['en'])) : ?>
								<a href="<?php echo esc_url($languages['en']['url']); ?>"
									hreflang="en"
									title="English"
									class="<?php echo $languages['en']['current_lang'] ? 'active' : ''; ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/dist/images/gb.png" alt="English">
								</a>
							<?php endif; ?>

						</div>
					</div>
				</div>
				<div id="search">
					<form role="search"
						method="get"
						class="search-form"
						action="<?php echo esc_url(home_url('/')); ?>">

						<input type="search"
							id="search-form-694df765224d5"
							class="search-field"
							placeholder="Nhập từ khóa cần tìm ..."
							value="<?php echo get_search_query(); ?>"
							name="s"
							required>

						<input type="submit" id="sb_search" value="">
					</form>
				</div>
			</div>
			<div class="col-md-5" id="logo">
				<?php
				$logo = get_field('logo', 'option') ?? '';
				if ($logo):
				?>
					<a href="<?php echo home_url(); ?>" data-wpel-link="internal"><img class="img_logo" src="<?php echo $logo; ?>" alt="logo Ecoba ENT"></a>
					<style>
						.img_logo {
							width: auto;
							height: auto;
							max-height: 85px;
						}
					</style>
				<?php endif; ?>
			</div>
		</div>
	</header>
	<nav id="menu_top">
		<a href="#" id="icon_menu">MENU <img src="<?php echo get_template_directory_uri() . '/dist/'; ?>images/icon_toggle.png" alt="icon menu"></a>
		<?php
		wp_nav_menu(array(
			'theme_location' => 'menu-1',
			'container'      => false,
			'menu_class'     => 'container',
			'depth'          => 2,
			'walker'         => new Ecoba_Primary_Walker(),
		));
		?>
	</nav><!-- menu_top -->
	<nav id="menu_mobile">
		<div class="title_menu">
			<a href="#" title="Show Menu" class="show_menu">MENU <img src="<?php echo get_template_directory_uri() . '/dist/'; ?>images/icon_toggle.png" alt="icon menu"></a>
		</div>
		<?php
		wp_nav_menu(array(
			'theme_location' => 'menu-1',
			'container'      => false,
			'menu_class'     => 'menu_hidden',
			'depth'          => 1,
			'walker'         => new Ecoba_Primary_Walker(),
		));
		?>
	</nav><!--.menu_mobile-->
	<link href="<?php echo THEME_URI; ?>/dist/css/jssor.css" type="text/css" rel="stylesheet" />