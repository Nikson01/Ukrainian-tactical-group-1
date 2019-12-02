<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce/Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $product;


?>

<div class="flex_row flex_characteristic">
    <div class="flex_characteristic-list">
        <?php
            echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' );
            the_title( '<h1 class="product_title entry-title">', '</h1>' );
        ?>
        <table class="attribute" cellspacing="0">
            <tbody>
                <?php while ( have_rows('characteristics_weapon') ) : the_row(); ?>
                    <tr>
                        <td class="name-price"><?php the_sub_field('title_weapon') ?></td>
                        <td><?php the_sub_field('about_weapon') ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php
            if ( ! wc_review_ratings_enabled() ) {
                return;
            }
            $rating_count = $product->get_rating_count();
            $review_count = $product->get_review_count();
            $average      = $product->get_average_rating();
            if ( $rating_count > 0 ) : ?>
                <div class="woocommerce-product-rating">
                    <?php echo wc_get_rating_html( $average, $rating_count ); // WPCS: XSS ok. ?>
                    <?php if ( comments_open() ) : ?>
                        <?php //phpcs:disable ?>
                            <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<?php printf( _n( '%s customer review', '%s customer reviews', $review_count, 'woocommerce' ), '<span class="count">' . esc_html( $review_count ) . '</span>' ); ?>)</a>
                        <?php // phpcs:enable ?>
                    <?php endif ?>
                </div>
                </div>
            <?php endif; 
        ?>
    </div>



<div class="flex_buy_button">

    <div class="product_meta">
        <?php do_action( 'woocommerce_product_meta_start' ); ?>
        <?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
            <span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>
        <?php endif; ?>
        <?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>
        <?php do_action( 'woocommerce_product_meta_end' ); ?>
    </div>