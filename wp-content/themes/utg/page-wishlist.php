<?php
/*
Template Name: wishlist
*/

get_header();?>


<div class="flex_container">
    <?php
        echo do_shortcode('[ti_wishlistsview]');
    ?>
</div>

<?php get_footer();?>