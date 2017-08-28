<?php
/**
 * Template for displaying METAMUNDO page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <img id="metabanner"  src="<?php echo get_template_directory_uri(); ?> /images/metalogonuevo.png" alt="METAMUNDO image">
    <div class="mobilecontainer">
      <div class="bannertext">
        <h2 class="bannertitle">
          <?php printf(__('Welcome!','cristobalj')) ?>
        </h2>
        <p class="quote metaquote"><?php printf(__('To our school of personal development and expansion of being. <br> A space for everyone','cristobalj')) ?></p>
      </div>
    </div>
    <div id="metabanner1" class="metabannerbig">
      <img id="metabannerbig"  src="<?php echo get_template_directory_uri(); ?> /images/metalogonuevo.png" alt="METAMUNDO image">
      <div class="bannercontainer metacontainer">
        <div class="metabannertext">
          <h2 class="bannertitle">
            <?php printf(__('Welcome!','cristobalj')) ?>
          </h2>
          <p class="quote metaquote"><?php printf(__('To our school of personal development and expansion of being. <br> A space for everyone','cristobalj')) ?></p>
        </div>
      </div>
    </div>


    <div class="mainpage" id="mainpage">
    </div>


  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>