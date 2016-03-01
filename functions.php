<?php
/*
* Functions file for single-page child theme
*/
 function singlepage_scripts() {
 	if (is_front_page() || is_page('patient-survey') || is_page('contact-us')) {
 		wp_enqueue_style('singlepage-styles', get_stylesheet_directory_uri() . '/single-style.css');

 		wp_enqueue_script( 'singlepage-script', get_stylesheet_directory_uri()  . '/js/singlepage.js', array(), '20160111', true );
 	}
 }

 add_action('wp_enqueue_scripts', 'singlepage_scripts');