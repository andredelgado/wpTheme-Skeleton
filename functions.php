<?php

function wpSkeleton_register_theme_menu() {
    register_nav_menu('primary', 'main menu');  
}

function wpSkeleton_theme_support() {
    add_theme_support( 'post-thumbnails' );
}

function wpSkeleton_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}

add_action('init', 'wpSkeleton_register_theme_menu');

add_action( 'after_setup_theme', 'wpSkeleton_theme_support' );

add_filter( 'wp_title', 'wpSkeleton_title_for_home' );

?>