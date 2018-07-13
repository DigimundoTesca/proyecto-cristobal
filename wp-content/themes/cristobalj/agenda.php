<?php
/*
Template Name: mainbanner
*/
 ?>
 <div id="lateralAgenda" class="mt-5 text-center" >
   <h2>
     <?php
     printf( __( 'Agenda 2018', 'cristobalj' ));
     ?>
   </h2>
   <div id="prox_events" class="container mt-3 mb-5">
     <h3 class="text-uppercase mb-2">¡Próximos Eventos!</h3>
     <div class="contentEvents">
         <?php echo do_shortcode('[smartslider3 slider=3]'); ?>
     </div>
   </div>
 </div>
<?php get_template_part( 'twitter' ); ?>
