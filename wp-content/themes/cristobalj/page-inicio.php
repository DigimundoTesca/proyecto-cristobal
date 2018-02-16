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
        <p class="quote"><?php printf(__('"Thanks for visit us in www.psicomagia.es, the Cristobal Jodorowsky web. If you want register to some one of the Crsitobal Jodorowsky events, please, head hover to the section "Events" and select the event that wish in the date that prefer to asist. Act followed  make click en "+info" and proceed to fill in the contact form. ¡Welcome to aboard!. If you are organizator and interest you performing events/workshops with Cristobal in your country, please write to:"','cristobalj')) ?></p>
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
          <p class="quote"><?php printf(__('"Gracias por visitarnos en www.psicomagia.es , la web de Cristóbal Jodorowsky.
          Si quieres registrarte a alguno de los eventos de Cristóbal Jodorowsky, por favor, dirígete a la sección “Eventos” y selecciona el evento que deseas en la fecha que prefieres para asistir.  Acto seguido haz click en “+ Info” y procede a llenar el formulario de contacto.   ¡Bienvenido a Bordo!
          Si eres organizador y te interesa realizar eventos / talleres con Cristóbal en tu país, por favor escribe a:"','cristobalj')) ?></p>
          <p class="name">Cristóbal Jodorowsky</p>
        </div>
        <div class="newscontainer">
          <?php es_subbox( $namefield = "NO", $desc = "", $group = "Maingroup" ); ?>
        </div>
      </div>
      <div class="buttonLink">
        <a id="extralink" class="d-inline-flex flex-row" href="<?php echo esc_url( get_permalink( get_page_by_title( 'saber mas' ) ) ); ?>" title="Link to know more">
          <p class="d-flex justify-content-center align-items-center"><?php printf(__('Know more','cristobalj')) ?></p>
          <p class="arrow d-flex justify-content-center align-items-center">
            <i class="fa fa-caret-right" aria-hidden="true"></i>
          </p>
        </a>
      </div>
    </div>

    <div class="mainpage" id="mainpage">
      <?php get_template_part( 'mainbanner' );  ?>
      <div id="datesContainer">
        <h3>
          <?php
          printf( __( 'Agenda 2018', 'cristobalj' ));
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

  <?php
  get_footer();
  ?>
