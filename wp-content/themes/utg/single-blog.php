<?php get_header();?>

<?php $image_blog = get_field('image_blog');
      $text_blog  = get_field('text_blog');?>


<div class="blog-single">
    <div class="flex_container">
        <div class="blog-container">
            <div class="blog-single-img">
                <img src="<?php echo $image_blog['url'];?>" alt="">
            </div>
            <div class="blog-single-in">
                <div class="blog_social">
                    <span class="social-text">Поделитесь статьёй в соц. сетях:</span>
                    <?php echo do_shortcode('[addtoany]');?>
                </div>
                <div class="blog_description">
                    <h1 class="blog-title"><?php the_title();?></h1>
                    <span class="blog_date"><?php echo get_the_date();?></span>
                    <?php echo $text_blog;?>
                    
                </div>
            </div>
        </div>
        

    </div>
</div>


<?php get_footer();?>