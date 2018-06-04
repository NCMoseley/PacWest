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
					<div id="footer-sidebar" class="secondary">
							<div id="footer-sidebar1">
							<?php
                            if (is_active_sidebar('footer-sidebar-1')) {
                                dynamic_sidebar('footer-sidebar-1');
                            }
                            ?>
					</div>

					</div>
					
					<div class="footer-social-media">
					<a href="https://www.facebook.com/pacwestcanopy">
						<i class="fa fa-facebook" aria-hidden="true"></i>
					</a>
					<a href="https://twitter.com/pacwestcanopy">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>
					<!-- <a href="https://www.linkedin.com/">	
						<i class="fa fa-linkedin" aria-hidden="true"></i>
					</a> -->
					<a href="https://www.instagram.com/pacwestcanopy/">	
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a>	
					</div>
					</div>
					
					</div> <!-- close footer left -->

					<div class="footer-right">
						
						<div class="footer-right-wrapper">
				
						<div id="footer-sidebar2">
						<?php
                        if (is_active_sidebar('footer-sidebar-2')) {
                            dynamic_sidebar('footer-sidebar-2');
                        }
                        ?>
						</div>

						<div class="footer-sign-up">
							<?php echo do_shortcode('[contact-form-7 id="75" title="Email Sign Up"]'); ?>
						</div>
 						
						<div id="footer-sidebar3">
						<?php
                        if (is_active_sidebar('footer-sidebar-3')) {
                            dynamic_sidebar('footer-sidebar-3');
                        }
                        ?>
						</div>

						</div>
					
					</div>
					</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
