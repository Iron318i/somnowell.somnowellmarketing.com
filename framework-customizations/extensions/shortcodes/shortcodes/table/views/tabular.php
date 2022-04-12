<?php if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<?php
/*
 * you may add the following classes to the `.fw-table` div:
 * `fw-table-bordered`, `fw-table-hover`, `fw-table-striped`
 */
?>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <?php foreach ($atts['table']['rows'] as $row_key => $row) : ?>
            <?php if ($row['name'] == 'heading-row') : ?>
                <thead>
                <tr>
                    <?php foreach ($atts['table']['cols'] as $col_key => $col) : ?>
                        <th class="fsz-22">
                            <strong><?php echo $atts['table']['content'][$row_key][$col_key]['textarea']; ?></strong>
                        </th>
                    <?php endforeach; ?>
                </tr>
                </thead>
            <?php elseif ($row['name'] == 'default-row') : ?>
                <tr>
                    <?php foreach ($atts['table']['cols'] as $col_key => $col) : ?>
                        <td><span><?php echo $atts['table']['content'][$row_key][$col_key]['textarea']; ?></span></td>
                    <?php endforeach; ?>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    </table>
</div>