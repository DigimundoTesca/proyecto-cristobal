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
              <?php printf( __( '¡Contáctame!', 'cristobalj' )); ?>
            </h4>
            <hr class="my-1">
            <?php echo do_shortcode('[contact-form-7 id="124" title="Contacto"]'); ?>
          </div>
          <div class="col-sm-12 col-md-4">
            <img class="img-fluid"  src="<?php echo get_template_directory_uri(); ?>/images/cristobal/contacto/contacto.jpg" alt="METAMUNDO image">
          </div>
        </div>
        <div id="contactText" class="container my-5 text-center">
          <p id="fraseContacto" class=" pt-3 h5 text-jDe ustify text-center">
            <?php printf( __( '“EL MUNDO ES UNA RED, ESTAMOS CONECTADOS"', 'cristobalj' )); ?>
          </p>
          <p class="text-right mb-2"><b>Cristobal Jodorowsky</b></p>
        </div>
        <?php the_content(); ?>
      </div>
    <?php endwhile ?>
    <?php get_template_part( 'secondarybanner' );  ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
