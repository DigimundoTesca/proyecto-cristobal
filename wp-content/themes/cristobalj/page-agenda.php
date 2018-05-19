<?php
/**
 * Template for displaying agenda page */

get_header(); ?>
<div id="primary" class="agenda content-area">
  <main id="main" class="site-main">
    <div class="row" id="new_agenda">
      <div class="sidebar_1 col-md-8 col-lg-9 justify-content-center">
        <div id="datesContainer" class="mt-5 text-center" >
          <h3>
            <?php
            printf( __( 'Agenda 2018', 'cristobalj' ));
            ?>
          </h3>
          <h4>
            <?php
            printf( __( 'Know my activities this year', 'cristobalj' ));
            ?>
          </h4>
          <div id="ag"class="calendar"><?php echo do_shortcode('[ai1ec view="agenda"]'); ?></div>
        </div>
      </div>
      <div id="sidebar_2" class="col-lg-3 text-center">
        <div class="Tweets mt-md-5">
          <a class="twitter-timeline" height="340px" href="https://twitter.com/cris_jodow?ref_src=twsrc%5Etfw">Tweets by cris_jodow</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          <a href="https://twitter.com/cris_jodow?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @cris_jodow</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          <a href="https://twitter.com/intent/tweet?screen_name=cris_jodow&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @cris_jodow</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <?php get_template_part( 'mainbanner' );  ?>
      </div>
    </div>


  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
