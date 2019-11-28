<?php get_header(); ?>
    <div <?php post_class( 'body-wrap' ); ?> >
      <?php if( have_posts() ) { ?>
        <?php while( have_posts() ) {
          the_post(); ?>
          <?php if( has_post_thumbnail() ) {
            $hero_styles = 'container--hero padding-xl';
            $title_styles = 'color-lightest';
            $subtitle_styles = 'color-lightest';
          } else {
            $hero_styles = 'padding-md bg-color-light';
            // $title_styles = 'color-primary';
            $subtitle_styles = 'color-medium';
          } ?>
          <div class="container container--fluid <?= $hero_styles; ?>" <?php if( has_post_thumbnail() ) { ?> style="background-image:url( <?php the_post_thumbnail_url( 'large' ); ?> )" <?php } ?> >
            <div class="grid grid--gutterless">
              <div class="grid__column grid__column--2--lg"></div>
              <div class="grid__column grid__column--8--lg">
                <h1 class="title title--xxxl type-center <?= $title_styles; ?>"><?php the_title(); ?></h1>

                <div class="list list--inline type-center padding-md padding-x">

                  <p class="list__item subtitle subtitle--sm <?= $subtitle_styles; ?>">
                    <?= get_the_author_meta( 'display_name' ); ?>
                  </p>
                  <p class="list__item subtitle subtitle--sm <?= $subtitle_styles; ?>">
                    <?php the_date( 'F j, Y' ); ?>
                  </p>
                </div>
              </div>
              <div class="grid__column grid__column--2--lg"></div>
            </div>

          </div>
          <div class="grid padding-y padding-xl">
            <div class="grid__column grid__column--12 grid__column--2--lg"></div>
            <div class="grid__column grid__column--12 container grid__column--8--lg padding-md"><?php the_content(); ?></div>
            <div class="grid__column grid__column--12 grid__column--2--lg"></div>

          </div>
        <?php
        } ?>
      <?php
      } ?>


    </div>
<?php get_footer(); ?>
