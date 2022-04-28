<?php
/*
  Template Name: Somnowell Range
  Template Post Type: page
 */
get_header();
?>
<div id="content" tabindex="-1">
	<?php
	while ( have_posts() ) {
		the_post();

		if ( fw_ext_page_builder_is_builder_post( get_the_ID() ) ) {
			the_content();
		} else {
			?>
            <div class="container py-3">
                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <div class="row wrapper">
                        <div class="col-auto sidebar">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'somnowell-range',
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
	}
	?>
</div><!-- #content -->
<?php get_footer(); ?>
