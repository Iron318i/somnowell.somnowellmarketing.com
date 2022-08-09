<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<div class="lp-testimonials">
	<?php foreach ( fw_akg( 'testimonials', $atts, array() ) as $testimonial ): ?>
        <div class="lp-testimonial row">
            <div class="col-md-4">
				<?php echo wp_get_attachment_image( $testimonial['author_avatar']["attachment_id"], array( 330, 256 ), true, array( "class" => "img-fluid" ) ); ?>
            </div>
            <div class="col-md-8">
                <h3 class="title">
                    <strong><?php echo $testimonial['author_heading']; ?></strong> - <?php echo $testimonial['author_name']; ?>
                </h3>
                <div class="quote">
					<?php echo $testimonial['content']; ?>
                </div>
            </div>
        </div>
	<?php endforeach; ?>
</div>

