<?php
/**
 * Single post partial template
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <?php the_post_thumbnail('page-header-large'); ?>
    <div class="entry-content">
        <?php the_title('<h1 class="entry-title h2">', '</h1>'); ?>
        <ul class="entry-meta nav mb-1">
            <li class="date"><?php echo get_the_date() ?></li>
            <li class="author"><?php echo get_the_author(); ?></li>
            <li class="cat"><?php
                $post_categories = wp_get_post_categories($post->ID);
                $cats = array();

                foreach ($post_categories as $c) {
                    if ($c != 1) {
                        echo ' ,';
                    }
                    $cat = get_category($c);
                    echo $cat->name;
                }
                ?></li>
        </ul>
        <div class="content">
            <?php
            the_content();
            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . __('Pages:', 'somnowell'),
                    'after' => '</div>',
                )
            );
            ?>
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
