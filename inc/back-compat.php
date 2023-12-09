<?php
/**
 * Freshcodes back compat functionality
 *
 * Prevents Freshcodes from running on WordPress versions prior to 3.6,
 * since this theme is not meant to be backward compatible beyond that
 * and relies on many newer functions and markup changes introduced in 3.6.
 *
 * @package WordPress
 * @subpackage Freshcodes
 * @since Freshcodes 1.0
 */
/**
 * Prevent switching to Freshcodes on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Freshcodes 1.0
 *
 * @return void
 */
function freshcodes_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'freshcodes_upgrade_notice' );
}
add_action( 'after_switch_theme', 'freshcodes_switch_theme' );
/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Freshcodes on WordPress versions prior to 3.6.
 *
 * @since Freshcodes 1.0
 *
 * @return void
 */
function freshcodes_upgrade_notice() {
	// translators: %s: Freshcodes requires at least WordPress version 3.6. You are running version Please upgrade and try again.
	$message = sprintf( esc_html__( 'Freshcodes requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'nyclaptoprepair' ), $GLOBALS['wp_version'] );
	printf( wp_kses( __( '<div class="error"><p>%s</p></div>', 'nyclaptoprepair' ),freshcodes_allowed_html()), $message); 
}
/**
 * Prevent the Theme Customizer from being loaded on WordPress versions prior to 3.6.
 *
 * @since Freshcodes 1.0
 *
 * @return void
 */
function freshcodes_customize() {
	// translators: %s: Freshcodes requires at least WordPress version 3.6. You are running version Please upgrade and try again.
	wp_die( sprintf( esc_html__( 'Freshcodes requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'nyclaptoprepair' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'freshcodes_customize' );
/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.4.
 *
 * @since Freshcodes 1.0
 *
 * @return void
 */
function freshcodes_preview() {
	if ( isset( $_GET['preview'] ) ) {
		// translators: %s: Freshcodes requires at least WordPress version 3.6. You are running version Please upgrade and try again.
		wp_die( sprintf( esc_html__( 'Freshcodes requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'nyclaptoprepair' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'freshcodes_preview' );