<?php

function init_template() {

	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');

	register_nav_menus(
		array(
			'top_menu' => 'Main Menu'
		)
	);
}

add_action('after_setup_theme', 'init_template');

function assets() {
	wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css', '', '5.2.0', 'all');
	wp_register_style( 'ubuntu', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@500;700&display=swap', '', '1.0', 'all');
	wp_register_style( 'sourcesanspro', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;1,300&display=swap', '', '1.0', 'all');

	wp_enqueue_style( 'estilos', get_stylesheet_uri(), array('bootstrap', 'ubuntu', 'sourcesanspro'), '1.0', 'all');

	wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js', '', '2.11.5', true);
	wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js', array('jquery', 'pooper'), '5.2.0', true);

	wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/index.js', '', '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'assets');

function projects_type(){
	$labels = array(
		'name' => 'Projects',
		'singular_name' => 'Project',
		'menu_name' => 'Projects',
	);
	$args = array(
		'label' => 'Projects',
		'description' =>  'My own projects',
		'labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail', 'revisions','excerpt'),
		'public' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => get_template_directory_uri().'/assets/img/icons/portfolio-icon.png',
		'can_export' => true,
		'publicy_queryble' => true,
		'rewrite' => true,
		'show_in_rest' => true
	);
	register_post_type('project', $args);
}

add_action('init', 'projects_type');
