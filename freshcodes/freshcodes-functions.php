<?php
/**
 * Freshcodes
 * @copyright  Copyright (c) Freshcodes. (https://freshcodes.net)
 * @license    https://freshcodes.net/privacy-and-policy/
 * @author         Freshcodes
 * @version        Release: 1.0
 */
add_image_size('freshcodes_gallery_thumbnail', 145, 145, true);
if ( ! isset( $content_width ) )
	$content_width = 1400;
/*** Enqueue Freshcodes Fonts */
   function freshcodes_load_fonts() {
    $fonts_url = '';
	$Inter = _x( 'on', 'Inter font: on or off', 'nyclaptoprepair' );
	$Montserrat = _x( 'on', 'Montserrat font: on or off', 'nyclaptoprepair' );
	$Dosis = _x( 'on', 'Dosis font: on or off', 'nyclaptoprepair' );
	$Arsenal = _x( 'on', 'Arsenal font: on or off', 'nyclaptoprepair' );
	$Jost = _x( 'on', 'Jost font: on or off', 'nyclaptoprepair' );
	$Dmsans = _x( 'on', 'DM Sans font: on or off', 'nyclaptoprepair' );
	$Nunito = _x( 'on', 'Nunito font: on or off', 'nyclaptoprepair' );
   	if (  'off' !== $Inter ||'off' !== $Montserrat||'off' !== $Dosis||'off' !== $Arsenal ||'off' !== $OpenSans||'off' !== $Dmsans||'off' !== $Nunito  ) {
   			$font_families = array(); 			
			if ( 'off' !== $Inter ) {
   				$font_families[] = 'Inter:200,300,400,500,600,700,800';		
			}	
		if ( 'off' !== $Montserrat ) {
   				$font_families[] = 'Montserrat:,300,400,500,600,700,800';		
			}
		if ( 'off' !== $Dosis ) {
   				$font_families[] = 'Dosis:,300,400,500,600,700,800';		
			}
		if ( 'off' !== $Arsenal ) {
   				$font_families[] = 'Arsenal:,400,500,600,700';		
			}
		if ( 'off' !== $Jost ) {
   				$font_families[] = 'Jost:,300,400,500,600,700,800';		
			}
		if ( 'off' !== $Dmsans ) {
   				$font_families[] = 'DM Sans:,300,400,500,600,700,800';		
			}
		if ( 'off' !== $Nunito ) {
   				$font_families[] = 'Nunito:,400,600,700';		
			}
   			$query_args = array(
   				'family' => urlencode( implode( '|', $font_families ) ),
   				'subset' => urlencode( 'latin,latin-ext' ),
   			);
   	 
   			$fonts_url = esc_url( add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ));
   		} 
       return esc_url_raw( $fonts_url );
   }
/*
Enqueue Theme scripts and styles.
*/
function freshcodes_google_fonts() {
	 wp_enqueue_style( 'freshcodes-google-fonts', freshcodes_load_fonts(), array(), '1.0.0' );
}
add_action( 'get_header', 'freshcodes_google_fonts' );
add_action( 'after_setup_theme', 'freshcodes_product_gallery' );
function freshcodes_product_gallery() {
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
}  
// Load regular editor styles into the new block-based editor.
	add_theme_support( 'editor-styles' );
// Load default block styles.
	add_theme_support( 'wp-block-styles' );
// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );
function freshcodes_get_logo() {
	if (trim(get_option('freshcodes_logo_image_alt')) != '') 
		$logo_alt = get_option('freshcodes_logo_image_alt') ; 
	else 
		$logo_alt = esc_attr(get_bloginfo('name', 'display' ));
	$icon_width = get_option('freshcodes_logo_image_size'); 

	if (trim(get_option('freshcodes_logo_image')) != ''){ 
		echo '<img alt="'.esc_attr(get_option('freshcodes_logo_image_alt')).'" src="'.get_option('freshcodes_logo_image').'" width="'.$icon_width.'" height="46"/>';
	}
	else {
		echo '<img alt="'.esc_attr(get_option('freshcodes_logo_image_alt')).'" src=" '.get_template_directory_uri(). '/images/freshcodes/logo.svg" width="'.$icon_width.'" height="46">';
	}
}
function freshcodes_get_mob_logo() {
	$icon_width = get_option('freshcodes_mob_logo_image_size'); 
	if (trim(get_option('freshcodes_mob_logo_image_alt')) != '') $logo_alt = get_option('freshcodes_mob_logo_image_alt') ; else $logo_alt = esc_attr(get_bloginfo('name', 'display' ));
	if (trim(get_option('freshcodes_mob_logo_image')) != ''){ echo '<img alt="'.esc_attr(get_option('freshcodes_mob_logo_image_alt')).'" src="'.get_option('freshcodes_mob_logo_image').'" width="'.$icon_width.'" height="46"/>';}
		else{echo '<img alt="'.esc_attr(get_option('freshcodes_mob_logo_image_alt')).'" src=" '.get_template_directory_uri(). '/images/freshcodes/mob-logo.svg" width="'.$icon_width.'" height="46">';}
}
function freshcodes_get_sort_column() {
	$sort_column=''; 
	if(trim(get_option('freshcodes_navigation_type'))=='categories') {
		if( trim(get_option('freshcodes_navigation_sort_column')) =='id' || trim(get_option('freshcodes_navigation_sort_column'))=='menu_order')
			$sort_column = 'ID';
		elseif(trim(get_option('freshcodes_navigation_sort_column'))=='name' || trim(get_option('freshcodes_navigation_sort_column'))=='post_title')
			$sort_column = 'name';
		elseif(trim(get_option('freshcodes_navigation_sort_column'))=='count')
			$sort_column = 'count';
	}
	elseif(trim(get_option('freshcodes_navigation_type'))=='pages'){
		if(trim(get_option('freshcodes_navigation_sort_column'))=='id')
			$sort_column = 'ID';
		elseif(trim(get_option('freshcodes_navigation_sort_column'))=='menu_order')
			$sort_column = 'menu_order';
		elseif(trim(get_option('freshcodes_navigation_sort_column'))=='post_title' || trim(get_option('freshcodes_navigation_sort_column'))=='name')
			$sort_column = 'post_title';
	}
	return $sort_column;
}
function freshcodes_get_sort_order() {
	$sort_order='';
	if(trim(get_option('freshcodes_navigation_sort_order'))=='asc')
		return 'asc';
	if(trim(get_option('freshcodes_navigation_sort_order'))=='desc')
		return 'desc';
	return $sort_order;
}
function freshcodes_get_all_categories() {
	global $wp_query; 
	if (isset($wp_query->post->ID)) $postid = $wp_query->post->ID; 
	$categories = wp_get_post_categories( $postid );
	$cats = ', ';
	foreach($categories as $c){
		$cat = get_category( $c );	
		$cats .= $cat->name. ',';
	}
	$cats=strtolower(rtrim($cats, " ,"));
	return $cats;
}
function frehcodes_get_all_tags() {
	global $wp_query; 
	if (isset($wp_query->post->ID)) $postid = $wp_query->post->ID; 
	$alltags = wp_get_post_tags( $postid );
	$tags = ', ';
	foreach($alltags as $tag){
		$tags .= $tag->name. ',';
	}
	$tags=strtolower(rtrim($tags, " ,"));
	return $tags;
}
function freshcodes_extra_head() {
	$themeinfo = wp_get_theme(get_template_directory() . '/style.css');	
	echo '<meta name="generator" content="'.$themeinfo['Name'].' - '.$themeinfo['Version'].'" />';
}
add_action('wp_head','freshcodes_extra_head');
add_action( "admin_enqueue_scripts", 'freshcodes_admin_scripts');
add_action( "admin_enqueue_scripts", 'freshcodes_admin_styles');
/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function freshcodes_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'freshcodes_pingback_header' );
function freshcodes_admin_scripts() {
	//Scripts
	wp_enqueue_script( 'freshcodes-pscript-admin', get_template_directory_uri() . '/js/freshcodes/admin/pscript_admin.js');
	wp_enqueue_script( 'jscolor', get_template_directory_uri() . '/js/freshcodes/admin/jscolor/jscolor.js');
	wp_enqueue_script( 'easytabs', get_template_directory_uri() . '/js/freshcodes/admin/jquery.easytabs.min.js');
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('freshcodes-my-upload', get_template_directory_uri() . '/js/freshcodes/admin/custom.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('freshcodes-my-upload');
	wp_enqueue_script( 'freshcodes-metabox-script', get_template_directory_uri() . '/js/freshcodes/admin/freshcodes_metabox_script.js' );	
}
function freshcodes_admin_styles() { 
	//Styles
	wp_enqueue_style('freshcodes-admin', get_template_directory_uri() . '/css/freshcodes/admin/freshcodes_admin.css');
	wp_enqueue_style('freshcodes-tab', get_template_directory_uri() . '/css/freshcodes/admin/tab.css');
	wp_enqueue_style('thickbox');
	wp_enqueue_style('freshcodes-metabox-style', get_template_directory_uri() . '/css/freshcodes/admin/freshcodes_metabox_style.css');
}
function freshcodes_add_admin_menu_separator($position) {
	global $menu;
	$index = 0;
	foreach($menu as $offset => $section) {
		if (substr($section[2],0,9)=='separator')
		$index++;
		if ($offset>=$position) {
		$menu[$position] = array('','read',"separator{$index}",'','wp-menu-separator');
		break;
		}
	}
	ksort($menu);
}
if ( ! function_exists( 'freshcodes_admin_header_style' ) ) :
	function freshcodes_admin_header_style() {}
endif;
function freshcodes_string_limit_words($string, $word_limit)
{
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}
/**
 * Return the URL for the first link found in the post content.
 *
 * @since Twenty Eleven 1.0
 * @return string|bool URL or false when no link is present.
 */
function freshcodes_url_grabber() {
	if ( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/is', get_the_content(), $matches ) )
	return false;
	return esc_url_raw( $matches[1] );
}
function freshcodes_get_widget($location = '') {
	if ( is_active_sidebar($location) ) { 
		dynamic_sidebar($location); 
	}
}
if (version_compare( $GLOBALS['wp_version'], '3.3', '>=' )) 	
	get_template_part('freshcodes/widgets');		
/**
 * Removes the default styles that are packaged with the Recent Comments widget.
 *
 * To override this in a child theme, remove the filter and optionally add your own
 * function tied to the widgets_init action hook.
 * This function uses a filter (show_recent_comments_widget_style) new in WordPress 3.1
 * to remove the default style. Using Freshcodes in WordPress 3.0 will show the styles,
 * but they won't have any effect on the widget in default Freshcodes styling.
 *
 */
function freshcodes_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'freshcodes_remove_recent_comments_style' );
function freshcodes_get_pagination($range = 4){  
	// $paged - number of the current page  
	global $paged, $wp_query, $max_page;  
	// How much pages do we have?  
	if ( !$max_page ) {  
		$max_page = $wp_query->max_num_pages;  
	}  
	// We need the pagination only if there are more than 1 page  
	if($max_page > 1){  
		if(!$paged){  
			$paged = 1;  
		}  
		// On the first page, don't put the First page link  
		if($paged != 1){  
			echo '<a class="first" href=" '. get_pagenum_link(1) .' "> << </a>';  
		}
		// To the previous page  
		previous_posts_link(' < ');
		// We need the sliding effect only if there are more pages than is the sliding range  
		if($max_page > $range){  
		 // When closer to the beginning  
			 if($paged < $range){  
			   for($i = 1; $i <= ($range + 1); $i++){  
			   	 if($i==$paged){$class = "current number"; }else { $class = "number"; } 
				 echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";  
			   }  
			 }  
			 // When closer to the end  
			 elseif($paged >= ($max_page - ceil(($range/2)))){  
			   for($i = $max_page - $range; $i <= $max_page; $i++){  
				  if($i==$paged){$class = "current number"; }else { $class = "number"; } 
				 echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";   
			   }  
			 }  
			 // Somewhere in the middle  
			 elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){  
			   for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){  
				  if($i==$paged){$class = "current number"; }else { $class = "number"; } 
				 echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";  
			   }  
			 }  
		}  
		// Less pages than the range, no sliding effect needed  
		else{  
		 for($i = 1; $i <= $max_page; $i++){  
		  if($i==$paged){$class = "current number"; }else { $class = "number"; } 
		   echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";  
		 }  
		}  
		// Next page  
		next_posts_link(' > ');  
		// On the last page, don't put the Last page link  
		if($paged != $max_page){  
		 echo '<a class="last" href=" '. get_pagenum_link($max_page) .' "> >> </a>';  
		}  
	}  
}  	
function freshcodes_posts_next_link_attributes($html) {
	$html = str_replace('<a','<a class="next-post"',$html);
	return $html;
}
function freshcodes_posts_previous_link_attributes($html) {
	$html = str_replace('<a','<a class="prev-post"',$html);
	return $html;
}
add_filter('next_post_link','freshcodes_posts_next_link_attributes',10,1);
add_filter('previous_post_link','freshcodes_posts_previous_link_attributes',10,1);
function freshcodes_get_first_post_images($post_ID) {
	global $post, $posts;
	$first_img_src = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	if (isset($matches[1][0]))
		$first_img_src = $matches[1][0];
	if(empty($first_img_src)){ 
		return 0;
	}
	return $first_img_src;
}
function freshcodes_blog_post_excerpt( $limit ) {
	$excerpt = get_the_content();
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $limit);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	return $excerpt;
}
function freshcodes_excerpt_length_limit($limit) {
    $contents = substr(freshcodes_strip_images(strip_tags(get_the_content())), 0, $limit);
    $excerpt = $contents;
    if (strlen($contents) >= $limit) {
        $excerpt .= '&hellip;';
    }
    return $excerpt;
}
function freshcodes_portfolio_excerpt($limit) {
    $contents = substr(freshcodes_strip_images(strip_tags(get_the_content())),0,$limit);	
	$excerpt = $contents; if (strlen($contents) >= $limit){ $excerpt .= '&hellip;'; }
  	return $excerpt;
}
add_action('wp_head','freshcodes_custom_css',15);
if ( ! function_exists( 'freshcodes_strip_images' ) ) :
	function freshcodes_strip_images($content){	
		$content = preg_replace('/<img[^>]+./','',$content);
		return preg_replace('/<\/?a[^>]*>/','',$content);
	}
endif;
if ( ! function_exists( 'freshcodes_go_top' ) ) :
	function freshcodes_go_top(){ ?>
		<div class="backtotop"><a id="to_top" href="#"></a></div>
	<?php }
endif;
/**
 * Remove inline styles printed when the gallery shortcode is used.
 * Galleries are styled by the theme in Freshcodes's style.css. This is just
 * a simple filter call that tells WordPress to not use the default styles.
 */
add_filter( 'use_default_gallery_style', '__return_false' );
/**
 * Enqueue Freshcodes Styles
 */
if ( ! function_exists( 'freshcodes_load_styles' ) ) :
	function freshcodes_load_styles() {
		wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/freshcodes/owl.carousel.css');
		wp_enqueue_style('owl-transitions', get_template_directory_uri() . '/css/freshcodes/owl.transitions.css');
		wp_enqueue_style('shadowbox', get_template_directory_uri() . '/css/freshcodes/shadowbox.css');
		wp_enqueue_style('animate', get_template_directory_uri() . '/css/freshcodes/animate.min.css');	
	}
endif;
add_action('get_header', 'freshcodes_load_styles');
//Load responsive.css file in the header
function freshcodes_responsive() {
	wp_enqueue_style('fc-responsive', get_stylesheet_directory_uri() . '/responsive.css');
}
add_action('wp_footer','freshcodes_responsive');
function freshcodes_search_form( $form ) {
	get_search_query();
}
add_filter( 'get_search_form', 'freshcodes_search_form' );
/**
 * Enqueue Freshcodes Scripts
 */
if ( ! function_exists( 'freshcodes_load_scripts' ) ) :
	function freshcodes_load_scripts() {
		wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/js/freshcodes/owl.carousel.min.js', array(), '', false);
		wp_enqueue_script( 'fc-custom-script', get_template_directory_uri() . '/js/freshcodes/jquery.custom.min.js', array(), '', false);
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '', false);
		wp_enqueue_script( 'fc-freshcodes', get_template_directory_uri() . '/js/freshcodes/freshcodes.min.js', array(), '', false);		
		wp_enqueue_script( 'fc-custom', get_template_directory_uri() . '/js/freshcodes/custom.js', array(), '', false);
		wp_enqueue_script( 'validate', get_template_directory_uri() . '/js/freshcodes/jquery.validate.js', array(), '', false);
		wp_enqueue_script( 'shadowbox', get_template_directory_uri() . '/js/freshcodes/shadowbox.js', array(), '', false);		
		wp_enqueue_script( 'megamenu', get_template_directory_uri() . '/js/freshcodes/jquery.megamenu.js', array(), '', false);	
		wp_enqueue_script( 'easyResponsiveTabs', get_template_directory_uri() . '/js/freshcodes/easyResponsiveTabs.js', array(), '', false);
		wp_enqueue_script( 'jtree', get_template_directory_uri() . '/js/freshcodes/jquery.treeview.js', array(), '', false);        
		?>
		<!--[if lt IE 9]>
		<?php wp_enqueue_script( 'freshcodes-html5', get_template_directory_uri() . '/js/html5.js', array(), '', false); ?>
		<![endif]-->
	<?php }
endif;
add_action( 'wp_enqueue_scripts', 'freshcodes_load_scripts' );
if ( ! function_exists( 'freshcodes_breadcrumbs' ) ) :
	function freshcodes_breadcrumbs() { ?>
		<div class="breadcrumbs">
			<?php if ( function_exists('yoast_breadcrumb') ) { ?>
				<?php yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
			<?php } ?>
		</div>
<?php }
endif;
if ( ! function_exists( 'freshcodes_comment' ) ) :
/**
 * Freshcodes comments and pingbacks.
 *
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
	function freshcodes_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback' :
			case 'trackback' :
			// Display trackbacks differently than normal comments.
			?>
				<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
					<p>
                                                <?php // translators: %s: Pingback. ?>
						<?php esc_html_e( 'Pingback:', 'nyclaptoprepair' ); ?>
                                                <?php // translators: %s: (Edit). ?>
						<?php edit_comment_link( esc_html__( '(Edit)', 'nyclaptoprepair' ), '<span class="edit-link">', '</span>' ); ?>
					</p>
				</li>
			<?php
			break;
			default :
			// Proceed with normal comments.
			global $post;
			?>
			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<div id="comment-<?php comment_ID(); ?>" class="comment-body">
				<div class="alignleft"> <?php echo get_avatar( $comment, 48 ); ?> </div>
				<div class="author-content">
				<h6><?php echo esc_html($comment->comment_author); ?></h6>
                                <?php // translators: %s: (Edit). ?>
				<?php edit_comment_link( esc_html__( 'Edit', 'nyclaptoprepair' ), ' ' ); ?>
				<div class="clearfix"></div>
				<abbr class="published" title="<?php echo the_title_attribute() ?>">
				<?php 
					// translators: %s: For comment box. 
					printf( esc_html__( '%1$s at %2$s', 'nyclaptoprepair' ), get_comment_date(),  get_comment_time() ); 
				?>
				</abbr> </div>
				<div class="comment-content">
				<?php comment_text(); ?>
				<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div>
				</div>
				<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="comment-awaiting-moderation">
			        <?php // translators: %s: Your comment is awaiting moderation ?>
				<?php esc_html_e( 'Your comment is awaiting moderation.', 'nyclaptoprepair' ); ?>
				</em> <br />
				<?php endif; ?>
			</div>
			<!-- #comment-##  -->
			</li>
		<?php
		break;
		endswitch; // end comment_type check
	}
endif;
if ( ! function_exists( 'freshcodes_sticky_post' ) ) :
	function freshcodes_sticky_post() {
		if ( is_sticky() && is_home() && ! is_paged() )
 // translators: %s: Sticky
			echo '<span class="sticky-post">' . esc_html__( 'Sticky', 'nyclaptoprepair' ) . '</span>';		
	}
endif;
if ( ! function_exists( 'freshcodes_categories_links' ) ) :
	function freshcodes_categories_links() {
		if (is_search() || !is_single()) : 
			$categories_list = get_the_category_list( esc_html__( ' ', 'nyclaptoprepair' ) );
		else:
			$categories_list = get_the_category_list( esc_html__( ', ', 'nyclaptoprepair' ) );
		endif;
		if ( $categories_list ) {
			echo '<div class="meta-inner"><span class="categories-links">' . $categories_list . '</span></div>';
		}
	}
endif;
if ( ! function_exists( 'freshcodes_tags_links' ) ) :
	function freshcodes_tags_links() {
		// Translators: used between list items, there is a space after the comma.
		$tag_list = get_the_tag_list( '', esc_html__( ' ', 'nyclaptoprepair' ) );
		if ( $tag_list ) {
			// translators: %s: Tags :
			echo '<span class="tags-links"><span class="label">' . esc_html__( 'Tags: ', 'nyclaptoprepair' ) . '</span>' . $tag_list . '</span>';		
		}
	}
endif;
if ( ! function_exists( 'freshcodes_author_link' ) ) :
	function freshcodes_author_link() {
		// Post author
		if ( 'post' == get_post_type() ) {
        // translators: %s: by 
		printf( wp_kses( __( '<div class="meta-inner"><span class="author vcard"><i class="fa fa-user-o"></i><a class="url fn n" href="%1$s" title="%2$s" rel="author">'.esc_html__("by ",'nyclaptoprepair').'%3$s</a></span></div>', 'nyclaptoprepair' ),
		freshcodes_allowed_html()), 
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				esc_attr( sprintf(
					// translators: %s: This is Single post page for view all post. 
					esc_html__( 'View all posts by %s', 'nyclaptoprepair' ), get_the_author() ) ),
				get_the_author()
			);
		}
	}
endif;


if ( ! function_exists( 'freshcodes_author_image' ) ) :
	function freshcodes_author_image() {
		// Post author
		if ( 'post' == get_post_type() ) {
			echo '<div class="author-avatar">';		
			$author_bio_avatar_size = apply_filters( 'freshcodes_author_bio_avatar_size', 70 );
			echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
			echo '</div>';		
		}
	}
	endif;


if ( ! function_exists( 'freshcodes_comments_link' ) ) :
	function freshcodes_comments_link() {
		//comments open
		if ( comments_open() ) :
		echo '<div class="meta-inner"><span class="comments-link"><i class="fa fa-comment"></i>';
		comments_popup_link( esc_html__( '0 Comment', 'nyclaptoprepair' ), esc_html__( '1 Comment', 'nyclaptoprepair' ), esc_html__( '% Comments', 'nyclaptoprepair' ) );
		echo '</span></div>';
		endif; 
	}
endif;
if ( ! function_exists( 'freshcodes_entry_date' ) ) :
/**
 * Print HTML with date information for current post.
 *
 * Create your own freshcodes_entry_date() to override in a child theme.
 *
 * @since Freshcodes 1.0
 *
 * @param boolean $echo (optional) Whether to echo the date. Default true.
 * @return string The HTML-formatted post date.
 */
function freshcodes_entry_date( $echo = true ) {
	if ( has_post_format( array( 'chat', 'status' ) ) )
		// translators: %s: Post Format Name.
		$format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'nyclaptoprepair' );
	else
		$format_prefix = '%2$s';
		// translators: %s:Entry date.
	$date = sprintf( wp_kses( __( '<div class="meta-inner"><span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><i class="fa fa-calendar-o" aria-hidden="true"></i>
<time class="entry-date" datetime="%3$s">%4$s</time></a></span></div>','nyclaptoprepair' ),freshcodes_allowed_html()),
		esc_url( get_permalink() ),
		esc_attr( sprintf(
		// translators: %s: Date link.
		esc_html__( 'Permalink to %s', 'nyclaptoprepair' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) ) );
	if ( $echo )
	echo html_entity_decode( esc_html( $date ) );
	return $date;
}
endif;
if ( ! function_exists( 'freshcodes_post_entry_date' ) ) :
function freshcodes_post_entry_date( ) {
	$date = get_the_date();	
	$post_day = get_the_date('d');
	$post_month = get_the_date('F');
	$post_year = get_the_date('Y');
	$date = '<div class="meta-inner entry-content-date"><span class="entry-date"><span class="fa fa-calendar-o"></span>'.$post_day.' '.$post_month.' '.$post_year.'</span></div>';
	echo html_entity_decode( esc_html( $date ) );
	return $date;
}
endif;
if ( ! function_exists( 'freshcodes_posts_title' ) ) :
	function freshcodes_posts_title() {
		$excerpt = freshcodes_strip_images(strip_tags(the_title()));
		$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
		return $excerpt;
	}
	endif;
if ( ! function_exists( 'freshcodes_posts_short_description' ) ) :
function freshcodes_posts_short_description() {
	$freshcodes_posts_short_description = get_post_meta(get_the_ID(), 'freshcodes_posts_short_description', true);
	if($freshcodes_posts_short_description == '')
		$freshcodes_posts_short_description = freshcodes_excerpt(15);
		$short_description = '<div class="entry-content-other"><div class="entry-summary"><div class="excerpt">'.$freshcodes_posts_short_description.'</div></div></div>';
	return html_entity_decode( esc_html( $short_description ) );
}
endif;
if ( ! function_exists( 'freshcodes_excerpt' ) ) :
function freshcodes_excerpt($limit) {
	$excerpt = explode(' ', freshcodes_strip_images(strip_tags(get_the_content())), $limit);
	if (count($excerpt)>=$limit) {
	array_pop($excerpt);
		$excerpt = implode(" ",$excerpt);
	} else {
		$excerpt = implode(" ",$excerpt);
	} 
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}
endif;
if ( ! function_exists( 'freshcodes_blog_readmore_fnc' ) ) :
function freshcodes_blog_readmore_fnc() {
	$read_more_html = '<div class="read-more"><a class="read-more-link button" href="'.esc_url(get_permalink()).'">'.esc_html__( 'View More' , 'nyclaptoprepair' ) .'</a></div>';
	return html_entity_decode( esc_html( $read_more_html ) );
}
endif;
if ( ! function_exists( 'freshcodes_posts_show_thumbnail' ) ) :
function freshcodes_posts_show_thumbnail() {
	$freshcodes_posts_show_thumbnail = get_post_meta(get_the_ID(), 'freshcodes_posts_show_thumbnail', true);
	if(empty($freshcodes_posts_show_thumbnail))
		$freshcodes_posts_show_thumbnail = '';
	return $freshcodes_posts_show_thumbnail;
}
endif;
if ( ! function_exists( 'freshcodes_page_layout' ) ) :
	function freshcodes_page_layout() {
		$page_layout_class = '';
		global $wp_query;	
		if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
			if(is_shop()):
				$page_id = wc_get_page_id('shop');
			else:
				$page_id = $wp_query->get_queried_object_id();
			endif;
		} else {
			$page_id = $wp_query->get_queried_object_id();
		}
		$freshcodes_page_layout = get_post_meta($page_id, 'freshcodes_page_layout', true);
		if(empty($freshcodes_page_layout))
			$freshcodes_page_layout = '';
			
		if($freshcodes_page_layout == "box"):
			$page_layout_class = "box-page";
		elseif ($freshcodes_page_layout == "wide"):
			$page_layout_class = "wide-page";
		endif;
		return $page_layout_class;
	}
endif;
if ( ! function_exists( 'freshcodes_sidebar_position' ) ) :
	function freshcodes_sidebar_position() {
		$sidebar_class = '';
		global $wp_query;  
		if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
			if(is_shop() || is_archive() || is_single() || is_search()):
				$page_id = wc_get_page_id('shop');
			else:
				$page_id = $wp_query->get_queried_object_id();
			endif;
		}
		else {
			$page_id = $wp_query->get_queried_object_id();
		}
		$freshcodes_sidebar_position = get_post_meta($page_id, 'freshcodes_sidebar_position', true);
		
		if(empty($freshcodes_sidebar_position))
			$freshcodes_sidebar_position = '';			
		if($freshcodes_sidebar_position == "left"):
			$sidebar_class = "left-sidebar";
		elseif($freshcodes_sidebar_position == "right"):
			$sidebar_class = "right-sidebar";
		elseif($freshcodes_sidebar_position == "disabled"):
			$sidebar_class = "full-width";
		endif;
		return $sidebar_class;
	}
endif;
if ( ! function_exists( 'freshcodes_blog_box_posts_per_page' ) ) :
	function freshcodes_blog_box_posts_per_page() {
		$freshcodes_blog_box_posts_per_page = get_post_meta(get_the_ID(), 'freshcodes_blog_box_posts_per_page', true);
		if(empty($freshcodes_blog_box_posts_per_page))
		$freshcodes_blog_box_posts_per_page = '';
		return $freshcodes_blog_box_posts_per_page;
	}
endif;
if ( ! function_exists( 'freshcodes_blog_list_posts_per_page' ) ) :
	function freshcodes_blog_list_posts_per_page() {
		$freshcodes_blog_list_posts_per_page = get_post_meta(get_the_ID(), 'freshcodes_blog_list_posts_per_page', true);
		if(empty($freshcodes_blog_list_posts_per_page))
			$freshcodes_blog_list_posts_per_page = '';
		return $freshcodes_blog_list_posts_per_page;
}
endif;
if ( ! function_exists( 'freshcodes_blog_filter_columns_class' ) ) :
	function freshcodes_blog_filter_columns_class() {
		$columns_class = '';
		$freshcodes_blog_filter_columns = get_post_meta(get_the_ID(), 'freshcodes_blog_filter_columns', true);
		if(empty($freshcodes_blog_filter_columns))
			$freshcodes_blog_filter_columns = '';
		if($freshcodes_blog_filter_columns == 'two'):
			$columns_class = 'two-col';
		elseif ($freshcodes_blog_filter_columns == 'three'):
			$columns_class = 'three-col';
		elseif ($freshcodes_blog_filter_columns == 'four'):
			$columns_class = 'four-col';
		endif;
		return $columns_class;
	}
endif;
if ( ! function_exists( 'freshcodes_blog_filter_columns_number' ) ) :
	function freshcodes_blog_filter_columns_number() {
		$columns_number = '';
		$freshcodes_blog_filter_columns = get_post_meta(get_the_ID(), 'freshcodes_blog_filter_columns', true);
		if(empty($freshcodes_blog_filter_columns))
			$freshcodes_blog_filter_columns = '';
		if($freshcodes_blog_filter_columns == 'two'):
			$columns_number = '2';
		elseif($freshcodes_blog_filter_columns == 'three'):
			$columns_number = '3';
		elseif($freshcodes_blog_filter_columns == 'four'):
			$columns_number = '4';
		endif;
		return $columns_number;
	}
endif;
if ( ! function_exists( 'freshcodes_content_position' ) ) :
function freshcodes_content_position() {
	$freshcodes_content_position = get_post_meta(get_the_ID(), 'freshcodes_content_position', true);
	if(empty($freshcodes_content_position))
		$freshcodes_content_position = '';
	return $freshcodes_content_position;
}
endif;
if ( ! function_exists( 'freshcodes_is_related_posts' ) ) :
function freshcodes_is_related_posts() {
	$freshcodes_is_related_posts = get_post_meta(get_the_ID(), 'freshcodes_posts_show_related_posts', true);
	if(empty($freshcodes_is_related_posts))
		$freshcodes_is_related_posts = '';
	return $freshcodes_is_related_posts;
}
endif;
if ( ! function_exists( 'freshcodes_is_author_info' ) ) :
function freshcodes_is_author_info() {
	$freshcodes_is_author_info = get_post_meta(get_the_ID(), 'freshcodes_posts_show_author_info', true);
	if(empty($freshcodes_is_author_info))
		$freshcodes_is_author_info = '';
	return $freshcodes_is_author_info;
}
endif;
if ( ! function_exists( 'freshcodes_shortcode_paging_nav' ) ) :
	function freshcodes_shortcode_paging_nav() {
		$output ='';
		if ( $GLOBALS['wp_query']->max_num_pages > 1 ) {
			$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
			$pagenum_link = html_entity_decode( get_pagenum_link() );
			$query_args   = array();
			$url_parts    = explode( '?', $pagenum_link );
			if ( isset( $url_parts[1] ) ) {
				wp_parse_str( $url_parts[1], $query_args );
			}
			$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
			$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';
			$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
			$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';
			// Set up paginated links.
			$links = paginate_links( array(
				'base'     => $pagenum_link,
				'format'   => $format,
				'total'    => $GLOBALS['wp_query']->max_num_pages,
				'current'  => $paged,
				'mid_size' => 1,
				'add_args' => array_map( 'urlencode', $query_args ),
				'prev_text' =>  wp_kses( __( '<i class="fa fa-angle-left"></i>', 'nyclaptoprepair' ),freshcodes_allowed_html()),
				'next_text' =>  wp_kses( __( '<i class="fa fa-angle-right"></i>', 'nyclaptoprepair' ),freshcodes_allowed_html()),
			) );
			if ( $links ) :
			$output .= '<nav class="navigation paging-navigation" role="navigation">';
				$output .= '<div class="pagination loop-pagination">';
				$output .= $links;
				$output .= '</div>';
			$output .= '</nav>';
			endif;
		}
		return $output;
	}
endif;
// Adds custom image height X width for small thumbnails
add_image_size( 'freshcodes-blog-posts-list', 1400, 700, array( 'center', 'center' ), true );
add_image_size( 'freshcodes-small-thumb', 50, 50, true );
//Create HTML list of nav menu items and allow HTML tags.
class Description_Walker extends Walker_Nav_Menu { 
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$classes = empty ( $item->classes ) ? array () : (array) $item->classes;	 
		$class_names = join(' ', apply_filters(	'nav_menu_css_class', array_filter( $classes ), $item ) );	 
		! empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';
		// Build default menu items
		$output .= "<li id='menu-item-$item->ID' $class_names>";
		$attributes = '';	 
		! empty( $item->attr_title )
		and $attributes .= ' title="' . esc_attr( $item->attr_title ) .'"';
		! empty( $item->target )
		and $attributes .= ' target="' . esc_attr( $item->target ) .'"';
		! empty( $item->xfn )
		and $attributes .= ' rel="' . esc_attr( $item->xfn ) .'"';
		! empty( $item->url )
		and $attributes .= ' href="' . esc_attr( $item->url ) .'"';
		// Build the description (you may need to change the depth to 0, 1, or 2)
		$description = ( ! empty ( $item->description ) and 1 == $depth ) ? '<span class="nav_desc">'. $item->description . '</span>' : '';		 
		$title = apply_filters( 'the_title', $item->title, $item->ID );		 
		$item_output = $args->before . "<a $attributes>" . $args->link_before . $title . '</a> ' . $args->link_after . $description . $args->after;
		// Since $output is called by reference we don't need to return anything.
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id  );
	}
} 
if ( ! function_exists( 'freshcodes_shop_body_classes' ) ) :
	function freshcodes_shop_body_classes( $classes ) {
		global $wp,$query_args;
		$current= esc_url(home_url( add_query_arg( $query_args , $wp->request ) ));
		$str = substr(strrchr($current, '?'), 1);
		$variable = substr($str, 0, strpos($str, "&"));
		if($variable == 'left'){
			$classes[] = 'shop-left-sidebar'; 
		} elseif ($variable == 'right'){
			$classes[] = 'shop-right-sidebar'; 
		} elseif ($variable == 'full'){
			$classes[] = 'shop-full-width';	
		} elseif ( !is_active_sidebar( 'sidebar-1' ) )  { 
			$classes[] = "shop-full-width";
		} else {
			$classes[] = 'shop-left-sidebar' ;
		}
		if ( in_array( 'monster-widget/monster-widget.php' ,apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )  || in_array( 'woocommerce-monster-widget/woocommerce-monster-widget.php' , apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) )  :
			$classes[] = 'monster' ;
		endif;
		return $classes;
	}
endif;
add_filter( 'body_class', 'freshcodes_shop_body_classes' );

/* Related Product settings */
function freshcodes_related_products_args( $args ) {
	$no = get_option("freshcodes_related_items");
	$no_column = get_option("fresh_product_items_columns");
	$args['posts_per_page'] = $no;
	$args['columns'] = $no_column; // arranged in 2 columns
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'freshcodes_related_products_args' );
/* Upsell Product settings */
add_filter( 'woocommerce_upsell_display_args', 'frescodes_output_upsells' );
function frescodes_output_upsells( $args ) {
	$no1 = get_option("freshcodes_upsells_items");
	$no_column = get_option("fresh_product_items_columns");
  	$args['posts_per_page'] = $no1; // Change this number
	$args['columns']        = $no_column; // arranged in 2 columns
  	return $args;
}
/* crosssell Product settings */
function freshcodes_output_crosssell() {
	$no1 = get_option("freshcodes_crosssell_items");	
	woocommerce_cross_sell_display( $no1);
}
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display', 10 );
add_action( 'woocommerce_after_cart', 'freshcodes_output_crosssell', 10 );
add_filter('woocommerce_cross_sells_columns', 'freshcodes_woocommerce_crosssell_count_mod');
function freshcodes_woocommerce_crosssell_count_mod($count) {
	$no_column = get_option("freshcodes_corsssell_items_columns");
	return $no_column;
}
function freshcodes_product_navigation() {
	global $post , $previous ,$next;
	$current_url = get_permalink( $post->ID );
	$next_text = '';
	$previous_text = '';		
	
	// Get the previous and next product links
	$previous_link = get_permalink(get_adjacent_post(false,'',false)); 
	$next_link = get_permalink(get_adjacent_post(false,'',true));
	// Create the two links provided the product exists
	if ( $next_link != $current_url ) {
			$next = "<a href='" . esc_url($next_link) . "'>" . $next_text . "</a>";
	}
	if ( $previous_link != $current_url ) {
		$previous = "<a href='" .esc_url($previous_link) . "'>" . $previous_text . "</a>";
	}
	// Create the two links provided the product exists
	if ( $next_link != $current_url ) {
		$next_text = get_adjacent_post(false,'',true)->post_title;
		$next = "<a href='" .esc_url( $next_link ). "'>" . $next_text . "</a>";
	} 
	if ( $previous_link != $current_url ) {
		$previous_text = get_adjacent_post(false,'',false)->post_title;
		$previous = "<a href='" . esc_url($previous_link) . "'>" . $previous_text . "</a>";
	}
	// Create HTML Output
	$output  = '<div class="freshcodes_product_nav_buttons">'; 
	if ( $previous != '' )
		$output .= '<span class="previous"> ' . $previous . '</span>';
	if ( $next != '' )
		$output .= '<span class="next">' . $next .'</span>';
	$output .= '</div>';	
	// Display the final output
	echo wp_kses_post($output);
}
add_action( 'woocommerce_single_product_summary', 'freshcodes_product_navigation', 5 );
/*	This function is used to convert hex color into rgb or rgba */
function freshcodes_hex_to_rgba($color, $opacity = false) {
	$default = 'rgb(0,0,0)';
 		//Return default if no color provided
		if(empty($color))
          return $default; 
 		//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        } 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
			return $default;
        } 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
				$opacity = 1.0;
				$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        } 
        //Return rgb(a) color string
	return $output;
}
// Display the additional product images
function freshcodes_second_product_thumbnail() {
	global $product, $woocommerce,$id;
	$attachment_ids = $product->get_gallery_image_ids();
	$id =	get_post_thumbnail_id( $product->get_id() );
	if(get_option( 'freshcodes_secondaryimage' ) == "yes") {
		if ( count($attachment_ids) > 0 ) {
			$secondary_image_id = $attachment_ids['0'];		
			echo wp_get_attachment_image( $secondary_image_id, 'shop_catalog', '', $attr = array( 'class' => 'secondary-image attachment-shop-catalog' ) );
		}
		else {
			echo wp_get_attachment_image( $id, 'shop_catalog', '', $attr = array( 'class' => 'secondary-image attachment-shop-catalog' ) );		
		}
	} else {
		echo wp_get_attachment_image( $id, 'shop_catalog', '', $attr = array( 'class' => 'secondary-image attachment-shop-catalog' ) );		
	}
}
add_action( 'woocommerce_before_shop_loop_item_title', 'freshcodes_second_product_thumbnail');
/* for escaping i.e wp_kses( __()); the html element update to WP 4.3.1 */
function freshcodes_allowed_html() {
	 $freshcodes_allowed_html = array(
		'span' => array(
		'class' => array(),
		'style' => array(),
		),
		'div' => array(
		'class' => array(),
		'style' => array(),
		),
		'a' => array(
		'href' => array(),
		),
		'i' => array(
		'class' => array(),
		),
	);
	return  $freshcodes_allowed_html;
}
/* Function to show cart header cart dropdown in all pages */
function freshcodes_always_show_cart() {
    return false;
}
add_filter( 'woocommerce_widget_cart_is_hidden', 'freshcodes_always_show_cart', 40, 0 );
/* Transfer the php data to custom js */
function freshcodes_load_more(){
	// Register the script
	wp_enqueue_script( 'phpvariable', get_template_directory_uri() . '/js/freshcodes/freshcodesloadmore.js', array(), '', false);	
	// Localize the script with new data
	$translation_array = array(
		'freshcodes_loadmore' => get_option( 'freshcodes_loadmore' ),
		'freshcodes_pagination' => get_option( 'freshcodes_pagination' ),
		'freshcodes_nomore' =>  get_option( 'freshcodes_nomore' )
	);
	wp_localize_script( 'phpvariable', 'php_var', $translation_array );
	// Enqueued script with localized data.
	wp_enqueue_script( 'phpvariable' );
}
add_action( 'wp_enqueue_scripts', 'freshcodes_load_more' );
/* advanced search */
if ( ! function_exists( 'freshcodes_advanced_search_query' ) ) :
function freshcodes_advanced_search_query($query) {
    if($query->is_search()) {
        	if (isset($_GET['product_cat']) && !empty($_GET['product_cat'])) {
					$query->set('tax_query', array(array(
						'taxonomy' => 'product_cat',
						'field' => 'slug',
						'terms' => array($_GET['product_cat']) )
				));
			}   
		}
        return $query;
   }
  endif;
add_action('pre_get_posts', 'freshcodes_advanced_search_query', 1000);
/*  Out of Stock */
if ( ! function_exists( 'freshcodes_out_of_stock' ) ) :
function freshcodes_out_of_stock() {
 global $product;
 	if ( !($product->is_in_stock()) ) {
        echo '<div class="soldout_wrapper"><span class="soldout">'.esc_html__('SOLD OUT','nyclaptoprepair').'</span></div>';
    }
}
endif;
add_action('woocommerce_before_shop_loop_item_title', 'freshcodes_out_of_stock');
//dequeue css from plugins
add_action('wp_print_styles', 'freshcode_dequeue_css_from_plugins', 100);
function freshcode_dequeue_css_from_plugins()  {
	wp_dequeue_style('newsletter');
}
//Remove Sales Flash
add_filter('woocommerce_sale_flash', 'freshcodes_custom_hide_sales_flash');
function freshcodes_custom_hide_sales_flash() { return false;}

// Comment Form fields
function freshcodes_update_comment_fields( $fields ) {
	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$label     = $req ? '*' : ' ' . __( '(optional)', 'nyclaptoprepair' );
	$aria_req  = $req ? "aria-required='true'" : '';
	$fields['author'] =
	'<p class="comment-form-author comment-block">
	<input id="author" name="author" type="text" required placeholder="' . esc_attr__( "Name*", "nyclaptoprepair" ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
	'" size="30" ' . $aria_req . ' />
	</p>';
	$fields['email'] =
	'<p class="comment-form-email comment-block">
	<input id="email" name="email" type="email" required placeholder="' . esc_attr__( "E-mail*", "nyclaptoprepair" ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
	'" size="30" ' . $aria_req . ' />
	</p>';
	unset($fields['url']);
	unset($fields['cookies']);
	return $fields;
	}
	add_filter( 'comment_form_default_fields', 'freshcodes_update_comment_fields' );
	/**
	 * Filter to move comment field to the last
	 */
	add_filter( 'comment_form_fields', 'remove_comment_form_fields', 10, 1 );
	function remove_comment_form_fields($comment_fields) {
		if (isset($comment_fields['comment'])) {
			$comment_field = $comment_fields['comment'];
			unset($comment_fields['comment']);		
		}
		return $comment_fields;
	}
	add_filter( 'comment_form_fields', 'add_comment_form_fields', 10, 1 );
	function add_comment_form_fields($comment_fields) {
		//translators: %s: write your comment here...
		$comment_fields['comment'] = '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="60" rows="6" placeholder="write your comment here..." aria-required="true"></textarea></p>';
		return $comment_fields;
	}
add_filter( 'comment_form_default_fields', 'freshcodes_update_comment_fields' );

/* remove type attr*/
add_action('wp_loaded', 'freshcodes_prefix_output_buffer_start');
function freshcodes_prefix_output_buffer_start() { 
    ob_start("freshcodes_prefix_output_callback"); 
}
add_action('shutdown', 'freshcodes_prefix_output_buffer_end');
function freshcodes_prefix_output_buffer_end() { 
    if (ob_get_length() > 0) { ob_end_clean(); }
}
function freshcodes_prefix_output_callback($buffer) {
    return preg_replace( "%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer );
}
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
// Display brand taxonomies file
if ( in_array( 'woocommerce/woocommerce.php' ,apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )  && in_array( 'FreshcodesCustomPost/FreshcodesCustomPost.php' , apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) )  {
	get_template_part('freshcodes/brand_taxonomies');
}
// Display brand attribute in product page
if ( in_array( 'woocommerce/woocommerce.php' ,apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )  && in_array( 'FreshcodesCustomPost/FreshcodesCustomPost.php' , apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) )  {
	add_action( 'woocommerce_product_meta_end', 'freshcodes_woo_brand');
	function freshcodes_woo_brand() {
		global $product;
		$terms = wc_get_product_terms( $product->get_id(), 'product_brand');
		$term_list = get_the_term_list($product->get_id(), 'product_brand','',', ');
		if(!empty($term_list) ):?>
			<span class="brand">
				<span class="label"><?php  echo wc_attribute_label(  __('Brand','nyclaptoprepair') ).':'; ?></span>
				<span><?php foreach ($terms as $term) {} ?><a href="<?php echo esc_url(get_term_link( $term )); ?>"><?php echo translate($term_list); ?></a></span>	
			</span>
		<?php endif; 
	}
}

/** add to cart button */
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
add_action( 'freshcodes_woo_button_hover', 'woocommerce_template_loop_add_to_cart', 10 );

/* To display Wishlist in menu */
if ( in_array( 'yith-woocommerce-wishlist/init.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ):
	if( ! function_exists( 'freshcodes_add_to_wishlist_in_menu' ) ){
		function freshcodes_add_to_wishlist_in_menu(){
			$wishlist_url = YITH_WCWL()->get_wishlist_url();
			echo '<a class="whislist-counter" href = '.$wishlist_url.'>';
			echo '<span class="whislist-label"></span>';
			echo '</a>';
		}
	}
endif;

/* compare button in menu */
if ( in_array( 'yith-woocommerce-compare/init.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ):
	if( ! function_exists( 'freshcodes_add_to_compare_in_menu' ) ){
		function freshcodes_add_to_compare_in_menu(){
			echo '<a class="compare-counter yith-woocompare-open" href="/?action=yith-woocompare-view-table&amp;iframe=yes" data-text="Compare">';
			echo '<span class="counter-label"></span>';
 			echo '</a>';
	}
}
endif;

/* To display Wishlist in product block */
if ( in_array( 'yith-woocommerce-wishlist/init.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ):
	if( ! function_exists( 'freshcodes_add_to_wishlist_in_product' ) ){
		function freshcodes_add_to_wishlist_in_product(){
			echo do_shortcode( "[yith_wcwl_add_to_wishlist]" );
		}
	}
add_action( 'freshcodes_woo_button_hover', 'freshcodes_add_to_wishlist_in_product', 12);
endif;


/* quick view block */
if ( in_array( 'yith-woocommerce-quick-view/init.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ):
	if( ! function_exists( 'freshcodes_quick_view_in_product' ) ){
			function freshcodes_quick_view_in_product(){
				echo do_shortcode( "[yith_quick_view]" );
			}
		}
	add_action( 'freshcodes_woo_button_hover', 'freshcodes_quick_view_in_product', 12 );
	endif;

// /* compare product block */
// if ( in_array( 'yith-woocommerce-compare/init.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ):
// 	if( ! function_exists( 'freshcodes_add_to_compare_in_product' ) ){
// 		function freshcodes_add_to_compare_in_product(){
// 			echo do_shortcode( "[yith_compare_button]" );
// 		}
// 	}
// 	add_action( 'freshcodes_woo_button_hover', 'freshcodes_add_to_compare_in_product', 12 );
// endif;

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

/* To display freshcodes_nav_button_hover start */
if( ! function_exists( 'freshcodes_nav_button_div_start' ) ){
	function freshcodes_nav_button_div_start(){
		echo '<div class="product-button-hover">';
	}
}
add_action( 'freshcodes_woo_button_hover', 'freshcodes_nav_button_div_start',5);
/* To display freshcodes_nav_button_hover end */
if( ! function_exists( 'freshcodes_nav_button_div_end' ) ){
function freshcodes_nav_button_div_end(){
	echo '</div>';
}
}
add_action( 'freshcodes_woo_button_hover', 'freshcodes_nav_button_div_end', 15 );

function freshcodes_header_special_offer_cms() {
	echo '<div class="special-offer-text text"><a href="' . get_option('freshcodes_header_special_offer_text_url') . '" 
	title="'.get_option('freshcodes_header_special_offer_text').'">'.get_option('freshcodes_header_special_offer_text').'</a></div>';
}

/* Site Loader */
if ( ! function_exists( 'freshcodes_site_loader' ) ) :
function freshcodes_site_loader() {
	$fc_loader = get_option('freshcodes_loader_selector'); ?>
<div class="fc-spinner-wrapper">
		<div class="fc-spinner">
			<div class="sk-folding-cube">
				<div class="sk-cube1 sk-cube"></div>
				<div class="sk-cube2 sk-cube"></div>
				<div class="sk-cube4 sk-cube"></div>
				<div class="sk-cube3 sk-cube"></div>
			</div>
  	</div>
</div>
<?php
}
endif;



/* Header Top Text Serction */
if ( ! function_exists( 'freshcodes_header_top_text_fun' ) ) :
	function freshcodes_header_top_text_fun() { 
		$freshcodes_header_top_icon = get_option("freshcodes_header_top_icon");
		$freshcodes_header_toptext = get_option("freshcodes_header_toptext");
		if($freshcodes_header_toptext !== " " ) {
		?>
			<div class="fc-header-top-text-main">
				<div class="fc-header-top-text-inner">
						<?php 
						if($freshcodes_header_top_icon !== "") { ?>
							<div class="fc-header-icon-div">
								<a href="tel:+1 9175633732" aria-label="freshcodes-header-icon"><img src="<?php echo esc_url($freshcodes_header_top_icon); ?>" alt="freshcodes-header-icon" /></a>
							</div>
						<?php } ?>
					<div class="fc-header-icon-text">
						<?php if(!empty($freshcodes_header_toptext)) : ?>
						<a href="tel:+1 9175633732" aria-label="+1 (917) 563-3732"><span class="fc-header-icontext"><?php echo esc_attr($freshcodes_header_toptext); ?></span></a><br>
						<?php endif; ?>
						<a href="tel:+1 9175633732" aria-label="+1 (917) 563-3732"><span class="fc-header-iconmobile">+1 (917) 563-3732</span></a>
					</div>
				</div>
			</div>
		<?php 
		}
	}
endif;

/*Commom Repair Section*/
if ( ! function_exists( 'freshcodes_commonrepair' ) ) :
	function freshcodes_commonrepair() { ?>
			<div class="ny-commonrepair-grid">
				<div class="ny-commonrepair-item">
					<div class="ny-commonrepair-icon">
						<img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/ny-crackedscreen.jpg" alt="ny-crackedscreen-icon"/>
					</div>
					<div class="ny-commonrepair-title">
						<h4>Cracked Screen Repair</h4>
					</div>
					<div class="ny-commonrepair-content">
						<span>Get your cracked screen replaced professionally.</span>
					</div>
				</div>
				<div class="ny-commonrepair-item">
					<div class="ny-commonrepair-icon">
						<img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/ny-180days.jpg" alt="ny-180days-icon"/>
					</div>
					<div class="ny-commonrepair-title">
						<h4>180 Days Warranty</h4>
					</div>
					<div class="ny-commonrepair-content">
						<span>180 days warranty on your laptop repair.</span>
					</div>
				</div>
				<div class="ny-commonrepair-item">
					<div class="ny-commonrepair-icon">
						<img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/ny-sameday.jpg" alt="ny-sameday-icon"/>
					</div>
					<div class="ny-commonrepair-title">
						<h4>Same Day Repairs</h4>
					</div>
					<div class="ny-commonrepair-content">
						<span>We repair your laptop quote fast and normally we do it the same day.</span>
					</div>
				</div>
				<div class="ny-commonrepair-item">
					<div class="ny-commonrepair-icon">
						<img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/ny-certified.jpg" alt="ny-certified-icon"/>
					</div>
					<div class="ny-commonrepair-title">
						<h4>Certified Technicians</h4>
					</div>
					<div class="ny-commonrepair-content">
						<span>Get your laptop repaired by certified technicians.</span>
					</div>
				</div>
			</div>
<?php }
endif;
/*-------*/

/*MAC Repair Section*/

if ( ! function_exists( 'freshcodes_macrepair' ) ) :
	function freshcodes_macrepair() { ?>
		<div class="ny-macrepair-inner ny-grid">
			<div class="ny-macrepair-item">
				<div class="ny-macrepair-imgblock">
					<img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/ny-imac-repair.png" alt="ny-imac-img"/>
				</div>
				<div class="ny-macrepair-deatils">
					<div class="ny-macrepair-title">
						<h2>iMac Repair</h2>
					</div>
					<div class="ny-brandrepairs-content">
						<span class="ny-content">Tired of looking at a broken screen on your iMac? If so, bring your device to our repair center today. Whether your iMac is cracked, broken, or shattered, we can replace it for you. Many of our screen replacements are done the same day as we keep a large inventory of OEM-quality replacements in stock. Our experts are ready to give your device a fresh screen – call us today. 
</span>
					</div>
					<div class="ny-brandrepairs-btn">
						<a href="<?php esc_url(site_url()); ?>/imac/" class="fc-btn">Repairs We Offer</a>
					</div>
				</div>
			</div>
			<div class="ny-macrepair-item">
				<div class="ny-macrepair-imgblock">
					<img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/macbook-repair.png" alt="ny-macbook-img"/>
				</div>
				<div class="ny-macrepair-deatils">
					<div class="ny-macrepair-title">
						<h2>Macbook Repair</h2>
					</div>
					<div class="ny-brandrepairs-content">
						<span class="ny-content">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing.</span>
					</div>
					<div class="ny-brandrepairs-btn">
						<a href="<?php esc_url(site_url()); ?>/macbook/" class="fc-btn">Repairs We Offer</a>
					</div>
				</div>
			</div>
			<div class="ny-macrepair-item">
				<div class="ny-macrepair-imgblock">
					<img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/macbook-pro-repair.png" alt="ny-macbook-pro-img"/>
				</div>
				<div class="ny-macrepair-deatils">
					<div class="ny-macrepair-title">
						<h4>Macbook Pro Repair</h4>
					</div>
					<div class="ny-brandrepairs-content">
						<span class="ny-content">If your MacBook keeps crashing and you cannot complete your tasks due to this, bring your device to us. A crashing MacBook can happen for any number of reasons including issues with installed software, a bad battery, and low memory. Our technicians provide reliable MacBook repairs and can have your computer up and running in no time. 
</span>
					</div>
					<div class="ny-brandrepairs-btn">
						<a href="<?php esc_url(site_url()); ?>/macbook-pro/" class="fc-btn">Repairs We Offer</a>
					</div>
				</div>
			</div>
			<div class="ny-macrepair-item">
				<div class="ny-macrepair-imgblock">
					<img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/macbook-pro-retina-repair.png" alt="ny-macbook-pro-retin-img"/>
				</div>
				<div class="ny-macrepair-deatils">
					<div class="ny-macrepair-title">
						<h2>MacBook Pro Retina Repair</h2>
					</div>
					<div class="ny-brandrepairs-content">
						<span class="ny-content">Tired of trying to type on your MacBook Pro Retina only to find the keys are sticky or they do not respond to the letter or number you are pressing? A broken keyboard is to blame and can become very problematic when you need to type a paper, email, or important memo. Give our team a call today for fast MacBook Pro Retina repair and keyboard replacement.</span>
					</div>
					<div class="ny-brandrepairs-btn">
						<a href="<?php esc_url(site_url()); ?>/macbook-pro-retina/" class="fc-btn">Repairs We Offer</a>
					</div>
				</div>
			</div>
			<div class="ny-macrepair-item">
				<div class="ny-macrepair-imgblock">
					<img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/macbook-air-repair.png" alt="ny-macbook-air-img"/>
				</div>
				<div class="ny-macrepair-deatils">
					<div class="ny-macrepair-title">
						<h2>MacBook Air Repair</h2>
					</div>
					<div class="ny-brandrepairs-content">
						<span class="ny-content">If your MacBook Air has a failing hard drive, you may be worried that you are going to lose all of your important data. At NYC Laptop Repair, we offer data retrieval services that can recover any data and personal information that would otherwise be lost. Turn to our experts when you need MacBook Air repair in NYC or data recovery services.</span>
					</div>
					<div class="ny-brandrepairs-btn">
						<a href="<?php esc_url(site_url()); ?>/macbook-air/" class="fc-btn">Repairs We Offer</a>
					</div>
				</div>
			</div>
			<div class="ny-macrepair-item">
				<div class="ny-macrepair-imgblock">
					<img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/mac-mini-repair.png" alt="ny-mac-min-img"/>
				</div>
				<div class="ny-macrepair-deatils">
					<div class="ny-macrepair-title">
						<h2>Mac Mini Repair</h2>
					</div>
					<div class="ny-brandrepairs-content">
						<span class="ny-content">If you are searching for Mac Mini repair after your Mini has been exposed to water, turn to our team. We specialize in water damage repairs and can not only repair your device but also recover any data that may have been lost. Our experts also offer logic board repairs. Give us a call today to have a diagnostic test run on your laptop. 

</span>
					</div>
					<div class="ny-brandrepairs-btn">
						<a href="<?php esc_url(site_url()); ?>/mac-mini/" class="fc-btn">Repairs We Offer</a>
					</div>
				</div>
			</div>
		</div>
<?php }
endif;
/*------*/

/*Other Brand Repair Section*/

if ( ! function_exists( 'freshcodes_brandrepairs' ) ) :
	function freshcodes_brandrepairs() { ?>
		<div class="ny-brandrepairs-inner ny-carousel">
			<div class="ny-brandrepairs-item">
				<a href="<?php esc_url(site_url()); ?>/lenovo-laptop-repair">
					<div class="ny-brandrepairs-imgblock">
						<img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/ny-lenovo-brand.png" alt="ny-lenovo-img"/>
					</div>
				</a>
			</div>
			<div class="ny-brandrepairs-item">
				<a href="<?php esc_url(site_url()); ?>/hp-laptop-repair">
					<div class="ny-brandrepairs-imgblock">
						<img src="<?php esc_url(site_url()); ?>/wp-content/uploads/2023/09/ny-hp-brand.png" alt="ny-hp-img"/>
					</div>
				</a>
			</div>
			<div class="ny-brandrepairs-item">
				<a href="<?php esc_url(site_url()); ?>/dell-laptop-repair">
					<div class="ny-brandrepairs-imgblock">
						<img src="<?php esc_url(site_url()); ?>/wp-content/uploads/2023/09/ny-dell-brand.png" alt="ny-dell-img"/>
					</div>
				</a>
			</div>
			<div class="ny-brandrepairs-item">
				<a href="<?php esc_url(site_url()); ?>/asus-laptop-repair">
					<div class="ny-brandrepairs-imgblock">
						<img src="<?php esc_url(site_url()); ?>/wp-content/uploads/2023/09/ny-asus-brand.png" alt="ny-asus-img"/>
					</div>
				</a>
			</div>
			<div class="ny-brandrepairs-item">
				<a href="<?php esc_url(site_url()); ?>/acer-laptop-repair">
					<div class="ny-brandrepairs-imgblock">
						<img src="<?php esc_url(site_url()); ?>/wp-content/uploads/2023/09/ny-accer-brand.png" alt="ny-acer-img"/>
					</div>
				</a>
			</div>
			<div class="ny-brandrepairs-item">
				<a href="<?php esc_url(site_url()); ?>/google-chromebook-repair">
					<div class="ny-brandrepairs-imgblock">
						<img src="<?php esc_url(site_url()); ?>/wp-content/uploads/2023/09/ny-chromebook-brand.png" alt="ny-google-chrome-img"/>
					</div>
				</a>
			</div>
			<div class="ny-brandrepairs-item">
				<a href="<?php esc_url(site_url()); ?>/microsoft-surface-repair">
					<div class="ny-brandrepairs-imgblock">
						<img src="<?php esc_url(site_url()); ?>/wp-content/uploads/2023/09/ny-microsoft-brand.png" alt="ny-microsoft-surface-img"/>
					</div>
				</a>
			</div>
		</div>
<?php }
endif;

/*----*/

/*Our Service Section*/

if ( ! function_exists( 'freshcodes_ourservice' ) ) :
	function freshcodes_ourservice() { ?>
		<section class="ny-ourservice-section">
			<div class="ny-ourservice-main theme-container">
				<?php if(get_field("popular_recent_reapir_title")){ ?>
					<div class="ny-section-heading">
						<h1><?php the_field("popular_recent_reapir_title");?></h1>
					</div>
				<?php } ?>
					<?php echo do_shortcode( '[repair]' ); ?>
			</div>
		</section>
<?php }
endif;

/*------*/


function freshcodes_is_blog () {
	global  $post;
	$posttype = get_post_type($post);
	return (  $posttype == 'post')   ? true : false ;
}

/*Remove <br> Function*/
add_filter( 'the_content', 'freshcodes_remove_br_gallery', 11, 2);
function freshcodes_remove_br_gallery($output) {
    return preg_replace('/<br style=(.*)>/mi','',$output);
}

/* To display Page title */
add_action( 'freshcodes_page_title', 'freshcodes_page_title_block',5);
function freshcodes_page_title_block() {
echo '<div class="page-title header"><div class="page-title-inner theme-container"><div class="nyc-bredcum-inner"><h1 class="entry-title-main">';
global  $shop;
	  if ($shop == '1') {
			if (is_shop()) :
			   // translators: %s:Shop.
			   esc_html_e('Shop', 'nyclaptoprepair');
			elseif( freshcodes_is_blog() && !is_singular('post') && !is_category()  && !is_archive()):
				// translators: %s: All Blog for blog.
				esc_html_e('Blog', 'nyclaptoprepair');
 
			 elseif (is_front_page() && is_home()):
				 // translators: %s: All Blog for front page
				 esc_html_e('Blog', 'nyclaptoprepair');
 
			 elseif (is_search()) :
				 // translators: %s: Search Results for.
				 printf(esc_html__('Search Results for: "%s"', 'nyclaptoprepair'), get_search_query()); 
			  
			 elseif (is_singular('post') && freshcodes_is_blog()):
				 the_title_attribute();
 
			 elseif(is_archive() || is_post_type_archive()):
					the_archive_title(); 
 
			 elseif(is_tag()):
				  // translators: %s: Archives Tag. 
				 printf( esc_html__( 'Tag Archives: %s', 'nyclaptoprepair' ), single_tag_title( '', false ) );    
										 
			 elseif(is_category()):
				 // translators: %s: Category Archives.
				   printf( esc_html__( 'Category Archives: %s', 'nyclaptoprepair' ), single_cat_title( '', false ) ); 
 
			 elseif(is_404()):
				 // translators: %s: Not Found
					esc_html_e( 'Not Found', 'nyclaptoprepair' );
				
			 elseif (is_author()):
				 // translators: %s: All posts by
				 printf( esc_html__( 'All posts by %s', 'nyclaptoprepair' ), get_the_author() );  
											 
			 else :
				 the_title_attribute();
			 endif;                              
		 } else {
			if( freshcodes_is_blog() && !is_singular('post') && !is_category()  && !is_archive()):
			   // translators: %s: All Blog for blog.
			   esc_html_e('Blog', 'nyclaptoprepair');

			elseif (is_front_page() && is_home()):
				// translators: %s: All Blog for front page
			    esc_html_e('Blog', 'nyclaptoprepair');

			elseif (is_search()) :
				// translators: %s: Search Results for.
				printf(esc_html__('Search Results for: "%s"', 'nyclaptoprepair'), get_search_query()); 
			 
			elseif (is_singular('post') && freshcodes_is_blog()):
				the_title_attribute();

			elseif(is_archive() || is_post_type_archive()):
			   	the_archive_title(); 

			elseif(is_tag()):
			 	// translators: %s: Archives Tag. 
				printf( esc_html__( 'Tag Archives: %s', 'nyclaptoprepair' ), single_tag_title( '', false ) );    
										
			elseif(is_category()):
				// translators: %s: Category Archives.
			  	printf( esc_html__( 'Category Archives: %s', 'nyclaptoprepair' ), single_cat_title( '', false ) ); 

			elseif(is_404()):
				// translators: %s: Not Found
			   	esc_html_e( 'Not Found', 'nyclaptoprepair' );
			   
			elseif (is_author()):
				// translators: %s: All posts by
				printf( esc_html__( 'All posts by %s', 'nyclaptoprepair' ), get_the_author() );  
				                            
			else :
			    the_title_attribute();
			endif;
		 }
	echo '</h1>';
	freshcodes_breadcrumbs();
	
	if (is_singular('post') && freshcodes_is_blog()):
		do_action( 'freshcodes_post_entry_meta' );
	 endif;
	echo '</div>';
echo '</div></div>';
}
/* entry meta */
add_action( 'freshcodes_post_entry_meta', 'freshcodes_post_entry_meta_block',5);
if ( ! function_exists( 'freshcodes_post_entry_meta_block' ) ) :
	function freshcodes_post_entry_meta_block($entry) {
		echo '<div class="entry-meta">';
		freshcodes_post_entry_date(); 
		freshcodes_comments_link(); 
		echo '</div>';		
	}
endif;

if ( ! function_exists( 'freshcodes_choose_us' ) ) :
function freshcodes_choose_us(){
	echo '<section class="ny-whychoose-section">';
		echo '<div class="ny-whychoose-main theme-container">';
			echo '<div class="ny-whychoose-inner">';
				echo '<div class="ny-whychoose-item">';
					echo '<div class="ny-whychoose-icon">';
						echo '<img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/ny-spare-parts.png" alt="ny-spare-parts-icon"/>';
					echo '</div>';
					echo '<div class="ny-whychoose-title">';
						echo '<h5>Premium Quality Parts</h5>';
					echo '</div>';
				echo '</div>';
				echo '<div class="ny-whychoose-item">';
					echo '<div class="ny-whychoose-icon">';
						echo '<img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/ny-soldering.png" alt="ny-soldering-icon"/>';
					echo '</div>';
					echo '<div class="ny-whychoose-title">';
						echo '<h5>Trained Micro Soldering Techs</h5>';
					echo '</div>';
				echo '</div>';
				echo '<div class="ny-whychoose-item">';
					echo '<div class="ny-whychoose-icon">';
						echo '<img src="https://nyclaptoprepair.freshcodes.in/wp-content/uploads/2023/09/ny-experience.png" alt="ny-experience-icon"/>';
					echo '</div>';
					echo '<div class="ny-whychoose-title">';
						echo '<h5>10+ Years Experience</h5>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
echo '</section>';
}
endif;

if ( ! function_exists( 'freshcodes_repair_section_fun' ) ) :
function freshcodes_repair_section_fun() { ?>
	<section class="ny-lprepair-section">
		<?php if(get_field('nyc_section_repair_heading') || get_field('nyc_laptop_repair_brand') || get_field('nyc_laptop_repair_brand')){ ?>
				<div class="nyc-brand-wrapper">
					<div class="banner-overlay"></div>
					<div class="nyc-brand-main theme-container">
						<div class="nyc-brand-text">
							<?php if(get_field('nyc_section_repair_heading')) {?>
							<h1 class="ny-title"><?php the_field('nyc_section_repair_heading') ?></h1>
							<?php } ?>
							<?php if(get_field('nyc_section_repair_content_1')) { ?>
							<span class="ny-content"><?php the_field('nyc_section_repair_content_1') ?></span>
							<?php } ?>
						</div>
						<?php //if(get_field('nyc_laptop_repair_brand')) { ?>
							<div class="nyc-brand-image">
	<!-- 							<img src="<?php //the_field("nyc_laptop_repair_brand"); ?>" alt=""> -->
								<div class="ny-contactform-inner">
									<?php echo do_shortcode( '[contact-form-7 id="def0960" title="Main Contact Form"]' ); ?>
								</div>
							</div>
						<?php //} ?>
					</div>
				</div>
				<?php } ?>
		<div class="ny-lprepair-main theme-container">
			<div class="ny-lprepair-inner">
				<div class="nyc-icontext-section">
					<div class="nyc-icontext-inner nyc-grid-item">
						<?php for ($x = 1; $x <= 10; $x++) { ?>
						<?php if(get_field('nyc_icontext_image_'.$x) || get_field('nyc_icontext_icon_'.$x) || get_field('nyc_icontext_title_'.$x) || get_field('nyc_icontext_content_'.$x)) { ?>
							<div class="nyc-icontext-item">
								<?php if(get_field('nyc_icontext_image_'.$x)) { 
									$image_icon_img = get_field('nyc_icontext_image_'.$x);
								?>
									<div class="nyc-icontext-image">
										<?php if(get_field('nyc_icontext_link_'.$x)) { ?>
											<a href="<?php the_field('nyc_icontext_link_'.$x); ?>">
										<?php } ?>
										<img src="<?php echo esc_url($image_icon_img["url"]); ?>" alt="<?php echo $image_icon_img["title"]; ?>-nyc"/>
										<?php if(get_field('nyc_icontext_link_'.$x)) { ?>
											</a>
										<?php } ?>
									</div>
								<?php } ?>
								<div class="nyc-icon-details">
									<?php if(get_field('nyc_icontext_icon_'.$x)) { 
										$image_icon = get_field('nyc_icontext_icon_'.$x);
									?>
										<div class="nyc-icon-div">
											<div class="nyc-icon-inner">
												<img src="<?php echo esc_url($image_icon["url"]); ?>" alt="<?php echo $image_icon["title"]; ?>-nyc"/>
											</div>
										</div>
									<?php } ?>
									<?php if(get_field('nyc_icontext_title_'.$x)) { ?>
										<div class="nyc-icontext-heading">
											<?php if(get_field('nyc_icontext_link_'.$x)) { ?>
												<a href="<?php the_field('nyc_icontext_link_'.$x); ?>">
											<?php } ?>
												<h2 clas="nyc-title"><?php the_field('nyc_icontext_title_'.$x); ?></h2>
											<?php if(get_field('nyc_icontext_link_'.$x)) { ?>
												</a>
											<?php } ?>
										</div>
									<?php } ?>
									<?php if(get_field('nyc_icontext_content_'.$x)) { ?>
										<div class="nyc-icontext-content">
											<span clas="nyc-content"><?php the_field('nyc_icontext_content_'.$x); ?></span>
										</div>
									<?php } ?>
								</div>
							</div>
						<?php } ?>
						<?php } ?>
					</div>
				</div>
				<div class="nyc-grid-section theme-container">
					<div class="ny-lprepair-banner">
						<?php 
							$image = get_field("nyc_laptop_repair_section_image");
						?>
						<img src="<?php echo $image["url"] ?>" alt="<?php echo $image["title"] ?>-nyc">
					</div>
					<div class="ny-lprepair-text">
						<h2 class="ny-title"><?php the_field('nyc_section_repair_title') ?></h2>
						<?php 
							if(get_field('nyc_list_repair_text')){
								the_field('nyc_list_repair_text');
							}
						?>
						<span class="ny-content-sub"><?php the_field('nyc_section_repair_content_2') ?></span><br><br>
						<span class="ny-content-sub"><?php the_field('nyc_section_repair_content_3') ?></span><br><br>
						<span class="ny-content-sub"><?php the_field('nyc_section_repair_content_4') ?></span><br><br>
						<div class="ny-brandrepairs-btn">
							<a href="/contact-us" class="fc-btn">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
}
endif;
if ( ! function_exists( 'freshcodes_common_repair_section_fun' ) ) :
function freshcodes_common_text_section_fun() { ?>
<section class="ny-textbanner-section">
	<div class="ny-textbanner-main theme-container">
	<div class="ny-textbanner-inner">
	<div class="ny-textbanner-text">
	<h1 class="ny-title"><?php the_field('nyc_section_heading') ?></h1>
<span class="ny-content"><?php the_field('nyc_section_content_1') ?></span><br><br>
<span class="ny-content-sub"><?php the_field('nyc_section_content_2') ?></span><br><br>
<h2 class="ny-title"><?php the_field('nyc_section_title') ?></h2>
<?php the_field('nyc_list_text') ?>
<div class="ny-textbanner-btn">
	<a href="/contact-us" class="fc-btn">Contact Us</a>
</div>
</div>
<div class="ny-textbanner-banner">
	<?php 
		$image_common_section = get_field("nyc_laptop_seo_section_image");
	?>
	<img src="<?php echo esc_url($image_common_section["url"]); ?>" alt="<?php echo $image_common_section["title"]; ?>">
</div>
</div>
</div>
</section>
<?php
}
endif;

if ( ! function_exists( 'freshcodes_mac_repair_section_fun' ) ) :
function freshcodes_mac_repair_section_fun() { ?>

    <section class="ny-mac-repair-section">
		<div class="nyc-brand-wrapper">
		<div class="banner-overlay"></div>
			<div class="nyc-brand-main ny-mac theme-container">
				 <div class="nyc-brand-text">
					 <h1 class="ny-title"><?php the_field('nyc_section_mac_repair_heading') ?></h1>
					 <span class="ny-content"><?php the_field('nyc_section_mac_repair_content_1') ?></span>
				 </div>
				 <div class="nyc-brand-image">
					 <div class="ny-contactform-inner">
						 <?php echo do_shortcode( '[contact-form-7 id="def0960" title="Main Contact Form"]' ); ?>
					 </div>
				 </div>
			</div>
		</div>
        <div class="ny-mac-repair-main theme-container">
            <div class="ny-mac-repair-inner">
				<div class="nyc-icontext-section">
					<div class="nyc-icontext-inner nyc-grid-item">
						<?php for ($x = 1; $x <= 10; $x++) { ?>
						<?php if(get_field('nyc_icontext_image_'.$x) || get_field('nyc_icontext_icon_'.$x) || get_field('nyc_icontext_title_'.$x) || get_field('nyc_icontext_content_'.$x)) { ?>
							<div class="nyc-icontext-item">
								<?php if(get_field('nyc_icontext_image_'.$x)) { 
									$image_icon_img_mac = get_field('nyc_icontext_image_'.$x);
								?>
									<div class="nyc-icontext-image">
										<?php if(get_field('nyc_icontext_link_'.$x)) { ?>
											<a href="<?php the_field('nyc_icontext_link_'.$x); ?>">
										<?php } ?>
											<img src="<?php echo esc_url($image_icon_img_mac["url"]); ?>" alt="<?php echo $image_icon_img_mac["title"]; ?>"/>
										 <?php if(get_field('nyc_icontext_link_'.$x)) { ?>
											</a>
										<?php } ?>
									</div>
								<?php } ?>
								<div class="nyc-icon-details">
									<?php if(get_field('nyc_icontext_icon_'.$x)) { 
										$image_icon_mac = get_field('nyc_icontext_icon_'.$x);
									?>
										<div class="nyc-icon-div">
											<div class="nyc-icon-inner">
												
													<img src="<?php echo esc_url($image_icon_mac["url"]); ?>" alt="<?php echo $image_icon_mac["title"]; ?>-nyc"/>
											</div>
										</div>
									<?php } ?>
									<?php if(get_field('nyc_icontext_title_'.$x)) { ?>
										<div class="nyc-icontext-heading">
											<?php if(get_field('nyc_icontext_link_'.$x)) { ?>
												<a href="<?php the_field('nyc_icontext_link_'.$x); ?>">
											<?php } ?>
												<h2 clas="nyc-title"><?php the_field('nyc_icontext_title_'.$x); ?></h2>
											<?php if(get_field('nyc_icontext_link_'.$x)) { ?>
												</a>
											<?php } ?>
										</div>
									<?php } ?>
									<?php if(get_field('nyc_icontext_content_'.$x)) { ?>
										<div class="nyc-icontext-content">
											<span clas="nyc-content"><?php the_field('nyc_icontext_content_'.$x); ?></span>
										</div>
									<?php } ?>
								</div>
							</div>
						<?php } ?>
						<?php } ?>
					</div>
				</div>
                <div class="nyc-grid-section theme-container">
                    <div class="ny-lprepair-banner">
						<?php $mac_section_image = get_field("nyc_mac_repair_section_image"); ?>
						<img src="<?php echo esc_url($mac_section_image["url"]); ?>" alt="<?php echo $mac_section_image["title"]; ?>-nyc">
					</div>
					<div class="ny-lprepair-text">
						<h2 class="ny-title"><?php the_field('nyc_section_mac_repair_title') ?></h2>
						<?php the_field('nyc_list_mac_repair_text') ?>
						<span class="ny-content-sub"><?php the_field('nyc_section_mac_repair_content_2') ?></span><br><br>
						<span class="ny-content-sub"><?php the_field('nyc_section_mac_repair_content_3') ?></span><br><br>
						<span class="ny-content-sub"><?php the_field('nyc_section_mac_repair_content_4') ?></span><br><br>
						<span class="ny-content-sub"><?php the_field('nyc_section_mac_repair_content_5') ?></span><br><br>
						<span class="ny-content-sub"><?php the_field('nyc_section_mac_repair_content_6') ?></span><br>
						<div class="ny-brandrepairs-btn">
							<a href="/contact-us" class="fc-btn">Contact Us</a>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
<?php
}
endif;

if ( ! function_exists( 'freshcodes_inner_repair_fun' ) ) :
function freshcodes_inner_repair_fun(){ ?>

    <section class="ny-inner-repair-section">
        <div class="nyc-inner-repair-main">
			<div class="nyc-brand-wrapper">
			<div class="banner-overlay"></div>
				<div class="nyc-brand-main theme-container">
					<div class="nyc-brand-text">
						<h1 class="ny-title"><?php the_field('nyc_section_inner_repair_heading') ?></h1>
						<span class="ny-content"><?php the_field('nyc_section_inner_repair_content_1') ?></span>
					</div>
					<div class="nyc-brand-image">
						<div class="ny-contactform-inner">
							<?php echo do_shortcode( '[contact-form-7 id="def0960" title="Main Contact Form"]' ); ?>
						</div>
					</div>
				</div>
			</div>
            <div class="nyc-inner-repair-inner theme-container">
                <div class="nyc-inner-details-block">
					<?php if(get_field('nyc_inner_section_main_title')) { ?>
						<div class="nyc-content">
							<h1><?php the_field('nyc_inner_section_main_title') ?></h1>
						</div>
					<?php } ?>
					<?php if(get_field('nyc_inner_content_1')) { ?>
						<div class="nyc-content">
							<span><?php the_field('nyc_inner_content_1') ?></span>
						</div>
					<?php } ?>
					<?php if(get_field('nyc_inner_list_title') || get_field('nyc_inner_list')) { ?>
						<div class="nyc-inner-list-conetnt">
							<?php if(get_field('nyc_inner_list_title')) { ?>
								<h2><?php the_field('nyc_inner_list_title') ?></h2>
							<?php } ?>
							<?php if(get_field('nyc_inner_list')) { ?>
								<?php the_field('nyc_inner_list') ?>
							<?php } ?>
						</div>
					<?php } ?>
					<?php if(get_field('nyc_inner_content_2')) { ?>
						<div class="nyc-content">
							<span><?php the_field('nyc_inner_content_2') ?></span>
						</div>
					<?php } ?>
					<div class="ny-brandrepairs-btn">
						<a href="/contact-us" class="fc-btn">Contact Us</a>
					</div>
                </div>
				<div class="nyc-image-block">
					<?php if(get_field('nyc_inner_image_1')) { ?>
                    <div class="nyc-image-item">
                        <img src="<?php the_field('nyc_inner_image_1') ?>" alt="nyc-inner-images"/>
						<?php if(is_page('battery-replacement')) : ?>
							<div class="nyc-text-main">
								<span class="nyc-text">Safely remove components like the motherboard and screen connectors to ensure no damage occurs.</span>
							</div>
						<?php endif; ?>
                    </div>
					<?php } ?>
					<?php if(get_field('nyc_inner_image_2')) { ?>
                    <div class="nyc-image-item">
                        <img src="<?php the_field('nyc_inner_image_2') ?>" alt="nyc-inner-images"/>
						<?php if(is_page('battery-replacement')) : ?>
							<div class="nyc-text-main">
								<span class="nyc-text">Remove the old defective Macbook battery and replace it with the new battery.</span>
							</div>
						<?php endif; ?>
                    </div>
					<?php } ?>
					<?php if(get_field('nyc_inner_image_3')) { ?>
                    <div class="nyc-image-item">
                        <img src="<?php the_field('nyc_inner_image_3') ?>" alt="nyc-inner-images"/>
						<?php if(is_page('battery-replacement')) : ?>
							<div class="nyc-text-main">
								<span class="nyc-text">Install the new battery and test to make sure all functions are working properly.</span>
							</div>
						<?php endif; ?>
                    </div>
					<?php } ?>
                </div>
				<?php if(!is_page('battery-replacement')) : ?>
				 <div class="nyc-inner-details-block">
				<?php if(get_field('nyc_inner_heading')) { ?>
					 <div class="nyc-inner-title">
						 <h2><?php the_field('nyc_inner_heading') ?></h2>
					 </div>
				<?php } ?>
				<?php if(get_field('nyc_inner_content_3')) { ?>
						<div class="nyc-content">
							<span><?php the_field('nyc_inner_content_3') ?></span>
						</div>
					<?php } ?>
					<?php if(get_field('nyc_inner_content_4')) { ?>
						<div class="nyc-content">
							<span><?php the_field('nyc_inner_content_4') ?></span>
						</div>
					<?php } ?>
					 <div class="ny-brandrepairs-btn">
						<a href="/contact-us" class="fc-btn">Contact Us</a>
					</div>
				</div>
				<?php endif; ?>
            </div>
        </div>
    </section>
<?php
}
endif;

if ( ! function_exists( 'freshcodes_mac_inner_repair_fun' ) ) :
function freshcodes_mac_inner_repair_fun(){ ?>

    <section class="ny-mac-inner-repair-section">
        <div class="nyc-mac-inner-repair-main">
			<div class="nyc-brand-wrapper">
			<div class="banner-overlay"></div>
				<div class="nyc-brand-main theme-container">
                    <div class="nyc-brand-text">
						<h1 class="ny-title"><?php the_field('nyc_section_mac_inner_repair_heading') ?></h1>
						<span class="ny-content"><?php the_field('nyc_section_mac_inner_repair_content_1') ?></span>
					</div>
					<div class="nyc-brand-image">
						<div class="ny-contactform-inner">
							<?php echo do_shortcode( '[contact-form-7 id="def0960" title="Main Contact Form"]' ); ?>
						</div>
					</div>
                </div>
			</div>
            <div class="nyc-mac-inner-repair-inner theme-container">
                <div class="nyc-mac-inner-text-div">
                    <div class="nyc-heading">
                        <h2><?php the_field('nyc_mac_inner_heading') ?></h2>
                    </div>
                    <div class="nyc-content">
                        <span><?php the_field('nyc_mac_inner_content_1') ?></span>
                    </div>
                    <div class="nyc-mac-repair-wrapper">
                        <div class="nyc-mac-repair-details">
							 <div class="nyc-list-title">
                                    <h4><?php the_field('nyc_mac_inner_list_title') ?></h4>
                                </div>
                            <div class="nyc-content">
                                <span><?php the_field('nyc_mac_inner_list') ?></span>
                            </div>
                            <div class="nyc-title">
                                <h4><?php the_field('nyc_mac_inner_title') ?></h4>
                            </div>
                            <div class="nyc-content">
                                <span><?php the_field('nyc_mac_inner_content_2') ?></span>
                            </div>
							<div class="ny-brandrepairs-btn">
								<a href="/contact-us" class="fc-btn">Contact Us</a>
							</div>
                        </div>
                    </div>
                    <div class="nyc-mac-repair-image-text">
                        <div class="nyc-image-text-item">
                            <div class="nyc-image-block">
								<?php $mac_inner_image_1 = get_field('nyc_mac_inner_image_1');
									  $mac_inner_image_2 = get_field('nyc_mac_inner_image_2');
									  $mac_inner_image_3 = get_field('nyc_mac_inner_image_3');
								?>
                                <img src="<?php echo esc_url($mac_inner_image_1["url"]); ?>" alt="<?php echo $mac_inner_image_1["title"]; ?>-nyc"/>
                            </div>
                            <div class="nyc-image-text">
                                <div class="nyc-title">
                                    <h2><?php the_field('nyc_mac_inner_title_2') ?></h2>
                                </div>
                                <div class="nyc-content">
                                    <span><?php the_field('nyc_mac_inner_content_4') ?></span>
                                </div>
								<div class="ny-brandrepairs-btn">
									<a href="/contact-us" class="fc-btn">Contact Us</a>
								</div>
                            </div>
                        </div>
                        <div class="nyc-image-text-item">
                            <div class="nyc-image-block">
                                <img src="<?php echo esc_url($mac_inner_image_2["url"]); ?>" alt="<?php echo $mac_inner_image_2["title"]; ?>-nyc"/>
                            </div>
                            <div class="nyc-image-text">
                                <div class="nyc-title">
                                    <h2><?php the_field('nyc_mac_inner_title_3') ?></h2>
                                </div>
                                <div class="nyc-content">
                                    <span><?php the_field('nyc_mac_inner_content_5') ?></span>
                                </div>
								<div class="ny-brandrepairs-btn">
									<a href="/contact-us" class="fc-btn">Contact Us</a>
								</div>
                            </div>
                        </div>
                        <div class="nyc-image-text-item">
                            <div class="nyc-image-block">
                                <img src="<?php echo esc_url($mac_inner_image_3["url"]); ?>" alt="<?php echo $mac_inner_image_3["title"]; ?>-nyc"/>
                            </div>
                            <div class="nyc-image-text">
                                <div class="nyc-title">
                                    <h2><?php the_field('nyc_mac_inner_title_4') ?></h2>
                                </div>
                                <div class="nyc-content">
                                    <span><?php the_field('nyc_mac_inner_content_6') ?></span>
                                </div>
								<div class="ny-brandrepairs-btn">
									<a href="/contact-us" class="fc-btn">Contact Us</a>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
<?php
}
endif;

if ( ! function_exists( 'add_file_types_to_uploads' ) ) :
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
endif;
add_filter('upload_mimes', 'add_file_types_to_uploads');
?>