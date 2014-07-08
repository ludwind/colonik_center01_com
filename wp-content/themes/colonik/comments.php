<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Enterprise
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div class="lineadivisoria-comments"></div>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
	<h3 class="comment-reply-title" id="reply-title">Comentarios </h3>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'enterprise' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( '<i class="fa fa-chevron-left"></i> ' . __( 'Older Comments', 'enterprise' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'enterprise' ) . ' <i class="fa fa-chevron-right"></i>' ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<div class="comment-list">
			<?php
				wp_list_comments( array(
					'style'		=> 'div',
					'callback'	=> 'enterprise_comment_template'
				) );
			?>
		</div><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'enterprise' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( '<i class="fa fa-chevron-left"></i> ' . __( 'Older Comments', 'enterprise' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'enterprise' ) . ' <i class="fa fa-chevron-right"></i>' ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'enterprise' ); ?></p>
	<?php endif; ?>
	<?php 
		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );
		comment_form( 
			array(
				'id_form'				=> 'commentform',
				'id_submit'				=> 'submit',
				'title_reply'			=> __( 'Dejanos un comentario', 'enterprise' ),
				'title_reply_to'		=> __( 'Deja un comentario a %s', 'enterprise' ),
				'cancel_reply_link'		=> __( 'Cancel Reply', 'enterprise' ),
				'label_submit'			=> __( 'Enviar comentario', 'enterprise' ),	
				'comment_field'			=>  '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' . '</textarea></p>',	
				'comment_notes_before'	=> '',	
				'comment_notes_after'	=> '',	
				'fields'				=> apply_filters( 'comment_form_default_fields', array(
					'author'				=> '<p class="comment-form-author comment-form-field"><input id="author" name="author" type="text" placeholder="' . __( 'Name (required)', 'enterprise' ) . '"' . $aria_req . ' /></p>',

					'email'					=> '<p class="comment-form-email comment-form-field"><input id="email" name="email" type="email" placeholder="' . __( 'Email (required)', 'enterprise' ) . '"' . $aria_req . ' /></p>',

					'url'					=> '<p class="comment-form-url comment-form-field"><input id="url" name="url" type="url" placeholder="' . __( 'Website URL', 'enterprise' ) . '" /></p>'
					)
				),
			) 
		);
	?>

</div><!-- #comments -->
<p><br></p>