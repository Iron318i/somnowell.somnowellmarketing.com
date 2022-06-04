<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="iconic-list mb-md-2">
	<?php foreach ( $atts['list'] as $value ) { ?>
        <div class="item">
            <div class="img">
				<?php echo wp_get_attachment_image( $value['image']["attachment_id"], array( 70, 70 ), false, array( "class" => '' ) ); ?>
            </div>
            <div class="text ps-lg-2">
				<?php if ( $value['heading'] != '' )
					echo "<h3 class='h3'>" . $value['heading'] . "</h3>" ?>
                <p class="mb-0"><?php echo $value['text'] ?></p>
            </div>
        </div>
	<?php } ?>
</div>
