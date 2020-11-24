<?php
/**
 * Created by PhpStorm.
 * User: itd-tam
 * Date: 26/03/2019
 * Time: 13:00
 */
	
add_theme_support( 'post-thumbnails' );

function add_slug_body_class() {
    global $post;
    return $post->post_name;
}
add_filter( 'body_class', 'add_slug_body_class' );

// Option Page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Hero Background',
		'menu_title'	=> 'Hero Background',
		'menu_slug' 	=> 'hero-background',
		'redirect'		=> false
	));
	
	acf_add_options_page(array(
		'page_title' 	=> 'Home Page',
		'menu_title'	=> 'Home Page',
		'menu_slug' 	=> 'home-page',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'How We Do',
		'menu_title'	=> 'How We Do',
		'parent_slug'	=> 'home-page',
		'menu_slug' 	=> 'how-we-do',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Case Snap 1',
		'menu_title'	=> 'Case Snap 1',
		'parent_slug'	=> 'home-page',
		'menu_slug' 	=> 'case-snap-1',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Case Snap 2',
		'menu_title'	=> 'Case Snap 2',
		'parent_slug'	=> 'home-page',
		'menu_slug' 	=> 'case-snap-2',
	));
	
	acf_add_options_page(array(
		'page_title' 	=> 'Navigation',
		'menu_title'	=> 'Navigation',
		'menu_slug' 	=> 'navigation',
		'redirect'		=> false
	));
}
// google map api key
function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyBTMHi-A-ym5Xk-hREZcJxRepgK8CzIRnY');
}

add_action('acf/init', 'my_acf_init');