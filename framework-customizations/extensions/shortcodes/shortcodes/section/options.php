<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'section_title' => array(
        'label' => __('Section Title', 'somnowell'),
        'type' => 'text',
    ),
    'is_fullwidth' => array(
        'label' => __('Full Width', 'somnowell'),
        'type' => 'switch',
    ),
    'section_type' => array(
        'type' => 'select',
        'label' => __('Section Type', 'somnowell'),
        'choices' => array(
            '' => 'Default',
            'img-section' => 'Image left',
            'img-section invert' => 'Image right',
        )
    ),
    'type' => array(
        'label' => __('Wrapper Type', 'somnowell'),
        'type' => 'switch',
        'left-choice' => array(
            'value' => 'section',
            'label' => __('Section', '{domain}'),
        ),
        'right-choice' => array(
            'value' => 'div',
            'label' => __('Div', '{domain}'),
        ),
    ),
    'justify_content' => array(
        'type' => 'select',
        'label' => __('Justify content', 'fw'),
        'choices' => array(
            '' => 'Center',
            'justify-content-start' => 'Start',
            'justify-content-end' => 'End',
            'justify-content-around' => 'Around',
            'justify-content-between' => 'Between',
        )
    ),
    'reverse' => array(
        'type' => 'select',
        'label' => __('Row reverse', 'somnowell'),
        'choices' => array(
            '' => '---',
            'flex-lg-row-reverse' => 'Up Large',
            'flex-md-row-reverse' => 'Up Md',
        )
    ),
    'bgc' => array(
        'type' => 'select',
        'label' => __('Background Color', 'somnowell'),
        'choices' => array(
            '' => 'None',
            'bg-dark' => 'Dark',
            'light-bg' => 'Gray',
        )
    ),
    'gutters' => array(
        'label' => __('Horizontal gutters', 'somnowell'),
        'type' => 'slider',
        'value' => 2,
        'properties' => array(
            'min' => 0,
            'max' => 5,
            'step' => 1, // Set slider step. Always > 0. Could be fractional.
        ),
    ),
    'padding_top' => array(
        'label' => __('Top Padding size', 'somnowell'),
        'type' => 'slider',
        'value' => 3,
        'properties' => array(
            'min' => 0,
            'max' => 7,
            'step' => 1, // Set slider step. Always > 0. Could be fractional.
        ),
    ),
    'padding_bottom' => array(
        'label' => __('Padding Bottom', 'somnowell'),
        'type' => 'slider',
        'value' => 3,
        'properties' => array(
            'min' => 0,
            'max' => 7,
            'step' => 1, // Set slider step. Always > 0. Could be fractional.
        ),
    ),
    'background_image' => array(
        'label' => __('Background Image', 'somnowell'),
        'desc' => __('Please select the background image', 'somnowell'),
        'type' => 'background-image',
        'choices' => array(//	in future may will set predefined images
        )
    ),
    'custome_class' => array(
        'label' => __('Custome section class', 'somnowell'),
        'desc' => __('Insert Custome section class', 'somnowell'),
        'type' => 'text',
    ),
);
