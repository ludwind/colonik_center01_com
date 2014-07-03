<?php
/**
 * @package Enterprise
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<?php if ( is_search() || is_archive() || 1 == get_theme_mod( 'enterprise_post_content' ) ) : ?>
	<div class="entry-summary">
		<?php
			// display featured image
			if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark">
					<?php the_post_thumbnail( 'enterprise_featured_image', array( 'class' => 'featured-img' ) ); ?>
				</a>
				<?php
			endif;
			// output the excerpt
			the_excerpt();
		?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	
	<div class="entry-content">			
		<?php
			// display featured image
			if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark">
					<?php the_post_thumbnail( 'ofertasimgprincipal', array( 'class' => 'featured-img' ) ); ?>
				</a>
				<?php
			endif;
			// output the content
			the_content( get_theme_mod( 'enterprise_read_more', __( 'Continue reading', 'enterprise' ) ) . '<i class="fa fa-caret-right"></i>' );
			// break into pages
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'enterprise' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

<div class="ofertas"><ul>
	<li>paquetes especiales de <?php the_field('ofertas-mes'); ?></li>
	<li><?php the_field('oferta_1'); ?></li>
	<li><?php the_field('oferta_2'); ?></li>
	<li><?php the_field('oferta_3'); ?></li>
	<li><?php the_field('oferta_4'); ?></li>
	<li><?php the_field('oferta_5'); ?></li>
</ul></div>
	
	
</article><!-- #post-## -->
