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
            <div class="col-lg-4 order-lg-1 col-brochure">
                <div class="row align-items-center">
                    <div class="col-6 col-lg-12">
                        <h4 class="widget-title">Brochure</h4>
                        <div class="text">
                            <p>Here is an easy way to quickly learn everything you need to know about the Somnowel</p>
                        </div>
                        <div class="btn-wrp">
                            <a href="<?php echo wp_get_attachment_url( 60 ) ?>" target="_blank" class="btn btn-outline-info">Download Now</a>
                        </div>
                    </div>
                    <div class="col-6 col-lg-12 brochure-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/brochure-bg.png" alt="Brochure">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 order-lg-0">
                <div class="row justify-content-between">
                    <div class="col-6 col-sm-auto order-sm-1">
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
                    <div class="col-6 col-sm-auto order-sm-2">
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
                    <div class="col-12 order-sm-3">
                        <h4 class="widget-title hide-sm-up mt-1">LINKS</h4>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'copyright',
								'menu_class'     => 'nav',
								'menu_id'        => 'footer-info',
							)
						);
						?>
                        <div class="copyright hide-sm-down"> © 2018-<?php echo date( "Y" ); ?> Somnowell. All Rights Reserved</div>
                    </div>
                    <div class="col-sm-4 order-sm-0 col-logo">
                        <a href="<?php echo site_url() ?>" rel="home" class="footer-logo">
                            <img src="<?php echo get_template_directory_uri() ?>/img/footer-logo.png" alt="<?php bloginfo( 'name' ); ?>">
                        </a>
                        <ul class="nav social">
                            <li>
                                <a href="https://www.facebook.com/pages/Somnowell/140209009364620" target="_blank">
                                    <svg class="icon">
                                        <use xlink:href="#facebook-icon"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/somnowell" target="_blank">
                                    <svg class="icon">
                                        <use xlink:href="#linkdin-icon"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/somnowell" target="_blank">
                                    <svg class="icon">
                                        <use xlink:href="#twitter-icon"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.google.com/+Somnowell" target="_blank">
                                    <svg class="icon">
                                        <use xlink:href="#google-icon"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <div class="copyright hide-sm-up mt-1"> © 2018-<?php echo date( "Y" ); ?> Somnowell. All Rights Reserved</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part( 'template-parts/svg-sprite' ) ?>
<?php wp_footer(); ?>
<?php if ( 'practioner' == get_post_type() ) {
	?>
    <script>
        +function ($) {
            $(document).ready(function () {
                $('.wpcf7-submit').val('Send Message to <?php echo str_replace( '&#8217;', "\'", get_the_title() ); ?>');
                $('#recipientEmail').val('<?php echo fw_get_db_post_option( $post->ID, 'recipient_email' ) ?>');
                $('#practionerName').val('<?php the_title(); ?>');
            });
        }(jQuery);
    </script>
<?php } ?>
<?php if ( is_page( 5012 ) ) {
	$dr_name = '';
	if ( isset( $_GET['dr'] ) ) {
		$dr_name = $_GET['dr'];
	}
	?>
    <script>
        +function ($) {
            $(document).ready(function () {
                $('#practionerName').val('<?php echo $dr_name; ?>');
            });
        }(jQuery);
    </script>
<?php } ?>
<?php echo fw_get_db_settings_option( 'before_body' ) ?>
</body>
</html>
