<?php

/**
 * Custom hooks
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

add_filter('fw_ext_page_builder_output_content_wrapper', '__return_false');
