<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row ">
                    <div class="col-4 text-center">
                        <a href="<?php echo site_url() ?>" rel="home" class="footer-logo">
                            <img src="<?php echo get_template_directory_uri() ?>/img/footer-logo.png" alt="<?php bloginfo( 'name' ); ?>">
                        </a>
                    </div>
                    <div class="col-4">
                        <h4 class="widget-title">Patients</h4>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-1',
								'menu_class'     => 'nav flex-column',
								'menu_id'        => 'footer-1',
							)
						);
						?>
                    </div>
                    <div class="col-4">
                        <h4 class="widget-title">Practitioners</h4>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-2',
								'menu_class'     => 'nav flex-column',
								'menu_id'        => 'footer-2',
							)
						);
						?>
                    </div>
                    <div class="col-12">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'copyright',
								'menu_class'     => 'nav',
								'menu_id'        => 'footer-info',
							)
						);
						?>
                        <div class="copyright"> © 2018-<?php echo date( "Y" ); ?> Somnowell. All Rights Reserved</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h4 class="widget-title">Brochure</h4>
                <div class="text">Here is an easy way to quickly learn everything you need to know about the Somnowel</div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part( 'template-parts/svg-sprite' ) ?>
<?php wp_footer(); ?>
<?php echo fw_get_db_settings_option( 'before_body' ) ?>
</body>
</html>