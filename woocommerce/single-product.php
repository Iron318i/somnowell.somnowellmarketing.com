<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

    <div class="container pt-1 pb-3" id="post-<?php the_ID(); ?>">
        <div class="row wrapper flex-md-row-reverse">
            <div class="col-auto main-content">
                <div class="entry-content">
					<?php
					$child_ids = get_term_children( 37, 'product_cat' );
					if ( has_term( $child_ids, 'product_cat', $product->get_id() ) ) {
						wc_get_template_part( 'single-product-practitioners' );
					} else {
						/**
						 * woocommerce_before_main_content hook.
						 *
						 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
						 * @hooked woocommerce_breadcrumb - 20
						 */
						do_action( 'woocommerce_before_main_content' );
						?>

						<?php while ( have_posts() ) : ?>
							<?php the_post(); ?>

							<?php wc_get_template_part( 'content', 'single-product' ); ?>

						<?php endwhile; // end of the loop. ?>

						<?php
						/**
						 * woocommerce_after_main_content hook.
						 *
						 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
						 */
						do_action( 'woocommerce_after_main_content' );
						?>

						<?php
						/**
						 * woocommerce_sidebar hook.
						 *
						 * @hooked woocommerce_get_sidebar - 10
						 */
						do_action( 'woocommerce_sidebar' );
					}
					?>
                </div>
            </div>
            <div class="col-auto sidebar">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'shop',
						'menu_class'     => 'nav flex-column mb-lg-3',
					)
				);
				if ( is_active_sidebar( 'main-sidebar' ) ) {
					dynamic_sidebar( 'main-sidebar' );
				}
				?>
            </div>
        </div>
    </div>
<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
