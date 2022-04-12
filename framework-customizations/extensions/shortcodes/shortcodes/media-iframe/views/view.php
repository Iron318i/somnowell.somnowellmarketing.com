<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var $atts
 */
?>
<div class="ratio ratio-<?php echo $atts['ratio']; ?>">
    <iframe src="<?php echo $atts['map_iframe']; ?>" allowfullscreen="" width="100%"></iframe>
</div>