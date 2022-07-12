<?php
/**
 * The template for displaying all single posts
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
    <div id="content" tabindex="-1">
        <div class="container pt-1 pb-3" id="post-<?php the_ID(); ?>">
            <div class="row wrapper flex-md-row-reverse">
                <div class="col-auto main-content">
                    <div class="entry-content">
						<?php
						while ( have_posts() ) {
							the_post();
							?>
                            <h1 class="text-uppercase">Contact Form for <?php the_title(); ?></h1>
                            <p class="fsz-24">Please use the online form below to contact this Somnowell Practitioner.</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-1">
										<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
                                    </div>

									<?php foreach ( fw_get_db_post_option( $post->ID, 'persons' ) as $person ) { ?>
                                        <div><strong class="text-info"><?php echo $person['name'] ?></strong></div>
                                        <p>
											<?php if ( isset( $person['badges']["partner"] ) ) { ?>
                                                <span class="badge partner">Partner</span>
											<?php } ?>
											<?php if ( isset( $person['badges']["certified"] ) ) { ?>
                                                <span class="badge certified">Certified</span>
											<?php } ?>
											<?php if ( isset( $person['badges']["bronze"] ) ) { ?>
                                                <span class="badge bronze">Bronze</span>
											<?php } ?>
											<?php if ( isset( $person['badges']["silver"] ) ) { ?>
                                                <span class="badge silver">Silver</span>
											<?php } ?>
											<?php if ( isset( $person['badges']["gold"] ) ) { ?>
                                                <span class="badge gold">Gold</span>
											<?php } ?>
											<?php if ( isset( $person['badges']["platinum"] ) ) { ?>
                                                <span class="badge platinum">Platinum</span>
											<?php } ?>
											<?php if ( isset( $person['badges']["finance"] ) ) { ?>
                                                <span class="badge finance">Finance</span>
											<?php } ?>
											<?php if ( isset( $person['badges']["fullrange"] ) ) { ?>
                                                <span class="badge fullrange">Full range</span>
											<?php } ?>
                                        </p>
										<?php if ( $person['specification'] != '' ) { ?>
                                            <p><?php echo $person['specification'] ?></p>
										<?php } ?>
									<?php } ?>
                                </div>
                                <div class="col-sm-6">
									<?php if ( fw_get_db_post_option( $post->ID, 'pricing' ) != '' ) { ?>
                                        <p><strong class="text-info">Pricing</strong></p>
										<?php echo fw_get_db_post_option( $post->ID, 'pricing' ) ?>
									<?php } ?>
                                    <p><strong class="text-info">Address and Contact Details </strong></p>
									<?php echo fw_get_db_post_option( $post->ID, 'contact_details' ) ?>
									<?php if ( fw_get_db_post_option( $post->ID, 'add_text' ) != '' ) { ?>
                                        <p class="add_text"><?php echo fw_get_db_post_option( $post->ID, 'add_text' ) ?></p>
									<?php } ?>
                                </div>
                            </div>
                            <div class="practioner-content">
								<?php the_content(); ?>
                            </div>
							<?php
						}
						if ( isset( fw_get_db_post_option( $post->ID, 'persons' )[0]['badges']["platinum"] ) ) {
							echo do_shortcode( '[contact-form-7 id="6113" title="Platinum Practioner Contact Form_copy"]' );
						} else {
							echo do_shortcode( '[contact-form-7 id="5056" title="Practioner Contact Form"]' );
						}
						echo do_shortcode( '[recommended_by heading="The Somnowell mandibular advancement appliance is also recommended by:" list="‹º›‹²›Sleep Centres‹²›,‹²›ENT Surgeons, Sleep Physicians, Respiratory, Physicians‹²›,‹²›Orthodontists, Dentists‹²›,‹²›General Medical Practitioners‹²›‹¹›" _array_keys="{‹²›list‹²›:‹²›list‹²›}" _fw_coder="aggressive" __fw_editor_shortcodes_id="37c86525a1b15845aba7a392902ae317"][/recommended_by]' );
						?>
                    </div>
                </div>
                <div class="col-auto sidebar">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'for-patients',
							'menu_class'     => 'nav flex-column mb-lg-3',
						)
					);
					get_template_part( 'template-parts/sidebar', 'call' );
					get_template_part( 'template-parts/sidebar', 'practioner' );
					?>
                </div>
            </div>
        </div>

    </div><!-- #content -->
<?php get_footer(); ?>