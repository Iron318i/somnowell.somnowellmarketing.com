<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'practitioners' => array(
		'type'            => 'addable-popup',
		'label'           => __( 'Practioner', '{domain}' ),
		'template'        => '{{- persons[0]["name"] }}',
		'popup-title'     => null,
		'size'            => 'large', // small, medium, large
		'limit'           => 0, // limit the number of popup`s that can be added
		'add-button-text' => __( 'Add', '{domain}' ),
		'sortable'        => true,
		'popup-options'   => array(
			'practioner_id' => array(
				'label'      => 'Select Practioner Page',
				'type'       => 'multi-select',
				'population' => 'posts',
				'source'     => 'practioner',
				'limit'      => 1
			),
			'persons'       => array(
				'type'            => 'addable-box',
				'value'           => array(
					array(
						'name'          => '',
						'specification' => '',
					),
				),
				'label'           => __( 'Persons', '{domain}' ),
				'box-options'     => array(
					'name'          => array(
						'type'  => 'text',
						'label' => __( 'Name', 'fw' ),
					),
					'specification' => array(
						'type'  => 'text',
						'label' => __( 'Specification', 'fw' ),
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
						'inline'  => true,
					)
				),
				'template'        => '{{- name }}', // box title
				'limit'           => 0, // limit the number of boxes that can be added
				'add-button-text' => __( 'Add', '{domain}' ),
				'sortable'        => true,
			),
			'description'   => array(
				'type'  => 'wp-editor',
				'label' => __( 'Address and Contact Details', 'fw' ),
			),
			'add_text'      => array(
				'type'  => 'text',
				'value' => '',
				'label' => __( 'Additional text', 'fw' ),
			),
		),
	),
);
