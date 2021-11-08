<?php 

add_action('wp_enqueue_scripts', 'style_netgain');
add_action('wp_footer', 'scripts_netgain');
add_action('after_setup_theme', 'menu_netgain');
add_filter( 'excerpt_more', 'new_excerpt_more' );

function new_excerpt_more( $more ){
	global $post;
	return '<a class="read-more" href="'. get_permalink($post) . '">Читать дальше...</a>';
}

function menu_netgain() {
	register_nav_menu( 'topnetgain', 'Header menu netgain' ); 
	register_nav_menu( 'footernetgain', 'Footer menu netgain' );
}

function style_netgain() {
	wp_enqueue_style('style',get_stylesheet_uri()); 
	wp_enqueue_style( 'connection_style', get_template_directory_uri() . '/style.css' );

}

function scripts_netgain() {
	wp_enqueue_script('connection_scripts', get_template_directory_uri() . '/js/scripts.js');
	wp_enqueue_script('connection_jquery', get_template_directory_uri() . '/js/jquery.js');
}