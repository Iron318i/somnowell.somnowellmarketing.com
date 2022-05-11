<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'list'     => array(
		'type'     => 'addable-option',
		'option'   => array( 'type' => 'text' ),
		'sortable' => true,
		'label'    => __( 'List', 'fw' ),
	),
	'negative' => array(
		'type'  => 'switch',
		'label' => __( 'Negative', 'fw' ),
	),
	'two_cols' => array(
		'type'  => 'switch',
		'label' => __( 'Two columns', 'fw' ),
	),
	'wrap'     => array(
		'type'  => 'switch',
		'label' => __( 'Wrapper', 'fw' ),
	),
);
