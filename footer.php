<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biotech
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'biotech')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'biotech'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'biotech'), 'biotech', '<a href="http://underscores.me/">longpv</a>');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<script>
	var read_more = "Xem thêm";
</script>


<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true" style="z-index:99999;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div><iframe width="100%" height="350" src="" frameborder="0" allowfullscreen=""></iframe></div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>



<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('#menu_top').hcSticky({
			top: -1,
			bottomEnd: 100,
			wrapperClassName: 'sidebar-sticky'
		});

		$('#menu_mobile').hcSticky({
			top: 1,
			bottomEnd: 100,
			wrapperClassName: 'sidebar-sticky'
		});

		autoPlayYouTubeModal();

		function autoPlayYouTubeModal() {

			var trigger = $("body").find('[data-toggle="modal"]');

			trigger.click(function() {

				var theModal = $(this).data("target"),

					videoSRC = $(this).attr("data-theVideo"),

					videoSRCauto = videoSRC + "?autoplay=1";

				$(theModal + ' iframe').attr('src', videoSRCauto);

				$(theModal + ' button.close').click(function() {

					$(theModal + ' iframe').attr('src', videoSRC);

				});

			});
		}

		$('#inner-content-div').slimScroll({
			height: '200px',
			wheelStep: 20,
			alwaysVisible: true
		});

	});
</script>

</body>

</html>