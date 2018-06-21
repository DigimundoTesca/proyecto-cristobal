<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container-fluid">
			<?php
			while ( have_posts() ) : the_post();


			endwhile; // End of the loop.
			?>
			<div class="row" id="event-container">
				<div class="col-12">
					<h1><?php the_title(); ?></h1>
				</div>

				<div class=" col-sm-12 col-md-12 col-lg-4 col-xl-5  post-img align-self-center text-center">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class=" col-sm-12 col-md-12 col-lg-8 col-xl-7 align-self-center calendar-content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
