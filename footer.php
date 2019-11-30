    <?php get_template_part( 'parts/pagination' ); ?>
    <footer class="footer grid padding-sm padding-y">
      <div class="grid__column grid__column--12 grid__column--3--lg">
        <a href="<?= home_url(); ?>" class="header__link color-lightest title type-center"><?php bloginfo( 'site_title' ); ?></a>
      </div>
      <div class="grid__column grid__column--12 grid__column--9--lg">
        <?php
          $footer_menu_args = [
            'menu' => 'footer',
            'menu_class' => 'menu menu--footer',
            'container' => '',
            'depth' => 2,
            'theme_location' => 'footer'
          ];
        ?>
        <?php
          wp_nav_menu( $footer_menu_args );
        ?>
      </div>
      <div class="grid__column grid__column--12">
        <p class="type-center color-lightest">&copy; <?= get_the_date( 'Y' ); ?> Kasama Creative</p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
