<?php
/**
 * The template for displaying search results pages
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
    <section id="page-header" class="content-section bg-primary-gradient py-2 py-md-3" style="min-height: 15vw">
        <div class="container">
            <div class="row gx-2">

                <div class="col-12 text-center">
                    <div class="fw-heading fw-heading-h1 text-center">
                        <h1 class="fw-special-title text-uppercase mb-1"><?php echo 'Search'; ?></h1>
                    </div>
                    <div class="mb-0 wpcf7">
						<?php get_search_form(); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="container py-3" id="content" tabindex="-1">
        <div class="fw-heading fw-heading-h2 text-center mb-3">
            <h2 class="fw-special-title text-uppercase text-primary"><?php echo 'RESULTS'; ?></h2>
        </div>

		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php
			while ( have_posts() ) :
				the_post();

				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'loop-templates/content', 'search' );
			endwhile;
			?>

		<?php else : ?>
			<?php get_template_part( 'loop-templates/content', 'none' ); ?>

		<?php endif; ?>


        <!-- The pagination component -->
		<?php somnowell_pagination(); ?>

    </div>
<?php
get_footer();
