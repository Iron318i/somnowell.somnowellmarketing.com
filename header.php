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
        <!-- Calendly badge widget begin -->
        <link href="https://calendly.com/assets/external/widget.css" rel="stylesheet">
        <script src="https://calendly.com/assets/external/widget.js"></script>
        <script>Calendly.initBadgeWidget({url: 'https://calendly.com/lucie-ash/20min', text: 'Schedule time with me', color: '#00a2ff', branding: true});</script>
        <!-- Calendly badge widget end -->
    </head>
<body <?php body_class(); ?> <?php somnowell_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<?php if ( get_page_template_slug() !== "page-templates/landing-page.php" ): ?>
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
                            <li><a class="dropdown-item" href="<?php the_permalink( 5107 ); ?>">Australia</a></li>
                            <li><a class="dropdown-item" href="<?php the_permalink( 5103 ); ?>">Belgium</a></li>
                            <li><a class="dropdown-item" href="<?php the_permalink( 5099 ); ?>">Brazil</a></li>
                            <li><a class="dropdown-item" href="<?php the_permalink( 5095 ); ?>">Channel Islands</a></li>
                            <li><a class="dropdown-item" href="<?php the_permalink( 5091 ); ?>">Germany</a></li>
                            <li><a class="dropdown-item" href="<?php the_permalink( 5048 ); ?>">Ireland</a></li>
                            <li><a class="dropdown-item" href="<?php the_permalink( 5044 ); ?>">Isle of Man</a></li>
                            <li><a class="dropdown-item" href="<?php the_permalink( 5039 ); ?>">Israel</a></li>
                            <li><a class="dropdown-item" href="<?php the_permalink( 5035 ); ?>">Italy</a></li>
                            <li><a class="dropdown-item" href="<?php the_permalink( 5031 ); ?>">Malaysia</a></li>
                            <li><a class="dropdown-item" href="<?php the_permalink( 5027 ); ?>">New Zealand</a></li>
                            <li><a class="dropdown-item" href="<?php the_permalink( 5020 ); ?>">Switzerland</a></li>
                            <li><a class="dropdown-item" href="<?php the_permalink( 5016 ); ?>">Thailand</a></li>
                            <li><a class="dropdown-item" href="<?php the_permalink( 5133 ); ?>">United Kingdom</a></li>
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
                    <button class="close-mobile-menu collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <svg class="icon">
                            <use xlink:href="#close"></use>
                        </svg>
                    </button>
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
<?php endif; ?>