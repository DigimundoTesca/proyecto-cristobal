<?php
/**
 * Template for displaying Biography page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php while (have_posts()): the_post(); ?>
      <div id="mainContainer" class="biog">
        <div class="row mt-5 justify-content-center">
          <div class="col-sm-12 col-md-7">
            <h4 class="font-weight-bold text-left">
              <?php printf( __( 'Contact me!', 'cristobalj' )); ?>
            </h4>
            <hr class="my-1">
            <?php echo do_shortcode('[contact-form-7 id="124" title="Contacto"]'); ?>
          </div>
          <div class="col-sm-12 col-md-4">
            <img class="img-fluid"  src="<?php echo get_template_directory_uri(); ?>/images/cristobal/contacto/contacto.jpg" alt="METAMUNDO image">
          </div>
        </div>
        <div id="contactText" class="container my-5">
          <h5 class="mt-3 mb-0 text-left">
            <?php printf( __( "let's be in touch!", 'cristobalj' )); ?>
          </h5>
          <p class="mb-4 mt-1 text-jDe ustify">
            <?php printf( __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, similique nostrum fugiat voluptatibus! Quasi voluptates, deserunt unde consequuntur, eligendi, laboriosam ullam facere quidem fugit at ipsa minus sed harum omnis.', 'cristobalj' )); ?>
          </p>
        </div>
        <?php the_content(); ?>
      </div>
    <?php endwhile ?>
    <?php get_template_part( 'secondarybanner' );  ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
