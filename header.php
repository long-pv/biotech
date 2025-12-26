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

	<!-- font -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="header">
			<div class="container">
				<div class="col-md-7" id="right_header">
					<div id="top_header">
						<div class="text row">
							<div class="col-md-5 col-sm-12">Kinh doanh: <a href="tel:84901687788" data-wpel-link="internal">(+84) 901 68 77 88</a></div>
							<div class="col-md-5 col-sm-12">Dịch vụ O&M: <a href="tel:84918620467" data-wpel-link="internal">(+84) 918 620 467</a></div>
							<div class="col-md-2 col-sm-12">


								<a href="https://www.ecobaent.vn/vi" hreflang="vi" title="Tiếng Việt (vi)" class="qtranxs_image qtranxs_image_vi" data-wpel-link="internal"><img src="<?php echo get_template_directory_uri() . '/dist/'; ?>images/vn.png" alt="Tiếng Việt (vi)"><span style="display:none">Tiếng Việt</span></a>
								<a href="https://www.ecobaent.vn/en" hreflang="en" title="English (en)" class="qtranxs_image qtranxs_image_en" data-wpel-link="internal"><img src="<?php echo get_template_directory_uri() . '/dist/'; ?>images/gb.png" alt="English (en)"><span style="display:none">English</span></a>

							</div>
						</div>
					</div>
					<div id="search">
						<form role="search" method="get" class="search-form" action="https://www.ecobaent.vn/">
							<!-- <input type="hidden" name="com" value="search" /> -->
							<input type="search" id="search-form-694df765224d5" class="search-field" placeholder="Nhập từ khóa cần tìm ..." value="" name="s" required="">
							<input type="submit" id="sb_search" value="">
						</form>
					</div>
				</div>
				<div class="col-md-5" id="logo">
					<a href="https://www.ecobaent.vn/vi" data-wpel-link="internal"><img src="<?php echo get_template_directory_uri() . '/dist/'; ?>images/logo.png" alt="logo Ecoba ENT"></a>
				</div>
			</div>
		</header>
		<nav id="menu_top">
			<a href="#" id="icon_menu">MENU <img src="<?php echo get_template_directory_uri() . '/dist/'; ?>images/icon_toggle.png" alt="icon menu"></a>
			<ul class="container">
				<li><a href="https://www.ecobaent.vn/" data-wpel-link="internal">TRANG CHỦ</a></li>
				<li><a href="https://www.ecobaent.vn/tong-quan-cong-ty/" data-wpel-link="internal">GIỚI THIỆU</a>
					<ul>
						<li><a href="https://www.ecobaent.vn/tong-quan-cong-ty/" data-wpel-link="internal">Tổng quan công ty</a></li>
						<li><a href="https://www.ecobaent.vn/co-cau-to-chuc-ban-lanh-dao/" data-wpel-link="internal">Cơ cấu tổ chức - Ban lãnh đạo</a></li>
						<li><a href="https://www.ecobaent.vn/chung-chi/" data-wpel-link="internal">Chứng chỉ</a></li>
						<li><a href="https://www.ecobaent.vn/van-hoa-doanh-nghiep/" data-wpel-link="internal">Văn hóa doanh nghiệp</a></li>
						<li><a href="https://www.ecobaent.vn/khach-hang-va-doi-tac/" data-wpel-link="internal">Khách hàng và đối tác</a></li>
						<li><a href="https://www.ecobaent.vn/thu-danh-gia/" data-wpel-link="internal">Thư đánh giá</a></li>
					</ul>
				</li>
				<li style="position:initial;"><a href="https://www.ecobaent.vn/du-an/" data-wpel-link="internal">Dự án</a>
					<div class="menu_duan">
						<ul>
							<li><a href="https://www.ecobaent.vn/du-an/category/theo-linh-vuc/" data-wpel-link="internal">Theo lĩnh vực</a>
								<ul>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/xu-ly-nuoc-thai-san-xuat-cong-nghiep/" data-wpel-link="internal">Xử lý nước thải sản xuất & công nghiệp</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/xu-ly-nuoc-thai-sinh-hoat-do-thi/" data-wpel-link="internal">Xử lý nước thải sinh hoạt & đô thị</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/xu-ly-nuoc-thai-y-te/" data-wpel-link="internal">Xử lý nước thải y tế</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/om-he-thong-xu-ly-nuoc-thai/" data-wpel-link="internal">O&M hệ thống xử lý nước thải</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/xu-ly-nuoc-cap/" data-wpel-link="internal">Xử lý nước cấp</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/mep-cong-nghiep/" data-wpel-link="internal">MEP công nghiệp</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/mep-dan-dung-do-thi/" data-wpel-link="internal">MEP dân dụng & đô thị</a></li>
								</ul>
							</li>
							<li><a href="https://www.ecobaent.vn/du-an/category/theo-nganh-nghe/" data-wpel-link="internal">Theo Ngành Nghề</a>
								<ul>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/khu-cong-nghiep/" data-wpel-link="internal">Khu Công nghiệp</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/sinh-hoat-do-thi/" data-wpel-link="internal">Sinh hoạt & Khu Đô thị</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/nganh-dien-tu-nha-may-san-xuat/" data-wpel-link="internal">Ngành Điện tử & NM sản xuất</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/chan-nuoi-giet-mo/" data-wpel-link="internal">Ngành Chăn nuôi - Giết mổ</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/nganh-thuc-pham-2/" data-wpel-link="internal">Ngành Thực phẩm</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/nganh-bia/" data-wpel-link="internal">Ngành Bia</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/nganh-nuoc-giai-khat/" data-wpel-link="internal">Ngành Nước giải khát</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/nganh-det-nhuom/" data-wpel-link="internal">Ngành Dệt nhuộm</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/nganh-y-te/" data-wpel-link="internal">Ngành Y tế</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/lang-nghe/" data-wpel-link="internal">Làng nghề</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/xu-ly-nuoc-cap-2/" data-wpel-link="internal">Xử lý nước cấp</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/xu-ly-nuoc-tai-su-dung/" data-wpel-link="internal">Xử lý nước tái sử dụng</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/nganh-nghe-khac/" data-wpel-link="internal">Ngành nghề khác</a></li>
								</ul>
							</li>
							<li><a href="#">Theo Thời gian</a>
								<ul>
									<li class=""><a href="https://www.ecobaent.vn/du-an/y/2025/" data-wpel-link="internal">2025</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/y/2024/" data-wpel-link="internal">2024</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/y/2023/" data-wpel-link="internal">2023</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/y/2022/" data-wpel-link="internal">2022</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/y/2021/" data-wpel-link="internal">2021</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/y/2020/" data-wpel-link="internal">2020</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/y/2019" data-wpel-link="internal">2019</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/y/2018" data-wpel-link="internal">2018</a></li>
									<li class="mn_custom_sub"><a href="https://www.ecobaent.vn/du-an/y/2017" data-wpel-link="internal">2017</a></li>
									<li class="mn_custom_sub"><a href="https://www.ecobaent.vn/du-an/y/2016" data-wpel-link="internal">2016</a></li>
									<li class="mn_custom_sub"><a href="https://www.ecobaent.vn/du-an/y/2015" data-wpel-link="internal">2015</a></li>
									<li class="mn_custom_sub"><a href="https://www.ecobaent.vn/du-an/y/2014" data-wpel-link="internal">2014</a></li>
									<li class="mn_custom_sub"><a href="https://www.ecobaent.vn/du-an/y/2013" data-wpel-link="internal">2013</a></li>
									<li class="mn_custom_sub"><a href="https://www.ecobaent.vn/du-an/y/2012" data-wpel-link="internal">2012</a></li>
									<li class="mn_custom_sub"><a href="https://www.ecobaent.vn/du-an/y/2011" data-wpel-link="internal">2011</a></li>
									<li class="mn_custom_sub"><a href="https://www.ecobaent.vn/du-an/y/2010" data-wpel-link="internal">2010</a></li>
									<li class="mn_custom_sub"><a href="https://www.ecobaent.vn/du-an/y/2009" data-wpel-link="internal">2009</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/y/2008" data-wpel-link="internal">2008</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/y/2007" data-wpel-link="internal">2007</a></li>
								</ul>
							</li>
							<li><a href="https://www.ecobaent.vn/du-an/category/theo-vi-tri/" data-wpel-link="internal">Theo vị trí</a>
								<ul>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/mien-bac/" data-wpel-link="internal">Miền Bắc</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/mien-trung/" data-wpel-link="internal">Miền Trung</a></li>
									<li class=""><a href="https://www.ecobaent.vn/du-an/category/mien-nam/" data-wpel-link="internal">Miền Nam</a></li>
								</ul>
							</li>
							<li><a href="https://www.ecobaent.vn/video/" data-wpel-link="internal">Video</a>
								<ul>
									<li class=""><a href="https://www.youtube.com/watch?v=6MpU134YByo&list=PLBUk5K2rar29odifkYtsnkRotKmal7fMp&index=2" data-wpel-link="external" rel="nofollow external noopener noreferrer">CÔNG TRÌNH XLNT SX&KCN</a></li>
									<li class=""><a href="https://www.youtube.com/watch?v=30Mk9EPxVmM&list=PLBUk5K2rar28ND4EkFvquH3O3P680kyxd" data-wpel-link="external" rel="nofollow external noopener noreferrer">CÔNG TRÌNH XLNT SH& ĐÔ THỊ</a></li>
									<li class=""><a href="https://www.youtube.com/watch?v=qufR-n939Pw&list=PLBUk5K2rar2_fKShCfFpbS8AjkofeyHCc" data-wpel-link="external" rel="nofollow external noopener noreferrer">CÔNG TRÌNH NƯỚC CẤP</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</li>
				<li><a href="#">Dịch vụ Sản phẩm</a>
					<ul>
						<li><a href="https://www.ecobaent.vn/dich-vu/" data-wpel-link="internal">Dịch vụ</a></li>
						<li><a href="https://www.ecobaent.vn/san-pham/" data-wpel-link="internal">Sản phẩm</a></li>
					</ul>
				</li>
				<li><a href="https://www.ecobaent.vn/Technology" data-wpel-link="internal">Công nghệ xử lý</a>
					<ul>
						<li><a href="https://www.ecobaent.vn/cong-nghe-hoa-ly/" data-wpel-link="internal">Hóa lý</a></li>
						<li><a href="https://www.ecobaent.vn/cong-nghe-sinh-hoc-yem-khi-thieu-khi-hieu-khi-a2o-ao-o/" data-wpel-link="internal">Sinh học yếm khi – thiếu khí – hiếu khí</a></li>
						<li><a href="https://www.ecobaent.vn/cong-nghe-xu-ly-sinh-hoc-voi-gia-the-di-dong/" data-wpel-link="internal">Sinh học với giá thể di động (MBBR)</a></li>
						<li><a href="https://www.ecobaent.vn/cong-nghe-xu-ly-sinh-hoc-theo-me/" data-wpel-link="internal">Sinh học theo mẻ (SBR)</a></li>
						<li><a href="https://www.ecobaent.vn/cong-nghe-xu-ly-sinh-hoc-mang/" data-wpel-link="internal">Sinh học màng (MBR)</a></li>
						<li><a href="https://www.ecobaent.vn/cong-nghe-loc-sinh-hoc/" data-wpel-link="internal">Lọc sinh học</a></li>
						<li><a href="https://www.ecobaent.vn/cong-nghe-xu-ly-nuoc-sach/" data-wpel-link="internal">Công nghệ xử lý nước cấp</a></li>
						<li><a href="https://www.ecobaent.vn/cong-nghe-tai-su-dung-nuoc-thai/" data-wpel-link="internal">Công nghệ tái sử dụng nước thải</a></li>
					</ul>
				</li>
				<li><a href="https://www.ecobaent.vn/danh-muc/tin-tuc/" data-wpel-link="internal">Tin tức</a>
					<ul>
						<li><a href="https://www.ecobaent.vn/danh-muc/tin-tuc/tin-du-an/" data-wpel-link="internal">Tin dự án</a></li>
						<li><a href="https://www.ecobaent.vn/danh-muc/tin-tuc/tin-cong-ty/" data-wpel-link="internal">Tin công ty</a></li>
						<li><a href="https://www.ecobaent.vn/danh-muc/tin-tuc/tin-thi-truong/" data-wpel-link="internal">Tin thị trường</a></li>
					</ul>
				</li>
				<li><a href="https://www.ecobaent.vn/tuyen-dung/" data-wpel-link="internal">Tuyển dụng</a></li>
				<li><a href="https://www.ecobaent.vn/tai-lieu/" data-wpel-link="internal">Tài liệu</a>
					<ul>
						<li><a href="https://www.ecobaent.vn/download-category/ho-so-nang-luc/" data-wpel-link="internal">Hồ sơ năng lực</a></li>
						<li><a href="https://www.ecobaent.vn/download-category/hinh-anh-mot-so-du-an-tieu-bieu/" data-wpel-link="internal">Thư viện Ecoba ENT</a></li>
						<li><a href="https://www.ecobaent.vn/download-category/van-ban-phap-luat/" data-wpel-link="internal">Văn bản pháp luật</a></li>
						<li><a href="https://www.ecobaent.vn/download-category/ecoba-ent_frp-module-stp/" data-wpel-link="internal">Ecoba ENT_FRP Module STP</a></li>
						<li><a href="https://www.ecobaent.vn/download-category/chinh-sach-chat-luong/" data-wpel-link="internal">Chính sách chất lượng</a></li>
					</ul>
				</li>
				<li><a href="https://www.ecobaent.vn/lien-he/" data-wpel-link="internal">Liên hệ</a></li>
			</ul>
		</nav><!-- menu_top -->
		<nav id="menu_mobile">
			<div class="title_menu">
				<a href="#" title="Show Menu" class="show_menu">MENU <img src="<?php echo get_template_directory_uri() . '/dist/'; ?>images/icon_toggle.png" alt="icon menu"></a>
			</div>
			<ul class="menu_hidden">
				<li><a href="https://www.ecobaent.vn/" data-wpel-link="internal">TRANG CHỦ</a></li>
				<li><a href="https://www.ecobaent.vn/tong-quan-cong-ty/" data-wpel-link="internal">GIỚI THIỆU</a><span class="icon_show"></span>
					<ul>
						<li><a href="https://www.ecobaent.vn/tong-quan-cong-ty/" data-wpel-link="internal">Tổng quan công ty</a></li>
						<li><a href="https://www.ecobaent.vn/co-cau-to-chuc-ban-lanh-dao/" data-wpel-link="internal">Cơ cấu tổ chức - Ban lãnh đạo</a></li>
						<li><a href="https://www.ecobaent.vn/chung-chi/" data-wpel-link="internal">Chứng chỉ</a></li>
						<li><a href="https://www.ecobaent.vn/van-hoa-doanh-nghiep/" data-wpel-link="internal">Văn hóa doanh nghiệp</a></li>
						<li><a href="https://www.ecobaent.vn/khach-hang-va-doi-tac/" data-wpel-link="internal">Khách hàng và đối tác</a></li>
						<li><a href="https://www.ecobaent.vn/thu-danh-gia/" data-wpel-link="internal">Thư đánh giá</a></li>
					</ul>
				</li>
				<li><a href="https://www.ecobaent.vn/du-an/" data-wpel-link="internal">Dự án</a><span class="icon_show"></span>
					<ul>
						<li><a href="https://www.ecobaent.vn/du-an/category/theo-linh-vuc/" data-wpel-link="internal">Theo lĩnh vực</a><span class="icon_show"></span>
							<ul>
								<li><a href="https://www.ecobaent.vn/du-an/category/xu-ly-nuoc-thai-san-xuat-cong-nghiep/" data-wpel-link="internal">Xử lý nước thải sản xuất & công nghiệp</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/xu-ly-nuoc-thai-sinh-hoat-do-thi/" data-wpel-link="internal">Xử lý nước thải sinh hoạt & đô thị</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/xu-ly-nuoc-thai-y-te/" data-wpel-link="internal">Xử lý nước thải y tế</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/om-he-thong-xu-ly-nuoc-thai/" data-wpel-link="internal">O&M hệ thống xử lý nước thải</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/xu-ly-nuoc-cap/" data-wpel-link="internal">Xử lý nước cấp</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/mep-cong-nghiep/" data-wpel-link="internal">MEP công nghiệp</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/mep-dan-dung-do-thi/" data-wpel-link="internal">MEP dân dụng & đô thị</a></li>
							</ul>
						</li>
						<li><a href="https://www.ecobaent.vn/du-an/category/theo-nganh-nghe/" data-wpel-link="internal">Theo Ngành Nghề</a><span class="icon_show"></span>
							<ul>
								<li><a href="https://www.ecobaent.vn/du-an/category/khu-cong-nghiep/" data-wpel-link="internal">Khu Công nghiệp</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/sinh-hoat-do-thi/" data-wpel-link="internal">Sinh hoạt & Khu Đô thị</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/nganh-dien-tu-nha-may-san-xuat/" data-wpel-link="internal">Ngành Điện tử & NM sản xuất</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/chan-nuoi-giet-mo/" data-wpel-link="internal">Ngành Chăn nuôi - Giết mổ</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/nganh-thuc-pham-2/" data-wpel-link="internal">Ngành Thực phẩm</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/nganh-bia/" data-wpel-link="internal">Ngành Bia</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/nganh-nuoc-giai-khat/" data-wpel-link="internal">Ngành Nước giải khát</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/nganh-det-nhuom/" data-wpel-link="internal">Ngành Dệt nhuộm</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/nganh-y-te/" data-wpel-link="internal">Ngành Y tế</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/lang-nghe/" data-wpel-link="internal">Làng nghề</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/xu-ly-nuoc-cap-2/" data-wpel-link="internal">Xử lý nước cấp</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/xu-ly-nuoc-tai-su-dung/" data-wpel-link="internal">Xử lý nước tái sử dụng</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/nganh-nghe-khac/" data-wpel-link="internal">Ngành nghề khác</a></li>
							</ul>
						</li>
						<li><a href="#">Theo Thời gian</a><span class="icon_show"></span>
							<ul>
								<li><a href="https://www.ecobaent.vn/du-an/y/2025/" data-wpel-link="internal">2025</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2024/" data-wpel-link="internal">2024</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2023/" data-wpel-link="internal">2023</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2022/" data-wpel-link="internal">2022</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2021/" data-wpel-link="internal">2021</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2020/" data-wpel-link="internal">2020</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2019" data-wpel-link="internal">2019</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2018" data-wpel-link="internal">2018</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2017" data-wpel-link="internal">2017</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2016" data-wpel-link="internal">2016</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2015" data-wpel-link="internal">2015</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2014" data-wpel-link="internal">2014</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2013" data-wpel-link="internal">2013</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2012" data-wpel-link="internal">2012</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2011" data-wpel-link="internal">2011</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2010" data-wpel-link="internal">2010</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2009" data-wpel-link="internal">2009</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2008" data-wpel-link="internal">2008</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/y/2007" data-wpel-link="internal">2007</a></li>
							</ul>
						</li>
						<li><a href="https://www.ecobaent.vn/du-an/category/theo-vi-tri/" data-wpel-link="internal">Theo vị trí</a><span class="icon_show"></span>
							<ul>
								<li><a href="https://www.ecobaent.vn/du-an/category/mien-bac/" data-wpel-link="internal">Miền Bắc</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/mien-trung/" data-wpel-link="internal">Miền Trung</a></li>
								<li><a href="https://www.ecobaent.vn/du-an/category/mien-nam/" data-wpel-link="internal">Miền Nam</a></li>
							</ul>
						</li>
						<li><a href="https://www.ecobaent.vn/video/" data-wpel-link="internal">Video</a><span class="icon_show"></span>
							<ul>
								<li><a href="https://www.youtube.com/watch?v=6MpU134YByo&list=PLBUk5K2rar29odifkYtsnkRotKmal7fMp&index=2" data-wpel-link="external" rel="nofollow external noopener noreferrer">CÔNG TRÌNH XLNT SX&KCN</a></li>
								<li><a href="https://www.youtube.com/watch?v=30Mk9EPxVmM&list=PLBUk5K2rar28ND4EkFvquH3O3P680kyxd" data-wpel-link="external" rel="nofollow external noopener noreferrer">CÔNG TRÌNH XLNT SH& ĐÔ THỊ</a></li>
								<li><a href="https://www.youtube.com/watch?v=qufR-n939Pw&list=PLBUk5K2rar2_fKShCfFpbS8AjkofeyHCc" data-wpel-link="external" rel="nofollow external noopener noreferrer">CÔNG TRÌNH NƯỚC CẤP</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="#">Dịch vụ Sản phẩm</a><span class="icon_show"></span>
					<ul>
						<li><a href="https://www.ecobaent.vn/dich-vu/" data-wpel-link="internal">Dịch vụ</a></li>
						<li><a href="https://www.ecobaent.vn/san-pham/" data-wpel-link="internal">Sản phẩm</a></li>
					</ul>
				</li>
				<li><a href="https://www.ecobaent.vn/Technology" data-wpel-link="internal">Công nghệ xử lý</a><span class="icon_show"></span>
					<ul>
						<li><a href="https://www.ecobaent.vn/cong-nghe-hoa-ly/" data-wpel-link="internal">Hóa lý</a></li>
						<li><a href="https://www.ecobaent.vn/cong-nghe-sinh-hoc-yem-khi-thieu-khi-hieu-khi-a2o-ao-o/" data-wpel-link="internal">Sinh học yếm khi – thiếu khí – hiếu khí</a></li>
						<li><a href="https://www.ecobaent.vn/cong-nghe-xu-ly-sinh-hoc-voi-gia-the-di-dong/" data-wpel-link="internal">Sinh học với giá thể di động (MBBR)</a></li>
						<li><a href="https://www.ecobaent.vn/cong-nghe-xu-ly-sinh-hoc-theo-me/" data-wpel-link="internal">Sinh học theo mẻ (SBR)</a></li>
						<li><a href="https://www.ecobaent.vn/cong-nghe-xu-ly-sinh-hoc-mang/" data-wpel-link="internal">Sinh học màng (MBR)</a></li>
						<li><a href="https://www.ecobaent.vn/cong-nghe-loc-sinh-hoc/" data-wpel-link="internal">Lọc sinh học</a></li>
						<li><a href="https://www.ecobaent.vn/cong-nghe-xu-ly-nuoc-sach/" data-wpel-link="internal">Công nghệ xử lý nước cấp</a></li>
						<li><a href="https://www.ecobaent.vn/cong-nghe-tai-su-dung-nuoc-thai/" data-wpel-link="internal">Công nghệ tái sử dụng nước thải</a></li>
					</ul>
				</li>
				<li><a href="https://www.ecobaent.vn/danh-muc/tin-tuc/" data-wpel-link="internal">Tin tức</a><span class="icon_show"></span>
					<ul>
						<li><a href="https://www.ecobaent.vn/danh-muc/tin-tuc/tin-du-an/" data-wpel-link="internal">Tin dự án</a></li>
						<li><a href="https://www.ecobaent.vn/danh-muc/tin-tuc/tin-cong-ty/" data-wpel-link="internal">Tin công ty</a></li>
						<li><a href="https://www.ecobaent.vn/danh-muc/tin-tuc/tin-thi-truong/" data-wpel-link="internal">Tin thị trường</a></li>
					</ul>
				</li>
				<li><a href="https://www.ecobaent.vn/tuyen-dung/" data-wpel-link="internal">Tuyển dụng</a></li>
				<li><a href="https://www.ecobaent.vn/tai-lieu/" data-wpel-link="internal">Tài liệu</a><span class="icon_show"></span>
					<ul>
						<li><a href="https://www.ecobaent.vn/download-category/ho-so-nang-luc/" data-wpel-link="internal">Hồ sơ năng lực</a></li>
						<li><a href="https://www.ecobaent.vn/download-category/hinh-anh-mot-so-du-an-tieu-bieu/" data-wpel-link="internal">Thư viện Ecoba ENT</a></li>
						<li><a href="https://www.ecobaent.vn/download-category/van-ban-phap-luat/" data-wpel-link="internal">Văn bản pháp luật</a></li>
						<li><a href="https://www.ecobaent.vn/download-category/ecoba-ent_frp-module-stp/" data-wpel-link="internal">Ecoba ENT_FRP Module STP</a></li>
						<li><a href="https://www.ecobaent.vn/download-category/chinh-sach-chat-luong/" data-wpel-link="internal">Chính sách chất lượng</a></li>
					</ul>
				</li>
				<li><a href="https://www.ecobaent.vn/lien-he/" data-wpel-link="internal">Liên hệ</a></li>
			</ul>
		</nav><!--.menu_mobile-->