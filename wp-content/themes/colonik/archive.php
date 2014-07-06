<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Enterprise
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>

<div class="gridcatprod">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'templates/content_cat-productos', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php enterprise_paging_nav(); ?>
</div>

		<?php else : ?>

			<?php get_template_part( 'templates/content', 'none' ); ?>

		<?php endif; ?>



<?php get_footer(); ?>
