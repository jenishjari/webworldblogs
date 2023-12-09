<?php
/* Template Name: Schedule Appointment Page */

get_header();

?>
<!-- Start blog-list -->
<div id="main-content" class="main-content nyc-schedule-page ny-mac-repair-page  <?php echo esc_attr(freshcodes_sidebar_position()); ?>">
	<div id="primary" class="content-area">
	<?php freshcodes_mac_repair_section_fun(); ?>
	<div class="nyc-heading theme-container">
			 <h2>Schedule Appointment</h2>
	</div>
	<section class="main_contents padd">
    <div class = "main_content_overlay">
        <div class="container-fluid theme-container">
            <div class="row vertical-center w-contents">
				<?php 
					$app_html = '';
					$appoinmtent_link = "https://app.acuityscheduling.com/schedule.php?owner=11247254"; 
					if($appoinmtent_link){
						$app_html= "<iframe src = '".$appoinmtent_link."' class = 'iframe_app' ></iframe><script src='https://d3gxy7nm8y4yjr.cloudfront.net/js/embed.js' type='text/javascript'></script>";					
					}
				?>		
				<?php if(empty($post_thumbnail_id)) { ?>
				<div class="col-md-12 col-sm-12 col-xs-12 vertical-center text-left p-contents">
					<div class="about-descs imainContents iframe_wrapper" data-aos="slide-right" data-aos-delay="0"  data-aos-duration = "800" data-aos-once = "true">
					
						<?php echo get_field('content_heading') ? '<h4 class = "col-md-12 heading orange-text">'.get_field('content_heading').'</h4>' : ''; ?>
						<?php echo get_field('content_subheading') ? '<p class="smallHead">'.get_field('content_subheading').'</p>' : ''; ?>      
						<?php  the_content();  ?>
						<?php echo $app_html; ?>
					</div>
				</div>
				<?php } else { ?>
				<div class="col-md-4">
					<div class="main_img_wrapper iframe_wrapper">
						<?php echo get_field('content_heading') ? '<h4 class = "col-md-12 heading orange-text">'.get_field('content_heading').'</h4>' : ''; ?>
						<?php echo get_field('content_subheading') ? '<p class="smallHead">'.get_field('content_subheading').'</p>' : ''; ?>
						<img class = '<?php echo $layout == 'problem_page' ? 'hide_mobile_small' : ''; ?>' src = "<?php echo optimize_image($post_thumbnail_id, '400x500', 80, false, 'auto'); ?>  " />
					</div>
				</div>
				<div class="col-md-8 vertical-center text-left">
					<div>
						
						<div class="about-descs <?php echo $layout != 'problem_page' ? 'imainContents' : ''; ?>"data-aos="slide-right" data-aos-delay="0"  data-aos-duration = "800" data-aos-once = "true">
							<?php   
								the_content(); 
							?>    
							<?php echo $app_html; ?>
						</div>
					</div>
				</div>
			  <?php } ?>                     
		  </div>
	  </div>
  </div>
</section>
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