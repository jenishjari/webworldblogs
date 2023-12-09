<?php  // Reference:  http://codex.wordpress.org/Widgets_API
class FooterContactUsWidget extends WP_Widget
{
    function __construct(){
		$widget_settings = array('description' => 'Footer Contact Us Widget', 'classname' => 'widgets-footercontact');
		parent::__construct(false,$name='FC - Footer Contact Us Widget',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
		$is_template_path = isset($instance['is_template_path']) ? $instance['is_template_path'] : false;
		$text = empty($instance['text']) ? '' : $instance['text'];
		$address = empty($instance['address']) ? '' : $instance['address'];
		$email_title = empty($instance['email_title']) ? '' : $instance['email_title'];
		$linkURL = empty($instance['linkURL']) ? '' : $instance['linkURL'];
		$window_target = isset($instance['window_target']) ? $instance['window_target'] : false;
		$imageSrc = empty($instance['imageSrc']) ? '' : $instance['imageSrc'];
		$width = empty($instance['width']) ? '' : $instance['width'];
		$ph_no = empty($instance['ph_no']) ? '' : $instance['ph_no'];
		
		if($is_template_path == 1):
			$imageSrc= get_stylesheet_directory_uri() . '/images/freshcodes/' . $imageSrc;
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
	
				<div class="contact_wrapper">
					<div class="fc-footer-logo">
						<?php if(!empty($imageSrc)) : ?>
						 <a href="<?php if($linkURL == ""): echo esc_url(home_url( '#' )); else:?><?php echo esc_url($linkURL); endif;?>" 
							<?php if($window_target == true) echo 'target="_blank"'; ?>>
							<img src="<?php echo esc_url($imageSrc); ?>" alt="freshcodes-logo" class="fc-footer-logo" width="<?php echo esc_html($width); ?>" />
						 </a>
						<?php endif; ?>
					 </div>
					 <div class="fc-footer-text">
					 	<?php if(!empty($text)) : ?><p><?php echo esc_html($text); ?></p><?php endif; ?>
					 </div>
					<div class="fc-address">
						<div class="address_content">						
							<?php if(!empty($address)) : ?><div class="fc-contact-address"><?php echo esc_html($address); ?></div><?php endif; ?>	
						</div>	
					</div>
					<div class="fc-phone"><?php if(!empty($ph_no)) : ?><div class="fc-contact-phone"><?php echo esc_html($ph_no); ?></div><?php endif; ?></div>
					<div class="fc-email">							
						<?php if(!empty($email_title)) : ?>
							<div class="fc-contact-email"><a href="<?php if($linkURL == ""): echo esc_url(home_url( '/' )) ; else:?>
								<?php echo esc_url($linkURL); endif;?>" <?php if($window_target == true) echo 'target="_Self"'; ?>>
								<?php echo esc_attr($email_title);  ?></a>
							</div>
						<?php endif; ?>
					</div>
				</div>
		<?php		
		echo html_entity_decode( esc_html( $after_widget ) );				
	}
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['window_target'] = false;
		if (isset($new_instance['window_target'])) $instance['window_target'] = true;
		$instance['is_template_path'] = strip_tags($new_instance['is_template_path']);
		$instance['title'] =($new_instance['title']);
		$instance['text'] =($new_instance['text']);
		$instance['imageSrc'] = strip_tags($new_instance['imageSrc']);
		$instance['width'] = strip_tags($new_instance['width']);
		$instance['address'] =($new_instance['address']);
		$instance['email_title'] =($new_instance['email_title']);
		$instance['linkURL'] = strip_tags($new_instance['linkURL']);
		$instance['ph_no'] =($new_instance['ph_no']);
		return $instance;
	}

    function form($instance){
		$instance = wp_parse_args( (array) $instance, array(
		'is_template_path'=>1,
		'title'=>'', 		
		'text'=>'',
		'imageSrc'=>'#',
		'address'=>'60, 29th Street, San Francisco, CA 94110, United States of America',
		'email_title'=>'demo@example.com',
		'linkURL'=>'#',
		'width'=>'151px',
		'ph_no'=>'(+1) 1234 4567 890',
		'window_target'=> true) );	
		$title = esc_attr($instance['title']);
		$text = esc_attr($instance['text']);
		$imageSrc = esc_attr($instance['imageSrc']);
		$width = esc_attr($instance['width']);
		$address = esc_attr($instance['address']);
		$email_title = esc_attr($instance['email_title']);
		$ph_no = esc_attr($instance['ph_no']);
		$linkURL = esc_attr($instance['linkURL']);
		?>
		<p><label for="<?php echo esc_attr($this->get_field_id('title'));?>"><?php esc_html_e('Title:', 'nyclaptoprepair'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('title'));?>" name="<?php echo esc_attr($this->get_field_name('title'));?>" type="text" value="<?php echo esc_attr($title);?>" /></p>
<p><label for="<?php echo esc_attr($this->get_field_id('imageSrc'));?>">Image URL1:<br /></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('imageSrc'));?>" name="<?php echo esc_attr($this->get_field_name('imageSrc'));?>" type="text" value="<?php echo esc_attr($imageSrc);?>" /><br />
<input class="checkbox" type="checkbox" <?php checked($instance['is_template_path'], true) ?> id="<?php echo esc_attr($this->get_field_id('is_template_path')); ?>" name="<?php echo esc_attr($this->get_field_name('is_template_path')); ?>" /><label for="<?php echo esc_attr($this->get_field_id('is_template_path')); ?>">Use Template Path for Image</label>
		</p>
		<p><label for="<?php echo esc_attr($this->get_field_id('text'));?>"><?php esc_html_e('Footer Text:', 'nyclaptoprepair'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('text'));?>" name="<?php echo esc_attr($this->get_field_name('text'));?>" type="text" value="<?php echo esc_attr($text);?>" /></p>
		<p><label for="<?php echo esc_attr($this->get_field_id('width'));?>"><?php esc_html_e('Logo width:', 'nyclaptoprepair'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('width'));?>" name="<?php echo esc_attr($this->get_field_name('width'));?>" type="text" value="<?php echo esc_attr($width);?>" /></p>

		<p><label for="<?php echo esc_attr($this->get_field_id('address'));?>"><?php esc_html_e('Address:', 'nyclaptoprepair'); ?></label><textarea cols="18" rows="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('address'));?>" name="<?php echo esc_attr($this->get_field_name('address'));?>" ><?php echo esc_html($address);?></textarea></p>	
		<p><label for="<?php echo esc_attr($this->get_field_id('ph_no'));?>"><?php esc_html_e('Phone No:', 'nyclaptoprepair'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('ph_no'));?>" name="<?php echo esc_attr($this->get_field_name('ph_no'));?>" type="text" value="<?php echo esc_attr($ph_no);?>" /></p>	
		<p><label for="<?php echo esc_attr($this->get_field_id('email_title'));?>"><?php esc_html_e('E-mail:', 'nyclaptoprepair'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('email_title'));?>" name="<?php echo esc_attr($this->get_field_name('email_title'));?>" type="text" value="<?php echo esc_attr($email_title);?>" /></p>	
		<p><label for="<?php echo esc_attr($this->get_field_id('linkURL'));?>"><?php esc_html_e('Link URL:', 'nyclaptoprepair'); ?><br /></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL'));?>" type="text" value="<?php echo esc_attr($linkURL);?>" />
		<label>(e.g. mailto:demo@example.com)</label><br />
		<input class="checkbox" type="checkbox" <?php checked($instance['window_target'], true) ?> id="<?php echo esc_attr($this->get_field_id('window_target')); ?>" name="<?php echo esc_attr($this->get_field_name('window_target')); ?>" /><label for="<?php echo esc_attr($this->get_field_id('window_target')); ?>"><?php esc_html_e('Open Link In New Window', 'nyclaptoprepair'); ?></label></p>		
		<?php
	}
}
function footer_contact_register_widgets()
{
	global $wp_widget_factory;
    $wp_widget_factory->register('FooterContactUsWidget');
}
add_action('widgets_init', 'footer_contact_register_widgets');
// end BlogWidget
?>