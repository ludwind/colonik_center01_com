<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Enterprise
 */

get_header(); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/pdp', 'single' ); ?>

	

		<?php endwhile; // end of the loop. ?>



<?php is_single() && 'post' != get_post_type() ? get_sidebar() : ''; // only remove sidebar on *standard* posts ?>
<?php get_footer(); ?>