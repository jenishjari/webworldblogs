<?php
/* Template Name: Inner Repairing Page */

get_header();

?>
<!-- Start blog-list -->
<div id="main-content" class="main-content ny-inner-repair-page  <?php echo esc_attr(freshcodes_sidebar_position()); ?>">
	<div id="primary" class="content-area">    
        <div id="content" class="site-content" role="main">
            <div id="container" class="ny-inner-repair">
                 <?php freshcodes_inner_repair_fun(); ?>
				 <?php freshcodes_choose_us(); ?>
				<div class="nyc-grid-section theme-container">
					<div class="ny-lprepair-text">
						<?php if(get_field('nyc_text_other_inner_repair_title')){ ?>
							<h2 class="ny-title"><?php the_field('nyc_text_other_inner_repair_title') ?></h2>
						<?php } ?>
						
						<?php if(get_field('nyc_text_other_inner_repair_content_2')){ ?>
							<span class="ny-content-sub"><?php the_field('nyc_text_other_inner_repair_content_2') ?></span><br><br>
						<?php } ?>
						<?php if(get_field('nyc_text_other_inner_repair_content_3')){ ?>
							<span class="ny-content-sub"><?php the_field('nyc_text_other_inner_repair_content_3') ?></span><br><br>
						<?php } ?>
						<?php if(get_field('nyc_text_other_inner_repair_content_4')){ ?>
							<span class="ny-content-sub"><?php the_field('nyc_text_other_repair_content_4') ?></span><br><br>
						<?php } ?>
						<div class="ny-brandrepairs-btn">
							<a href="/contact-us" class="fc-btn">Contact Us</a>
						</div>
					</div>
					<?php if(get_field('nyc_text_other_inner_repair_section_image')){ ?>
						<div class="ny-lprepair-banner">
							<img src="<?php the_field("nyc_text_other_inner_repair_section_image"); ?>" alt="">
						</div>
					<?php } ?>
				</div>
				<?php if(get_field('nyc_inner_custom_section')){ ?>
					<?php the_field("nyc_inner_custom_section"); ?>
				<?php } ?>
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