<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="recommended-by mb-1">
    <h2><?php echo $atts['heading'] ?></h2>
    <ul class="styled two-cols">
		<?php foreach ( $atts['list'] as $value ) { ?>
            <li><?php echo $value ?></li>
		<?php } ?>
    </ul>
    <div class="row">
        <div class="col-lg-auto">
            <h6 class="mb-lg-0">Recommended By:</h6>
        </div>
        <div class="col-lg-auto">
            <img src="<?php echo get_template_directory_uri() ?>/img/recommended-by-img.jpg" alt="Recommended By">
        </div>
    </div>
</div>
