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
				<div class="circle">ver</div>
				<div class="text">Los videos más vistos del mes.</div>
			</div>
			<div class="circlecontent">
				<div class="circle">oir</div>
				<div class="text">Los videos más vistos del mes</div>
			</div>
			<div class="circlecontent">
				<div class="circle">leer</div>
				<div class="text">Artículos e inspiraciones semanales.</div>
			</div>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cristobalj' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Copyright &copy; %s', 'cristobalj' ), 'Cristobal Jodorowsky' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'cristobalj' ), 'Cristobal Theme', '<a href="http://digimundo.com.mx/" target="_blank">Digimundo México</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
