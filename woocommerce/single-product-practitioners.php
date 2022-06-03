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
	<?php the_content(); ?>
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
<div class="modal fade" id="facebowModal" tabindex="-1" aria-labelledby="facebowModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="facebowModalLabel">Facebow Advantages</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>The facebow registration allows us to register the position of the maxillary model in relation to the calvarium. It gives the mid-facial plane, the horizontal relation, the vertical height, the distance between external auditory meati and the upper incisor tips.</p>

                <strong>We construct these devices on semi-adjustable articulators (Denar) for the following reasons:</strong>
                <ul>
                    <li>For maximum comfort so that as the piston rods function they do so in harmony with and dictated by the patients jaw movements.</li>
                    <li>To aid retention.</li>
                    <li>Achieve a balanced bite in the protruded position.</li>
                    <li>To spread the occlusal load over the entire frameworks.</li>
                    <li>To avoid sagittal and lateral jaw interferences. The semi-adjustable articulator enables the technician to construct the device and check for these movements. Note that the upper and lower devices have a fixed linkage.</li>
                    <li>To minimize the bulk of these devices.</li>
                    <li>To place the fixing parts on the upper framework on a horizontal plane that is at right angles to the mid-facial plane.</li>
                    <li>To place the upper fixing parts as close as possible to a line drawn on a parallel between the heads of the condyles.</li>
                    <li>Both the master models and the refractory models are mounted on the semi-adjustable articulator.</li>
                    <li>We need to ensure that as the mandible is further advanced or moved laterally that the piston rods enable this and do not foul the occlusion or other elements of the device.</li>
                </ul>
                <strong>Retention of the Somnowell is achieved by:</strong>
                <ol type="a">
                    <li>the paths of insertion of the frameworks being non co-incident with the vectors of forces from the piston rods</li>
                    <li>the claps into minimal undercuts</li>
                    <li>occlusal balance in the postured bite position and where possible in jaw excursions</li>
                    <li>muco static adhesion / surface tension forces</li>
                    <li>the patients tongue and supporting soft tissues</li>
                </ol>
                <strong>Reasons for not making these devices free-hand or on a plain line articulator.</strong>
                <ul>
                    <li>The upper and lower frameworks are connected by a fixed linkage.</li>
                    <li>A common cause of device instability is due to the absence of occlusal balance in protrusive (a prosthetic dental principle).</li>
                    <li>The jaws are a hinge arrangement and to get a minimum of 4 point balance you need to know how the upper jaw relates to the lower in 3 planes of space both in a static postured jaw relation and in function. Functional occlusion as for Michigen splints apply.</li>
                    <li>Without a set up on a semi-adjustable articlator, then the frameworks are likely to be unbalanced, premature posterior or lateral contacts plus interferences will occur.</li>
                    <li>The metal frameworks cannot be adjusted or trimmed in the clinic easily. There is limited scope for adding plastics to make up any deficit in the occlusion.</li>
                    <li>Experience has proven that the above concepts and requirements hold true.</li>
                    <li>Using a plain line articulator introduces guess work on behalf of the technician and increases the likelihood of failure.</li>
                    <li>Unbalanced, unstable, uncomfortable outcomes are more likely without a facebow record. Tightening the clasps is not a solution.</li>
                </ul>
                <p>The Somnowell philosophy is based on using the teeth to support opposing jaw frameworks which are held in a forward postured position. The lower jaw being aligned perpendicular to the mid-facial plane and the upper fixing parts are located on a line parallel to the heads of the condyles. The intercuspal jaw relation is only of interest as a measure of the degree of forward jaw protrusion.</p>

                <span style="color: #ff0000;"> </span>
            </div>
        </div>
    </div>
</div>