<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<article <?php post_class( '' ); ?> id="post-<?php the_ID(); ?>">
	<?php
	if ( has_post_thumbnail() ) {
		?>
        <a href="<?php echo get_permalink() ?>">
			<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => '' ) ); ?>
        </a>
		<?php
	} else {
	}
	?>
	<?php
	the_title(
		sprintf( '<h2 class="h4"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>'
	);
	?>
    <div class="excerpt">
		<?php the_excerpt(); ?>
    </div>
	<?php
	wp_link_pages(
		array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'somnowell' ),
			'after'  => '</div>',
		)
	);
	?>
</article><!-- #post-## -->
