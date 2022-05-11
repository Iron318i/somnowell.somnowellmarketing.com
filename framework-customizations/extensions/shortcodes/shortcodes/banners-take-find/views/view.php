<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="row mb-1">
    <div class="col-sm-6">
        <div class="banner-small test">
            <h4>Take the<br> Somnowell<br> Suitability test</h4>
            <a href="<?php the_permalink( 133 ); ?>" class="btn btn-sm btn-primary">Start now</a>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="banner-small find">
            <h4>Find a<br> Somnowell<br> practitioner</h4>
            <a href="<?php echo site_url( '/somnowell-practitioners-uk' ) ?>" class="btn btn-sm btn-info">Find now</a>
        </div>
    </div>
</div>