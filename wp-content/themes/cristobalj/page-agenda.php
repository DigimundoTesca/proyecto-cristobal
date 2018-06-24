<?php
/**
 * Template for displaying agenda page */

get_header(); ?>
<div id="primary" class="agenda content-area">
  <main id="main" class="site-main">
    <h3 class="h1 mt-3 tituloAgenda text-uppercase">
      <?php
      printf( __( 'Agenda completa', 'cristobalj' ));
      ?>
    </h3>
    <div class="row" id="new_agenda">
      <div class="sidebar_1 col-md-12 col-lg-8 justify-content-center">
        <div id="datesContainer" class="mt-3 text-center" >

          <div id="ag" class="calendar"><?php echo do_shortcode('[ai1ec view="month"]'); ?></div>
        </div>
      </div>
      <div id="sidebar_2" class="col-lg-4 text-center">
        <div id="prox_events" class="container mt-3 mb-5">
          <h3 class="text-uppercase ">¡Próximos Eventos!</h3>
          <?php echo do_shortcode('[smartslider3 slider=3]'); ?>
        </div>
          <?php get_template_part( 'twitter' );?>
      </div>
    </div>
    <div class="container-fluid mt-4">
      <?php get_template_part( 'secondarybanner' );  ?>
    </div>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
