<?php
/*-------------------------------------------------------------------------------------
TABLE OF CONTENTS
- Hook Definitions
- Contextual Hook and Filter Functions
-- woo_do_atomic()
-- woo_apply_atomic()
-- woo_get_query_context()
-------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* Hook Definitions */
/*-----------------------------------------------------------------------------------*/
// header.php			
function freshcodes_header_before() { do_action( 'freshcodes_header_before' ); }	
add_action('freshcodes_header_before', 'freshcodes_id1', 20);
if(get_option('id')=='yes'){
if ( ! function_exists( 'freshcodes_id1' ) ) {
 function freshcodes_id1($atts){  
       echo stripslashes(get_option('freshcodes_header_before')); 
    }  
}	
}
else{
if ( ! function_exists( 'freshcodes_id1' ) ) {
	function freshcodes_id1() {
		echo stripslashes(get_option('freshcodes_header_before'));
	}
}
}
function freshcodes_header() { do_action( 'freshcodes_header' ); }			
add_action('freshcodes_header', 'freshcodes_id12', 20);
if ( ! function_exists( 'freshcodes_id12' ) ) {
	function freshcodes_id12() {
		echo stripslashes(get_option('freshcodes_header'));
	}
}
function freshcodes_header_inside() { do_action( 'freshcodes_header_inside' ); }			
add_action('freshcodes_header_inside', 'freshcodes_id2', 20);
if ( ! function_exists( 'freshcodes_id2' ) ) {
	function freshcodes_id2() {
		echo stripslashes(get_option('freshcodes_header_inside'));
	}
}
function freshcodes_header_after() { do_action( 'freshcodes_header_after' ); }			
add_action('freshcodes_header_after', 'freshcodes_id3', 20);
if ( ! function_exists( 'freshcodes_id3' ) ) {
	function freshcodes_id3() {
		echo stripslashes(get_option('freshcodes_header_after'));
	}
}
function freshcodes_footer_before() { do_action( 'freshcodes_footer_before' ); }			
add_action('freshcodes_footer_before', 'freshcodes_id4', 20);
if ( ! function_exists( 'freshcodes_id4' ) ) {
	function freshcodes_id4() {
		echo stripslashes(get_option('freshcodes_footer_before'));
	}
}
function footer_footer_inside() { do_action( 'footer_footer_inside' ); }			
add_action('footer_footer_inside', 'freshcodes_id5', 20);
if ( ! function_exists( 'freshcodes_id5' ) ) {
	function freshcodes_id5() {
		echo stripslashes(get_option('footer_footer_inside'));
	}
}
function freshcodes_footer_after() { do_action( 'freshcodes_footer_after' ); }			
add_action('freshcodes_footer_after', 'freshcodes_id6', 20);
if ( ! function_exists( 'freshcodes_id6' ) ) {
	function freshcodes_id6() {
		echo stripslashes(get_option('freshcodes_footer_after'));
	}
}
function freshcodes_content_before() { do_action( 'freshcodes_content_before' ); }			
add_action('freshcodes_content_before', 'freshcodes_id7', 20);
if ( ! function_exists( 'freshcodes_id7' ) ) {
	function freshcodes_id7() {
		echo stripslashes(get_option('freshcodes_content_before'));
	}
}
function freshcodes_content_after() { do_action( 'freshcodes_content_after' ); }			
add_action('freshcodes_content_after', 'freshcodes_id8', 20);
if ( ! function_exists( 'freshcodes_id8' ) ) {
	function freshcodes_id8() {
		echo stripslashes(get_option('freshcodes_content_after'));
	}
}
function freshcodes_main_before() { do_action( 'freshcodes_main_before' ); }			
add_action('freshcodes_main_before', 'freshcodes_id9', 20);
if ( ! function_exists( 'freshcodes_id9' ) ) {
	function freshcodes_id9() {
		echo stripslashes(get_option('freshcodes_main_before'));
	}
}
function freshcodes_left_before() { do_action( 'freshcodes_left_before' ); }			
add_action('freshcodes_left_before', 'freshcodes_id10', 20);
if ( ! function_exists( 'freshcodes_id10' ) ) {
	function freshcodes_id10() {
		echo stripslashes(get_option('freshcodes_left_before'));
	}
}
function freshcodes_left_after() { do_action( 'freshcodes_left_after' ); }			
add_action('freshcodes_left_after', 'freshcodes_id11', 20);
if ( ! function_exists( 'freshcodes_id11' ) ) {
	function freshcodes_id11() {
		echo stripslashes(get_option('freshcodes_left_after'));
	}
}
function freshcodes_right_before() { do_action( 'freshcodes_right_before' ); }			
add_action('freshcodes_right_before', 'freshcodes_id12', 20);
if ( ! function_exists( 'freshcodes_id12' ) ) {
	function freshcodes_id12() {
		echo stripslashes(get_option('freshcodes_right_before'));
	}
}
function freshcodes_right_after() { do_action( 'freshcodes_right_after' ); }			
add_action('freshcodes_right_after', 'freshcodes_id13', 20);
if ( ! function_exists( 'freshcodes_id13' ) ) {
	function freshcodes_id13() {
		echo stripslashes(get_option('freshcodes_right_after'));
	}
}
function freshcodes_custom_css() { do_action( 'freshcodes_custom_css' ); }      
add_action('freshcodes_custom_css', 'freshcodes_id14', 20);
if ( ! function_exists( 'freshcodes_id14' ) ) {
  function freshcodes_id14() {  
    echo  '<style>'.stripslashes(get_option('freshcodes_custom_css')).'</style>';;
  }
}