<?php get_header(); ?>

<?php $image_action = get_field('image_action');
    $desc_action = get_field('desc_action'); ?>








<div class="flex_container">
    <img src="<?php echo $image_action['url'];?>" alt="">
    <?php echo $desc_action;?>
</div>












<?php get_footer();?>