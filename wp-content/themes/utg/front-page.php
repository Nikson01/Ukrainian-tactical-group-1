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

<!-- <div class='discount-slider__block'>
    <div class="discount-slider__title">
        <div>
            <h2> Популярные товары </h2>
        </div>
        <div>
            <a href="#"> Все новинки </a>
        </div>
    </div>
    <div class="discount-products_line">
        <div class="flex_row discount-products-gallery">
            <div class="flex_col--1-4">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-discount">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
                            <span>10 отзывов</span>
                        </div>
                        <div class="discount-code">
                            <span>Код: 144800375412</span>
                        </div>
                        <div class="discount-price">
                            <div>
                                <span class='discount-old_price'>1400</span>
                                <span class='discount-new_price'>1032 ₴</span>
                            </div>
                            <div>
                                <button> Купить</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex_col--1-4">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-discount">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
                            <span>10 отзывов</span>
                        </div>
                        <div class="discount-code">
                            <span>Код: 144800375412</span>
                        </div>
                        <div class="discount-price">
                            <div>
                                <span class='discount-old_price'>1400</span>
                                <span class='discount-new_price'>1032 ₴</span>
                            </div>
                            <div>
                                <button> Купить</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex_col--1-4">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-discount">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
                            <span>10 отзывов</span>
                        </div>
                        <div class="discount-code">
                            <span>Код: 144800375412</span>
                        </div>
                        <div class="discount-price">
                            <div>
                                <span class='discount-old_price'>1400</span>
                                <span class='discount-new_price'>1032 ₴</span>
                            </div>
                            <div>
                                <button> Купить</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex_col--1-4">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-discount">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
                            <span>10 отзывов</span>
                        </div>
                        <div class="discount-code">
                            <span>Код: 144800375412</span>
                        </div>
                        <div class="discount-price">
                            <div>
                                <span class='discount-old_price'>1400</span>
                                <span class='discount-new_price'>1032 ₴</span>
                            </div>
                            <div>
                                <button> Купить</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex_col--1-4">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-discount">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
                            <span>10 отзывов</span>
                        </div>
                        <div class="discount-code">
                            <span>Код: 144800375412</span>
                        </div>
                        <div class="discount-price">
                            <div>
                                <span class='discount-old_price'>1400</span>
                                <span class='discount-new_price'>1032 ₴</span>
                            </div>
                            <div>
                                <button> Купить</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->

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
            <div class="flex_col--1-4 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
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
            <div class="flex_col--1-4 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
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
            <div class="flex_col--1-4 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
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
            <div class="flex_col--1-4 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
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
            <div class="flex_col--1-4 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
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
        <div class="flex_row without-margin">                        
            <div class="flex_col--1-4 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
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
            <div class="flex_col--1-4 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
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
            <div class="flex_col--1-4 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
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
            <div class="flex_col--1-4 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
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
        <div class="flex_row without-margin">                        
            <div class="flex_col--1-4 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
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
            <div class="flex_col--1-4 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
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
            <div class="flex_col--1-4 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
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
            <div class="flex_col--1-4 without-padding">
                <div class="discount-products_block">
                    <a href="#">
                        <div class="discount-top">
                            <span>-20%</span>
                            <span>ИЗБ</span>
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
                            <span>ЗВезды</span>
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
                <a href="#">            
                    <img src="/../wp-content/themes/utg/images/Path_111.png">
                    <div class="reasons__inside-block">                  
                        <div> 
                            <span> 5 </span>   
                            <span> Лет </span>             
                        </div>
                        <div> 
                            <span> Занимаемся продажей оружия </span>
                        </div>
                        <div> 
                        <span>Подробнее о компании</span>  
                        <span class="icon-calendar"></span>
                        </div>
                    </div>
                </a>                 
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
                <a href="#" class='news__second-blocks'>
                    <img src="/wp-content/themes/utg/images/background__news.png" alt="">
                    <span class='news-blue-link' href="#"> Статьи </span>
                    <h4> Как правильно настроить оптический прицел? </h4>
                    <span class='news-date'> 17.02.2019 </span>
                </a>
                <a href="#" class='news__second-blocks'>
                    <span class='news-blue-link' href="#"> Статьи </span>
                    <h4> Как правильно настроить оптический прицел? </h4>
                    <span class='news-date'> 17.02.2019 </span>
                </a>
            </div>            
        </div>
        <div class='flex_col--1-3'>          
            <a href="#" class='news__third'>
                <span class='news-blue-link' href="#"> Статьи </span>
                <h4> Как правильно настроить оптический прицел? </h4>
                <span class='news__third-text-block'>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                </span>
                <span class='news-date'> 17.02.2019 </span>
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
            <a href="#"> Все новости </a>
        </div>
    </div>
    <div class='reviews-block-main'>
        <div class='flex_col--1-3'>
            <div class='reviews-inside-block'>
                <div>
                    <span> Игорь Корнелюк </span>
                    <div>
                        <span> <img src="/wp-content/themes/utg/images/star.png" alt=""> </span> 
                        <span> <img src="/wp-content/themes/utg/images/star.png" alt=""> </span> 
                        <span> <img src="/wp-content/themes/utg/images/star.png" alt=""> </span> 
                        <span> <img src="/wp-content/themes/utg/images/star.png" alt=""> </span> 
                        <span> <img src="/wp-content/themes/utg/images/star.png" alt=""> </span> 
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
                        <span> <img src="/wp-content/themes/utg/images/star.png" alt=""> </span> 
                        <span> <img src="/wp-content/themes/utg/images/star.png" alt=""> </span> 
                        <span> <img src="/wp-content/themes/utg/images/star.png" alt=""> </span> 
                        <span> <img src="/wp-content/themes/utg/images/star.png" alt=""> </span> 
                        <span> <img src="/wp-content/themes/utg/images/star.png" alt=""> </span> 
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
                        <span> <img src="/wp-content/themes/utg/images/star.png" alt=""> </span> 
                        <span> <img src="/wp-content/themes/utg/images/star.png" alt=""> </span> 
                        <span> <img src="/wp-content/themes/utg/images/star.png" alt=""> </span> 
                        <span> <img src="/wp-content/themes/utg/images/star.png" alt=""> </span> 
                        <span> <img src="/wp-content/themes/utg/images/star.png" alt=""> </span> 
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
    <div class="flex_row">
        <div class='flex_col--1-3'>
            <div class="seo-text__left">
                <img src="/wp-content/themes/utg/images/img-10.png" alt="">
                <div class="seo-text__social">
                    <a href="#"> <span class="icon-facebook"></span> </a>
                    <a href="#"> <span class="icon-instagram"></span> </a>
                    <a href="#"> <span class="icon-twitter"></span> </a>
                </div>
            </div>
        </div>
        <div class='flex_col--2-3'>
            <div class="seo-text__right">
                <h3> Заголовок SЕО-текста </h3>
                <div>
                    <p>Равным образом постоянный количественный рост и сфера нашей активности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. Таким образом сложившаяся структура организации требуют определения и уточнения модели развития. Таким образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации соответствующий условий активизации. Разнообразный и богатый опыт новая модель организационной деятельности требуют от нас анализа систем массового участия. Не следует, однако забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации дальнейших направлений развития. Разнообразный и богатый опыт реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач.</p>

                    <p>Таким образом сложившаяся структура организации позволяет оценить значение направлений прогрессивного развития. Разнообразный и богатый опыт рамки и место обучения кадров представляет собой интересный эксперимент проверки позиций, занимаемых участниками в отношении поставленных задач. Равным образом консультация с широким активом способствует подготовки и реализации систем массового участия.</p>
                </div>
            </div>
        </div>
    </div>
</div>


 
    
</div>







<?php get_footer();?>