<?php 
if (! defined('ABSPATH')) {
	exit;
}

function outsourcing_scripts() {
	// styles 
	wp_enqueue_style( 'umbox-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'css-libs', get_template_directory_uri() . '/assets/css/libs.min.css', 'false', 'all' );
	wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/assets/css/styles.css', array('css-libs'), 'false', 'all' );
	wp_style_add_data( 'umbox-style', 'rtl', 'replace' );

	// jquery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js' );
	wp_enqueue_script( 'jquery' );

	// other scripts
	wp_enqueue_script( 'system-libs', get_template_directory_uri() . '/assets/js/libs.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'system-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '', true );
	wp_enqueue_script( 'umbox-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'outsourcing_scripts' );


