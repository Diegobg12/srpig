<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area front-page">
		<main id="main" class="site-main event-section" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content( 'template-parts/content', 'page' ); ?>

				<div class ="events-sectios">
					
					<?php
						$args = array( 'post_type' => 'post', 'numberposts' => '1', 'orderby' => 'date', 'order' => 'DESC' );
						$posts = get_posts( $args ); // returns an array of posts
					?>
					
					<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
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
								
								<h2> Eventos</h2>
								<a href="<?php echo get_permalink(); ?>">
									<h1>	<?php the_title();?> </h1>
									<p class="description-event">	<?php echo wp_trim_words( get_the_content(), $num_words = 25);?> </p>
									<p>	<a href="<?php echo get_link_url() ;?> " target="_blank">
									<i class="fas fa-map-marker-alt"></i>
									Ubicación</a></p>

								</a>

								<a href="google.com/maps?ll=4.669193,-74.073931&z=19&t=m&hl=es&gl=CA&mapclient=embed&cid=11942510028709064983"></a>
								<p class="more-events"> 
									<a href="sirpig/eventos/" >Otros eventos</a>
									<img class="heart" src="<?php echo get_template_directory_uri(); ?>/assets/logo/heart.svg" alt="logo">
								</p> 
							
								 </div>
						</div>
					</div>
				<?php endforeach; wp_reset_postdata(); ?>

				</div>
				</div>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>



