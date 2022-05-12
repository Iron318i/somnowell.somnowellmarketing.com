<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
global $wp_embed;

$iframe = $wp_embed->run_shortcode( '[embed class="embed-responsive-item"  width="300" height="200"]' . trim( $atts['url'] ) . '[/embed]' );
?>
<div class="ratio ratio-<?php echo $atts['ratio']; ?> mb-1">
	<?php echo do_shortcode( $iframe ); ?>
</div>
