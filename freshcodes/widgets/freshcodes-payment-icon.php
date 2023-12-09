<?php
/**
 * Freshcodes
 * @copyright  Copyright (c) 2010 Freshcodes. (https://freshcodes.net/)
 * @license    https://freshcodes.net/privacy-and-policy/
 */
?>
<?php // Reference:  http://codex.wordpress.org/Widgets_API
class PaymentWidget extends WP_Widget
{
    function __construct(){
		$widget_settings = array('description' => 'Payment Icon Widget', 'classname' => 'widgets-payment-icon');
		parent::__construct(false,$name='FC - Payment Icon Widget',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
		$americanexpress = empty($instance['americanexpress']) ? '' : $instance['americanexpress'];
		$bitcoin = empty($instance['bitcoin']) ? '' : $instance['bitcoin'];
		$cash_on_delivery = empty($instance['cash_on_delivery']) ? '' : $instance['cash_on_delivery'];
		$dankort = empty($instance['dankort']) ? '' : $instance['dankort'];
		$discover = empty($instance['discover']) ? '' : $instance['discover'];
		$google = empty($instance['google']) ? '' : $instance['google'];
		$maestro = empty($instance['maestro']) ? '' : $instance['maestro'];
		$mastercard = empty($instance['master_card']) ? '' : $instance['master_card'];
		$paypal = empty($instance['paypal']) ? '' : $instance['paypal'];
		$visa = empty($instance['visa']) ? '' : $instance['visa'];	
		echo html_entity_decode( esc_html( $before_widget ) );;	
		if(!empty($title)) :
            echo html_entity_decode( esc_html( $before_title ) );
		endif;
		if($title)
            echo esc_html($title);
		if(!empty($title)) :
            echo html_entity_decode( esc_html( $after_title ) );
		endif;		
		?>
	<div id="payment-methods" class="payment-methods">	
	<ul class="toggle-block">
	<li>
	<?php if(!empty($americanexpress)) :  ?><span class="american-express icon"></span>	<?php endif; ?>
	<?php if(!empty($bitcoin)) :  ?><span class="bitcoin icon"></span><?php endif; ?>
	<?php if(!empty($cash_on_delivery)) :  ?><span class="cash-on-delivery icon"></span><?php endif; ?>
	<?php if(!empty($dankort)) :  ?><span class="dankort icon"></span><?php endif; ?>
	<?php if(!empty($discover)) :  ?><span class="discover icon"></span><?php endif; ?>	
	<?php if(!empty($google)) :  ?><span class="google icon"></span><?php endif; ?>
	<?php if(!empty($maestro)) :  ?><span class="maestro icon"></span><?php endif; ?>
	<?php if(!empty($mastercard)) :  ?><span class="master-card icon"></span><?php endif; ?>
	<?php if(!empty($paypal)) :  ?><span class="paypal icon"></span><?php endif; ?>	
	<?php if(!empty($visa)) :  ?><span class="visa icon"></span><?php endif; ?>
		
	</li>
	</ul>
</div>
<?php
		echo html_entity_decode( esc_html( $after_widget ) );
	}
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['americanexpress'] = false;
		$instance['bitcoin'] = false;
		$instance['cash_on_delivery'] = false;
		$instance['dankort'] = false;
		$instance['discover'] = false;
		$instance['google'] = false;
		$instance['maestro'] = false;
		$instance['master_card'] = false;
		$instance['paypal'] = false;
		$instance['visa'] = false;
		if (isset($new_instance['americanexpress'])) $instance['americanexpress'] = true;
		if (isset($new_instance['bitcoin'])) $instance['bitcoin'] = true;
		if (isset($new_instance['cash_on_delivery'])) $instance['cash_on_delivery'] = true;
		if (isset($new_instance['dankort'])) $instance['dankort'] = true;
		if (isset($new_instance['discover'])) $instance['discover'] = true;
		if (isset($new_instance['google'])) $instance['google'] = true;
		if (isset($new_instance['maestro'])) $instance['maestro'] = true;
		if (isset($new_instance['master_card'])) $instance['master_card'] = true;
		if (isset($new_instance['paypal'])) $instance['paypal'] = true;
		if (isset($new_instance['visa'])) $instance['visa'] = true;
		return $instance;
	}
    function form($instance){	
		$instance = wp_parse_args( (array) $instance, array(	
		'title'=>'Accepted Payment Methods',	
		'americanexpress' => '#', 
		'bitcoin' => '#',
		'cash_on_delivery' => '#', 
		'dankort' => '#', 
		'discover' => '#',
		'google' => '#',
		'maestro' => '#',
		'master_card' => '#',
		'paypal' => '#',
		'visa' => '#') );
		$title = esc_attr($instance['title']);		
		$americanexpress = esc_attr($instance['americanexpress']);
		$bitcoin = esc_attr($instance['bitcoin']);
		$cash_on_delivery = esc_attr($instance['cash_on_delivery']);
		$dankort = esc_attr($instance['dankort']);
		$discover = esc_attr($instance['discover']);
		$google = esc_attr($instance['google']);
		$maestro = esc_attr($instance['maestro']);
		$mastercard = esc_attr($instance['master_card']);
		$paypal = esc_attr($instance['paypal']);
		$visa = esc_attr($instance['visa']);
	?>
<h3>
	<label for="<?php echo esc_attr($this->get_field_id('title'));?>"><?php esc_html_e('Title:', 'nyclaptoprepair'); ?></label>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title'));?>" name="<?php echo esc_attr($this->get_field_name('title'));?>" type="text" value="<?php echo esc_attr($title);?>" />
</h3>
 
<p>
  <input class="widefat" <?php checked($instance['americanexpress'], true) ?> id="<?php echo esc_attr($this->get_field_id('americanexpress'));?>" name="<?php echo esc_attr($this->get_field_name('americanexpress'));?>" type="checkbox"  value="<?php echo esc_attr($americanexpress);?>" />
  <label for="<?php echo esc_attr($this->get_field_id('americanexpress'));?>"><strong>American Express</strong></label>
</p>
  
<p> 
<input class="widefat" <?php checked($instance['bitcoin'], true) ?> id="<?php echo esc_attr($this->get_field_id('bitcoin'));?>" name="<?php echo esc_attr($this->get_field_name('bitcoin'));?>" type="checkbox" value="<?php echo esc_attr($bitcoin);?>" />
<label for="<?php echo esc_attr($this->get_field_id('bitcoin'));?>"><strong>Bitcoin</strong></label>
</p>
  
<p>
<input class="widefat" <?php checked($instance['cash_on_delivery'], true) ?> id="<?php echo esc_attr($this->get_field_id('cash_on_delivery'));?>" name="<?php echo esc_attr($this->get_field_name('cash_on_delivery'));?>" type="checkbox" value="<?php echo esc_attr($cash_on_delivery);?>" />
<label for="<?php echo esc_attr($this->get_field_id('cash_on_delivery'));?>"><strong>Cash On Delivery</strong></label> 
</p>
  
<p> 
<input class="widefat" <?php checked($instance['dankort'], true) ?> id="<?php echo esc_attr($this->get_field_id('dankort'));?>" name="<?php echo esc_attr($this->get_field_name('dankort'));?>" type="checkbox" value="<?php echo esc_attr($dankort);?>" />
<label for="<?php echo esc_attr($this->get_field_id('dankort'));?>"><strong>Dankort</strong></label>
</p>
<p>
<input class="widefat" <?php checked($instance['discover'], true) ?> id="<?php echo esc_attr($this->get_field_id('discover'));?>" name="<?php echo esc_attr($this->get_field_name('discover'));?>" type="checkbox" value="<?php echo esc_attr($discover);?>" />
<label for="<?php echo esc_attr($this->get_field_id('discover'));?>"><strong>Discover</strong></label>
</p>
  
<p> 
<input class="widefat" <?php checked($instance['google'], true) ?> id="<?php echo esc_attr($this->get_field_id('google'));?>" name="<?php echo esc_attr($this->get_field_name('google'));?>" type="checkbox" value="<?php echo esc_attr($google);?>" />
<label for="<?php echo esc_attr($this->get_field_id('google'));?>"><strong>Google</strong></label>
</p>
  
<p> 
<input class="widefat" <?php checked($instance['maestro'], true) ?> id="<?php echo esc_attr($this->get_field_id('maestro'));?>" name="<?php echo esc_attr($this->get_field_name('maestro'));?>" type="checkbox" value="<?php echo esc_attr($maestro);?>" />
<label for="<?php echo esc_attr($this->get_field_id('maestro'));?>"><strong>Maestro</strong></label>
</p>
 
<p>  
<input class="widefat" <?php checked($instance['master_card'], true) ?> id="<?php echo esc_attr($this->get_field_id('master_card'));?>" name="<?php echo esc_attr($this->get_field_name('master_card'));?>" type="checkbox" value="<?php echo esc_attr($mastercard);?>" />
<label for="<?php echo esc_attr($this->get_field_id('master_card'));?>"><strong>Mastercard</strong></label>
</p>
  
<p> 
<input class="widefat" <?php checked($instance['paypal'], true) ?> id="<?php echo esc_attr($this->get_field_id('paypal'));?>" name="<?php echo esc_attr($this->get_field_name('paypal'));?>" type="checkbox" value="<?php echo esc_attr($paypal);?>" />
<label for="<?php echo esc_attr($this->get_field_id('paypal'));?>"><strong>Paypal</strong></label>
</p>
  
<p>
<input class="widefat" <?php checked($instance['visa'], true) ?> id="<?php echo esc_attr($this->get_field_id('visa'));?>" name="<?php echo esc_attr($this->get_field_name('visa'));?>" type="checkbox" value="<?php echo esc_attr($visa);?>" />
<label for="<?php echo esc_attr($this->get_field_id('visa'));?>"><strong>Visa</strong></label>
</p>
<?php
	}
}
function payment_register_widgets()
{
	global $wp_widget_factory;
    $wp_widget_factory->register('PaymentWidget');
}
add_action('widgets_init', 'payment_register_widgets');
// end Payment widgets
?>