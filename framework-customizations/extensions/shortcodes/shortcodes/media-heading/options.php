<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'heading' => array(
		'type'  => 'text',
		'label' => __( 'Heading', 'fw' ),
	),
	'icon'    => array(
		'type'    => 'select',
		'label'   => __( 'Icon', 'fw' ),
		'choices' => array(
			'video' => 'Video',
			'photo' => 'Photo',
		)
	),
	'content' => array(
		'type'  => 'wp-editor',
		'label' => __( 'Description', 'fw' ),
	),
);
