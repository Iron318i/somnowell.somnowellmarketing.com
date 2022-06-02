<?php

/**
 * Declaring widgets
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'widgets_init', 'somnowell_widgets_init' );

if ( ! function_exists( 'somnowell_widgets_init' ) ) {

	/**
	 * Initializes themes widgets.
	 */
	function somnowell_widgets_init() {
		register_sidebar(
			array(
				'name'          => __( 'Shop Sidebar', 'somnowell' ),
				'id'            => 'main-sidebar',
				'before_widget' => '<div class="widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			),
		);
	}

} // End of function_exists( 'somnowell_widgets_init' ).
