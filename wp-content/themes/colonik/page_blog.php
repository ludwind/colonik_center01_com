<?php

/*
Template Name: Colonik Blog
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

<div id="primary" class="content-area"><main id="main" class="site-main" role="main">

<div class="blog-dinteres"><?php the_field('deinteres'); ?></div>
		
<!------------------ recent post -------------------->			

<div class="mainrecenthome"><ul class="recentopost"><?php
$the_query = new WP_Query('showposts=3&orderby=post_date&order=desc&category_name=blog-articulosp');	
while ($the_query->have_posts()) : $the_query->the_post(); ?>
 <li>
<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
<table class="imgrecent"><tr><td valign="middle">
<?php the_post_thumbnail( 'blogrecientes' ); ?>
</td></tr></table>
 <?php the_title(); ?></a>
<div class="clear"></div></li><?php endwhile; ?><?php wp_reset_query(); ?></ul></div>



			<?php query_posts('cat=10');
			while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'templates/content_blog', 'page' ); ?>

				<?php
					// if comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
