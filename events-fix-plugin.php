<?php 
/*
Plugin Name: Gutenberg fix for Events manager
Plugin URI: 
Description: Gutenberg fix for Events manager
Author: audun
Version: 0.2
Author URI: 
License: GPL2
*/

function bsos_gutenberg_categories_fix($args) {
	$args['show_in_rest'] = true;
	return $args;
}


add_filter('em_ct_categories','bsos_gutenberg_categories_fix');
add_filter('em_ct_tags','bsos_gutenberg_categories_fix');