<?php
  if( !is_single() ) {
    $prev_text = sprintf(
    	'%s <span class="nav-prev-text">%s</span>',
    	'<span aria-hidden="true">&larr;</span>','Newer <span class="nav-short">Posts</span>'
    );
    $next_text = sprintf(
    	'<span class="nav-next-text">%s</span> %s', 'Older <span class="nav-short">Posts</span>',
    	'<span aria-hidden="true">&rarr;</span>'
    );

    $posts_pagination = get_the_posts_pagination(
    	array(
    		'mid_size'  => 1,
    		'prev_text' => $prev_text,
    		'next_text' => $next_text,
    	)
    );

    // If we're not outputting the previous page link, prepend a placeholder with visibility: hidden to take its place.
    if ( strpos( $posts_pagination, 'prev page-numbers' ) === false ) {
    	$posts_pagination = str_replace( '<div class="nav-links">', '<div class="nav-links"><span class="prev page-numbers placeholder" aria-hidden="true">' . $prev_text . '</span>', $posts_pagination );
    }

    // If we're not outputting the next page link, append a placeholder with visibility: hidden to take its place.
    if ( strpos( $posts_pagination, 'next page-numbers' ) === false ) {
    	$posts_pagination = str_replace( '</div>', '<span class="next page-numbers placeholder" aria-hidden="true">' . $next_text . '</span></div>', $posts_pagination );
    }

    if ( $posts_pagination ) { ?>

    	<div class="pagination--wrapper section-inner">

    		<hr class="pagination__separator" aria-hidden="true" />

    		<?php echo $posts_pagination; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- already escaped during generation. ?>

    	</div><!-- .pagination-wrapper -->

    	<?php
    }
  } else {
    $next_post = get_next_post();
    $prev_post = get_previous_post();

    if ( $next_post || $prev_post ) {

    	$pagination_classes = '';

    	if ( ! $next_post ) {
    		$pagination_classes = ' pagination--one pagination--prev';
    	} elseif ( ! $prev_post ) {
    		$pagination_classes = ' pagination--one pagination--prev';
    	}

    	?>

    	<nav class="pagination--wrapper section-inner" role="navigation">

    		<hr class="pagination__separator" aria-hidden="true" />

    		<div class="pagination--single<?php echo esc_attr( $pagination_classes ); ?>">

    			<?php
    			if ( $prev_post ) {
    				?>

    				<a class="previous-post" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
    					<span class="arrow" aria-hidden="true">&larr;</span>
    					<span class="title"><span class="title-inner"><?php echo wp_kses_post( get_the_title( $prev_post->ID ) ); ?></span></span>
    				</a>

    				<?php
    			}

    			if ( $next_post ) {
    				?>

    				<a class="next-post" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">

    						<span class="title"><span class="title-inner"><?php echo wp_kses_post( get_the_title( $next_post->ID ) ); ?></span></span>
                <span class="arrow" aria-hidden="true">&rarr;</span>
    				</a>
    				<?php
    			}
    			?>

    		</div><!-- .pagination-single-inner -->

    	</nav><!-- .pagination-single -->

    	<?php
    }
  }
 ?>
