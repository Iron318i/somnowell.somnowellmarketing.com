<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<div class="faq">
    <div class="accordion" id="accordionFaq">
        <?php foreach ($atts['faq'] as $key => $value) { ?>
            <div class="accordion-item">
                <h5 class="accordion-header" id="flush-heading-<?php echo $key ?>">
                    <button class="accordion-button<?php if ($key) echo " collapsed"; ?>" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php echo $key ?>"
                            aria-expanded="false" aria-controls="flush-collapse-<?php echo $key ?>">
                        <?php echo $value['question'] ?>
                    </button>
                </h5>
                <div id="flush-collapse-<?php echo $key ?>"
                     class="accordion-collapse collapse<?php if (!$key) echo " show"; ?>"
                     aria-labelledby="flush-heading-<?php echo $key ?>" data-bs-parent="#accordionFaq">
                    <div class="accordion-body"><?php echo $value['answer'] ?></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>