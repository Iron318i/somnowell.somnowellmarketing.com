<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'sidebar-banners' => array(
		'type'    => 'box',
		'options' => array(
			'banners' => array(
				'type'    => 'checkboxes',
				'label'   => false,
				'choices' => array(
					'avards'          => __( 'Awards' ),
					'schedule-call'   => __( 'Schedule a call' ),
					'take-test'       => __( 'Take The Test', '{domain}' ),
					'find-practioner' => __( 'Find a practitioner', '{domain}' ),
				),
			),
		),
		'title'   => __( 'Banners', '{domain}' ),
	),
	'page-options'    => array(
		'type'    => 'box',
		'options' => array(
			'page_id' => array(
				'label' => 'Get Content from Page ID',
				'type'  => 'text',
			),
		),
		'title'   => __( 'Page Options', '{domain}' ),
	),
);
