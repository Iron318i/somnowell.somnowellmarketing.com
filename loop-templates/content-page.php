<?php
/**
 * Partial template for content in page.php
 *
 * @package Mr-Prime
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="container py-3">
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
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