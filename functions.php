<?php

/*------------------------------------*\
  Add Theme Supports
\*------------------------------------*/
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('menus');

// enable sidebar
// if ( function_exists('register_sidebar') )
    // register_sidebar();

/*------------------------------------*\
  Menu
\*------------------------------------*/
register_nav_menus(
  array(
  'main-menu'=>__('Main Menu'),
  )
);

/*------------------------------------*\
  Sidebar
\*------------------------------------*/
function jayhan_widgets() {

  register_sidebar( array(
    'name'          => __( 'Sidebar' ),
    'id'            => 'sidebar',
    'description'   => __( 'Main Sidebar' ),
    'before_widget' => '<div id="%1$s" class="aside__block %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="aside__title">',
    'after_title'   => '</h4>',
  ) );
}
add_action( 'widgets_init', 'jayhan_widgets' );


add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );


/*------------------------------------*\
  CSS
\*------------------------------------*/

function html5blank_styles()
{
  wp_register_style('basecss', get_template_directory_uri() . '/css/base.css', array(), '1.0', 'all');
  wp_enqueue_style('basecss'); // Enqueue it!
}

add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet



/*------------------------------------*\
  PAgination
\*------------------------------------*/
function html5wp_pagination()
{
  global $wp_query;
  $big = 999999999;
  echo paginate_links(array(
    'base' => str_replace($big, '%#%', get_pagenum_link($big)),
    'format' => '?paged=%#%',
    'mid_size' => 2,
    // 'prev_next' => false,
    'prev_text' => __('&lsaquo; Prev '),
    'next_text' => __('Next &rsaquo;'),
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages
  ));
}

add_action('init', 'html5wp_pagination');


/*------------------------------------*\
  Custom View More
\*------------------------------------*/
function html5_blank_view_article($more)
{
  global $post;
  return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts

?>