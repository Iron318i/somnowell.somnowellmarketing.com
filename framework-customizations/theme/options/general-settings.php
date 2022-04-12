<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'general' => array(
        'title' => __('General', 'unyson'),
        'type' => 'tab',
        'options' => array(
            'header-box' => array(
                'title' => __('Main', 'somnowell'),
                'type' => 'box',
                'options' => array(
                    'address' => array(
                        'label' => __('Address', 'somnowell'),
                        'type' => 'textarea',
                        'value' => 'Somnowell (PTY) Ltd.<br> Address: Suite 57, Building 1,<br> Prism Business Park, 1 Ruby <br> Close, Fourways, 2191'
                    ),
                    'phone' => array(
                        'label' => __('Phone', 'somnowell'),
                        'type' => 'text',
                        'value' => '+27 66 255 3300'
                    ),
                    'email' => array(
                        'label' => __('Email', 'somnowell'),
                        'type' => 'text',
                        'value' => 'sales@emeraldcapital.com',
                    ),
                    'before_body' => array(
                        'label' => __('Code before the </body>', 'somnowell'),
                        'type' => 'textarea',
                    ),
                )
            ),
        )
    )
);
