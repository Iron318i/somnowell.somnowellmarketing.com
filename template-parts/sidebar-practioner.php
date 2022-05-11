<?php
/**
 * Sidebar Find a practitioner
 *
 * @package somnowell-theme
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="card">
	<?php echo wp_get_attachment_image( 207, 'full', false, array( "class" => 'card-img-to' ) ); ?>
    <div class="card-body">
        <h4 class="card-title">Find a Somnowell practitioner</h4>
        <a href="<?php echo site_url( '/somnowell-practitioners-uk' ) ?>" class="btn btn-primary">Find now</a>
    </div>
</div>