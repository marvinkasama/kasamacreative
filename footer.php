    <?php get_template_part( 'parts/pagination' ); ?>
    <div class="padding-xl bg-color-light grid">
      <div class="grid__column grid__column--12 grid__column--3--lg">

      </div>

      <div class="grid__column grid__column--12 grid__column--6--lg">
        <h2 class="title title--xxl color-primary">Contact Us</h2>
        <p>Looking to get a project off the ground? Need a helping hand around your website? Email us at <a href="mailto:anthonymarvin@kasamacreative.com">anthonymarvin@kasamacreative.com</a> or fill out the form below and we’ll get back to you!</p>
        <?= do_shortcode( '[ninja_form id=2]' ); ?>
      </div>
      <div class="grid__column grid__column--12 grid__column--3--lg">

      </div>
    </div>

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
        <p class="type-center color-lightest margin-xs">&copy; <?= get_the_date( 'Y' ); ?> Kasama Creative</p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
