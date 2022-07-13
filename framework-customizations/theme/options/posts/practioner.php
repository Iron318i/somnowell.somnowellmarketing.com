<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'practioner_options' => array(
		'type'    => 'box',
		'options' => array(
			'persons'         => array(
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
							'fullrange' => __( 'Full Range', '{domain}' ),
						),
						'inline'  => true,
					)
				),
				'template'        => '{{- name }}', // box title
				'limit'           => 0, // limit the number of boxes that can be added
				'add-button-text' => __( 'Add', '{domain}' ),
				'sortable'        => true,
			),
			'pricing'         => array(
				'type'  => 'wp-editor',
				'label' => __( 'Pricing', 'fw' ),
			),
			'contact_details' => array(
				'type'  => 'wp-editor',
				'label' => __( 'Address and Contact Details', 'fw' ),
			),
			'add_text'        => array(
				'type'  => 'text',
				'value' => '',
				'label' => __( 'Additional text', 'fw' ),
			),
			'recipient_email' => array(
				'type'  => 'text',
				'value' => '',
				'label' => __( 'Mailing addresses', 'fw' ),
			),
			'form_type'       => array(
				'type'    => 'select',
				'label'   => __( 'Form type', 'fw' ),
				'choices' => array(
					'general'  => 'General Practitioner',
					'platinum' => 'Platinum Practitioner',
				)
			),
		),
		'title'   => __( 'Options', '{domain}' ),
	),
);
