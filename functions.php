<?php
  function theme_styles() {
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap', null, '', 'all' );
    wp_enqueue_style( 'main_theme', get_stylesheet_directory_uri() . '/assets/css/theme.css', null, '', 'all' );
    wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/custom.css', null, '', 'all' );
    wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/style.css', null, '', 'all' );
  }
  add_action( 'wp_enqueue_scripts', 'theme_styles' );

  function theme_scripts() {
    wp_enqueue_script( 'main_theme', get_stylesheet_directory_uri() . '/assets/js/bundle.js', [ 'jquery' ], '', true );
  }
  add_action( 'wp_enqueue_scripts', 'theme_scripts' );

  function theme_menus() {
    register_nav_menu( 'primary', 'Primary Menu' );
    register_nav_menu( 'mobile', 'Mobile Menu' );
    register_nav_menu( 'footer', 'Footer Menu' );
  }
  add_action( 'after_setup_theme', 'theme_menus' );
?>
