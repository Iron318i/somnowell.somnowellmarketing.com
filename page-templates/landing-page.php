<?php
/*
  Template Name: Landing Page
  Template Post Type: page
 */
get_header();
?>
<div class="lp-header">
    <div class="container">
        <div class="row">
            <div class="col-auto"><a href="<?php echo site_url() ?>" class="lp-logo"><img src="<?php echo get_template_directory_uri() ?>/img/smw-logo-w-text.png" alt="<?php bloginfo( 'name' ); ?>"></a></div>
            <div class="col-auto trustpilot"><img src="<?php echo get_template_directory_uri() ?>/img/header-trustpilot.png" alt="trustpilot"></div>
            <div class="col-auto hide-md-down"><img src="<?php echo get_template_directory_uri() ?>/img/header-icons.png" alt="Phone Icons"></div>
            <div class="col-auto hide-md-down">
                <a href="tel:+44(0)2081230432" class="phone">+44 (0) 208 123 0432</a>
            </div>
        </div>

    </div>
</div>
<div id="content" tabindex="-1">
	<?php
	while ( have_posts() ) {
		the_post();
		the_content();
	}
	?>
</div><!-- #content -->
<?php get_footer(); ?>
