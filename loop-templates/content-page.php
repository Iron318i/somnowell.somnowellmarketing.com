<?php
/**
 * Partial template for content in page.php
 *
 * @package Mr-Prime
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<div class="container pt-1 pb-3" id="post-<?php the_ID(); ?>">
    <div class="row wrapper flex-md-row-reverse">
        <div class="col-auto main-content">
            <div class="entry-content">

				<?php
				if ( fw_get_db_post_option( get_the_ID(), 'page_id' ) ) {
					$content_page_ID = fw_get_db_post_option( $post->ID, 'page_id' )[0];
					echo "<pre>" . htmlentities( get_post_field( 'post_content', $content_page_ID ) ) . "</pre>";
					echo '<hr>';
					echo get_post_field( 'post_content', $content_page_ID );
				} else {
					the_content();
				}
				?>
            </div>
            <footer class="entry-footer">
				<?php edit_post_link( __( 'Edit', 'somnowell' ), '<span class="edit-link">', '</span>' ); ?>
            </footer>
        </div>
        <div class="col-auto sidebar">
			<?php
			get_template_part( 'template-parts/sidebar', 'menu' );
			$sidebar_banners = fw_get_db_post_option( get_the_ID(), 'banners' );
			if ( isset( $sidebar_banners["avards"] ) ) {
				get_template_part( 'template-parts/sidebar', 'awards' );
			}
			if ( isset( $sidebar_banners["schedule-call"] ) ) {
				get_template_part( 'template-parts/sidebar', 'call' );
			}
			if ( isset( $sidebar_banners["take-test"] ) ) {
				get_template_part( 'template-parts/sidebar', 'test' );
			}
			if ( isset( $sidebar_banners["find-practioner"] ) ) {
				get_template_part( 'template-parts/sidebar', 'practioner' );
			}
			?>
        </div>
    </div>
</div>