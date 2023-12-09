<?php
/**
 * Set up the content width value based on the theme's design.
 *
 * @see freshcodes_content_width()
 *
 * @since Freshcodes 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1400;
}
function freshcodes_setup() {
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/font-awesome.css', '/fonts/css/font-awesome.css', freshcodes_fonts_url() ) );
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );
	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
	/*
	 * This theme supports all available post formats by default.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );
	global $wp_version;
	if ( version_compare( $wp_version, '3.4', '>=' ) ) {
		add_theme_support( 'custom-background' ); 
	}
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		 'primary'   => esc_html__( 'FC Main Menu', 'nyclaptoprepair' ),
		 'header-account-menu'   => esc_html__( 'FC Header Account Link', 'nyclaptoprepair' ),
	) );
	//add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'register_block_style' );
	add_theme_support( 'register_block_pattern' );
	add_theme_support( "align-wide" );
	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 604, 270, true );
	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
add_action( 'after_setup_theme', 'freshcodes_setup' );
/********************************************************
**************** TEMPLATE MELA CONTENT WIDTH ******************
********************************************************/
function freshcodes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'freshcodes_content_width', 895 );
}
add_action( 'after_setup_theme', 'freshcodes_content_width', 0 );
/**
 * Getter function for Featured Content Plugin.
 *
 * @since Freshcodes 1.0
 *
 * @return array An array of WP_Post objects.
 */
function freshcodes_get_featured_posts() {
	/**
	 * Filter the featured posts to return in Freshcodes.
	 * @param array|bool $posts Array of featured posts, otherwise false.
	 */
	return apply_filters( 'freshcodes_get_featured_posts', array() );
}
/**
 * A helper conditional function that returns a boolean value.
 * @return bool Whether there are featured posts.
 */
function freshcodes_has_featured_posts() {
	return ! is_paged() && (bool) freshcodes_get_featured_posts();
}
/*************** FRESHCODES SIDEBAR ****************/
function freshcodes_widgets_init() {
	register_sidebar( array(
		'name' => esc_html__( 'Main Sidebar', 'nyclaptoprepair' ),
		'id' => 'sidebar-1',
		'description' => esc_html__( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'nyclaptoprepair' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Home Sidebar', 'nyclaptoprepair' ),
		'id' => 'home-sidebar',
		'description' => esc_html__( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'nyclaptoprepair' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
}
add_action( 'widgets_init', 'freshcodes_widgets_init' );
/*************** FRESHCODES FONT SETTING ****************/
function freshcodes_fonts_url() {
	$fonts_url = '';
	/* Translators: If there are characters in your language that are not
	 * supported by Source Sans Pro, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$source_sans_pro = _x( 'on', 'Source Sans Pro font: on or off', 'nyclaptoprepair' );
	/* Translators: If there are characters in your language that are not
	 * supported by Bitter, translate this to 'off'. Do not translate into your
	 * own language.
	 */
	$bitter = _x( 'on', 'Bitter font: on or off', 'nyclaptoprepair' );
	if ( 'off' !== $source_sans_pro || 'off' !== $bitter ) {
		$font_families = array();
		if ( 'off' !== $source_sans_pro )
			$font_families[] = 'Source Sans Pro:300,400,600,300italic,400italic,600italic';
		if ( 'off' !== $bitter )
			$font_families[] = 'Bitter:400,600';
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = esc_url( add_query_arg( $query_args, "//fonts.googleapis.com/css" ));
	}
	return $fonts_url;
}
/*************** FRESHCODES SCRIPT SETTING ****************/
function freshcodes_scripts_styles() {
	// Add fonts, used in the main stylesheet.
	wp_enqueue_style( 'freshcodes-fonts', freshcodes_fonts_url(), array(), null );
	// Add Genericons font, used in the main stylesheet.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/css/font-awesome.css', array(), '4.7.0' );
	// Loads our main stylesheet.
	wp_enqueue_style( 'freshcodes-style', get_stylesheet_uri(), array(), '1.0' );
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// Loads JavaScript file with functionality specific to Freshcodes.
	wp_enqueue_script( 'freshcodes-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '2014-02-01', true );	
}
add_action( 'wp_enqueue_scripts', 'freshcodes_scripts_styles' );
/*************** FRESHCODES IMAGE ATTACHMENT ****************/
if ( ! function_exists( 'freshcodes_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 * @return void
 */
function freshcodes_the_attached_image() {
	/**
	 * Filter the image attachment size to use.
	 *
	 * @since Freshcodes 1.0
	 *
	 * @param array $size {
	 *     @type int The attachment height in pixels.
	 *     @type int The attachment width in pixels.
	 * }
	 */
	$attachment_size     = apply_filters( 'freshcodes_attachment_size', array( 1400, 1100 ) );
	$next_attachment_url = wp_get_attachment_url();
	$post                = get_post();
	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID'
	) );
	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}
		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );
		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
	}
	// translators: %s: image attachment.
    printf( wp_kses( __( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>', 'nyclaptoprepair' ),freshcodes_allowed_html()), 
		esc_url( $next_attachment_url ),
		the_title_attribute( array( 'echo' => false ) ),
    wp_get_attachment_image( $post->ID, $attachment_size ) ); 
}
endif;
/*************** FRESHCODES GET URL  ****************/
function freshcodes_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );
	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}
/*************** FRESHCODES LIST AUTHOR SETTING  ****************/
if ( ! function_exists( 'freshcodes_list_authors' ) ) :
/**
 * Print a list of all site contributors who published at least one post.
 * @return void
 */
function freshcodes_list_authors() {
	$contributor_ids = get_users( array(
		'fields'  => 'ID',
		'orderby' => 'post_count',
		'order'   => 'DESC',
		'who'     => 'authors',
	) );
	foreach ( $contributor_ids as $contributor_id ) :
		$post_count = count_user_posts( $contributor_id );
		// Move on if user has not published a post (yet).
		if ( ! $post_count ) {
			continue;
		}
	?>
<div class="contributor">
  <div class="contributor-info">
    <div class="contributor-avatar"><?php echo esc_html(get_avatar( $contributor_id, 132 )); ?></div>
    <div class="contributor-summary">
      <h2 class="contributor-name"><?php echo esc_html(get_the_author_meta( 'display_name', $contributor_id )); ?></h2>
      <p class="contributor-bio"> <?php echo esc_attr(get_the_author_meta( 'description', $contributor_id )); ?> </p>
		<a class="contributor-posts-link" href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>"> 
			<?php 
				// translators: %d: Article And Articles.
				printf( _n( '%d Article', '%d Articles', $post_count, 'nyclaptoprepair' ), $post_count ); ?> 
		</a> 
	</div>
    <!-- .contributor-summary -->
  </div><!-- .contributor-info -->
</div><!-- .contributor -->
<?php
	endforeach;
}
endif;
/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Presence of header image.
 * 3. Index views.
 * 4. Full-width content layout.
 * 5. Presence of footer widgets.
 * 6. Single views.
 * 7. Featured content layout.
 *
 * @since Freshcodes 1.0
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function freshcodes_body_classes( $classes ) {
	if ( is_multi_author() ) {
		$classes[] = 'group-blog ny-website';
	}
	if ( get_header_image() ) {
		$classes[] = 'header-image ny-website';
	} else {
		$classes[] = 'masthead-fixed ny-website';
	}
	if ( is_archive() || is_search() || is_home() ) {
		$classes[] = 'list-view ny-website';
	}
	if ( ( ! is_active_sidebar( 'sidebar-2' ) )
		|| is_page_template( 'page-templates/full-width.php' )
		|| is_page_template( 'page-templates/contributors.php' )
		|| is_attachment() ) {
	}
	if ( is_singular() && ! is_front_page() ) {
		$classes[] = 'ny-singular-page ny-website';
	}
	if ( is_front_page() && 'slider' == get_theme_mod( 'freshcodes_Featured_Content_layout' ) ) {
		$classes[] = 'slider ny-website';
	} elseif ( is_front_page() ) {
		$classes[] = 'grid ny-website';
	}
	return $classes;
}
add_filter( 'body_class', 'freshcodes_body_classes' );
/**
 * Extend the default WordPress post classes.
 *
 * Adds a post class to denote:
 * Non-password protected page with a post thumbnail.
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
function freshcodes_post_classes( $classes ) {
	if ( ! post_password_required() && has_post_thumbnail() ) {
		$classes[] = 'has-post-thumbnail';
	}
	return $classes;
}
add_filter( 'post_class', 'freshcodes_post_classes' );
// Implement Custom Header features.
get_template_part('inc/custom-header' );
// Custom template tags for this theme.
get_template_part('inc/template-tags' );
// Add Theme Customizer functionality.
get_template_part( 'inc/customizer' );
function freshcodes_title_tag() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'freshcodes_title_tag' );
/*Add Freshcodes custom function */
get_template_part('freshcodes/freshcodes-functions' );
/*Add Freshcodes theme setting in menu */
get_template_part('freshcodes/options' );
/*Add TGMPA library file */
get_template_part('/freshcodes/freshcodes-plugins-install');
add_action( 'admin_menu', 'freshcodes_theme_setting_menu' );
function freshcodes_theme_settings_page() {
	$locale_file = get_template_part('freshcodes/admin/theme-setting');
	if (is_readable( $locale_file ))		
		get_template_part('freshcodes/admin/theme-setting' );
}
function freshcodes_hook_manage_page() {
	$locale_file = get_template_part('freshcodes/admin/theme-hook') ;
	if (is_readable( $locale_file ))		
			get_template_part('freshcodes/admin/theme-hook' );
}
/* Control Panel Tags Function Includes */
get_template_part('freshcodes/controlpanel/freshcodes_control_panel' );
get_template_part('freshcodes/admin/hook-functions' );
/*for single post related page */
if ( ! function_exists( 'freshcodes_related_posts' ) ) :
function freshcodes_related_posts() {
global $post;
	$orig_post = $post;
$categories = get_the_category($post->ID);
if ($categories) {
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
$args=array(
'category__in' => $category_ids,
'post__not_in' => array($post->ID),
'posts_per_page'=> 10, // Number of related posts that will be shown.
'ignore_sticky_posts'=>1
);
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {   ?>
<div class="related_posts_outer"><div class="shortcode-title center"><h1 class="normal-title"><?php echo esc_attr_e( 'Related Posts', 'nyclaptoprepair' ) ?></h1></div>
<div class="related_posts blog-list">
<?php while( $my_query->have_posts() ) {
$my_query->the_post();?>
<article class="post">
<div class="entry-main-content">
<div class="entry-thumbnail">
	<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
</div>
 <?php $postImage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );	?>
<div class="post-info <?php if(empty($postImage)): ?> non <?php endif; ?>">
	<div class="entry-meta date <?php if(empty($postImage)): ?> non <?php endif; ?>">
		<?php freshcodes_post_entry_date(); ?>	 				
	</div>
	<div class="entry-main-header ">			
		<header class="entry-header"><h6 class="entry-title">
		<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title_attribute(); ?></a>
		</h6></header>
	</div>
	<div class="entry-content-inner">
				<div class="entry-meta-inner">				
				  <div class="entry-meta">
					  <div class="entry-summary">
							<div class="excerpt"> <?php echo freshcodes_posts_short_description(); ?> </div>
							<div class="fc-date-btn-main">
                        		<?php echo freshcodes_blog_readmore_fnc(); ?>
								<?php freshcodes_post_entry_date(); ?>
                    		</div>
					  </div><!-- .entry-summary -->
					</div> <!--  entry-meta -->
			</div><!--  entry-meta-inner -->
	 </div>
</div>	
</article>		
<?php
}
echo '</div></div>';
}
}
$post = $orig_post;
wp_reset_postdata(); 
}
endif;
// Menu Item Description
function fc_nav_menu_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( $args->link_after . '</a>', '<span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
    }
  
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'fc_nav_menu_description', 10, 4 );
?>