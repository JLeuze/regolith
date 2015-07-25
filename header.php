<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Regolith
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="wrapper">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'dagwood' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

			<div class="site-branding">
				<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			</div>

			<a href="#" id="nav-toggle" class="fa fa-bars fa-2x" aria-hidden="false"><span class="responsive-menu">Menu</span></a>

			<div class="clear"></div>
		</div><!-- .wrapper -->
	</nav><!-- #site-navigation -->

	<?php if ( is_active_sidebar( 'header-widgets' ) ) : ?>
		<header id="masthead" class="site-header" role="banner">
			<div class="wrapper">
				
					<div class="header-widgets">
						<?php dynamic_sidebar( 'header-widgets' ); ?>
					</div>
				
				<div class="clear"></div>
			</div><!-- .wrapper -->
		</header><!-- #masthead -->
	<?php endif; ?>

	<div id="content" class="site-content">