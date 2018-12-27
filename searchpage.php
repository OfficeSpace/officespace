<?php
/*
Template Name: Search Page
*/
?>
<?php
  //get results
  global $query_string;
  wp_parse_str( $query_string, $search_query );
  $paged = (get_query_var( 'pg' ))? absint( get_query_var('pg') ) : 1;
  $keyword = (get_query_var( 'search' )) ? get_query_var( 'search' ) : '';


  $search_query = array(
                      'post_status'=>'publish',
                      'posts_per_page'=>10,
                      'paged'=> $paged,
                      's' => $keyword
                    );

  //don't give results for blank keywords
  if( empty($keyword) ){
    $search_query['post__in'] = array(0);
  }
  $search = new WP_Query($search_query);
?>
<?php

get_header(); ?>

<div class="wrap">
  <header class="page-header">
    <?php if ( $search->have_posts() ) : ?>
      <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . $search->get_search_query() . '</span>' ); ?></h1>
    <?php else : ?>
      <h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
    <?php endif; ?>
  </header><!-- .page-header -->
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <h1>Search Content</h1>
      <?php get_search_form(); ?>

      <?php
    if ( $search->have_posts() ) :
      /* Start the Loop */
      while ( $search->have_posts() ) : $search->the_post();

        /**
         * Run the loop for the search to output the results.
         * If you want to overload this in a child theme then include a file
         * called content-search.php and that will be used instead.
         */
        get_template_part( 'template-parts/post/content', 'excerpt' );

      endwhile; // End of the loop.

        echo paginate_links( array(
          'format' => '?pg=%#%&search='.$search_query['s'],
          'prev_next' => true,
          'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
          'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
          'current' => $paged,
          'total' => $search->max_num_pages
        ) );

    else : ?>

      <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>
      <?php

    endif;
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
