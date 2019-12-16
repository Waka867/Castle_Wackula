<?php

// Load scripts
function script_starter() {
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_script( 'custom-jscript', get_stylesheet_directory_uri() . '/assets/functionality.js', array('jquery'), '', true );
	wp_enqueue_style( 'bootstrap-grid', get_stylesheet_directory_uri() . '/assets/bootstrap-css/bootstrap-grid.min.css' );
	// Loads script for comment reply
	if( is_singular() && comments_open() ){
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'script_starter' );

function nav_menu_starter() {
	// Register Nav Menus
	register_nav_menus(
			//[ 'main-menu' => 'Main Menu Led', 'backup-menu' => 'Backup Menu' ]
			[ 'main-menu' => 'Main Menu Led', 'footer-menu' => 'Footer Menu' ]
	);
}
add_action( 'init', 'nav_menu_starter' );

// // Include custom navwalker
// require_once('bs4navwalker.php');
//
// // Register WordPress nav menu
// register_nav_menu('top', 'Top menu');







// Add Theme Support for new features
function theme_slug_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );
// Adds thumbnail/featured image support. This is where you would add it for new custom post types
add_theme_support( 'post-thumbnails', [ 'post', 'page' ] );


function practice_theme_post_formats_setup() {
 add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
}
add_action( 'after_setup_theme', 'practice_theme_post_formats_setup' );





// SET UP FOR WIDGET AREAS
function wptags_widgets_init() {
  register_sidebar([
    'name'          => esc_html__( 'Main Sidebar', 'wptags' ),
    'id'            => 'main-sidebar',
    'description'   => esc_html__( 'Add widgets for main sidebar here', 'wptags' ),
    'before_widget' => '<section class="widget">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ]);
}
add_action( 'widgets_init', 'wptags_widgets_init' );





// TEMPLATE PART DISPLAY FUNCTIONS
// Declare comment callback function
function comment_display() {
	// Gets code from comment.php
	get_template_part('comment');
};

// Declare byline display function
function byline_display() {
	// Gets code from /template-parts/byline.php
	echo get_template_part('template-parts/byline');
};

?>
