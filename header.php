<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> <?php somnowell_body_attributes(); ?>>
<?php do_action('wp_body_open'); ?>
<header class="site-header">
    <?php if (is_front_page()) { ?>
    <nav class="navbar navbar-expand-sm navbar-light">
        <?php } else { ?>
        <nav class="navbar navbar-expand-md navbar-dark">
            <?php } ?>
            <div class="container">
                <div class="logo-link">
                    <a href="<?php echo site_url() ?>" rel="home" class="main-logo">
                        <img src="<?php echo get_template_directory_uri() ?>/img/mainlogo.svg" alt="<?php bloginfo('name'); ?>">
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
                            'container' => 'false',
                            'menu_class' => 'navbar-nav main',
                            'fallback_cb' => '',
                            'menu_id' => 'main-menu',
                            'walker' => new somnowell_WP_Bootstrap_Navwalker(),
                        )
                    );
                    ?>
                </div>
            </div>
        </nav>
</header>