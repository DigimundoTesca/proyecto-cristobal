<?php
/**
 * Template for displaying book download form */

get_template_part( 'header_book' );  ?>
<a href="../index.php" class="fa fa-home" style="font-size: 50px;" aria-hidden="true" >Regresar</a>
<div id="primary" class="content-area">
  <main id="main" class="site-main d-flex flex-column align-items-center bookdownloadContainer">
    <h2 class="bannertitle py-5">
      <?php printf(__('You have downloaded - "El collar del tigre"','cristobalj')) ?>
    </h2>
    <div class="row" style=" height:50vh;">
      <div class="col-12 d-flex justify-content-center align-items-center">
        <h3 class="display-3"><?php printf(__('See you soon','cristobalj')) ?></h3>
      </div>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
