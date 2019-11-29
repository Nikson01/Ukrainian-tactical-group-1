<?php
add_action( 'admin_enqueue_scripts', 'theme_admin_files', 99 );
function theme_admin_files() {
	wp_enqueue_style( 'theme-admin-style', get_template_directory_uri(). '/admin/style.css' );
}

function tiny_mce_add_buttons( $plugins ) {
  $plugins['table']       = get_template_directory_uri() . '/admin/tmc-btns.js';
  $plugins['mytinymcein'] = get_template_directory_uri() . '/admin/tmc-btns.js';
  $plugins['mytinymcetw'] = get_template_directory_uri() . '/admin/tmc-btns.js';
  $plugins['mytinymceyt'] = get_template_directory_uri() . '/admin/tmc-btns.js';
  $plugins['mytinymcefb'] = get_template_directory_uri() . '/admin/tmc-btns.js';
  $plugins['mytinymcebanner'] = get_template_directory_uri() . '/admin/tmc-btns.js';
  return $plugins;
}

function tiny_mce_register_buttons( $buttons ) {
  $buttons[] = 'hr';
  $newBtns = array(
    'table',
    'mytinymcein',
    'mytinymcetw',
    'mytinymceyt',
    'mytinymcefb',
    'mytinymcebanner',
  );
  $buttons = array_merge( $buttons, $newBtns );
  return $buttons;
}

add_action( 'init', 'tiny_mce_new_buttons' );

function tiny_mce_new_buttons() {
  add_filter( 'mce_external_plugins', 'tiny_mce_add_buttons' );
  add_filter( 'mce_buttons', 'tiny_mce_register_buttons' );
}

function theme_add_editor_styles() {
  add_editor_style( '/style.css' );
  add_editor_style( 'styles/styles.min.css' );
}

add_action( 'current_screen', 'theme_add_editor_styles' );

// Customize categories checkbox to radiobutton
function tr_new_taxonomy_box() {

	$choosed_taxonomies = array( 'cat_tips' );

	if ( empty($choosed_taxonomies) )
		return;

	foreach ( $choosed_taxonomies as $tax_name ) {
		$taxonomy = get_taxonomy( $tax_name );

		if ( !$taxonomy->hierarchical || !$taxonomy->show_ui || empty($taxonomy->object_type) )
			continue;

		foreach ( $taxonomy->object_type as $post_type ) {

			remove_meta_box( "{$tax_name}div", $post_type, 'side' );
			add_meta_box( "unique-{$tax_name}-div", $taxonomy->labels->singular_name, 'tr_tax_metabox', $post_type, 'side', 'low', array('taxonomy' => $tax_name) );
		}
	}
}
// add_action( 'admin_menu', 'tr_new_taxonomy_box' );

function tr_print_radiolist( $post_id, $taxonomy ) {
	$terms = get_terms( $taxonomy, array('hide_empty' => false, 'parent'  => 0) );
	if ( empty($terms) )
		return;

	$name = ( $taxonomy == 'category' ) ? 'post_category' : "tax_input[{$taxonomy}]";

	$current_post_terms = get_the_terms( $post_id, $taxonomy );
	$current = array();
	if ( !empty($current_post_terms) ) {
		foreach ( $current_post_terms as $current_post_term )
			$current[] = $current_post_term->term_id;
	}

	$list = '';
	foreach ( $terms as $term ) {
		$list .= "<li id='{$taxonomy}-{$term->term_id}'>";
		$list .= "<label class='selectit'>";
		$list .= "<input type='radio' name='{$name}[]' value='{$term->term_id}' ".checked( in_array($term->term_id, $current), true, false )." id='in-{$taxonomy}-{$term->term_id}' />";
		$list .= " {$term->name}</label>";
		$list .= "</li>\n";

		$childs = get_terms( $taxonomy, array('hide_empty' => false, 'parent'  => $term->term_id));
		if ( count($childs) > 0 ){
			$list .= "<ul class='children'>";
			foreach ($childs as $child){
				$list .= "<li id='{$taxonomy}-{$child->term_id}'>";
				$list .= "<label class='selectit'>";
				$list .= "<input type='radio' name='{$name}[]' value='{$child->term_id}' ".checked( in_array($child->term_id, $current), true, false )." id='in-{$taxonomy}-{$child->term_id}' />";
				$list .= " {$child->name}</label>";
				$list .= "</li>\n";
			}
			$list .= "</ul>";
		}
	}
	echo $list;
}
function tr_tax_metabox( $post, $box ) {
	$taxonomy = 'cat_tips';
	if ( !isset($box['args']) || !is_array($box['args']) )
		$args = array();
	else
		$args = $box['args'];

	$defaults = array('taxonomy' => 'category');
	extract( wp_parse_args($args, $defaults), EXTR_SKIP );
	$tax = get_taxonomy($taxonomy);

	$name = ( $taxonomy == 'category' ) ? 'post_category' : 'tax_input[' . $taxonomy . ']';

	$metabox = "<div id='taxonomy-{$taxonomy}' class='categorydiv'>";
	$metabox .= "<input type='hidden' name='{$name}' value='0' />";
	$metabox .= "<ul id='{$taxonomy}-tabs' class='category-tabs'>";
	$metabox .= "<li class='tabs'>{$tax->labels->all_items}</li>";
	$metabox .= "</ul>";
	$metabox .= "<div id='{$name}-all' class='tabs-panel'>";
	$metabox .= "<ul id='{$taxonomy}checklist' class='list:{$taxonomy} categorychecklist form-no-clear'>";
	echo $metabox;

	tr_print_radiolist( $post->ID, $taxonomy );

	echo "</ul></div></div>";
}
/**
 * Require a featured image to be set before a tips page can be published.
 */
add_action('admin_print_footer_scripts', 'admin_footer_scripts');

function admin_footer_scripts() {
  check_post_image();
  bookmakers_info_for_tinymce_btn();
}

/**
 * Require a featured image to be set before a tips page can be published.
 */
function check_post_image(){
    global $typenow;
    if ($typenow == 'tips' || $typenow == 'articles'){
        ?>
        <script language="javascript" type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#post').submit(function() {
                    if (jQuery("#set-post-thumbnail").find('img').size() > 0) {
                        jQuery('#ajax-loading').hide();
                        jQuery('#publish').removeClass('button-primary-disabled');
                        return true;
                    }else{
                        alert("Please set a featured image! Post unpublished...");
                        jQuery('#ajax-loading').hide();
                        jQuery('#publish').removeClass('button-primary-disabled');
                        return false;
                    }
                    return false;
                });
            });
        </script>
        <?php
    }
}

function bookmakers_info_for_tinymce_btn() {
    $q = new WP_Query('post_type=bookmakers&posts_per_page=-1');
    $bookmaker_arr = [];
    foreach ($q->posts as $key => $bookmaker) {
        $bookmaker_arr[] = [
            'id' => $bookmaker->ID,
            'title' => $bookmaker->post_title
        ];
    }
    ?>
    <script>
        var mceBookmakers = <?php echo json_encode($bookmaker_arr) ?>
    </script>
    <?php
}

/**
 * Recursively sort an array of taxonomy terms hierarchically. Child categories will be
 * placed under a 'children' member of their parent term.
 * @param Array   $cats     taxonomy term objects to sort
 * @param Array   $into     result array to put them in
 * @param integer $parentId the current parent ID to put them in
 */
function sort_terms_hierarchicaly(Array &$cats, Array &$into, $parentId = 0) {
    foreach ($cats as $i => $cat) {
        if ($cat->parent == $parentId) {
            $into[$cat->term_id] = $cat;
            unset($cats[$i]);
        }
    }

    foreach ($into as $topCat) {
        $topCat->children = array();
        sort_terms_hierarchicaly($cats, $topCat->children, $topCat->term_id);
    }
}

/**
 * Displays dropwodn with categories and filters tips
 * @param  string $post_type The post type slug.
 * @param  string $which     The location of the 
   * extra table nav markup: 'top' or 'bottom' 
   * for WP_Posts_List_Table, 'bar' for WP_Media_List_Table.
 * @return string            The dropdown
 */
function filter_tips_by_category( $post_type, $which ) {

    // Apply this only on a specific post type
    if ($post_type !== 'tips')
        return;

    $taxonomy = 'cat_tips';

    // Retrieve taxonomy data
    $taxonomy_obj = get_taxonomy( $taxonomy );
    $taxonomy_name = $taxonomy_obj->labels->name;

    // Retrieve taxonomy terms
    $terms = get_terms( [
        'taxonomy' => $taxonomy,
        'hide_empty' => false,
    ]);

    $category_hierarchy = array();
    sort_terms_hierarchicaly($terms, $category_hierarchy);
    

    // Display filter HTML
    $html_code = "<select name='{$taxonomy}' id='{$taxonomy}' class='postform'>";
    $html_code.= '<option value="">' . sprintf( esc_html__( 'Show All %s', 'text_domain' ), $taxonomy_name ) . '</option>';
    foreach ($category_hierarchy as $term) {
        
        $html_code.= sprintf(
            '<option value="%1$s" %2$s>%3$s (%4$s)</option>',
            $term->slug,
            ( ( isset( $_GET[$taxonomy] ) && ( $_GET[$taxonomy] == $term->slug ) ) ? ' selected="selected"' : '' ),
            $term->name,
            $term->count
        );
        if (count($term->children)) {
            foreach ($term->children as $child) {
                $html_code.= sprintf(
                    '<option value="%1$s" %2$s>-- %3$s (%4$s)</option>',
                    $child->slug,
                    ( ( isset( $_GET[$taxonomy] ) && ( $_GET[$taxonomy] == $child->slug ) ) ? ' selected="selected"' : '' ),
                    $child->name,
                    $child->count
                );
            }
        }
    }
    $html_code.= '</select>';
    echo $html_code;
}
add_action( 'restrict_manage_posts', 'filter_tips_by_category' , 10, 2);


add_filter('manage_posts_columns', 'add_columns_for_tips');
add_filter('manage_posts_custom_column', 'manage_tips_columns', 10, 2);

/**
 * Adds columns which displayed in the Posts list table. 
 * @param array $columns An associative array of column headings.
 */
function add_columns_for_tips($columns) {
    global $post;
    if ($post->post_type == tips) {
      $columns['cat_tips'] = __('Category', 'bettingpro');
      $columns['img'] = __('Featured Image', 'bettingpro');
    }
    return $columns;
}

/**
 * Manages column content
 * @param  string $column_name The name of the column to display.
 * @param  int    $post_id     The current post ID.
 * @return string
 */
function manage_tips_columns($column_name, $post_id) {
    switch ($column_name) {
      case 'img':
          echo get_the_post_thumbnail($post_id, 'thumbnail');
          break;
      case 'cat_tips':
          $taxonomy = 'cat_tips';
          $taxonomy_object = get_taxonomy( $taxonomy );
          $object_type = get_post_type($post_id);
          $post_type = 'tips';
          $terms = get_the_terms($post_id, $taxonomy);
              if (is_array($terms)) {
                  $out = array();
                  foreach ( $terms as $t ) {
                       $posts_in_term_qv = array();
                       $posts_in_term_qv['post_type'] = $object_type;

                       if ( $taxonomy_object->query_var ) {
                             $posts_in_term_qv[ $taxonomy_object->query_var ] = $t->slug;
                       } else {
                             $posts_in_term_qv['taxonomy'] = $taxonomy;
                             $posts_in_term_qv['term'] = $t->slug;
                       }

                       $out[] = sprintf( '<a href="%s">%s</a>',
                                esc_url( add_query_arg( $posts_in_term_qv, 'edit.php' ) ),
                                esc_html( sanitize_term_field( 'name', $t->name, $t->term_id, $taxonomy, 'display' ) )
                             );
                    }
                    echo join( __( ', ' ), $out );
              }
          break;
    }
    return $column_name;
}


function bp_admin_posts_filter( $query ) {
    global $pagenow;
    if ( is_admin() && $pagenow == 'edit.php' && !empty($_GET['bp_parent_pages'])) {
        $query->query_vars['post_parent'] = $_GET['bp_parent_pages'];
    }
}
add_filter( 'parse_query', 'bp_admin_posts_filter' );

function bp_admin_filter_parentpages() {
    global $wpdb;
    if (isset($_GET['post_type']) && $_GET['post_type'] == 'page') {
        $sql = "SELECT ID, post_title FROM ".$wpdb->posts." WHERE post_type = 'page' AND post_parent = 0 AND post_status = 'publish' ORDER BY post_title";
        $parent_pages = $wpdb->get_results($sql, OBJECT_K);
        $select = '
            <select name="bp_parent_pages">
                <option value="">Parent Pages</option>';
        $current = isset($_GET['bp_parent_pages']) ? $_GET['bp_parent_pages'] : '';
        foreach ($parent_pages as $page) {
            $select .= sprintf('
                <option value="%s"%s>%s</option>', $page->ID, $page->ID == $current ? ' selected="selected"' : '', $page->post_title);
        }
        $select .= '
            </select>';
        echo $select;
    } else {
        return;
    }
}
add_action( 'restrict_manage_posts', 'bp_admin_filter_parentpages' );

function bp_filter_post_in_category( $args, $field, $post_id ) {
  $taxonomy = 'cat_tips';
  $term_id  = (int) filter_var($post_id, FILTER_SANITIZE_NUMBER_INT);;
  $args['tax_query'] = [
    [
      'taxonomy' => $taxonomy,
      'field'    => 'term_id',
      'terms'    => $term_id,
    ],
  ];
  return $args;

}
add_filter('acf/fields/relationship/query/name=top_stories', 'bp_filter_post_in_category', 10, 3);