<?php get_header(); ?>
    <div <?php post_class( 'body-wrap' ); ?>>
      <div class="container container--fluid padding-xl bg-color-light">
        <h1 class="title title--xxxl type-center color-primary"><?php bloginfo( 'name' ); ?></h1>
        <h2 class="subtitle subtitle--xxl type-center color-secondary"><?php bloginfo( 'description' ); ?></h2>
      </div>
      <?php if( have_posts() ) { ?>
      <div class="grid padding-y padding-xl">
        <div class="grid__column grid__column--12 grid__column--2--lg"></div>


      <?php
        while( have_posts() ) { ?>
          <?php the_post(); ?>
          <div class="grid__column grid__column--12 container grid__column--8--lg padding-md">

            <?php the_content(); ?>
          </div>
      <?php
        } ?>
        <div class="grid__column grid__column--12 grid__column--2--lg"></div>

    </div>
    <?php
    } ?>
      <div class="grid padding-y padding-xl">
        <div class="grid__column grid__column--12 grid__column--2--lg"></div>
        <div class="grid__column grid__column--12 container grid__column--8--lg padding-md">
          <h2 class="title title--xxl color-primary">
            Recent Projects
          </h2>
          <?php
            $p_args = [
              'post_type' => 'project',
              'posts_per_page' => 4,
            ];
            $p_query = new WP_Query( $p_args );
          ?>
          <?php if( $p_query->have_posts() ) { ?>
            <div class="grid">
              <?php while( $p_query->have_posts() ) {
                $p_query->the_post();
                ?>
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
            } wp_reset_postdata(); ?>
            </div>
          <?php
          } ?>
        </div>
        <div class="grid__column grid__column--12 grid__column--2--lg">
        </div>
      </div>
      <div class="grid padding-y padding-xl">
        <div class="grid__column grid__column--12 grid__column--2--lg"></div>
        <div class="grid__column grid__column--12 container grid__column--8--lg padding-md">
          <h2 class="title title--xxl color-secondary">
            Recent Posts
          </h2>
          <?php
            $p_args = [
              'post_type' => 'post',
              'posts_per_page' => 4,
            ];
            $p_query = new WP_Query( $p_args );
          ?>
          <?php if( $p_query->have_posts() ) { ?>
            <div class="grid">
              <?php while( $p_query->have_posts() ) {
                $p_query->the_post();
                ?>
                <div class="grid__column grid__column--6--md grid__column--12 padding-sm">
                  <a href="<?php the_permalink(); ?>" class="type-center card card--post">
                    <?php if( has_post_thumbnail() ) { ?>
                      <?php the_post_thumbnail( 'large', [ 'class' => 'card__image' ] )?>
                    <?php
                    } ?>
                    <div class="card__body">
                      <h3 class="title title--xlarge color-primary card__title"><?php the_title(); ?></h3>
                    </div>
                  </a>
                </div>

              <?php
            } wp_reset_postdata(); ?>
            </div>
          <?php
          } ?>

        </div>
        <div class="grid__column grid__column--12 grid__column--2--lg">
        </div>
      </div>
    </div>
<?php get_footer(); ?>
