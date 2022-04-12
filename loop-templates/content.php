<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php post_class('card'); ?> id="post-<?php the_ID(); ?>">
    <a href="<?php echo get_permalink() ?>">
        <?php echo get_the_post_thumbnail($post->ID, 'thumbnail', array('class' => 'card-img-top')); ?>
    </a>
    <div class="card-body">
        <?php
        the_title(
            sprintf('<h2 class="card-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'
        );
        ?>
        <?php if ('post' === get_post_type()) : ?>
            <ul class="entry-meta nav">
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
        <?php endif; ?>
        <div class="excerpt">
            <?php the_excerpt(); ?>
        </div>
        <p><a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a></p>
        <?php
        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . __('Pages:', 'somnowell'),
                'after' => '</div>',
            )
        );
        ?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
