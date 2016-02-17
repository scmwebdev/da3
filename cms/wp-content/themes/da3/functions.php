<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // wp_enqueue_style( 'child-style',
    //     get_stylesheet_directory_uri() . '/style.css',
    //     array('parent-style')
    // );
}
//
// Your code goes below
//


add_action( 'wp_enqueue_scripts', 'theme_js' );
function theme_js() {
	wp_register_script('ajax_call', get_stylesheet_directory_uri() .'/main.js', array('jquery'), true);
	wp_enqueue_script('ajax_call');
	$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	//after wp_enqueue_script
	wp_localize_script( 'ajax_call', 'object_name', $translation_array );
}


// enable featured image on pages/posts
add_theme_support( 'post-thumbnails' );
add_image_size( 'featuredImage_mobile', 768, 600, true );
add_image_size( 'featuredImage_desktop', 1920, 600, true );
add_image_size( 'postThumb_desktop', 717, 597, true );
add_image_size( 'postThumb_mobile', 250, 250, true );
add_image_size( 'square-med', 400, 400, true );
add_image_size( 'itemList', 600, 400, true ); // for jury img
remove_filter('the_content', 'wpautop'); // remove auto p tag from wordpress

function imgResponsive() {
	if (wp_is_mobile()) {
		return 'img-responsive';
	} else {
		return '';
	}
}

function container() {
	if (wp_is_mobile()) {
		echo 'container-fluid';
	} else {
		echo 'container';
	}
}
?>