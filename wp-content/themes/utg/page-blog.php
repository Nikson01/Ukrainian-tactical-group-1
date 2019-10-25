<?php
/*
Template Name: Blog
*/

get_header();?>

<div class="blog">
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
                        <a class="blog_link" href="<?php echo the_permalink( $post->ID )?>">
                            <img src="<?php echo $image_blog['url'];?>" alt="">
                            <div class="blog_text">
                                <b><?php the_title();?></b>
                                <div class="blog_desc">
                                   <p><?php echo $text_blog;?></p>
                                </div>
                                <span class="blog_date"><?php echo the_date();?></span>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer();?>