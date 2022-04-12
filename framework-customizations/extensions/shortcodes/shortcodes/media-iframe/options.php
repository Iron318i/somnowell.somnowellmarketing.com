<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'map_iframe' => array(
        'label' => __('Iframe link', 'fw'),
        'type' => 'text'
    ),
    'ratio' => array(
        'type' => 'select',
        'label' => __('Aspect ratio', 'fw'),
        'choices' => array(
            '1x1' => '1:1',
            '4x3' => '4:3',
            '16x9' => '16:9',
            '21x9' => '21:9',
        )
    ),
);
