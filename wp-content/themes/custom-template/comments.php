<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
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

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( '1' === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'twentysixteen' ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s thought on &ldquo;%2$s&rdquo;',
							'%1$s thoughts on &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'twentysixteen'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentysixteen' ); ?></p>
	<?php endif; ?>

	<?php
		$fields =  array(
		  	'author' =>
			    '<div class="row"><div class="col-lg-4 col-md-12 mb-4">
				    <div class="input-group md-form form-sm form-3 pl-0">
				    	<div class="input-group-prepend">
	                        <span class="input-group-text white black-text" id="basic-addon8">1</span>
	                    </div>' .
				    	'<input id="author" name="author" class="form-control mt-0 black-border rgba-white-strong" placeholder="' . __( 'Name', 'domainreference' ) .( $req ? ' *' : '' ) . '" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"' . $aria_req . ' />
				    </div>
			    </div>',

		  	'email' =>
		  		'<div class="col-lg-4 col-md-6 mb-4">
				    <div class="input-group md-form form-sm form-3 pl-0">
				    	<div class="input-group-prepend">
	                        <span class="input-group-text white black-text" id="basic-addon8">2</span>
	                    </div>' .
				    	'<input id="author" name="author" class="form-control mt-0 black-border rgba-white-strong" placeholder="' . __( 'Email', 'domainreference' ) .( $req ? ' *' : '' ) . '" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />
				    </div>
			    </div>',
		    'url' =>
		  		'<div class="col-lg-4 col-md-6 mb-4">
				    <div class="input-group md-form form-sm form-3 pl-0">
				    	<div class="input-group-prepend">
	                        <span class="input-group-text white black-text" id="basic-addon8">3</span>
	                    </div>' .
				    	'<input id="url" name="url" class="form-control mt-0 black-border rgba-white-strong" placeholder="' . __( 'Website', 'domainreference' ) .( $req ? ' *' : '' ) . '" type="text" value="' . esc_attr(  $commenter['comment_author_url'] ) . '" size="30"' . $aria_req . ' />
				    </div>
			    </div></div>',
		);
		$comments_args = array(
			'class_submit'=> 'btn btn-grey btn-sm',
			'fields' => $fields,
	        // change the title of send button 
	        'label_submit'=>'Send',
	        // change the title of the reply section
	        'title_reply'=>'Leave a reply',
	        // remove "Text or HTML to be displayed after the set of comment fields"
	        'comment_notes_after' => '',
	        // redefine your own textarea (the comment body)
	        'comment_field' => 
	        '<div class="row">
		        <div class="col-12 mt-1">
		        	<div class="form-group basic-textarea rounded-corners shadow-textarea">
		        		<textarea class="form-control" id="comment" name="comment" rows="5" placeholder="' . _x( 'Comment', 'noun' ) . '" aria-required="true"></textarea>
		        	</div>
		        	<div class="text-right">
		        	</div>
	        	</div>
	        </div>',
		);
		comment_form( $comments_args);
	?>

</div><!-- .comments-area -->
