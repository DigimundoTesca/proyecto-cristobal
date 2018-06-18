<?php
/**
 * Template for displaying consultas page */

get_header(); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div class="row" id="consult-template">
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
      </div>
      <div class="col-md-8 col-lg-9 order-lg-first">
        <div class="">
          <br><h1 class="text-center">Consultas de Tarot con Cristobal Jodorowsky</h1>
          <?php echo do_shortcode('[sp_news limit = "1" category="16"] '); ?>
        </div>
        <div class="consult_secondarybanner">
          <?php get_template_part( 'secondarybanner' ); ?>
        </div>
      </div>
      </div>
  </main><!-- #main -->
</div><!-- #primary -->
<script type="text/javascript">
  function addPrevClass (e) {
  var target = e.target;
    if(target.getAttribute('src')) { // check if it is img
      var li = target.parentNode.parentNode;
      var prevLi = li.previousElementSibling;
      if(prevLi) {
        prevLi.className = 'prev';
      }
      target.addEventListener('mouseout', function() {
        prevLi.removeAttribute('class');
      }, false);
    }
  }
  if (window.addEventListener) {
    document.getElementById("dock").addEventListener('mouseover', addPrevClass, false);
  }
</script>
<?php
get_footer();
