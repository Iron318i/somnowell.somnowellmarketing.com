<?php
/**
 * Sidebar Menu
 *
 * @package somnowell-theme
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$theme_location = "contact";
switch ( get_page_template_slug() ) {
	case 'page-templates/somnowell-range.php':
		$theme_location = "somnowell-range";
		break;
	case 'page-templates/for-petients.php':
		$theme_location = "for-patients";
		break;
	case 'page-templates/for-practitioners.php':
		$theme_location = "for-practitioners";
		break;
	case 'page-templates/footer-info.php':
		$theme_location = "copyright";
		break;
	case 'page-templates/contact.php':
		$theme_location = "contact";
		break;
	case 'page-templates/about-us.php':
		$theme_location = "about-us";
		break;
	case 'page-templates/portal.php':
		$theme_location = "portal";
		break;
	case 'page-templates/partner-area.php':
		$theme_location = "partner-area";
		break;

};
wp_nav_menu(
	array(
		'theme_location' => $theme_location,
		'menu_class'     => 'nav flex-column mb-lg-3',
	)
);

