<?php
/**
 * Template for displaying tarot page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div id="banner" class="bannermobile">
    </div>
    <div class="mobilecontainer">
      <div class="bannertext">
        <h2 class="bannertitle">
          <?php printf(__('Welcome!','cristobalj')) ?>
        </h2>
        <p class="quote"><?php printf(__('"Here you can put a phrase from Cristobal that welcomes people"','cristobalj')) ?></p>
      </div>
      <div class="newscontainer">
        <?php es_subbox( $namefield = "NO", $desc = "", $group = "" ); ?>
      </div>
    </div>
    <div id="banner1" class="bannerbig">
      <div class="bannercontainer">
        <div class="bannertext">
          <h2 class="bannertitle">
            <?php printf(__('Welcome!','cristobalj')) ?>
          </h2>
          <p class="quote"><?php printf(__('"Here you can put a phrase from Cristobal that welcomes people"','cristobalj')) ?></p>
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

    <div class="mainpage" id="mainpage">
      <?php get_template_part( 'mainbanner' );  ?>
      <div id="datesContainer">
        <h3>
          <?php
          printf( __( 'Agenda 20', 'cristobalj' ));
          echo the_time('y');
          ?>
        </h3>
        <h4>
          <?php
          printf( __( 'Know my activities this year', 'cristobalj' ));
          ?>
        </h4>
        <?php while (have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile ?>
      </div>
    </div> 


  </main><!-- #main -->
</div><!-- #primary -->

  <?php
  get_footer();
  ?>