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
	<div class="topheader">


		<div class="genMenu">
		<nav class="secondary" role="navigation" aria-label="<?php esc_attr_e( 'Secondary', 'austin south terminal' ); ?>">
		<?php if ( has_nav_menu( 'secondary' ) ) : ?>
						<?php wp_nav_menu( array(
							'theme_location' => 'secondary',
							'menu_class'     => 'Secondary',
						) );
			?>
			</nav>
		 <?php endif; ?>

			 </div>

		</div>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<div class="branding">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			 <img src="https://topshotap.com/wp-content/themes/topshotap/images/topshotap-logo.png">
	  </a>
					
							<div class="branding-text">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">EVERY PROJECT DESERVES A TOPSHOT</a>

					</div><!-- .branding-text -->

					</div><!-- .site-branding -->
				
		
				
				

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->




			</div><!-- .site-header-main -->


		</header><!-- .site-header -->

		<div id="content" class="site-content">
