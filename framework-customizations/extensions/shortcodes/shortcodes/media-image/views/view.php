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
if ( empty( $atts['image_mobile'] ) ) {
	echo wp_get_attachment_image( $atts['image']["attachment_id"], $atts['image_size'], false, array( "class" => 'img-fluid' ) );
} else {
	?>
    <picture>
        <source media="(max-width: 767px)" srcset="<?php echo wp_get_attachment_image_url( $atts['image_mobile']["attachment_id"], array( 545, 1024 ) ) ?>">
        <source media="(min-width: 768px)" srcset="<?php echo wp_get_attachment_image_url( $atts['image']["attachment_id"], 'large' ) ?>">
        <img src="<?php echo wp_get_attachment_image_url( $atts['image']["attachment_id"], 'large' ) ?>" alt="<?php echo get_post_meta( $atts['image']["attachment_id"], '_wp_attachment_image_alt', true ); ?>">
    </picture>
	<?php
}
echo '</div>';
