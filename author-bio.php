<?php
/**
 * The template for displaying Author bios
 *
 * @package WordPress
 * @subpackage Freshcodes
 * @since Freshcodes 1.0
 */
?>
<div class="author-info">
  <div class="author-avatar">
    <?php
		/**
		 * Filter the author bio avatar size.
		 *
		 * @since Freshcodes 1.0
		 *
		 * @param int $size The avatar height and width size in pixels.
		 */
		$author_bio_avatar_size = apply_filters( 'freshcodes_author_bio_avatar_size', 100 );
		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
  </div>
  
  <!-- .author-avatar -->
  <div class="author-description">
 	<h4 class="author-title">
		<?php 
			// translators: %s: About.
			printf( esc_html__( 'About %s', 'nyclaptoprepair' ), get_the_author() ); 
		?>
    </h4>
    <p class="author-bio">
      <?php the_author_meta( 'description' ); ?>
    </p>
	  <a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"> 
		<?php 
		// translators: %s: All Author Posts.
		printf(wp_kses( __( 'All Author Posts %s <span class="meta-nav">&rarr;</span>', 'nyclaptoprepair' ),freshcodes_allowed_html()), get_the_author() ); 
		?> 
	  </a>
  </div><!-- .author-description -->
</div><!-- .author-info -->