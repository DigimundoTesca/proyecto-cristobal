<?php
/**
 * Template for displaying tarot page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div id="banner" class="bannermobile tarot">
    </div>
    <div class="mobilecontainer">
      <div class="bannertext">
        <h2 class="bannertitle">
          <?php printf(__('Tarot!','cristobalj')) ?>
        </h2>
        <p class="name"><?php printf(__('"Cristobal will answer some queries"','cristobalj')) ?></p>
      </div>
      <div class="newscontainer">
        <?php es_subbox( $namefield = "NO", $desc = "", $group = "" ); ?>
      </div>
    </div>
    <div id="banner1" class="bannerbig tarot">
      <div class="bannercontainer">
        <div class="bannertext">
          <h2 class="bannertitle">
            <?php printf(__('Tarot!','cristobalj')) ?>
          </h2>
          <p class="name"><?php printf(__('"Cristobal will answer some queries"','cristobalj')) ?></p>
        </div>
      </div>
    </div>

    <div class="mainpage" id="mainpage">
      <div class="container-fluid">
        <?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>


        <?php echo do_shortcode('[contact-form-7 id="134" title="Tarot"]'); ?>
      </div>
    </div> 



  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>