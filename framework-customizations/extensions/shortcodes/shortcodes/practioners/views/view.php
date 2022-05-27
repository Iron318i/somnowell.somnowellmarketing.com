<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

$id = fw_unique_increment();
?>
<div class="practitioners">
	<?php foreach ( $atts['practitioners'] as $key => $value ) { ?>
        <div class="practioner">
            <div class="info">
                <div class="heading"><strong></strong><?php echo $value['name'] ?></strong> | <?php echo $value['specification'] ?></div>
				<?php echo $value['description'] ?>
            </div>
            <div class="btn">
                <a href="#" class="btn btn-outline-info">Contact</a>
            </div>
        </div>
	<?php } ?>
</div>