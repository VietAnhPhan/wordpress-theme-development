<?php
function get_mytheme_script()
{
  // wp_enqueue_script('mythemjquery', '//code.jquery.com/jquery-3.2.1.slim.min.js',null,'1.0',TRUE);
  wp_enqueue_style('mytheme-style', get_theme_file_URI('/style.css'));
  wp_enqueue_style('carousel-style', get_theme_file_URI('/assets/carousel.css'));
}

add_action('wp_enqueue_scripts', 'get_mytheme_script');

add_theme_support('post-thumbnails');
set_post_thumbnail_size(380, 200); // 50 pixels wide by 50 pixels tall, resize mode

function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer Menu')
    )
  );
}
add_action('init', 'register_my_menus');
function customize_li_menu_item_class($classes, $item, $args)
{
  $classes[] = "nav-item";
  return $classes;
}
add_filter('nav_menu_css_class', 'customize_li_menu_item_class', 10, 4);
// <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
// <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
// <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>