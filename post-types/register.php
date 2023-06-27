<?php

function skriemelis_register_lifts_type() {

	$labels = array(
		'name'          => esc_html__( 'Lifti', 'skriemelis' ),
		'singular_name' => esc_html__( 'Lifts', 'skriemelis' ),
		'add_new'       => esc_html__( 'Pievienot liftu', 'skriemelis' ),
		'search_items'  => esc_html__( 'Atrast liftu', 'skriemelis' ),
		'archives'      => esc_html__( 'Visi lifti', 'skriemelis' ),
	);

	$args = array(
		'label'                 => esc_html__( 'Lifts', 'skriemelis' ),
		'labels'                => $labels,
		'description'           => '',
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'rest_base'             => '',
		'show_in_graphql'       => true,
		'graphql_single_name'   => 'lifts',
		'graphql_plural_name'   => 'lifti',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'rest_namespace'        => 'wp/v2',
		'has_archive'           => 'lifti',
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'delete_with_user'      => false,
		'exclude_from_search'   => false,
		'capability_type'       => 'page',
		'map_meta_cap'          => true,
		'hierarchical'          => false,
		'can_export'            => false,
		'rewrite'               => array(
			'slug'       => 'lifti',
			'with_front' => true,
		),
		'query_var'             => true,
		'menu_icon'             => 'dashicons-tablet',
		// 'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
	);

	register_post_type( 'lifts', $args );
}

function skriemelis_register_parbaude_type() {

	$labels = array(
		'name'          => esc_html__( 'Pārbaudes', 'skriemelis' ),
		'singular_name' => esc_html__( 'Pārbaude', 'skriemelis' ),
		'add_new'       => esc_html__( 'Reģistrēt jaunu pārbaudi', 'skriemelis' ),
		'search_items'  => esc_html__( 'Atrast pārbaudi', 'skriemelis' ),
		'archives'      => esc_html__( 'Visas pārbaudes', 'skriemelis' ),
	);

	$args = array(
		'label'                 => esc_html__( 'Pārbaudes', 'skriemelis' ),
		'labels'                => $labels,
		'description'           => '',
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'rest_base'             => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'rest_namespace'        => 'wp/v2',
		'has_archive'           => 'parbaudes',
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'delete_with_user'      => false,
		'exclude_from_search'   => false,
		'capability_type'       => 'page',
		'map_meta_cap'          => true,
		'hierarchical'          => false,
		'can_export'            => false,
		'rewrite'               => array(
			'slug'       => 'parbaudes',
			'with_front' => true,
		),
		'query_var'             => true,
		'menu_icon'             => 'dashicons-search',
		// 'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'show_in_graphql'       => false,
	);

	register_post_type( 'parbaude', $args );
}

function skriemelis_register_valditajs_type() {

	$labels = array(
		'name'          => esc_html__( 'Valdītāji', 'skriemelis' ),
		'singular_name' => esc_html__( 'Valdītājs', 'skriemelis' ),
		'add_new'       => esc_html__( 'Pievienot valdītāju', 'skriemelis' ),
		'search_items'  => esc_html__( 'Atrast valdītāju', 'skriemelis' ),
		'archives'      => esc_html__( 'Visi valdītāji', 'skriemelis' ),
	);

	$args = array(
		'label'                 => esc_html__( 'Valdītāji', 'skriemelis' ),
		'labels'                => $labels,
		'description'           => '',
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'rest_base'             => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'rest_namespace'        => 'wp/v2',
		'has_archive'           => 'valditaji',
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'delete_with_user'      => false,
		'exclude_from_search'   => false,
		'capability_type'       => 'page',
		'map_meta_cap'          => true,
		'hierarchical'          => false,
		'can_export'            => false,
		'rewrite'               => array(
			'slug'       => 'valditaji',
			'with_front' => true,
		),
		'query_var'             => true,
		'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
		// 'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'show_in_graphql'       => false,
	);

	register_post_type( 'valditajs', $args );
}
