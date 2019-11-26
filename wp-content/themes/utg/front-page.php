<?php get_header();?>


    
        



<div class="flex_container">

<div class='top__slider'>
    <div class="flex_col-desk--3-4 flex_col-tab changed-width">
        <div class="flex_row without-margin top-slider-block">           
            <div class="top__slider-main " >
                <img src="/wp-content/themes/utg/images/Beretta.png" alt="">
                <div class="top__slider-inside">
                    <b>Новая коллекция оружия</b>
                    <p>«Равным образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.»</p>
                    <a href="#">Подробнее</a>                    
                </div>
            </div>  
            <div class="top__slider-main " >
                <img src="/wp-content/themes/utg/images/Beretta.png" alt="">
                <div class="top__slider-inside">
                    <b>Новая коллекция оружия</b>
                    <p>«Равным образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.»</p>
                    <a href="#">Подробнее</a>
                </div>
            </div>   
            <div class="top__slider-main " >
                <img src="/wp-content/themes/utg/images/Beretta.png" alt="">
                <div class="top__slider-inside">
                    <b>Новая коллекция оружия</b>
                    <p>«Равным образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.»</p>
                    <a href="#">Подробнее</a>
                </div>
            </div>   
            <div class="top__slider-main " >
                <img src="/wp-content/themes/utg/images/Beretta.png" alt="">
                <div class="top__slider-inside">
                    <b>Новая коллекция оружия</b>
                    <p>«Равным образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.»</p>
                    <a href="#">Подробнее</a>
                </div>
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


            <!-- <div class="flex_col-desk--1-4 flex_col-tab without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span class='icon-favorites-star'></span>
                        </div>
                        <div class="discount-img">
                            <img src="/wp-content/themes/utg/images/shotgun_png14.png" alt="">
                        </div>
                        <div class="discount-category">
                            <span>Гладкоствольное оружие</span>
                        </div>
                        <div class="discount-name">
                            <span>Ружье Hatsan Escort Xtreme Dark Grey SVP кал. 12/76. Ствол - 76 см</span>
                        </div>
                        <div class="discount-rate">
                            <div>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                            </div>
                            <span>10 отзывов</span>
                        </div>
                        <div class="discount-code">
                            <span>Код: 144800375412</span>
                        </div>
                        <div class="discount-price">
                            <div class="discount-price__first-block">
                                <span class='discount-old_price'><strike>1400</strike></span>
                                <span class='discount-new_price'>1032 <span>₴</span> </span>
                            </div>
                            <div class="discount-price__second-block">
                                <button> Купить</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>-->
            <div class="flex_col-desk--1-4 flex_col-tab without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span class='icon-favorites-star'></span>
                        </div>
                        <div class="discount-img">
                            <img src="/wp-content/themes/utg/images/shotgun_png14.png" alt="">
                        </div>
                        <div class="discount-category">
                            <span>Гладкоствольное оружие</span>
                        </div>
                        <div class="discount-name">
                            <span>Ружье Hatsan Escort Xtreme Dark Grey SVP кал. 12/76. Ствол - 76 см</span>
                        </div>
                        <div class="discount-rate">
                            <div>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                            </div>
                            <span>10 отзывов</span>
                        </div>
                        <div class="discount-code">
                            <span>Код: 144800375412</span>
                        </div>
                        <div class="discount-price">
                            <div class="discount-price__first-block">
                                <span class='discount-old_price'><strike>1400</strike></span>
                                <span class='discount-new_price'>1032 <span>₴</span> </span>
                            </div>
                            <div class="discount-price__second-block">
                                <button> Купить</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 



            <?php 
                echo do_shortcode('[product_category orderby="date" order="desc" category="oruzhie"]');
            ?>


        </div>
    </div>
</div>

<div class='discount-products'>  
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
            <div class="flex_col-desk--1-4 flex_col-tab--1-2 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span class='icon-favorites-star'></span>
                        </div>
                        <div class="discount-img">
                            <img src="/wp-content/themes/utg/images/shotgun_png14.png" alt="">
                        </div>
                        <div class="discount-category">
                            <span>Гладкоствольное оружие</span>
                        </div>
                        <div class="discount-name">
                            <span>Ружье Hatsan Escort Xtreme Dark Grey SVP кал. 12/76. Ствол - 76 см</span>
                        </div>
                        <div class="discount-rate">
                            <div>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                            </div>
                            <span>10 отзывов</span>
                        </div>
                        <div class="discount-code">
                            <span>Код: 144800375412</span>
                        </div>
                        <div class="discount-price">
                            <div class="discount-price__first-block">
                                <span class='discount-old_price'><strike>1400</strike></span>
                                <span class='discount-new_price'>1032 <span>₴</span> </span>
                            </div>
                            <div class="discount-price__second-block">
                                <button> Купить</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex_col-desk--1-4 flex_col-tab--1-2 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span class='icon-favorites-star'></span>
                        </div>
                        <div class="discount-img">
                            <img src="/wp-content/themes/utg/images/shotgun_png14.png" alt="">
                        </div>
                        <div class="discount-category">
                            <span>Гладкоствольное оружие</span>
                        </div>
                        <div class="discount-name">
                            <span>Ружье Hatsan Escort Xtreme Dark Grey SVP кал. 12/76. Ствол - 76 см</span>
                        </div>
                        <div class="discount-rate">
                            <div>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                            </div>
                            <span>10 отзывов</span>
                        </div>
                        <div class="discount-code">
                            <span>Код: 144800375412</span>
                        </div>
                        <div class="discount-price">
                            <div class="discount-price__first-block">
                                <span class='discount-old_price'><strike>1400</strike></span>
                                <span class='discount-new_price'>1032 <span>₴</span> </span>
                            </div>
                            <div class="discount-price__second-block">
                                <button> Купить</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex_col-desk--1-4 flex_col-tab--1-2 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span class='icon-favorites-star'></span>
                        </div>
                        <div class="discount-img">
                            <img src="/wp-content/themes/utg/images/shotgun_png14.png" alt="">
                        </div>
                        <div class="discount-category">
                            <span>Гладкоствольное оружие</span>
                        </div>
                        <div class="discount-name">
                            <span>Ружье Hatsan Escort Xtreme Dark Grey SVP кал. 12/76. Ствол - 76 см</span>
                        </div>
                        <div class="discount-rate">
                            <div>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                            </div>
                            <span>10 отзывов</span>
                        </div>
                        <div class="discount-code">
                            <span>Код: 144800375412</span>
                        </div>
                        <div class="discount-price">
                            <div class="discount-price__first-block">
                                <span class='discount-old_price'><strike>1400</strike></span>
                                <span class='discount-new_price'>1032 <span>₴</span> </span>
                            </div>
                            <div class="discount-price__second-block">
                                <button> Купить</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex_col-desk--1-4 flex_col-tab--1-2 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span class='icon-favorites-star'></span>
                        </div>
                        <div class="discount-img">
                            <img src="/wp-content/themes/utg/images/shotgun_png14.png" alt="">
                        </div>
                        <div class="discount-category">
                            <span>Гладкоствольное оружие</span>
                        </div>
                        <div class="discount-name">
                            <span>Ружье Hatsan Escort Xtreme Dark Grey SVP кал. 12/76. Ствол - 76 см</span>
                        </div>
                        <div class="discount-rate">
                            <div>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                            </div>
                            <span>10 отзывов</span>
                        </div>
                        <div class="discount-code">
                            <span>Код: 144800375412</span>
                        </div>
                        <div class="discount-price">
                            <div class="discount-price__first-block">
                                <span class='discount-old_price'><strike>1400</strike></span>
                                <span class='discount-new_price'>1032 <span>₴</span> </span>
                            </div>
                            <div class="discount-price__second-block">
                                <button> Купить</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="discount-products_line">
        <div class="flex_row without-margin line-of-products-mob">                        
            <div class="flex_col-desk--1-4 flex_col-tab--1-2 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span class='icon-favorites-star'></span>
                        </div>
                        <div class="discount-img">
                            <img src="/wp-content/themes/utg/images/shotgun_png14.png" alt="">
                        </div>
                        <div class="discount-category">
                            <span>Гладкоствольное оружие</span>
                        </div>
                        <div class="discount-name">
                            <span>Ружье Hatsan Escort Xtreme Dark Grey SVP кал. 12/76. Ствол - 76 см</span>
                        </div>
                        <div class="discount-rate">
                            <div>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                            </div>
                            <span>10 отзывов</span>
                        </div>
                        <div class="discount-code">
                            <span>Код: 144800375412</span>
                        </div>
                        <div class="discount-price">
                            <div class="discount-price__first-block">
                                <span class='discount-old_price'><strike>1400</strike></span>
                                <span class='discount-new_price'>1032 <span>₴</span> </span>
                            </div>
                            <div class="discount-price__second-block">
                                <button> Купить</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex_col-desk--1-4 flex_col-tab--1-2 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span class='icon-favorites-star'></span>
                        </div>
                        <div class="discount-img">
                            <img src="/wp-content/themes/utg/images/shotgun_png14.png" alt="">
                        </div>
                        <div class="discount-category">
                            <span>Гладкоствольное оружие</span>
                        </div>
                        <div class="discount-name">
                            <span>Ружье Hatsan Escort Xtreme Dark Grey SVP кал. 12/76. Ствол - 76 см</span>
                        </div>
                        <div class="discount-rate">
                            <div>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                            </div>
                            <span>10 отзывов</span>
                        </div>
                        <div class="discount-code">
                            <span>Код: 144800375412</span>
                        </div>
                        <div class="discount-price">
                            <div class="discount-price__first-block">
                                <span class='discount-old_price'><strike>1400</strike></span>
                                <span class='discount-new_price'>1032 <span>₴</span> </span>
                            </div>
                            <div class="discount-price__second-block">
                                <button> Купить</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex_col-desk--1-4 flex_col-tab--1-2 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span class='icon-favorites-star'></span>
                        </div>
                        <div class="discount-img">
                            <img src="/wp-content/themes/utg/images/shotgun_png14.png" alt="">
                        </div>
                        <div class="discount-category">
                            <span>Гладкоствольное оружие</span>
                        </div>
                        <div class="discount-name">
                            <span>Ружье Hatsan Escort Xtreme Dark Grey SVP кал. 12/76. Ствол - 76 см</span>
                        </div>
                        <div class="discount-rate">
                            <div>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                            </div>
                            <span>10 отзывов</span>
                        </div>
                        <div class="discount-code">
                            <span>Код: 144800375412</span>
                        </div>
                        <div class="discount-price">
                            <div class="discount-price__first-block">
                                <span class='discount-old_price'><strike>1400</strike></span>
                                <span class='discount-new_price'>1032 <span>₴</span> </span>
                            </div>
                            <div class="discount-price__second-block">
                                <button> Купить</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex_col-desk--1-4 flex_col-tab--1-2 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span class='icon-favorites-star'></span>
                        </div>
                        <div class="discount-img">
                            <img src="/wp-content/themes/utg/images/shotgun_png14.png" alt="">
                        </div>
                        <div class="discount-category">
                            <span>Гладкоствольное оружие</span>
                        </div>
                        <div class="discount-name">
                            <span>Ружье Hatsan Escort Xtreme Dark Grey SVP кал. 12/76. Ствол - 76 см</span>
                        </div>
                        <div class="discount-rate">
                            <div>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                                <span class='icon-star-product'></span>
                            </div>
                            <span>10 отзывов</span>
                        </div>
                        <div class="discount-code">
                            <span>Код: 144800375412</span>
                        </div>
                        <div class="discount-price">
                            <div class="discount-price__first-block">
                                <span class='discount-old_price'><strike>1400</strike></span>
                                <span class='discount-new_price'>1032 <span>₴</span> </span>
                            </div>
                            <div class="discount-price__second-block">
                                <button> Купить</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
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
                    <a href="#"> <span class="icon-facebook"></span> </a>
                    <a href="#"> <span class="icon-instagram"></span> </a>
                    <a href="#"> <span class="icon-twitter"></span> </a>
                </div>
                <img class='news__img' src="/wp-content/themes/utg/images/phone.png">               
            </div>
        </div>
        <div class='flex_col-tab flex_col-desk--1-3 without-padding'>   
            <div class='news__second'>      
                <a class='news__second-block' href="#">
                    <img class="news__second-block-img" src="/wp-content/themes/utg/images/gun_background.png" alt="">
                    <div class='news__second-content'>
                        <span>статьи</span>
                        <b>Как правильно настроить оптический прицел?</b>
                        <span>17.02.2019</span>
                    </div>
                </a> 
                <a class='news__second-block' href="#">
                    <img class="news__second-block-img" src="/wp-content/themes/utg/images/gun_background.png" alt="">
                    <div class='news__second-content'>
                        <span>статьи</span>
                        <b>Как правильно настроить оптический прицел?</b>
                        <span class='icon-calendar'> 17.02.2019</span>                        
                    </div>
                </a>     
            </div>         
        </div>
       
        <div class='flex_col-tab flex_col-desk--1-3 without-padding'>          
            <a href="#" class='news__third'>  
                <img class="news__third-block-img" src="/wp-content/themes/utg/images/News-img-last.png" alt="">
                <div class='news__third-content'>
                    <span>статьи</span>
                    <b>Как правильно настроить оптический прицел?</b>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                    <span class='icon-calendar'> 17.02.2019</span> 
                </div>
            </a>          
        </div> 
    </div>
</div>

<div class='reviews-block'>
    <div class='reviews-block__title'>
        <div>
            <h2> Последние отзывы </h2>
        </div>
        <div>
            <a href="#"> Все отзывы </a>
        </div>
    </div>
    <div class='reviews-block-main reviews-slick'>
        <div class='flex_col--1-3'>
            <div class='reviews-inside-block'>
                <div>
                    <span> Игорь Корнелюк </span>
                    <div>
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                    </div>
                </div>
                <div>
                    <span> г. Киев </span>
                    <span> 03.09.2019 </span>
                </div>
                <div>
                    <span>
                        <p> «Равным образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.» </p>
                    </span>
                </div>
            </div>
        </div>
        <div class='flex_col--1-3'>
            <div class='reviews-inside-block'>
                <div>
                    <span> Игорь Корнелюк </span>
                    <div>
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                    </div>
                </div>
                <div>
                    <span> г. Киев </span>
                    <span> 03.09.2019 </span>
                </div>
                <div>
                    <span>
                        <p> «Равным образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.» </p>
                    </span>
                </div>
            </div>
        </div>
        <div class='flex_col--1-3'>
            <div class='reviews-inside-block last-without-border'>
                <div>
                    <span> Игорь Корнелюк </span>
                    <div>
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                    </div>
                </div>
                <div>
                    <span> г. Киев </span>
                    <span> 03.09.2019 </span>
                </div>
                <div>
                    <span>
                        <p> «Равным образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.» </p>
                    </span>
                </div>
            </div>
        </div>
        <div class='flex_col--1-3'>
            <div class='reviews-inside-block'>
                <div>
                    <span> Игорь Корнелюк </span>
                    <div>
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                    </div>
                </div>
                <div>
                    <span> г. Киев </span>
                    <span> 03.09.2019 </span>
                </div>
                <div>
                    <span>
                        <p> «Равным образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.» </p>
                    </span>
                </div>
            </div>
        </div>
        <div class='flex_col--1-3'>
            <div class='reviews-inside-block'>
                <div>
                    <span> Игорь Корнелюк </span>
                    <div>
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                    </div>
                </div>
                <div>
                    <span> г. Киев </span>
                    <span> 03.09.2019 </span>
                </div>
                <div>
                    <span>
                        <p> «Равным образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.» </p>
                    </span>
                </div>
            </div>
        </div>
        <div class='flex_col--1-3'>
            <div class='reviews-inside-block last-without-border'>
                <div>
                    <span> Игорь Корнелюк </span>
                    <div>
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                    </div>
                </div>
                <div>
                    <span> г. Киев </span>
                    <span> 03.09.2019 </span>
                </div>
                <div>
                    <span>
                        <p> «Равным образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.» </p>
                    </span>
                </div>
            </div>
        </div>
        <div class='flex_col--1-3'>
            <div class='reviews-inside-block'>
                <div>
                    <span> Игорь Корнелюк </span>
                    <div>
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                    </div>
                </div>
                <div>
                    <span> г. Киев </span>
                    <span> 03.09.2019 </span>
                </div>
                <div>
                    <span>
                        <p> «Равным образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.» </p>
                    </span>
                </div>
            </div>
        </div>
        <div class='flex_col--1-3'>
            <div class='reviews-inside-block'>
                <div>
                    <span> Игорь Корнелюк </span>
                    <div>
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                    </div>
                </div>
                <div>
                    <span> г. Киев </span>
                    <span> 03.09.2019 </span>
                </div>
                <div>
                    <span>
                        <p> «Равным образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.» </p>
                    </span>
                </div>
            </div>
        </div>
        <div class='flex_col--1-3'>
            <div class='reviews-inside-block last-without-border'>
                <div>
                    <span> Игорь Корнелюк </span>
                    <div>
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                        <span class='icon-star-product'></span> 
                    </div>
                </div>
                <div>
                    <span> г. Киев </span>
                    <span> 03.09.2019 </span>
                </div>
                <div>
                    <span>
                        <p> «Равным образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.» </p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='seo-text__block'>
    <div class="seo__blocks-container flex_row">
        <div class='flex_col-desk--1-3 flex_col-tab'>
            <div class="seo-text__left">
                <img src="/wp-content/themes/utg/images/img-10.png" alt="">
                <div class="seo-text__social">
                    <a href="#"> <span class="icon-facebook"></span> </a>
                    <a href="#"> <span class="icon-instagram"></span> </a>
                    <a href="#"> <span class="icon-twitter"></span> </a>
                </div>
            </div>
        </div>
        <div class='flex_col-desk--2-3 flex_col-tab'>
            <div class="seo-text__right">
                <h3> Заголовок SЕО-текста </h3>
                <div>
                    <p>Равным образом постоянный количественный рост и сфера нашей активности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. Таким образом сложившаяся структура организации требуют определения и уточнения модели развития. Таким образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации соответствующий условий активизации. Разнообразный и богатый опыт новая модель организационной деятельности требуют от нас анализа систем массового участия. Не следует, однако забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации дальнейших направлений развития. Разнообразный и богатый опыт реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.</p>

                    <a class='seo-text__right_btn-show'>Развернуть</a>
                    <p class='seo-text__right_hide-text'>Таким образом сложившаяся структура организации позволяет оценить значение направлений прогрессивного развития. Разнообразный и богатый опыт рамки и место обучения кадров представляет собой интересный эксперимент проверки позиций, занимаемых участниками в отношении поставленных задач. Равным образом консультация с широким активом способствует подготовки и реализации систем массового участия.</p>
                </div>
            </div>
        </div>
    </div>
</div>


 
    
</div>







<?php get_footer();?>