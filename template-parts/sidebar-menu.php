<?php
/**
 * Sidebar Menu
 *
 * @package somnowell-theme
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
switch ( get_page_template_slug() ) {
	case 'page-templates/somnowell-range.php':
		$theme_location = "somnowell-range";
		break;
	case 'page-templates/for-practitioners.php':
		$theme_location = "for-practitioners";
		break;
	case 'page-templates/footer-info.php':
		$theme_location = "copyright";
		break;
	case 2:
		echo "i равно 2";
		break;
};
wp_nav_menu(
	array(
		'theme_location' => $theme_location,
		'menu_class'     => 'nav flex-column mb-lg-3',
	)
);

