<html <?php language_attributes(); ?> >
  <head>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="header grid padding-sm padding-y">
      <div class="grid__column grid__column--12 grid__column--3--lg">
        <a href="<?= home_url(); ?>" class="header__link color-lightest title type-center"><?php bloginfo( 'site_title' ); ?></a>
      </div>
      <div class="grid__column grid__column--12 grid__column--9--lg">
        <?php
          $main_menu_args = [
            'menu' => 'primary',
            'menu_class' => 'menu menu--header',
            'container' => '',
            'depth' => 2,
            'theme_location' => 'primary'
          ];
        ?>
        <?php
          wp_nav_menu( $main_menu_args );
        ?>
        <?php
          $mobile_menu_args = [
            'menu' => 'mobile',
            'menu_class' => 'menu menu--mobile',
            'container' => '',
            'depth' => 2,
            'theme_location' => 'mobile'
          ];
        ?>
        <?php
          wp_nav_menu( $mobile_menu_args );
        ?>
      </div>

    </header>
