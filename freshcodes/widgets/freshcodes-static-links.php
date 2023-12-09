<?php
/**
 * Freshcodes
 */
?>
<?php  // Reference:  http://codex.wordpress.org/Widgets_API
class StaticLinksWidget extends WP_Widget
{
    function __construct(){
		$widget_settings = array('description' => 'Freshcodes Footer Links Widget', 'classname' => 'widgets-static-links');
		parent::__construct(false,$name='Freshcodes Footer Links',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
		$linktext1 = empty($instance['linktext1']) ? '' : $instance['linktext1'];
		$linktext2 = empty($instance['linktext2']) ? '' : $instance['linktext2'];
		$linktext3 = empty($instance['linktext3']) ? '' : $instance['linktext3'];
		$linktext4 = empty($instance['linktext4']) ? '' : $instance['linktext4'];
		$linktext5 = empty($instance['linktext5']) ? '' : $instance['linktext5'];	
		$linktext6 = empty($instance['linktext6']) ? '' : $instance['linktext6'];	
		$linktext7 = empty($instance['linktext7']) ? '' : $instance['linktext7'];
		$linktext8 = empty($instance['linktext8']) ? '' : $instance['linktext8'];	
		$linktext9 = empty($instance['linktext9']) ? '' : $instance['linktext9'];
		$linktext10 = empty($instance['linktext10']) ? '' : $instance['linktext10'];
			
		$linkURL1 = empty($instance['linkURL1']) ? '' : $instance['linkURL1'];
		$linkURL2 = empty($instance['linkURL2']) ? '' : $instance['linkURL2'];
		$linkURL3 = empty($instance['linkURL3']) ? '' : $instance['linkURL3'];
		$linkURL4 = empty($instance['linkURL4']) ? '' : $instance['linkURL4'];
		$linkURL5 = empty($instance['linkURL5']) ? '' : $instance['linkURL5'];		
		$linkURL6 = empty($instance['linkURL6']) ? '' : $instance['linkURL6'];
		$linkURL7 = empty($instance['linkURL7']) ? '' : $instance['linkURL7'];
		$linkURL8 = empty($instance['linkURL8']) ? '' : $instance['linkURL8'];
		$linkURL9 = empty($instance['linkURL9']) ? '' : $instance['linkURL9'];
		$linkURL10 = empty($instance['linkURL10']) ? '' : $instance['linkURL10'];	
				
		echo html_entity_decode( esc_html( $before_widget ) );				
		if(!empty($title)) :		
			echo html_entity_decode( esc_html( $before_title ) );				
		endif;
		if($title)		
		echo esc_html($title);	
		if(!empty($title)) :			
		echo html_entity_decode( esc_html( $after_title ) );					
		endif;
		?> 
		<ul class="toggle-block">
			<li>
		<div class="static-links-list">
			<?php if($linktext1) : ?>
			<span><a href="<?php if($linkURL1 == ""): echo esc_url(home_url( '/' )); else:?><?php echo esc_url($linkURL1); endif;?>">
				<?php echo esc_attr($linktext1);  ?></a></span>
			<?php endif; ?>	
			<?php if($linktext2) : ?>
			<span><a href="<?php if($linkURL2 == ""): echo esc_url(home_url( '/' )); else:?><?php echo esc_url($linkURL2); endif;?>">
				<?php echo esc_attr($linktext2);  ?></a></span>
			<?php endif; ?>	
			<?php if($linktext3) : ?>
			<span><a href="<?php if($linkURL3 == ""): echo esc_url(home_url( '/' )); else:?><?php echo esc_url($linkURL3); endif;?>">
				<?php echo esc_attr($linktext3);  ?></a></span>
			<?php endif; ?>	
			<?php if($linktext4) : ?>
			<span><a href="<?php if($linkURL4 == ""): echo esc_url(home_url( '/' )); else:?><?php echo esc_url($linkURL4); endif;?>">
				<?php echo esc_attr($linktext4);  ?></a></span>
			<?php endif; ?>
			<?php if($linktext5) : ?>
			<span><a href="<?php if($linkURL5 == ""): echo esc_url(home_url( '/' )); else:?><?php echo esc_url($linkURL5); endif;?>">
				<?php echo esc_attr($linktext5);  ?></a></span>
			<?php endif; ?>
			<?php if($linktext6) : ?>
			<span><a href="<?php if($linkURL6 == ""): echo esc_url(home_url( '/' )); else:?><?php echo esc_url($linkURL6); endif;?>">
				<?php echo esc_attr($linktext6);  ?></a></span>
			<?php endif; ?>
			<?php if($linktext7) : ?>
			<span><a href="<?php if($linkURL7 == ""): echo esc_url(home_url( '/' )); else:?><?php echo esc_url($linkURL7); endif;?>">
				<?php echo esc_attr($linktext7);  ?></a></span>
			<?php endif; ?>
			<?php if($linktext8) : ?>
			<span><a href="<?php if($linkURL8 == ""): echo esc_url(home_url( '/' )); else:?><?php echo esc_url($linkURL8); endif;?>">
				<?php echo esc_attr($linktext8);  ?></a></span>
			<?php endif; ?>
			<?php if($linktext9) : ?>
			<span><a href="<?php if($linkURL9 == ""): echo esc_url(home_url( '/' )); else:?><?php echo esc_url($linkURL9); endif;?>">
				<?php echo esc_attr($linktext9);  ?></a></span>
			<?php endif; ?>
			<?php if($linktext10) : ?>
			<span><a href="<?php if($linkURL10 == ""): echo esc_url(home_url( '/' )); else:?><?php echo esc_url($linkURL10); endif;?>">
				<?php echo esc_attr($linktext10);  ?></a></span>
			<?php endif; ?>
		</div>
		</li>	
		</ul>
		<?php		
		echo html_entity_decode( esc_html( $after_widget ) );	
	}
    function update($new_instance, $old_instance){
		$instance = $old_instance;			
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['linktext1'] =($new_instance['linktext1']);
		$instance['linktext2'] =($new_instance['linktext2']);
		$instance['linktext3'] =($new_instance['linktext3']);
		$instance['linktext4'] =($new_instance['linktext4']);
		$instance['linktext5'] =($new_instance['linktext5']);
		$instance['linktext6'] =($new_instance['linktext6']);
		$instance['linktext7'] =($new_instance['linktext7']);
		$instance['linktext8'] =($new_instance['linktext8']);
		$instance['linktext9'] =($new_instance['linktext9']);
		$instance['linktext10'] =($new_instance['linktext10']);	
		
		$instance['linkURL1'] = strip_tags($new_instance['linkURL1']);
		$instance['linkURL2'] = strip_tags($new_instance['linkURL2']);
		$instance['linkURL3'] = strip_tags($new_instance['linkURL3']);
		$instance['linkURL4'] = strip_tags($new_instance['linkURL4']);
		$instance['linkURL5'] = strip_tags($new_instance['linkURL5']);
		$instance['linkURL6'] = strip_tags($new_instance['linkURL6']);
		$instance['linkURL7'] = strip_tags($new_instance['linkURL7']);
		$instance['linkURL8'] = strip_tags($new_instance['linkURL8']);
		$instance['linkURL9'] = strip_tags($new_instance['linkURL9']);
		$instance['linkURL10'] = strip_tags($new_instance['linkURL10']);
		return $instance;
	}
    function form($instance){
		$instance = wp_parse_args( (array) $instance, array(
		'title'=>'Static Block',
		'linktext1'=>'Static Link1',
		'linktext2'=>'Static Link2',
		'linktext3'=>'Static Link3',
		'linktext4'=>'Static Link4',
		'linktext5'=>'Static Link5',
		'linktext6'=>'Static Link6',
		'linktext7'=>'Static Link7',
		'linktext8'=>'Static Link8',
		'linktext9'=>'Static Link9',
		'linktext10'=>'Static Link10',
		'linktext11'=>'Static Link11',
		'linktext12'=>'Static Link12',
		'linktext13'=>'Static Link13',
		'linktext14'=>'Static Link14',
		'linktext15'=>'Static Link15',		
		'linkURL'=>'#',
		'linkURL1'=>'#',
		'linkURL2'=>'#',
		'linkURL3'=>'#',
		'linkURL4'=>'#',
		'linkURL5'=>'#',
		'linkURL6'=>'#',
		'linkURL7'=>'#',
		'linkURL8'=>'#',
		'linkURL9'=>'#',
		'linkURL10'=>'#') );			
		$title = esc_attr($instance['title']);
		$linktext1	= esc_attr($instance['linktext1']);	
		$linktext2	= esc_attr($instance['linktext2']);
		$linktext3	= esc_attr($instance['linktext3']);
		$linktext4	= esc_attr($instance['linktext4']);
		$linktext5	= esc_attr($instance['linktext5']);
		$linktext6	= esc_attr($instance['linktext6']);
		$linktext7	= esc_attr($instance['linktext7']);
		$linktext8	= esc_attr($instance['linktext8']);
		$linktext9	= esc_attr($instance['linktext9']);	
		$linktext10	= esc_attr($instance['linktext10']);
		$linktext11	= esc_attr($instance['linktext11']);
		$linktext12	= esc_attr($instance['linktext12']);
		$linktext13	= esc_attr($instance['linktext13']);
		$linktext14	= esc_attr($instance['linktext14']);
		$linktext15	= esc_attr($instance['linktext15']);
		$linkURL1 	= esc_attr($instance['linkURL1']);
		$linkURL2 	= esc_attr($instance['linkURL2']);
		$linkURL3 	= esc_attr($instance['linkURL3']);
		$linkURL4 	= esc_attr($instance['linkURL4']);
		$linkURL5 	= esc_attr($instance['linkURL5']);
		$linkURL6 	= esc_attr($instance['linkURL6']);
		$linkURL7 	= esc_attr($instance['linkURL7']);
		$linkURL8 	= esc_attr($instance['linkURL8']);
		$linkURL9 	= esc_attr($instance['linkURL9']);
		$linkURL10 	= esc_attr($instance['linkURL10']);
		
		?>
		<p><label for="<?php echo esc_attr($this->get_field_id('title'));?>"><?php esc_html_e('Title:', 'nyclaptoprepair'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('title'));?>" name="<?php echo esc_attr($this->get_field_name('title'));?>" type="text" value="<?php echo esc_attr($title);?>" /></p>
		<p><label for="<?php echo esc_attr($this->get_field_id('linktext1'));?>"><?php esc_html_e('Link Text1:', 'nyclaptoprepair'); ?></label><textarea cols="18" rows="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('linktext1'));?>" name="<?php echo esc_attr($this->get_field_name('linktext1'));?>" ><?php echo esc_html($linktext1);?></textarea></p>
		<p><label for="<?php echo esc_attr($this->get_field_id('linkURL1'));?>"><?php esc_html_e('Link URL1:', 'nyclaptoprepair'); ?><br /></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL1'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL1'));?>" type="text" value="<?php echo esc_attr($linkURL1);?>" />
		<label>(e.g. http://www.Google.com/...)</label><br />
		<p><label for="<?php echo esc_attr($this->get_field_id('linktext2'));?>"><?php esc_html_e('Link Text2:', 'nyclaptoprepair'); ?></label><textarea cols="18" rows="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('linktext2'));?>" name="<?php echo esc_attr($this->get_field_name('linktext2'));?>" ><?php echo esc_html($linktext2);?></textarea></p>
		<p><label for="<?php echo esc_attr($this->get_field_id('linkURL2'));?>"><?php esc_html_e('Link URL2:', 'nyclaptoprepair'); ?><br /></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL2'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL2'));?>" type="text" value="<?php echo esc_attr($linkURL2);?>" />
		<label>(e.g. http://www.Google.com/...)</label><br />
		<p><label for="<?php echo esc_attr($this->get_field_id('linktext3'));?>"><?php esc_html_e('Link Text3:', 'nyclaptoprepair'); ?></label><textarea cols="18" rows="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('linktext3'));?>" name="<?php echo esc_attr($this->get_field_name('linktext3'));?>" ><?php echo esc_html($linktext3);?></textarea></p>
		<p><label for="<?php echo esc_attr($this->get_field_id('linkURL3'));?>"><?php esc_html_e('Link URL3:', 'nyclaptoprepair'); ?><br /></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL3'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL3'));?>" type="text" value="<?php echo esc_attr($linkURL3);?>" />
		<label>(e.g. http://www.Google.com/...)</label><br />
		<p><label for="<?php echo esc_attr($this->get_field_id('linktext4'));?>"><?php esc_html_e('Link Text4:', 'nyclaptoprepair'); ?></label><textarea cols="18" rows="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('linktext4'));?>" name="<?php echo esc_attr($this->get_field_name('linktext4'));?>" ><?php echo esc_html($linktext4);?></textarea></p>
		<p><label for="<?php echo esc_attr($this->get_field_id('linkURL4'));?>"><?php esc_html_e('Link URL4:', 'nyclaptoprepair'); ?><br /></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL4'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL4'));?>" type="text" value="<?php echo esc_attr($linkURL4);?>" />
		<label>(e.g. http://www.Google.com/...)</label>	
		<p><label for="<?php echo esc_attr($this->get_field_id('linktext5'));?>"><?php esc_html_e('Link Text5:', 'nyclaptoprepair'); ?></label><textarea cols="18" rows="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('linktext5'));?>" name="<?php echo esc_attr($this->get_field_name('linktext5'));?>" ><?php echo esc_html($linktext5);?></textarea></p>
		<p><label for="<?php echo esc_attr($this->get_field_id('linkURL5'));?>"><?php esc_html_e('Link URL5:', 'nyclaptoprepair'); ?><br /></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL5'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL5'));?>" type="text" value="<?php echo esc_attr($linkURL5);?>" />
		<label>(e.g. http://www.Google.com/...)</label>	
		<p><label for="<?php echo esc_attr($this->get_field_id('linktext6'));?>"><?php esc_html_e('Link Text6:', 'nyclaptoprepair'); ?></label><textarea cols="18" rows="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('linktext6'));?>" name="<?php echo esc_attr($this->get_field_name('linktext6'));?>" ><?php echo esc_html($linktext6);?></textarea></p>
		<p><label for="<?php echo esc_attr($this->get_field_id('linkURL6'));?>"><?php esc_html_e('Link URL6:', 'nyclaptoprepair'); ?><br /></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL6'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL6'));?>" type="text" value="<?php echo esc_attr($linkURL6);?>" />
		<label>(e.g. http://www.Google.com/...)</label>
		<p><label for="<?php echo esc_attr($this->get_field_id('linktext7'));?>"><?php esc_html_e('Link Text7:', 'nyclaptoprepair'); ?></label><textarea cols="18" rows="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('linktext7'));?>" name="<?php echo esc_attr($this->get_field_name('linktext7'));?>" ><?php echo esc_html($linktext7);?></textarea></p>
		<p><label for="<?php echo esc_attr($this->get_field_id('linkURL7'));?>"><?php esc_html_e('Link URL7:', 'nyclaptoprepair'); ?><br /></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL7'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL7'));?>" type="text" value="<?php echo esc_attr($linkURL7);?>" />
		<label>(e.g. http://www.Google.com/...)</label>	
		<p><label for="<?php echo esc_attr($this->get_field_id('linktext8'));?>"><?php esc_html_e('Link Text8:', 'nyclaptoprepair'); ?></label><textarea cols="18" rows="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('linktext8'));?>" name="<?php echo esc_attr($this->get_field_name('linktext8'));?>" ><?php echo esc_html($linktext8);?></textarea></p>
		<p><label for="<?php echo esc_attr($this->get_field_id('linkURL8'));?>"><?php esc_html_e('Link URL8:', 'nyclaptoprepair'); ?><br /></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL8'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL8'));?>" type="text" value="<?php echo esc_attr($linkURL8);?>" />
		<label>(e.g. http://www.Google.com/...)</label>		
		<p><label for="<?php echo esc_attr($this->get_field_id('linktext9'));?>"><?php esc_html_e('Link Text9:', 'nyclaptoprepair'); ?></label><textarea cols="19" rows="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('linktext9'));?>" name="<?php echo esc_attr($this->get_field_name('linktext9'));?>" ><?php echo esc_html($linktext9);?></textarea></p>
		<p><label for="<?php echo esc_attr($this->get_field_id('linkURL9'));?>"><?php esc_html_e('Link URL9:', 'nyclaptoprepair'); ?><br /></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL9'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL9'));?>" type="text" value="<?php echo esc_attr($linkURL9);?>" />
		<label>(e.g. http://www.Google.com/...)</label>		
		<p><label for="<?php echo esc_attr($this->get_field_id('linktext10'));?>"><?php esc_html_e('Link Text10:', 'nyclaptoprepair'); ?></label><textarea cols="110" rows="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('linktext10'));?>" name="<?php echo esc_attr($this->get_field_name('linktext10'));?>" ><?php echo esc_html($linktext10);?></textarea></p>
		<p><label for="<?php echo esc_attr($this->get_field_id('linkURL10'));?>"><?php esc_html_e('Link URL10:', 'nyclaptoprepair'); ?><br /></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL10'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL10'));?>" type="text" value="<?php echo esc_attr($linkURL10);?>" />
		<label>(e.g. http://www.Google.com/...)</label>	
		<?php
	}
}
function static_links_register_widgets()
{
    global $wp_widget_factory;
    $wp_widget_factory->register('StaticLinksWidget');
}
add_action('widgets_init', 'static_links_register_widgets');
//  end Static links Widget
?>