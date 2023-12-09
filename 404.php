<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Freshcodes
 * @since Freshcodes 1.0
 */
get_header(); ?>
<div class="main-content-inner woocommerce">	
<?php if (get_option('freshcodes_page_sidebar') == 'yes') : ?>
<div id="primary" class="content-area">
<?php else : ?>
<div id="primary" class="main-content-inner-full theme-container">
<?php endif; ?>
  <div id="content" class="site-content theme-container" role="main">
    <div class="page-content">
		<div class="nyc-404-banner">
			<img src="/wp-content/uploads/2023/10/nyc-404-banner-scaled.jpg" alt="nyc-404-banner"/>
		</div>
      <p class="woocommerce-info">
            <?php // translators: %s: It looks like nothing was found at this location. Maybe try a search? ?>
                <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'nyclaptoprepair' ); ?>
      </p>
      <?php get_search_form(); ?>
    </div><!-- .page-content -->
  </div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>