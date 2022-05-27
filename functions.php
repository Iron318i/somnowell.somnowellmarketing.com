<?php

/**
 * somnowell functions and definitions
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$somnowell_includes = array(
	'/theme-settings.php', // Initialize theme default settings.
	'/setup.php', // Theme setup and custom theme supports.
	'/enqueue.php', // Enqueue scripts and styles.
	'/template-tags.php', // Custom template tags for this theme.
	'/pagination.php', // Custom pagination for this theme.
	'/hooks.php', // Custom hooks.
	'/extras.php', // Custom functions that act independently of the theme templates.
	'/class-wp-bootstrap-navwalker.php', // Load custom WordPress nav walker.
	'/editor.php', // Load Editor functions.
	'/disable-comments.php',
	'/widgets.php',
	'/cpt.php',
);

foreach ( $somnowell_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}
