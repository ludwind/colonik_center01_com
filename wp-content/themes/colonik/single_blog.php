<?php


/*
Template Name Posts: Blog
*/


/**
 * The Template for displaying all single posts.
 *
 * @package Enterprise
 */

get_header(); ?>

<div id="primary" class="content-area maincontenblogin"><main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/content_blog-inner', 'single' ); ?>


			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>