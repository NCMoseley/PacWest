<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<div class="footer-left">
					<div class="footer-logo">
						<img src="<?php echo get_template_directory_uri() . '/assets/Logos/PNG/PWC-Dark.png'?>"/>

					</div>
					<div class="footer-left-text">
						<p>Innovating Cannabis Culture in Canada </p>
					</div>
					<div class="footer-left-text"></div>
					<div class="footer-social-media">
						<i class="fa fa-facebook" aria-hidden="true"></i>
						<i class="fa fa-twitter" aria-hidden="true"></i>
						<i class="fa fa-instagram" aria-hidden="true"></i>
						<i class="fa fa-linkedin" aria-hidden="true"></i>
					</div>
				</div>

					<div class="footer-right">
						<div class="footer-right-wrapper">
						<div class="footer-right-text">
						<h2 class="uppercase">Be the first to know </h2>
						<p>PacWest will begin selling cannabis to distributors and medical users beginning in 2018. Be the first to learn of new products, and stay up to date with PacWest and company news</p>
						</div>
						<div class="footer-sign-up">
							<?php echo do_shortcode( '[contact-form-7 id="19" title="Email Sign Up"]' ); ?>
						</div>
						<p class="footer-copy">&copy 2018 Pacific West Canopy Ltd. All rights reserved</p>
					</div>
					</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
