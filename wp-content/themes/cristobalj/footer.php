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
					<?php echo do_shortcode('[contact-form-7 id="99" title="Descarga de libro"]'); ?></div>
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
	<div class="circlecontainer d-none" id="circles">
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
	<div class="site-info pt-3">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( 'Copyright &copy; %s', 'cristobalj' ), 'Cristobal Jodorowsky' );
		?>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf( esc_html__( 'Theme: %1$s by %2$s.', 'cristobalj' ), 'Cristobal', '<a href="http://digimundo.com.mx/" target="_blank">Digimundo Technologies &copy;</a>' );
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	

// Tarot scripts
window.addEvent('domready', function() {
	var positions = $$('#tarot-layout div')
	var cards = $$('#tarot-cards div')
	var selected = 0;
	var spacing = 27;
	var cardIds = Array();
	var posmarco = $("tarot-layout").getPosition();
	var despcard = posmarco.x + 25;
	var vidx = 100;
	var colum = 0;
	var lin = 0;
	cards.each(function(el, key) {
		el.set('tween', {
			duration: 'short'
		});
		colum = colum + 1;
		if (colum > 3) colum = 1;
        // lin = (colum - 1) * 140;
        lin=0;
        var pos = el.getPosition();
        var espacio = Math.floor(Math.random() * 8) + 5;
        var vespacio = Math.floor(Math.random() * 10);
        pos.y = pos.y ;
        pos.x = pos.x + despcard;
        el.setStyles({
        	'position': 'absolute',
        	'left': pos.x + (key * spacing),
        	'top': 0
        })
        el.addClass("rot5");
        el.addEvent('mouseover', function() {
        	el.tween('top', - 10);
        })
        el.addEvent('mouseout', function() {
        	el.tween('top', 0);
        })
        el.addEvent('touchstart', function() {
        	el.click();
        })
        el.addEvent('click', function() {
        	if ((selected) >= positions.length) return false;
        	el.removeEvents('mouseout');
        	el.removeEvents('mouseover');
        	el.removeEvents('click');
        	vidx = vidx + 1;
        	el.style.zIndex = vidx;
        	var progress = new Element('img', {
        		src: 'https://www.losarcanos.com/img_oracle2/' + 't' + el.id + '.jpg',
        		style: 'height:400px;width:220'
        	});
        	var pos = positions[selected].getPosition();
        	Element.Styles.backgroundSize = '@px';
        	var elFx = new Fx.Morph(el, {
        		duration: 2800,
        		transition: Fx.Transitions.Sine.easeout,
        		onComplete: function() {
        			el.tween('opacity', 1, 0, {
        				duration: 'long'
        			});
        			el.removeClass("rot5");
        			el.addClass("muevetee");
        			progress.inject(el);
        			el.tween('opacity', 0, 1, {
        				duration: 'long'
        			});

        		}
        	});
        	cardIds.push(el.id);
        	elFx.start({
                // 'top': pos.y,
                'top': -500,
                'left': pos.x-42,
                'height': [132, 400],
                'width': [80, 220],
                'background-size': [80, 160]
              });
        	selected++;
        	if ((selected) >= positions.length) {
        		(function() {
        			document.getElementById("return").removeClass("Reintentar");
        			document.getElementById("imgRet").removeClass("Reintentar");

        		}).delay(4000);
        	}
        })
      });
});

function calculaAncho() {
	if (document.layers) {
		ancho = window.innerWidth;
	} else {
		ancho = document.body.clientWidth;
	}
	return ancho;
}
</script>

</body>
</html>
