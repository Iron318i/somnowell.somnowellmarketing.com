<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'practitioners' => array(
		'type'            => 'addable-popup',
		'label'           => __( 'Practioner', '{domain}' ),
		'template'        => '{{- name }}',
		'popup-title'     => null,
		'size'            => 'large', // small, medium, large
		'limit'           => 0, // limit the number of popup`s that can be added
		'add-button-text' => __( 'Add', '{domain}' ),
		'sortable'        => true,
		'popup-options'   => array(
			'name'          => array(
				'type'  => 'text',
				'label' => __( 'Name', 'fw' ),
			),
			'specification' => array(
				'type'  => 'text',
				'label' => __( 'Specification', 'fw' ),
			),
			'description'   => array(
				'type'  => 'wp-editor',
				'label' => __( 'Description', 'fw' ),
			),
			'badges'        => array(
				'type'    => 'checkboxes',
				'label'   => __( 'Options', '{domain}' ),
				'choices' => array(
					'partner'   => __( 'Partner', '{domain}' ),
					'certified' => __( 'Certified', '{domain}' ),
					'bronze'    => __( 'Bronze', '{domain}' ),
					'silver'    => __( 'Silver', '{domain}' ),
					'gold'      => __( 'Gold', '{domain}' ),
					'platinum'  => __( 'Platinum', '{domain}' ),
					'finance'   => __( 'Finance', '{domain}' ),
				),
				'inline'  => false,
			)
		),
	),
);
