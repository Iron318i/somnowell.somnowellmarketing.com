<?php
/**
 * The Template for displaying practitioners product archives
 *
 * @package WooCommerce\Templates
 * @version 3.4.0
 */
?>
    <h1 class="woocommerce-products-header__title page-title">Practitioners</h1>
<?php
defined( 'ABSPATH' ) || exit;

$taxonomy     = 'product_cat';
$orderby      = 'name';
$order        = 'ASC';
$show_count   = 0; // 1 for yes, 0 for no
$pad_counts   = 0; // 1 for yes, 0 for no
$hierarchical = 1; // 1 for yes, 0 for no
$title        = '';
$empty        = 0;

$args = array(
	'taxonomy'     => $taxonomy,
	'orderby'      => $orderby,
	'order'        => $order,
	'show_count'   => $show_count,
	'pad_counts'   => $pad_counts,
	'hierarchical' => $hierarchical,
	'title_li'     => $title,
	'hide_empty'   => $empty,
	'parent'       => 37
);

$all_categories = get_categories( $args );
foreach ( $all_categories as $cat ) {
	$category_id = $cat->term_id;
	$args2       = array( 'taxonomy' => $taxonomy, 'parent' => $category_id, 'hierarchical' => $hierarchical, 'hide_empty' => $empty );
	$categories  = get_categories( $args2 );

	echo "<div class='category'><h3>" . $cat->name . "</h3>";
	$args = array( 'post_type' => 'product', 'product_cat' => $cat->slug, 'posts_per_page' => - 1 );
	$loop = new WP_Query( $args );
	echo "<ul class='practitioners-products nav flex-column mb-1'>";
	while ( $loop->have_posts() ) : $loop->the_post();
		global $product; ?>
        <li>
            <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr( $loop->post->post_title ? $loop->post->post_title : $loop->post->ID ); ?>">
				<?php the_title(); ?> - <?php echo $product->get_price_html(); ?>
            </a></li>
	<?php endwhile; ?>
    </ul></li></ul>
	<?php wp_reset_query();
	echo "</div>";
}
?>