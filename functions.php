<?php

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
       return '<p class="text-right"><a class="btn btn-primary" href="' . get_permalink() . '">Read More...</a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');


// Register Sidebars
function custom_sidebar() {

	$args = array(
		'id'            => 'main-sidebar',
		'name'          => __( 'Main Widget Area', 'text_domain' ),
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'text_domain' ),
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'custom_sidebar' );

// Register menu
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

?>