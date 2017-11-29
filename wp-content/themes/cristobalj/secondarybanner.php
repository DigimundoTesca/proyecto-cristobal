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
        <p class="text-center text-dark my-0">
          <?php printf(__('"Next generations"','cristobalj')) ?>
        </p>
        <p class="text-center text-dark mb-0">
          <?php printf(__('Mexico febrero 2018','cristobalj')) ?>
          <?php printf(__('Argentina julio 2018','cristobalj')) ?>
        </p>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/metalogonuevo.png" alt="">
      </div>
    </a>
  </div>
  <div class="mainbannercontent">
    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Bookdownload' ) ) ); ?>" title="Bookdownload">
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
    <a href="#" title="Tarot">
      <div class="mindHack">
        <h3>
          <?php printf(__('Tarot queries','cristobalj')) ?>
        </h3>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Tarot.jpg" alt="">
      </div>
    </a>
  </div>
</div>