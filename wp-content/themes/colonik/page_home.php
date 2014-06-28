<?php

/*
Template Name: Colonik Home
*/


/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Enterprise
 */

get_header(); ?>



			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'templates/content_home', 'page' ); ?>

	

			<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
