<?php
/**
 * @package Enterprise
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-------------------- Category page --------------->
	<?php if ( is_search() || is_archive() || 1 == get_theme_mod( 'enterprise_post_content' ) ) : ?>
	<div class="entry-summary productcat">
		<?php
			// display featured image
			if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark">
					<?php the_post_thumbnail( 'cat_productos', array( 'class' => 'featured-img' ) ); ?>
				</a>
				<?php
			endif;
			// output the excerpt
		?>
	</div><!-- .entry-summary -->
<div class="homecatunderline"></div>
<div class="titularhomecat"><?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
</div>

<!-------------------- Fin Category page --------------->

	<?php else : ?>
	
	
	<div class="entry-content">			
		<?php
			// display featured image
			if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark">
					<?php the_post_thumbnail( 'enterprise_featured_image', array( 'class' => 'featured-img' ) ); ?>
				</a>
				<?php
			endif;
	
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	
</article><!-- #post-## -->
