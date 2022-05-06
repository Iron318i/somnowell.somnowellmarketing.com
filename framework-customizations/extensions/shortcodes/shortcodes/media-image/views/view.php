<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
if ( empty( $atts['image'] ) ) {
	return;
}
$custome_class = $atts['img_class'];
switch ( $atts['margin_bottom'] ) {
	case 0:
		break;
	case 1:
		$custome_class .= ' mb-1';
		break;
	case 2:
		$custome_class .= ' mb-2';
		break;
	case 3:
		$custome_class .= ' mb-3';
		break;
	case 4:
		$custome_class .= ' mb-4';
		break;
	case 5:
		$custome_class .= ' mb-5';
		break;
}

echo '<div class="img-box ' . $custome_class . '">';
echo wp_get_attachment_image( $atts['image']["attachment_id"], $atts['image_size'], false, array( "class" => 'img-fluid' ) );
echo '</div>';
