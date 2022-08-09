<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'testimonials' => array(
		'label'         => __( 'Testimonials', 'fw' ),
		'popup-title'   => __( 'Add/Edit Testimonial', 'fw' ),
		'desc'          => __( 'Here you can add, remove and edit your Testimonials.', 'fw' ),
		'type'          => 'addable-popup',
		'template'      => '{{=author_name}}',
		'size'          => 'large',
		'popup-options' => array(
			'author_heading' => array(
				'label' => __( 'Heading', 'fw' ),
				'desc'  => __( 'Enter the Name of the Person to quote', 'fw' ),
				'type'  => 'text'
			),
			'author_name'    => array(
				'label' => __( 'Name', 'fw' ),
				'desc'  => __( 'Enter the Name of the Person to quote', 'fw' ),
				'type'  => 'text'
			),
			'content'        => array(
				'label' => __( 'Quote', 'fw' ),
				'desc'  => __( 'Enter the testimonial here', 'fw' ),
				'type'  => 'wp-editor',
			),
			'author_avatar'  => array(
				'label' => __( 'Image 330x256', 'fw' ),
				'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
				'type'  => 'upload',
			),
		)
	)
);
