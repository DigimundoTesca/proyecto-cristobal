<?php
/**
 * Template for displaying agenda page */

get_header(); ?>
<div id="primary" class="agenda content-area">
  <main id="main" class="site-main">
    <div class="row">
      <div class="col-xl-12 col-md-12 content-text mb-4" id="agenda_container_page">
        <div id="datesContainer" class="mt-5" >
          <h3 class="text-center">
            <?php
            printf( __( 'Agenda 2018-2019', 'cristobalj' ));
            ?>
          </h3>
          <h4>
            <?php
            printf( __( 'Know my activities this year', 'cristobalj' ));
            ?>
          </h4>
          <div class="row calendar">
            <div class="col-lg-9 col-md-8" id="cal"><?php echo do_shortcode('[ai1ec view="monthly"]'); ?></div>
            <div class="col-lg-3 col-md-4" id="ag"><?php echo do_shortcode('[ai1ec view="agenda"]'); ?></div>
          </div>

        </div>
      </div>

      <div id="sidebar_2" class="col-xl-12 col-md-12  text-center">
        <?php get_template_part( 'secondarybanner' );  ?>
      </div>
    </div>


  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
