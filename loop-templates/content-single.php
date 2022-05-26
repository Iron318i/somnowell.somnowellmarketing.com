<?php
/**
 * Single post partial template
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php the_title( '<h1 class="text-info text-uppercase">', '</h1>' ); ?>
    <ul class="entry-meta small nav mb-1">
        <li class="cat">Posted in <?php
			$post_categories = wp_get_post_categories( $post->ID );

			foreach ( $post_categories as $key => $c ) {
				if ( $key != 0 ) {
					echo ' ,';
				}
				$cat = get_category( $c );
				echo $cat->name;
			}
			?></li>
        <li class="author">&nbsp;By <?php echo get_the_author(); ?></li>
    </ul>
    <div class="entry-content">
        <div class="content">
			<?php
			$post_content = $post->post_content;
			$posmore      = stripos( $post_content, '<!--more-->' );
			if ( $posmore ) {
				$post_content = stristr( $post_content, '<!--more-->' );
				$post_content = str_replace( '<!--more-->', '', $post_content );
			}
			echo wpautop( $post_content );
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'somnowell' ),
					'after'  => '</div>',
				)
			);
			?>
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
