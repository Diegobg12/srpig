<?php
/**
 * The template for displaying all single posts.
 *
 * @package
 */

get_header(); ?>

	<div id="primary" class="content-area product_page center-blog">
		<main id="main" class="site-main" role="main">

		<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php if ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>
			
		<?php endif; // end of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
