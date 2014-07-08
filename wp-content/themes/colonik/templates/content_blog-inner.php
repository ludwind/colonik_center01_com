<?php
/**
 * @package Enterprise
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!------------------- thumb --------------------- -->	
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
			?>
	</div><!-- .entry-summary -->
	
<!------------------- titular --------------------- -->		
	<header class="entry-header">
		<div class="entry-meta-feed">
			<?php enterprise_posted_on(); ?>
		</div>
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->
	

<?php the_content( get_theme_mod( 'enterprise_read_more', __( 'Continue reading', 'enterprise' ) ) . '<i class="fa fa-caret-right"></i>' );
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'enterprise' ),
				'after'  => '</div>',
) ); ?>


<?php if ( is_search() || is_archive() || 1 == get_theme_mod( 'enterprise_post_content' ) ) : ?>
<?php else : ?><?php endif; ?>

	
</article><!-- #post-## -->
