<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'heading' => array(
		'type'  => 'text',
		'value' => 'The Somnowell mandibular advancement appliance is also recommended by:',
		'label' => __( 'Heading', 'fw' ),
	),
	'list'    => array(
		'type'     => 'addable-option',
		'value'    => array( 'Sleep Centres', 'ENT Surgeons, Sleep Physicians, Respiratory, Physicians', 'Orthodontists, Dentists', 'General Medical Practitioners' ),
		'option'   => array( 'type' => 'text' ),
		'sortable' => true,
		'label'    => __( 'List', 'fw' ),
	),
);
