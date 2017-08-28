<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="circlecontainer" id="circles">
			<div class="circlecontent">
				<a href="" title=""><div class="circle"><?php printf(__('Watch','cristobalj')) ?></div></a>
				<div class="text"><?php printf(__('The most watched videos of the month.','cristobalj')) ?></div>
			</div>
			<div class="circlecontent">
				<a href="" title=""><div class="circle"><?php printf(__('Hear','cristobalj')) ?></div></a>
				<div class="text"><?php printf(__('The most watched videos of the month.','cristobalj')) ?></div>
			</div>
			<div class="circlecontent">
				<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title=""><div class="circle"><?php printf(__('Read','cristobalj')) ?></div></a>
				<div class="text"><?php printf(__('Weekly articles and inspirations.','cristobalj')) ?></div>
			</div>
		</div>
		<div class="site-info">
			<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Copyright &copy; %s', 'cristobalj' ), 'Cristobal Jodorowsky' );
			?>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'cristobalj' ), 'Cristobal Theme', '<a href="http://digimundo.com.mx/" target="_blank">Digimundo Technologies &copy;</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
