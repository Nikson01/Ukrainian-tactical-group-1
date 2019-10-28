<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package utg
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <header class="header">
        
        <div class="header-top">
            <div class="flex_container header-top-container">
                <div class="call-back">
                    <span>Пн-Пт: 9:00 - 18:00</span>
                    <a class="call-back__link">Обратный звонок</a>
                </div>
                <ul class="page-list"> 
                    <?php 
                        $pages = get_pages(); 
                        foreach( $pages as $page ){
                            echo '<li class="page-item"><a class="page-link" href="' . get_page_link( $page->ID ) . '">'. esc_html($page->post_title) .'</a></li>';
                        }
                    ?>
                </ul>
                <div class="tel-phone">
                    <a href="tel:+38 (066) 549-56-98">+38 (066) 549-56-98</a>
                </div>
            </div>
        </div>

    



       
        <div class="header-bottom">
            <div class="flex_container">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img src="/wp-content/themes/utg/images/logo.png" alt="">
                    </a>
                </div>
                <ul class="header_lang">
                    <?php pll_the_languages();?>
                </ul>

                <?php get_product_search_form();?>

                <a class="header-wishlist" href="/wishpage/">Избранное</a>

                <div class="header_basket">
                    <b>Ваша корзина: <span>товаров (<?php echo WC()->cart->get_cart_contents_count();?>)</span></b>
                </div>
            </div>
        </div>








        <div class="navigation">
            <div class="flex_container navigation-container">
                <button class="header-menu__link">
                    <span></span>
                    Каталог товаров
                </button>
                <ul class="menu-general">
                    <li class="menu-item menu-item__news">
                        <a class="menu-item__name" href="#">Новости</a>
                        <ul class="sub-menu sub-menu__news">
                            <li>
                                <a href="#">Огнестрельное оружие</a>
                                <ul class="under-sub-menu">
                                    <li>
                                        <a href="#">Гладкоствольное оружие</a>
                                        <a href="#">Нарезное оружие</a>   
                                        <a href="#">Пистолеты и револьверы</a> 
                                    </li>                                    
                                </ul>   
                            </li>                                                         
                            <li>
                                <a href="#">Травматическое оружие</a>
                                <ul class="under-sub-menu">
                                    <li>
                                        <a href="#">Гладкоствольное оружие</a>
                                        <a href="#">Нарезное оружие</a>   
                                        <a href="#">Пистолеты и револьверы</a> 
                                    </li>                                    
                                </ul>                                 
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-item__name" href="#">Оружие</a>
                        <ul class="sub-menu">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-item__name" href="#">Распродажа</a>
                        <ul class="sub-menu">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-item__name" href="#">Верхняя одежда</a>
                        <ul class="sub-menu">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-item__name" href="#">Куртки</a>
                        <ul class="sub-menu">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-item__name" href="#">Брюки, комбинезоны</a>
                        <ul class="sub-menu">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-item__name" href="#">Обувь</a>
                        <ul class="sub-menu">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-item__name" href="#">Тактика</a>
                        <ul class="sub-menu">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-item__name" href="#">Фонари</a>
                        <ul class="sub-menu">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-item__name" href="#">Оптические прицелы</a>
                        <ul class="sub-menu">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-item__name" href="#">Рубашки</a>
                        <ul class="sub-menu">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>                    
                    <a class="menu-general__btn" href="#"> Все категории товаров(23) </a>                    
                </ul>
                <ul class="menu-list">
                    <?php
                        if( $menu_items = wp_get_nav_menu_items('top-general') ) { 
                            $menu_list = '';
                            foreach ( (array) $menu_items as $key => $menu_item ) {
                                $title = $menu_item->title; 
                                $url = $menu_item->url;
                                $menu_list .= '<li class="menu-item"><a href="' . $url . '">' . $title . '</a></li>';
                            }
                            echo $menu_list;
                        }
                    ?>
                </ul>
            </div>
        </div>
        <!-- <div class="flex_container">
            <div class="flex_row">
                <div class='flex_col--2-3'>
                <div class="slider-head">
                    <div><img src="/wp-content/themes/utg/images/Rectangle_2.png" alt=""></div>
                    <div><img src="/wp-content/themes/utg/images/Rectangle_2.png" alt=""></div>
                    <div><img src="/wp-content/themes/utg/images/Rectangle_2.png" alt=""></div>
                </div>
                </div>
            </div>
        </div>
         -->
        
       
    </header>