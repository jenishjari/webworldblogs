<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Freshcodes
 * @since Freshcodes 1.0
 */
?>
<?php freshcodes_content_after(); ?>
</div>
<!-- .main-content-inner -->
</div>
<!-- .main_inner -->
</div>
<!-- #main -->
<?php freshcodes_footer_before(); ?>
<footer id="colophon" class="site-footer" >
		<section class="ny-ourservice-section">
		   <div class="ny-ourservice-main theme-container">
			  <div class="ny-section-heading">
				 <h1>Popular Recent Repairs</h1>
			  </div>
			  <div class="ny-ourservice-inner ny-grid">
				 <div class="ny-ourservice-item">
					<a href="/macbook/water-damage" target="_self">
					   <div class="ny-ourservice-imgblock">
						  <img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/ny-macbook-air.png" alt="ny-lenovo-img">
						  <div class="ny-ourservice-details">
							 <div class="ny-ourservice-title">
								<h4>Macbook Water Damage Repair</h4>
							 </div>
						  </div>
					   </div>
					</a>
				 </div>
				 <div class="ny-ourservice-item">
					<a href="/laptop/keyboard/" target="_self">
					   <div class="ny-ourservice-imgblock">
						  <img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/ny-keyboard-replace.png" alt="ny-lenovo-img">
						  <div class="ny-ourservice-details">
							 <div class="ny-ourservice-title">
								<h4>Laptop Keyboard Replacement</h4>
							 </div>
						  </div>
					   </div>
					</a>
				 </div>
				 <div class="ny-ourservice-item">
					<a href="/macbook/screen-repair" target="_self">
					   <div class="ny-ourservice-imgblock">
						  <img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/ny-mac-min.png" alt="ny-lenovo-img">
						  <div class="ny-ourservice-details">
							 <div class="ny-ourservice-title">
								<h4>Macbook Screen Repair</h4>
							 </div>
						  </div>
					   </div>
					</a>
				 </div>
			  </div>
		   </div>
		</section>
		
		<section class="ny-testimonial-section">
			<div class="ny-testimonial-main theme-container">
				<div class="ny-section-heading">
					<h1>Reviews - Testimonials</h1>
				</div>
				<div class="ny-whychoose-testimonial-inner">
					<?php echo do_shortcode( '[trustindex no-registration=google]' ); ?>
				</div>
			</div>
		</section>
		<?php if ( is_active_sidebar( 'footer-newsletter-widget-area' ) ) : ?>
			<div class="footer-newsletter">
				<div class="theme-container">
					<?php dynamic_sidebar( 'footer-newsletter-widget-area' ); ?>
				</div>
			</div>
		<?php endif; ?>		
		<?php footer_footer_inside(); ?>
		<?php get_sidebar('footer'); ?>
	 	<div class="footer-bottom">
			<div class="theme-container">
				<div class="footer-left">			
					<div class="site-info"> <?php echo esc_html__( 'Copyright', 'nyclaptoprepair' ); ?> &copy; <?php echo esc_attr(date('Y')); ?> <?php echo esc_attr(stripslashes(get_option('freshcodes_footer_slog')));?>
							<?php do_action( 'freshcodes_credits' ); ?>
					</div>
				</div>
				<?php if ( is_active_sidebar( 'footer-payment-widget-area' ) ) : ?>
					<div class="footer-right">	
						<?php dynamic_sidebar( 'footer-payment-widget-area' ); ?>
					</div>
				<?php endif; ?>	
			</div>
		</div>
</footer>
<!-- #colophon -->
<?php freshcodes_footer_after(); ?>
</div>
<!-- #page -->
<?php freshcodes_go_top(); ?>
<?php freshcodes_get_widget('before-end-body-widget'); ?>
<?php wp_footer(); ?>
</body>
</html>