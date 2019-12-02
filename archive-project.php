<?php get_header(); ?>
<?php
 $category_term = get_queried_object();
 $featured_image = get_field( 'featured_image', $category_term );
?>
    <div <?php post_class( 'body-wrap' ); ?> >
          <?php if( $featured_image ) {
            $hero_styles = 'container--hero padding-xl';
            $title_styles = 'color-lightest';
            $subtitle_styles = 'color-lightest';
          } else {
            $hero_styles = 'padding-md bg-color-light';
            // $title_styles = 'color-primary';
            $subtitle_styles = 'color-medium';
          } ?>
          <div class="container container--fluid <?= $hero_styles; ?>" <?php if( $featured_image ) { ?> style="background-image:url( <?= wp_get_attachment_image_url( $featured_image, 'large' ); ?> )" <?php } ?> >
            <div class="grid grid--gutterless">
              <div class="grid__column grid__column--3--lg"></div>
              <div class="grid__column grid__column--12 grid__column--6--lg">
                <h1 class="title title--xxxl type-center <?= $title_styles; ?>">Projects</h1>
              </div>
              <div class="grid__column grid__column--3--lg"></div>
            </div>

          </div>
      <?php if( have_posts() ) { ?>
        <div class="grid padding-y padding-xl">
          <div class="grid__column grid__column--12 grid__column--3--lg"></div>
          <div class="grid__column grid__column--12 container grid__column--6--lg padding-md">
              <div class="grid">
                <?php while( have_posts() ) {  the_post(); ?>
                  <div class="grid__column grid__column--6--md grid__column--12 padding-sm">
                    <a href="<?php the_permalink(); ?>" class="card card--project type-center">
                      <?php if( has_post_thumbnail() ) { ?>
                        <?php the_post_thumbnail( 'large', [ 'class' => 'card__image' ] )?>
                      <?php
                      } ?>
                      <div class="card__body">
                        <h3 class="title title--xlarge color-lightest card__title"><?php the_title(); ?></h3>
                      </div>

                    </a>
                  </div>
                <?php
                } ?>
              </div>

          </div>
          <div class="grid__column grid__column--12 grid__column--3--lg">
          </div>
        </div>
      <?php
      } ?>
    </div>
<?php get_footer(); ?>
