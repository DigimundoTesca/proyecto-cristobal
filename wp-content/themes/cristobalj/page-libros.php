<?php
/**
 * Template for displaying welcome page */

get_header(); ?>
<div class="row">
  <div class="col-md-8">
    <div id="primary" class="content-area">
      <main id="main" class="site-main">
        <?php while (have_posts()): the_post(); ?>
          <div id="mainContainer">
            <?php the_content(); ?>
            <div id="mainProjects">
              <?php
              $args = array(
                'post_type' => 'booksblog',
                'posts_per_page' => 1000,
                'orderby' => 'title',
                'order' => 'ASC'
              );
              $proye = new WP_Query($args);
              while ($proye->have_posts()): $proye->the_post();
                ?>
                <div class="mainProjectContainer">
                  <h3 class="booktitle"><?php the_title(); ?></h3>
                  <div class="bookcontainer">
                    <div class="bookimg"><?php the_post_thumbnail(); ?>
                    </div>
                    <div class="bookdescription">
                      <?php the_excerpt(); ?>
                      <div class="row mt-3">
                        <div class="col-md-6">
                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Bookdownload' ) ) ); ?>" class="post_button"><?php printf(__('Descarga gratis','cristobalj')) ?></a>
                        </div>
                        <div class="col-md-6">
                          <a href="<?php the_permalink(); ?>" class="post_button"><?php printf(__('Ver más','cristobalj')) ?></a>
                        </div>

                      </div>


                    </div>
                  </div>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </div>
        <?php endwhile ?>


      </main><!-- #main -->
    </div><!-- #primary -->
  </div>
  <div id="sidebar_2" class="col-md-4 text-center">
    <?php get_template_part('agenda');  ?>
  </div>

</div>


<?php
get_footer();
?>
