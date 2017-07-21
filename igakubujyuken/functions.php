<?php 
	if( function_exists( 'add_theme_support' ) ) {
	    add_theme_support('menus');
	    add_theme_support( 'post-thumbnails' ); 
	}


/**
 * define the support location of MENU
 */
add_action('init', 'register_pixta_menu');
function register_pixta_menu() {
    register_nav_menus( array(
        'header-menu' => __('Header Menu'),
    ));
}

/**
 * define HEADER MENU
*/
function pixta_header_menu() {
    wp_nav_menu(
        array(
            'theme_location'  	=> 'header-menu',
            'menu'          	=> '',
            'menu_class'		=> 'drawer-nav',
            'container'       	=> '',
            'container_class' 	=> '',
        )
    );
}