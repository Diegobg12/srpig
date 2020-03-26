<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<script src="https://kit.fontawesome.com/fa6c85a2f7.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				


				<a class="logo-header" href="/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/logo/logosinfondo.png" alt="logo">
				</a>

					<div class="buttons-header">

							<a class="cart" href="cart">

							<img src="<?php echo get_template_directory_uri(); ?>/assets/logo/compra.svg" alt="logo">
							
								<?php
								total_items_cart()
								?>
							</a>
							
							<button class="menu-toggle">
									<p class="burger-menu fas fa-bars"></p>
							</button>
					</div>
					
					<div class="menu-main-navigation-container">
						<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
					</div><!-- #site-navigation -->
				


			</header><!-- #masthead -->

			<div id="content" class="site-content">
