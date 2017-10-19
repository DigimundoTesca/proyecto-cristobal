<?php
/**
 * Template for displaying welcome page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div id="banner" class="bannermobile">
    </div>
    <div class="mobilecontainer">
      <div class="bannertext">
        <h2 class="bannertitle">
          <?php printf(__('Welcome!','cristobalj')) ?>
        </h2>
        <p class="quote"><?php printf(__('"Here you can put a phrase from Cristobal that welcomes people"','cristobalj')) ?></p>
      </div>
      <div class="newscontainer">
        <?php es_subbox( $namefield = "NO", $desc = "", $group = "" ); ?>
      </div>
    </div>
    <div id="banner1" class="bannerbig">
      <div class="bannercontainer">
        <div class="bannertext">
          <h2 class="bannertitle">
            <?php printf(__('Welcome!','cristobalj')) ?>
          </h2>
          <p class="quote"><?php printf(__('"Here you can put a phrase from Cristobal that welcomes people"','cristobalj')) ?></p>
          <p class="name">Cristóbal Jodorowsky</p>
        </div>
        <div class="newscontainer">
          <?php es_subbox( $namefield = "NO", $desc = "", $group = "Maingroup" ); ?>
        </div>
      </div>
    </div>

    <div class="mainpage" id="mainpage">
      <?php get_template_part( 'mainbanner' );  ?>
      <div id="datesContainer">
        <h3>
          <?php
          printf( __( 'Agenda 20', 'cristobalj' ));
          echo the_time('y');
          ?>
        </h3>
        <h4>
          <?php
          printf( __( 'Know my activities this year', 'cristobalj' ));
          ?>
        </h4>
        <?php while (have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile ?>
      </div>
    </div> 


  </main><!-- #main -->
</div><!-- #primary -->


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
          <a download href="<?php echo get_stylesheet_directory_uri(); ?>/El_collar_del_tigre.pdf" class="d-none downloadthis" title="Libro Tigre">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <?php
    get_footer();
    ?>