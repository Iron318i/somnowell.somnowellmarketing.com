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
							get_template_part( 'loop-templates/content', 'single' );
						}
						echo do_shortcode( '[banner_speak demo_text="" demo_textarea="" _fw_coder="aggressive" __fw_editor_shortcodes_id="035cb08cd5707b129055c676a3fdb4c5"][/banner_speak]' );
						echo do_shortcode( '[testimonials testimonials="‹º›{‹²›author_name‹²›:‹²›Somnowell Inventor - Visiting Professor Simon Ash FDS MSc MOrth BDS‹²›,‹²›content‹²›:‹²›‹¨›p‹˜›Prof. Ash is the inventor of the highly successful SOMNOWELL Chrome device for snoring and sleep apnoea.‹¨›/p‹˜›‹¨›p‹˜›The Somnowell Chrome is made to exacting standards in the Somnowell laboratory under the supervision of Visiting Professor Simon Ash. Prof. Ash and his master technicians create each Somnowell Chrome device using their wealth of experience and expertise.‹¨›/p‹˜›‹¨›p‹˜›Prof. Ash works at the forefront of his profession. He is a Consultant and Specialist Orthodontist with over 30 years clinical experience, with a special interest in sleep related breathing disorders, TMJD, and bruxism. He currently works in Harley Street London and two private hospitals in London as part of a multi-disciplinary team managing snoring and sleep apnoea, and is Visiting Professor of Orthodontics at the BPP University.‹¨›/p‹˜›‹²›,‹²›author_avatar‹²›:{‹²›attachment_id‹²›:‹²›4985‹²›,‹²›url‹²›:‹²›/wp-content/uploads/2022/05/dr-simon-249x218-1.jpg‹²›}}‹¹›" _array_keys="{‹²›testimonials‹²›:‹²›testimonials‹²›}" _fw_coder="aggressive" __fw_editor_shortcodes_id="2c5243a111b438101ede6d153e29f72a"][/testimonials]' );
						echo do_shortcode( '[banners_take_find demo_text="" demo_textarea="" _fw_coder="aggressive" __fw_editor_shortcodes_id="fb81bad9251ee77e3201fe9dd1dcd195"][/banners_take_find]' );
						echo do_shortcode( '[recommended_by heading="The Somnowell mandibular advancement appliance is also recommended by:" list="‹º›‹²›Sleep Centres‹²›,‹²›ENT Surgeons, Sleep Physicians, Respiratory, Physicians‹²›,‹²›Orthodontists, Dentists‹²›,‹²›General Medical Practitioners‹²›‹¹›" _array_keys="{‹²›list‹²›:‹²›list‹²›}" _fw_coder="aggressive" __fw_editor_shortcodes_id="37c86525a1b15845aba7a392902ae317"][/recommended_by]' );
						?>
                    </div>
                </div>
                <div class="col-auto sidebar">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'blog',
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