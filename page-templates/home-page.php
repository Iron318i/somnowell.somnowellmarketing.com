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
            <p class="mb-3">thereby bringing a life changing solution to people suffering the effects of problematic snoring and obstructive sleep apnoea.</p>
            <p><a href="/somnowell-practitioners-uk" class="btn btn-lg btn-outline-info">Find a Local Practitioner</a></p>
            <p><a href="https://uk.trustpilot.com/review/www.somnowell.com?utm_medium=trustbox&utm_source=MicroReviewCount" class="btn btn-lg btn-info" target="_blank">See our reviews on <img src="<?php echo get_template_directory_uri() ?>/img/trustpilot.svg" alt="Trustpilot"></a></p>
        </div>
        <div class="row bottom">
            <div class="col-md-5">
                <div class="social">
                    <p>
                        <a href="https://www.facebook.com/pages/Somnowell/140209009364620" target="_blank">
                            <svg class="icon">
                                <use xlink:href="#facebook-icon"></use>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/somnowell" target="_blank">
                            <svg class="icon">
                                <use xlink:href="#linkdin-icon"></use>
                            </svg>
                        </a>
                    </p>
                    <p>
                        <a href="https://twitter.com/somnowell" target="_blank">
                            <svg class="icon">
                                <use xlink:href="#twitter-icon"></use>
                            </svg>
                        </a>
                        <a href="https://www.google.com/+Somnowell" target="_blank">
                            <svg class="icon">
                                <use xlink:href="#google-icon"></use>
                            </svg>
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="banner-about">
                    <div class="fw-heading fw-heading-h2 line"><h2 class="fw-special-title">SOMNOWELL</h2></div>
                    <div class="text-block fsz-24">
                        <p>Introducing the world's leading oral appliance with 93 - 96% success rates!<br> For: <a href="/snoring/somnowell-for-snoring">snoring</a>, <a href="/sleep-apnoea/somnowell-for-sleep-apnoea">sleep apnoea</a>, <a href="/bruxism/somnowell-for-bruxism">bruxism</a>, <a href="/tmj/somnowell-for-tmj">TMJ</a>, and <a href="/retainers/somnowell-retainers">retention</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-video pt-5">
    <div class="container">
        <div class="row gx-lg-3">
            <div class="col-lg-8">
                <div class="ratio ratio-16x9 mb-1">
                    <iframe title="Jonathan Davies Video Testimonial" width="300" height="169" src="https://www.youtube.com/embed/PRSxlCTsiD0?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-4 video-info">
                <div class="info-heading">
                    <h5 class="title">
                        <svg class="icon">
                            <use xlink:href="#video"></use>
                        </svg>
                        Somnowell Ambassador: Jonathan Davies OBE (Former British Rugby Player) Device fitted by Dr Matthew White
                    </h5>
                </div>
                <div class="row ms-lg-2">
                    <div class="col-auto mb-1"><img src="<?php echo site_url() ?>/wp-content/uploads/2022/05/sert-1.png" alt="Lifetime Guarantee"></div>
                    <div class="col-auto mb-1"><img src="<?php echo site_url() ?>/wp-content/uploads/2022/05/sert-2.png" alt="Patented"></div>
                    <div class="col-auto mb-1"><img src="<?php echo site_url() ?>/wp-content/uploads/2022/05/sert-3.png" alt="Best Oral Hygiene"></div>
                </div>
                <p><a href="<?php the_permalink( 14 ); ?>" class="btn btn-info d-lg-block">Learn More</a></p>
            </div>
        </div>
    </div>
</section>
<div class="professor py-2 py-lg-4">
    <div class="container">
        <div class="row flex-md-row-reverse">
            <div class="col-md-4">
				<?php echo wp_get_attachment_image( 916, 'full', false, array( "class" => 'mb-1' ) ); ?>
            </div>
            <div class="col-md-8">
                <div class="content">
                    <div class="info-heading">
                        <h5 class="title">
                            <svg class="icon">
                                <use xlink:href="#person"></use>
                            </svg>
                            Visiting Professor Simon Ash BDS MSc DOrth MOrth FDS
                        </h5>
                    </div>
                    <p class="fsz-24 mb-md-2">The Somnowell was invented by Visiting Professor Simon Ash, a highly respected Consultant and Specialist Orthodontist with over 30 years clinical experience, who has successfully treated thousands of patients, including doctors, dentists, lawyers, professors, celebrities, and royalty.</p>
                    <p class="mb-md-2"><a href="<?php the_permalink( 14 ); ?>" class="btn btn-info">Learn More</a></p>
                </div>
                <div class="recommended-by">
                    <div class="row">
                        <div class="col-lg-auto">
                            <h6 class="mb-lg-0">Recommended By:</h6>
                        </div>
                        <div class="col-lg-auto">
                            <img src="<?php echo get_template_directory_uri() ?>/img/recommended-by-img.jpg" alt="Recommended By">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home-speak">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content py-md-3">
                    <h2 class="text-primary">Speak with our team of Somnowell Experts Today!</h2>
                    <p class="fsz-24">Find out if you may be suitable for the Somnowell device for snoring and sleep apnoea.</p>
                    <div class="mb-2 mb-lg-5">
                        <a href="" onclick="Calendly.showPopupWidget('https://calendly.com/lucie-ash/20min');return false;" class="btn btn btn-outline-info">Schedule a call</a>
                    </div>
                    <h2 class="text-primary">QUICK PRACTITIONER FINDER</h2>
					<?php echo do_shortcode( '[contact-form-7 id="917" title="Quick practitioner finder"]' ) ?>
                </div>
            </div>
            <div class="col-md-6 p-0">
				<?php echo wp_get_attachment_image( 919, 'full', false, array( "class" => 'hide-lg-up' ) ); ?>
            </div>
        </div>
    </div>
</div>
<div id="content" tabindex="-1">
	<?php
	while ( have_posts() ) {
		the_post();
	}
	?>
</div><!-- #content -->
<?php get_footer(); ?>
