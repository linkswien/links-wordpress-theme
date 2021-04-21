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
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="description" content="Am 11. Oktober endlich LINKS wählen! Denn nur gemeinsam können wir es schaffen, dass Wien eine Stadt für alle wird – nicht nur für die, die sich’s leisten können." />
	<meta name="keywords" content="LINKS, Wien, Partei, Politik, Arbeit, Wohnen, Wahlrecht, Gemeinderat, Rathaus, Bezirk, Bezirke, Bezirksrat, Innere Stadt, Leopoldstadt, Landstraße, Wieden, Margareten, Mariahilf, Neubau, Josefstadt, Alsergrund, Favoriten, Simmering, Meidling, Hietzing, Penzing, Rudolfsheim-Fünfhaus, Ottakring, Hernals, Währing, Döbling, Brigittenau, Floridsdorf, Donaustadt, Liesing" />
	<meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>" />
	<meta property="og:description" content="Am 11. Oktober endlich LINKS wählen! Denn nur gemeinsam können wir es schaffen, dass Wien eine Stadt für alle wird – nicht nur für die, die sich’s leisten können." />
	<meta property="og:image" content="<?php echo get_template_directory_uri() . '/img/og_banner_spikas.jpg'; ?>" />
	<meta property="og:image:url"  content="<?php echo get_template_directory_uri() . '/img/og_banner_spikas.jpg'; ?>" />
	<meta property="twitter:image" content="<?php echo get_template_directory_uri() . '/img/og_banner_spikas.jpg'; ?>" />
	<meta name="twitter:card" content="summary_large_image">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'links-wien-theme'); ?></a>

		<header class="site-header">
			<?php
			wp_nav_menu(array(
				'theme_location'  => 'menu-3',
				'menu_id'         => 'tertiary-menu',
				'container'       => 'div',
				'container_class' => 'menu-tertiary-container'
			));
			?>
			<div id="mainbar">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="main-home">
					<img src="<?php echo get_template_directory_uri() . '/img/links_logo.svg'; ?>" width="183" height="71" alt="<?php bloginfo('name'); ?>" />
				</a>
				<a href="#" id="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="<?php echo get_template_directory_uri() . '/img/menu.svg'; ?>" /></a>

				<nav id="nav1" class="main-navigation">

					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					));
					?>
				</nav><!-- #nav1 -->
			</div><!-- #mainbar -->
			<nav id="secondbar" class="main-navigation">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'secondary-menu',
				));
				?>
			</nav><!-- #secondbar -->
		</header>

		<div id="content" class="site-content">
