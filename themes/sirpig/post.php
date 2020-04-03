<?php
/*
 * Template Name: New Template
 * Template Post Type: post
 */
  
 get_header();  ?>

get_header(); ?>

<div id="primary" class="content-area journal">

	<ul class="post-content">
		
		<main id="main" class="site-main " role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'single' ); ?>


		<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</ul>

   <?php get_sidebar(); ?>
   </div><!-- #primary -->