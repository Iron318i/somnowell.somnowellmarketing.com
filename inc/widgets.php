<?php

/**
 * Declaring widgets
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

add_action('widgets_init', 'somnowell_widgets_init');

if (!function_exists('somnowell_widgets_init')) {

    /**
     * Initializes themes widgets.
     */
    function somnowell_widgets_init()
    {
        register_sidebar(
            array(
                'name' => __('Sidebar', 'somnowell'),
                'id' => 'main-sidebar',
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            ),
        );
        register_sidebar(
            array(
                'name' => __('Footer 1', 'somnowell'),
                'id' => 'footer-1',
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>',
            )
        );
        register_sidebar(
            array(
                'name' => __('Footer 2', 'somnowell'),
                'id' => 'footer-2',
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>',
            )
        );
        register_sidebar(
            array(
                'name' => __('Footer 3', 'somnowell'),
                'id' => 'footer-3',
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>',
            )
        );
    }

} // End of function_exists( 'somnowell_widgets_init' ).
