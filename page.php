<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Mr-Prime
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<?php endif; ?>
    <div id="content" tabindex="-1">
        <?php
        while (have_posts()) {
            the_post();

            if (fw_ext_page_builder_is_builder_post(get_the_ID())) {
                the_content();
            } else {
                get_template_part('loop-templates/content', 'page');
            }
        }
        ?>
    </div><!-- #content -->
<?php
get_footer();
