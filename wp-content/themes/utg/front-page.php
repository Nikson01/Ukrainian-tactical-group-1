<?php
/*
Template Name: front-page
*/
get_header();?>

<div class="flex_container">

    <div class='top__slider'>
        <div class="flex_col-desk--3-4 flex_col-tab changed-width">
            <div class="flex_row without-margin top-slider-block">   
                <?php
                    $params = array(
                        'post_type' => 'slider',
                        'posts_per_page' => 10,
                    );
                    $query = new WP_Query( $params );
                    ?>
                    <?php if($query->have_posts()): ?>
                        <?php while ($query->have_posts()): $query->the_post() ?>
                        <?php $image_slider = get_field('image_slider');
                            $title_slider = get_field('title_slider');
                            $description_slider = get_field('description_slider');
                            $link_slider = get_field('link_slider');                              
                        ?>
                        <div class="top__slider-main">
                            <img src="<?php echo $image_slider['url'];?>" alt="">
                            <div class="top__slider-inside">
                                <b><?php echo $title_slider;?></b>
                                <p><?php echo $description_slider;?></p>
                                <a href="<?php echo $link_slider;?>">Подробнее</a>                    
                            </div>
                        </div>  
                        <?php endwhile; ?>
                    <?php endif; 
                ?>
            </div>
        </div>
    </div>

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
    <div class='discount-products'>  
        <div class="discount-products__title">
            <div>
                <h2> Скидки и специальные предложения </h2>
            </div>
            <div>
                <a href="#"> Смотреть все </a>
            </div>
        </div>
        <div class="discount-products_line">
            <div class="flex_row discount-products-gallery without-margin">    
                <?php 
                    echo do_shortcode('[product_category orderby="date" order="desc" category="oruzhie"]');
                ?>
            </div>
        </div>
    </div>

    <div class='discount-products popular_product'>  
        <div class="discount-products__title">
            <div>
                <h2> Популярные товары </h2>
            </div>
            <div>
                <a href="#"> Смотреть все </a>
            </div>
        </div>
        <div class="discount-products_line">
            <div class="flex_row without-margin line-of-products-mob">                        
                <?php 
                    echo do_shortcode('[product_category orderby="date" order="desc" category="oruzhie"]');
                ?>
            </div>
        </div>
    </div>

    <div class='reasons'>
        <div class="flex_row without-margin">
            <div class='flex_col without-padding'>
                <div class='reasons__article'>
                    <h2> Почему  стоит покупать у нас? </h2>
                </div>               
            </div>
        </div>
        <div class='flex_row reasons__blocks without-margin'>
            <?php
            $params = array(
                'post_type' => 'utp',
                'posts_per_page' => 1,
            );
            $query = new WP_Query( $params );
            ?>
            <?php
                while ($query->have_posts()): $query->the_post() ?>
                    <?php 
                        $period_utp = get_field('period_utp');
                        $image_utp = get_field('image_utp');
                        $title_utp = get_field('title_utp');  
                        $link_utp = get_field('link_utp');  
                        $button_utp = get_field('button_utp');  
                    ?>
                    <div class='flex_col-tab flex_col-desk--1-4 without-padding'>
                        <div class='reasons__block-first'>
                            <a href="<?php echo $link_utp;?>">            
                                <img src="<?php echo $image_utp['url'];?>">
                                <div class="reasons__inside-block">                  
                                    <div> 
                                        <span><?php echo $period_utp;?></span>
                                    </div>
                                    <div> 
                                        <span><?php echo $title_utp;?></span>
                                    </div>
                                    <div> 
                                        <span><?php echo $button_utp;?></span>  
                                        <span class="icon-calendar"></span>
                                    </div>
                                </div>
                            </a>                 
                        </div>
                    </div>
                    <?php while ( have_rows('utp_links') ) : the_row(); ?>
                        <?php 
                            $sub_period_utp = get_sub_field('sub_period_utp');
                            $sub_image_utp = get_sub_field('sub_image_utp');
                            $sub_title_utp = get_sub_field('sub_title_utp');   
                        ?>
                        <div class="flex_col-tab flex_col-desk--1-4 without-padding">
                            <div class="reasons__block">
                                <div class='reasons__block-img'>
                                    <img src="<?php echo $sub_image_utp['url']?>">
                                </div>
                                <div>
                                    <span><?php echo $sub_period_utp;?></span>
                                </div>
                                <div>
                                    <span><?php echo $sub_title_utp;?></span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
               
            <?php endwhile; ?>
       

    </div>

    <div class='news__block'>
        <div class='news__block-title'>
            <div>
                <h2> Последние новости из мира оружия </h2>
            </div>
            <div>
                <a href="#"> Все новости </a>
            </div>
        </div>
        <div class='news__block-main'>
            <div class='flex_col-tab flex_col-desk--1-3 without-padding'>
                <div class='news__first'>
                    <h3> Следите за нами в соц. сетях </h3>
                    <div class='news__links'>
                        <a href="<?php the_field('social_fb');?>"> <span class="icon-facebook"></span> </a>
                        <a href="<?php the_field('social_insta');?>"> <span class="icon-instagram"></span> </a>
                        <a href="<?php the_field('social_tw');?>"> <span class="icon-twitter"></span> </a>
                    </div>
                    <img class='news__img' src="/wp-content/themes/utg/images/phone.png">               
                </div>
            </div>
            <div class='flex_col-tab flex_col-desk--2-3 without-padding'>   
                <div class='news__second'>      
                    <?php
                        $params = array(
                            'post_type' => 'blog',
                            'posts_per_page' => 3,
                        );
                        $query = new WP_Query( $params );
                        ?>
                        <?php if($query->have_posts()): ?>
                            <?php while ($query->have_posts()): $query->the_post() ?>
                                <?php $image_blog = get_field('image_blog');
                                    $text_blog = get_field('little_text');
                                ?>
                        
                                <a class='news__second-block' href="<?php echo the_permalink( $post->ID )?>">
                                    <img class="news__second-block-img" src="<?php echo $image_blog['url'];?>" alt="">
                                    <div class='news__second-content'>
                                        <span>статьи</span>
                                        <b><?php the_title();?></b>
                                        <p><?php echo $text_blog;?></p>
                                        <span><?php echo the_date();?></span>                        
                                    </div>
                                </a> 
                            <?php endwhile; ?>
                    <?php endif; ?>
                </div>         
            </div>
        </div>
    </div>

    <div class='reviews-block'>
        <div class='reviews-block__title'>
            <div>
                <h2> Последние отзывы </h2>
            </div>
            <div>
                <a href="/otzyvy"> Все отзывы </a>
            </div>
        </div>
        <div class='reviews-block-main reviews-slick'>
            <?php echo do_shortcode('[testimonial_view id="3"]');?>
        </div>
    </div>

    <div class='seo-text__block'>
        <div class="seo__blocks-container flex_row">
            <div class='flex_col-desk--1-3 flex_col-tab'>
                <div class="seo-text__left">
                    <img src="/wp-content/themes/utg/images/img-10.png" alt="">
                    <div class="seo-text__social">
                        <a target="_blank" href="<?php the_field('social_fb');?>"> <span class="icon-facebook"></span> </a>
                        <a target="_blank" href="<?php the_field('social_insta');?>"> <span class="icon-instagram"></span> </a>
                        <a target="_blank" href="<?php the_field('social_tw');?>"> <span class="icon-twitter"></span> </a>
                    </div>
                </div>
            </div>
            <div class='flex_col-desk--2-3 flex_col-tab'>
                <div class="seo-text__right">
                    <div>
                        <?php the_content();?>
                        <a class='seo-text__right_btn-show'>Развернуть</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer();?>