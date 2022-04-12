<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
$style = '';
if ($atts['mw'] > 0) {
    $style = 'style="max-width: ' . $atts['mw'] / 16 . 'rem"';
}
$custome_class = (isset($atts['class']) && $atts['class']) ? ' ' . $atts['class'] . '' : '';
$custome_class .= ($atts['centered']) ? ' mx-auto' : '';
$custome_class .= ($atts['fsz']) ? ' ' . $atts['fsz'] : '';
switch ($atts['margin_bottom']) {
    case 0:
        break;
    case 1:
        $custome_class .= ' mb-1';
        break;
    case 2:
        $custome_class .= ' mb-2';
        break;
    case 3:
        $custome_class .= ' mb-3';
        break;
    case 4:
        $custome_class .= ' mb-4';
        break;
    case 5:
        $custome_class .= ' mb-5';
        break;
}
?>
<div class="text-block<?php echo $custome_class ?>" <?= $style ?>>
    <?php
    echo do_shortcode($atts['text']);
    if ($atts['read_more_text'] !== '') {
        $unique_increment = fw_unique_increment();
        ?>
        <p class="read-more"><a data-bs-toggle="collapse" href="#collapse-<?php echo $unique_increment ?>" role="button" aria-expanded="false" aria-controls="collapse-<?php echo $unique_increment ?>">Read More</a></p>
        <div class="collapse" id="collapse-<?php echo $unique_increment ?>">
            <?php echo do_shortcode($atts['read_more_text']); ?>
        </div>
        <?php
    }
    ?>
</div>