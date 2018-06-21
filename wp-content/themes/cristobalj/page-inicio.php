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
          <?php printf(__('¡Bienvenidos!','cristobalj')) ?>
        </h2>
        <div class="begin-slide">
          <div class="mslide clearfix">
            <p class="quote text-center mt-4"><?php printf(__('"El oro interior que produces quedará como huella en el alma de la humanidad"','cristobalj')) ?></p>
            <p class="name text-right">Cristóbal Jodorowsky</p>
          </div>
          <div class="mslide clearfix">
            <p class="quote text-center mt-4"><?php printf(__('"Si tú no eres capaz de verte a ti mism@ ¿Cómo se lo vas a exigir al mundo? ."','cristobalj')) ?></p>
            <p class="name text-right">Cristóbal Jodorowsky</p>
          </div>
          <div class="mslide clearfix">
            <p class="quote text-center mt-4"><?php printf(__('"La mente militar es un atentado a la profunda naturaleza humana."','cristobalj')) ?></p>
            <p class="name text-right">Cristóbal Jodorowsky</p>
          </div>
          <div class="mslide clearfix">
            <p class="quote text-center"><?php printf(__('"La tecnología (si se abusa de ella) puede atentar al profundo contacto sensorial con la naturaleza que nos humaniza. No lo abandonemos por gratificaciones sintéticas y virtuales."','cristobalj')) ?></p>
            <p class="name text-right">Cristóbal Jodorowsky</p>
          </div>
          <div class="mslide clearfix">
            <p class="quote text-center"><?php printf(__('"Tu cuerpo no es "el mal", "el pecado", no eres una cabeza separada del cuerpo, no eres un ego individual, el lenguaje no es el territorio. Cambia tus paradigmas y adáptate a la vida, no le pidas que ella se adapte a tu arrogancia."','cristobalj')) ?></p>
            <p class="name text-right">Cristóbal Jodorowsky</p>
          </div>
        </div>
      </div>
      <div class="newscontainer">
        <?php es_subbox( $namefield = "NO", $desc = "", $group = "" ); ?>
      </div>
    </div>
    <div id="banner1" class="bannerbig">
      <div class="bannercontainer">
        <div class="bannertext">
          <h2 class="bannertitle">
            <?php printf(__('¡Bienvenidos!','cristobalj')) ?>
          </h2>
          <div id="begin-slide">
            <div class="slide clearfix">
              <p class="quote text-center"><?php printf(__('"El oro interior que produces quedará como huella en el alma de la humanidad"','cristobalj')) ?></p>
              <p class="name text-right">Cristóbal Jodorowsky</p>
            </div>
            <div class="slide clearfix">
              <p class="quote text-center"><?php printf(__('"Si tú no eres capaz de verte a ti mism@ ¿Cómo se lo vas a exigir al mundo? ."','cristobalj')) ?></p>
              <p class="name text-right">Cristóbal Jodorowsky</p>
            </div>
            <div class="slide clearfix">
              <p class="quote text-center"><?php printf(__('"La mente militar es un atentado a la profunda naturaleza humana."','cristobalj')) ?></p>
              <p class="name text-right">Cristóbal Jodorowsky</p>
            </div>
            <div class="slide clearfix">
              <p class="quote text-center"><?php printf(__('"La tecnología (si se abusa de ella) puede atentar al profundo contacto sensorial con la naturaleza que nos humaniza. No lo abandonemos por gratificaciones sintéticas y virtuales."','cristobalj')) ?></p>
              <p class="name text-right">Cristóbal Jodorowsky</p>
            </div>
            <div class="slide clearfix">
              <p class="quote text-center"><?php printf(__('"Tu cuerpo no es "el mal", "el pecado", no eres una cabeza separada del cuerpo, no eres un ego individual, el lenguaje no es el territorio. Cambia tus paradigmas y adáptate a la vida, no le pidas que ella se adapte a tu arrogancia."','cristobalj')) ?></p>
              <p class="name text-right">Cristóbal Jodorowsky</p>
            </div>
          </div>

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
    <div class="row">
      <div class="sidebar_1 col-md-4 col-lg-3 order-md-last  justify-content-center">
        <div id="datesContainer" class="mt-5 text-center" >
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
          <div class="calendar"><?php echo do_shortcode('[ai1ec view="agenda"]'); ?></div>
        </div>
        <?php get_template_part( 'twitter' ); ?>
        <div class="inicio">
            <?php get_template_part( 'mainbanner' ); ?>
        </div>

      </div>
      <div class="col-md-8 col-lg-9 order-lg-first d-flex justify-content-center">
        <div class="container-fluid">
          <h1 class="text-center">Últimas Noticias</h1>
          <?php while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile ?>
        </div>
      </div>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

  <?php
  get_footer();
  ?>
