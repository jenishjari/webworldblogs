<?php
/*
  Plugin Name: Freshcodes Custom Widgets
  Description: Freshcodes Default Homepage Slide Show for freshcodes WordPress themes.
  Version: 1.0
  Author: Freshcodes
  @copyright  Copyright (c) 2010 Freshcodes. 
 */
?>
<?php 
//  Creating Widget 
// Reference : http://codex.wordpress.org/Widgets_API
/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override freshcodes_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 
 * @uses register_sidebar
 */
function freshcodes_register_sidebars() {
	register_sidebar( array(
		'name' => esc_html__( 'Header Shopping Cart Widget Area', 'nyclaptoprepair' ),
		'id' => 'header-widget',
		'description' => esc_html__( 'The Cart on header', 'nyclaptoprepair' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s tab_content">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Header Search Widget Area', 'nyclaptoprepair' ),
		'id' => 'header-search',
		'description' => esc_html__( 'The header search widget area', 'nyclaptoprepair' ),
		'before_widget' => '',
		'after_widget' => " ",
		'before_title' => ' ',
		'after_title' => ' ',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Top Header Social Media Widget Area', 'nyclaptoprepair' ),
		'id' => 'header-top-social',
		'description' => esc_html__( 'Top Header Social Media Widget Area', 'nyclaptoprepair' ),
		'description' => esc_html__( 'Top Header Social Media Widget Area', 'nyclaptoprepair' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<span class="widget-title">',
		'after_title' => '</span>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Navigation menu Image Widget Area', 'nyclaptoprepair' ),
		'id' => 'category-image',
		'description' => esc_html__( 'Image in the Navigation Menu', 'nyclaptoprepair' ),
		'before_widget' => '',
		'after_widget' => " ",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer Newsletter Widget Area', 'nyclaptoprepair' ),
		'id' => 'footer-newsletter-widget-area',
		'description' => esc_html__( 'The Footer Newsletter widget area', 'nyclaptoprepair' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'First Footer Widget Area', 'nyclaptoprepair' ),
		'id' => 'first-footer-widget-area',
		'description' => esc_html__( 'The first footer widget area', 'nyclaptoprepair' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Second Footer Widget Area', 'nyclaptoprepair' ),
		'id' => 'second-footer-widget-area',
		'description' => esc_html__( 'The second footer widget area', 'nyclaptoprepair' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Third Footer Widget Area', 'nyclaptoprepair' ),
		'id' => 'third-footer-widget-area',
		'description' => esc_html__( 'The third footer widget area', 'nyclaptoprepair' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Fourth Footer Widget Area', 'nyclaptoprepair' ),
		'id' => 'fourth-footer-widget-area',
		'description' => esc_html__( 'The fourth footer widget area', 'nyclaptoprepair' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer Payment Method Widget Area', 'nyclaptoprepair' ),
		'id' => 'footer-payment-widget-area',
		'description' => esc_html__( 'The Footer Payment Method Widget Area', 'nyclaptoprepair' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Blog Social Media Widget Area', 'nyclaptoprepair' ),
		'id' => 'social-link',
		'description' => esc_html__( 'The Social icons in Single Post.', 'nyclaptoprepair' ),
		'before_widget' => '<span class="social-links">',
		'after_widget' => "</span>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );			
}
/**
 * Register sidebars by running freshcodes_widgets_init() on the widgets_init hook. 
 */
add_action( 'widgets_init', 'freshcodes_register_sidebars' );
get_template_part('freshcodes/widgets/freshcodes-follow-us');
get_template_part('freshcodes/widgets/freshcodes-static-links');
get_template_part('freshcodes/widgets/freshcodes-footer-contactus');
get_template_part('freshcodes/widgets/freshcodes-payment-icon');
get_template_part('freshcodes/widgets/freshcodes-blog-posts');
get_template_part('freshcodes/widgets/freshcodes-advance-search');
?>