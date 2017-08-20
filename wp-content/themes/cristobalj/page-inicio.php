<?php
/**
 * Template for displaying welcome page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div id="banner" class="bannermobile">
    </div>
      <div class="bannercontainer">
        <div class="bannertext"></div>
        <div class="newscontainer">
          <?php es_subbox( $namefield = "NO", $desc = "", $group = "" ); ?>
        </div>
      </div>
    <div id="banner1" class="bannerbig">
      <div class="bannercontainer">
        <div class="bannertext"></div>
        <div class="newscontainer">
          <?php es_subbox( $namefield = "NO", $desc = "", $group = "" ); ?>
        </div>
      </div>
    </div>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
