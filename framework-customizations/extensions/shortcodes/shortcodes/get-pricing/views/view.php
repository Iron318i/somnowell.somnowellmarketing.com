<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
$dr_name = '';
if ( isset( $_GET['dr'] ) ) {
	$dr_name = $_GET['dr'];
}

?>
    <h1 class="text-uppercase">Contact <?php echo $dr_name ?></h1>
<?php
echo do_shortcode( '[contact-form-7 id="6083" title="Get Pricing"]' );
?>