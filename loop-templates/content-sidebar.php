<?php
/**
 * Single post partial template
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<article <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
    <div class="row gx-1">
        <div class="col-4">
            <a href="<?php the_title() ?>"><?php echo get_the_post_thumbnail($post->ID, 'post-small'); ?></a>
        </div>
        <div class="col-8">
            <h3><a href="<?php the_title() ?>"><?php the_title() ?></a></h3>
            <ul class="entry-meta nav">
                <li class="date"><?php echo get_the_date() ?></li>
                <li class="author"><?php echo get_the_author(); ?></li>
            </ul>
        </div>
    </div>
</article>
