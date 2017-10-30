<?php
/**
 * Template for displaying book download form */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main d-flex justify-content-center">
    <?php echo do_shortcode('[contact-form-7 title="Descarga de libro"]'); ?>
    <a download href="<?php echo get_stylesheet_directory_uri(); ?>/El_collar_del_tigre.pdf" id="downloadThis" class="d-none" title="Libro Tigre">Download</a>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>