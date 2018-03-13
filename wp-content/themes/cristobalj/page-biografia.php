<?php
/**
 * Template for displaying Biography page */

get_header(); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <ul class="rslides">
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/6.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/11.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/28.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/13.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/1.JPG" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/24.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/25.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/46.jpg" alt=""></li>
    </ul>
    <div class="row">
      <div class="col-xl-9 col-md-12">
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
