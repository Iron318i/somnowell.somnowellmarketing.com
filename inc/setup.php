<?php

/**
 * Theme basic setup
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

add_action( 'after_setup_theme', 'somnowell_setup' );

if ( ! function_exists( 'somnowell_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function somnowell_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on somnowell, use a find and replace
		 * to change 'somnowell' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'somnowell', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary'           => __( 'Primary Menu', 'somnowell' ),
				'copyright'         => __( 'Footer Info', 'somnowell' ),
				'footer-1'          => __( 'Footer Patients', 'somnowell' ),
				'footer-2'          => __( 'Footer Practitioners', 'somnowell' ),
				'somnowell-range'   => __( 'Somnowell Range', 'somnowell' ),
				'for-practitioners' => __( 'For Practitioners', 'somnowell' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		/*
		 * Adding Thumbnail basic support
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Adding support for Widget edit icons in customizer
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );


		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Check and setup theme default settings.
		somnowell_setup_theme_default_settings();
	}

}


add_filter( 'excerpt_more', 'somnowell_custom_excerpt_more' );

if ( ! function_exists( 'somnowell_custom_excerpt_more' ) ) {

	/**
	 * Removes the ... from the excerpt read more link
	 *
	 * @param string $more The excerpt.
	 *
	 * @return string
	 */
	function somnowell_custom_excerpt_more( $more ) {
		if ( ! is_admin() ) {
			$more = '';
		}

		return $more;
	}

}

add_image_size( 'avatar', 154, 154, array( 'center', 'center' ) );