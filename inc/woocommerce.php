<?php

/**
 * Add WooCommerce support
 *
 * @package Pocket-Monster
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'somnowell_woocommerce_support' );
if ( ! function_exists( 'somnowell_woocommerce_support' ) ) {

	/**
	 * Declares WooCommerce theme support.
	 */
	function somnowell_woocommerce_support() {
		add_theme_support( 'woocommerce' );

		// Add Product Gallery support.
		add_theme_support( 'wc-product-gallery-lightbox' );
		//add_theme_support('wc-product-gallery-zoom');
		//add_theme_support('wc-product-gallery-slider');
		// Add Bootstrap classes to form fields.
		add_filter( 'woocommerce_form_field_args', 'somnowell_wc_form_field_args', 10, 3 );
		add_filter( 'woocommerce_quantity_input_classes', 'somnowell_quantity_input_classes' );
	}

}

// First unhook the WooCommerce content wrappers.
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

// Then hook in your own functions to display the wrappers your theme requires.
//add_action( 'woocommerce_before_main_content', 'somnowell_woocommerce_wrapper_start', 10 );
//add_action( 'woocommerce_after_main_content', 'somnowell_woocommerce_wrapper_end', 10 );

if ( ! function_exists( 'somnowell_woocommerce_wrapper_start' ) ) {

	/**
	 * Display the theme specific start of the page wrapper.
	 */
	function somnowell_woocommerce_wrapper_start() {
		$container = get_theme_mod( 'somnowell_container_type' );
		echo '<div class="wrapper" id="woocommerce-wrapper">';
		echo '<div class="container" id="content" tabindex="-1">';
	}

}

if ( ! function_exists( 'somnowell_woocommerce_wrapper_end' ) ) {

	/**
	 * Display the theme specific end of the page wrapper.
	 */
	function somnowell_woocommerce_wrapper_end() {
		echo '</div>';
		echo '</div>';
	}

}

if ( ! function_exists( 'somnowell_wc_form_field_args' ) ) {

	/**
	 * Filter hook function monkey patching form classes
	 * Author: Adriano Monecchi http://stackoverflow.com/a/36724593/307826
	 *
	 * @param string $args Form attributes.
	 * @param string $key Not in use.
	 * @param null $value Not in use.
	 *
	 * @return mixed
	 */
	function somnowell_wc_form_field_args( $args, $key, $value = null ) {
		// Start field type switch case.
		switch ( $args['type'] ) {
			// Targets all select input type elements, except the country and state select input types.
			case 'select':
				/*
				 * Add a class to the field's html element wrapper - woocommerce
				 * input types (fields) are often wrapped within a <p></p> tag.
				 */
				$args['class'][] = 'form-group';
				// Add a class to the form input itself.
				$args['input_class'] = array( 'form-control' );
				// Add custom data attributes to the form input itself.
				$args['custom_attributes'] = array(
					'data-plugin'      => 'select2',
					'data-allow-clear' => 'true',
					'aria-hidden'      => 'true',
				);
				break;

			/*
			 * By default WooCommerce will populate a select with the country names - $args
			 * defined for this specific input type targets only the country select element.
			 */
			case 'country':
				$args['class'][] = 'form-group single-country';
				break;

			/*
			 * By default WooCommerce will populate a select with state names - $args defined
			 * for this specific input type targets only the country select element.
			 */
			case 'state':
				$args['class'][]           = 'form-group';
				$args['custom_attributes'] = array(
					'data-plugin'      => 'select2',
					'data-allow-clear' => 'true',
					'aria-hidden'      => 'true',
				);
				break;
			case 'password':
			case 'text':
			case 'email':
			case 'tel':
			case 'number':
				$args['class'][]     = 'form-group';
				$args['input_class'] = array( 'form-control' );
				break;
			case 'textarea':
				$args['input_class'] = array( 'form-control' );
				break;
			case 'checkbox':
				$args['class'][] = 'form-group';
				// Wrap the label in <span> tag.
				$args['label'] = isset( $args['label'] ) ? '<span class="custom-control-label">' . $args['label'] . '<span>' : '';
				// Add a class to the form input's <label> tag.
				$args['label_class'] = array( 'custom-control custom-checkbox' );
				$args['input_class'] = array( 'custom-control-input' );
				break;
			case 'radio':
				$args['label_class'] = array( 'custom-control custom-radio' );
				$args['input_class'] = array( 'custom-control-input' );
				break;
			default:
				$args['class'][]     = 'form-group';
				$args['input_class'] = array( 'form-control' );
				break;
		} // End of switch ( $args ).

		return $args;
	}

}
if ( ! function_exists( 'somnowell_quantity_input_classes' ) ) {

	/**
	 * Add Bootstrap class to quantity input field.
	 *
	 * @param array $classes Array of quantity input classes.
	 *
	 * @return array
	 */
	function somnowell_quantity_input_classes( $classes ) {
		$classes[] = 'form-control';

		return $classes;
	}

}

function disable_woo_commerce_sidebar() {
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
}

add_action( 'init', 'disable_woo_commerce_sidebar' );

/* Shop Page */

add_filter( 'woocommerce_before_main_content', 'remove_breadcrumbs' );

function remove_breadcrumbs() {
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10, 2 );
remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10, 2 );

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

add_action( 'after_setup_theme', 'my_remove_product_result_count', 99 );
function my_remove_product_result_count() {
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
	remove_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count', 20 );
}

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

function somnowell_excerpt_in_product_archives() {
	echo '<div class="excerpt">';
	the_excerpt();
	echo '</div>';
}

add_action( 'woocommerce_after_shop_loop_item_title', 'somnowell_excerpt_in_product_archives', 5 );

function somnowell_price_btn_wrp_start() {
	echo '<div class="row justify-content-between align-items-center"><div class="col-sm-auto">';
}

add_action( 'woocommerce_after_shop_loop_item_title', 'somnowell_price_btn_wrp_start', 5 );

function somnowell_price_btn_wrp_center() {

	echo '</div><div class="col-sm-auto">';
}

add_action( 'woocommerce_after_shop_loop_item_title', 'somnowell_price_btn_wrp_center', 15 );

function somnowell_price_btn_wrp_end() {
	echo '</div></div>';
}

add_action( 'woocommerce_after_shop_loop_item', 'somnowell_price_btn_wrp_end', 20 );

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_open', 5 );
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 20 );
add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_link_open', 5 );
add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 15 );

add_filter( 'default_checkout_billing_country', 'change_default_checkout_country' );

function change_default_checkout_country() {
	return 'GB'; // country code
}
