<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Links_Wien_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<section class="error-404">
			<header class="page-header">
				<h1 class="page-title">
					<?php esc_html_e( 'Page not found', 'links-wien-theme'); ?>
				</h1>
			</header><!-- .page-header -->

			<div class="page-content">
			<p><?php esc_html_e( 'We are sorry, but that page can&rsquo;t be found', 'links-wien-theme'); ?></p>
			<p><?php esc_html_e( 'While you are here, how about a donation to LINKS?', 'links-wien-theme'); ?></p>

				<p>
					<a href="https://spenden.links-wien.at" class="button">
						<?php esc_html_e( 'Donate now', 'links-wien-theme'); ?>
</a>
				</p>

				<p><?php esc_html_e( 'Or try a new search.', 'links-wien-theme'); ?></p>
				<form action="/">
					<input type="text" name="s" placeholder="<?php esc_html_e( 'Search', 'links-wien-theme'); ?>" class="search-input" />
				</form>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
