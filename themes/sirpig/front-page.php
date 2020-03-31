<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area front-page">
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content( 'template-parts/content', 'page' ); ?>


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<!-- <div class="contacto-maps">
	<div class = "contact">
		<h2 class="has-text-align-center title-image">Contactenos</h2>
		<p>[contact-form-7 id="37" title="Contact form 1"]</p>
	</div>
	<div class = "maps">
		<h2 class="has-text-align-center title-image">Encuentranos</h2>
		<div><iframe style="border: 0;" tabindex="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15906.300053618303!2d-74.073168!3d4.669598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf45fbb51987c1d32!2sSir%20Pig!5e0!3m2!1ses!2sca!4v1584771622305!5m2!1ses!2sca" width="400" height="300" frameborder="0" allowfullscreen="allowfullscreen" aria-hidden="false"></iframe></div>
	</div>
</div> -->


<!-- <ul class="contacto">
	<a href="https://www.google.com/maps/place/Cl.+74+%2350-39,+Bogotá/@4.669659,-74.075381,17z/data=!4m5!3m4!1s0x8e3f9afee50e51e7:0x5c371cc7e12e1059!8m2!3d4.669659!4d-74.0731923">
		<i class="fas fa-map-marker-alt">Barrio Doce de Octubre Bogotá</i>
	</a>
	<a href="https://www.google.com/maps/place/Cra.+51+%2373-2,+Bogotá/@4.6694299,-74.0739538,20.05z/data=!4m5!3m4!1s0x8e3f9afefbec173d:0x27228d3f9bdd8d4b!8m2!3d4.669193!4d-74.0739315">
		<i class="fas fa-map-marker-alt">SIR PIG GOURMET</i>
	</a>
	<a href="https://www.google.com/maps/place/Sir+Pig-+Ch%C3%ADa/@4.8581933,-74.0651246,17z/data=!3m1!4b1!4m5!3m4!1s0x8e3f8793bd6122a9:0xfe9aead90e81a8fd!8m2!3d4.858188!4d-74.0629359">
		<i class="fas fa-map-marker-alt">SIR PIG CHIA</i>
	</a>
	<a href="mailto:sir_pig@hotmail.com">
		<i class="fas fa-envelope"> E-Mail</i>
	</a>
</ul> -->



	