<?php
/**
 * utg functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package utg
 */

if ( ! function_exists( 'utg_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function utg_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on utg, use a find and replace
		 * to change 'utg' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'utg', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'utg' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'utg_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'utg_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function utg_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'utg_content_width', 640 );
}
add_action( 'after_setup_theme', 'utg_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function utg_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'utg' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'utg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'utg_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function utg_scripts() {

    wp_enqueue_style( 'racingbase-style', get_stylesheet_uri() );
    wp_enqueue_style( 'googlefont-style', 'https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Open+Sans:400,600,700&display=swap' );
	wp_enqueue_style( 'legacy-style', get_template_directory_uri() ."/styles/styles.min.css" );
	wp_enqueue_style( 'slick-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, true );
	wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array(), null, true );
	

	wp_enqueue_script( 'utg-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'utg-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'utg_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


register_post_type('utp', array(
    'labels'             => array(
      'name'               => 'УТП', // Основное название типа записи
      'singular_name'      => 'УТП', // отдельное название записи типа Book
      'add_new'            => 'Добавить УТП',
      'add_new_item'       => 'Добавить новое УТП',
      'edit_item'          => 'Редактировать УТП',
      'new_item'           => 'Новое УТП',
      'view_item'          => 'Посмотреть УТП',
      'search_items'       => 'Найти УТП',
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'В корзине ничего не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'УТП'
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
    ));









register_post_type('actions', array(
    'labels'             => array(
      'name'               => 'Акции', // Основное название типа записи
      'singular_name'      => 'Акции', // отдельное название записи типа Book
      'add_new'            => 'Добавить акцию',
      'add_new_item'       => 'Добавить новую акцию',
      'edit_item'          => 'Редактировать акцию',
      'new_item'           => 'Новая акцию',
      'view_item'          => 'Посмотреть акцию',
      'search_items'       => 'Найти акцию',
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'В корзине ничего не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Акции'
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
    ));






    register_post_type('blog', array(
        'labels'             => array(
          'name'               => 'Блог', // Основное название типа записи
          'singular_name'      => 'Блог', // отдельное название записи типа Book
          'add_new'            => 'Добавить статью',
          'add_new_item'       => 'Добавить новую статью',
          'edit_item'          => 'Редактировать статью',
          'new_item'           => 'Новая статья',
          'view_item'          => 'Посмотреть статью',
          'search_items'       => 'Найти статью',
          'not_found'          => 'Не найдено',
          'not_found_in_trash' => 'В корзине ничего не найдено',
          'parent_item_colon'  => '',
          'menu_name'          => 'Блог'
          ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
    ));





add_action('wp_head', 'show_template'); // перед шапкой
// add_action('wp_footer', 'show_template'); // в подвале
function show_template(){
  global $template;
  echo $template;
}


/**
 * Remove the breadcrumbs 
 */
add_action( 'init', 'woo_remove_wc_breadcrumbs' );
function woo_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}


// Хлебные крошки

function dimox_breadcrumbs() {

	/* === ОПЦИИ === */
	$text['home'] = 'Главная'; // текст ссылки "Главная"
	$text['category'] = '%s'; // текст для страницы рубрики
	$text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
	$text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
	$text['author'] = 'Статьи автора %s'; // текст для страницы автора
	$text['404'] = 'Ошибка 404'; // текст для страницы 404
	$text['page'] = 'Страница %s'; // текст 'Страница N'
	$text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'
  
	$wrap_before = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
	$wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
	$sep = '›'; // разделитель между "крошками"
	$sep_before = '<span class="sep">'; // тег перед разделителем
	$sep_after = '</span>'; // тег после разделителя
	$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
	$show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
	$show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
	$before = '<span class="current">'; // тег перед текущей "крошкой"
	$after = '</span>'; // тег после текущей "крошки"
	/* === КОНЕЦ ОПЦИЙ === */
  
	global $post;
	$home_url = home_url('/');
	$link_before = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
	$link_after = '</span>';
	$link_attr = ' itemprop="item"';
	$link_in_before = '<span itemprop="name">';
	$link_in_after = '</span>';
	$link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
	$frontpage_id = get_option('page_on_front');
	$parent_id = ($post) ? $post->post_parent : '';
	$sep = ' ' . $sep_before . $sep . $sep_after . ' ';
	$home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;
  
	if (is_home() || is_front_page()) {
  
	  if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;
  
	} else {
  
	  echo $wrap_before;
	  if ($show_home_link) echo $home_link;
  
	  if ( is_category() ) {
		$cat = get_category(get_query_var('cat'), false);
		if ($cat->parent != 0) {
		  $cats = get_category_parents($cat->parent, TRUE, $sep);
		  $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
		  $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
		  if ($show_home_link) echo $sep;
		  echo $cats;
		}
		if ( get_query_var('paged') ) {
		  $cat = $cat->cat_ID;
		  echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
		} else {
		  if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
		}
  
	  } elseif ( is_search() ) {
		if (have_posts()) {
		  if ($show_home_link && $show_current) echo $sep;
		  if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
		} else {
		  if ($show_home_link) echo $sep;
		  echo $before . sprintf($text['search'], get_search_query()) . $after;
		}
  
	  } elseif ( is_day() ) {
		if ($show_home_link) echo $sep;
		echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
		echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
		if ($show_current) echo $sep . $before . get_the_time('d') . $after;
  
	  } elseif ( is_month() ) {
		if ($show_home_link) echo $sep;
		echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
		if ($show_current) echo $sep . $before . get_the_time('F') . $after;
  
	  } elseif ( is_year() ) {
		if ($show_home_link && $show_current) echo $sep;
		if ($show_current) echo $before . get_the_time('Y') . $after;
  
	  } elseif ( is_single() && !is_attachment() ) {
		if ($show_home_link) echo $sep;
		if ( get_post_type() != 'post' ) {
		  $post_type = get_post_type_object(get_post_type());
		  $slug = $post_type->rewrite;
		  printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
		  if ($show_current) echo $sep . $before . get_the_title() . $after;
		} else {
		  $cat = get_the_category(); $cat = $cat[0];
		  $cats = get_category_parents($cat, TRUE, $sep);
		  if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
		  $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
		  echo $cats;
		  if ( get_query_var('cpage') ) {
			echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
		  } else {
			if ($show_current) echo $before . get_the_title() . $after;
		  }
		}
  
	  // custom post type
	  } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
		$post_type = get_post_type_object(get_post_type());
		if ( get_query_var('paged') ) {
		  echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
		} else {
		  if ($show_current) echo $sep . $before . $post_type->label . $after;
		}
  
	  } elseif ( is_attachment() ) {
		if ($show_home_link) echo $sep;
		$parent = get_post($parent_id);
		$cat = get_the_category($parent->ID); $cat = $cat[0];
		if ($cat) {
		  $cats = get_category_parents($cat, TRUE, $sep);
		  $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
		  echo $cats;
		}
		printf($link, get_permalink($parent), $parent->post_title);
		if ($show_current) echo $sep . $before . get_the_title() . $after;
  
	  } elseif ( is_page() && !$parent_id ) {
		if ($show_current) echo $sep . $before . get_the_title() . $after;
  
	  } elseif ( is_page() && $parent_id ) {
		if ($show_home_link) echo $sep;
		if ($parent_id != $frontpage_id) {
		  $breadcrumbs = array();
		  while ($parent_id) {
			$page = get_page($parent_id);
			if ($parent_id != $frontpage_id) {
			  $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
			}
			$parent_id = $page->post_parent;
		  }
		  $breadcrumbs = array_reverse($breadcrumbs);
		  for ($i = 0; $i < count($breadcrumbs); $i++) {
			echo $breadcrumbs[$i];
			if ($i != count($breadcrumbs)-1) echo $sep;
		  }
		}
		if ($show_current) echo $sep . $before . get_the_title() . $after;
  
	  } elseif ( is_tag() ) {
		if ( get_query_var('paged') ) {
		  $tag_id = get_queried_object_id();
		  $tag = get_tag($tag_id);
		  echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
		} else {
		  if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
		}
  
	  } elseif ( is_author() ) {
		global $author;
		$author = get_userdata($author);
		if ( get_query_var('paged') ) {
		  if ($show_home_link) echo $sep;
		  echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
		} else {
		  if ($show_home_link && $show_current) echo $sep;
		  if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
		}
  
	  } elseif ( is_404() ) {
		if ($show_home_link && $show_current) echo $sep;
		if ($show_current) echo $before . $text['404'] . $after;
  
	  } elseif ( has_post_format() && !is_singular() ) {
		if ($show_home_link) echo $sep;
		echo get_post_format_string( get_post_format() );
	  }
  
	  echo $wrap_after;
  
	}
  } // end of dimox_breadcrumbs()



  pll_register_string('social1', 'social2');


function hide_all_wc_prices() {
return '';
}
add_filter( 'woocommerce_get_price_html', 'hide_all_wc_prices');


add_filter( 'woocommerce_get_price_html', 'custom_price_html', 100, 2 );
function custom_price_html( $price, $product ){

$price .= '<span class="discount-old_price"><strike>' . get_post_meta( get_the_ID(), '_sale_price', true). '</strike></span>';
$price .= '<span class="discount-new_price">' . get_post_meta( get_the_ID(), '_regular_price', true). ' ' . '<span>' . sprintf(get_woocommerce_currency_symbol() ) . '</span>' . '</span>';

    return apply_filters( 'woocommerce_get_price', $price );
}