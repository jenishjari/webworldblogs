<?php
/** Adding TM Menu in admin panel. */
function freshcodes_theme_setting_menu() {	
	add_theme_page( esc_html__('Theme Settings','nyclaptoprepair'), esc_html__('FC Theme Settings','nyclaptoprepair'), 'edit_theme_options', 'freshcodes_theme_settings', 'freshcodes_theme_settings_page' );		
	add_theme_page( esc_html__('Hook Manager','nyclaptoprepair'), esc_html__('FC Hook Manager','nyclaptoprepair'), 'edit_theme_options', 'freshcodes_hook_manage', 'freshcodes_hook_manage_page');
}