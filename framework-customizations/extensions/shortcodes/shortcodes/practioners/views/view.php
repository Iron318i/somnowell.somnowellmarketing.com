<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

$id = fw_unique_increment();
?>
<div class="practitioners mb-1">
	<?php foreach ( $atts['practitioners'] as $key => $value ) { ?>
        <div class="practioner">
            <div class="info">
                <p class="heading"><strong><?php echo $value['name'] ?></strong><?php if ( $value['specification'] != '' )
						echo ' | ' ?><?php echo $value['specification'] ?></p>
				<?php echo str_replace( array( "\r\n", "\r", "\n", "<br />", "<br>" ), ', ', $value['description'] ) ?>
                <p>
					<?php if ( isset( $value['badges']["partner"] ) ) { ?>
                        <span class="badge partner">Partner</span>
					<?php } ?>
					<?php if ( isset( $value['badges']["certified"] ) ) { ?>
                        <span class="badge certified">Certified</span>
					<?php } ?>
					<?php if ( isset( $value['badges']["bronze"] ) ) { ?>
                        <span class="badge bronze">Bronze</span>
					<?php } ?>
					<?php if ( isset( $value['badges']["silver"] ) ) { ?>
                        <span class="badge silver">Silver</span>
					<?php } ?>
					<?php if ( isset( $value['badges']["gold"] ) ) { ?>
                        <span class="badge gold">Gold</span>
					<?php } ?>
					<?php if ( isset( $value['badges']["platinum"] ) ) { ?>
                        <span class="badge platinum">Platinum</span>
					<?php } ?>
					<?php if ( isset( $value['badges']["finance"] ) ) { ?>
                        <span class="badge finance">Finance</span>
					<?php } ?>
                </p>
            </div>
            <div class="btn-wrp">
                <a href="<?php the_permalink( 5012 ); ?>?dr=<?php echo urlencode( $value['name'] ) ?>" class="btn btn-sm btn-outline-info">Contact</a>
            </div>
        </div>
	<?php } ?>
</div>