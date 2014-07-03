<?php

/*
Template Name: Colonik-Servicios3:datos-imp_lee-tambien-izq
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
<div class="mainpages"><?php get_template_part( 'templates/content_servicios3', 'page' ); ?></div>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
