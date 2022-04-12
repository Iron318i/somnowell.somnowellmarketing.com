<?php
/**
 * The template for displaying all single posts
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$img_id = get_option('page_for_posts');
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
        <?php
        while (have_posts()) {
            the_post();
            get_template_part('loop-templates/content', 'single');
        }
        ?>
    </div>
    <div class="latest-news py-3">
        <div class="container">
            <div class="text-center">
                <div class="fw-heading fw-heading-h2 mb-3">
                    <h2 class="fw-special-title h1"><?php _ex('Latest News', 'somnowell') ?></h2>
                </div>
            </div>
            <div class="owl-carousel owl-theme">
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'post_type' => 'post',
                    'post__not_in' => array($post->ID)
                );
                $query = new WP_Query($args);
                // Цикл
                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                        get_template_part('loop-templates/content-owl');
                    endwhile;
                    ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
<?php
get_footer();
