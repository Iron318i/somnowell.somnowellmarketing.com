<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$class = ! empty( $atts['color'] ) ? "btn-{$atts['color']}" : '';
$class .= ! empty( $atts['size'] ) ? " {$atts['size']}" : '';
$class .= ( $atts['full'] ) ? ' d-block' : '';
?>

<div class="btn-wrp">
    <a href="<?php echo do_shortcode( $atts['link'] ) ?>" target="<?php echo esc_attr( $atts['target'] ) ?>" class="btn <?php echo esc_attr( $class ); ?>">
        <span><?php echo $atts['label']; ?></span>
    </a>
</div>