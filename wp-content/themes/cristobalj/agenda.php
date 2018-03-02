<?php
/*
Template Name: mainbanner
*/
 ?>


<div id="datesContainer" class="mt-5" >
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
<h2>Últimos Tweets de Cristóbal</h2>
<a class="twitter-timeline" height="320px" href="https://twitter.com/cris_jodow?ref_src=twsrc%5Etfw">Tweets by cris_jodow</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<a href="https://twitter.com/cris_jodow?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @cris_jodow</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<a href="https://twitter.com/intent/tweet?screen_name=cris_jodow&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @cris_jodow</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
