<?php 
/**
 * Template for displaying Biography page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <ul class="rslides">
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/1.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/2.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/3.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/4.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/5.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/6.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/7.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/8.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/9.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/10.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/11.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/12.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/13.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/14.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/15.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/16.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/17.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/18.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/19.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/20.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/21.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/22.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/23.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/24.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/25.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/26.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/27.jpg" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/28.jpg" alt=""></li>
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
        <iframe id="iframe_container" frameborder="0" webkitallowfullscreen="0" mozallowfullscreen="0" allowfullscreen="0" src="https://prezi.com/embed/nfl9qlc6gzcf/?bgcolor=ffffff&amp;lock_to_path=1&amp;autoplay=4s&amp;autohide_ctrls=0&amp;landing_data=bHVZZmNaNDBIWnNjdEVENDRhZDFNZGNIUE43MHdLNWpsdFJLb2ZHanI5dkY4SjlwSEp0U25OR25XbDJDVVhTdlpnPT0&amp;landing_sign=kERd7enWSYlUpX0svrltiiDhsybX84sCTNg1l6-iv78"></iframe>
        <?php the_content(); ?>
      </div>
    <?php endwhile ?>
    <?php get_template_part( 'secondarybanner' );  ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
