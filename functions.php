<?php
/*
* Functions file for single-page child theme
*/
 function singlepage_scripts() {
 	if (is_front_page()) {
 		wp_enqueue_style('singlepage-styles', get_stylesheet_directory_uri() . '/single-style.css');
 	}
 }

 add_action('wp_enqueue_scripts', 'singlepage_scripts');