<?php
/**
 * Template part for displaying books
 *
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
    if ( is_singular() ) :
      the_title( '<h1 class="entry-title">', '</h1>' );
    else :
      the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    endif;

    if ( 'booksblog' === get_post_type() ) : ?>
    <div class="entry-meta">
      <div class="bookcontainer">
        <div class="bookimg single-book"><?php the_post_thumbnail(); ?>
        </div>
      </div><!-- .entry-meta -->
      <?php
      endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content books-description">
      <?php
      the_content( sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cristobalj' ),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        get_the_title()
      ) );

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cristobalj' ),
        'after'  => '</div>',
      ) );
      ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
      <?php cristobalj_entry_footer(); ?>
    </footer><!-- .entry-footer -->
  </article><!-- #post-<?php the_ID(); ?> -->
