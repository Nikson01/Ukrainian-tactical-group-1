<?php
/*
Template Name: Reviews
*/
get_header();?>




<div class="reviews-page">
    <div class="flex_container">
        <div class="flex_row">
            <div class="flex_col--1-2">
                <div class="reviews-all">
                    <?php echo do_shortcode('[testimonial_view id="1"]'); ?>
                </div>
            </div>
            <div class="flex_col--1-2">
                <div class="reviews-back">
                    <h1>Оставьте отзыв</h1>
                    <?php echo do_shortcode('[testimonial_view id="2"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();?>