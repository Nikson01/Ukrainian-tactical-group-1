<?php
/**
 * Template Name: Large Widget
 * Description: A big bold widget template. Great for slideshows with excerpts and featured images. Try a solid background color.
 * Force: view-layout-normal
 */
?>
<?php do_action( 'wpmtst_before_view' ); ?>

    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="<?php wpmtst_post_class(); ?> flex_col--1-3">
        <div class="reviews-inside-block">
            <div>
                <span><?php wpmtst_field('client_name'); ?></span>
                <div>
                    <?php wpmtst_star_rating_display( wpmtst_get_field('rating'), 'in-view', true ); ?>
                </div>
            </div>
            <div>
                <span><?php wpmtst_field('city'); ?></span>
                <span><?php the_date(); ?></span>
            </div>
            <div>
                <span>
                    <?php wpmtst_the_content(); ?>
                    <?php do_action( 'wpmtst_after_testimonial_content' ); ?>
                </span>
            </div>
        </div>
    </div>
    <?php endwhile; ?>

<?php do_action( 'wpmtst_after_view' ); ?>
