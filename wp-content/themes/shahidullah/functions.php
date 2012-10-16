<?php
add_theme_support( 'post-thumbnails' ); 
add_image_size( 'testimonial', 65, 51, true );
add_image_size( 'wellcome', 260, 128, true );
add_image_size( 'clients', 259, 116, true );
function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Header Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support('menus'); 
function shahidullah_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'shahidullah' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'shahidullah' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );






}
/** Register sidebars by running twentyten_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'shahidullah_widgets_init' );

include (TEMPLATEPATH . '/admin/admin.php');




$prefix = 'jb_';

global $meta_boxes;

$meta_boxes = array();

// 1st meta box
$meta_boxes[] = array(
	'id' => 'newsinfomation',
	'title' => 'Testimonial',
	'pages' => array( 'post'),
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		
	// CHECKBOX	
	array(
			'name'		=> 'Name',    // File type: checkbox
			'id'		=> "{$prefix}testimetaname",
			'type'		=> 'text',

		),
			
	array(
			'name'		=> 'Company name',    // File type: checkbox
			'id'		=> "{$prefix}testcompanyname",
			'type'		=> 'text',
		),
	
	

	
	),

);

function testi_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'testi_register_meta_boxes' );

add_action('init', 'my_custom_init');

function my_custom_init() {
	add_post_type_support( 'page', 'excerpt' );
}
remove_filter('the_excerpt', 'wpautop');