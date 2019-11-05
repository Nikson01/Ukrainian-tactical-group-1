<?php
/*
Template Name: blog
*/

get_header();?>

<div class="blog-page">
    <div class="flex_container">
        <div class="flex_row">
            <?php
                $params = array(
                    'post_type' => 'blog',
                    'posts_per_page' => -1,
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                    <?php while ($query->have_posts()): $query->the_post() ?>
                        <?php $image_blog = get_field('image_blog');
                            $text_blog = get_field('little_text');
                        ?>
                    <div class="flex_col--1-3">
                        <a class="blog-page_link" href="<?php echo the_permalink( $post->ID )?>">
                            <img src="<?php echo $image_blog['url'];?>" alt="">
                            <div class="blog-page_text">
                                <b><?php the_title();?></b>
                                <div class="blog-page_desc">
                                   <p><?php echo $text_blog;?></p>
                                </div>
                                <span class="blog-page_date"><?php echo the_date();?></span>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer();?>