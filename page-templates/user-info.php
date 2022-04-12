<?php
/*
  Template Name: User Info
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
			get_template_part( 'loop-templates/content', 'page' );
		}
	}
	?>
</div><!-- #content -->
<?php get_footer(); ?>
