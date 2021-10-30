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
			$has_thumbnail = has_post_thumbnail( $post->ID );
			
			if ( $has_thumbnail ) {
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];
			} else {
				$image = get_bezirksseiten_header_image( $categories );
			}

			if ( has_menschen_von_links( $categories ) && $has_thumbnail ) {
				echo '<img src=\'' . $image . '\' alt="Portrait">';
			}
			else {
				echo '<div class="wp-block-cover has-background-dim-20 has-background-dim is-position-center-center taller" style="background-image:url(\'' . $image . '\')"></div>';
			}

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
