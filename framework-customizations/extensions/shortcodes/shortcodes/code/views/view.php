<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<textarea class="form-control code" rows="4"><?php
	if ( $atts['code'] ) {
		echo do_shortcode( $atts['code'] );
	}
	?></textarea>
