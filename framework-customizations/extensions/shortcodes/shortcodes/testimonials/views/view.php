<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<div class="testimonials">
	<?php foreach ( fw_akg( 'testimonials', $atts, array() ) as $testimonial ): ?>
		<?php if ( ! empty( $testimonial['author_avatar'] ) ): ?>
            <div class="testimonial-full">
                <div class="info-heading">
                    <h5 class="title">
                        <svg class="icon">
                            <use xlink:href="#quote"></use>
                        </svg>
						<?php echo $testimonial['author_name']; ?>
                    </h5>
                </div>
                <div class="row gx-1">
                    <div class="col-3 avatar">
						<?php echo wp_get_attachment_image( $testimonial['author_avatar']["attachment_id"], 'avatar', true, array( "class" => "img-fluid" ) ); ?>
                    </div>
                    <div class="col-9 content fst-italic">
						<?php echo $testimonial['content']; ?>
                    </div>
                </div>
            </div>
		<?php else: ?>
            <div class="testimonial-small">
                <div class="row g-0">
                    <div class="col-2 icon-wrp">
                        <svg class="icon">
                            <use xlink:href="#quote"></use>
                        </svg>
                    </div>
                    <div class="col-10 content">
                        <h5 class="author-name">
							<?php echo $testimonial['author_name']; ?>
                        </h5>
                        <div class="fst-italic">
							<?php echo $testimonial['content']; ?>
                        </div>
                    </div>
                </div>
            </div>
		<?php endif; ?>
	<?php endforeach; ?>
</div>

