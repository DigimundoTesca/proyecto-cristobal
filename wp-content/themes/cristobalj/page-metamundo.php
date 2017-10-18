<?php
/**
 * Template for displaying METAMUNDO page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <img id="metabanner"  src="<?php echo get_template_directory_uri(); ?>/images/metalogonuevo.png" alt="METAMUNDO image">
    <div class="mobilecontainer">
      <div class="bannertext">
        <h2 class="bannertitle">
          <?php printf(__('Welcome!','cristobalj')) ?>
        </h2>
        <p class="quote metaquote"><?php printf(__('To our school of personal development and expansion of being. <br> A space for everyone','cristobalj')) ?></p>
      </div>
    </div>
    <div id="metabanner1" class="metabannerbig">
      <img id="metabannerbig"  src="<?php echo get_template_directory_uri(); ?>/images/metalogonuevo.png" alt="METAMUNDO image">
      <div class="bannercontainer metacontainer">
        <div class="metabannertext">
          <h2 class="bannertitle">
            <?php printf(__('Welcome!','cristobalj')) ?>
          </h2>
          <p class="quote metaquote"><?php printf(__('To our school of personal development and expansion of being. <br> A space for everyone','cristobalj')) ?></p>
        </div>
      </div>
    </div>
    <!-- Welcome banner -->
    <div class="welcome">
      <img id="metabannerwelcome"  src="<?php echo get_template_directory_uri(); ?>/images/metabanner.jpg" alt="METAMUNDO image">
      <div class="mobilecontainerwelcome">
        <div class="bannertext">
          <h2 class="bannertitle second">
            <?php printf(__('"Here you can put a phrase from Cristobal"','cristobalj')) ?>
          </h2>
          <p class="quote metaquote name"><?php printf(__('Cristobal Jodorowsky','cristobalj')) ?></p>
        </div>
      </div>
    </div>
    <div id="metabanner1welcome" class="metabannerbig">
      <img id="metabannerbig"  src="<?php echo get_template_directory_uri(); ?>/images/metabanner.jpg" alt="METAMUNDO image">
      <div class="bannercontainer metacontainer">
        <div class="metabannertext">
          <h2 class="bannertitle second">
            <?php printf(__('"Here you can put a phrase from Cristobal"','cristobalj')) ?>
          </h2>
          <p class="quote metaquote name"><?php printf(__('Cristobal Jodorowsky','cristobalj')) ?></p>
        </div>
      </div>
    </div>


    <div class="mainpage" id="mainpage">
      <div class="titleContainer">
        <h2 class="bannertitle second">
          <?php printf(__('"Here you can put a phrase from Cristobal"','cristobalj')) ?>
        </h2>
      </div>
    </div>


  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>