<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Freshcodes
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <link rel="profile" href="//gmpg.org/xfn/11"/>
      <?php print_r(freshcodes_header()); ?>
      <?php wp_head(); ?> 
   </head>
   <body <?php body_class(); ?>>
   <div class="bg-overlay"></div>
      <?php if (get_option('freshcodes_show_site_loader') == 'yes'): ?>	  
         <!-- Css Spinner--> 
         <?php freshcodes_site_loader(); ?>
      <?php endif; ?>	
      <div id="page" class="hfeed site">
      <?php if (get_header_image()): ?>
      <div id="site-header header-outer">
         <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="<?php echo esc_attr_e('Siteheader', 'nyclaptoprepair'); ?>">
         </a>
      </div>
      <?php endif; ?>
      <!-- Header -->
      <?php freshcodes_header_before(); ?>
      <?php $fc_header_sticky = get_option("freshcodes_header_sticky"); ?>
      <header id="masthead" class="site-header header-style header-fix <?php if($fc_header_sticky == 'top-sticky'){ echo "header" . esc_attr($fc_header_sticky);} ?> <?php echo esc_attr(freshcodes_sidebar_position()); ?>" >
            <div class="header-main site-header-fix-<?php if($fc_header_sticky == 'top-sticky'){ echo "header-" . esc_attr($fc_header_sticky);} ?> ">
               <?php freshcodes_header_inside(); ?>	
         
                  <!-- Start header_top -->
                     <div class="header-top">
                        <div class="theme-container">
                              <div class="header-left">
								  
								  <!-- Header LOGO-->
                                 <div class="header-logo">
                                    <?php if (get_option('freshcodes_logo_image') != ''): ?>
                                       <a href="<?php echo esc_url(home_url('/')); ?>"
                                          title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                             <?php freshcodes_get_logo(); ?>
                                       </a>
                                    <?php else: ?>
                                       <h3 class="site-title">
                                             <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                                <span class="logo-text"><?php echo get_option('freshcodes_logo_image_alt'); ?></span>
                                             </a>
                                       </h3>
                                    <?php endif; ?>
                                    <?php if (get_option('freshcodes_logo_image') == '' && get_option('freshcodes_logo_image_alt') == ''): ?>
                                       <h3 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                                <span class="logo-text"><?php echo esc_html(get_bloginfo('name', 'display')); ?></span>
                                       </h3>
                                    <?php endif; ?>
                                    <?php if (get_option('freshcodes_showsite_description') == 'yes'): ?>
                                       <h2 class="site-description">
                                             <?php bloginfo('description'); ?>
                                       </h2>
                                    <?php endif; // End freshcodes_showsite_description ?>
                                 </div>
                                 <!-- Header Mob LOGO-->
                                 <div class="header-mob-logo">
                                    <?php if (get_option('freshcodes_mob_logo_image') != ''): ?>
                                       <a href="<?php echo esc_url(home_url('/')); ?>"
                                          title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                             <?php freshcodes_get_mob_logo(); ?>
                                       </a>
                                    <?php else: ?>
                                       <h3 class="site-title">
                                             <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                                <span class="logo-text"><?php echo get_option('freshcodes_mob_logo_image_alt'); ?></span>
                                             </a>
                                       </h3>
                                    <?php endif; ?>
                                    <?php if (get_option('freshcodes_mob_logo_image') == '' && get_option('freshcodes_mob_logo_image_alt') == ''): ?>
                                       <h3 class="site-title">
                                             <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                                <span class="logo-text"><?php echo esc_html(get_bloginfo('name', 'display')); ?></span>
                                             </a>
                                       </h3>
                                    <?php endif; ?>
                                    <?php if (get_option('freshcodes_showsite_description') == 'yes'): ?>
                                       <h2 class="site-description">
                                             <?php bloginfo('description'); ?>
                                       </h2>
                                    <?php endif; // End freshcodes_showsite_description ?>
                                 </div>
                              </div>
                               <!-- End Header left-->
                              <!-- start Header Right-->
                              <div class="header-right">
								  <!-- Header Top Text Start -->
                                 	<?php freshcodes_header_top_text_fun(); ?>
                                 <!-- Header Top Text End -->
                                    <!-- Topbar link -->
                                    <div class="freshcodes-link-main">
                                    <?php 
											$fc_header_link_icon = get_option('freshcodes_header_link_icon');
                                             $fc_header_text1 = get_option('freshcodes_header_text1');
                                             $fc_header_text1_link = get_option('freshcodes_header_text1_link');

                                          if($fc_header_text1 !== "" ) {
                                       ?>
										 
                                       <div class="freshcodes-header-link">
										 <?php  if($fc_header_link_icon !== "") { ?>
												<div class="fc-header-icon-div">
													<a href="mailto: info@NYCLaptopRepair.org" aria-label="freshcodes-header-icon"><img src="<?php echo esc_url($fc_header_link_icon); ?>" alt="freshcodes-header-icon" /></a>
												</div>
											<?php } ?>
										   <div class="fc-header-text-main">
											   <a href="mailto: info@NYCLaptopRepair.org" aria-label="info@NYCLaptopRepair.org"><span class="fc-header-text"><?php echo $fc_header_text1; ?></span></a>
											</div>
                                       </div>
                                          <?php } ?>
                                       <?php 
                                             $fc_header_text2 = get_option('freshcodes_header_text2');
                                             $fc_header_text2_link = get_option('freshcodes_header_text2_link');

                                          if($fc_header_text2 !== "" ) {
                                       ?>
                                       <div class="freshcodes-header-link">
                                          <span class="fc-header-text"><a href="<?php if($fc_header_text2_link !== ""){ echo esc_url($fc_header_text1_link); } ?>"><?php echo $fc_header_text2; ?></a>
                                       </div>
                                       <?php } ?>
                                    </div>
                              </div>                                       
                              <!-- End Header Right--> 
                        </div>
                     </div>
                  </div>
                   <!-- End header-top -->
                  <!-- Start header_top -->
                  <div class="header-main site-header-fix-<?php if($fc_header_sticky == 'bottom-sticky'){ echo esc_attr($fc_header_sticky);} ?> ">
                     <div class="header-bottom">
                        <div class="theme-container">
                           <div class="header-left">
							    <!-- #site-navigation -->
                                    <nav id="site-navigation" class="navigation-bar main-navigation">
                                       <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e('Skip to content', 'nyclaptoprepair'); ?>"><?php esc_html_e('Skip to content', 'nyclaptoprepair'); ?></a>	
                                       <div class="mega-menu">
                                          <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'mega')); ?>		
                                       </div>
                                       <?php if (is_active_sidebar('category-image')) : ?>
                                          <div class="fc-category-image">
                                                <?php freshcodes_get_widget('category-image');  ?>	
                                          </div>
                                       <?php endif; ?>
                                    </nav>
                                    <nav class="mobile-navigation">
                                       <?php // translators : Menu  ?>
                                       <span class="menu-toggle"><?php esc_html_e('Menu', 'nyclaptoprepair'); ?></span>
                                       <div class="mobile-menu">
                                          <div class="fc-mobile-text">	
                                          <?php 
                                             $fc_mobile_menu_text = get_option('freshcodes_mobile_menu_text');
                                             if(!empty($fc_mobile_menu_text)) : ?>
                                                <h6 class="fc-mob-menu-text"><?php echo  esc_attr($fc_mobile_menu_text); ?></h6>
                                             <?php endif; ?>
                                             <span class="close-menu"></span>
                                          </div>
                                          <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'mobile-menu-inner')); ?>
                                       </div>
                                    </nav>
                           </div>                          
                              <div class="header-right">
								  <?php if (is_active_sidebar('header-top-social')): ?>
                                    <div class="freshcodes-social-links">
                                       <div class="header-toggle"></div>
                                       <?php freshcodes_get_widget('header-top-social'); ?>	
                                    </div>
                                 <?php endif; ?>
                              </div>
                        </div>                                           
                     </div>
                  </div>
                   <!-- End header-top -->
            <!-- </div> -->
      </header>        
      <?php do_action('freshcodes_page_title'); ?>			
      <?php freshcodes_header_after(); ?>
      <?php freshcodes_main_before(); ?>
      <?php
$freshcodes_page_layout = freshcodes_page_layout();
if (isset($freshcodes_page_layout) && !empty($freshcodes_page_layout)):
    $freshcodes_page_layout = $freshcodes_page_layout;
else:
    $freshcodes_page_layout = '';
endif;
?>
      <?php
$shop = '0';
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))):
    if (is_shop()) $freshcodes_page_layout = 'wide-page';
    $shop = '1';
endif;
?>
      <?php
global $wp;
$current = esc_url(home_url(add_query_arg(array($_GET), $wp->request)));
$str = substr(strrchr($current, '?'), 1);
if ($str == 'left') {
    $div_class = 'left-sidebar';
} elseif ($str == 'right') {
    $div_class = 'right-sidebar';
} elseif ($str == 'full') {
    $div_class = 'full-width';
} else {
    $div_class = freshcodes_sidebar_position();
}
if (get_option('freshcodes_page_sidebar') == 'no'):
    $div_class = "full-width";
endif;
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    if (is_product()) {
        if (get_option('freshcodes_shop_sidebar') == 'no'):
            $div_class = "full-width";
        endif;
    }
}
if (is_home() && freshcodes_is_blog()) {
    $div_class = "left-sidebar";
}
?>
      <div id="main" class="site-main <?php echo esc_attr($div_class); ?> <?php echo esc_attr(freshcodes_page_layout()); ?>">
      <div class="main_inner">
      <?php
$freshcodes_page_layout = freshcodes_page_layout();
if (isset($freshcodes_page_layout) && !empty($freshcodes_page_layout)):
    $freshcodes_page_layout = $freshcodes_page_layout;
else:
    $freshcodes_page_layout = '';
endif;
if ($freshcodes_page_layout == 'wide-page'): ?>
      <div class="main-content-inner-full">
      <?php
else:
    if (is_archive() || is_tag() || is_404()): ?>
      <div class="main-content">
      <?php
    else: ?>
      <div class="main-content-inner <?php echo esc_attr(freshcodes_sidebar_position()); ?>">
      <?php
    endif; ?>
      <?php
endif; ?>
      <?php freshcodes_content_before(); ?>