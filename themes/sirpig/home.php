<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area center eventos">
		<main id="main" class="site-main" role="main">
			<div >
				<?php
					$my_id = 461;
					$post_id_461 = get_post($my_id);
				?>
				<?php
					$content = $post_id_461->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);
					echo $content;
				?>

				<div id="secondary" class="domicilios-widget" role="complementary">
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div><!-- #secondary -->
			</div>
			<h1>EVENTOS</h1>
			<?php while ( have_posts() ) : the_post(); ?>

			<div class=" events-sectios">


			<?php
						$posts = get_posts( $args ); // returns an array of posts
					?>

				
					
					<img class="bell" src="<?php echo get_template_directory_uri(); ?>/assets/logo/bell.svg" alt="logo">
					<div class ="card-container" >
						
								<div class="image-card">
									<img class = "wp-post-image" src = "<?php 
									if ( get_the_post_thumbnail($post_id) != '' ) {

										echo get_the_post_thumbnail_url();
									  } else {
									   echo catch_that_image();									  
									  }
									?>">
								</div>

								<div class='eventos-container'>
								
								<h2> SirPigGO</h2>
								<a href="<?php echo get_permalink(); ?>">
									<h1>	<?php the_title();?> </h1>
									<p class="description-event">	<?php echo wp_trim_words( get_the_content(), $num_words = 15);?> </p>
									<p>	<a href="<?php echo get_link_url() ;?> " target="_blank">
									<i class="fas fa-map-marker-alt"></i>
									Ubicación</a></p>

								</a>

								<a href="google.com/maps?ll=4.669193,-74.073931&z=19&t=m&hl=es&gl=CA&mapclient=embed&cid=11942510028709064983"></a>
								<p class="more-events"> 
									<a href="<?php echo get_permalink(); ?>" >Ver más..</a>
									<img class="heart" src="<?php echo get_template_directory_uri(); ?>/assets/logo/heart.svg" alt="logo">
								</p> 
							
								 </div>
						</div>
					</div>
			</div>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
