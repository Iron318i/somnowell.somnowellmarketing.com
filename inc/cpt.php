<?php

add_action( 'init', 'register_somnowell_post_type' );

function register_somnowell_post_type() {
	/* Каталог */
	register_post_type( 'practioner', array(
		'label'               => 'Practioners',
		'labels'              => array(
			'name'          => 'Practioners',
			'singular_name' => 'Practioner',
			'project_name'  => 'Practioners',
			'all_items'     => 'All Practioners',
			'add_new'       => 'Add Practioner',
			'add_new_item'  => 'Add new Practioner',
			'edit'          => 'Edit',
			'edit_item'     => 'Edit Practioner',
			'new_item'      => 'New Practioner',
		),
		'public'              => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => false,
		'query_var'           => true,
		'can_export'          => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-businessman',
		'supports'            => [ 'title', 'editor', 'thumbnail', ],
		'rewrite'             => false
	) );
}

function practioner_rewrites() {
	add_rewrite_rule( '[^/]+/attachment/([^/]+)/?$', 'index.php?attachment=$matches[1]', 'bottom' );
	add_rewrite_rule( '[^/]+/attachment/([^/]+)/trackback/?$', 'index.php?attachment=$matches[1]&tb=1', 'bottom' );
	add_rewrite_rule( '[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$', 'index.php?attachment=$matches[1]&feed=$matches[2]', 'bottom' );
	add_rewrite_rule( '[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$', 'index.php?attachment=$matches[1]&feed=$matches[2]', 'bottom' );
	add_rewrite_rule( '[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$', 'index.php?attachment=$matches[1]&cpage=$matches[2]', 'bottom' );
	add_rewrite_rule( '[^/]+/attachment/([^/]+)/embed/?$', 'index.php?attachment=$matches[1]&embed=true', 'bottom' );
	add_rewrite_rule( '([^/]+)/embed/?$', 'index.php?practioner=$matches[1]&embed=true', 'bottom' );
	add_rewrite_rule( '([^/]+)/trackback/?$', 'index.php?practioner=$matches[1]&tb=1', 'bottom' );
	add_rewrite_rule( '([^/]+)/page/?([0-9]{1,})/?$', 'index.php?practioner=$matches[1]&paged=$matches[2]', 'bottom' );
	add_rewrite_rule( '([^/]+)/comment-page-([0-9]{1,})/?$', 'index.php?practioner=$matches[1]&cpage=$matches[2]', 'bottom' );
	add_rewrite_rule( '([^/]+)(?:/([0-9]+))?/?$', 'index.php?practioner=$matches[1]', 'bottom' );
	add_rewrite_rule( '[^/]+/([^/]+)/?$', 'index.php?attachment=$matches[1]', 'bottom' );
	add_rewrite_rule( '[^/]+/([^/]+)/trackback/?$', 'index.php?attachment=$matches[1]&tb=1', 'bottom' );
	add_rewrite_rule( '[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$', 'index.php?attachment=$matches[1]&feed=$matches[2]', 'bottom' );
	add_rewrite_rule( '[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$', 'index.php?attachment=$matches[1]&feed=$matches[2]', 'bottom' );
	add_rewrite_rule( '[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$', 'index.php?attachment=$matches[1]&cpage=$matches[2]', 'bottom' );
	add_rewrite_rule( '[^/]+/([^/]+)/embed/?$', 'index.php?attachment=$matches[1]&embed=true', 'bottom' );
}

add_action( 'init', 'practioner_rewrites' );

function practioner_permalinks( $post_link, $post, $leavename ) {
	if ( isset( $post->post_type ) && 'practioner' == $post->post_type ) {
		$post_link = home_url( $post->post_name );
	}

	return $post_link;
}

add_filter( 'post_type_link', 'practioner_permalinks', 10, 3 );

function prevent_slug_duplicates( $slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug ) {
	$check_post_types = array(
		'post',
		'page',
		'practioner'
	);

	if ( ! in_array( $post_type, $check_post_types ) ) {
		return $slug;
	}

	if ( 'practioner' == $post_type ) {
		// Saving a practioner post, check for duplicates in POST or PAGE post types
		$post_match = get_page_by_path( $slug, 'OBJECT', 'post' );
		$page_match = get_page_by_path( $slug, 'OBJECT', 'page' );

		if ( $post_match || $page_match ) {
			$slug .= '-duplicate';
		}
	} else {
		// Saving a POST or PAGE, check for duplicates in practioner post type
		$practioner_match = get_page_by_path( $slug, 'OBJECT', 'practioner' );

		if ( $practioner_match ) {
			$slug .= '-duplicate';
		}
	}

	return $slug;
}

add_filter( 'wp_unique_post_slug', 'prevent_slug_duplicates', 10, 6 );