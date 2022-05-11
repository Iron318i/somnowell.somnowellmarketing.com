<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
$class = "styled";
$class .= ( $atts['negative'] ) ? ' negative' : '';
$class .= ( $atts['two_cols'] ) ? ' two-cols' : '';
$class .= ( $atts['wrap'] ) ? ' wrap' : '';
?>
<ul class="<?php echo $class; ?>">
	<?php foreach ( $atts['list'] as $value ) { ?>
        <li><?php echo $value ?></li>
	<?php } ?>
</ul>