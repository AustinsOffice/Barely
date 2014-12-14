<?php

function init_widget_areas() {

	register_sidebar( array(
		'name' => 'Main sidebar',
		'id' => 'main_sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'init_widget_areas' );

// Register a navigation menu
add_action( 'after_setup_theme', 'primary_nav' );
function primary_nav() {
  register_nav_menu( 'primary', 'Primary Menu' );
}

// Enable HTML5 components for the theme
add_theme_support( 'html5', array('comment-form', 'comment-list', 'search-form', 'gallery', 'caption' ) );
// Enable featured images for posts within the theme (thumbnails)
add_theme_support( 'post-thumbnails' );