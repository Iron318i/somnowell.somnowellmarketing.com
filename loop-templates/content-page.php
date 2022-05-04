<?php
/**
 * Partial template for content in page.php
 *
 * @package Mr-Prime
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( fw_ext_page_builder_is_builder_post( get_the_ID() ) ) {
	the_content();
} else {
	?>
    <div class="container py-3">
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <div class="row wrapper">
                <div class="col-auto sidebar">
					<?php
					var_dump( get_page_template_slug() );
					switch ( get_page_template_slug() ) {
						case 'page-templates/somnowell-range.php':
							$theme_location = "somnowell-range";
							break;
						case 1:
							echo "i равно 1";
							break;
						case 2:
							echo "i равно 2";
							break;
					};
					wp_nav_menu(
						array(
							'theme_location' => $theme_location,
							'menu_class'     => 'nav',
						)
					);
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
	<?php
}