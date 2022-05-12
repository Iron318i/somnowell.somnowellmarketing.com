<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
    <div class="info-heading">
        <h5 class="title">
            <svg class="icon">
                <use xlink:href="#<?php echo $atts['icon']; ?>"></use>
            </svg>
			<?php echo $atts['heading']; ?>
        </h5>
    </div>
<?php echo $atts['content']; ?>