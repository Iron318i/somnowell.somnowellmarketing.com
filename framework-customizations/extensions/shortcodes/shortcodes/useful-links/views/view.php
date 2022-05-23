<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

$id = fw_unique_increment();
?>
<div class="useful-links mb-2">
    <div class="accordion" id="accordionLinks-<?php echo $id; ?>">
		<?php foreach ( $atts['links'] as $key => $value ) { ?>
            <div class="accordion-item">
                <h5 class="accordion-header" id="flush-heading-<?php echo $key ?>-<?php echo $id; ?>">
                    <button class="accordion-button<?php if ( ! $key )
						echo ' collapsed' ?>" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php echo $key ?>-<?php echo $id; ?>"
                            aria-expanded="false" aria-controls="flush-collapse-<?php echo $key ?>-<?php echo $id; ?>">
                        <span><?php echo $value['cat'] ?></span>
                    </button>
                </h5>
                <div id="flush-collapse-<?php echo $key ?>-<?php echo $id; ?>"
                     class="accordion-collapse collapse<?php if ( ! $key )
					     echo ' show' ?>"
                     aria-labelledby="flush-heading-<?php echo $key ?>-<?php echo $id; ?>" data-bs-parent="#accordionLinks-<?php echo $id; ?>">
                    <div class="accordion-body">
						<?php foreach ( $value['link-items'] as $link ) { ?>
                            <div class="link">
                                <div class="name"><?php echo $link['name'] ?></div>
                                <a href="<?php echo $link['url'] ?>" class="btn btn-sm btn-outline-info" target="_blank">View</a>
                            </div>
						<?php } ?>
                    </div>
                </div>
            </div>
		<?php } ?>
    </div>
</div>