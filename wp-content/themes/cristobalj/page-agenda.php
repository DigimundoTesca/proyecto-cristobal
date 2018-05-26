<?php
/**
 * Template for displaying agenda page */

get_header(); ?>
<div id="primary" class="agenda content-area">
  <main id="main" class="site-main">
    <h1 class="mt-3">Sigue a Cristobal de cerca</h1>
    <div class="row" id="new_agenda">
      <div class="sidebar_1 col-md-12 col-lg-8 justify-content-center">
        <div id="datesContainer" class="mt-3 text-center" >
          <h3>
            <?php
            printf( __( 'Agenda 2018 - 2019', 'cristobalj' ));
            ?>
          </h3>
          <h4>
            <?php
            printf( __( 'Know my activities this year', 'cristobalj' ));
            ?>
          </h4>
          <div id="ag" class="calendar"><?php echo do_shortcode('[ai1ec view="agenda"]'); ?></div>

        </div>


      </div>
      <div id="sidebar_2" class="col-lg-4 text-center">
        <div id="prox_events" class="container mt-3 mb-5">
          <h3 class="text-uppercase ">¡Próximos Eventos!</h3>
          <?php echo do_shortcode('[smartslider3 slider=3]'); ?>
        </div>
        <div class="Tweets mt-md-2 col-11">
          <a class="twitter-timeline" height="340px" href="https://twitter.com/cris_jodow?ref_src=twsrc%5Etfw">Tweets by cris_jodow</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          <a href="https://twitter.com/cris_jodow?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @cris_jodow</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          <a href="https://twitter.com/intent/tweet?screen_name=cris_jodow&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @cris_jodow</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-4">
      <?php get_template_part( 'secondarybanner' );  ?>
    </div>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
