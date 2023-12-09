<?php
/**
 * Implement Custom Header functionality for Freshcodes Theme
 *
 * @package WordPress
 * @subpackage Freshcodes
 * @since Freshcodes 1.0
 */
/**
 * Set up the WordPress core custom header settings.
 *
 * @since Freshcodes 1.0
 *
 * @uses freshcodes_header_style()
 * @uses freshcods_admin_header_style()
 * @uses freshcodes_admin_header_image()
 */
function freshcodes_custom_header_setup() {
	/**
	 * Filter Frescodes custom-header support arguments.
	 *
	 * @since Freshcodes 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type bool   $header_text            Whether to display custom header text. Default false.
	 *     @type int    $width                  Width in pixels of the custom header image. Default 1260.
	 *     @type int    $height                 Height in pixels of the custom header image. Default 240.
	 *     @type bool   $flex_height            Whether to allow flexible-height header images. Default true.
	 *     @type string $admin_head_callback    Callback function used to style the image displayed in
	 *                                          the Appearance > Header screen.
	 *     @type string $admin_preview_callback Callback function used to create the custom header markup in
	 *                                          the Appearance > Header screen.
	 * }
	 */
	add_theme_support( 'custom-header', apply_filters( 'freshcodes_custom_header_setup', array(
		'default-text-color'     => 'fff',
		'width'                  => 1260,
		'height'                 => 240,
		'flex-height'            => true,
		'wp-head-callback'       => 'freshcodes_header_style',
		'admin-head-callback'    => 'freshcods_admin_header_style',
		'admin-preview-callback' => 'freshcodes_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'freshcodes_custom_header_setup' );
if ( ! function_exists( 'freshcodes_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see freshcodes_custom_header_setup().
 *
 */
function freshcodes_header_style() {
	$text_color = get_header_textcolor();
	// If no custom color for text is set, let's bail.
	if ( display_header_text() && $text_color === get_theme_support( 'custom-header', 'default-text-color' ) )
		return;
	// If we get this far, we have custom styles.
	?>
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
$css	='	.site-title,
		.site-description {
			clip: rect(1px 1px 1px 1px); /* IE7 */
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
';
		// If the user has set a custom color for the text, use that.
		elseif ( $text_color != get_theme_support( 'custom-header', 'default-text-color' ) ) :
	$text_color ='	.site-title a {
			color: #<?php echo esc_attr( $text_color ); ?>;
		}
		';
 endif; 
	wp_add_inline_style( 'freshcodes-style', sprintf( $css , $text_color) );
}
endif; // freshcodes_header_style
if ( ! function_exists( 'freshcods_admin_header_style' ) ) :
/**
 * Style the header image displayed on the Appearance > Header screen.
 *
 * @see freshcodes_custom_header_setup()
 *
 * @since Freshcodes 1.0
 */
function freshcods_admin_header_style() {
$css = '
	.appearance_page_custom-header #headimg {
		background-color: #000;
		border: none;
		max-width: 1260px;
		min-height: 48px;
	}
	#headimg h3 {
		font-family: Lato, sans-serif;
		font-size: 18px;
		line-height: 48px;
		margin: 0 0 0 30px;
	}
	#headimg h3 a {
		color: #fff;
		text-decoration: none;
	}
	#headimg img {
		vertical-align: middle;
	}
	';
wp_add_inline_style( 'freshcodes-style', sprintf( $css ) );
}
endif; // freshcods_admin_header_style
if ( ! function_exists( 'freshcodes_admin_header_image' ) ) :
/**
 * Create the custom header image markup displayed on the Appearance > Header screen.
 *
 * @see freshcodes_custom_header_setup()
 *
 * @since Freshcodes 1.0
 */
function freshcodes_admin_header_image() {
?>
	<div id="headimg">
		<?php if ( get_header_image() ) : ?>
		<img src="<?php header_image(); ?>" alt="<?php echo esc_attr_e('headerimage','nyclaptoprepair'); ?>">
		<?php endif; 
		$css =' style="color:#%s;"'; ?>
		<h3 class="displaying-header-text"><a id="name"<?php echo sprintf( $css , get_header_textcolor() ); ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h3>
	</div>
<?php
}
endif; 
// freshcodes_admin_header_image