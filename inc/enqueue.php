<?php

/**
 * somnowell enqueue scripts
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'somnowell_scripts' ) ) {

	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function somnowell_scripts() {
		// Get the theme data.
		if ( get_page_template_slug() !== "page-templates/landing-page.php" ) {
			wp_enqueue_style( 'fonts-styles', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500;1,700&display=swap', [], null );
		} else {
			wp_enqueue_style( 'fonts-styles', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap', [], null );
		}
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		$css_version   = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );

		wp_enqueue_style( 'somnowell-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.js' );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'somnowell-scripts', get_template_directory_uri() . '/js/theme.js', array(), $js_version, true );

	}

} // End of if function_exists( 'somnowell_scripts' ).

add_action( 'wp_enqueue_scripts', 'somnowell_scripts' );

add_action( 'wp_print_styles', 'deregister_styles', 100 );

function deregister_styles() {
	wp_deregister_style( 'contact-form-7-bootstrap-style' );
	wp_deregister_style( 'frontend_inline_style' );
}

function wps_deregister_styles() {
	wp_dequeue_style( 'global-styles' );
}

add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );

remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

add_action( 'admin_enqueue_scripts', 'my_admin_theme_style' );
add_action( 'login_enqueue_scripts', 'my_admin_theme_style' );

function my_admin_theme_style() {
	wp_enqueue_style( 'wp_admin_css', get_template_directory_uri() . '/css/admin-style.css' );
}