<?php

if( ! function_exists ('hotbody_setup')) :

  function hotbody_setup() {
    // let wordpress handle title tags
    add_theme_support( 'title-tag');
  }

endif;

add_action('after_setup_theme', 'hotbody_setup');

// Register menus

function register_hotbody_menus() {
  register_nav_menus(
    array(
      'primary' => __('Primary menu')
      )
    );
}

add_action('init', 'register_hotbody_menus');

// Add style sheets

function hotbody_scripts() {
  // enqueue the main style sheet and google font url
  wp_enqueue_style('hotbody_styles', get_stylesheet_uri());
  wp_enqueue_style('hotbody_google_fonts', 'https://fonts.googleapis.com/css?family=Ubuntu|Viga' );
}

add_action('wp_enqueue_scripts', 'hotbody_scripts');

?>