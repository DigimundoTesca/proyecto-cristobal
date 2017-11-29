<?php
/*
Template Name: secondarybanner
*/
?>
<div id="secondarybannercontainer">
  <div class="mainbannercontent">
    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Metamundo' ) ) ); ?>" title="Metamundo">
      <div class="metmundo">
        <h3>
          <?php printf(__('Live the experience!','cristobalj')) ?>
        </h3>
        <p class="text-center">
          <?php printf(__('"Next generations"','cristobalj')) ?>
        </p>
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
          <?php printf(__('Tarot queries','cristobalj')) ?>
        </p>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Tarot.jpg" alt="">
      </div>
    </a>
  </div>
</div>