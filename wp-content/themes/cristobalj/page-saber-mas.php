<?php
/**
 * Template for displaying Know More page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div id="kmorebannercontainer">
      <img id="knowmore" src="<?php echo get_template_directory_uri(); ?>/images/kmore.jpg" alt="banner know more">
    </div>


    <?php while (have_posts()): the_post(); ?>
      <div id="mainContainer" class="more">
        <h3 class="moretitle">
          <?php
          /* translators: 1: Theme name, 2: Theme author. */
          printf( __( 'My life on ', 'cristobalj' ));
          printf(__('<span class="morecolor" > the Psicoteatro</span>', 'cristobalj' ));
          ?>
        </h3>
        <?php the_content(); ?>
      </div>
    <?php endwhile ?>
    <iframe class="morevideo" width="100%" src="https://www.youtube.com/embed/F8FBxAGIlpY">
  </iframe>
  <?php get_template_part( 'secondarybanner' );  ?>


</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>