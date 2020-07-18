<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Links_Wien_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'links-wien-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<!--div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$links_wien_theme_description = get_bloginfo( 'description', 'display' );
			if ( $links_wien_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $links_wien_theme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div--><!-- .site-branding -->
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-3',
				'menu_id'        => 'tertiary-menu',
			) );
			?>
		<div id="mainbar">	
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="main-home">	
			<img 
				src="<?php echo get_template_directory_uri() . '/img/links_logo.svg'; ?>" 
				width="183"
				height="71"
				alt="<?php bloginfo( 'name' ); ?>"
			/>
			</a>
			<a href="#" id="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="<?php echo get_template_directory_uri() . '/img/menu.svg'; ?>"/></a>

		<nav id="nav1" class="main-navigation">

		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		</div><!-- #mainbar -->
		<nav id="secondbar" class="main-navigation">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'secondary-menu',
			) );
			?>
			</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
