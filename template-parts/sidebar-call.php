<?php
/**
 * Sidebar Schedule a call
 *
 * @package somnowell-theme
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="card">
	<?php echo wp_get_attachment_image( 129, 'medium', false, array( "class" => 'card-img-to' ) ); ?>
    <div class="card-body">
        <h4 class="card-title">Speak with our team of Somnowell Experts Today! </h4>
        <p class="card-text">Find out if you may be suitable for the Somnowell device for snoring and sleep apnoea.</p>
        <a href="" onclick="Calendly.showPopupWidget('https://calendly.com/lucie-ash/20min');return false;" class="btn btn-outline-info">Schedule a call</a>
    </div>
</div>