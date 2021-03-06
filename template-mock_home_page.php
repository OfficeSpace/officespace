<?php
/*
Template Name: Mock Home Page
*/

get_header();?>

<div class="wrap">
  <?php if ( is_home() && ! is_front_page() ) : ?>
    <header class="page-header">
      <h1 class="page-title"><?php single_post_title(); ?></h1>
    </header>
  <?php else : ?>
  <header class="page-header">
    <h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
  </header>
  <?php endif; ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <?php
      // the query
      $paged = (get_query_var( 'pg' ))? absint( get_query_var('pg') ) : 1;
      $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>10, 'paged'=> $paged));

      if ( $wpb_all_query->have_posts() ) :

        /* Start the Loop */
        while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();

          /*
           * Include the Post-Format-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
           */
          get_template_part( 'template-parts/post/content', get_post_format() );

        endwhile;

        echo paginate_links( array(
          'format' => '?pg=%#%',
          'prev_next' => true,
          'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
          'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
          'current' => $paged,
          'total' => $wpb_all_query->max_num_pages
        ) );


      else :

        get_template_part( 'template-parts/post/content', 'none' );

      endif;
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->
  <?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
