<?php get_header();?>





<div class="flex_container">

    <div class="actions">
        <div class="flex_row">
            
        
            <?php
                $params = array(
                    'post_type' => 'actions',
                    'posts_per_page' => 3,
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                        <?php while ($query->have_posts()): $query->the_post() ?>
                        <?php $image_action = get_field('image_action');
                            $desc_action = get_field('desc_action ');
                                                        
                        ?>
                        <div class="flex_col--1-3">
                            <a class="actions_link" href="<?=the_permalink( $post->ID )?>">
                                <img src="<?php echo $image_action['url'];?>" alt="">
                            </a>

                        


                        </div>
                        <?php endwhile; ?>
                <?php endif; ?>
        </div>
    </div>
    
</div>







<?php get_footer();?>