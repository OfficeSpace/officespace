<?php
/*
Template Name: Elementor Home Page
*/

get_header(); ?>


<div class="site-content-contain">

      <div data-elementor-type="post" data-elementor-id="<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php twentyseventeen_edit_link( get_the_ID() ); ?>
        <?php
          the_content();

          wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
            'after'  => '</div>',
          ) );
        ?>
      </div><!-- .entry-content -->
</div>

<?php get_footer(); ?>
