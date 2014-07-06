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


	
</table>
<div class="contactanos"><ul>
	<li><div class="cont-top-mapa"><?php the_field('direccion'); ?></div>
	<article><iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.8585287462965!2d-90.50979544999994!3d14.60713374999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a3cbc7b6b1c3%3A0xc4a9b19dd065c47d!2sSixtino+I%2C+6A+Avenida+6-63!5e0!3m2!1ses-419!2sgt!4v1404604323377" width="800" height="600" frameborder="0" style="border:0"></iframe></article>
	</li>
	
	<li><div class="cont-top-form"><?php the_field('contacto_ftop'); ?></div>
	<article><?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }?>
	</article></li>
</ul></div>
	
	
</article><!-- #post-## -->
