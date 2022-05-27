<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="key-info">
    <h2>Key</h2>
    <p><span class="badge partner">Partner</span></p>
    <p class="mb-1">Somnowell Practitioner - with access to Somnowell clinical guidance, training and support</p>
    <p><span class="badge certified">Certified</span></p>
    <p class="mb-1">Completed a Somnowell certification course - approved by the Royal College of Surgeons</p>
    <p><span class="badge bronze">Bronze</span><span class="badge silver">Silver</span><span class="badge gold">Gold</span></p>
    <p class="mb-1">Level of Somnowell experience</p>
	<?php if ( isset( $atts['show']["platinum"] ) ) { ?>
        <p><span class="badge platinum">Platinum</span></p>
        <p class="mb-1">Our most highly recommended Somnowell Practitioners</p>
	<?php } ?>
	<?php if ( isset( $atts['show']["finance"] ) ) { ?>
        <p><span class="badge finance">Finance</span></p>
        <p class="mb-1">Finance Available</p>
	<?php } ?>
</div>
