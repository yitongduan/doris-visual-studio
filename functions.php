<?php
	// enable featured images in pages and posts.
	add_theme_support('post-thumbnails');

	// enable customizable menus.
	// you can register multiple menus by adding more register_nav_menu blocks, 
	// like the 'Secondary Menu' that is commented out below
	function register_my_menu() {
	     register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
	     //register_nav_menu( 'secondary-menu', __( 'Secondary Menu' ) );
	}
	add_action( 'init', 'register_my_menu' );

	//Code for custom background support
    add_custom_background();

	//carousal
    function set_flexslider_hg_rotators()
{
    $rotators = array();
    $rotators['homepage'] = array( 'size' => 'homepage-rotator' );
    return $rotators;
}
	add_filter('flexslider_hg_rotators', 'set_flexslider_hg_rotators');
	add_image_size( 'homepage-rotator', '550', '250', true );

	// enable a "widgetized sidebar".
	if ( function_exists('register_sidebar') ) register_sidebar();
?>