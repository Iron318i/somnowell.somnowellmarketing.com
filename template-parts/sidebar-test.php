<?php
/**
 * Sidebar Test
 *
 * @package somnowell-theme
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="card">
	<?php echo wp_get_attachment_image( 130, 'full', false, array( "class" => 'card-img-to' ) ); ?>
    <div class="card-body">
        <h4 class="card-title text-uppercase">Take the Somnowell Suitability test </h4>
        <a href="<?php the_permalink( 133 ); ?>" class="btn btn-primary">Start now</a>
    </div>
</div>