<?php
add_action( 'wp_head', 'freshcodes_customstyle' );
function freshcodes_customstyle() { ?>
<?php
   $font_family1 = get_option('freshcodes_bodyfont');
   $font_family1 = str_replace(' ', '+', $font_family1);
   $font_family2 = get_option('freshcodes_navfont');
   $font_family2 = str_replace(' ', '+', $font_family2);
   $font_family3 = get_option('freshcodes_h1font');
   $font_family3 = str_replace(' ', '+', $font_family3);
   $font_family4 = get_option('freshcodes_h2font');
   $font_family4 = str_replace(' ', '+', $font_family4);
   $font_family5 = get_option('freshcodes_h3font');
   $font_family5 = str_replace(' ', '+', $font_family5);
   $font_family6 = get_option('freshcodes_h4font');
   $font_family6 = str_replace(' ', '+', $font_family6);
   $font_family7 = get_option('freshcodes_h5font');
   $font_family7 = str_replace(' ', '+', $font_family7);
   $font_family8 = get_option('freshcodes_h6font');
   $font_family8 = str_replace(' ', '+', $font_family8);
   $font_family9 = get_option('freshcodes_footerfont');
   $font_family9 = str_replace(' ', '+', $font_family9);
   // REMOVES DUPLICATE GOOGLE FONT CALL
   $fonts_array = array($font_family1,$font_family2,$font_family3,$font_family4,$font_family5,$font_family6,$font_family7,$font_family8,$font_family9);
   // REMOVES DUPLICATE GOOGLE FONT CALL
   $fonts_array= array_unique($fonts_array);
   foreach ($fonts_array as $key => $val) {
   	if($val!='' && $val!='please-select' && $val!='Other+Fonts' && $val!='Open+Sans'){ ?>
<link href='https://fonts.googleapis.com/css2?family=<?php echo esc_attr($val); ?>' rel='stylesheet' type='text/css' />
<?php }
   }
   // end REMOVES DUPLICATE GOOGLE FONT CALL
   ?>
<style type="text/css">
   <?php if( (get_option('freshcodes_h1font') == "Other+Fonts") || get_option('freshcodes_h1font') == "please-select"){  
      if	(get_option('freshcodes_h1font_other') != ""){ ?>
   h1 {	
   font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_h1font_other'))); ?>', Arial, Helvetica, sans-serif;		
   }	
   <?php } } elseif(get_option('freshcodes_h1font') != "" && get_option('freshcodes_h1font') != "please-select"){ ?>
   h1 {	
   font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_h1font'))); ?>', Arial, Helvetica, sans-serif;
   }	
   <?php } ?>
   h1 {	
      <?php if (get_option('freshcodes_h1color') != ""){ ?>
         color:#<?php echo esc_attr(get_option('freshcodes_h1color')); ?>;
      <?php } ?>
         font-size:<?php echo esc_attr(get_option('freshcodes_h1_fontsize'))."px"; ?>;
         font-weight: <?php echo esc_attr(get_option('freshcodes_h1_fontweight')); ?>;
         line-height:<?php echo esc_attr(get_option('freshcodes_h1_lineheight'))."px"; ?>;
         letter-spacing:<?php echo esc_attr(get_option('freshcodes_h1_letterspacing'))."px"; ?>;
         text-transform:<?php echo esc_attr(get_option('freshcodes_h1_texttransform')); ?>;
   }	
   <?php if( (get_option('freshcodes_h2font') == "Other+Fonts") || get_option('freshcodes_h2font') == "please-select"){  
      if	(get_option('freshcodes_h2font_other') != ""){ ?>
   h2 {	
   font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_h2font_other'))); ?>', Arial, Helvetica, sans-serif;	
   }	
   <?php } } elseif(get_option('freshcodes_h2font') != "" && get_option('freshcodes_h2font') != "please-select"){ ?>
   h2 {	
   font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_h2font'))); ?>', Arial, Helvetica, sans-serif;
   }	
   <?php } ?>
   h2 {
   <?php if(get_option('freshcodes_h2color') != ""){ ?>
      color:#<?php echo esc_attr(get_option('freshcodes_h2color')); ?>;
   <?php } ?>
   font-size:<?php echo esc_attr(get_option('freshcodes_h2_fontsize'))."px"; ?>;
   font-weight: <?php echo esc_attr(get_option('freshcodes_h2_fontweight')); ?>;
   line-height:<?php echo esc_attr(get_option('freshcodes_h2_lineheight'))."px"; ?>;
   letter-spacing:<?php echo esc_attr(get_option('freshcodes_h2_letterspacing'))."px"; ?>;
   text-transform:<?php echo esc_attr(get_option('freshcodes_h2_texttransform')); ?>;
   }	
   <?php 
      if( (get_option('freshcodes_h3font') == "Other+Fonts") || get_option('freshcodes_h3font') == "please-select"){  
      if	(get_option('freshcodes_h3font_other') != ""){ ?>
   h3 {	
   font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_h3font_other'))); ?>', Arial, Helvetica, sans-serif;
   }	
   <?php } } elseif(get_option('freshcodes_h3font') != "" && get_option('freshcodes_h3font') != "please-select"){ ?>
   h3 {	
   font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_h3font'))); ?>', Arial, Helvetica, sans-serif;
   }	
   <?php } ?>
   h3 { 
      <?php if (get_option('freshcodes_h3color') != ""){ ?>
         color:#<?php echo esc_attr(get_option('freshcodes_h3color')); ?>;
      <?php } ?>
      font-size:<?php echo esc_attr(get_option('freshcodes_h3_fontsize'))."px"; ?>;
      font-weight: <?php echo esc_attr(get_option('freshcodes_h3_fontweight')); ?>;
      line-height:<?php echo esc_attr(get_option('freshcodes_h3_lineheight'))."px"; ?>;
      letter-spacing:<?php echo esc_attr(get_option('freshcodes_h3_letterspacing'))."px"; ?>;
      text-transform:<?php echo esc_attr(get_option('freshcodes_h3_texttransform')); ?>;
   }
   <?php if( (get_option('freshcodes_h4font') == "Other+Fonts") || get_option('freshcodes_h4font') == "please-select"){  
      if	(get_option('freshcodes_h4font_other') != ""){ ?>
   h4 {	
   font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_h4font_other'))); ?>', Arial, Helvetica, sans-serif;
   }	
   <?php } } elseif(get_option('freshcodes_h4font') != "" && get_option('freshcodes_h4font') != "please-select"){ ?>
   h4 {	
   font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_h4font'))); ?>', Arial, Helvetica, sans-serif;
   }	
   <?php } ?>	
   h4 {	
   <?php if(get_option('freshcodes_h4color') != ""){ ?>
      color:#<?php echo esc_attr(get_option('freshcodes_h4color')); ?>;
   <?php } ?>
   font-size:<?php echo esc_attr(get_option('freshcodes_h4_fontsize'))."px"; ?>;
   font-weight: <?php echo esc_attr(get_option('freshcodes_h4_fontweight')); ?>;
   line-height:<?php echo esc_attr(get_option('freshcodes_h4_lineheight'))."px"; ?>;
   letter-spacing:<?php echo esc_attr(get_option('freshcodes_h4_letterspacing'))."px"; ?>;
   text-transform:<?php echo esc_attr(get_option('freshcodes_h4_texttransform')); ?>;
   }	
   <?php if( (get_option('freshcodes_h5font') == "Other+Fonts") || get_option('freshcodes_h5font') == "please-select"){  
      if	(get_option('freshcodes_h5font_other') != ""){ ?>
   h5 {	
   font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_h5font_other'))); ?>', Arial, Helvetica, sans-serif;
   }	
   <?php } } elseif(get_option('freshcodes_h5font') != "" && get_option('freshcodes_h5font') != "please-select"){ ?>
   h5 {	
   font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_h5font'))); ?>', Arial, Helvetica, sans-serif;
   }	
   <?php } ?>
   h5 {
   <?php if(get_option('freshcodes_h5color') != ""){ ?>
      color:#<?php echo esc_attr(get_option('freshcodes_h5color')); ?>;
   <?php } ?>
   font-size:<?php echo esc_attr(get_option('freshcodes_h5_fontsize'))."px"; ?>;
   font-weight: <?php echo esc_attr(get_option('freshcodes_h5_fontweight')); ?>;
   line-height:<?php echo esc_attr(get_option('freshcodes_h5_lineheight'))."px"; ?>;
   letter-spacing:<?php echo esc_attr(get_option('freshcodes_h5_letterspacing'))."px"; ?>;
   text-transform:<?php echo esc_attr(get_option('freshcodes_h5_texttransform')); ?>;
   }	
   <?php if( (get_option('freshcodes_h6font') == "Other+Fonts") || get_option('freshcodes_h6font') == "please-select"){  
      if	(get_option('freshcodes_h6font_other') != ""){ ?>
   h6 {	
   font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_h6font_other'))); ?>', Arial, Helvetica, sans-serif;
   }	
   <?php } } elseif(get_option('freshcodes_h6font') != "" && get_option('freshcodes_h6font') != "please-select"){ ?>
   h6 {	
   font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_h6font'))); ?>', Arial, Helvetica, sans-serif;
   }	
   <?php }  ?>	 
   h6 {
   <?php if(get_option('freshcodes_h6color') != ""){ ?>
      color:#<?php echo esc_attr(get_option('freshcodes_h6color')); ?>;
   <?php } ?>
   font-size:<?php echo esc_attr(get_option('freshcodes_h6_fontsize'))."px"; ?>;
   font-weight: <?php echo esc_attr(get_option('freshcodes_h6_fontweight')); ?>;
   line-height:<?php echo esc_attr(get_option('freshcodes_h6_lineheight'))."px"; ?>;
   letter-spacing:<?php echo esc_attr(get_option('freshcodes_h6_letterspacing'))."px"; ?>;
   text-transform:<?php echo esc_attr(get_option('freshcodes_h6_texttransform')); ?>;
   }
	.fc-date-btn-main .read-more a:hover{
		color:#<?php echo esc_attr(get_option('freshcodes_blog_hoverlink_color')); ?>;
   }
   .fc-date-btn-main .read-more a{
		color:#<?php echo esc_attr(get_option('freshcodes_blog_link_color')); ?>;
   }
   a,.sku{
		color:#<?php echo esc_attr(get_option('freshcodes_link_color')); ?>;
	}
	a:hover ,.header-tag-widget .tagcloud a:hover, 
	.tabs a.current, a.active, .entry-thumbnail .comments-link a:hover,
	.current-cat > a,.woocommerce .entry-summary .yith-wcwl-wishlistexistsbrowse a:hover,
	.woocommerce .entry-summary .yith-wcwl-wishlistaddedbrowse a:hover,
	.woocommerce .entry-summary .yith-wcwl-add-to-wishlist .add_to_wishlist:hover,
	.woocommerce .entry-summary a.compare.button:hover,
	.woocommerce ul.products li .container-inner .wcpc_compare a.button:hover,
	.woocommerce .entry-summary .compare.button:hover,
	.woocommerce .entry-summary .yith-wcwl-add-to-wishlist .add_to_wishlist:hover:before,
	.woocommerce .entry-summary a.compare.button.added:hover,
	.woocommerce .entry-summary .yith-wcwl-wishlistexistsbrowse a:hover:before,
	.woocommerce .entry-summary .compare.button:hover:before,
	.woocommerce .entry-summary .compare.button:hover:before,
	 .woocommerce .entry-summary a.compare.button.added:hover:before,
	.woocommerce .summary .product_meta .posted_in a:hover,
	.woocommerce .summary .product_meta .tagged_as a:hover,
	.brand span a:hover, .social a:hover, .post-navigation a:hover .fa, .woocommerce .entry-summary .yith-wcwl-wishlistaddedbrowse a:hover:before, .primary-sidebar .widget ul > li:hover:before,
   .woocommerce .product-detail-wrapper .onsale,
   .widget_product_categories li > a:hover:before
	{
		color:#<?php echo esc_attr(get_option('freshcodes_hoverlink_color')); ?>;
   }
   .tab-title,
   .woocommerce .entry-summary a.compare.button,.quantity input.plus, .quantity input.minus, .quantity input.minus:focus, .quantity input.plus:focus,
   .header-category ul.product-categories li a:hover,a.showcoupon:hover {
		color:#<?php echo esc_attr(get_option('freshcodes_link_color')); ?>;
	}
	.site-footer .widget-title, #menu-footer-navigation > li > a,
   .fc-address .fc-contact-address,.fc-phone .fc-contact-phone,.fc-email .fc-contact-email a{
		color:#<?php echo esc_attr(get_option('freshcodes_footer_title_color')); ?>;
	}
   .widgets-footercontact .fc-address::before,
   .widgets-footercontact .fc-phone::before,
   .widgets-footercontact .fc-email::before
   {
		background:#<?php echo esc_attr(get_option('freshcodes_footer_title_color')); ?>;
   }
	.footer a, .site-footer a, .site-footer, .footer-middle li .sub-menu li a{
		color:#<?php echo esc_attr(get_option('freshcodes_footerlink_color')); ?>; 
	}
	.footer a:hover, .footer .footer-links li a:hover, .site-footer a:hover, .footer-middle li .sub-menu li a:hover {
		color:#<?php echo esc_attr(get_option('freshcodes_footerhoverlink_color')); ?>;		 
	}
	.site-footer .footer-top
	{
		background-color:#<?php echo esc_attr(get_option('freshcodes_footer_bkg_color')) ; ?>;
		<?php if(get_option('freshcodes_footer_background_upload')!=''){ ?>
		background-image: url("<?php echo esc_url(get_option('freshcodes_footer_background_upload')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_footer_back_position'))); ?>;
		background-repeat:<?php echo esc_attr(get_option('freshcodes_footer_back_repeat')); ?>;
		background-attachment:<?php echo esc_attr(get_option('freshcodes_footer_back_attachment')); ?>;
		<?php } ?>
   }
   .entry-title-main,.breadcrumbs #breadcrumbs a{
      color:#<?php echo esc_attr(get_option('freshcodes_breadcrumb_text_color')) ; ?>;
   }
   .page-title {
		<?php if(get_option('freshcodes_breadcrumb_image')!=''){ ?>
		background-image: url("<?php echo esc_attr(get_option('freshcodes_breadcrumb_image')); ?>");
		background-attachment:<?php echo esc_attr(get_option('freshcodes_breadcrumb_back_attachment')); ?>;
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_breadcrumb_back_position'))); ?>;
		background-repeat:<?php echo get_option('freshcodes_breadcrumb_back_repeat'); ?>;
      <?php } ?>
      background-color:#<?php echo esc_attr(get_option('freshcodes_breadcrumb_bkg_color')) ; ?>;
      color:#<?php echo esc_attr(get_option('freshcodes_breadcrumb_text_color')) ; ?>;
	   background-size: cover;
	}
   .woocommerce-page .page-title {
		<?php if(get_option('freshcodes_woo_breadcrumb_image')!=''){ ?>
		background-image: url("<?php echo esc_attr(get_option('freshcodes_woo_breadcrumb_image')); ?>");
		background-attachment:<?php echo esc_attr(get_option('freshcodes_woo_breadcrumb_back_attachment')); ?>;
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_woo_breadcrumb_back_position'))); ?>;
		background-repeat:<?php echo get_option('freshcodes_woo_breadcrumb_back_repeat'); ?>;
      <?php } ?>
      background-color:#<?php echo esc_attr(get_option('freshcodes_woo_breadcrumb_bkg_color')) ; ?>;
      color:#<?php echo esc_attr(get_option('freshcodes_breadcrumb_text_color')) ; ?>;
	   background-size: cover;
	}

	body {
      font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_bodyfont'))); ?>', Arial, Helvetica, sans-serif;
      color:#<?php echo esc_attr(get_option('freshcodes_bodyfont_color')); ?>;
      font-size:<?php echo esc_attr(get_option('freshcodes_body_fontsize'))."px"; ?>;
      font-weight:<?php echo esc_attr(get_option('freshcodes_body_fontweight')); ?>;
      line-height:<?php echo esc_attr(get_option('freshcodes_body_lineheight'))."px"; ?>;
      letter-spacing:<?php echo esc_attr(get_option('freshcodes_body_letterspacing'))."px"; ?>;
      text-transform:<?php echo esc_attr(get_option('freshcodes_body_texttransform')); ?>;
		<?php if(get_option('freshcodes_background_upload')!=''){ ?>
      background-image: url("<?php echo esc_attr(get_option('freshcodes_background_upload')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_back_position'))); ?>;
		background-repeat:<?php echo get_option('freshcodes_back_repeat'); ?>;
		background-attachment:<?php echo esc_attr(get_option('freshcodes_back_attachment')); ?>;
      background-color:#<?php echo esc_attr(get_option('freshcodes_bkg_color')) ; ?> ;
      background-size: auto;
      <?php } else { ?>
      background-color:#<?php echo esc_attr(get_option('freshcodes_bkg_color')) ; ?> ;		
      <?php } ?>
   }
   .comment-author a,
   .entry-meta-inner a,.entry-meta-inner span,.entry-meta a,.entry-meta span{ color:#<?php echo esc_attr(get_option('freshcodes_bodyfont_color')); ?>;}

   .comment-reply-title, .comments-title,
   .woocommerce .summary .product_meta .posted_in, .entry-summary .sku_wrapper, .woocommerce .summary .product_meta .tagged_as, .brand,
	button,.woo-variation-swatches.wvs-show-label .variations th label{
      color:#<?php echo esc_attr(get_option('freshcodes_secondary_color')) ; ?> ;		
   }
 	.mega-menu ul .owl-item:after, .mega-menu ul > li > a:after, .mega-menu ul.mega li > a:after{
      border-color:#<?php echo esc_attr(get_option('freshcodes_category_menu_text_color')); ?>;
   }
   .mega-menu ul .owl-item:hover:after, .mega-menu ul > li > a:hover:after, .mega-menu ul.mega li > a:hover:after{
      border-color:#<?php echo esc_attr(get_option('freshcodes_category_menu_texthover_color')); ?>;
   }
   .mega-menu ul li a{
      color:#<?php echo esc_attr(get_option('freshcodes_category_menu_text_color')); ?>;
      font-size:<?php echo esc_attr(get_option('freshcodes_category_menu_fontsize')) . "px"; ?>;
      font-weight:<?php echo esc_attr(get_option('freshcodes_main_menu_fontweight')); ?>;
      text-transform:<?php echo esc_attr(get_option('freshcodes_main_menu_texttransform')); ?>;
   }
   .mega-menu ul li a:hover,.mega-menu ul li.current-menu-item a,.mega-menu ul .sub-menu li.current-menu-item a {color:#<?php echo esc_attr(get_option('freshcodes_category_menu_texthover_color')); ?>; }
   
   .mega-menu ul li .sub, .mega-menu > ul > li ul.sub-menu, .mega-menu ul li ul.children {background-color:#<?php echo esc_attr(get_option('freshcodes_category_sub_menu_bkg_color')) ; ?> ;	}
	
   .mega-menu ul li .sub li.mega-hdr a.mega-hdr-a,.mega-menu ul > li.shop-menu > div.shop-product-outer > ul > li.menu-item-has-children > a {
      color:#<?php echo esc_attr(get_option('freshcodes_category_sub_menu_main_title_color')); ?>; }
   .mega-menu ul li .sub a,.mega-menu ul li .sub-menu a, .mega-menu ul li .children a, .mobile-menu ul.sub-menu li a, .mobile-menu ul.children li a{color:#<?php echo esc_attr(get_option('freshcodes_category_sub_menu_text_color')); ?>; }
	.mega-menu ul li .sub a:hover,.mega-menu ul li .sub-menu a:hover, .mega-menu ul li .children a:hover, .mobile-menu ul.sub-menu li a:hover, .mobile-menu ul.children li a:hover{color:#<?php echo esc_attr(get_option('freshcodes_category_sub_menu_texthover_color')); ?>; }
  
	body .primary-sidebar .widget.widget_search form{
		border-color:#<?php echo esc_attr(get_option('freshcodes_button_color')); ?>!important ;
	}
   
       
   <?php if(get_option('freshcodes_header_background_upload')!=''){ ?>
      .sticky-menu .header-style, .home.blog .site-header, .site-header{
		background-image: url("<?php echo esc_attr(get_option('freshcodes_header_background_upload')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_header_back_position'))); ?>;
		background-repeat:<?php echo esc_attr(get_option('freshcodes_header_back_repeat')); ?>;
      background-attachment:<?php echo esc_attr(get_option('freshcodes_header_back_attachment')); ?>;
      background-size: auto;
   }
   <?php } ?>
   .topbar{
      background-color:#<?php echo esc_attr(get_option('freshcodes_topbar_bkg_color')) ; ?>;
   }	
   .header-top{
      background-color:#<?php echo esc_attr(get_option('freshcodes_header_top_bkg_color')); ?>;
	}
   .header-middle{
      background-color:#<?php echo esc_attr(get_option('freshcodes_header_middle_bkg_color')); ?>;
   }
   .header-bottom{
      background-color:#<?php echo esc_attr(get_option('freshcodes_header_bottom_bkg_color')); ?>;
    }
    .mega-menu ul .owl-item:hover, 
    .mega-menu ul > li > a:hover,
	.mega-menu ul.mega li.current-menu-item > a,
	.mega-menu ul.mega li.current-menu-parent > a,
    .mega-menu ul.mega li > a:hover
     { background-color:#<?php echo esc_attr(get_option('freshcodes_category_menu_hover_bkg_color')); ?>;}
   .header-top, .header-top a{
      color:#<?php echo esc_attr(get_option('freshcodes_header_top_text_color')); ?>;
      font-weight:<?php echo esc_attr(get_option('freshcodes_header_fontweight')); ?>;
      font-size:<?php echo esc_attr(get_option('freshcodes_header_fontsize')) . "px"; ?>;
      text-transform:<?php echo esc_attr(get_option('freshcodes_header_texttransform')); ?>;
	}
  
   .header-bottom,.header-bottom a ,.mobile-navigation,.mobile-navigation .menu-toggle{
      color:#<?php echo esc_attr(get_option('freshcodes_header_bottom_text_color')) ; ?>;
	}
   .fc-btn .fc-btn-text{
      color:#<?php echo esc_attr(get_option('freshcodes_button_text_color')); ?>;
   }
.widget button, .widget input[type="button"], .widget input[type="reset"], .widget input[type="submit"],
input[type="button"], input[type="reset"], input[type="submit"], button, .contributor-posts-link, .button_content_inner a,
.woocommerce #content input.button, .woocommerce #respond input#submit, .widget_mc4wp_form_widget input[type="submit"],  .woocommerce button.button, .woocommerce input.button, .woocommerce-page #content input.button, .woocommerce-page #respond input#submit,
.woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce .wishlist_table td.product-add-to-cart a,.fc-btn,
.woocommerce-page input.button:hover,.woocommerce #content input.button.disabled,.woocommerce #content input.button:disabled,.woocommerce #respond input#submit.disabled,.woocommerce #respond input#submit:disabled,
.woocommerce a.button.disabled,.woocommerce a.button:disabled,.woocommerce button.button.disabled,.woocommerce button.button:disabled,.woocommerce input.button.disabled,.woocommerce input.button:disabled,
.woocommerce-page #content input.button.disabled,.woocommerce-page #content input.button:disabled,.woocommerce-page #respond input#submit.disabled,.woocommerce-page #respond input#submit:disabled,.woocommerce-page a.button.disabled,.woocommerce-page a.button:disabled,
.woocommerce-page button.button.disabled,.woocommerce-page button.button:disabled,.woocommerce-page input.button.disabled,.woocommerce-page input.button:disabled, .loadgridlist-wrapper .woocount,.portfolio-filter-container .options li a
{
   font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_button_font_family'))); ?>', sans-serif;
   font-size:<?php echo esc_attr(get_option('freshcodes_button_fontsize'))."px"; ?>;
   font-weight:<?php echo esc_attr(get_option('freshcodes_button_fontweight')); ?>;
   line-height:<?php echo esc_attr(get_option('freshcodes_button_lineh}eight'))."px"; ?>;
   letter-spacing:<?php echo esc_attr(get_option('freshcodes_button_letterspacing'))."px"; ?>;
   text-transform:<?php echo esc_attr(get_option('freshcodes_button_texttransform')); ?>;
   background-color:#<?php echo esc_attr(get_option('freshcodes_button_color')); ?>;
   border-color:#<?php echo esc_attr(get_option('freshcodes_button_border_color')); ?>;
   color:#<?php echo esc_attr(get_option('freshcodes_button_text_color')); ?>;
   padding-top:<?php echo esc_attr(get_option('freshcodes_button_padding_top'))."px"; ?>;
   padding-right:<?php echo esc_attr(get_option('freshcodes_button_padding_right'))."px"; ?>;
   padding-bottom:<?php echo esc_attr(get_option('freshcodes_button_padding_bottom'))."px"; ?>;
   padding-left:<?php echo esc_attr(get_option('freshcodes_button_padding_left'))."px"; ?>;
   border-width:<?php echo esc_attr(get_option('freshcodes_button_border_width'))."px"; ?>;
   border-radius:<?php echo esc_attr(get_option('freshcodes_button_bordertop_radius'))."px" . " " . esc_attr(get_option('freshcodes_button_borderright_radius'))."px" . " " . esc_attr(get_option('freshcodes_button_borderbottom_radius'))."px" . " " . esc_attr(get_option('freshcodes_button_borderleft_radius'))."px"; ?>;
   border-style:<?php echo esc_attr(get_option('freshcodes_button_border_style')); ?>;
	cursor: pointer;
}

.static-links-list span a:hover:before{
   color:#<?php echo esc_attr(get_option('freshcodes_button_color')); ?>;
}

.comment-form input[type="text"], .comment-form input[type="email"], .comment-form input[type="url"], .comment-form textarea,
.woocommerce form .form-row .input-text, .woocommerce-page form .form-row .input-text, .wpcf7-form input, .wpcf7-form textarea
{
   font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_button_font_family'))); ?>', sans-serif;
}
.widget input[type="button"]:hover,.widget input[type="button"]:focus,
.widget input[type="reset"]:hover,.widget input[type="reset"]:focus,
.widget input[type="submit"]:focus,
input[type="button"]:hover,input[type="button"]:focus,input[type="reset"]:hover,
input[type="reset"]:focus,input[type="submit"]:hover,input[type="submit"]:focus,
a.button:hover,a.button:focus,button:hover,button:focus,
.contributor-posts-link:hover,
.calloutarea_button a.button:hover,.calloutarea_button a.button:focus,
.button_content_inner a:hover,.button_content_inner a:focus,
.woocommerce #content input.button:hover, 
.woocommerce #respond input#submit:hover, 
.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce-page #content input.button:hover,
.woocommerce-page #respond input#submit:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover,
.loadgridlist-wrapper .woocount:hover,
.woocommerce .wishlist_table td.product-add-to-cart a:hover,
.paging-navigation a:hover, .paging-navigation .page-numbers.current, .woocommerce-pagination span.current, .woocommerce-pagination a:hover,
.woocommerce-form button[type="submit"], .woocommerce-MyAccount-content p .button,.primary-sidebar .tagcloud a:hover,.tagcloud a:hover,
.woocommerce-MyAccount-navigation ul li.is-active, .woocommerce-MyAccount-navigation ul li:hover,
.owl-pagination .owl-page:hover span, .owl-pagination .owl-page.active:hover span, .owl-pagination .owl-page.active span,.countbox,
.tags-links a:hover,.fc-btn:hover .fc-btn-text,.fc-side-btn-text .fc-btn:hover,.portfolio-filter-container .options li a:active, .portfolio-filter-container .options li a.selected, .portfolio-filter-container .options li a:hover,.fc-btn:hover,.site-footer .ny-textbanner-btn .fc-btn:hover
{
   background-color:#<?php echo esc_attr(get_option('freshcodes_button_hover_color')); ?>;
   border-color:#<?php echo esc_attr(get_option('freshcodes_button_hover_border_color')); ?>;
   color:#<?php echo esc_attr(get_option('freshcodes_button_hover_text_color')); ?>;
}


#to_top,
.links .icon,
.gallery-zoom .icon,
.gallery-redirect .icon,
.blog-posts-content .block_hover .icon,
.paging-navigation .page-numbers, .woocommerce-pagination span, .woocommerce-pagination a,
 .tnp.tnp-widget-minimal .tnp-submit,  .tnp .tnp-submit, 
 body .wp-block-search .wp-block-search__button,
.whislist-counter .count,
.entry-meta-blog .entry-date,
.header-category .widget-title,
.related_posts .post-info .entry-date

{   background-color:#<?php echo esc_attr(get_option('freshcodes_button_color'));  ?>;
   color:#<?php echo esc_attr(get_option('freshcodes_button_text_color')); ?>;
   border-color:#<?php echo esc_attr(get_option('freshcodes_button_border_color')); ?>;
}
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, 
.woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle{
   background-color:#<?php echo esc_attr(get_option('freshcodes_search_button_color'));  ?>;
   border-color:#<?php echo esc_attr(get_option('freshcodes_search_button_border_color')); ?>;
}
.header-search .woocommerce-product-search input[type="submit"],
.woocommerce .widget_price_filter .price_slider_amount .button, .woocommerce-page .widget_price_filter .price_slider_amount .button,
body .header-search button[type="submit"],body  .widget.widget_product_search button[type="submit"],
body .widget.widget_search .widget-search-btn
{   
   background-color:#<?php echo esc_attr(get_option('freshcodes_search_button_color'));  ?>;
   color:#<?php echo esc_attr(get_option('freshcodes_button_text_color')); ?>;
   border-color:#<?php echo esc_attr(get_option('freshcodes_search_button_border_color')); ?>;
   color:#<?php echo esc_attr(get_option('freshcodes_button_text_color')); ?>;
   padding-top:<?php echo esc_attr(get_option('freshcodes_search_button_padding_top'))."px"; ?>;
   padding-right:<?php echo esc_attr(get_option('freshcodes_search_button_padding_right'))."px"; ?>;
   padding-bottom:<?php echo esc_attr(get_option('freshcodes_search_button_padding_bottom'))."px"; ?>;
   padding-left:<?php echo esc_attr(get_option('freshcodes_search_button_padding_left'))."px"; ?>;
   border-width:<?php echo esc_attr(get_option('freshcodes_search_button_border_width'))."px"; ?>;
   border-radius:<?php echo esc_attr(get_option('freshcodes_search_button_bordertop_radius'))."px" . " " . esc_attr(get_option('freshcodes_search_button_borderright_radius'))."px" . " " . esc_attr(get_option('freshcodes_search_button_borderbottom_radius'))."px" . " " . esc_attr(get_option('freshcodes_search_button_borderleft_radius'))."px"; ?>;
   border-style:<?php echo esc_attr(get_option('freshcodes_search_button_border_style')); ?>;
}
.woocommerce .widget_price_filter .price_slider_amount .button:hover, 
.woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
.header-search .woocommerce-product-search input[type="submit"]:hover, 
.header-search button[type="submit"]:hover,
body .widget.widget_search .widget-search-btn:hover,body .search-form input[type="submit"]:hover,body .widget.widget_product_search button[type="submit"]:hover,body .wp-block-search .wp-block-search__button:hover
{   
   background-color:#<?php echo esc_attr(get_option('freshcodes_search_button_hover_color'));  ?>;
   color:#<?php echo esc_attr(get_option('freshcodes_button_hover_text_color')); ?>;
   border-color:#<?php echo esc_attr(get_option('freshcodes_search_button_hover_border_color')); ?>;
}
.woocommerce .widget_price_filter .price_slider_amount .button, .woocommerce-page .widget_price_filter .price_slider_amount .button{
   color:#<?php echo esc_attr(get_option('freshcodes_search_button_icon_color'));  ?>;
}
.woocommerce .widget_price_filter .price_slider_amount .button:hover, .woocommerce-page .widget_price_filter .price_slider_amount .button:hover{
   color:#<?php echo esc_attr(get_option('freshcodes_search_button_hover_icon_color'));  ?>;
}
.header-search .woocommerce-product-search input[type="submit"]::after, 
.header-search button[type="submit"]::after, 
.widget.widget_search input[type="submit"]::after, 
.search-form input[type="submit"]::after, 
.widget.widget_product_search button[type="submit"]::after,
.widget.widget_search .widget-search-btn::after,
.widget.widget_search input[type="submit"]::after, 
.wp-block-search .wp-block-search__button::after{
   background:#<?php echo esc_attr(get_option('freshcodes_search_button_icon_color'));  ?>;
}
.header-search .woocommerce-product-search input[type="submit"]:hover::after, 
.header-search button[type="submit"]:hover::after, 
.widget.widget_search input[type="submit"]:hover::after, 
.search-form input[type="submit"]:hover::after,
.widget.widget_product_search button[type="submit"]:hover::after,
.widget.widget_search input[type="submit"]:hover::after,
.widget.widget_search .widget-search-btn:hover::after,
.wp-block-search .wp-block-search__button:hover::after{
   background:#<?php echo esc_attr(get_option('freshcodes_search_button_hover_icon_color'));  ?>;
}
.tags-links a:hover
{   
   background-color:#<?php echo esc_attr(get_option('freshcodes_button_hover_color'));  ?>;
   color:#<?php echo esc_attr(get_option('freshcodes_button_hover_text_color')); ?>;
   border-color:#<?php echo esc_attr(get_option('freshcodes_button_hover_border_color')); ?>;
}

.header-cart .cart-contents span.cart-qty,
#to_top:hover,
.links a.icon:hover, .gallery-zoom .icon:hover, .gallery-redirect .icon:hover, .blog-posts-content .block_hover .icon:hover
{  background-color:#<?php echo esc_attr(get_option('freshcodes_button_hover_color')); ?>
   color:#<?php echo esc_attr(get_option('freshcodes_button_hover_text_color')); ?>;
   border-color:#<?php echo esc_attr(get_option('freshcodes_button_hover_border_color')); ?>;
}
.sk-folding-cube .sk-cube::before{background-color:#<?php echo esc_attr(get_option('freshcodes_loader_color')); ?>;}
.fc-loader-pie > div div:nth-child(1) > div {background:#<?php echo esc_attr(get_option('freshcodes_loader_color')); ?>;}
.fc-loader-pie > div div:nth-child(2) > div {background:#<?php echo esc_attr(get_option('freshcodes_loader_color')); ?>;}
.fc-loader-pie > div div:nth-child(3) > div {background:#<?php echo esc_attr(get_option('freshcodes_loader_color')); ?>;}
.fc-loader-pie > div div:nth-child(4) > div {background:#<?php echo esc_attr(get_option('freshcodes_loader_color')); ?>;}
.fc-ldio div,.fc-ldio div:nth-child(2),.fc-ldio div:nth-child(3),.fc-ldio div:nth-child(4){
	background:#<?php echo esc_attr(get_option('freshcodes_loader_color')); ?>;
}
.blog-image {
   background-image: url("<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>");
}
.comment-author b, .comment-author a {
   font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('freshcodes_h3font'))); ?>', Arial, Helvetica, sans-serif;
}
.woocommerce .product-button-hover .button.add_to_cart_button.ajax_add_to_cart,
.woocommerce .product-button-hover .button.product_type_external,
.woocommerce .product-button-hover .button.product_type_grouped,
.woocommerce .yith-wcwl-add-to-wishlist a.add_to_wishlist,
.woocommerce .product-button-hover .button.product_type_variable,
.woocommerce .button.yith-wcqv-button,.woocommerce ul.products li.product .yith-wcwl-wishlistexistsbrowse,
.woocommerce .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a{
	background-color:#<?php echo esc_attr(get_option('freshcodes_nav_button')); ?>;
}
.woocommerce .product-button-hover .button.add_to_cart_button.ajax_add_to_cart:hover,
.woocommerce .product-button-hover .button.product_type_external:hover,
.woocommerce .product-button-hover .button.product_type_grouped:hover,
.woocommerce .yith-wcwl-add-to-wishlist a.add_to_wishlist:hover,
.woocommerce .product-button-hover .button.product_type_variable:hover,
.woocommerce .button.yith-wcqv-button:hover,
.woocommerce ul.products li.product .yith-wcwl-wishlistexistsbrowse:hover,
.woocommerce .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:hover{
	background-color:#<?php echo esc_attr(get_option('freshcodes_nav_button_bkg_hover_color')); ?>;
}
.woocommerce-product-gallery__image .count-down {
	bottom: 0px;
	position: absolute;
	width: calc(100% - 20px);
	padding-block: 11px;
	right: 0;
	left: 0;
	margin: auto;
	margin-inline: 0px;
	display: flex;
}
.topbar-link-wrapper, .account-link-wrapper,.mega-menu ul li ul.sub-menu, .mega-menu ul li ul.children,.shop-product-outer{
	background-color:#<?php echo esc_attr(get_option('freshcodes_category_sub_menu_bkg_color')); ?>;
}
header .topbar-link-wrapper a,header .account-link-wrapper a{
   color:#<?php echo esc_attr(get_option('freshcodes_category_sub_menu_text_color')); ?>;
}
header .topbar-link-wrapper a:hover,header .account-link-wrapper a:hover{
   color:#<?php echo esc_attr(get_option('freshcodes_category_sub_menu_texthover_color')); ?>;
}
.elementor-image-carousel-wrapper .elementor-swiper-button,
.pricing_heading
{
   background-color:#<?php echo esc_attr(get_option('freshcodes_nav_button')); ?>;
   color:#<?php echo esc_attr(get_option('freshcodes_nav_button_text_color')); ?>;
}
.elementor-image-carousel-wrapper .elementor-swiper-button:hover,
.pricing_wrapper:hover .pricing_heading, .pricing_wrapper .selected .pricing_heading, 
.pricing_wrapper:hover .pricing_top, .pricing_wrapper .selected .pricing_top, 
.pricing_wrapper:hover .pricing_button a#pricing-btn, .pricing_wrapper .selected .pricing_button a#pricing-btn
{
   background-color:#<?php echo esc_attr(get_option('freshcodes_nav_button_bkg_hover_color')); ?>;
   color:#<?php echo esc_attr(get_option('freshcodes_nav_button_hover_text_color')); ?>;
}
ul.products li.product .product_type_simple::before, ul.products li.product .product_type_external::before, ul.products li.product .product_type_grouped::before, ul.products li.product .product_type_variable::before,
.woocommerce ul.products li.product .button.product_type_simple.add_to_cart_button.ajax_add_to_cart.added::before, 
#home_featured_carousel .add_to_cart_button.added::before,
.woocommerce a.compare.button.added::before,
.woocommerce a.compare.button::before,
.woocommerce .yith-wcwl-add-to-wishlist .add_to_wishlist::before, 
.woocommerce-page .yith-wcwl-add-to-wishlist .add_to_wishlist::before, 
.product-detail .yith-wcwl-add-to-wishlist .add_to_wishlist::before, 
.woocommerce .yith-wcwl-wishlistexistsbrowse a::before, 
.woocommerce .yith-wcwl-wishlistaddedbrowse a::before,
.woocommerce .yith-wcwl-wishlistexistsbrowse a::before, .woocommerce .yith-wcwl-wishlistaddedbrowse a::before,
.woocommerce ul.products li.product .yith-wcqv-button::before, .woocommerce-page ul.products li.product .yith-wcqv-button::before, 
.button.yith-wcqv-button::before,.product-button-hover .button.product_type_variable::before
{
   background:#<?php echo esc_attr(get_option('freshcodes_nav_button_text_color')); ?>;  
   
}

ul.products li.product .product_type_simple:hover::before, ul.products li.product .product_type_external:hover::before, ul.products li.product .product_type_grouped:hover::before, ul.products li.product .product_type_variable:hover::before,
.woocommerce ul.products li.product .button.product_type_simple.add_to_cart_button.ajax_add_to_cart.added:hover::before, 
#home_featured_carousel .add_to_cart_button.added:hover::before,
.woocommerce a.compare.button.added:hover::before,
.woocommerce a.compare.button:hover::before,
.woocommerce .yith-wcwl-add-to-wishlist .add_to_wishlist:hover::before, 
.woocommerce-page .yith-wcwl-add-to-wishlist .add_to_wishlist:hover::before, 
.product-detail .yith-wcwl-add-to-wishlist .add_to_wishlist:hover::before, 
.woocommerce .yith-wcwl-wishlistexistsbrowse a:hover::before, 
.woocommerce .yith-wcwl-wishlistaddedbrowse a:hover::before,
.woocommerce .yith-wcwl-wishlistexistsbrowse a:hover::before, .woocommerce .yith-wcwl-wishlistaddedbrowse a:hover::before,
.woocommerce ul.products li.product .yith-wcqv-button:hover::before, .woocommerce-page ul.products li.product .yith-wcqv-button:hover::before, 
.button.yith-wcqv-button:hover::before,.product-button-hover .button.product_type_variable:hover::before
{
   background:#<?php echo esc_attr(get_option('freshcodes_nav_button_hover_text_color')); ?>;  
   
}

   .menu-toggle::before,
   .header-cart .shopping_cart .cart-icon,
   .compare-counter .counter-label, .whislist-counter .whislist-label,
   .category-toggle::before,
   .login-out::before, .login-out.log-in::before,
   .header-search .header-toggle,
   .topbar-link .account-icon
   {
      background:#<?php echo esc_attr(get_option('freshcodes_link_color')); ?>;
   }
.widget .widget-title::after,
blockquote::after,
.woocommerce .entry-summary .yith-wcwl-add-to-wishlist .add_to_wishlist:hover:before, .woocommerce .entry-summary .yith-wcwl-wishlistexistsbrowse a:hover:before, .woocommerce .entry-summary .yith-wcwl-wishlistaddedbrowse a:hover:before, .woocommerce .entry-summary a.compare.button:hover:before
{
   background:#<?php echo esc_attr(get_option('freshcodes_hoverlink_color')); ?>;
}

.primary-sidebar a{
   color:#<?php echo esc_attr(get_option('freshcodes_sidebar_text_color')); ?>;
   }
   .primary-sidebar a:hover {
   color:#<?php echo esc_attr(get_option('freshcodes_sidebar_text_hover_color')); ?>;
   }
   
.newsletter-text:before{
   mask: url("<?php echo esc_attr(get_option('freshcodes_newsletter_icon_upload')); ?>");
   -webkit-mask: url("<?php echo esc_attr(get_option('freshcodes_newsletter_icon_upload')); ?>");
   mask-size: <?php echo esc_attr(get_option('freshcodes_newsletter_icon_size')) ; ?>px;
   -webkit-mask-size: <?php echo esc_attr(get_option('freshcodes_newsletter_icon_size')) ; ?>px;
   height: <?php echo esc_attr(get_option('freshcodes_newsletter_icon_size')) ; ?>px;
   width: <?php echo esc_attr(get_option('freshcodes_newsletter_icon_size')) ; ?>px;
   background :#<?php echo esc_attr(get_option('freshcodes_footer_newsletter_icon_color')) ; ?>;
}
.footer-newsletter  {
      background-color:#<?php echo esc_attr(get_option('freshcodes_footer_newsletter_bkg_color')) ; ?>;
}
.footer-newsletter .theme-container h2{      
		color:#<?php echo esc_attr(get_option('freshcodes_footer_newsletter_title_color')) ; ?>;
}  
.footer-newsletter .theme-container{      
		color:#<?php echo esc_attr(get_option('freshcodes_footer_newsletter_text_color')) ; ?>;
}  
.widget .tnp-email, .mc4wp-form input[type="email"],.service-list:hover .service-icon,
.pricing_wrapper:hover .pricing_wrapper_inner, .pricing_wrapper:hover .pricing_button a#pricing-btn, .pricing_wrapper .selected .pricing_button a#pricing-btn {
	border-color: #<?php echo esc_attr(get_option('freshcodes_hoverlink_color')); ?>;
}
/* price */
.woocommerce #content div.product form.cart .group_table td, .woocommerce div.product form.cart .group_table td, 
.woocommerce-page #content div.product form.cart .group_table td, .woocommerce-page div.product form.cart .group_table td,
.woocommerce-page div.product form.cart .group_table td a,.widget .product-title,.woocommerce-Price-amount bdi{
   color:#<?php echo esc_attr(get_option('freshcodes_product_price_color')) ; ?>;
}
.products li.product .price,.primary-sidebar .amount, .site-footer .amount,.summary .price{
   color:#<?php echo esc_attr(get_option('freshcodes_product_price_color')) ; ?>;
   font-size:<?php echo esc_attr(get_option('freshcodes_price_fontsize'))."px"; ?>;
   font-weight: <?php echo esc_attr(get_option('freshcodes_price_fontweight')); ?>;
   line-height:<?php echo esc_attr(get_option('freshcodes_price_lineheight'))."px"; ?>;
   letter-spacing:<?php echo esc_attr(get_option('freshcodes_price_letterspacing'))."px"; ?>;
   text-transform:<?php echo esc_attr(get_option('freshcodes_price_texttransform')); ?>;
}
</style>
	<?php }  ?>