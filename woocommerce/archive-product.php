<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>
    <div class="container pt-1 pb-3" id="post-<?php the_ID(); ?>">
		<?php
		if ( is_shop() ):
			?>
            <div class="main-content">
                <div class="entry-content">
					<?php
					$post = get_post( 5854 );
					echo $post->post_content;
					?>
                </div>
            </div>
		<?php
		else:
			?>
            <div class="row wrapper flex-md-row-reverse">
                <div class="col-auto main-content">
                    <div class="entry-content">
						<?php
						/**
						 * Hook: woocommerce_before_main_content.
						 *
						 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
						 * @hooked woocommerce_breadcrumb - 20
						 * @hooked WC_Structured_Data::generate_website_data() - 30
						 */
						do_action( 'woocommerce_before_main_content' );

						$cat = get_queried_object();
						if ( is_product_category( array( 37 ) ) || $cat->parent === 37 ) {
							if ( is_user_logged_in() ):
								get_template_part( 'woocommerce/archive-practitioners' );
							else:
								?>
                                <h1>Sorry, but you do not have permission to view this content.</h1>
                                <p><a href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ?>" class="btn btn-primary">Log In</a></p>
							<?php
							endif;
						} else {
							?>
                            <header class="woocommerce-products-header">
								<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                                    <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
								<?php endif; ?>

								<?php
								/**
								 * Hook: woocommerce_archive_description.
								 *
								 * @hooked woocommerce_taxonomy_archive_description - 10
								 * @hooked woocommerce_product_archive_description - 10
								 */
								do_action( 'woocommerce_archive_description' );
								?>
                            </header>
							<?php
							if ( woocommerce_product_loop() ) {

								/**
								 * Hook: woocommerce_before_shop_loop.
								 *
								 * @hooked woocommerce_output_all_notices - 10
								 * @hooked woocommerce_result_count - 20
								 * @hooked woocommerce_catalog_ordering - 30
								 */
								do_action( 'woocommerce_before_shop_loop' );

								woocommerce_product_loop_start();

								if ( wc_get_loop_prop( 'total' ) ) {
									while ( have_posts() ) {
										the_post();

										/**
										 * Hook: woocommerce_shop_loop.
										 */
										do_action( 'woocommerce_shop_loop' );

										wc_get_template_part( 'content', 'product' );
									}
								}

								woocommerce_product_loop_end();

								/**
								 * Hook: woocommerce_after_shop_loop.
								 *
								 * @hooked woocommerce_pagination - 10
								 */
								do_action( 'woocommerce_after_shop_loop' );
							} else {
								/**
								 * Hook: woocommerce_no_products_found.
								 *
								 * @hooked wc_no_products_found - 10
								 */
								do_action( 'woocommerce_no_products_found' );
							}
						}

						/**
						 * Hook: woocommerce_after_main_content.
						 *
						 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
						 */
						do_action( 'woocommerce_after_main_content' );

						/**
						 * Hook: woocommerce_sidebar.
						 *
						 * @hooked woocommerce_get_sidebar - 10
						 */
						do_action( 'woocommerce_sidebar' );
						?>
                    </div>
                </div>
                <div class="col-auto sidebar">
					<?php
					if ( is_user_logged_in() ) {
						wp_nav_menu(
							array(
								'theme_location' => 'portal',
								'menu_class'     => 'nav flex-column mb-lg-3',
							)
						);
						wp_nav_menu(
							array(
								'theme_location' => 'shop-practitioners',
								'menu_class'     => 'nav flex-column mb-lg-3',
							)
						);
					} else {
						wp_nav_menu(
							array(
								'theme_location' => 'shop',
								'menu_class'     => 'nav flex-column mb-lg-3',
							)
						);
					}
					if ( is_active_sidebar( 'main-sidebar' ) ) {
						dynamic_sidebar( 'main-sidebar' );
					}
					?>
                </div>
            </div>
		<?php endif; ?>
    </div>
<?php
get_footer( 'shop' );
