<?php
/**
 * Template for displaying book download form */

get_template_part( 'header_book' );  ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main d-flex flex-column align-items-center bookdownloadContainer">
    <div id="bkttlcontainer" class="row d-flex justify-content-center w-100 mb-5">
      <h2 id="dwnktitle" class="bannertitle py-2">
        <?php printf(__('A gift for you!','cristobalj')) ?>
      </h2>
    </div>
    <div class="row d-flex flex-wrap">
      <div class="col-lg-6 d-flex justify-content-center align-items-center mb-3 downloadImage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/books/download.png" alt="book image" class="py-2">
      </div>
      <div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center mt-2 downloadForm">
        <?php echo do_shortcode('[contact-form-7 title="Descarga de libro"]'); ?>
        <a download href="<?php echo get_stylesheet_directory_uri(); ?>/El_collar_del_tigre.pdf" id="downloadThis" class="d-none" title="Libro Tigre">Download</a>
      </div>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>