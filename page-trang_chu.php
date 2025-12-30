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

<section id="slider">
	<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 462px; overflow: hidden; visibility: hidden">
		<div data-u="loading" style="position: absolute; top: 0px; left: 0px; background: url('<?php echo THEME_URI; ?>/dist/images/loading.gif') no-repeat 50% 50%; background-color: rgba(0, 0, 0, 0.7)"></div>
		<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 462px; overflow: hidden">
			<div>
				<a href="https://www.ecobaent.vn/du-an/" data-wpel-link="internal"><img data-u="image" src="<?php echo THEME_URI; ?>/dist/images/banner-ecoba-ent-1.jpg" alt="" /></a>
				<div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 1; background: rgba(4, 4, 4, 0.35); height: 38px; font-size: 20px; color: #fff; text-align: left; padding: 5px"></div>
			</div>
			<div>
				<a href="https://www.ecobaent.vn/thu-danh-gia/" data-wpel-link="internal"><img data-u="image" src="<?php echo THEME_URI; ?>/dist/images/banner-ecoba-ent-2.jpg" alt="" /></a>
				<div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 1; background: rgba(4, 4, 4, 0.35); height: 38px; font-size: 20px; color: #fff; text-align: left; padding: 5px"></div>
			</div>
			<div>
				<a href="https://www.ecobaent.vn/tuyen-dung/" data-wpel-link="internal"><img data-u="image" src="<?php echo THEME_URI; ?>/dist/images/banner-ecoba-ent-3.jpg" alt="" /></a>
				<div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 1; background: rgba(4, 4, 4, 0.35); height: 38px; font-size: 20px; color: #fff; text-align: left; padding: 5px"></div>
			</div>
		</div>
		<div data-u="navigator" class="jssorb01" style="bottom: 16px; right: 16px">
			<div data-u="prototype" style="width: 12px; height: 12px"></div>
		</div>
		<span data-u="arrowleft" class="jssora05l" style="top: 0px; left: 8px; width: 40px; height: 40px" data-autocenter="2"></span><span data-u="arrowright" class="jssora05r" style="top: 0px; right: 8px; width: 40px; height: 40px" data-autocenter="2"></span>
	</div>
	<nav class="marquee" style="width: 100%; padding: 15px 0px; height: 60px; background: #005228">
		<marquee behavior="scroll" scrollamount="5" direction="left" width="100%">
			<div class="pointer" style="font-size: 22px; color: #faffbd">
				<p><strong>Ecoba ENT</strong> chuyên cung cấp các giải pháp xử lý nước thông minh. Dịch vụ trọn gói - An tâm hợp tác. Hotline: 0901 68 7788 | 08 8899 0789 - Email: kinhdoanh@ecobaent.vn</p>
				<p><textarea id="BFI_DATA" style="width: 1px; height: 1px; display: none"></textarea></p>
				<div id="WidgetFloaterPanels" class="LTRStyle" style="display: none; text-align: left; direction: ltr; visibility: hidden" translate="no">
					<div id="WidgetFloater" style="display: none">
						<div id="WidgetLogoPanel">
							<span id="WidgetTranslateWithSpan">TRANSLATE with <img id="FloaterLogo" /></span> <span id="WidgetCloseButton" title="Exit Translation">x</span>
						</div>
						<div id="LanguageMenuPanel">
							<div class="DDStyle_outer">
								<input id="LanguageMenu_svid" style="display: none" autocomplete="on" name="LanguageMenu_svid" type="text" value="en" /> <input id="LanguageMenu_textid" style="display: none" autocomplete="on" name="LanguageMenu_textid" type="text" /> <span id="__LanguageMenu_header" class="DDStyle" tabindex="0">English</span>
								<div style="position: relative; text-align: left; left: 0">
									<div style="position: absolute; left: 0px">
										<div id="__LanguageMenu_popup" class="DDStyle" style="display: none">
											<table id="LanguageMenu" border="0">
												<tbody>
													<tr>
														<td><a tabindex="-1" href="#ar">Arabic</a></td>
														<td><a tabindex="-1" href="#he">Hebrew</a></td>
														<td><a tabindex="-1" href="#pl">Polish</a></td>
													</tr>
													<tr>
														<td><a tabindex="-1" href="#bg">Bulgarian</a></td>
														<td><a tabindex="-1" href="#hi">Hindi</a></td>
														<td><a tabindex="-1" href="#pt">Portuguese</a></td>
													</tr>
													<tr>
														<td><a tabindex="-1" href="#ca">Catalan</a></td>
														<td><a tabindex="-1" href="#mww">Hmong Daw</a></td>
														<td><a tabindex="-1" href="#ro">Romanian</a></td>
													</tr>
													<tr>
														<td><a tabindex="-1" href="#zh-CHS">Chinese Simplified</a></td>
														<td><a tabindex="-1" href="#hu">Hungarian</a></td>
														<td><a tabindex="-1" href="#ru">Russian</a></td>
													</tr>
													<tr>
														<td><a tabindex="-1" href="#zh-CHT">Chinese Traditional</a></td>
														<td><a tabindex="-1" href="#id">Indonesian</a></td>
														<td><a tabindex="-1" href="#sk">Slovak</a></td>
													</tr>
													<tr>
														<td><a tabindex="-1" href="#cs">Czech</a></td>
														<td><a tabindex="-1" href="#it">Italian</a></td>
														<td><a tabindex="-1" href="#sl">Slovenian</a></td>
													</tr>
													<tr>
														<td><a tabindex="-1" href="#da">Danish</a></td>
														<td><a tabindex="-1" href="#ja">Japanese</a></td>
														<td><a tabindex="-1" href="#es">Spanish</a></td>
													</tr>
													<tr>
														<td><a tabindex="-1" href="#nl">Dutch</a></td>
														<td><a tabindex="-1" href="#tlh">Klingon</a></td>
														<td><a tabindex="-1" href="#sv">Swedish</a></td>
													</tr>
													<tr>
														<td><a tabindex="-1" href="#en">English</a></td>
														<td><a tabindex="-1" href="#ko">Korean</a></td>
														<td><a tabindex="-1" href="#th">Thai</a></td>
													</tr>
													<tr>
														<td><a tabindex="-1" href="#et">Estonian</a></td>
														<td><a tabindex="-1" href="#lv">Latvian</a></td>
														<td><a tabindex="-1" href="#tr">Turkish</a></td>
													</tr>
													<tr>
														<td><a tabindex="-1" href="#fi">Finnish</a></td>
														<td><a tabindex="-1" href="#lt">Lithuanian</a></td>
														<td><a tabindex="-1" href="#uk">Ukrainian</a></td>
													</tr>
													<tr>
														<td><a tabindex="-1" href="#fr">French</a></td>
														<td><a tabindex="-1" href="#ms">Malay</a></td>
														<td><a tabindex="-1" href="#ur">Urdu</a></td>
													</tr>
													<tr>
														<td><a tabindex="-1" href="#de">German</a></td>
														<td><a tabindex="-1" href="#mt">Maltese</a></td>
														<td><a tabindex="-1" href="#vi">Vietnamese</a></td>
													</tr>
													<tr>
														<td><a tabindex="-1" href="#el">Greek</a></td>
														<td><a tabindex="-1" href="#no">Norwegian</a></td>
														<td><a tabindex="-1" href="#cy">Welsh</a></td>
													</tr>
													<tr>
														<td><a tabindex="-1" href="#ht">Haitian Creole</a></td>
														<td><a tabindex="-1" href="#fa">Persian</a></td>
														<td> </td>
													</tr>
												</tbody>
											</table>
											<img style="height: 7px; width: 17px; border-width: 0px; left: 20px" alt="" />
										</div>
									</div>
								</div>
							</div>
							<script type="text/javascript">
								// <![CDATA[
								var LanguageMenu;
								var LanguageMenu_keys = ["ar", "bg", "ca", "zh-CHS", "zh-CHT", "cs", "da", "nl", "en", "et", "fi", "fr", "de", "el", "ht", "he", "hi", "mww", "hu", "id", "it", "ja", "tlh", "ko", "lv", "lt", "ms", "mt", "no", "fa", "pl", "pt", "ro", "ru", "sk", "sl", "es", "sv", "th", "tr", "uk", "ur", "vi", "cy"];
								var LanguageMenu_values = [
									"Arabic",
									"Bulgarian",
									"Catalan",
									"Chinese Simplified",
									"Chinese Traditional",
									"Czech",
									"Danish",
									"Dutch",
									"English",
									"Estonian",
									"Finnish",
									"French",
									"German",
									"Greek",
									"Haitian Creole",
									"Hebrew",
									"Hindi",
									"Hmong Daw",
									"Hungarian",
									"Indonesian",
									"Italian",
									"Japanese",
									"Klingon",
									"Korean",
									"Latvian",
									"Lithuanian",
									"Malay",
									"Maltese",
									"Norwegian",
									"Persian",
									"Polish",
									"Portuguese",
									"Romanian",
									"Russian",
									"Slovak",
									"Slovenian",
									"Spanish",
									"Swedish",
									"Thai",
									"Turkish",
									"Ukrainian",
									"Urdu",
									"Vietnamese",
									"Welsh",
								];
								var LanguageMenu_callback = function() {};
								var LanguageMenu_popupid = "__LanguageMenu_popup";
								// ]]>
							</script>
						</div>
						<div id="CTFLinksPanel">
							<span id="ExternalLinksPanel"><a id="HelpLink" title="Help" href="https://go.microsoft.com/?linkid=9722454" target="_blank" rel="noopener noreferrer nofollow external" data-wpel-link="external"> <img id="HelpImg" /></a> <a id="EmbedLink" title="Get this widget for your own site"></a> <img id="EmbedImg" /> <a id="ShareLink" title="Share translated page with friends"></a> <img id="ShareImg" />
							</span>
						</div>
						<div id="FloaterProgressBar"> </div>
					</div>
					<div id="WidgetFloaterCollapsed" style="display: none">TRANSLATE with <img id="CollapsedLogoImg" /></div>
					<div id="FloaterSharePanel" style="display: none">
						<div id="ShareTextDiv"><span id="ShareTextSpan"> COPY THE URL BELOW </span></div>
						<div id="ShareTextboxDiv">
							<input id="ShareTextbox" name="ShareTextbox" readonly="readonly" type="text" />
							<!--a id="TwitterLink" title="Share on Twitter"> <img id="TwitterImg" /></a> <a-- id="FacebookLink" title="Share on Facebook"> <img id="FacebookImg" /></a-->
							<a id="EmailLink" title="Email this translation"></a> <img id="EmailImg" />
						</div>
						<div id="ShareFooter">
							<span id="ShareHelpSpan"><a id="ShareHelpLink"></a> <img id="ShareHelpImg" /></span> <span id="ShareBackSpan"><a id="ShareBack" title="Back To Translation"></a> Back</span>
						</div>
						<input id="EmailSubject" name="EmailSubject" type="hidden" value="Check out this page in {0} translated from {1}" /> <input id="EmailBody" name="EmailBody" type="hidden" value="Translated: {0}%0d%0aOriginal: {1}%0d%0a%0d%0aAutomatic translation powered by Microsoft® Translator%0d%0ahttp://www.bing.com/translator?ref=MSTWidget" />
						<input id="ShareHelpText" type="hidden" value="This link allows visitors to launch this page and automatically translate it to {0}." />
					</div>
					<div id="FloaterEmbed" style="display: none">
						<div id="EmbedTextDiv"><span id="EmbedTextSpan">EMBED THE SNIPPET BELOW IN YOUR SITE</span> <a id="EmbedHelpLink" title="Copy this code and place it into your HTML."></a> <img id="EmbedHelpImg" /></div>
						<div id="EmbedTextboxDiv">
							<input
								id="EmbedSnippetTextBox"
								name="EmbedSnippetTextBox"
								readonly="readonly"
								type="text"
								value="<div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#555555'></div><script type='text/javascript'>setTimeout(function(){var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=true&ui=true&settings=manual&from=en';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); },0);</script>" />
						</div>
						<div id="EmbedNoticeDiv">
							<span id="EmbedNoticeSpan">Enable collaborative features and customize widget: <a href="http://www.bing.com/widget/translator" target="_blank" rel="noopener noreferrer nofollow external" data-wpel-link="external">Bing Webmaster Portal</a></span>
						</div>
						<div id="EmbedFooterDiv">
							<span id="EmbedBackSpan"><a title="Back To Translation">Back</a></span>
						</div>
					</div>
					<script type="text/javascript">
						// <![CDATA[
						var intervalId = setInterval(function() {
							if (MtPopUpList) {
								LanguageMenu = new MtPopUpList();
								var langMenu = document.getElementById(LanguageMenu_popupid);
								var origLangDiv = document.createElement("div");
								origLangDiv.id = "OriginalLanguageDiv";
								origLangDiv.innerHTML = "<span id='OriginalTextSpan'>ORIGINAL: </span><span id='OriginalLanguageSpan'></span>";
								langMenu.appendChild(origLangDiv);
								LanguageMenu.Init("LanguageMenu", LanguageMenu_keys, LanguageMenu_values, LanguageMenu_callback, LanguageMenu_popupid);
								window["LanguageMenu"] = LanguageMenu;
								clearInterval(intervalId);
							}
						}, 1);
						// ]]>
					</script>
				</div>
			</div>
		</marquee>
	</nav>
</section>
<main>
	<section id="top_content" style="padding-top: 13px; padding-bottom: 8px; clear: both">
		<div class="container">
			<h1 style="display: none">Ecoba ENT | Công ty TNHH Ecoba công nghệ môi trường</h1>
			<h2 class="title_main text-upper"></h2>
			<div id="sl_duan">
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-thai-kcn-nam-sach/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/nha-may-xu-ly-nuoc-thai-kcn-nam-sach-3-e1593759861982-300x225.jpg"
								alt="<p>Nhà máy xử lý nước thải KCN Nam Sách, Hải Dương</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-thai-kcn-nam-sach/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Nhà máy xử lý nước thải KCN Nam Sách, Hải Dương</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-thai-kcn-yen-my-ii/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/nuoc-thai-kcn-yen-my-ii-dai-dien-01-300x225.jpg"
								alt="<p>Nhà máy xử lý nước thải KCN Yên Mỹ II</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-thai-kcn-yen-my-ii/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Nhà máy xử lý nước thải KCN Yên Mỹ II</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-sach-giai-doan-i-kcn-yen-my-ii/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/nuoc-sach-yen-my-1-e1593759958781-300x225.jpg"
								alt="<p>Nhà máy xử lý nước sạch KCN Yên Mỹ II</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-sach-giai-doan-i-kcn-yen-my-ii/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Nhà máy xử lý nước sạch KCN Yên Mỹ II</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-thai-kdt-vinhomes-ocean-park/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/VOH1-300x183.jpg"
								alt="<p>Nhà máy xử lý nước thải KĐT Vinhomes Ocean Park</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-thai-kdt-vinhomes-ocean-park/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Nhà máy xử lý nước thải KĐT Vinhomes Ocean Park</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/tram-xu-ly-nuoc-thai-samsung-6000/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/tram-xu-ly-nuoc-thai-samsung-6000-anh-tieu-bieu-01-300x225.jpg"
								alt="<p>Trạm xử lý nước thải Samsung 6000</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/tram-xu-ly-nuoc-thai-samsung-6000/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Trạm xử lý nước thải Samsung 6000</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/tram-xu-ly-nuoc-thai-samsung-metal/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/tram-xu-ly-nuoc-thai-samsung-metal-01-300x225.jpg"
								alt="<p>Trạm xử lý nước thải Samsung Metal</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/tram-xu-ly-nuoc-thai-samsung-metal/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Trạm xử lý nước thải Samsung Metal</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-thai-dai-do-thi-vinhomes-smart-city/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/VHS4-300x183.jpg"
								alt="<p>Nhà máy xử lý nước thải Đại đô thị Vinhomes Smart City</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-thai-dai-do-thi-vinhomes-smart-city/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Nhà máy xử lý nước thải Đại đô thị Vinhomes Smart City</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/tram-xu-ly-nuoc-thai-kcn-vsip-hai-duong/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/tram-xu-ly-nuoc-thai-kcn-vsip-hai-duong-5-01-300x225.jpg"
								alt="<p>Trạm xử lý nước thải KCN VSIP Hải Dương</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/tram-xu-ly-nuoc-thai-kcn-vsip-hai-duong/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Trạm xử lý nước thải KCN VSIP Hải Dương</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/tram-xu-ly-nuoc-thai-kcn-vsip-hai-phong/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/nha-may-xu-ly-nuoc-thai-kcn-vsip-hai-phong-5-01-300x225.jpg"
								alt="<p>Trạm xử lý nước thải KCN VSIP Hải Phòng</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/tram-xu-ly-nuoc-thai-kcn-vsip-hai-phong/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Trạm xử lý nước thải KCN VSIP Hải Phòng</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-thai-cho-nha-may-che-bien-thuc-pham-c-p-phu-nghia/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/6.1.-CP-Phu-nghia_Tong-the1-300x210.jpg"
								alt="<p>Nhà máy xử lý nước thải cho Nhà máy chế biến thực phẩm C.P Phú Nghĩa</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-thai-cho-nha-may-che-bien-thuc-pham-c-p-phu-nghia/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Nhà máy xử lý nước thải cho Nhà máy chế biến thực phẩm C.P Phú Nghĩa</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/tram-xlnt-nha-may-che-bien-thuc-pham-c-p-cu-chi/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/7.1.-CP-Cu-chi_Tong-the1-300x210.jpg"
								alt="<p>Trạm XLNT Nhà máy chế biến thực phẩm C.P Củ Chi</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/tram-xlnt-nha-may-che-bien-thuc-pham-c-p-cu-chi/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Trạm XLNT Nhà máy chế biến thực phẩm C.P Củ Chi</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-thai-yen-so/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/1.2.-Yen-So_Tong-the2-300x210.jpg"
								alt="<p>Nhà máy xử lý nước thải Yên Sở</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-thai-yen-so/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Nhà máy xử lý nước thải Yên Sở</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-thai-ho-bay-mau/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/2.1.-Ho-Bay-Mau_Tong-the1-300x210.jpg"
								alt="<p>Nhà máy xử lý nước thải Hồ Bảy Mẫu.</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/nha-may-xu-ly-nuoc-thai-ho-bay-mau/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Nhà máy xử lý nước thải Hồ Bảy Mẫu.</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/tram-xu-ly-nuoc-thai-vinhomes-times-city-park-hill-2/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/3.1.-Park-Hill_Tong-the1-300x210.jpg"
								alt="<p>Trạm xử lý nước thải Vinhomes Times City Park Hill 2</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/tram-xu-ly-nuoc-thai-vinhomes-times-city-park-hill-2/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Trạm xử lý nước thải Vinhomes Times City Park Hill 2</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/to-hop-cau-lac-bo-gamuda/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/bullar-300x210.jpg"
								alt="<p>Tổ Hợp Câu Lạc Bộ Gamuda</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/to-hop-cau-lac-bo-gamuda/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Tổ Hợp Câu Lạc Bộ Gamuda</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/khu-tien-ich-the-park-city-club-ha-noi/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/park-city-club-300x210.jpg"
								alt="<p>Khu Tiện Ích The Park City Club Hà Nội</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/khu-tien-ich-the-park-city-club-ha-noi/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Khu Tiện Ích The Park City Club Hà Nội</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/toa-nha-lien-hop-quoc-undp/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/LHQ-300x210.jpg"
								alt="<p>Tòa Nhà Liên Hợp Quốc UNDP</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/toa-nha-lien-hop-quoc-undp/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Tòa Nhà Liên Hợp Quốc UNDP</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/vinschool-toa-nha-t37/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/vinschool-t37-300x210.jpg"
								alt="<p>Vinschool – Tòa Nhà T37</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/vinschool-toa-nha-t37/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Vinschool – Tòa Nhà T37</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/minh-khai-city-plaza/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/MK-300x210.jpg"
								alt="<p>Minh Khai City Plaza</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/minh-khai-city-plaza/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Minh Khai City Plaza</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
				<div class="wrap_duan">
					<div class="box_duan pic">
						<a href="https://www.ecobaent.vn/du-an/trung-tam-thuong-mai-machinco/" data-wpel-link="internal">
							<img
								class="pic-image"
								src="<?php echo THEME_URI; ?>/dist/images/trung-tam-thuong-mai-machinco-1-300x212.png"
								alt="<p>Trung Tâm Thương Mại Machinco</p>
" />
						</a>
					</div>
					<a href="https://www.ecobaent.vn/du-an/trung-tam-thuong-mai-machinco/" data-wpel-link="internal">
						<h3 style="text-transform: capitalize">
							<p>Trung Tâm Thương Mại Machinco</p>
						</h3>
					</a>
					<p class="mota"></p>
				</div>
			</div>
			<!-- sl_duan -->
		</div>
	</section>
	<!-- top_content -->
	<section id="bottom_content" style="padding: 8px 0px 0px 0px">
		<div class="container">
			<div id="col_blog" class="col-md-8" style="padding: 0px">
				<h2 class="title text-upper">Tin tức mới</h2>
				<div id="blog_main" class="col-md-6">
					<a href="https://www.ecobaent.vn/ecoba-ent-ky-ket-hop-tac-voi-cong-ty-co-phan-dau-tu-an-tho/" data-wpel-link="internal"><img src="<?php echo THEME_URI; ?>/dist/images/le-ky-ket-hop-tac-3-300x169.jpg" alt="Ecoba ENT ký kết hợp tác với Công ty Cổ phần Đầu Tư An Thọ" />
						<h3>Ecoba ENT ký kết hợp tác với Công ty Cổ phần Đầu Tư An Thọ</h3>
					</a><a href="https://www.ecobaent.vn/ecoba-ent-ky-ket-hop-tac-voi-cong-ty-co-phan-dau-tu-an-tho/" style="text-decoration: none" data-wpel-link="internal">
						<p class="mota"></p>
						<p>Sáng ngày 19/12 tại CCN An Thọ, thành phố Hải Phòng đã diễn ra lễ khởi công CCN An Thọ, đồng thời ký chủ đầu tư cũng ký kết hợp tác với Ecoba ENT trong việc…</p>
						<p></p>
					</a>
				</div>
				<!-- blog_main -->
				<div id="blog_list" class="col-md-6">
					<ul id="sl_blog_list">
						<li>
							<a href="https://www.ecobaent.vn/ecoba-ent-ky-ket-hop-tac-voi-cong-ty-co-phan-dau-tu-an-tho/" data-wpel-link="internal"><img src="<?php echo THEME_URI; ?>/dist/images/le-ky-ket-hop-tac-3-300x169.jpg" alt="Ecoba ENT ký kết hợp tác với Công ty Cổ phần Đầu Tư An Thọ" />
								<h3>Ecoba ENT ký kết hợp tác với Công ty Cổ phần Đầu Tư An Thọ</h3>
							</a>
							<div class="mota-1"><a href="https://www.ecobaent.vn/ecoba-ent-ky-ket-hop-tac-voi-cong-ty-co-phan-dau-tu-an-tho/" style="text-decoration: none" data-wpel-link="internal">Ecoba ENT ký kết hợp tác với Công ty Cổ phần Đầu Tư An Thọ</a></div>
							<div class="mota-hidden">
								<a href="https://www.ecobaent.vn/ecoba-ent-ky-ket-hop-tac-voi-cong-ty-co-phan-dau-tu-an-tho/" style="text-decoration: none" data-wpel-link="internal">
									<p>Sáng ngày 19/12 tại CCN An Thọ, thành phố Hải Phòng đã diễn ra lễ khởi công CCN An Thọ, đồng thời ký chủ đầu tư cũng ký kết hợp tác với Ecoba ENT trong việc…</p>
								</a>
							</div>
						</li>
						<li>
							<a href="https://www.ecobaent.vn/ecoba-ent-khoi-cong-tram-xu-ly-nuoc-thai-kcn-binh-phu/" data-wpel-link="internal"><img src="<?php echo THEME_URI; ?>/dist/images/khoi-cong-tram-xlnt-kcn-binh-phu-9-300x225.jpg" alt="Ecoba ENT khởi công Trạm xử lý nước thải KCN Bình Phú" />
								<h3>Ecoba ENT khởi công Trạm xử lý nước thải KCN Bình Phú</h3>
							</a>
							<div class="mota-1"><a href="https://www.ecobaent.vn/ecoba-ent-khoi-cong-tram-xu-ly-nuoc-thai-kcn-binh-phu/" style="text-decoration: none" data-wpel-link="internal">Ecoba ENT khởi công Trạm xử lý nước thải KCN Bình Phú</a></div>
							<div class="mota-hidden">
								<a href="https://www.ecobaent.vn/ecoba-ent-khoi-cong-tram-xu-ly-nuoc-thai-kcn-binh-phu/" style="text-decoration: none" data-wpel-link="internal">
									<p>Sáng ngày 17/12, tại phường Kỳ Sơn, tỉnh Phú Thọ đã diễn ra Lễ khởi công dự án Trạm xử lý nước thải Khu công nghiệp (KCN) Bình Phú.</p>
								</a>
							</div>
						</li>
						<li>
							<a href="https://www.ecobaent.vn/khoi-cong-du-an-tram-xu-ly-nuoc-thai-kcn-song-cong-ii/" data-wpel-link="internal"><img src="<?php echo THEME_URI; ?>/dist/images/khoi-cong-tram-xu-ly-nuoc-thai-kcn-song-cong-ii-7-300x189.png" alt="Khởi công dự án trạm xử lý nước thải KCN Sông Công II – Giai đoạn 2" />
								<h3>Khởi công dự án trạm xử lý nước thải KCN Sông Công II – Giai đoạn 2</h3>
							</a>
							<div class="mota-1"><a href="https://www.ecobaent.vn/khoi-cong-du-an-tram-xu-ly-nuoc-thai-kcn-song-cong-ii/" style="text-decoration: none" data-wpel-link="internal">Khởi công dự án trạm xử lý nước thải KCN Sông Công II – Giai đoạn 2</a></div>
							<div class="mota-hidden">
								<a href="https://www.ecobaent.vn/khoi-cong-du-an-tram-xu-ly-nuoc-thai-kcn-song-cong-ii/" style="text-decoration: none" data-wpel-link="internal">
									<p>Sáng ngày 05/12 tại Phường Bá Xuyên, Phường Bách Quang, tỉnh Thái Nguyên đã diễn ra lễ khởi công dự án Trạm xử lý nước thải KCN Sông Công II – Giai đoạn 2…</p>
								</a>
							</div>
						</li>
						<li>
							<a href="https://www.ecobaent.vn/ecoba-ent-trung-thau-du-an-xu-ly-nuoc-thai-cho-lang-da-bac-utopia-villas-resort/" data-wpel-link="internal"><img src="<?php echo THEME_URI; ?>/dist/images/ecobaent-trung-thau-xu-ly-nuoc-thai-lang-da-bac-300x251.png" alt="Ecoba ENT trúng thầu dự án xử lý nước thải cho Làng Đá Bạc – Utopia Villas & Resort" />
								<h3>Ecoba ENT trúng thầu dự án xử lý nước thải cho Làng Đá Bạc – Utopia Villas & Resort</h3>
							</a>
							<div class="mota-1"><a href="https://www.ecobaent.vn/ecoba-ent-trung-thau-du-an-xu-ly-nuoc-thai-cho-lang-da-bac-utopia-villas-resort/" style="text-decoration: none" data-wpel-link="internal">Ecoba ENT trúng thầu dự án xử lý nước thải cho Làng Đá Bạc – Utopia Villas & Resort</a></div>
							<div class="mota-hidden">
								<a href="https://www.ecobaent.vn/ecoba-ent-trung-thau-du-an-xu-ly-nuoc-thai-cho-lang-da-bac-utopia-villas-resort/" style="text-decoration: none" data-wpel-link="internal">
									<p>Vừa qua, Ecoba ENT nhận thông báo trúng thầu dự án xử lý nước thải cho Làng Đá Bạc, tên thương mại Utopia Villas & Resort tại xã Nghĩa An, tỉnh Phú Thọ (tỉnh Hòa Bình cũ)</p>
								</a>
							</div>
						</li>
						<li>
							<a href="https://www.ecobaent.vn/ecoba-ent-to-chuc-le-cong-bo-va-trao-quyet-dinh-bo-nhiem-cac-can-bo-quan-ly/" data-wpel-link="internal"><img src="<?php echo THEME_URI; ?>/dist/images/ecoba-ent-bo-nhiem-can-bo-quan-ly-moi-6-300x225.jpg" alt="Ecoba ENT tổ chức Lễ công bố và trao quyết định bổ nhiệm cán bộ quản lý" />
								<h3>Ecoba ENT tổ chức Lễ công bố và trao quyết định bổ nhiệm cán bộ quản lý</h3>
							</a>
							<div class="mota-1"><a href="https://www.ecobaent.vn/ecoba-ent-to-chuc-le-cong-bo-va-trao-quyet-dinh-bo-nhiem-cac-can-bo-quan-ly/" style="text-decoration: none" data-wpel-link="internal">Ecoba ENT tổ chức Lễ công bố và trao quyết định bổ nhiệm cán bộ quản lý</a></div>
							<div class="mota-hidden">
								<a href="https://www.ecobaent.vn/ecoba-ent-to-chuc-le-cong-bo-va-trao-quyet-dinh-bo-nhiem-cac-can-bo-quan-ly/" style="text-decoration: none" data-wpel-link="internal">
									<p>Sáng 29/11/2025, tại văn phòng Ecoba Công nghệ Môi trường đã diễn ra Lễ công bố và trao quyết định bổ nhiệm các vị trí cán bộ quản lý. Đây là hoạt động nhằm…</p>
								</a>
							</div>
						</li>
						<li>
							<a href="https://www.ecobaent.vn/ecoba-ent-trung-thau-du-an-xu-ly-nuoc-thai-xuong-son-e-scooter-vinfast-ha-tinh/" data-wpel-link="internal"><img src="<?php echo THEME_URI; ?>/dist/images/xuong-son-2-300x225.jpg" alt="Ecoba ENT trúng thầu dự án xử lý nước thải xưởng sơn VinFast E-Scooter Hà Tĩnh" />
								<h3>Ecoba ENT trúng thầu dự án xử lý nước thải xưởng sơn VinFast E-Scooter Hà Tĩnh</h3>
							</a>
							<div class="mota-1"><a href="https://www.ecobaent.vn/ecoba-ent-trung-thau-du-an-xu-ly-nuoc-thai-xuong-son-e-scooter-vinfast-ha-tinh/" style="text-decoration: none" data-wpel-link="internal">Ecoba ENT trúng thầu dự án xử lý nước thải xưởng sơn VinFast E-Scooter Hà Tĩnh</a></div>
							<div class="mota-hidden">
								<a href="https://www.ecobaent.vn/ecoba-ent-trung-thau-du-an-xu-ly-nuoc-thai-xuong-son-e-scooter-vinfast-ha-tinh/" style="text-decoration: none" data-wpel-link="internal">
									<p>Vừa qua, Ecoba ENT chính thức được lựa chọn là nhà thầu triển khai hệ thống xử lý nước thải xưởng sơn E-Scooter của Vinfast tại Hà Tĩnh</p>
								</a>
							</div>
						</li>
					</ul>

					<a class="xemtatca pull-right" style="margin: 0 0 10px" href="https://www.ecobaent.vn/danh-muc/tin-tuc/" data-wpel-link="internal">» Xem tất cả</a>
				</div>
			</div>
			<!-- col_blog -->
			<div class="col-md-4">
				<div class="box operate">
					<p class="title title-bg clearfix os-tuyendart w3danima">Hợp tác cùng Ecoba ENT</p>
					<div>
						<div class="media pad15">
							<div class="media-body">
								<p></p>
								<p style="text-align: justify">Ecoba ENT luôn hướng tới việc mở rộng và phát triển mạng lưới thầu phụ, cung ứng dựa trên nền tảng sự tin tưởng lẫn nhau và hợp tác cùng nhau phát triển...Nhấp chuột vào link liên kết để tham gia vào chuỗi cung ứng của Ecoba ENT.</p>
								<p></p>
							</div>
						</div>
						<div class="text-center button-link">
							<a class="btn btn-primary" style="width: 148px" href="https://www.ecobaent.vn/gioi-thieu-nang-luc/" data-wpel-link="internal">Giới thiệu năng lực</a>
							<a class="btn btn-primary" style="width: 148px" href="https://www.ecobaent.vn/gop-y/" data-wpel-link="internal">Góp ý</a>
						</div>
					</div>
				</div>
				<div id="col_video">
					<p class="title">Hotline</p>
					<div>
						<div class="text-center">
							<table border="0" width="95%">
								<tbody>
									<tr>
										<td style="text-align: right; line-height: 19px">
											<div style="font-size: 19px">
												<a href="tel:0901687788" data-wpel-link="internal">
													<p>Kinh doanh: 0901 68 77 88 | 08 8899 0789</p>
													<p><textarea id="BFI_DATA" style="width: 1px; height: 1px; display: none"></textarea></p>
												</a>
												<div id="WidgetFloaterPanels" class="LTRStyle" style="display: none; text-align: left; direction: ltr; visibility: hidden" translate="no">
													<a href="tel:0901687788" data-wpel-link="internal"> </a>
													<div id="WidgetFloater" style="display: none">
														<a href="tel:0901687788" data-wpel-link="internal">
															<div id="WidgetLogoPanel">
																<span id="WidgetTranslateWithSpan">TRANSLATE with <img id="FloaterLogo" /></span> <span id="WidgetCloseButton" title="Exit Translation">x</span>
															</div>
															<div id="LanguageMenuPanel">
																<div class="DDStyle_outer">
																	<input id="LanguageMenu_svid" style="display: none" autocomplete="on" name="LanguageMenu_svid" type="text" value="en" /> <input id="LanguageMenu_textid" style="display: none" autocomplete="on" name="LanguageMenu_textid" type="text" /> <span id="__LanguageMenu_header" class="DDStyle" tabindex="0">English</span>
																	<div style="position: relative; text-align: left; left: 0">
																		<div style="position: absolute; left: 0px">
																			<div id="__LanguageMenu_popup" class="DDStyle" style="display: none">
																				<table id="LanguageMenu" border="0">
																					<tbody>
																						<tr>
																							<td><a tabindex="-1" href="#ar">Arabic</a></td>
																							<td><a tabindex="-1" href="#he">Hebrew</a></td>
																							<td><a tabindex="-1" href="#pl">Polish</a></td>
																						</tr>
																						<tr>
																							<td><a tabindex="-1" href="#bg">Bulgarian</a></td>
																							<td><a tabindex="-1" href="#hi">Hindi</a></td>
																							<td><a tabindex="-1" href="#pt">Portuguese</a></td>
																						</tr>
																						<tr>
																							<td><a tabindex="-1" href="#ca">Catalan</a></td>
																							<td><a tabindex="-1" href="#mww">Hmong Daw</a></td>
																							<td><a tabindex="-1" href="#ro">Romanian</a></td>
																						</tr>
																						<tr>
																							<td><a tabindex="-1" href="#zh-CHS">Chinese Simplified</a></td>
																							<td><a tabindex="-1" href="#hu">Hungarian</a></td>
																							<td><a tabindex="-1" href="#ru">Russian</a></td>
																						</tr>
																						<tr>
																							<td><a tabindex="-1" href="#zh-CHT">Chinese Traditional</a></td>
																							<td><a tabindex="-1" href="#id">Indonesian</a></td>
																							<td><a tabindex="-1" href="#sk">Slovak</a></td>
																						</tr>
																						<tr>
																							<td><a tabindex="-1" href="#cs">Czech</a></td>
																							<td><a tabindex="-1" href="#it">Italian</a></td>
																							<td><a tabindex="-1" href="#sl">Slovenian</a></td>
																						</tr>
																						<tr>
																							<td><a tabindex="-1" href="#da">Danish</a></td>
																							<td><a tabindex="-1" href="#ja">Japanese</a></td>
																							<td><a tabindex="-1" href="#es">Spanish</a></td>
																						</tr>
																						<tr>
																							<td><a tabindex="-1" href="#nl">Dutch</a></td>
																							<td><a tabindex="-1" href="#tlh">Klingon</a></td>
																							<td><a tabindex="-1" href="#sv">Swedish</a></td>
																						</tr>
																						<tr>
																							<td><a tabindex="-1" href="#en">English</a></td>
																							<td><a tabindex="-1" href="#ko">Korean</a></td>
																							<td><a tabindex="-1" href="#th">Thai</a></td>
																						</tr>
																						<tr>
																							<td><a tabindex="-1" href="#et">Estonian</a></td>
																							<td><a tabindex="-1" href="#lv">Latvian</a></td>
																							<td><a tabindex="-1" href="#tr">Turkish</a></td>
																						</tr>
																						<tr>
																							<td><a tabindex="-1" href="#fi">Finnish</a></td>
																							<td><a tabindex="-1" href="#lt">Lithuanian</a></td>
																							<td><a tabindex="-1" href="#uk">Ukrainian</a></td>
																						</tr>
																						<tr>
																							<td><a tabindex="-1" href="#fr">French</a></td>
																							<td><a tabindex="-1" href="#ms">Malay</a></td>
																							<td><a tabindex="-1" href="#ur">Urdu</a></td>
																						</tr>
																						<tr>
																							<td><a tabindex="-1" href="#de">German</a></td>
																							<td><a tabindex="-1" href="#mt">Maltese</a></td>
																							<td><a tabindex="-1" href="#vi">Vietnamese</a></td>
																						</tr>
																						<tr>
																							<td><a tabindex="-1" href="#el">Greek</a></td>
																							<td><a tabindex="-1" href="#no">Norwegian</a></td>
																							<td><a tabindex="-1" href="#cy">Welsh</a></td>
																						</tr>
																						<tr>
																							<td><a tabindex="-1" href="#ht">Haitian Creole</a></td>
																							<td><a tabindex="-1" href="#fa">Persian</a></td>
																							<td> </td>
																						</tr>
																					</tbody>
																				</table>
																				<img style="height: 7px; width: 17px; border-width: 0px; left: 20px" alt="" />
																			</div>
																		</div>
																	</div>
																</div>
																<script type="text/javascript">
																	// <![CDATA[
																	var LanguageMenu;
																	var LanguageMenu_keys = ["ar", "bg", "ca", "zh-CHS", "zh-CHT", "cs", "da", "nl", "en", "et", "fi", "fr", "de", "el", "ht", "he", "hi", "mww", "hu", "id", "it", "ja", "tlh", "ko", "lv", "lt", "ms", "mt", "no", "fa", "pl", "pt", "ro", "ru", "sk", "sl", "es", "sv", "th", "tr", "uk", "ur", "vi", "cy"];
																	var LanguageMenu_values = [
																		"Arabic",
																		"Bulgarian",
																		"Catalan",
																		"Chinese Simplified",
																		"Chinese Traditional",
																		"Czech",
																		"Danish",
																		"Dutch",
																		"English",
																		"Estonian",
																		"Finnish",
																		"French",
																		"German",
																		"Greek",
																		"Haitian Creole",
																		"Hebrew",
																		"Hindi",
																		"Hmong Daw",
																		"Hungarian",
																		"Indonesian",
																		"Italian",
																		"Japanese",
																		"Klingon",
																		"Korean",
																		"Latvian",
																		"Lithuanian",
																		"Malay",
																		"Maltese",
																		"Norwegian",
																		"Persian",
																		"Polish",
																		"Portuguese",
																		"Romanian",
																		"Russian",
																		"Slovak",
																		"Slovenian",
																		"Spanish",
																		"Swedish",
																		"Thai",
																		"Turkish",
																		"Ukrainian",
																		"Urdu",
																		"Vietnamese",
																		"Welsh",
																	];
																	var LanguageMenu_callback = function() {};
																	var LanguageMenu_popupid = "__LanguageMenu_popup";
																	// ]]>
																</script>
															</div>
														</a>
														<div id="CTFLinksPanel">
															<a href="tel:0901687788" data-wpel-link="internal"><span id="ExternalLinksPanel"></span></a><a id="HelpLink" title="Help" href="https://go.microsoft.com/?linkid=9722454" target="_blank" rel="noopener noreferrer nofollow external" data-wpel-link="external"> <img id="HelpImg" /></a> <a id="EmbedLink" title="Get this widget for your own site"></a> <img id="EmbedImg" />
															<a id="ShareLink" title="Share translated page with friends"></a> <img id="ShareImg" />
														</div>
														<div id="FloaterProgressBar"> </div>
													</div>
													<div id="WidgetFloaterCollapsed" style="display: none">TRANSLATE with <img id="CollapsedLogoImg" /></div>
													<div id="FloaterSharePanel" style="display: none">
														<div id="ShareTextDiv"><span id="ShareTextSpan"> COPY THE URL BELOW </span></div>
														<div id="ShareTextboxDiv">
															<input id="ShareTextbox" name="ShareTextbox" readonly="readonly" type="text" />
															<!--a id="TwitterLink" title="Share on Twitter"> <img id="TwitterImg" /></a> <a-- id="FacebookLink" title="Share on Facebook"> <img id="FacebookImg" /></a-->
															<a id="EmailLink" title="Email this translation"></a> <img id="EmailImg" />
														</div>
														<div id="ShareFooter">
															<span id="ShareHelpSpan"><a id="ShareHelpLink"></a> <img id="ShareHelpImg" /></span> <span id="ShareBackSpan"><a id="ShareBack" title="Back To Translation"></a> Back</span>
														</div>
														<input id="EmailSubject" name="EmailSubject" type="hidden" value="Check out this page in {0} translated from {1}" /> <input id="EmailBody" name="EmailBody" type="hidden" value="Translated: {0}%0d%0aOriginal: {1}%0d%0a%0d%0aAutomatic translation powered by Microsoft® Translator%0d%0ahttp://www.bing.com/translator?ref=MSTWidget" />
														<input id="ShareHelpText" type="hidden" value="This link allows visitors to launch this page and automatically translate it to {0}." />
													</div>
													<div id="FloaterEmbed" style="display: none">
														<div id="EmbedTextDiv"><span id="EmbedTextSpan">EMBED THE SNIPPET BELOW IN YOUR SITE</span> <a id="EmbedHelpLink" title="Copy this code and place it into your HTML."></a> <img id="EmbedHelpImg" /></div>
														<div id="EmbedTextboxDiv">
															<input
																id="EmbedSnippetTextBox"
																name="EmbedSnippetTextBox"
																readonly="readonly"
																type="text"
																value="<div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#555555'></div><script type='text/javascript'>setTimeout(function(){var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=true&ui=true&settings=manual&from=en';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); },0);</script>" />
														</div>
														<div id="EmbedNoticeDiv">
															<span id="EmbedNoticeSpan">Enable collaborative features and customize widget: <a href="http://www.bing.com/widget/translator" target="_blank" rel="noopener noreferrer nofollow external" data-wpel-link="external">Bing Webmaster Portal</a></span>
														</div>
														<div id="EmbedFooterDiv">
															<span id="EmbedBackSpan"><a title="Back To Translation">Back</a></span>
														</div>
													</div>
													<script type="text/javascript">
														// <![CDATA[
														var intervalId = setInterval(function() {
															if (MtPopUpList) {
																LanguageMenu = new MtPopUpList();
																var langMenu = document.getElementById(LanguageMenu_popupid);
																var origLangDiv = document.createElement("div");
																origLangDiv.id = "OriginalLanguageDiv";
																origLangDiv.innerHTML = "<span id='OriginalTextSpan'>ORIGINAL: </span><span id='OriginalLanguageSpan'></span>";
																langMenu.appendChild(origLangDiv);
																LanguageMenu.Init("LanguageMenu", LanguageMenu_keys, LanguageMenu_values, LanguageMenu_callback, LanguageMenu_popupid);
																window["LanguageMenu"] = LanguageMenu;
																clearInterval(intervalId);
															}
														}, 1);
														// ]]>
													</script>
												</div>
												<div class="TnITTtw-fp-collapsed-button"> </div>
												<div class="TnITTtw-mate-fp-bar" style="width: 0px; height: 0px; opacity: 0; display: none" translate="no">
													<div class="TnITTtw-hide-fp-bar" style="display: none"> </div>
													<div class="TnITTtw-current-page-lang" style="display: none">This page is in Haitian Creole</div>
													<div class="TnITTtw-cta-button-layout" style="display: none">
														<div class="TnITTtw-spinner" style="display: none"> </div>
														<div class="TnITTtw-mw-button TnITTtw-fp-translate TnITTtw-high-cta" style="display: none">Translate to Vietnamese</div>
													</div>
													<div class="TnITTtw-change-language TnITTtw-select" style="display: none" data-for-serial="3"> </div>
													<div class="TnITTtw-stop-fp" style="display: none"> </div>
													<div class="TnITTtw-toggle-iphone-settings" style="display: none"> </div>
													<div class="TnITTtw-ui_selector" style="display: none">
														<div class="TnITTtw-options-arrow" style="display: none"> </div>
														<div class="TnITTtw-options TnITTtw-opt-3 TnITTtw-standalone" style="display: none; z-index: 998" data-serial="3">
															<div class="TnITTtw-dd-search" style="display: none"><input class="TnITTtw-dd-input" style="display: none" type="text" placeholder="Search" data-dir="to" data-width="NaN" /></div>
															<div id="selVisibleScroll-3" style="display: none">
																<div id="selEntireScroll-3" style="display: none">
																	<div class="TnITTtw-inner-options-layout" style="display: none">
																		<ul class="TnITTtw-list" style="display: none">
																			<li class="lang-af TnITTtw-option"><span id="lang-af" class="lang-af">Afrikaans</span></li>
																			<li class="lang-sq TnITTtw-option"><span id="lang-sq" class="lang-sq">Albanian</span></li>
																			<li class="lang-am TnITTtw-option"><span id="lang-am" class="lang-am">Amharic</span></li>
																			<li class="lang-ar TnITTtw-option"><span id="lang-ar" class="lang-ar">Arabic</span></li>
																			<li class="lang-hy TnITTtw-option"><span id="lang-hy" class="lang-hy">Armenian</span></li>
																			<li class="lang-az TnITTtw-option"><span id="lang-az" class="lang-az">Azerbaijani</span></li>
																			<li class="lang-bn TnITTtw-option"><span id="lang-bn" class="lang-bn">Bengali</span></li>
																			<li class="lang-bg TnITTtw-option"><span id="lang-bg" class="lang-bg">Bulgarian</span></li>
																			<li class="lang-ca TnITTtw-option"><span id="lang-ca" class="lang-ca">Catalan</span></li>
																			<li class="lang-hr TnITTtw-option"><span id="lang-hr" class="lang-hr">Croatian</span></li>
																			<li class="lang-cs TnITTtw-option"><span id="lang-cs" class="lang-cs">Czech</span></li>
																			<li class="lang-da TnITTtw-option"><span id="lang-da" class="lang-da">Danish</span></li>
																			<li class="lang-nl TnITTtw-option"><span id="lang-nl" class="lang-nl">Dutch</span></li>
																			<li class="lang-en TnITTtw-option"><span id="lang-en" class="lang-en">English</span></li>
																			<li class="lang-et TnITTtw-option"><span id="lang-et" class="lang-et">Estonian</span></li>
																			<li class="lang-fi TnITTtw-option"><span id="lang-fi" class="lang-fi">Finnish</span></li>
																			<li class="lang-fr TnITTtw-option"><span id="lang-fr" class="lang-fr">French</span></li>
																			<li class="lang-de TnITTtw-option"><span id="lang-de" class="lang-de">German</span></li>
																			<li class="lang-el TnITTtw-option"><span id="lang-el" class="lang-el">Greek</span></li>
																			<li class="lang-gu TnITTtw-option"><span id="lang-gu" class="lang-gu">Gujarati</span></li>
																			<li class="lang-ht TnITTtw-option"><span id="lang-ht" class="lang-ht">Haitian Creole</span></li>
																			<li class="lang-iw TnITTtw-option"><span id="lang-iw" class="lang-iw">Hebrew</span></li>
																			<li class="lang-hi TnITTtw-option"><span id="lang-hi" class="lang-hi">Hindi</span></li>
																			<li class="lang-hu TnITTtw-option"><span id="lang-hu" class="lang-hu">Hungarian</span></li>
																			<li class="lang-is TnITTtw-option"><span id="lang-is" class="lang-is">Icelandic</span></li>
																			<li class="lang-id TnITTtw-option"><span id="lang-id" class="lang-id">Indonesian</span></li>
																			<li class="lang-it TnITTtw-option"><span id="lang-it" class="lang-it">Italian</span></li>
																			<li class="lang-ja TnITTtw-option"><span id="lang-ja" class="lang-ja">Japanese</span></li>
																			<li class="lang-kn TnITTtw-option"><span id="lang-kn" class="lang-kn">Kannada</span></li>
																			<li class="lang-kk TnITTtw-option"><span id="lang-kk" class="lang-kk">Kazakh</span></li>
																			<li class="lang-km TnITTtw-option"><span id="lang-km" class="lang-km">Khmer</span></li>
																			<li class="lang-ko TnITTtw-option"><span id="lang-ko" class="lang-ko">Korean</span></li>
																			<li class="lang-ku TnITTtw-option"><span id="lang-ku" class="lang-ku">Kurdish (Kurmanji)</span></li>
																			<li class="lang-lo TnITTtw-option"><span id="lang-lo" class="lang-lo">Lao</span></li>
																			<li class="lang-lv TnITTtw-option"><span id="lang-lv" class="lang-lv">Latvian</span></li>
																			<li class="lang-lt TnITTtw-option"><span id="lang-lt" class="lang-lt">Lithuanian</span></li>
																			<li class="lang-mg TnITTtw-option"><span id="lang-mg" class="lang-mg">Malagasy</span></li>
																			<li class="lang-ms TnITTtw-option"><span id="lang-ms" class="lang-ms">Malay</span></li>
																			<li class="lang-ml TnITTtw-option"><span id="lang-ml" class="lang-ml">Malayalam</span></li>
																			<li class="lang-mt TnITTtw-option"><span id="lang-mt" class="lang-mt">Maltese</span></li>
																			<li class="lang-mi TnITTtw-option"><span id="lang-mi" class="lang-mi">Maori</span></li>
																			<li class="lang-mr TnITTtw-option"><span id="lang-mr" class="lang-mr">Marathi</span></li>
																			<li class="lang-my TnITTtw-option"><span id="lang-my" class="lang-my">Myanmar (Burmese)</span></li>
																			<li class="lang-ne TnITTtw-option"><span id="lang-ne" class="lang-ne">Nepali</span></li>
																			<li class="lang-no TnITTtw-option"><span id="lang-no" class="lang-no">Norwegian</span></li>
																			<li class="lang-ps TnITTtw-option"><span id="lang-ps" class="lang-ps">Pashto</span></li>
																			<li class="lang-fa TnITTtw-option"><span id="lang-fa" class="lang-fa">Persian</span></li>
																			<li class="lang-pl TnITTtw-option"><span id="lang-pl" class="lang-pl">Polish</span></li>
																			<li class="lang-pt TnITTtw-option"><span id="lang-pt" class="lang-pt">Portuguese</span></li>
																			<li class="lang-pa TnITTtw-option"><span id="lang-pa" class="lang-pa">Punjabi</span></li>
																			<li class="lang-ro TnITTtw-option"><span id="lang-ro" class="lang-ro">Romanian</span></li>
																			<li class="lang-ru TnITTtw-option"><span id="lang-ru" class="lang-ru">Russian</span></li>
																			<li class="lang-sm TnITTtw-option"><span id="lang-sm" class="lang-sm">Samoan</span></li>
																			<li class="lang-zh-CN TnITTtw-option"><span id="lang-zh-CN" class="lang-zh-CN">Simplified Chinese</span></li>
																			<li class="lang-sk TnITTtw-option"><span id="lang-sk" class="lang-sk">Slovak</span></li>
																			<li class="lang-sl TnITTtw-option"><span id="lang-sl" class="lang-sl">Slovenian</span></li>
																			<li class="lang-es TnITTtw-option"><span id="lang-es" class="lang-es">Spanish</span></li>
																			<li class="lang-sv TnITTtw-option"><span id="lang-sv" class="lang-sv">Swedish</span></li>
																			<li class="lang-ta TnITTtw-option"><span id="lang-ta" class="lang-ta">Tamil</span></li>
																			<li class="lang-te TnITTtw-option"><span id="lang-te" class="lang-te">Telugu</span></li>
																			<li class="lang-th TnITTtw-option"><span id="lang-th" class="lang-th">Thai</span></li>
																			<li class="lang-zh-TW TnITTtw-option"><span id="lang-zh-TW" class="lang-zh-TW">Traditional Chinese</span></li>
																			<li class="lang-tr TnITTtw-option"><span id="lang-tr" class="lang-tr">Turkish</span></li>
																			<li class="lang-uk TnITTtw-option"><span id="lang-uk" class="lang-uk">Ukrainian</span></li>
																			<li class="lang-ur TnITTtw-option"><span id="lang-ur" class="lang-ur">Urdu</span></li>
																			<li class="lang-vi TnITTtw-option_selected"><span id="lang-vi" class="lang-vi">Vietnamese</span></li>
																			<li class="lang-cy TnITTtw-option"><span id="lang-cy" class="lang-cy">Welsh</span></li>
																		</ul>
																	</div>
																</div>
																<div id="sel-scrollbar-3" style="display: none"> </div>
															</div>
														</div>
													</div>
													<div class="TnITTtw-fp-options" style="display: none">
														<input id="TnITTtw-always-translate" style="display: none" type="checkbox" /><label class="TnITTtw-always-translate-label" style="display: none" for="TnITTtw-always-translate"><span class="TnITTtw-always-translate-inner-label" style="max-width: 297px; display: none">Always translate Haitian Creole to Vietnamese</span></label> <br style="display: none" />
														<input id="TnITTtw-never-translate-lang" style="display: none" type="checkbox" /><label class="TnITTtw-never-translate-lang-label" style="display: none" for="TnITTtw-never-translate-lang">Never translate Haitian Creole</label> <br style="display: none" />
														<input id="TnITTtw-never-translate-site" style="display: none" type="checkbox" /><label class="TnITTtw-never-translate-site-label" style="display: none" for="TnITTtw-never-translate-site">Never translate www.ecobaent.vn</label>
													</div>
												</div>
											</div>
											<div style="font-size: 19px">
												<a href="tel:0918620467" data-wpel-link="internal">
													<p>Dịch vụ O&M: 0918 620 467</p>
												</a>
											</div>
										</td>
										<td>
											<a href="tel:0901687788" data-wpel-link="internal"><img style="margin-top: -11px" class="hotline" src="<?php echo THEME_URI; ?>/dist/images/icon-hotline.png" alt="hotline ecoba ent" /></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div id="col_video">
					<p class="title"><a href="https://www.ecobaent.vn/video" data-wpel-link="internal">VIDEO</a></p>
					<ul id="list_video">
						<li>
							<a href="#" class="img" data-toggle="modal" data-target="#videoModal" data-thevideo="https://www.youtube.com/embed/2RanseVbtmQ"><span class="playIcon"></span><img src="<?php echo THEME_URI; ?>/dist/images/2207-phim-gioi-thieu-nang-luc-ecobaent-final.png" class="media-object img-boder" alt="PHIM GIỚI THIỆU | CÔNG TY TNHH ECOBA CÔNG NGHỆ MÔI TRƯỜNG (ECOBA ENT)" style="width: 100%; height: 90px" /></a>
							<p class="mota">PHIM GIỚI THIỆU | CÔNG TY TNHH ECOBA CÔNG NGHỆ MÔI TRƯỜNG (ECOBA ENT)</p>
						</li>
						<li>
							<a href="#" class="img" data-toggle="modal" data-target="#videoModal" data-thevideo="https://www.youtube.com/embed/9cwjWs9-bFg"><span class="playIcon"></span><img src="<?php echo THEME_URI; ?>/dist/images/ecoba-ent-video-34.png" class="media-object img-boder" alt="Trạm xử lý nước thải KCN Tam Thăng 2, Quảng Nam | Tổng CS 3.000 m3/NGĐ" style="width: 100%; height: 90px" /></a>
							<p class="mota">Trạm xử lý nước thải KCN Tam Thăng 2, Quảng Nam | Tổng CS 3.000 m3/NGĐ</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	<!-- bottom_content -->
	<section>
		<div class="container" style="margin-top: -14px">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 os-tuyendart">
					<div class="title-underline">
						<h3>khách hàng - đối tác</h3>
					</div>
					<div id="owl-demo3" class="owl-carousel">
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/8.22.-Deep-C.png"
									alt="<p>Deep C</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/3.-Logo-Viglacera.jpg"
									alt="<p>Viglacera</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/panasonic/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/4.Panasonic_logo_bl_posi_JPEG.jpg"
									alt="<p>Panasonic</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/tram-xu-ly-nuoc-thai-giai-doan-i-kcn-tam-thang-2/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/capella.png"
									alt="<p>Capella</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/nang-cap-va-cai-tao-nha-may-xu-ly-nuoc-thai-kcn-nam-sach/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/logo-e1511321910546.jpg"
									alt="<p>VID Group</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/toshiba/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/3.Toshiba-Logo-HD.jpg"
									alt="<p>Toshiba</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/apec-group.png"
									alt="<p>Apec</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/16.-logoEcopark.jpg"
									alt="<p>Ecopark</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/11.-KBC.jpg"
									alt="<p>Kinh Bắc</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/9.-LOGO-PHUMY-ve-final-01.png"
									alt="<p>Phú Mỹ</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/shimz/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/19.jpg"
									alt="<p>Shimz</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/kobelco/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/20.jpg"
									alt="<p>Kobelco</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/samsung/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/samsung.png"
									alt="<p>Samsung</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/lotte/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/2.lotte-group-logo.jpg"
									alt="<p>Lotte</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/kolon-global/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/8.-kolon-2.png"
									alt="<p>Kolon</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/united-nations/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/17.Lien-hop-quoc.jpg"
									alt="<p>United Nations</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/pepsico/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/7.jpg"
									alt="<p>Suntory</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/bv-viet-phap/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/22.jpg"
									alt="<p>BV Viet Phap</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/khach-hang-vsip/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/5.vip_.jpg"
									alt="<p>Vsip</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/ciputra/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/6.jpg"
									alt="<p>Ciputra</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/gamuda/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/9.Lo-go-Gamuda.jpg"
									alt="<p>Gamuda</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/cp-group/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/10.CP-Group-lo-go.jpg"
									alt="<p>C.P.Group</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/vin-group/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/1.LogoVinGroup.jpg"
									alt="<p>Vingroup</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/sun-group/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/2.jpg"
									alt="<p>Sun Group</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/flc-group/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/3.Logo-FLC-Group.jpg"
									alt="<p>FLC Group</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/hoa-phat-group/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/2.-Hoa-phat.jpg"
									alt="<p>Hòa Phát Group</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="https://www.ecobaent.vn/du-an/client/tan-hoang-minh-group/" data-wpel-link="internal"><img
									src="<?php echo THEME_URI; ?>/dist/images/5..jpg"
									alt="<p>Tân Hoàng Minh Group</p>
" /></a>
						</div>
						<div class="item col-xs-11" style="padding: 0px 7px">
							<a href="#"><img
									src="<?php echo THEME_URI; ?>/dist/images/6-1.jpg"
									alt="<p>HUD</p>
" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
?>