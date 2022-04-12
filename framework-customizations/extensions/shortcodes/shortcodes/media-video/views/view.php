<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
global $wp_embed;

$width = ( is_numeric($atts['width']) && ( $atts['width'] > 0 ) ) ? $atts['width'] : '300';
$height = ( is_numeric($atts['height']) && ( $atts['height'] > 0 ) ) ? $atts['height'] : '200';
$iframe = $wp_embed->run_shortcode('[embed class="embed-responsive-item"  width="' . $width . '" height="' . $height . '"]' . trim($atts['url']) . '[/embed]');
?>
<div class="embed-responsive embed-responsive-<?php echo $atts['ratio']; ?>">
    <?php echo do_shortcode($iframe); ?>
</div>
