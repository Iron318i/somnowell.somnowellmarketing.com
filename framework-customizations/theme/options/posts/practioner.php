<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'practioner_options' => array(
		'type'    => 'box',
		'options' => array(
			'specification' => array(
				'type'  => 'text',
				'label' => __( 'Specification', 'fw' ),
			),
			'address'       => array(
				'type'  => 'wp-editor',
				'label' => __( 'Address and Contact Details', 'fw' ),
			),
			'add_text'      => array(
				'type'  => 'text',
				'value' => '',
				'label' => __( 'Additional text', 'fw' ),
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
		'title'   => __( 'Options', '{domain}' ),
	),
);
