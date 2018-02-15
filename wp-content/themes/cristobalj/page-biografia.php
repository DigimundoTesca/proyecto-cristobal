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
    <?php while (have_posts()): the_post(); ?>
      <div id="mainContainer" class="biog">
        <h3 class="biotitle">
          <?php
          /* translators: 1: Theme name, 2: Theme author. */
          printf( __( 'The history ', 'cristobalj' ));
          printf(__('<span class="biocolor" > of Cristobal</span>', 'cristobalj' ));
          ?>
        </h3>
        <iframe id="iframe_container" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" width="550" height="400" src="https://prezi.com/embed/a9uaaiibi-8f/?bgcolor=ffffff&amp;lock_to_path=0&amp;autoplay=0&amp;autohide_ctrls=0&amp;landing_data=bHVZZmNaNDBIWnNjdEVENDRhZDFNZGNIUE43MHdLNWpsdFJLb2ZHanI0VHhrSDJpTnEyc2pIZXFqWnlIVFA3bUJnPT0&amp;landing_sign=HtkqpC6ZbEG5NWnt2Usz46V7ji4fbfkbXz-jrRrTWRk"></iframe>
        <?php the_content(); ?>
      </div>
    <?php endwhile ?>
    <?php get_template_part( 'secondarybanner' );  ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
