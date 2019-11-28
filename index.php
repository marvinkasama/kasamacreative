<?php get_header(); ?>
    <div <?php post_class( 'body-wrap' ); ?> >
      <?php if( has_post_thumbnail() ) {
        $hero_styles = 'container--hero';
      } else {

      } ?>
      <div class="container container--fluid padding-xl <?= $hero_styles; ?>" <?php if( has_post_thumbnail() ) { ?> style="background-image:url( <?php the_post_thumbnail_url( 'large' ); ?> )" <?php } ?> >
        <h1 class="title title--xxxl type-center color-lightest"><?php the_title(); ?></h1>
      </div>
      <div class="grid padding-y padding-xl">
        <div class="grid__column grid__column--12 grid__column--2--lg"></div>
        <div class="grid__column grid__column--12  grid__column--8--lg padding-md"><?php the_content(); ?></div>
        <div class="grid__column grid__column--12 grid__column--2--lg"></div>

      </div>

    </div>
<?php get_footer(); ?>
