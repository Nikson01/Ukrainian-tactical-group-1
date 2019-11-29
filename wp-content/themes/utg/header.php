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

<div class="wrapper">


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
                <div class="menuContainer">
                    <button class="header-menu__link">
                        <span></span>
                        Каталог товаров
                    </button>
                    <ul class="menu-general">
                        <div class="menu-general-cover">



                      


                        <?php wp_nav_menu('menu=All categories'); ?>


                        


                            <li class="menu-item">
                                <a class="menu-item__name" href="#">Новинки</a>
                                <span class='icon-arrow'></span>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">Огнестрельное оружие</a>
                                        <ul class='under-sub-menu'>
                                            <li><a href="">Гладкоствольное оружие</a></li>
                                            <li><a href="">Нарезное оружие</a></li>
                                            <li><a href="">Запчасти</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Травматическое оружие</a>
                                        <ul class='under-sub-menu'>
                                            <li><a href="">Травматические пистолеты</a></li>
                                            <li><a href="">Травматические револьверы</a></li>
                                            <li><a href="">Комплектующие</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Пневматика</a>
                                        <ul class='under-sub-menu'>
                                            <li><a href="">Винтовки пневматические</a></li>
                                            <li><a href="">Пистолеты пневматические</a></li>
                                            <li><a href="">Револьверы пневматические</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Пневматика</a>
                                        <ul class='under-sub-menu'>
                                            <li><a href="">Винтовки пневматические</a></li>
                                            <li><a href="">Пистолеты пневматические</a></li>
                                            <li><a href="">Револьверы пневматические</a></li>
                                        </ul>
                                    </li>                                   
                                </ul>
                            </li>








                            <a class="menu-general__btn" href="#"> Все категории товаров(23) </a> 
                        </div>                   
                    </ul>
                </div>
                
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
       
        
       
    </header>
    <div class="breadcrumbs-top">
        <div class="flex_container">
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
        </div>
    </div>
    <div class="main"><!-- START MAIN -->