<?php
/*
Include class-wp-bootstrap-navwalker.php
*/ 
require_once('wp-bootstrap-navwalker.php');
/*
** function to add badeeapro theme styles
** wp_enqueue_style()
*/
function badeeapro_add_styles(){
	/* Bootstrap Files */
	wp_enqueue_style('my-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/fontawesome.min.css');
	wp_enqueue_style('main-css', get_template_directory_uri().'/css/main.css');
}

/*
** function to add badeeapro theme script
** wp_enqueue_script()
*/
function badeeapro_add_scripts(){
	/* Bootstrap Files */
	wp_enqueue_script('my-bootstrap', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),false,true);
	wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js',array(),false,true);
	wp_enqueue_script('html5shiv', get_template_directory_uri().'/js/html5shiv.js',array(),false,true);
	wp_script_add_data('html5shiv', 'conditional','lt IE9');
		wp_enqueue_script('respond', get_template_directory_uri().'/js/respond.min.js',array(),false,true);
	wp_script_add_data('respond', 'conditional','lt IE9');
}

// add action //
add_action('wp_enqueue_scripts','badeeapro_add_styles');
add_action('wp_enqueue_scripts','badeeapro_add_scripts');


// add custom menu
function badeeapro_register_custom_menu(){
	register_nav_menus(array(
		'bootstrap-menu'   => 'Navigation Bar',
		'social-menu'      => 'social-links'
	));
}
function badeeapro_bootstrap_menu(){
	wp_nav_menu(array(
		'theme_location' 	=>	'bootstrap-menu',
		'menu_class'		=>	'navbar-nav ml-auto',
		'container'			=>	false,
		'depth'				=>	2,
		'walker'			=>new wp_bootstrap_navwalker()
	));
}
add_action('init','badeeapro_register_custom_menu');