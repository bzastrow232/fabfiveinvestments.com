<?php

//Register navwalker-class alias
require_once("wp-bootstrap-navwalker.php");

//Theme support
//(fab) basic bootstrap blog
function fab_theme_setup(){

	//Add theme support for images
	add_theme_support('post-thumbnails');

	//Nav menus
	register_nav_menus(array(
		'primary' => __('Primary Menu')
	));

	//Post Formats
	//Able to add specific media to posts or pages in edit tabs
	add_theme_support('post-formats', array('aside','gallery'));

}

add_action('after_setup_theme','fab_theme_setup');

//Excerpt Length Control
function set_excerpt_length(){ return 150; }

//Initialize Hook with function
add_filter('except_length','set_excerpt_length');

//Theme customizer
require get_template_directory(). '/customizer/customizer.php';

//Load styles
function add_theme_styles(){

	wp_enqueue_style("bootstrap-styles", get_template_directory_uri()."/css/bootstrap.min.css");
	wp_enqueue_style('style', get_template_directory_uri()."/style.css");
}

//Load scripts
function add_theme_scripts(){

	wp_enqueue_script("jQuery", "https://code.jquery.com/jquery-3.3.1.js" );
	wp_enqueue_script("jQuery_Min_Popper","https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", array("jQuery"), true);
	wp_enqueue_script("jQuery_Slim", get_template_directory_uri()."/assets/js/vendor/jquery-slim.min.js", array("jQuery"), true);
	wp_enqueue_script("jQuery_Popper", get_template_directory_uri()."/assets/js/vendor/popper.min.js", array("jQuery"), true);
	wp_enqueue_script("bootstrap-scripts",get_template_directory_uri()."/dist/js/bootstrap.min.js", array("jQuery"), true );
	wp_enqueue_script("main", get_template_directory_uri()."/js/main.js");

}

//Register functions to work
add_action("wp_enqueue_scripts","add_theme_styles");
add_action("wp_enqueue_scripts","add_theme_scripts");



?>