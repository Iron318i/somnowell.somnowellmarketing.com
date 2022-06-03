<?php
/**
 * The Template for displaying Practitioners single products
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
?>
<div class="single-practitioners">
    <h1><?php the_title() ?> - <?php echo $product->get_price_html(); ?></h1>
    <h3>To place an order please complete the below form.</h3>
    <p><a href="<?php echo wp_get_attachment_url( 5940 ) ?>" class="btn btn-primary" target="_blank">Quick StartGuide</a></p>
	<?php
	/**
	 * Hook: woocommerce_single_product_summary.
	 *
	 *
	 *
	 * @hooked woocommerce_template_single_title - 5
	 * @hooked woocommerce_template_single_rating - 10
	 * @hooked woocommerce_template_single_price - 10
	 * @hooked woocommerce_template_single_excerpt - 20
	 * @hooked woocommerce_template_single_add_to_cart - 30
	 * @hooked woocommerce_template_single_meta - 40
	 * @hooked woocommerce_template_single_sharing - 50
	 * @hooked WC_Structured_Data::generate_product_data() - 60
	 */
	do_action( 'woocommerce_single_product_summary' );
	?>
</div>
