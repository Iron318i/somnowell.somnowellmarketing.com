<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'image'         => array(
		'type'  => 'upload',
		'label' => __( 'Choose Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	),
	'image_mobile'  => array(
		'type'  => 'upload',
		'label' => __( 'Choose Mobile Image (545px)', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	),
	'image_size'    => array(
		'type'    => 'select',
		'label'   => __( 'Image Size', 'fw' ),
		'choices' => array(
			'large'  => 'Large',
			'full'   => 'Full',
			'medium' => 'Medium',
		)
	),
	'margin_bottom' => array(
		'label'      => __( 'Margin Bottom', 'fw' ),
		'type'       => 'slider',
		'value'      => 0,
		'properties' => array(
			'min'  => 0,
			'max'  => 5,
			'step' => 1, // Set slider step. Always > 0. Could be fractional.
		),
	),
	'caption'       => array(
		'type'  => 'text',
		'label' => __( 'Caption', 'fw' ),
	),
	'img_class'     => array(
		'type'  => 'text',
		'label' => __( 'Image Class', 'fw' ),
	),
);

