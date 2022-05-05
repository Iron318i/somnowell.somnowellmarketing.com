<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> <?php somnowell_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-auto links">
                <a href="tel:+44(0)2081230432" class="i-phone">&nbsp;<span>+44 (0) 20 8123 0432</span></a>
                <a href="mailto:info@somnowell.com" class="i-email">&nbsp;<span>info@somnowell.com</span></a>
            </div>
            <div class="col-auto">
                <div class="dropdown">
                    <a class=" dropdown-toggle" href="#" role="button" id="dropdownLocations" data-bs-toggle="dropdown" aria-expanded="false">International</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://www.somnowell.com/somnowell-practitioners-australia">Australia</a></li>
                        <li><a class="dropdown-item" href="https://www.somnowell.com/somnowell-practitioners-belgium">Belgium</a></li>
                        <li><a class="dropdown-item" href="https://www.somnowell.com/somnowell-practitioners-brazil">Brazil</a></li>
                        <li><a class="dropdown-item" href="https://www.somnowell.com/somnowell-practitioners-channel-islands">Channel Islands</a></li>
                        <li><a class="dropdown-item" href="https://www.somnowell.com/somnowell-practitioners-germany">Germany</a></li>
                        <li><a class="dropdown-item" href="https://www.somnowell.com/somnowell-practitioners-ireland">Ireland</a></li>
                        <li><a class="dropdown-item" href="https://www.somnowell.com/somnowell-practitioners-isle-man">Isle of Man</a></li>
                        <li><a class="dropdown-item" href="https://www.somnowell.com/somnowell-practitioners-israel">Israel</a></li>
                        <li><a class="dropdown-item" href="https://www.somnowell.com/somnowell-practitioners-italy">Italy</a></li>
                        <li><a class="dropdown-item" href="https://www.somnowell.com/somnowell-practitioners-malaysia">Malaysia</a></li>
                        <li><a class="dropdown-item" href="https://www.somnowell.com/somnowell-practitioners-new-zealand">New Zealand</a></li>
                        <li><a class="dropdown-item" href="https://www.somnowell.com/somnowell-practitioners-switzerland">Switzerland</a></li>
                        <li><a class="dropdown-item" href="https://www.somnowell.com/somnowell-practitioners-thailand">Thailand</a></li>
                        <li><a class="dropdown-item" href="https://www.somnowell.com">United Kingdom</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="site-header">
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <div class="logo-link">
                <a href="<?php echo site_url() ?>" rel="home" class="main-logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/main-logo.png" alt="<?php bloginfo( 'name' ); ?>">
                </a>
            </div>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="toggle-icon"><i></i><i></i><i></i><i></i></span>
                <span class="toggle-text">Menu</span>
            </button>
            <div id="navbarNavDropdown" class="collapse navbar-collapse">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => 'false',
						'menu_class'     => 'navbar-nav main',
						'fallback_cb'    => '',
						'menu_id'        => 'main-menu',
						'walker'         => new somnowell_WP_Bootstrap_Navwalker(),
					)
				);
				?>
            </div>
        </div>
    </nav>
</header>