<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'          => __( 'Heading Media', 'fw' ),
	'tab'            => __( 'Media Elements', 'fw' ),
	'popup_size'     => 'medium',
	'title_template' => '{{- title }} - {{- o.heading }}'
);
