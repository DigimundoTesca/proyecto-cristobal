
<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main-news" class="site-main">
      <article id="post_new">
        <div class="thumbnail text-center">
          <?php
          the_post_thumbnail();
           ?>
        </div>
        <div class="text-center" id="date">
          <?php echo the_time('d'); ?>
          <span><?php the_time('M'); ?></span>
          <?php echo the_time('g:i a'); ?>
        </div>
      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', get_post_type() );
        ?>
        <?php echo do_shortcode("[Sassy_Social_Share]"); ?>
      </article>

      <!-- <center><div style="font-family: 'Gotham Rounded';
      font-weight: bold;
      border: 1px solid #92b541;
      background-color: #92b541;
      width: 250px;" >
<a style="color: #FFF" href="#">Reserva tu lugar</a>
</div></center> -->
<br>
<br>
      <?php
      the_post_navigation();


    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
