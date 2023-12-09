<?php
/**
 * Freshcodes
 */
?>
<?php // Reference:  http://codex.wordpress.org/Widgets_API
class FollowMeWidget extends WP_Widget
{
    function __construct(){
		$widget_settings = array('description' => 'Follow Us Widget', 'classname' => 'widgets-follow-us');
		parent::__construct(false,$name='Follow Us',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
		$is_template_path_1 = isset($instance['is_template_path_1']) ? $instance['is_template_path_1'] : false;
		$is_template_path_2 = isset($instance['is_template_path_2']) ? $instance['is_template_path_2'] : false;
		$is_template_path_3 = isset($instance['is_template_path_3']) ? $instance['is_template_path_3'] : false;
		$is_template_path_4 = isset($instance['is_template_path_4']) ? $instance['is_template_path_4'] : false;
		$is_template_path_5 = isset($instance['is_template_path_5']) ? $instance['is_template_path_5'] : false;
		$is_template_path_6 = isset($instance['is_template_path_6']) ? $instance['is_template_path_6'] : false;
		$is_template_path_7 = isset($instance['is_template_path_7']) ? $instance['is_template_path_7'] : false;
		$is_template_path_8 = isset($instance['is_template_path_8']) ? $instance['is_template_path_8'] : false;
		$is_template_path_9 = isset($instance['is_template_path_9']) ? $instance['is_template_path_9'] : false;
		$imageSrc_facebook = empty($instance['imageSrc_facebook']) ? '' : $instance['imageSrc_facebook'];
		$imageSrc_twitter = empty($instance['imageSrc_twitter']) ? '' : $instance['imageSrc_twitter'];
		$imageSrc_linkedin = empty($instance['imageSrc_linkedin']) ? '' : $instance['imageSrc_linkedin'];
		$imageSrc_rss = empty($instance['imageSrc_rss']) ? '' : $instance['imageSrc_rss'];
		$imageSrc_youtube = empty($instance['imageSrc_youtube']) ? '' : $instance['imageSrc_youtube'];
		$imageSrc_pinterest = empty($instance['imageSrc_pinterest']) ? '' : $instance['imageSrc_pinterest'];
		$imageSrc_googleplus = empty($instance['imageSrc_googleplus']) ? '' : $instance['imageSrc_googleplus'];
		$imageSrc_skype = empty($instance['imageSrc_skype']) ? '' : $instance['imageSrc_skype'];
		$imageSrc_instagram = empty($instance['imageSrc_instagram']) ? '' : $instance['imageSrc_instagram'];
		$linkURL1 = empty($instance['linkURL1']) ? '' : $instance['linkURL1'];
		$linkURL2 = empty($instance['linkURL2']) ? '' : $instance['linkURL2'];
		$linkURL3 = empty($instance['linkURL3']) ? '' : $instance['linkURL3'];
		$linkURL4 = empty($instance['linkURL4']) ? '' : $instance['linkURL4'];
		$linkURL5 = empty($instance['linkURL5']) ? '' : $instance['linkURL5'];
		$linkURL6 = empty($instance['linkURL6']) ? '' : $instance['linkURL6'];
		$linkURL7 = empty($instance['linkURL7']) ? '' : $instance['linkURL7'];
		$linkURL8 = empty($instance['linkURL8']) ? '' : $instance['linkURL8'];
		$linkURL9 = empty($instance['linkURL9']) ? '' : $instance['linkURL9'];




		if($is_template_path_1 == 1):
			$imageSrc_facebook= get_stylesheet_directory_uri() . '/images/freshcodes/' . $imageSrc_facebook; 
		endif;
		if($is_template_path_2 == 1):
			$imageSrc_twitter= get_stylesheet_directory_uri() . '/images/freshcodes/' . $imageSrc_twitter; 
		endif;
		if($is_template_path_3 == 1):
			$imageSrc_linkedin= get_stylesheet_directory_uri() . '/images/freshcodes/' . $imageSrc_linkedin; 
		endif;
		if($is_template_path_4 == 1):
			$imageSrc_rss= get_stylesheet_directory_uri() . '/images/freshcodes/' . $imageSrc_rss; 
		endif;
		if($is_template_path_5 == 1):
			$imageSrc_youtube= get_stylesheet_directory_uri() . '/images/freshcodes/' . $imageSrc_youtube; 
		endif;
		if($is_template_path_6 == 1):
			$imageSrc_pinterest= get_stylesheet_directory_uri() . '/images/freshcodes/' . $imageSrc_pinterest; 
		endif;
		if($is_template_path_7 == 1):
			$imageSrc_googleplus= get_stylesheet_directory_uri() . '/images/freshcodes/' . $imageSrc_googleplus; 
		endif;
		if($is_template_path_8 == 1):
			$imageSrc_skype= get_stylesheet_directory_uri() . '/images/freshcodes/' . $imageSrc_skype; 
		endif;
		if($is_template_path_9 == 1):
			$imageSrc_instagram= get_stylesheet_directory_uri() . '/images/freshcodes/' . $imageSrc_instagram; 
		endif;

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
	<div id="follow_us" class="follow-us">	
	<ul class="toggle-block">
	<li>
	<?php if(!empty($linkURL1)) :  ?>
		<?php // translators: %s: Facebook. ?>
		<a href="<?php echo esc_url($linkURL1); ?>" title="<?php echo esc_attr('Facebook', 'nyclaptoprepair');?>" class="facebook freshcodes-icon" target="_blank"><img src="<?php echo esc_url($imageSrc_facebook); ?>" alt="fc-facebook-icon" class="fc-social-icon" width="31" height="32" /></a>
	<?php endif; ?>
	<?php if(!empty($linkURL2)) :  ?>
		<?php // translators: %s: Twitter. ?>
		<a href="<?php echo esc_url($linkURL2); ?>" title="<?php echo esc_attr('Twitter', 'nyclaptoprepair');?>" class="twitter freshcodes-icon" target="_blank"><img src="<?php echo esc_url($imageSrc_twitter); ?>" alt="fc-twitter-icon" class="fc-social-icon" width="31" height="32" /></a>
	<?php endif; ?>			
	<?php if(!empty($linkURL3)) :  ?>
		<?php // translators: %s: Linkedin. ?>
		<a href="<?php echo esc_url($linkURL3); ?>" title="<?php echo esc_attr('Linkedin', 'nyclaptoprepair');?>" class="linkedin freshcodes-icon" target="_blank"><img src="<?php echo esc_url($imageSrc_linkedin); ?>" alt="fc-linkedin-icon" class="fc-social-icon" width="31" height="32" /></a>
	<?php endif; ?>
	<?php if(!empty($linkURL4)) :  ?>
		<?php // translators: %s: RSS. ?>
		<a href="<?php echo esc_url($linkURL4); ?>" title="<?php echo esc_attr('RSS', 'nyclaptoprepair');?>" class="rss freshcodes-icon" target="_blank"><img src="<?php echo esc_url($imageSrc_rss); ?>" alt="fc-rss-icon" class="fc-social-icon" width="31" height="32" /></a>
	<?php endif; ?>
	<?php if(!empty($linkURL5)) :  ?>
		<?php // translators: %s: Youtube. ?>
		<a href="<?php echo esc_url($linkURL5); ?>" title="<?php echo esc_attr('Youtube', 'nyclaptoprepair');?>" class="youtube freshcodes-icon" target="_blank"><img src="<?php echo esc_url($imageSrc_youtube); ?>" alt="fc-youtube-icon" class="fc-social-icon" width="31" height="32" /></a>
	<?php endif; ?>	
	<?php if(!empty($linkURL6)) :  ?>
		<?php // translators: %s: Pinterest. ?>
		<a href="<?php echo esc_url($linkURL6); ?>" title="<?php echo esc_attr('Pinterest', 'nyclaptoprepair');?>" class="pinterest freshcodes-icon" target="_blank"><img src="<?php echo esc_url($imageSrc_pinterest); ?>" alt="fc-pinterest-icon" class="fc-social-icon" width="31" height="32" /></a>
	<?php endif; ?>
	<?php if(!empty($linkURL7)) :  ?>
		<?php // translators: %s: Google Plus. ?>
		<a href="<?php echo esc_url($linkURL7); ?>" title="<?php echo esc_attr('Google Plus', 'nyclaptoprepair');?> " class="google-plus freshcodes-icon" target="_blank"><img src="<?php echo esc_url($imageSrc_googleplus); ?>" alt="fc-google-plus-icon" class="fc-social-icon" width="31" height="32" /></a>
	<?php endif; ?>
	<?php if(!empty($linkURL8)) :  ?>
		<?php // translators: %s: Skype. ?>
		<a href="<?php echo esc_url($linkURL8); ?>" title="<?php echo esc_attr('Skype', 'nyclaptoprepair');?>" class="skype freshcodes-icon" target="_blank"><img src="<?php echo esc_url($imageSrc_skype); ?>" alt="fc-skype-icon" class="fc-social-icon" width="31" height="32" /></a>
	<?php endif; ?>
	<?php if(!empty($linkURL9)) :  ?>
		<?php // translators: %s: Instagram. ?>
		<a href="<?php echo esc_url($linkURL9); ?>" title="<?php echo esc_attr('Instagram', 'nyclaptoprepair');?>" class="instagram freshcodes-icon" target="_blank"><img src="<?php echo esc_url($imageSrc_instagram); ?>" alt="fc-instagram-icon" class="fc-social-icon" width="31" height="32" /></a>
	<?php endif; ?>	
	</li>
	</ul>
</div>
<?php
		echo html_entity_decode( esc_html( $after_widget ) );
	}
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['is_template_path_1'] = strip_tags($new_instance['is_template_path_1']);
		if (isset($new_instance['is_template_path_1'])) $instance['is_template_path_1'] = 1;
		$instance['is_template_path_2'] = strip_tags($new_instance['is_template_path_2']);
		if (isset($new_instance['is_template_path_2'])) $instance['is_template_path_2'] = 1;
		$instance['is_template_path_3'] = strip_tags($new_instance['is_template_path_3']);
		if (isset($new_instance['is_template_path_3'])) $instance['is_template_path_3'] = 1;
		$instance['is_template_path_4'] = strip_tags($new_instance['is_template_path_4']);
		if (isset($new_instance['is_template_path_4'])) $instance['is_template_path_4'] = 1;
		$instance['is_template_path_5'] = strip_tags($new_instance['is_template_path_5']);
		if (isset($new_instance['is_template_path_5'])) $instance['is_template_path_5'] = 1;
		$instance['is_template_path_6'] = strip_tags($new_instance['is_template_path_6']);
		if (isset($new_instance['is_template_path_6'])) $instance['is_template_path_6'] = 1;
		$instance['is_template_path_7'] = strip_tags($new_instance['is_template_path_7']);
		if (isset($new_instance['is_template_path_7'])) $instance['is_template_path_7'] = 1;
		$instance['is_template_path_8'] = strip_tags($new_instance['is_template_path_8']);
		if (isset($new_instance['is_template_path_8'])) $instance['is_template_path_8'] = 1;
		$instance['is_template_path_9'] = strip_tags($new_instance['is_template_path_9']);
		if (isset($new_instance['is_template_path_9'])) $instance['is_template_path_9'] = 1;

		$instance['imageSrc_facebook'] = strip_tags($new_instance['imageSrc_facebook']);
		$instance['imageSrc_twitter'] = strip_tags($new_instance['imageSrc_twitter']);
		$instance['imageSrc_linkedin'] = strip_tags($new_instance['imageSrc_linkedin']);
		$instance['imageSrc_rss'] = strip_tags($new_instance['imageSrc_rss']);
		$instance['imageSrc_youtube'] = strip_tags($new_instance['imageSrc_youtube']);
		$instance['imageSrc_pinterest'] = strip_tags($new_instance['imageSrc_pinterest']);
		$instance['imageSrc_googleplus'] = strip_tags($new_instance['imageSrc_googleplus']);
		$instance['imageSrc_skype'] = strip_tags($new_instance['imageSrc_skype']);
		$instance['imageSrc_instagram'] = strip_tags($new_instance['imageSrc_instagram']);

		$instance['linkURL1'] = strip_tags($new_instance['linkURL1']);
		$instance['linkURL2'] = strip_tags($new_instance['linkURL2']);
		$instance['linkURL3'] = strip_tags($new_instance['linkURL3']);
		$instance['linkURL4'] = strip_tags($new_instance['linkURL4']);
		$instance['linkURL5'] = strip_tags($new_instance['linkURL5']);
		$instance['linkURL6'] = strip_tags($new_instance['linkURL6']);
		$instance['linkURL7'] = strip_tags($new_instance['linkURL7']);
		$instance['linkURL8'] = strip_tags($new_instance['linkURL8']);
		$instance['linkURL9'] = strip_tags($new_instance['linkURL9']);		
		return $instance;
	}
    function form($instance){	
		$instance = wp_parse_args( (array) $instance, array(	
		'title'=>'Follow Us',
		'is_template_path_1'=>1,
		'is_template_path_2'=>1,
		'is_template_path_3'=>1,
		'is_template_path_4'=>1,
		'is_template_path_5'=>1,
		'is_template_path_6'=>1,
		'is_template_path_7'=>1,
		'is_template_path_8'=>1,
		'is_template_path_9'=>1,
		'imageSrc_facebook'=>'#',
		'imageSrc_twitter'=>'#',
		'imageSrc_linkedin'=>'#',
		'imageSrc_rss'=>'#',
		'imageSrc_youtube'=>'#',
		'imageSrc_pinterest'=>'#',
		'imageSrc_googleplus'=>'#',
		'imageSrc_skype'=>'#',
		'imageSrc_instagram'=>'#',
		'linkURL1' => '#', 
		'linkURL2' => '#',
		'linkURL3' => '#', 
		'linkURL4' => '#', 
		'linkURL5' => '#',
		'linkURL6' => '#',
		'linkURL7' => '#',
		'linkURL8' => '#',
		'linkURL9' => '#') );
		$title = esc_attr($instance['title']);
		$imageSrc_facebook = esc_attr($instance['imageSrc_facebook']);
		$imageSrc_twitter = esc_attr($instance['imageSrc_twitter']);
		$imageSrc_linkedin = esc_attr($instance['imageSrc_linkedin']);
		$imageSrc_rss = esc_attr($instance['imageSrc_rss']);
		$imageSrc_youtube = esc_attr($instance['imageSrc_youtube']);
		$imageSrc_pinterest = esc_attr($instance['imageSrc_pinterest']);
		$imageSrc_googleplus = esc_attr($instance['imageSrc_googleplus']);
		$imageSrc_skype = esc_attr($instance['imageSrc_skype']);
		$imageSrc_instagram = esc_attr($instance['imageSrc_instagram']);

		$linkURL1 = esc_attr($instance['linkURL1']);
		$linkURL2 = esc_attr($instance['linkURL2']);
		$linkURL3 = esc_attr($instance['linkURL3']);
		$linkURL4 = esc_attr($instance['linkURL4']);
		$linkURL5 = esc_attr($instance['linkURL5']);
		$linkURL6 = esc_attr($instance['linkURL6']);
		$linkURL7 = esc_attr($instance['linkURL7']);
		$linkURL8 = esc_attr($instance['linkURL8']);
		$linkURL9 = esc_attr($instance['linkURL9']);?>
<p><label for="<?php echo esc_attr($this->get_field_id('title'));?>"><?php esc_html_e('Title:', 'nyclaptoprepair'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('title'));?>" name="<?php echo esc_attr($this->get_field_name('title'));?>" type="text" value="<?php echo esc_attr($title);?>" /></p>

<p style="text-align:center">
  <label for="<?php echo esc_attr($this->get_field_id('linkURL1'));?>"><strong>Facebook</strong></label>
<p>
<label for="<?php echo esc_attr($this->get_field_id('imageSrc_facebook'));?>"><i class="fa fa-facebook"></i>Facebook Image URL:<br /></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('imageSrc_facebook'));?>" name="<?php echo esc_attr($this->get_field_name('imageSrc_facebook'));?>" type="text" value="<?php echo esc_attr($imageSrc_facebook);?>" />
<input class="checkbox" type="checkbox" <?php checked($instance['is_template_path_1'], true) ?> id="<?php echo esc_attr($this->get_field_id('is_template_path_1')); ?>" name="<?php echo esc_attr($this->get_field_name('is_template_path_1')); ?>" /><label for="<?php echo esc_attr($this->get_field_id('is_template_path_1')); ?>">Use Template Path for Image</label><br /><br />
  <label for="<?php echo esc_attr($this->get_field_id('linkURL1'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL1'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL1'));?>" type="text" value="<?php echo esc_attr($linkURL1);?>" />
  <label>(e.g. http://www.facebook.com/...)</label>
  <br />
</p>
<div style="border-bottom:2px solid #ddd; margin-bottom:10px;">&nbsp;</div>
<p style="text-align:center">
  <label for="<?php echo esc_attr($this->get_field_id('linkURL2'));?>"><strong>Twitter</strong></label>
<p>
<label for="<?php echo esc_attr($this->get_field_id('imageSrc_twitter'));?>">Twitter Image URL:<br /></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('imageSrc_twitter'));?>" name="<?php echo esc_attr($this->get_field_name('imageSrc_twitter'));?>" type="text" value="<?php echo esc_attr($imageSrc_twitter);?>" /><br />
<input class="checkbox" type="checkbox" <?php checked($instance['is_template_path_2'], true) ?> id="<?php echo esc_attr($this->get_field_id('is_template_path_2')); ?>" name="<?php echo esc_attr($this->get_field_name('is_template_path_2')); ?>" /><label for="<?php echo esc_attr($this->get_field_id('is_template_path_2')); ?>">Use Template Path for Image</label><br /><br />
  <label for="<?php echo esc_attr($this->get_field_id('linkURL2'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL2'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL2'));?>" type="text" value="<?php echo esc_attr($linkURL2);?>" />
  <label>(e.g. http://www.Twitter.com/...)</label>
  <br />
</p>
<div style="border-bottom:2px solid #ddd; margin-bottom:10px;">&nbsp;</div>
<p style="text-align:center">
  <label for="<?php echo esc_attr($this->get_field_id('linkURL3'));?>"><strong>Linkedin</strong></label>
<p>
<label for="<?php echo esc_attr($this->get_field_id('imageSrc_linkedin'));?>">Linkedin Image URL:<br /></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('imageSrc_linkedin'));?>" name="<?php echo esc_attr($this->get_field_name('imageSrc_linkedin'));?>" type="text" value="<?php echo esc_attr($imageSrc_linkedin);?>" /><br />
<input class="checkbox" type="checkbox" <?php checked($instance['is_template_path_3'], true) ?> id="<?php echo esc_attr($this->get_field_id('is_template_path_3')); ?>" name="<?php echo esc_attr($this->get_field_name('is_template_path_3')); ?>" /><label for="<?php echo esc_attr($this->get_field_id('is_template_path_3')); ?>">Use Template Path for Image</label><br /><br />
  <label for="<?php echo esc_attr($this->get_field_id('linkURL3'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL3'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL3'));?>" type="text" value="<?php echo esc_attr($linkURL3);?>" />
  <label>(e.g. http://linkedin.com...)</label>
  <br />
</p>
<div style="border-bottom:2px solid #ddd; margin-bottom:10px;">&nbsp;</div>
<p style="text-align:center">
  <label for="<?php echo esc_attr($this->get_field_id('linkURL4'));?>"><strong>RSS</strong></label>
<p>
<label for="<?php echo esc_attr($this->get_field_id('imageSrc_rss'));?>">RSS Image URL:<br /></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('imageSrc_rss'));?>" name="<?php echo esc_attr($this->get_field_name('imageSrc_rss'));?>" type="text" value="<?php echo esc_attr($imageSrc_rss);?>" /><br />
<input class="checkbox" type="checkbox" <?php checked($instance['is_template_path_4'], true) ?> id="<?php echo esc_attr($this->get_field_id('is_template_path_4')); ?>" name="<?php echo esc_attr($this->get_field_name('is_template_path_4')); ?>" /><label for="<?php echo esc_attr($this->get_field_id('is_template_path_4')); ?>">Use Template Path for Image</label><br /><br />
  <label for="<?php echo esc_attr($this->get_field_id('linkURL4'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL4'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL4'));?>" type="text" value="<?php echo esc_attr($linkURL4);?>" />
  <label>(e.g. http://feeds.feedburner.com/...)</label>
  <br />
</p>
<div style="border-bottom:2px solid #ddd; margin-bottom:10px;">&nbsp;</div>
<p style="text-align:center">
  <label for="<?php echo esc_attr($this->get_field_id('linkURL5'));?>"><strong>Youtube</strong></label>
<p>
<label for="<?php echo esc_attr($this->get_field_id('imageSrc_youtube'));?>">YouTube Image URL:<br /></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('imageSrc_youtube'));?>" name="<?php echo esc_attr($this->get_field_name('imageSrc_youtube'));?>" type="text" value="<?php echo esc_attr($imageSrc_youtube);?>" /><br />
<input class="checkbox" type="checkbox" <?php checked($instance['is_template_path_5'], true) ?> id="<?php echo esc_attr($this->get_field_id('is_template_path_5')); ?>" name="<?php echo esc_attr($this->get_field_name('is_template_path_5')); ?>" /><label for="<?php echo esc_attr($this->get_field_id('is_template_path_5')); ?>">Use Template Path for Image</label><br /><br />
  <label for="<?php echo esc_attr($this->get_field_id('linkURL5'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL5'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL5'));?>" type="text" value="<?php echo esc_attr($linkURL5);?>" />
  <label>(e.g. http://www.youtube.com/...)</label>
  <br />
</p>
<div style="border-bottom:2px solid #ddd; margin-bottom:10px;">&nbsp;</div>
<p style="text-align:center">
  <label for="<?php echo esc_attr($this->get_field_id('linkURL6'));?>"><strong>Pinterest</strong></label>
<p>
<label for="<?php echo esc_attr($this->get_field_id('imageSrc_pinterest'));?>">Pinterest Image URL:<br /></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('imageSrc_pinterest'));?>" name="<?php echo esc_attr($this->get_field_name('imageSrc_pinterest'));?>" type="text" value="<?php echo esc_attr($imageSrc_pinterest);?>" /><br />
<input class="checkbox" type="checkbox" <?php checked($instance['is_template_path_6'], true) ?> id="<?php echo esc_attr($this->get_field_id('is_template_path_6')); ?>" name="<?php echo esc_attr($this->get_field_name('is_template_path_6')); ?>" /><label for="<?php echo esc_attr($this->get_field_id('is_template_path_6')); ?>">Use Template Path for Image</label><br /><br />
  <label for="<?php echo esc_attr($this->get_field_id('linkURL6'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL6'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL6'));?>" type="text" value="<?php echo esc_attr($linkURL6);?>" />
  <label>(e.g. http://www.pinterest.com/...)</label>
  <br />
</p>
<div style="border-bottom:2px solid #ddd; margin-bottom:10px;">&nbsp;</div>
<p style="text-align:center">
  <label for="<?php echo esc_attr($this->get_field_id('linkURL7'));?>"><strong>Google Plus</strong></label>
<p>
<label for="<?php echo esc_attr($this->get_field_id('imageSrc_googleplus'));?>">GooglePlus Image URL:<br /></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('imageSrc_googleplus'));?>" name="<?php echo esc_attr($this->get_field_name('imageSrc_googleplus'));?>" type="text" value="<?php echo esc_attr($imageSrc_googleplus);?>" /><br />
<input class="checkbox" type="checkbox" <?php checked($instance['is_template_path_7'], true) ?> id="<?php echo esc_attr($this->get_field_id('is_template_path_7')); ?>" name="<?php echo esc_attr($this->get_field_name('is_template_path_7')); ?>" /><label for="<?php echo esc_attr($this->get_field_id('is_template_path_7')); ?>">Use Template Path for Image</label><br /><br />
  <label for="<?php echo esc_attr($this->get_field_id('linkURL7'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL7'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL7'));?>" type="text" value="<?php echo esc_attr($linkURL7);?>" />
  <label>(e.g. http://www.google.com/...)</label>
  <br />
</p>
<div style="border-bottom:2px solid #ddd; margin-bottom:10px;">&nbsp;</div>
<p style="text-align:center">
  <label for="<?php echo esc_attr($this->get_field_id('linkURL8'));?>"><strong>Skype</strong></label>
<p>
<label for="<?php echo esc_attr($this->get_field_id('imageSrc_skype'));?>">Skype Image URL:<br /></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('imageSrc_skype'));?>" name="<?php echo esc_attr($this->get_field_name('imageSrc_skype'));?>" type="text" value="<?php echo esc_attr($imageSrc_skype);?>" /><br />
<input class="checkbox" type="checkbox" <?php checked($instance['is_template_path_8'], true) ?> id="<?php echo esc_attr($this->get_field_id('is_template_path_8')); ?>" name="<?php echo esc_attr($this->get_field_name('is_template_path_8')); ?>" /><label for="<?php echo esc_attr($this->get_field_id('is_template_path_8')); ?>">Use Template Path for Image</label><br /><br />
  <label for="<?php echo esc_attr($this->get_field_id('linkURL8'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL8'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL8'));?>" type="text" value="<?php echo esc_attr($linkURL8);?>" />
  <label>(e.g. http://www.skype.com/...)</label>
  <br />
</p>
<div style="border-bottom:2px solid #ddd; margin-bottom:10px;">&nbsp;</div>
<p style="text-align:center">
  <label for="<?php echo esc_attr($this->get_field_id('linkURL9'));?>"><strong>Instagram</strong></label>
<p>
<label for="<?php echo esc_attr($this->get_field_id('imageSrc_instagram'));?>">Instagram Image URL:<br /></label>
<input class="widefat" id="<?php echo esc_attr($this->get_field_id('imageSrc_instagram'));?>" name="<?php echo esc_attr($this->get_field_name('imageSrc_instagram'));?>" type="text" value="<?php echo esc_attr($imageSrc_instagram);?>" /><br />
<input class="checkbox" type="checkbox" <?php checked($instance['is_template_path_9'], true) ?> id="<?php echo esc_attr($this->get_field_id('is_template_path_9')); ?>" name="<?php echo esc_attr($this->get_field_name('is_template_path_9')); ?>" /><label for="<?php echo esc_attr($this->get_field_id('is_template_path_9')); ?>">Use Template Path for Image</label><br /><br />
  <label for="<?php echo esc_attr($this->get_field_id('linkURL9'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL9'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL9'));?>" type="text" value="<?php echo esc_attr($linkURL9);?>" />
  <label>(e.g. http://www.instagram.com/...)</label>
  <br />
</p>
<?php
	}
}
function follow_me_register_widgets()
{
	global $wp_widget_factory;
    $wp_widget_factory->register('FollowMeWidget');
}
add_action('widgets_init', 'follow_me_register_widgets');
// end follow Us widget
?>