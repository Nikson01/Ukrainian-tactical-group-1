<?php get_header();?>


    
        



<div class="flex_container">

<div class='reasons'>
    <div class="flex_row">
        <div class='flex_col'>
            <div class='reasons__article'>
                <h2> Почему  стоит покупать у нас? </h2>
            </div>               
        </div>
    </div>
    <div class='flex_row'>
        <div class='flex_col--1-4'>
            <div class='reasons__block-first'>
                <img src="/../wp-content/themes/utg/images/Path_3491.png">
                <img src="/../wp-content/themes/utg/images/Path_111.png">
                <div class='reasons__block-first-inside'>
                    <div> 
                        <span> 5 </span>   
                        <span> Лет </span>             
                    </div>
                    <div> 
                        <span> Занимаемся продажей оружия </span>
                    </div>
                    <div> 
                        <a href="#"> Подробнее о компании </a>
                    </div>
                </div>
            </div>
        </div>
        <div class='flex_col--1-4'>
            <div class='reasons__block'>
                <div class='reasons__block-img'>
                    <img src="/wp-content/themes/utg/images/Vehicle.png">
                </div>
                <div>
                    <span> 5 лет </span>
                </div>
                <div>
                    <span> Занимаемся продажей оружия </span>
                </div>
            </div>
        </div>
        <div class='flex_col--1-4'>
            <div class='reasons__block'>
                <div class='reasons__block-img'>
                    <img src="/wp-content/themes/utg/images/Vehicle.png">
                </div>
                <div>
                    <span> 5 лет </span>
                </div>
                <div>
                    <span> Занимаемся продажей оружия </span>
                </div>
            </div>
        </div>
        <div class='flex_col--1-4'>
            <div class='reasons__block'>
                <div class='reasons__block-img'>
                    <img src="/wp-content/themes/utg/images/Vehicle.png">
                </div>
                <div>
                    <span> 5 лет </span>
                </div>
                <div>
                    <span> Занимаемся продажей оружия </span>
                </div>
            </div>
        </div>
    </div>
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
        <div class='flex_col--1-3'>
            <div class='news__first'>
                <h3> Следите за нами в соц. сетях </h3>
                <div class='news__links'>
                    <a href="#"> <span class="icon-facebook"></span> </a>
                    <a href="#"> <span class="icon-instagram"></span> </a>
                    <a href="#"> <span class="icon-twitter"></span> </a>
                </div>
                <div class='news__img'>
                    <img src="/wp-content/themes/utg/images/phone.png">
                </div>
            </div>
        </div>
        <div class='flex_col--1-3'>
            <div class='news__second'>
                <div class='news__second-blocks'>
                    <a href="#"> Статьи </a>
                    <h4> Как правильно настроить оптический прицел? </h4>
                    <span> 17.02.2019 </span>
                </div>
                <div class='news__second-blocks'>
                    <a href="#"> Статьи </a>
                    <h4> Как правильно настроить оптический прицел? </h4>
                    <span> 17.02.2019 </span>
                </div>
            </div>            
        </div>
        <div class='flex_col--1-3'>
            <div class='news__third'>
                sdfs
            </div>
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
    
</div>







<?php get_footer();?>