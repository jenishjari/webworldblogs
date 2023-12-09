<?php
/**
 * The template for displaying posts in the Standard post format
 *
 * @package WordPress
 * @subpackage Freshcodes
 * @since Freshcodes 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-main-content">                     		
							
        <?php if (is_search() || !is_single()) : // Only display Excerpts for Search and not single pages      ?>
        <?php if (has_post_thumbnail() && !post_password_required()) : ?>
            <div class="entry-thumbnail">
            <div class="stick-cat <?php if (empty($postImage)): ?> non <?php endif; ?>">                    
            			<?php freshcodes_categories_links(); ?>
            		</div>										
                <div class="entry-content-inner">
                    <?php
                    the_post_thumbnail('freshcodes-blog-posts-list');
                    $postImage = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                    ?>
                    <?php
                    if (!empty($postImage)): ?>
                        <div class="block_hover">
                            <div class="links">
                        <a href="<?php echo esc_url($postImage); ?>" title="<?php esc_attr_e( 'Click to view Full Image', 'nyclaptoprepair' );?>" data-lightbox="example-set" class="icon mustang-gallery"></a> <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php esc_attr_e( 'Click to view Read More', 'nyclaptoprepair' );?>" class="icon readmore"></a>
                            </div>
                        </div>
                    <?php endif; ?>             
                </div>
            </div>
        <?php endif; ?>
        <div class="post-info <?php if (empty($postImage)): ?> non <?php endif; ?>">
            <?php
            if ($post->post_title == '') :
                $entry_meta_class = "empty-entry-header";
            else :
                $entry_meta_class = "";
            endif; ?>	
       
            <div class="post-info-inner">
                <div class="entry-content">
					<?php freshcodes_sticky_post(); ?>                                                                                       
                </div>                            
                    <h6 class="entry-title"><a href="<?php esc_url(the_permalink()); ?>" rel="bookmark"><?php the_title_attribute(); ?></a></h6>                    
                    <?php echo freshcodes_posts_short_description(); ?>
                    <div class="fc-date-btn-main">
                        <?php echo freshcodes_blog_readmore_fnc(); ?>
                        <?php freshcodes_post_entry_date(); ?>
                    </div>
             </div>      
       	 <?php else : ?>
            <?php
            if ($post->post_title == '') :
                $entry_meta_class = "empty-entry-header";
            else :
                $entry_meta_class = "";
            endif; ?>
            <div class="entry-content">
                <div class="entry-thumbnail <?php if (!has_post_thumbnail()): ?>no-blog-image<?php endif; ?>">
					<?php if (has_post_thumbnail()): ?>
                        <div class="blog-image"></div>
                    <?php endif; ?>
                </div>
				<div class="entry-content-dec">
                    <div class="entry-content-dec-inner">
                        <?php the_content( wp_kses( __('Read More <span class="meta-nav">&rarr;</span>', 'nyclaptoprepair' ),freshcodes_allowed_html())); ?>
                    </div>
                    <div class="entry_tag_links">
                        <?php freshcodes_tags_links(); ?>
                        <?php if (is_active_sidebar('social-link')) : ?>
                            <?php freshcodes_get_widget('social-link');  ?>    
                        <?php endif; ?>
                     </div>
                </div>
                <?php wp_link_pages(array('before' => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'nyclaptoprepair') . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>')); ?>				
            </div><!-- .entry-content -->						            
        <?php endif; ?>
        </div> <!-- post-info -->
    </div>
</article><!-- #post -->