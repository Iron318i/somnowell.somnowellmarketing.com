<?php
/*
  Template Name: For Patients
  Template Post Type: page
 */
get_header();
?>
<div id="content" tabindex="-1">
	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'loop-templates/content', 'page' );
	}
	?>
</div><!-- #content -->
<?php get_footer(); ?>
