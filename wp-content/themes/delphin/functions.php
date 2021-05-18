<?php 

function my_theme_stylesheet(){

  wp_enqueue_style('bootstrap-css', get_theme_file_uri() .'/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style( 'theme-stylesheet', get_theme_file_uri() . '/style.css');

}
add_action('wp_enqueue_scripts','my_theme_stylesheet');

function my_theme_js_scripts(){

  wp_enqueue_script('popper.js', get_theme_file_uri().'/bootstrap/js/popper-1.12.9.min.js', array('jquery'));
  wp_enqueue_script('bootstrap.js', get_theme_file_uri().'/bootstrap/js/bootstrap.min.js', array('jquery'));

  wp_enqueue_script('maivdigital_scripts', get_template_directory_uri() . '/js/main.js',array('jquery'),'1.0.'.rand(), true);

}
add_action('wp_enqueue_scripts','my_theme_js_scripts');


function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu', 'delphin' ),
      'footer-menu' => __( 'Footer Menu', 'delphin' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );


/* remove eMoji emoticons junk in the <head> tags */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/* remove the junk that Yoast SEO puts in the <head> tag */
add_filter( 'disable_wpseo_json_ld_search', '__return_true' );
add_filter( 'wpseo_canonical', '__return_false' );