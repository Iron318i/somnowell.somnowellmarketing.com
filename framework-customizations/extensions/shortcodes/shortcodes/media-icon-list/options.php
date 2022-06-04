<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'list' => array(
		'type'            => 'addable-popup',
		'label'           => __( 'List', '{domain}' ),
		'template'        => '{{- text }}',
		'popup-title'     => null,
		'size'            => 'large', // small, medium, large
		'limit'           => 0, // limit the number of popup`s that can be added
		'add-button-text' => __( 'Add', '{domain}' ),
		'sortable'        => true,
		'popup-options'   => array(
			'image'   => array(
				'type'  => 'upload',
				'label' => __( 'Icon 70x70px', 'fw' ),
			),
			'heading' => array(
				'type'  => 'text',
				'label' => __( 'Heading', 'fw' ),
			),
			'text'    => array(
				'type'  => 'text',
				'label' => __( 'Text', 'fw' ),
			),
		),
	),
);
