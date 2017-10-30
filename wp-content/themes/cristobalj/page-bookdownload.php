<?php
/**
 * Template for displaying book download form */

get_template_part( 'header_book' );  ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main d-flex flex-column align-items-center bookdownloadContainer">
    <h2 class="bannertitle py-5">
      <?php printf(__('Download "El collar del tigre"!','cristobalj')) ?>
    </h2>
    <div class="row d-flex flex-wrap">
      <div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center downloadForm">
        <?php echo do_shortcode('[contact-form-7 title="Descarga de libro"]'); ?>
        <a download href="<?php echo get_stylesheet_directory_uri(); ?>/El_collar_del_tigre.pdf" id="downloadThis" class="d-none" title="Libro Tigre">Download</a>
      </div>
      <div class="col-lg-6 d-flex justify-content-center align-items-center downloadImage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/books/Tigre1.jpg" alt="book image">
      </div>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>