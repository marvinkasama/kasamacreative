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

  add_filter('get_the_archive_title', function ($title) {
      if ( is_category() ) {
          $title = single_cat_title( '', false );
      } elseif ( is_tag() ) {
          $title = single_tag_title( '', false );
      } elseif ( is_author() ) {
          $title = '<span class="vcard">' . get_the_author() . '</span>';
      } elseif ( is_year() ) {
          $title = get_the_date( _x( 'Y', 'yearly archives date format' ) );
      } elseif ( is_month() ) {
          $title = get_the_date( _x( 'F Y', 'monthly archives date format' ) );
      } elseif ( is_day() ) {
          $title = get_the_date( _x( 'F j, Y', 'daily archives date format' ) );
      } elseif ( is_tax( 'post_format' ) ) {
          if ( is_tax( 'post_format', 'post-format-aside' ) ) {
              $title = _x( 'Asides', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
              $title = _x( 'Galleries', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
              $title = _x( 'Images', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
              $title = _x( 'Videos', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
              $title = _x( 'Quotes', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
              $title = _x( 'Links', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
              $title = _x( 'Statuses', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
              $title = _x( 'Audio', 'post format archive title' );
          } elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
              $title = _x( 'Chats', 'post format archive title' );
          }
      } elseif ( is_post_type_archive() ) {
          $title = post_type_archive_title( '', false );
      } elseif ( is_tax() ) {
          $title = single_term_title( '', false );
      } else {
          $title = __( 'Archives' );
      }
      return $title;
  });

  function add_custom_pt( $query ) {
    if (  is_category() && $query->is_main_query() ) {
      $query->set( 'post_type', array( 'post', 'project' ) );
    }
  }
  add_action( 'pre_get_posts', 'add_custom_pt' );
?>
