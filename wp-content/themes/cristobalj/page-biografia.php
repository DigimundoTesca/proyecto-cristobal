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
      <div class="col-md-9">
        <?php while (have_posts()): the_post(); ?>
          <div id="mainContainer" class="biog">
            <?php the_content(); ?>
          </div>
        <?php endwhile ?>
        <br>

      </div>
      <div id="sidebar_2" class="col-md-3 text-center">
        <?php get_template_part('agenda') ?>
        <?php get_template_part( 'secondarybanner' );  ?>
      </div>
    </div>


  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
