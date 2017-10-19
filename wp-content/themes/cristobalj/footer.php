<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 */

?>

<!-- Modal -->
<div class="modal fade text-center" id="downloadBook" tabindex="-1" role="dialog" aria-labelledby="downloadBookLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title text-center" id="downloadBookLabel">Descarga "El collar del tigre"</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="h3 text-center">Llena el siguiente formulario y descarga tu libro.</p>
				<div class="d-flex justify-content-center">
					<?php echo do_shortcode('[contact-form-7 id="99" title="Contact form 1"]'); ?></div>
				</div>
				<div class="modal-footer">
					<a download href="<?php echo get_stylesheet_directory_uri(); ?>/El_collar_del_tigre.pdf" id="downloadThis" class="d-none" title="Libro Tigre">Download</a>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>

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
