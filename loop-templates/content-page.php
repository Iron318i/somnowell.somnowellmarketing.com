<?php
/**
 * Partial template for content in page.php
 *
 * @package Mr-Prime
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<div class="container pt-1 pb-3">
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <div class="row wrapper">
            <div class="col-auto sidebar">
				<?php
				get_template_part( 'template-parts/sidebar', 'menu' );
				$sidebar_banners = fw_get_db_post_option( get_the_ID(), 'banners' );
				var_dump( $sidebar_banners );
				if ( isset( $sidebar_banners["avards"] ) ) {
					get_template_part( 'template-parts/sidebar', 'awards' );
				}
				if ( isset( $sidebar_banners["schedule-call"] ) ) {
					get_template_part( 'template-parts/sidebar', 'call' );
				}
				?>
            </div>
            <div class="col-auto main-content">
                <div class="entry-content">
					<?php the_content(); ?>
                </div><!-- .entry-content -->
                <footer class="entry-footer">
					<?php edit_post_link( __( 'Edit', 'mrprime' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-footer -->
            </div>
        </div>
    </article><!-- #post-## -->
</div>