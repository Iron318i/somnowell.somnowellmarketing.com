<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

$id = fw_unique_increment();
?>
<div class="faq mb-2">
    <div class="accordion" id="accordionFaq-<?php echo $id; ?>">
		<?php foreach ( $atts['faq'] as $key => $value ) { ?>
            <div class="accordion-item">
                <h5 class="accordion-header" id="flush-heading-<?php echo $key ?>-<?php echo $id; ?>">
                    <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php echo $key ?>-<?php echo $id; ?>"
                            aria-expanded="false" aria-controls="flush-collapse-<?php echo $key ?>-<?php echo $id; ?>">
						<?php echo $value['question'] ?>
                    </button>
                </h5>
                <div id="flush-collapse-<?php echo $key ?>-<?php echo $id; ?>"
                     class="accordion-collapse collapse"
                     aria-labelledby="flush-heading-<?php echo $key ?>-<?php echo $id; ?>" data-bs-parent="#accordionFaq-<?php echo $id; ?>">
                    <div class="accordion-body"><?php echo $value['answer'] ?></div>
                </div>
            </div>
		<?php } ?>
    </div>
</div>