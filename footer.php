<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-auto order-lg-1">
                <?php if (is_active_sidebar('footer-1')) : ?>
                    <?php dynamic_sidebar('footer-1'); ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-6 col-lg-auto order-lg-2">
                <?php if (is_active_sidebar('footer-2')) : ?>
                    <?php dynamic_sidebar('footer-2'); ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-6 col-lg-auto order-lg-0">
                <a href="<?php echo site_url() ?>" rel="home" class="footer-logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/footer-logo.svg" alt="<?php bloginfo('name'); ?>">
                </a>
                <ul class="contacts">
                    <?php if (fw_get_db_settings_option('address')) { ?>
                        <li class="address"><?php echo fw_get_db_settings_option('address') ?></li>
                    <?php } ?>
                    <?php if (fw_get_db_settings_option('phone')) { ?>
                        <li class="phone"><a href="tel:<?php echo fw_get_db_settings_option('phone') ?>"><?php echo fw_get_db_settings_option('phone') ?></a></li>
                    <?php } ?>
                    <?php if (fw_get_db_settings_option('email')) { ?>
                        <li class="email"><a href="mailto:<?php echo fw_get_db_settings_option('email') ?>"><?php echo fw_get_db_settings_option('email') ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-auto order-lg-3 contact-us">
                <?php if (is_active_sidebar('footer-3')) : ?>
                    <?php dynamic_sidebar('footer-3'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="copyright">
    <div class="container">© 2017-<?php echo date("Y"); ?> All Rights Reserved, Somnowell</div>
</div>
<?php get_template_part('template-parts/svg-sprite') ?>
<?php wp_footer(); ?>
<?php echo fw_get_db_settings_option('before_body') ?>
</body>
</html>
