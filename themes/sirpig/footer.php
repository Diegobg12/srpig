<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div id="contactenos"></div>
				<div class="site-info">

				<div class='info-footer'>
					<div class="horario">
							
						<div id="secondary" class="social-container" role="complementary">
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
						</div><!-- #secondary -->

						<div>
							<h2>CONSULTA</h2>
							<?php wp_nav_menu(array('theme_location' => 'secondary', 'menu_id' => 'Menu 2')); ?>
						</div>

						<div id="secondary" class="domicilios-widget" role="complementary">
							<?php dynamic_sidebar( 'sidebar-3' ); ?>
						</div><!-- #secondary -->
					</div>
		
					
					<div class="contactenos-form">
					<h2>CONTACTANOS</h2>
					<?php echo do_shortcode('[contact-form-7 id="5" title="CONTACTENOS"]'); ?>
					</div>
				</div>


				<div id="myDIV">
					
					<h2>PUNTOS DE VENTA</h2>
					<div class="ubicaciones">
						<button id="0"  class="btn">SirPig Chia</button>
						<button id="1"  class="btn">SirPig Criollo</button>
						<button id="2"  class="btn active">SirPig Bogotá</button>
					</div>

					<div class='map'>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.4843573843787!2d-74.065124585237!3d4.858187996472395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8793bd6122a9%3A0xfe9aead90e81a8fd!2sSir%20Pig-%20Ch%C3%ADa!5e0!3m2!1ses!2sca!4v1585898480000!5m2!1ses!2sca" width="1400" height="298" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					<div class='map'>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d497.07199579329676!2d-74.0739538!3d4.6694299!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9afefbec173d%3A0x27228d3f9bdd8d4b!2sCra.%2051%20%2373-2%2C%20Bogot%C3%A1%2C%20Colombia!5e0!3m2!1ses!2sca!4v1585898435326!5m2!1ses!2sca" width="1400" height="298" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					<div class='map show'>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3976.5746675933174!2d-74.075381!3d4.669659!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9afee50e51e7%3A0x5c371cc7e12e1059!2sCl.%2074%20%2350-39%2C%20Bogot%C3%A1%2C%20Colombia!5e0!3m2!1ses!2sca!4v1585897523209!5m2!1ses!2sca" width="1400" height="298" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>

					
					<div id="secondary" class="social-media-container" role="complementary">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div><!-- #secondary -->


					
					<div class="copyRight">
						<p>Diseñado por Valent design y Desarrollado por Diego Bustos <?php echo date("Y")?></p>
					</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>


