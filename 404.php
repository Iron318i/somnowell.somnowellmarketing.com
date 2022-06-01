<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$img_id = get_option( 'page_for_posts' );
?>
    <div class="container py-5" id="content" tabindex="-1">
        <section class="error-404 not-found py-5">
            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'somnowell' ); ?></h1>
            <p><?php esc_html_e( 'It looks like nothing was found at this location. ', 'somnowell' ); ?></p>
        </section><!-- .error-404 -->
    </div><!-- #content -->
<?php
get_footer();
