<?php
/**
 * Template for displaying welcome page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
      <ul class="rslides">
        <li><img src="<?php echo get_template_directory_uri(); ?> /images/bio1.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?> /images/bio2.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?> /images/bio3.jpg" alt=""></li>
      </ul>
    

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
