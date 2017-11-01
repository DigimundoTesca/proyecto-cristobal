<?php
/**
 * Template for displaying book download form */

get_template_part( 'header_book' );  ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main d-flex flex-column align-items-center bookdownloadContainer">
    <h2 class="bannertitle py-5">
      <?php printf(__('Thank you for download my book - "El collar del tigre"','cristobalj')) ?>
    </h2>
    <div class="row">
      <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center">
        <h3><?php printf(__('Wait for new surprises soon','cristobalj')) ?></h3>
      </div>
      <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center downloadImage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/books/Tigre1.jpg" alt="book image">
      </div>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>