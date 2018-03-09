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

			the_post_navigation();

		endwhile; // End of the loop.
		?>
		<div class="download">
			<a  href="<?php echo esc_url( get_permalink( get_page_by_title( 'Bookdownload' ) ) ); ?>" class="post_button text-center"><?php printf(__('Descarga gratis','cristobalj')) ?></a>
		</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
