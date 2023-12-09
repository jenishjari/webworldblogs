<?php
/* Template Name: Home */ 
?>
<?php 
get_header();
?>
<div id="main-content" class="main-content home-page <?php echo esc_attr(freshcodes_sidebar_position()); ?> <?php echo esc_attr(freshcodes_page_layout()); ?> ">
  <?php
	if ( is_front_page() && freshcodes_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
	?>
	<?php if (get_option('freshcodes_page_sidebar') == 'yes') : ?>
	<div id="primary" class="content-area">
	<?php else : ?>
	<div id="primary" class="main-content-inner-full">
	<?php endif; ?> 
    <div id="content" class="site-content" role="main">
		<section class="ny-mainbanner-section">
			<div class="ny-mainbanner-main">
				<div class="ny-mainbanner-inner">
					<div class="banner-overlay"></div>
					<div class="ny-banner-text theme-container">
						<div class="ny-textmain">
							<div class="ny-main-title">
								<h1>Laptop & MacBook Repair in NYC</h1>
								<p class="banner-home-text">
								When your laptop or MacBook is not running the way it should and you find yourself frustrated, know that you can turn to our trusted experts for the repairs you need. Our technicians are trained in both laptop and MacBook repairs and can fix any number of issues that may arise with them including broken screens, damaged keyboards, failing hard drives, and more. We can also handle complex problems including water damage, data recovery, and overheating. If you need laptop & MacBook repair in NYC, give our team a call today! 
	
								</p>
							</div>
						</div>
						<div class="ny-contactform-section">
							<div class="ny-contactform-inner">
								<?php echo do_shortcode( '[contact-form-7 id="def0960" title="Main Contact Form"]' ); ?>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		
		<?php freshcodes_choose_us(); ?>
		
		<section class="ny-macrepair-section">
			<div class="ny-macrepair-main theme-container">
				<div class="ny-section-heading">
					<h1>MAC Repairs</h1>
				</div>
				<div class="ny-macrepair-inner">
					<?php freshcodes_macrepair(); ?>
				</div>
			</div>
		</section>
		
		<section class="ny-brandrepairs-section">
			<div class="ny-brandrepairs-main theme-container">
				<div class="ny-section-heading">
					<h1>Other Brand Repairs</h1>
				</div>
				<div class="ny-brandrepairs-inner">
					<?php freshcodes_brandrepairs(); ?>
				</div>
			</div>
		</section>
		
		<section class="ny-textbanner-section">
			<div class="ny-textbanner-main theme-container">
				<div class="ny-textbanner-inner">
					<div class="ny-textbanner-banner">
						<?php $nyc_home_banner = get_field("nyc_laptop_seo_section_image"); ?>
						<img src="<?php echo esc_url($nyc_home_banner["url"]); ?>" alt="<?php echo $nyc_home_banner["title"]; ?>"/>
					</div>
					<div class="ny-textbanner-text">
						<h1 class="ny-title"> NYC Laptop Repair Service Center
</h1>
						<span class="ny-content">Your laptop is your central hub for everything from entertainment to socializing to completing work away from the office. When you find that your laptop does not work the way you expect it to, it can be frustrating. At NYC Laptop Repair, we offer repairs for all types of issues that may arise with your laptop from issues with the battery to a broken screen or even a damaged keyboard. Our technicians are trained, skilled, and prepared to repair your device today. </span>
						<span class="ny-content-sub">If you need any type of laptop repair, we invite you to bring your device to our NYC laptop repair service center. Give our team a call today to set up an appointment. </span>
						<h2 class="ny-title">Laptops We Service</h2>
						<ul class="ny-list">
							<li class="ny-item">HP</li>
							<li class="ny-item">Lenovo</li>
							<li class="ny-item">Dell </li>
							<li class="ny-item"><a href="/asus-laptop-repair/" aria-label="Asus Laptop Repair">Asus Laptop Repair</a></li>
							<li class="ny-item"><a href="/acer-laptop-repair/" aria-label="Acer Laptop Repair">Acer Laptop Repair</a></li>
							<li class="ny-item">And many others</li>

						</ul>
						<div class="ny-textbanner-btn">
							<a href="<?php esc_url(site_url()); ?>/contact-us/" class="fc-btn">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
      <?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					// Include the page content template.
					get_template_part( 'content', 'page' ); ?>
      <?php endwhile;
			?>
    </div><!-- #content -->
	</div><!-- #primary -->
   <?php 
		if (get_option('freshcodes_page_sidebar') == 'yes') : 
	get_sidebar( 'content' );
	get_sidebar();
		endif;  ?><!-- #main-content -->
</div>
<?php get_footer(); ?>