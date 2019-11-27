<?php get_header();?>

<?php $image_action = get_field('image_action');
    $desc_action = get_field('desc_action'); ?>




<div class="actions-single">
    <div class="flex_container">
        <div class="flex_row">
            <div class="flex_col--1-2">
                <div class="actions-single--image">
                    <img src="<?php echo $image_action['url'];?>" alt="">
                </div>
            </div>
            <div class="flex_col--1-2">
                <div class="actions-single--description">
                    <h1 class="single-title"><?php the_title();?></h1>
                    


                    
                    <?php while ( have_rows('period') ) : the_row(); ?>
                        <span class="period_data">
	                        <?php the_sub_field('begin_period') ?>
                            -
	                        <?php the_sub_field('end_period') ?>
                        </span>
	                <?php endwhile; ?>
             




                    <?php echo $desc_action;?>
                </div>
            </div>
        </div>

        <div class="products_action">
        <?php 

            $posts = get_field('relationship_field_name');

            if( $posts ): 
               foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
                    <a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a>
                <?php endforeach;
            endif; ?>
        </div>

    </div>
</div>








<?php get_footer();?>