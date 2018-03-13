
<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">
    <?php
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', get_post_type() );
      ?>

      <center><div style="font-family: 'Gotham Rounded';
      font-weight: bold;
      border: 1px solid #92b541;
      background-color: #92b541;
      width: 250px;" >
<a style="color: #FFF" href="#">Reserva tu lugar</a>
</div></center>
<br>
<br>


    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
