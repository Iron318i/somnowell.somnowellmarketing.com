<?php
/**
 * Single post partial template
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<article <?php post_class('post-owl card h-100'); ?> id="post-<?php the_ID(); ?>">
    <?php echo get_the_post_thumbnail($post->ID, 'post-owl', array('class' => 'card-img-top')); ?>
    <div class="card-body">
        <div class="date"><?php echo get_the_date() ?></div>
        <h4><a href="<?php the_permalink(); ?>" class="stretched-link"><?php the_title() ?></a></h4>
    </div>
</article>
