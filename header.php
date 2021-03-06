 <?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">

		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				
				<div id="site-header-menu" class="home-margin site-header-menu">
					<a class="home-nav" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img style="width:60px; margin-bottom: 4px;" src="https://topshotap.com/wp-content/uploads/2017/10/topshotap-logo-e1551993031693.png" alt="">
	  				Top<span>Shot</span>
	  				</a>
					<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
								 ) );
							?>
						</nav><!-- .main-navigation -->
					<?php endif; ?>

				</div><!-- .site-header-menu -->
			</div><!-- .site-header-main -->


		</header><!-- .site-header -->

		<div id="content" class="site-content">
