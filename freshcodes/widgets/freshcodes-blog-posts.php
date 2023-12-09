<?php
/**
 * Freshcodes
 * @copyright  Copyright (c) 2010 Freshcodes. (https://freshcodes.net/)
 * @license    https://freshcodes.net/privacy-and-policy/
 */
?><?php  // Reference:  http://codex.wordpress.org/Widgets_API
class BlogPostsWidget extends WP_Widget
{
    function  __construct(){
		$widget_settings = array('description' => 'Blog Posts Widget', 'classname' => 'widgets-blog-posts');
		parent::__construct(false,$name='FC - Blog Posts Widget',$widget_settings); 
    }
    function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
		$totalblog = empty($instance['totalblog']) ? '' : $instance['totalblog'];
		$blog_excerpt = empty($instance['blog_excerpt']) ? '' : $instance['blog_excerpt'];
		$show_date = isset($instance['show_date']) ? $instance['show_date'] : false;

		// $blog_excerpt = (int)$blog_excerpt;
		
		//For Description Dynamic Excerpt
		$excerpt_desc = freshcodes_posts_short_description();
		$excerpt_desc = preg_replace(" ([.*?])",'',$excerpt_desc);
		$excerpt_desc = strip_shortcodes($excerpt_desc);
		$excerpt_desc = strip_tags($excerpt_desc);
		$excerpt_desc = substr($excerpt_desc, 0, $blog_excerpt);
		$excerpt_desc = substr($excerpt_desc, 0, strripos($excerpt_desc, " "));
		$excerpt_desc = trim(preg_replace( '/s+/', ' ', $excerpt_desc));
	
		echo html_entity_decode( esc_html( $before_widget ) );
        if (!empty($title)) :
            echo html_entity_decode( esc_html( $before_title ) );
        endif;
        if ($title)
            echo esc_html($title);
        if (!empty($title)) :
            echo html_entity_decode( esc_html( $after_title ) );
        endif;
		?> 
		<ul class="toggle-block">
	
		<?php $latest = new WP_Query( array( 'posts_per_page' => $totalblog - 1));
		if( $latest->have_posts() ) :?>
		
		 <?php while( $latest->have_posts()) : $latest->the_post(); ?>
			<li>      
			<?php if ( has_post_thumbnail()) : ?>
			 <?php the_post_thumbnail(array(120,150), array('class' => 'icon80')); ?>    
			<?php endif; ?>
			<div class="post-detail">
			
			<?php
				if($show_date == true): 
					freshcodes_post_entry_date();
				endif; 
			?>
			<a class="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php echo $excerpt_desc; ?>
			</div>
			</li>
		 <?php endwhile; ?>
		<?php endif; wp_reset_postdata(); ?>
		</ul>
		<?php		
		echo html_entity_decode( esc_html( $after_widget ) );
	}
	function update($new_instance, $old_instance){
		$instance = $old_instance;	
		$instance['title'] =($new_instance['title']);		
		$instance['totalblog'] =($new_instance['totalblog']);
		$instance['blog_excerpt'] =($new_instance['blog_excerpt']);
		$instance['show_date'] = false;
		if (isset($new_instance['show_date'])) $instance['show_date'] = true;
		return $instance;
	}
	function form($instance){
		$instance = wp_parse_args( (array) $instance, array(
		'title'=>'Latest News',
		'totalblog'=>'2',
		'blog_excerpt'=>'15',
		'show_date'=> true) );	
		$title	= esc_attr($instance['title']);			
		$totalblog	= esc_attr($instance['totalblog']);
		$blog_title_excerpt	= esc_attr($instance['blog_title_excerpt']);
		$blog_excerpt	= esc_attr($instance['blog_excerpt']);
		?>
		<p><label for="<?php echo esc_attr($this->get_field_id('title'));?>"><?php esc_html_e('Title:', 'nyclaptoprepair'); ?></label><input class="widefat" type="text"  id="<?php echo esc_attr($this->get_field_id('title'));?>" name="<?php echo esc_attr($this->get_field_name('title'));?>" value="<?php echo esc_attr($title);?>"/></p>
	<p><label for="<?php echo esc_attr($this->get_field_id('totalblog'));?>"><?php esc_html_e('Display Blog:', 'nyclaptoprepair'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('totalblog'));?>" name="<?php echo esc_attr($this->get_field_name('totalblog'));?>" type="text" value="<?php echo esc_attr($totalblog);?>" />
		<label>(e.g. 1,2,3,4,...)</label><br />
		<input class="checkbox" type="checkbox" <?php checked($instance['show_date'], true) ?> id="<?php echo esc_attr($this->get_field_id('show_date')); ?>" name="<?php echo esc_attr($this->get_field_name('show_date')); ?>" /><label for="<?php echo esc_attr($this->get_field_id('show_date')); ?>"><?php esc_html_e('Show date', 'nyclaptoprepair'); ?></label></p>
		<label for="<?php echo esc_attr($this->get_field_id('blog_excerpt'));?>"><?php esc_html_e('Excerpt Blog Description:', 'nyclaptoprepair'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('blog_excerpt'));?>" name="<?php echo esc_attr($this->get_field_name('blog_excerpt'));?>" type="number" value="<?php echo esc_attr($blog_excerpt);?>" />
	</p>
	<?php
	}
}
function blogposts_register_widgets()
	{
		global $wp_widget_factory;
		$wp_widget_factory->register('BlogPostsWidget');
	}
add_action('widgets_init', 'blogposts_register_widgets');
?>