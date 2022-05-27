<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'show' => array(
		'type'    => 'checkboxes',
		'label'   => __( 'Options', '{domain}' ),
		'choices' => array(
			'platinum' => __( 'Platinum', '{domain}' ),
			'finance'  => __( 'Finance', '{domain}' ),
		),
		'inline'  => false,
	)
);
