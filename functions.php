<?php 


/*Add CSS & JS*/

function management_theme_styles() {
	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/stylesheets/normalize.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/stylesheets/main.css' );
}

add_action( 'wp_enqueue_scripts', 'management_theme_styles'); /*enqueue these scripts when  you call this hook*/

function management_theme_js() {
	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', '', '', false); /*can add in array('jquery') to make dependent on jquery*/
}
add_action( 'wp_enqueue_scripts', 'management_theme_js');



/*Add Menus*/

function add_menu_support() {
    add_theme_support( 'menus' );
}
add_action( 'after_setup_theme', 'add_menu_support' );

function register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'sidebar-menu' => __( 'Sidebar Menu' ),

    )
  );
}
add_action( 'init', 'register_my_menus' );



/*Custom Theme Options Page*/

add_action( 'admin_menu', 'my_plugin_menu' );

	/** Step 1. */
function my_plugin_menu() {
	add_options_page( 'My Theme Options', 'Theme Options', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
}

	/** Step 3. */
function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>
	<p>Home Page Hero Image</p>
	<p>Home Page Hero Image</p>
	<p>Home Page Hero Image</p>
	<p>Home Page Hero Image</p>
	<p>Home Page Hero Image</p>
	<p>Home Page Hero Image</p>';
	echo '</div>';
}

?>