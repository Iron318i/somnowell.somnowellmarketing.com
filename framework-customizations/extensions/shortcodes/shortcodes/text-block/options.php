<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text'          => array(
		'type'  => 'wp-editor',
		'size'  => 'large',
		'label' => __( 'Content', 'fw' ),
		'desc'  => __( 'Enter some content for this texblock', 'fw' )
	),
	'fsz'           => array(
		'type'    => 'select',
		'label'   => __( 'Fonte Size', 'fw' ),
		'choices' => array(
			''       => '18px',
			'fsz-16' => '16px',
			'fsz-24' => '24px',
		)
	),
	'mw'            => array(
		'type'  => 'text',
		'label' => __( 'Max Width', 'fw' ),
		'desc'  => __( 'Enter width in px', 'fw' )
	),
	'centered'      => array(
		'type'  => 'switch',
		'label' => __( 'Centered', 'fw' ),
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
	'class'         => array(
		'type'  => 'text',
		'label' => __( 'Block class', 'fw' ),
	),
);
