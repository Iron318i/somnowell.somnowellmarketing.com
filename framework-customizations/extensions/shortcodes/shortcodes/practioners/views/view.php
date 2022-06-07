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
				<?php foreach ( $value['persons'] as $person ) { ?>
                    <p class="heading"><strong><?php echo $person['name'] ?></strong><?php if ( $person['specification'] != '' )
							echo ' | ' ?><?php echo $person['specification'] ?></p>
                    <p>
						<?php if ( isset( $person['badges']["partner"] ) ) { ?>
                            <span class="badge partner">Partner</span>
						<?php } ?>
						<?php if ( isset( $person['badges']["certified"] ) ) { ?>
                            <span class="badge certified">Certified</span>
						<?php } ?>
						<?php if ( isset( $person['badges']["bronze"] ) ) { ?>
                            <span class="badge bronze">Bronze</span>
						<?php } ?>
						<?php if ( isset( $person['badges']["silver"] ) ) { ?>
                            <span class="badge silver">Silver</span>
						<?php } ?>
						<?php if ( isset( $person['badges']["gold"] ) ) { ?>
                            <span class="badge gold">Gold</span>
						<?php } ?>
						<?php if ( isset( $person['badges']["platinum"] ) ) { ?>
                            <span class="badge platinum">Platinum</span>
						<?php } ?>
						<?php if ( isset( $person['badges']["finance"] ) ) { ?>
                            <span class="badge finance">Finance</span>
						<?php } ?>
                    </p>
				<?php } ?>
				<?php
				$description = str_replace( array( "\r\n", "\r", "\n", "<br />", "<br>" ), ', ', $value['description'] );
				echo str_replace( ',,', ',', $description );
				?>
				<?php if ( $value['add_text'] != '' ) { ?>
                    <p class="add_text"><?php echo $value['add_text'] ?></p>
				<?php } ?>
            </div>
            <div class="btn-wrp">
				<?php if ( isset( $value['practioner_id'][0] ) ) { ?>
                    <a href="<?php the_permalink( $value['practioner_id'][0] ); ?>" class="btn btn-sm btn-outline-info">View</a>
				<?php } else { ?>
                    <a href="<?php the_permalink( 5012 ); ?>?dr=<?php echo urlencode( $value['persons'][0]["name"] ) ?>" class="btn btn-sm btn-outline-info">Contact</a>
				<?php } ?>
            </div>
        </div>
	<?php } ?>
</div>