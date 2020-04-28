<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area center page-center">
		<main id="main" class="site-main" role="main">
		<h1>CATEGORIAS</h1>

				<?php
		$orderby = 'name';
		$order = 'asc';
		$hide_empty = false ;
		$cat_args = array(
			'orderby'    => $orderby,
			'order'      => $order,
			'hide_empty' => $hide_empty,
		);
 
$product_categories = get_terms( 'product_cat', $cat_args );
 
if( !empty($product_categories) ){
    echo '
 
<ul class="category-list">';
    foreach ($product_categories as $key => $category) {


        echo '
 
<li>';
        echo '<a href="'.get_term_link($category).'" >';
        echo $category->name;
        echo '</a>';
        echo '</li>';
    }
    echo '</ul>
 
 
';
}
?>		<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


