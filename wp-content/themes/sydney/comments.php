<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Sydney
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
    <div class="container-comments">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h3 class="comment-title d-none">
			<?php
				// phpcs:ignore WordPress.WP.I18n.MissingSingularPlaceholder
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sydney' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h3>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'sydney' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'sydney' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'sydney' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comments-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size'=> 60,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'sydney' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'sydney' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'sydney' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'sydney' ); ?></p>
	<?php endif; ?>

	<?php 
		$args = array(
			'title_reply'  => 'Haga su Comentario',
            'label_submit' => 'Enviar comentario',
            'fields' => array(
                    'author' => '<div class="col-md-6"><input id="author"  name="author" type="text" value="" maxlength="245" placeholder="Nombre" required="required"></div>',
                    'email' => '<div class="col-md-6"><input id="email" name="email" type="email" value="" maxlength="100" placeholder="Correo (Su correo no será publicado)" required="required"></div>',
                    'cookies' => '<div class="col-md-12 text-center"><label for="wp-comment-cookies-consent">Este sitio se reserva el derecho de publicación de los comentario. Aquellos comentarios denigrantes, ofensivos, difamatorios, no será publicados.</label></div>'
            ),
            'comment_field' => '<div class="col-md-12 col-sm-12 col-xs-12"><textarea id="comment" name="comment" maxlength="65525" required="required" placeholder="Comentario"></textarea></div>',
            'comment_notes_before' => '',
            'class_form' => 'row',


		);
		comment_form($args);
	?>
    </div>

</div><!-- #comments -->
