<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$img_id = get_option('page_for_posts');;

?>
    <div class="page-header">
        <div class="img-wrp">
            <picture>
                <source media="(min-width:768px)" srcset="<?php echo get_the_post_thumbnail_url($img_id, 'page-header-large') ?>">
                <img src="<?php echo get_the_post_thumbnail_url($img_id, 'page-header-md') ?>" alt="<?php the_title() ?>">
            </picture>
        </div>
        <div class="container">
            <div class="h1"><?php echo get_the_title($img_id) ?></div>
        </div>
    </div>
    <div class="container py-3">
        <div class="row justify-content-between">
            <div class="col-lg-8 main-content">
                <?php
                if (have_posts()) {
                    // Start the Loop.
                    while (have_posts()) {
                        the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part('loop-templates/content', get_post_format());
                    }
                }
                ?>
                <!-- The pagination component -->
                <?php somnowell_pagination(); ?>
            </div>
            <div class="col-lg-4 sidebar">
                <?php if (is_active_sidebar('main-sidebar')) : ?>
                    <?php dynamic_sidebar('main-sidebar'); ?>
                <?php endif; ?>
                <div class="widget">
                    <h3 class="widget-title">Latest News</h3>
                    <?php
                    $args = array(
                        'posts_per_page' => 3,
                        'post_type' => 'post',
                    );

                    $query = new WP_Query($args);

                    // Цикл
                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post();
                            get_template_part('loop-templates/content-sidebar');
                        endwhile;
                        ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
