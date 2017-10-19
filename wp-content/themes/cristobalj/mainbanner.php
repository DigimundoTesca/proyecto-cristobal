<?php
/*
Template Name: mainbanner
*/
?>
<div id="mainbannercontainer">
  <div class="mainbannercontent">
    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Metamundo' ) ) ); ?>" title="Metamundo">
      <div class="metmundo">
        <h3>
          <?php printf(__('Live the experience!','cristobalj')) ?>
        </h3>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/metalogonuevo.png" alt="">
      </div>
    </a>
  </div>
  <div class="mainbannercontent">
    <a data-toggle="modal" data-target="#downloadBook">
      <div class="gift">
        <h3>
          <?php printf(__('We give you','cristobalj')) ?>
        </h3>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/book.png" alt="">
        <p>
          <?php printf(__('Free download','cristobalj')) ?>
        </p>
      </div>
    </a>
  </div>
  <div class="mainbannercontent">
    <a href="http://mindhackers.mx" target="_blank" title="Mind Hackers">
      <div class="mindHack">
        <h3>
          <?php printf(__('Cristobal','cristobalj')) ?>
        </h3>
        <p>
          <?php printf(__('on Mind Hackers','cristobalj')) ?>
        </p>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mindhack.png" alt="">
      </div>
    </a>
  </div>
  <!-- Modal -->
  <div class="modal fade text-center" id="downloadBook" tabindex="-1" role="dialog" aria-labelledby="downloadBookLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title text-center" id="downloadBookLabel">Descarga "El collar del tigre"</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="h3 text-center">Llena el siguiente formulario y descarga tu libro.</p>
          <div class="d-flex justify-content-center">
          <?php echo do_shortcode('[contact-form-7 id="99" title="Contact form 1"]'); ?></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>