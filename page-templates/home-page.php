<?php
/*
  Template Name: Home
  Template Post Type: page
 */
get_header();
?>
<section class="main-banner">
    <div class="container">
        <div class="text">
            <h1>We are dedicated to the aim of continually improving the Somnowell product</h1>
            <p>thereby bringing a life changing solution to people suffering
                the effects of problematic snoring and obstructive sleep apnoea.</p>
        </div>
    </div>
</section>
<div id="content" tabindex="-1">
	<?php
	while ( have_posts() ) {
		the_post();
	}
	?>
</div><!-- #content -->
<?php get_footer(); ?>
