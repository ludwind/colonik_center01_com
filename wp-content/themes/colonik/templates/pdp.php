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
					<?php the_post_thumbnail( 'servicios_featured', array( 'class' => 'featured-img' ) ); ?>
				</a>
				<?php
			endif;
			// output the excerpt
			the_excerpt();
		?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	
<!--------------------- start servicios page ------------------------->

<div class="serviciostwocolums pdp"><ul><li>	


	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->
			
<?php the_content( get_theme_mod( 'enterprise_read_more', __( 'Continue reading', 'enterprise' ) ) . '<i class="fa fa-caret-right"></i>' );
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'enterprise' ),
				'after'  => '</div>',
) ); ?><?php endif; ?>	

	


<div class="leetambien leetambiendesk"><ul>
<li><img src="<?php echo get_bloginfo('template_directory');?>/img/servicios/leermas.png"/></li>
<li>Tambi&#233;n te recomendamos: <?php the_field('leetambien'); ?></li></ul></div>
	

</li><li>

<!-------Featured image--------->
<div class="serviciosfeatured pdpfotita"><?php if ( has_post_thumbnail() ) : ?>
<a href="<?php the_permalink(); ?>" rel="bookmark">
<?php the_post_thumbnail( 'productos', array( 'class' => 'featured-img' ) ); ?></a>
<?php else: ?><?php endif ?></div>


<!-------Fin primera columna--------->

<div class="leetambien leetambienmobile"><ul>
<li><img src="<?php echo get_bloginfo('template_directory');?>/img/servicios/leermas.png"/></li>
<li>Tambi&#233;n te recomendamos: <?php the_field('leetambien'); ?></li></ul></div>
	

</li></ul><p></p><Br></div>	
</article><!-- #post-## -->


<!------------------- pinterest code --------------------- -->


<!------------------- pinterest code --------------------- -->
