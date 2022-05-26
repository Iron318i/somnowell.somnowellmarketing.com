<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
    <div id="content" tabindex="-1">
        <div class="container pt-1 pb-3">
            <div class="row wrapper flex-md-row-reverse">
                <div class="col-auto main-content">
					<?php
					the_archive_title( '<h1 class="text-info text-uppercase">', '</h1>' );
					the_archive_description( '<div class="fsz-24 mb-2">', '</div>' );
					?>
                    <div class="articles">
						<?php
						if ( have_posts() ) {
							// Start the Loop.
							while ( have_posts() ) {
								the_post();
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'loop-templates/content' );
							}
						}
						?>
                    </div>
                    <!-- The pagination component -->
					<?php somnowell_pagination(); ?>
                </div>
                <div class="col-auto sidebar">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'blog',
							'menu_class'     => 'nav flex-column mb-lg-3',
						)
					);
					get_template_part( 'template-parts/sidebar', 'call' );
					get_template_part( 'template-parts/sidebar', 'practioner' );
					?>
                </div>
            </div>
        </div>

    </div><!-- #content -->
<?php get_footer(); ?>