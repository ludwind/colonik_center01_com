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

<div class="serviciostwocolums"><ul><li>	


	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->
			
<?php the_content( get_theme_mod( 'enterprise_read_more', __( 'Continue reading', 'enterprise' ) ) . '<i class="fa fa-caret-right"></i>' );
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'enterprise' ),
				'after'  => '</div>',
) ); ?><?php endif; ?>	

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'enterprise' ) );
				if ( $categories_list && enterprise_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php echo '<i class="fa fa-archive"></i>' . $categories_list; ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'enterprise' ) );
				if ( $tags_list ) :
			?>
			<span class="tag-links">
				<?php echo '<br><i class="fa fa-tags"></i>' . $tags_list; ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>
	</footer><!-- .entry-footer -->


	

</li><li>

<!-------Featured image--------->
<div class="serviciosfeatured"><?php if ( has_post_thumbnail() ) : ?>
<a href="<?php the_permalink(); ?>" rel="bookmark">
<?php the_post_thumbnail( 'servicios_featured', array( 'class' => 'featured-img' ) ); ?></a>
<?php else: ?><?php endif ?></div>

<!-------Compartelo--------->
<div class="comparteloizq"><article>
"<?php the_field('compartelo_izq'); ?>"</article>
	<div class="redesizq"><div class="comparteloflotrigh"><span>Comp&#225;rtelo</span><ul>
<li><a href="http://www.pinterest.com/" target="_new"><img src="wp-content/themes/colonik/img/home/redes-pinterest.png" alt="" /></a></li>
<li><a href="https://plus.google.com/" target="_new"><img src="wp-content/themes/colonik/img/home/redes-googleplus.png" alt="" /></a></li>
<li><span class="st_twitter_custom"><img src="wp-content/themes/colonik/img/home/redes-twitter.png" alt="" /></span></li>
<li><span class="st_facebook_custom"><img src="wp-content/themes/colonik/img/home/redes-facebook.png" alt="" /></span></li>
	</ul></div></div>	
</div>


<!-------Fin primera columna--------->



</li></ul><p></p><Br></div>	
</article><!-- #post-## -->


<!------------------- pinterest code --------------------- -->


<!------------------- pinterest code --------------------- -->
