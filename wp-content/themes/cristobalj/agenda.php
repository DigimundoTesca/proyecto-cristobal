<?php
/*
Template Name: mainbanner
*/
 ?>

<div id="datesContainer" class="mt-5" >
  <div class="">
  <h3 class="text-center">
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
<?php get_template_part( 'twitter' ); ?>
