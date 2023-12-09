<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Freshcodes
 * @since Freshcodes 1.0
 */
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">
	<?php
		$comments_number = absint( get_comments_number() );
	?>
  <?php if ( have_comments() ) : ?>
    <h2 class="comments-title">
    <?php
    	/* translators: %s: Leave a comment */
			if ( ! have_comments() ) {
				_e( 'Leave a comment', 'nyclaptoprepair' );
			} elseif ( 1 === $comments_number ) {
				/* translators: %s: Post title. */
				printf( _x( 'One Comment &ldquo;%s&rdquo;', 'comments title', 'nyclaptoprepair' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: Number of comments, 2: Post title. */
					_nx(
						'%1$s Comment',
						'%1$s Comment',
						$comments_number,
						'comments title',
						'nyclaptoprepair'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
		?>
			</h2><!-- .comments-title -->
  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
  <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
    <h3 class="screen-reader-text">
      <?php esc_html_e( 'Comment navigation', 'nyclaptoprepair' ); ?>
    </h3>
    <div class="nav-previous">
      <?php previous_comments_link( esc_html__( '&larr; Older Comments', 'nyclaptoprepair' ) ); ?>
    </div>
    <div class="nav-next">
      <?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'nyclaptoprepair' ) ); ?>
    </div>
  </nav>
  <!-- #comment-nav-above -->
  <?php endif; // Check for comment navigation. ?>
  <ol class="comment-list">
    <?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
				'avatar_size'=> 100,
			) );
		?>
  </ol>
  <!-- .comment-list -->
  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
  <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
    <h3 class="screen-reader-text">
      <?php esc_html_e( 'Comment navigation', 'nyclaptoprepair' ); ?>
    </h3>
    <div class="nav-previous">
      <?php previous_comments_link( esc_html__( '&larr; Older Comments', 'nyclaptoprepair' ) ); ?>
    </div>
    <div class="nav-next">
      <?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'nyclaptoprepair' ) ); ?>
    </div>
  </nav>
  <!-- #comment-nav-below -->
  <?php endif; // Check for comment navigation. ?>
  <?php if ( ! comments_open() ) : ?>
  <p class="no-comments">
    <?php esc_html_e( 'Comments are closed.', 'nyclaptoprepair' ); ?>
  </p>
  <?php endif; ?>
  <?php endif; // have_comments() ?>
  <?php comment_form(); ?>
</div><!-- #comments -->