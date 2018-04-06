<?php
/**
 * Template for displaying welcome page */
get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div id="banner" class="bannermobile">
    </div>
    <div class="mobilecontainer">
      <div class="bannertext">
        <h2 class="bannertitle">
          <?php printf(__('¡Bienvenidos y Bienvenidas!','cristobalj')) ?>
        </h2>
        <p class="quote"><?php printf(__('"Frase Cristobal"','cristobalj')) ?></p>
      </div>
      <div class="newscontainer">
        <?php es_subbox( $namefield = "NO", $desc = "", $group = "" ); ?>
      </div>
    </div>
    <div id="banner1" class="bannerbig">
      <div class="bannercontainer">
        <div class="bannertext">
          <h2 class="bannertitle">
            <?php printf(__('¡Bienvenidos y Bienvenidas!','cristobalj')) ?>
          </h2>
          <p class="quote"><?php printf(__('"Frase Cristobal"','cristobalj')) ?></p>
          <p class="name">Cristóbal Jodorowsky</p>
        </div>
        <div class="newscontainer">
          <?php es_subbox( $namefield = "NO", $desc = "", $group = "Maingroup" ); ?>
        </div>
      </div>
      <div class="buttonLink">
        <a id="extralink" class="d-inline-flex flex-row" href="<?php echo esc_url( get_permalink( get_page_by_title( 'saber mas' ) ) ); ?>" title="Link to know more">
          <p class="d-flex justify-content-center align-items-center"><?php printf(__('Know more','cristobalj')) ?></p>
          <p class="arrow d-flex justify-content-center align-items-center">
            <i class="fa fa-caret-right" aria-hidden="true"></i>
          </p>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-lg-9 order-first d-flex justify-content-center">
        <div class="">
          <h1 class="text-center">Últimas Noticias</h1>
          <?php while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile ?>
        </div>
      </div>
      <div class="sidebar_1 col-md-4 col-lg-3 order-sm-last  justify-content-center">
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
          <div class="calendar"><?php echo do_shortcode('[ai1ec view="agenda"]'); ?></div>
        </div>
        <div class="Tweets mt-md-5">
          <a class="twitter-timeline" height="340px" href="https://twitter.com/cris_jodow?ref_src=twsrc%5Etfw">Tweets by cris_jodow</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          <a href="https://twitter.com/cris_jodow?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @cris_jodow</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          <a href="https://twitter.com/intent/tweet?screen_name=cris_jodow&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @cris_jodow</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <?php get_template_part( 'mainbanner' ); ?>
      </div>


      </div>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

  <?php
  get_footer();
  ?>
