<?php
/* Template Name: Repair Page */

get_header();

?>
<!-- Start blog-list -->
<div id="main-content" class="main-content ny-repair-page  <?php echo esc_attr(freshcodes_sidebar_position()); ?>">
	<div id="primary" class="content-area">    
        <div id="content" class="site-content" role="main">
            <div id="container" class="ny-repair">
				<?php freshcodes_repair_section_fun(); ?>
				<?php freshcodes_choose_us(); ?>
				<?php freshcodes_common_text_section_fun(); ?>
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