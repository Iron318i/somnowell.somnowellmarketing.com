<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_filter( 'body_class', 'somnowell_body_classes' );

if ( ! function_exists( 'somnowell_body_classes' ) ) {

	/**
	 * Adds custom classes to the array of body classes.
	 *
	 * @param array $classes Classes for the body element.
	 *
	 * @return array
	 */
	function somnowell_body_classes( $classes ) {
		// Adds a class of group-blog to blogs with more than 1 published author.
		if ( is_multi_author() ) {
			$classes[] = 'group-blog';
		}
		// Adds a class of hfeed to non-singular pages.
		if ( ! is_singular() ) {
			$classes[] = 'hfeed';
		}

		return $classes;
	}

}

// Removes tag class from the body_class array to avoid Bootstrap markup styling issues.
add_filter( 'body_class', 'somnowell_adjust_body_class' );

if ( ! function_exists( 'somnowell_adjust_body_class' ) ) {

	/**
	 * Setup body classes.
	 *
	 * @param string $classes CSS classes.
	 *
	 * @return mixed
	 */
	function somnowell_adjust_body_class( $classes ) {

		foreach ( $classes as $key => $value ) {
			if ( 'tag' === $value ) {
				unset( $classes[ $key ] );
			}
		}

		return $classes;
	}

}

if ( ! function_exists( 'somnowell_post_nav' ) ) {

	/**
	 * Display navigation to next/previous post when applicable.
	 */
	function somnowell_post_nav() {
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous ) {
			return;
		}
		?>
        <nav class="container navigation post-navigation">
            <h2 class="sr-only"><?php esc_html_e( 'Post navigation', 'somnowell' ); ?></h2>
            <div class="row nav-links justify-content-between">
				<?php
				if ( get_previous_post_link() ) {
					previous_post_link( '<span class="nav-previous">%link</span>', _x( '<i class="fa fa-angle-left"></i>&nbsp;%title', 'Previous post link', 'somnowell' ) );
				}
				if ( get_next_post_link() ) {
					next_post_link( '<span class="nav-next">%link</span>', _x( '%title&nbsp;<i class="fa fa-angle-right"></i>', 'Next post link', 'somnowell' ) );
				}
				?>
            </div><!-- .nav-links -->
        </nav><!-- .navigation -->
		<?php
	}

}

if ( ! function_exists( 'somnowell_pingback' ) ) {

	/**
	 * Add a pingback url auto-discovery header for single posts of any post type.
	 */
	function somnowell_pingback() {
		if ( is_singular() && pings_open() ) {
			echo '<link rel="pingback" href="' . esc_url( get_bloginfo( 'pingback_url' ) ) . '">' . "\n";
		}
	}

}
add_action( 'wp_head', 'somnowell_pingback' );

if ( ! function_exists( 'somnowell_mobile_web_app_meta' ) ) {

	/**
	 * Add mobile-web-app meta.
	 */
	function somnowell_mobile_web_app_meta() {
		echo '<meta name="mobile-web-app-capable" content="yes">' . "\n";
		echo '<meta name="apple-mobile-web-app-capable" content="yes">' . "\n";
		echo '<meta name="apple-mobile-web-app-title" content="' . esc_attr( get_bloginfo( 'name' ) ) . ' - ' . esc_attr( get_bloginfo( 'description' ) ) . '">' . "\n";
	}

}
add_action( 'wp_head', 'somnowell_mobile_web_app_meta' );

if ( ! function_exists( 'somnowell_default_body_attributes' ) ) {

	/**
	 * Adds schema markup to the body element.
	 *
	 * @param array $atts An associative array of attributes.
	 *
	 * @return array
	 */
	function somnowell_default_body_attributes( $atts ) {
		$atts['itemscope'] = '';
		$atts['itemtype']  = 'http://schema.org/WebSite';

		return $atts;
	}

}
add_filter( 'somnowell_body_attributes', 'somnowell_default_body_attributes' );

// Escapes all occurances of 'the_archive_description'.
add_filter( 'get_the_archive_description', 'somnowell_escape_the_archive_description' );

if ( ! function_exists( 'somnowell_escape_the_archive_description' ) ) {

	/**
	 * Escapes the description for an author or post type archive.
	 *
	 * @param string $description Archive description.
	 *
	 * @return string Maybe escaped $description.
	 */
	function somnowell_escape_the_archive_description( $description ) {
		if ( is_author() || is_post_type_archive() ) {
			return wp_kses_post( $description );
		} else {
			/*
			 * All other descriptions are retrieved via term_description() which returns
			 * a sanitized description.
			 */
			return $description;
		}
	}

} // End of if function_exists( 'somnowell_escape_the_archive_description' ).
// Escapes all occurances of 'the_title()' and 'get_the_title()'.
add_filter( 'the_title', 'somnowell_kses_title' );

// Escapes all occurances of 'the_archive_title' and 'get_the_archive_title()'.
add_filter( 'get_the_archive_title', 'somnowell_kses_title' );

if ( ! function_exists( 'somnowell_kses_title' ) ) {

	/**
	 * Sanitizes data for allowed HTML tags for post title.
	 *
	 * @param string $data Post title to filter.
	 *
	 * @return string Filtered post title with allowed HTML tags and attributes intact.
	 */
	function somnowell_kses_title( $data ) {
		// Tags not supported in HTML5 are not allowed.
		$allowed_tags = array(
			'abbr'             => array(),
			'aria-describedby' => true,
			'aria-details'     => true,
			'aria-label'       => true,
			'aria-labelledby'  => true,
			'aria-hidden'      => true,
			'b'                => array(),
			'bdo'              => array(
				'dir' => true,
			),
			'blockquote'       => array(
				'cite'     => true,
				'lang'     => true,
				'xml:lang' => true,
			),
			'cite'             => array(
				'dir'  => true,
				'lang' => true,
			),
			'dfn'              => array(),
			'em'               => array(),
			'i'                => array(
				'aria-describedby' => true,
				'aria-details'     => true,
				'aria-label'       => true,
				'aria-labelledby'  => true,
				'aria-hidden'      => true,
				'class'            => true,
			),
			'code'             => array(),
			'del'              => array(
				'datetime' => true,
			),
			'ins'              => array(
				'datetime' => true,
				'cite'     => true,
			),
			'kbd'              => array(),
			'mark'             => array(),
			'pre'              => array(
				'width' => true,
			),
			'q'                => array(
				'cite' => true,
			),
			's'                => array(),
			'samp'             => array(),
			'span'             => array(
				'dir'      => true,
				'align'    => true,
				'lang'     => true,
				'xml:lang' => true,
			),
			'small'            => array(),
			'strong'           => array(),
			'sub'              => array(),
			'sup'              => array(),
			'u'                => array(),
			'var'              => array(),
		);
		$allowed_tags = apply_filters( 'somnowell_kses_title', $allowed_tags );

		return wp_kses( $data, $allowed_tags );
	}

} // End of if function_exists( 'somnowell_kses_title' ).

if ( ! function_exists( 'load_custom_wp_admin_style' ) ) {

	function load_custom_wp_admin_style() {
		wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0' );
		wp_enqueue_style( 'custom_wp_admin_css' );
	}

} // End of if function_exists( 'load_custom_wp_admin_style' ).

// Fully Disable Gutenberg editor.
add_filter( 'use_block_editor_for_post_type', '__return_false', 10 );
// Don't load Gutenberg-related stylesheets.
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );

function remove_block_css() {
	wp_dequeue_style( 'wp-block-library' ); // WordPress core
	wp_dequeue_style( 'wp-block-library-theme' ); // WordPress core
	wp_dequeue_style( 'wc-block-style' ); // WooCommerce
	wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme
}

/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}

add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

add_filter( 'wpseo_breadcrumb_separator', function ( $separator ) {
	return '<span class="breadcrumb-separator">' . $separator . '</span>';
} );

function shortcode_permalinks( $atts ) {

	extract( shortcode_atts(
			array(
				'id'     => 0,
				'anchor' => 0,
			), $atts )
	);

	if ( $id ):
		$url = ( ! empty( $params ) ? get_permalink( $id ) . '?' . $params : get_permalink( $id ) );
	endif;
	if ( $anchor ):
		$url .= '#' . $anchor;
	endif;

	return $url;
}

add_shortcode( 'permalink', 'shortcode_permalinks' );

function tg_remove_empty_paragraph_tags_from_shortcodes_wordpress( $content ) {
	$toFix = array(
		'<p>['    => '[',
		']</p>'   => ']',
		']<br />' => ']'
	);

	return strtr( $content, $toFix );
}

add_filter( 'the_content', 'tg_remove_empty_paragraph_tags_from_shortcodes_wordpress' );

function catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output    = preg_match_all( '/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches );
	$first_img = $matches[1][0];

	if ( empty( $first_img ) ) {
		$first_img = "/path/to/default.png";
	}

	return $first_img;
}

add_filter( 'get_the_archive_title', function ( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_tax() ) { //for custom post types
		$title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	}

	return $title;
} );
