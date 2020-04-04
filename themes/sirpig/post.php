<?php
/*
 * Template Name: New Template
 * Template Post Type: post
 */
  
 get_header();  ?>


<div id="primary" class="content-area journal center-blog">

	<ul class="post-content">
		
		<main id="main" class="site-main " role="main">

		<?php if ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'single' ); ?>


		<?php endif; // End of the loop. ?>
		</main><!-- #main -->
	</ul>

   <?php get_footer(); ?>
   </div><!-- #primary -->