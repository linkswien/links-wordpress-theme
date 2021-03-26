<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Links_Wien_Theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			$categories = get_the_category();
			$category_slugs = [];
			foreach ($categories as $category) {
				array_push($category_slugs, $category->slug);
			}

			if (in_array('brigittenau', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-20 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/brigittenau.jpg)"></div>';
			} else if (in_array('alsergrund', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/alsergrund.jpg)"></div>';
			} else if (in_array('dobling', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/waehring.jpg)"></div>';
			} else if (in_array('donaustadt', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/donaustadt.jpg)"></div>';
			} else if (in_array('favoriten', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/favoriten.jpg)"></div>';
			} else if (in_array('floridsdorf', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/floridsdorf.jpg)"></div>';
			} else if (in_array('hernals', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/hernals.jpg)"></div>';
			} else if (in_array('hietzing', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/penzing.jpg)"></div>';
			} else if (in_array('innere-stadt', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/innere_stadt.jpg)"></div>';
			} else if (in_array('josefstadt', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/josefstadt.jpg)"></div>';
			} else if (in_array('landstrasse', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/landstrasse.jpg)"></div>';
			} else if (in_array('leopoldstadt', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/leopoldstadt.jpg)"></div>';
			} else if (in_array('liesing', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/liesing.jpg)"></div>';
			} else if (in_array('margareten', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/margareten.jpg)"></div>';
			} else if (in_array('mariahilf', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/mariahilf.jpg)"></div>';
			} else if (in_array('meidling', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/meidling.jpg)"></div>';
			} else if (in_array('neubau', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/neubau.jpg)"></div>';
			} else if (in_array('ottakring', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/ottakring-scaled.jpg)"></div>';
			} else if (in_array('penzing', $category_slugs)) {
				echo '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(http://one.wordpress.test/wp-content/uploads/2020/09/penzing.jpg)"></div>';
			}

			?>
		<?php
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
