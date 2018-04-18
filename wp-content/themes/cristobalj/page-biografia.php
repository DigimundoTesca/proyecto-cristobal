<?php
/**
 * Template for displaying Biography page */

get_header(); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <ul class="psicoteatro-slide">
      <li class="pslide"><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/biografia/01-min.jpg" alt=""></li>
      <li class="pslide"><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/biografia/02-min.jpg" alt=""></li>
      <li class="pslide"><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/biografia/03-min.jpg" alt=""></li>
      <li class="pslide"><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/biografia/04-min.JPG" alt=""></li>
      <li class="pslide"><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/biografia/05-min.jpg" alt=""></li>
      <li class="pslide"><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/biografia/06-min.jpg" alt=""></li>
      <li class="pslide"><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/biografia/07-min.jpg" alt=""></li>
      <li class="pslide"><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/biografia/08-min.jpg" alt=""></li>
      <li class="pslide"><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/biografia/09-min.jpg" alt=""></li>
      <li class="pslide"><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/biografia/10-min.JPG" alt=""></li>
      <li class="pslide"><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/biografia/11-min.JPG" alt=""></li>
      <li class="pslide"><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/biografia/12.png" alt=""></li>
    </ul>
    <div class="row">
      <div class="col-xl-9 col-md-12 content-text">
        <?php while (have_posts()): the_post(); ?>
          <div id="mainContainer" class="biog">
            <?php the_content(); ?>
          </div>
        <?php endwhile ?>
        <br>
        <div class="video_container">
          <video controls>
            <source src="https://s3-us-west-2.amazonaws.com/cristobalbucket/law/01/Mi+Historia+personal+con+el+Tarot+2.mp4">
          </video>
        </div>
      </div>
      <div id="sidebar_2" class="col-xl-3 col-md-12  text-center">
        <?php get_template_part('agenda') ?>
        <?php get_template_part( 'secondarybanner' );  ?>
      </div>
    </div>


  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
