<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<article <?php post_class( 'post-card' ); ?> id="post-<?php the_ID(); ?>">
    <div class="row">
		<?php
		$image_url = get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
		if ( ! $image_url ) {
			preg_match( '/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $post->post_content, $image );
			if ( ! empty( $image['src'] ) ) {
				$image_url = $image['src'];
			} else {
				$image_url = site_url() . '/wp-content/uploads/2022/05/somnowell_logo_main-480x331.jpg';
			}
		}
		?>
        <div class="col-sm-4">
            <a href="<?php echo get_permalink() ?>" class="img-link">
                <img src="<?php echo $image_url ?>" alt="<?php the_title() ?>">
            </a>
        </div>
        <div class="col-sm-8">
			<?php
			the_title(
				sprintf( '<h2 class="h4"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>'
			);
			?>
            <div class="excerpt">
				<?php the_excerpt(); ?>
            </div>
        </div>
    </div>
</article><!-- #post-## -->
