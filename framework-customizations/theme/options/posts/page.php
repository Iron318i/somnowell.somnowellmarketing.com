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
					'avards'        => __( 'Awards' ),
					'schedule-call' => __( 'Schedule a call' ),
					'take-test'     => __( 'Take The Test', '{domain}' ),
				),
			),
		),
		'title'   => __( 'Banners', '{domain}' ),
	),
);
