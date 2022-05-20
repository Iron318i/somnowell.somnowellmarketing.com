<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'links' => array(
		'type'            => 'addable-popup',
		'label'           => __( 'Links', '{domain}' ),
		'template'        => '{{- cat }}',
		'popup-title'     => null,
		'size'            => 'large', // small, medium, large
		'limit'           => 0, // limit the number of popup`s that can be added
		'add-button-text' => __( 'Add', '{domain}' ),
		'sortable'        => true,
		'popup-options'   => array(
			'cat'        => array(
				'type'  => 'text',
				'label' => __( 'Category', 'fw' ),
			),
			'link-items' => array(
				'type'        => 'addable-box',
				'label'       => __( 'Links', 'fw' ),
				'box-options' => array(
					'name' => array( 'type' => 'text' ),
					'url'  => array( 'type' => 'text' ),
				),
				'template'    => '{{- name }}', // box title
			),
		),
	),
);
