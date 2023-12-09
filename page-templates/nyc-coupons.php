<?php
/* Template Name: Coupons Page */

get_header();

?>
<!-- Start blog-list -->
<div id="main-content" class="main-content nyc-coupons-page ny-mac-repair-page  <?php echo esc_attr(freshcodes_sidebar_position()); ?>">
	<div id="primary" class="content-area">    
        <div id="content" class="site-content" role="main">
            <div id="container" class="ny-mac-repair">
                <?php freshcodes_mac_repair_section_fun(); ?>
				<section>
					<div class="nyc-coupons-main">
						<div class="nyc-coupons-inner theme-container">
							<div class="nyc-heading">
								<h2>Coupons</h2>
							</div>
							<div class="nyc-content">
								<span>Take advantage of unbeatable discounts with us. Here, you will find coupons so that you can get the absolute best deal on our services. Check out our coupons! </span>
							</div>
							<div class="nyc-coupons-banner">
								<div class="nyc-image-block">
									<img src="/wp-content/uploads/2023/10/nyc-coupon1.jpg" alt="nyc-coupon1"/>
								</div>
								<div class="nyc-image-block">
									<img src="/wp-content/uploads/2023/10/nyc-coupon2.jpg" alt="nyc-coupon2"/>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php freshcodes_choose_us(); ?>
            </div>
        </div>
  </div><!-- #primary -->
    <?php 
        if (get_option('freshcodes_page_sidebar') == 'yes') : 
            get_sidebar( 'content' );
            get_sidebar();
        endif;
    ?>
</div>
<?php
    get_footer();
?>