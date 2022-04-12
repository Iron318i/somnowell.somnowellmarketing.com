<?php

if (!defined('FW')) {
    die('Forbidden');
}
$options = array(
    'page-header' => array(
        'type' => 'box',
        'options' => array(
            'banner_enable' => array(
                'type' => 'switch',
                'value' => true,
                'label' => __('Enable Header', 'sleepquest'),
            ),
            'banner_heading' => array(
                'type' => 'text',
                'label' => __('Custom Heading', 'sleepquest'),
            ),
        ),
        'title' => __('Page Header', 'sleepquest'),
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
    ),
);
