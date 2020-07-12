<?php

function ptwpsoftdevtheme_add_theme_css() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );

	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
		array( 'jquery' ), '1.14.7', true );
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
		array( 'popper' ), '4.3.1', true );

	// Theme JS files
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/assets/js/index.js', array( 'bootstrap-js' ), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'ptwpsoftdevtheme_add_theme_css' );

// Support for featured images
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 150, true ); // default Featured Image dimensions (cropped)
}

// Support for sidebar
function ptwpsoftdevtheme_sidebars() {
	register_sidebar(
		array(
			'id'            => 'right-sidebar',
			'name'          => __( 'Right Sidebar' ),
			'description'   => __( 'Sidebar to show context information.' ),
			'before_widget' => '<div class="card-body ptwpsoftdevtheme-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4><hr>',
		)
	);
}

add_action( 'widgets_init', 'ptwpsoftdevtheme_sidebars' );

// Support for menu
function ptwpsoftdevtheme_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}

add_action( 'init', 'ptwpsoftdevtheme_menus' );
