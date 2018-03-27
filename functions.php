<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() {
  load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );

global $content_width;
  if ( ! isset( $content_width ) ) $content_width = 640;

register_nav_menus(array(
  'main-menu' => __( 'Main Menu', 'blankslate' ),
  'footer-menu' => __( 'Footer Menu', 'blankslate' ),
  'team-menu' => __( 'Team Menu', 'blankslate' ),
  'practice-menu' => __( 'Practice Menu', 'blankslate' )
));
}

add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );

function blankslate_load_scripts() {
  wp_enqueue_script( 'jquery' );
}

add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script() {
  if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}

add_filter( 'the_title', 'blankslate_title' );
  function blankslate_title( $title ) {
    if ( $title == '' ) {
      return '&rarr;';
    } else {
      return $title;
  }
}

add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title ) {
  return $title . esc_attr( get_bloginfo( 'name' ) );
}

// Widgets
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init() {
  register_sidebar( array (
      'name' => __( 'Sidebar Widget Area', 'blankslate' ),
      'id' => 'primary-widget-area',
      'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
      'after_widget' => "</li>",
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );
}

function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

// Custom Post Type ATTORNEYS
// Product Custom Post Type
function lkm_team_member() {
    // set up product labels
    $labels = array(
        'name' => 'Team Members',
        'singular_name' => 'Team Member',
        'add_new' => 'Add Team Member',
        'edit_item' => 'Edit Team Member',
        'view_item' => 'View Team Member',
        'search_items' => 'Search Team Members',
        'not_found' =>  'No Team Member Found',
        'not_found_in_trash' => 'No Team Member found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Team Members'
    );

    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'team-member'),
        'query_var' => true,
        'menu_icon' => 'dashicons-businessman',
        'supports' => array(
            'title',
            'editor',
            'custom-fields',
            'revisions',
            'thumbnail',
            'page-attributes'
        )
    );
    register_post_type( 'team-member', $args );
    flush_rewrite_rules();

    // register taxonomy
    register_taxonomy('team_member_category', 'team-member', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'team-member-taxonomy' )));
}
add_action( 'init', 'lkm_team_member' );



function lkm_practices_init() {
  $labels = array(
      'name' => 'Law Practices',
      'singular_name' => 'Practice',
      'add_new' => 'Add Practice',
      'add_new_item' => 'Add New Practice',
      'edit_item' => 'Edit Practice',
      'new_item' => 'New Practice',
      'all_items' => 'All Practice',
      'view_item' => 'View Practice',
      'search_items' => 'Search Practice',
      'not_found' =>  'No Practice Found',
      'not_found_in_trash' => 'No Practice found in Trash',
      'parent_item_colon' => '',
      'menu_name' => 'Practices',
  );

  $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => array('slug' => 'practice'),
      'query_var' => true,
      'menu_icon' => 'dashicons-networking',
      'supports' => array(
          'title',
          'editor',
          'custom-fields',
          'revisions',
          'thumbnail',
          'page-attributes'
      )
  );
  register_post_type( 'practices', $args );
  flush_rewrite_rules();

  // register taxonomy
  register_taxonomy('practices_category', 'practices', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'practices-category' )));
}

add_action( 'init', 'lkm_practices_init' );
