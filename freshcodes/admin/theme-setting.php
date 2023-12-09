<?php

/*===================================================================================================================
=============================================== Logo Settings ====================================================
=================================================================================================================== */
$options10 = array(array());
$options10[] = array("id" => "freshcodes_logo_image",
    "label" => __("Logo Image",'nyclaptoprepair'),
    "type" => "upload",
    "description" => __("Upload Your Logo. ",'nyclaptoprepair'));
$options10[] = array("id" => "freshcodes_logo_image_alt",
    "label" => __("Logo Text",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set your logo text here. ",'nyclaptoprepair'));
$options10[] = array("id" => "freshcodes_logo_image_size",
    "label" => __("Logo Size",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set Logo Size. ex: 178  ",'nyclaptoprepair')); 
$options10[] = array("id" => "freshcodes_mob_logo_image",
    "label" => __("Mobile Logo Image",'nyclaptoprepair'),
    "type" => "upload-2",
    "description" => __("Upload Your Mobile Logo. ",'nyclaptoprepair'));
$options10[] = array("id" => "freshcodes_mob_logo_image_alt",
    "label" => __("Mobile Logo Text",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __(" Set your Mobile Logo Image here.",'nyclaptoprepair'));
$options10[] = array("id" => "freshcodes_mob_logo_image_size",
    "label" => __("Mobile Logo Size",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Mobile Logo Image Size. ex: 100  ",'nyclaptoprepair')); 
  
/*===================================================================================================================
=============================================== General Settings ====================================================
=================================================================================================================== */
$options1 = array(array());
$options1[] = array("label" => __("Site Loader Settings",'nyclaptoprepair'),
    "title" => __("Site Loader Settings",'nyclaptoprepair'),
    "type" => "Title-1");
$options1[] = array("id" => "freshcodes_show_site_loader",
    "label" => __("Show Site Loader",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Displays Site Loader.",'nyclaptoprepair'),
    "options" => array('no' => 'No','yes' => 'Yes'));
$options1[] = array("id" => "freshcodes_loader_color",
    "label" => "Site Loader Color",
    "type" => "textbox-1",
    "std" => "222222",
    "description" => "Change your site loader color. ");
$options1[] = array("id" => "freshcodes_loader_selector",
    "label" => __("Site Loader",'nyclaptoprepair'),
    "type" => "texture",
    "description" => __("Choose Site Loader. ",'nyclaptoprepair'),
    "std" => "fc-logo-2.gif",
    "options" => array('fc-logo.gif' => 'fc-logo.gif','fc-logo-2.gif' => 'fc-logo-2.gif','fc-logo-3.gif' => 'fc-logo-3.gif'));
$options1[] = array("label" =>__( "Body Settings",'nyclaptoprepair'),
    "title" =>__("Body Settings",'nyclaptoprepair'),
    "type" => "Title-1");
$options1[] = array("id" => "freshcodes_bodyfont",
    "label" => "Body Font",
    "type" => "select",
    "description" => "Change your body font. ",
    "options" => array( 'Inter' => 'Inter', 'please-select' => 'please-select', 'Montserrat' => 'Montserrat','Dosis' => 'Dosis','Arsenal' => 'Arsenal','Jost' => 'Jost','Poppins' => 'Poppins','Nunito' => 'Nunito', 'Josefin+San' => 'Josefin San', 'Antic' => 'Antic', 'Bitter' => 'Bitter', 'Droid+Serif' => 'Droid Serif', 'Philosopher' => 'Philosopher', 'Oxygen' => 'Oxygen', 'Rokkitt' => 'Rokkitt', 'Galdeano' => 'Galdeano', 'Dmsans' => 'Dmsans', 'Playfair+Display'=>'Playfair Display', 'Cabin' => 'Cabin', 'Cuprum' => 'Cuprum', 'Varela' => 'Varela', 'Andika' => 'Andika', 'Ubuntu' => 'Ubuntu', 'Other+Fonts' => 'Other Fonts'));
$options1[] = array("id" => "freshcodes_body_fontsize",
    "label" => __("Body Text Font Size",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set Body font size Ex. 14,16,18 not add px. ",'nyclaptoprepair'),
    "std" => "16");
$options1[] = array("id" => "freshcodes_body_fontweight",
    "label" => __("Body Text Font Weight",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set Body font weight Ex. 400,500,600. ",'nyclaptoprepair'),
    "std" => "400");
$options1[] = array("id" => "freshcodes_body_lineheight",
    "label" => __("Body Text Font Line Height",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set Body Font Line Height Ex. 24,36,45,etc. ",'nyclaptoprepair'),
    "std" => "24");
$options1[] = array("id" => "freshcodes_body_letterspacing",
    "label" => __("Body Text Font Letter Spacing",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set Body Font Letter Spacing Ex. 0.5,0.8,1,etc. ",'nyclaptoprepair'),
    "std" => "24");
$options1[] = array("id" => "freshcodes_body_texttransform",
    "label" => __("Body text transform",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Body text transform. ",'nyclaptoprepair'),
    "options" => array('capitalize' => 'capitalize', 'uppercase' => 'uppercase', 'lowercase' => 'lowercase', 'none' => 'none', 'full-width' => 'full-width', 'full-size-kana' => 'full-size-kana'));
$options1[] = array("id" => "freshcodes_bodyfont_other",
    "label" => "Specified Other Body Font",
    "type" => "textbox",
    "description" => "Change your specified body font Like Arail,verdana etc. ");
$options1[] = array("id" => "freshcodes_bodyfont_color",
    "label" => "Body Font Color",
    "std" => "222222",
    "type" => "textbox-1",
    "description" => "Change your body font color. ");
$options1[] = array("id" => "freshcodes_secondary_color",
    "label" => "Secondary Font Color",
    "std" => "808080",
    "type" => "textbox-1",
    "description" => "Change your Primary color. ");    
$options1[] = array("id" => "freshcodes_background_upload",
    "label" => __("Body Background Image",'nyclaptoprepair'),
    "type" => "upload-3",
    "description" => __("Upload Theme body Background. ",'nyclaptoprepair'));      
$options1[] = array("id" => "freshcodes_back_repeat",
    "label" => __("Body Background Repeat",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Background repeate. ",'nyclaptoprepair'),
    "options" => array('no-repeat' => 'no-repeat', 'repeat' => 'repeat', 'repeat-x' => 'repeat-x', 'repeat-y' => 'repeat-y'));
$options1[] = array("id" => "freshcodes_back_position",
    "label" => __("Body Background Position",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Backgroung position. ",'nyclaptoprepair'),
    "options" => array('top+left' => 'top left', 'top+center' => 'top center', 'top+right' => 'top right', 'center+right' => 'center right', 'center+left' => 'center left', 'center+center' => 'center center', 'bottom+right' => 'bottom right', 'bottom+center' => 'bottom center', 'bottom+left' => 'bottom left'));
$options1[] = array("id" => "freshcodes_back_attachment",
    "label" => __("Body Background Attachment",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Background attachment. ",'nyclaptoprepair'),
    "options" => array('scroll' => 'Scroll', 'Fixed' => 'fixed'));
 $options1[] = array("id" => "freshcodes_bkg_color",
    "label" => "Body Background Color",
    "type" => "textbox-1",
    "std" => "FFFFFF",
    "description" => "Change your body background color. ");
$options1[] = array("label" =>__( "Button Settings",'nyclaptoprepair'),
    "title" =>__("Button Settings",'nyclaptoprepair'),
    "type" => "Title-1");
$options1[] = array("id" => "freshcodes_button_font_family",
    "label" => __("Button  Font",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Change store button font.",'nyclaptoprepair'),
    "options" => array( 'Inter' => 'Inter', 'please-select' => 'please-select','Arsenal'=>'Arsenal', 'Montserrat' => 'Montserrat','Inter'=>'Inter','Antic'=>'Antic','Jost'=>'Jost','Droid+Serif'=>'Droid Serif','Nunito'=>'Nunito','DM+Sans'=>'DM Sans','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Droid+Sans'=>'Droid Sans','Playfair+Display'=>'Playfair Display','Cabin'=>'Cabin','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Ubuntu' =>'Ubuntu','Other+Fonts'=>'Other Fonts'));
$options1[] = array("id" => "freshcodes_button_fontsize",
    "label" => __("Button Text Font Size",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set Button font size Ex. 14,16,18 not add px. ",'nyclaptoprepair'),
    "std" => "14");
$options1[] = array("id" => "freshcodes_button_fontweight",
    "label" => __("Button Text Font Weight",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set Button font weight Ex. 400,500,600. ",'nyclaptoprepair'),
    "std" => "500");
$options1[] = array("id" => "freshcodes_button_lineheight",
    "label" => __("Button Text Font Line Height",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set Button Font Line Height Ex. 24,36,45,etc. ",'nyclaptoprepair'),
    "std" => "24");
$options1[] = array("id" => "freshcodes_button_letterspacing",
    "label" => __("Button Text Font Letter Spacing",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set Button Font Letter Spacing Ex. 0.5,0.8,1,etc. ",'nyclaptoprepair'),
    "std" => "8.4");
$options1[] = array("id" => "freshcodes_button_texttransform",
    "label" => __("Button text transform",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Button text transform. ",'nyclaptoprepair'),
    "options" => array('capitalize' => 'capitalize', 'uppercase' => 'uppercase', 'lowercase' => 'lowercase', 'none' => 'none', 'full-width' => 'full-width', 'full-size-kana' => 'full-size-kana'));
$options1[] = array("id" => "freshcodes_button_color",
    "label" => __("Background Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "F7D929",
    "description" => __("Change store buttons Background color. ",'nyclaptoprepair'));  
$options1[] = array("id" => "freshcodes_button_text_color",
    "label" => __("Text Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change store buttons text color.",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_button_hover_color",
    "label" => __("Buttons Hover Background Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change store button hover background color. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_button_hover_text_color",
    "label" => __("Buttons hover Text Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "FFFFFF",
    "description" => __("Change store buttons hover text color. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_button_padding_top",
    "label" => __("Buttons Top Padding",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "12",
    "description" => __("Set Buttons Top Padding. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_button_padding_right",
    "label" => __("Buttons Right Padding",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "12",
    "description" => __("Set Buttons Right Padding. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_button_padding_bottom",
    "label" => __("Buttons Bottom Padding",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "12",
    "description" => __("Set Buttons Bottom Padding. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_button_padding_left",
    "label" => __("Buttons Left Padding",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "12",
    "description" => __("Set Buttons Left Padding. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_button_border_width",
    "label" => __("Buttons Border Width",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "1",
    "description" => __("Set Buttons Border Width. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_button_bordertop_radius",
    "label" => __("Buttons Border Top Radius",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "0",
    "description" => __("Set Buttons Border Top Radius. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_button_borderright_radius",
    "label" => __("Buttons Border Right Radius",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "0",
    "description" => __("Set Buttons Border Right Radius. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_button_borderbottom_radius",
    "label" => __("Buttons Border Bottom Radius",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "0",
    "description" => __("Set Buttons Border Bottom Radius. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_button_borderleft_radius",
    "label" => __("Buttons Border Left Radius",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "0",
    "description" => __("Set Buttons Border Left Radius. ",'nyclaptoprepair'));  
$options1[] = array("id" => "freshcodes_button_border_style",
    "label" => __("Buttons Border Style",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Buttons Border Style. ",'nyclaptoprepair'),
    "options" => array('dotted' => 'Dotted', 'fixed' => 'Fixed', 'solid' => 'Solid', 'double ' => 'Double ', 'groove' => 'Groove', 'ridge' => 'Ridge', 'inset' => 'Inset', 'outset' => 'Outset', 'none' => 'None', 'hidden' => 'Hidden'));
$options1[] = array("id" => "freshcodes_button_border_color",
    "label" => __("Border Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "F7D929",
    "description" => __("Change store buttons border color.",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_button_hover_border_color",
    "label" => __("Buttons Hover Border Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change store button hover border color. ",'nyclaptoprepair'));
$options1[] = array("label" => __("Site Search Button Settings",'nyclaptoprepair'),
    "title" => __("Site Search Button Settings",'nyclaptoprepair'),
    "type" => "Title-1");
$options1[] = array("id" => "freshcodes_search_button_color",
    "label" => __("Search Background Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "fff",
    "description" => __("Change store Search buttons Background color. ",'nyclaptoprepair'));  
$options1[] = array("id" => "freshcodes_search_button_icon_color",
    "label" => __("Search Button icon Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change store Search buttons icon color.",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_search_button_hover_color",
    "label" => __("Search Hover Background Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change store Search button hover background color. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_search_button_hover_icon_color",
    "label" => __("Search Button icon hover Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "FFFFFF",
    "description" => __("Change store Search buttons hover icon color. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_search_button_padding_top",
    "label" => __("Search Buttons Top Padding",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "12",
    "description" => __("Set Search Buttons Top Padding. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_search_button_padding_right",
    "label" => __("Search Buttons Right Padding",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "12",
    "description" => __("Set Search Buttons Right Padding. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_search_button_padding_bottom",
    "label" => __("Search Buttons Bottom Padding",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "12",
    "description" => __("Set Search Buttons Bottom Padding. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_search_button_padding_left",
    "label" => __("Search Buttons Left Padding",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "12",
    "description" => __("Set Search Buttons Left Padding. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_search_button_border_width",
    "label" => __("Search Buttons Border Width",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "1",
    "description" => __("Set Search Buttons Border Width. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_search_button_bordertop_radius",
    "label" => __("Search Buttons Border Top Radius",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "0",
    "description" => __("Set Search Buttons Border Top Radius. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_search_button_borderright_radius",
    "label" => __("Search Buttons Border Right Radius",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "0",
    "description" => __("Set Search Buttons Border Right Radius. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_search_button_borderbottom_radius",
    "label" => __("Search Buttons Border Bottom Radius",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "0",
    "description" => __("Set Search Buttons Border Bottom Radius. ",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_search_button_borderleft_radius",
    "label" => __("Search Buttons Border Left Radius",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "0",
    "description" => __("Set Search Buttons Border Left Radius. ",'nyclaptoprepair'));  
$options1[] = array("id" => "freshcodes_search_button_border_style",
    "label" => __("Search Buttons Border Style",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Search Buttons Border Style. ",'nyclaptoprepair'),
    "options" => array('dotted' => 'Dotted', 'fixed' => 'Fixed', 'solid' => 'Solid', 'double ' => 'Double ', 'groove' => 'Groove', 'ridge' => 'Ridge', 'inset' => 'Inset', 'outset' => 'Outset', 'none' => 'None', 'hidden' => 'Hidden'));
$options1[] = array("id" => "freshcodes_search_button_border_color",
    "label" => __("Search Border Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "F7D929",
    "description" => __("Change store Search buttons border color.",'nyclaptoprepair'));
$options1[] = array("id" => "freshcodes_search_button_hover_border_color",
    "label" => __("Search Buttons Hover Border Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change store Search button hover border color. ",'nyclaptoprepair'));

/*===================================================================================================================
=============================================== Header Settings ====================================================
=================================================================================================================== */
$options2 = array(array());
$options2[] = array("id" => "freshcodes_header_sticky",
    "label" => __("Sticky Header",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("To Sticky Header. (You don't use top header sticky and bottom headr stciky together)",'nyclaptoprepair'),
    "options" => array('top-sticky' => 'Top Sticky','bottom-sticky' => 'Bottom Sticky','not-sticky' => 'Not-Sticky'));
$options2[] = array("id" => "freshcodes_header_background_upload",
    "label" => __("Upload Header Background Image",'nyclaptoprepair'),
    "type" => "upload-1",
    "description" => __("Upload Your Header Background Image. ",'nyclaptoprepair'));
$options2[] = array("id" => "freshcodes_header_top_icon",
    "label" => __("Header Top Text Icon",'nyclaptoprepair'),
    "type" => "upload-2",
    "description" => __("Upload Header Top Text Icon. ",'nyclaptoprepair'));
$options2[] = array("id" => "freshcodes_header_toptext",
    "label" => __("Header Top Text",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Enter Header Top Text here",'nyclaptoprepair'),
    "std" => "San Francisco, CA, USA");
$options2[] = array("id" => "freshcodes_header_back_repeat",
    "label" => __("Header Image Background Repeat",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Header Image Background repeat. ",'nyclaptoprepair'),
    "options" => array('no-repeat' => 'no-repeat', 'repeat' => 'repeat', 'repeat-x' => 'repeat-x', 'repeat-y' => 'repeat-y'));
$options2[] = array("id" => "freshcodes_header_back_position",
    "label" => __("Header Image Background Position",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Header Image Backgroung position. ",'nyclaptoprepair'),
    "options" => array('top+left' => 'top left', 'top+center' => 'top center', 'top+right' => 'top right', 'center+right' => 'center right', 'center+left' => 'center left', 'center+center' => 'center center', 'bottom+right' => 'bottom right', 'bottom+center' => 'bottom center', 'bottom+left' => 'bottom left'));
$options2[] = array("id" => "freshcodes_header_back_attachment",
    "label" => __("Header Image Background Attachment",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Header Image Background attachment. ",'nyclaptoprepair'),
    "options" => array('scroll' => 'Scroll', 'Fixed' => 'fixed'));
/* Header Top */    
$options2[] = array("id" => "freshcodes_header_top_bkg_color",
    "label" => __("Header Top Background Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "f7d929",
    "description" => __("Change your header top background color. ",'nyclaptoprepair'));    
$options2[] = array("id" => "freshcodes_header_top_text_color",
    "label" => __("Text color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change your text color of Top Header ",'nyclaptoprepair'));
$options2[] = array("id" => "freshcodes_header_fontsize",
    "label" => __("Header Text Font Size",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set header font size Ex. 14,16,18 not add px. ",'nyclaptoprepair'),
    "std" => "16");
$options2[] = array("id" => "freshcodes_header_fontweight",
    "label" => __("Header Text Font Weight",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set header font weight Ex. 400,500,600. ",'nyclaptoprepair'),
    "std" => "400");
$options2[] = array("id" => "freshcodes_header_texttransform",
    "label" => __("Header text transform",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Header text transform. ",'nyclaptoprepair'),
    "options" => array('capitalize' => 'capitalize', 'uppercase' => 'uppercase', 'lowercase' => 'lowercase', 'none' => 'none', 'full-width' => 'full-width', 'full-size-kana' => 'full-size-kana'));
$options2[] = array("id" => "freshcodes_header_text1",
    "label" => __("Header Text 1",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Enter your Top Header Text 1 here Ex. FAQ. ",'nyclaptoprepair'),
    "std" => "");
$options2[] = array("id" => "freshcodes_header_link_icon",
    "label" => __("Header Text Link Icon",'nyclaptoprepair'),
    "type" => "upload-3",
    "description" => __("Upload Header Top Text Icon. ",'nyclaptoprepair'));
$options2[] = array("id" => "freshcodes_header_text1_link",
    "label" => __("Header Text 1 Link",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Enter your Top Header Text Link here. ",'nyclaptoprepair'),
    "std" => "");
$options2[] = array("id" => "freshcodes_header_text2",
    "label" => __("Header Text 2",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Enter your Top Header Text 2 here Ex. Contact. ",'nyclaptoprepair'),
    "std" => "");
$options2[] = array("id" => "freshcodes_header_text2_link",
    "label" => __("Header Text 2 Link",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Enter your Top Header Text 2 Link here. ",'nyclaptoprepair'),
    "std" => "");

/* Header Bottom */   
$options2[] = array("id" => "freshcodes_header_bottom_bkg_color",
    "label" => __("Header Bottom Background Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "FFFFFF",
    "description" => __("Change your header bottom background color. ",'nyclaptoprepair'));
$options2[] = array("id" => "freshcodes_header_bottom_fontsize",
    "label" => __("Header Bottom text Font Size",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "16",
    "description" => __("Change your text size of Header Bottom ",'nyclaptoprepair'));
$options2[] = array("id" => "freshcodes_header_bottom_fontweight",
    "label" => __("Header Bottom text Font Weight",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "16",
    "description" => __("Change your text weight of Header Bottom ",'nyclaptoprepair'));
$options2[] = array("id" => "freshcodes_header_bottom_texttransform",
    "label" => __("Header Bottom text transform",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Header Bottom text transform. ",'nyclaptoprepair'),
    "options" => array('capitalize' => 'capitalize', 'uppercase' => 'uppercase', 'lowercase' => 'lowercase', 'none' => 'none', 'full-width' => 'full-width', 'full-size-kana' => 'full-size-kana'));
$options2[] = array("id" => "freshcodes_header_bottom_text_color",
    "label" => __("Text color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change your text color of Bottom Header ",'nyclaptoprepair'));
/* navigation setting */
$options2[] = array("label" => __("Main Navigation Menu Setting",'nyclaptoprepair'),
    "title" => __("Main Menu Setting",'nyclaptoprepair'),
    "type" => "Title-1");
$options2[] = array("id" => "freshcodes_mobile_menu_text",
    "label" => __("Mobile Menu text",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "Menu",
    "description" => __("Change your Mobile Menu text ",'nyclaptoprepair'));
$options2[] = array("id" => "freshcodes_category_menu_fontsize",
    "label" => __("Menu text Font Size",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "16",
    "description" => __("Change your text size of menu ",'nyclaptoprepair'));
$options2[] = array("id" => "freshcodes_main_menu_fontweight",
    "label" => __("Menu text Font Weight",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "16",
    "description" => __("Change your text weight of menu ",'nyclaptoprepair'));
$options2[] = array("id" => "freshcodes_main_menu_texttransform",
    "label" => __("Menu text transform",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Menu text transform. ",'nyclaptoprepair'),
    "options" => array('capitalize' => 'capitalize', 'uppercase' => 'uppercase', 'lowercase' => 'lowercase', 'none' => 'none', 'full-width' => 'full-width', 'full-size-kana' => 'full-size-kana'));
$options2[] = array("id" => "freshcodes_category_menu_text_color",
    "label" => __("Menu text color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change your text color of menu ",'nyclaptoprepair'));
$options2[] = array("id" => "freshcodes_category_menu_texthover_color",
    "label" => __("Menu text Hover color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change your text hover color of menu ",'nyclaptoprepair'));
$options2[] = array("id" => "freshcodes_category_menu_hover_bkg_color",
    "label" => __("Menu Background hover Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "FFFFFF",
    "description" => __("Change your header bottom background color. ",'nyclaptoprepair'));    
$options2[] = array("id" => "freshcodes_category_sub_menu_bkg_color",
    "label" => __("Sub Menu Background Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "FFFFFF",
    "description" => __("Change your Sub menu background color ",'nyclaptoprepair'));    
$options2[] = array("id" => "freshcodes_category_sub_menu_main_title_color",
    "label" => __("Sub Menu Main Title Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change your Sub menu main title color ",'nyclaptoprepair'));
$options2[] = array("id" => "freshcodes_category_sub_menu_text_color",
    "label" => __("Sub Menu Text color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change your text color of Sub menu",'nyclaptoprepair'));
$options2[] = array("id" => "freshcodes_category_sub_menu_texthover_color",
    "label" => __("Sub Menu Text Hover color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change your text hover color of Sub menu ",'nyclaptoprepair'));
    

//===================================================================================================================
//===============================================  Sidebar Text Color Settings ======================================
//=================================================================================================================== 
$options5 = array(array());
$options5[] = array("id" => "freshcodes_sidebar_text_color",
					"label" => __("Sidebar Text Color",'nyclaptoprepair'),
					"type" => "textbox-1",
					"std" => "'222222",
					"description" => __("Change Your Sidebar  Text Color.",'nyclaptoprepair'));	
$options5[] = array("id" => "freshcodes_sidebar_text_hover_color",
					"label" => __("Sidebar Text Link Hover Color",'nyclaptoprepair'),
					"type" => "textbox-1",
					"std" => "F7D929",
					"description" => __("Change Your Left Sidebar Text Link Hover Color.",'nyclaptoprepair'));	
					
$options5[] = array("label" => __("Sidebar setting for other pages",'nyclaptoprepair'),
					"title" => __("Sidebar setting for other pages",'nyclaptoprepair'),
					"type" => "Title-1");		
														
$options5[] = array("id" => "freshcodes_page_sidebar",
      				"label" => __("Display sidebar on other page?",'nyclaptoprepair'),
      				"type" => "select",
      				"description" => __("Enable or Disable sidebar on other page .",'nyclaptoprepair'),
      				"options" => array('yes' => 'Yes','no' => 'No'));	
       
/*===================================================================================================================
=============================================== Content Settings ====================================================
=================================================================================================================== */
$options3[] = array("id" => "freshcodes_h1font",
    "label" => "h1 Font",
    "type" => "select",
    "description" => "Change your h1 font.",
    "options" => array( 'Inter'=>'Inter', 'Montserrat' => 'Montserrat','Dosis' => 'Dosis','Arsenal' => 'Arsenal','Jost' => 'Jost','DM+Sans' => 'DM Sans','please-select' => 'please-select','Nunito'=>'Nunito','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Droid+Sans'=>'Droid Sans','Cabin'=>'Cabin','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Ubuntu' =>'Ubuntu','Other+Fonts'=>'Other Fonts'));
$options3[] = array("id" => "freshcodes_h1font_other",
    "label" => "Specified Other h1 Font",
    "type" => "textbox-3",
    "std" => "Arial",
    "description" => "Change your specified h1 font.");
$options3[] = array("id" => "freshcodes_h1color",
    "label" => __("H1 Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => "Change your H1 font color.");
$options3[] = array("id" => "freshcodes_h1_fontsize",
    "label" => __("H1 Text Font Size",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H1 font size Ex. 14,16,18 not add px. ",'nyclaptoprepair'),
    "std" => "48");
$options3[] = array("id" => "freshcodes_h1_fontweight",
    "label" => __("H1 Text Font Weight",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H1 font weight Ex. 400,500,600. ",'nyclaptoprepair'),
    "std" => "500");
$options3[] = array("id" => "freshcodes_h1_lineheight",
    "label" => __("H1 Text Font Line Height",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H1 Font Line Height Ex. 24,36,45,etc. ",'nyclaptoprepair'),
    "std" => "56");
$options3[] = array("id" => "freshcodes_h1_letterspacing",
    "label" => __("H1 Text Font Letter Spacing",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H1 Font Letter Spacing Ex. 0.5,0.8,1,etc. ",'nyclaptoprepair'),
    "std" => "0.4");
$options3[] = array("id" => "freshcodes_h1_texttransform",
    "label" => __("H1 text transform",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose H1 text transform. ",'nyclaptoprepair'),
    "options" => array('capitalize' => 'capitalize', 'uppercase' => 'uppercase', 'lowercase' => 'lowercase', 'none' => 'none', 'full-width' => 'full-width', 'full-size-kana' => 'full-size-kana'));
$options3[] = array("id" => "freshcodes_h2font",
    "label" => "H2 Font",
    "type" => "select",
    "description" => "Change your H2 Font.",
    "options" => array( 'Inter'=>'Inter', 'Montserrat' => 'Montserrat','Dosis' => 'Dosis','Arsenal' => 'Arsenal','Jost' => 'Jost','DM+Sans' => 'DM Sans','please-select' => 'please-select','Nunito'=>'Nunito','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Droid+Sans'=>'Droid Sans','Cabin'=>'Cabin','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Ubuntu' =>'Ubuntu','Other+Fonts'=>'Other Fonts'));
$options3[] = array("id" => "freshcodes_h2font_other",
    "label" => "Specified Other H2 Font",
    "type" => "textbox-3",
    "std" => "Arial",
    "description" => "Change your specified H2 font.");
$options3[] = array("id" => "freshcodes_h2color",
    "label" => "H2 Color",
    "type" => "textbox-1",
    "std" => "222222",
    "description" => "Change your H2 font color.");
$options3[] = array("id" => "freshcodes_h2_fontsize",
    "label" => __("H2 Text Font Size",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H2 font size Ex. 14,16,18 not add px. ",'nyclaptoprepair'),
    "std" => "32");
$options3[] = array("id" => "freshcodes_h2_fontweight",
    "label" => __("H2 Text Font Weight",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H2 font weight Ex. 400,500,600. ",'nyclaptoprepair'),
    "std" => "500");
$options3[] = array("id" => "freshcodes_h2_lineheight",
    "label" => __("H2 Text Font Line Height",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H2 Font Line Height Ex. 24,36,45,etc. ",'nyclaptoprepair'),
    "std" => "40");
$options3[] = array("id" => "freshcodes_h2_letterspacing",
    "label" => __("H2 Text Font Letter Spacing",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H2 Font Letter Spacing Ex. 0.5,0.8,1,etc. ",'nyclaptoprepair'),
    "std" => "0.4");
$options3[] = array("id" => "freshcodes_h2_texttransform",
    "label" => __("H2 text transform",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose H2 text transform. ",'nyclaptoprepair'),
    "options" => array('capitalize' => 'capitalize', 'uppercase' => 'uppercase', 'lowercase' => 'lowercase', 'none' => 'none', 'full-width' => 'full-width', 'full-size-kana' => 'full-size-kana'));
$options3[] = array("id" => "freshcodes_h3font",
    "label" => "H3 Font",
    "type" => "select",
    "description" => "Change your H3 font.",
    "options" => array( 'Inter'=>'Inter', 'Montserrat' => 'Montserrat','Dosis' => 'Dosis','Arsenal' => 'Arsenal','Jost' => 'Jost','DM+Sans' => 'DM Sans', 'please-select' => 'please-select','Nunito'=>'Nunito','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Droid+Sans'=>'Droid Sans','Cabin'=>'Cabin','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Ubuntu' =>'Ubuntu','Other+Fonts'=>'Other Fonts'));
$options3[] = array("id" => "freshcodes_h3font_other",
    "label" => "Specified Other H3 Font",
    "type" => "textbox-3",
    "std" => "Arial",
    "description" => "Change your specified H3 font.");
$options3[] = array("id" => "freshcodes_h3color",
    "label" => "H3 Color",
    "type" => "textbox-1",
    "std" => "222222",
    "description" => "Change your H3 font color.");
$options3[] = array("id" => "freshcodes_h3_fontsize",
    "label" => __("H3 Text Font Size",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H3 font size Ex. 14,16,18 not add px. ",'nyclaptoprepair'),
    "std" => "28");
$options3[] = array("id" => "freshcodes_h3_fontweight",
    "label" => __("H3 Text Font Weight",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H3 font weight Ex. 400,500,600. ",'nyclaptoprepair'),
    "std" => "500");
$options3[] = array("id" => "freshcodes_h3_lineheight",
    "label" => __("H3 Text Font Line Height",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H3 Font Line Height Ex. 24,36,45,etc. ",'nyclaptoprepair'),
    "std" => "36");
$options3[] = array("id" => "freshcodes_h3_letterspacing",
    "label" => __("H3 Text Font Letter Spacing",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H3 Font Letter Spacing Ex. 0.5,0.8,1,etc. ",'nyclaptoprepair'),
    "std" => "0.4");
$options3[] = array("id" => "freshcodes_h3_texttransform",
    "label" => __("H3 text transform",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose H3 text transform. ",'nyclaptoprepair'),
    "options" => array('capitalize' => 'capitalize', 'uppercase' => 'uppercase', 'lowercase' => 'lowercase', 'none' => 'none', 'full-width' => 'full-width', 'full-size-kana' => 'full-size-kana'));
$options3[] = array("id" => "freshcodes_h4font",
    "label" => "H4 Font",
    "type" => "select",
    "description" => "Change your H4 font.",
    "options" => array( 'Inter'=>'Inter', 'Montserrat' => 'Montserrat','Dosis' => 'Dosis','Arsenal' => 'Arsenal','Jost' => 'Jost','DM+Sans' => 'DM Sans', 'please-select' => 'please-select','Nunito'=>'Nunito','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Droid+Sans'=>'Droid Sans','Cabin'=>'Cabin','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Ubuntu' =>'Ubuntu','Other+Fonts'=>'Other Fonts'));
$options3[] = array("id" => "freshcodes_h4font_other",
    "label" => "Specified Other H4 Font",
    "type" => "textbox-3",
    "std" => "Arial",
    "description" => "Change your specified H4 font.");
$options3[] = array("id" => "freshcodes_h4color",
    "label" => "H4 Color",
    "type" => "textbox-1",
    "std" => "222222",
    "description" => "Change your H4 font color.");
$options3[] = array("id" => "freshcodes_h4_fontsize",
    "label" => __("H4 Text Font Size",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H4 font size Ex. 14,16,18 not add px. ",'nyclaptoprepair'),
    "std" => "24");
$options3[] = array("id" => "freshcodes_h4_fontweight",
    "label" => __("H4 Text Font Weight",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H4 font weight Ex. 400,500,600. ",'nyclaptoprepair'),
    "std" => "500");
$options3[] = array("id" => "freshcodes_h4_lineheight",
    "label" => __("H4 Text Font Line Height",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H4 Font Line Height Ex. 24,36,45,etc. ",'nyclaptoprepair'),
    "std" => "32");
$options3[] = array("id" => "freshcodes_h4_letterspacing",
    "label" => __("H4 Text Font Letter Spacing",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H4 Font Letter Spacing Ex. 0.5,0.8,1,etc. ",'nyclaptoprepair'),
    "std" => "0.4");
$options3[] = array("id" => "freshcodes_h4_texttransform",
    "label" => __("H4 text transform",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose H4 text transform. ",'nyclaptoprepair'),
    "options" => array('capitalize' => 'capitalize', 'uppercase' => 'uppercase', 'lowercase' => 'lowercase', 'none' => 'none', 'full-width' => 'full-width', 'full-size-kana' => 'full-size-kana'));
$options3[] = array("id" => "freshcodes_h5font",
    "label" => "H5 Font",
    "type" => "select",
    "description" => "Change your H5 font.",
    "options" => array( 'Inter'=>'Inter', 'Montserrat' => 'Montserrat','Dosis' => 'Dosis','Arsenal' => 'Arsenal','Jost' => 'Jost','DM+Sans' => 'DM Sans', 'please-select' => 'please-select','Nunito'=>'Nunito','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Droid+Sans'=>'Droid Sans','Cabin'=>'Cabin','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Ubuntu' =>'Ubuntu','Other+Fonts'=>'Other Fonts'));
$options3[] = array("id" => "freshcodes_h5font_other",
    "label" => "Specified Other H5 Font",
    "type" => "textbox-3",
    "std" => "Arial",
    "description" => "Change your specified H5 font.");
$options3[] = array("id" => "freshcodes_h5color",
    "label" => "H5 Color",
    "type" => "textbox-1",
    "std" => "222222",
    "description" => "change your H5 font color.");
$options3[] = array("id" => "freshcodes_h5_fontsize",
    "label" => __("H5 Text Font Size",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H5 font size Ex. 14,16,18 not add px. ",'nyclaptoprepair'),
    "std" => "20");
$options3[] = array("id" => "freshcodes_h5_fontweight",
    "label" => __("H5 Text Font Weight",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H5 font weight Ex. 400,500,600. ",'nyclaptoprepair'),
    "std" => "500");
$options3[] = array("id" => "freshcodes_h5_lineheight",
    "label" => __("H5 Text Font Line Height",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H5 Font Line Height Ex. 24,36,45,etc. ",'nyclaptoprepair'),
    "std" => "28");
$options3[] = array("id" => "freshcodes_h5_letterspacing",
    "label" => __("H5 Text Font Letter Spacing",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H5 Font Letter Spacing Ex. 0.5,0.8,1,etc. ",'nyclaptoprepair'),
    "std" => "0.4");
$options3[] = array("id" => "freshcodes_h5_texttransform",
    "label" => __("H5 text transform",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose H5 text transform. ",'nyclaptoprepair'),
    "options" => array('capitalize' => 'capitalize', 'uppercase' => 'uppercase', 'lowercase' => 'lowercase', 'none' => 'none', 'full-width' => 'full-width', 'full-size-kana' => 'full-size-kana'));
$options3[] = array("id" => "freshcodes_h6font",
    "label" => "H6 Font",
    "type" => "select",
    "description" => "Change your H6 font.",
    "options" => array( 'Inter'=>'Inter', 'Montserrat' => 'Montserrat','Dosis' => 'Dosis','Arsenal' => 'Arsenal','Jost' => 'Jost','DM+Sans' => 'DM Sans', 'please-select' => 'please-select','Nunito'=>'Nunito','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Droid+Sans'=>'Droid Sans','Cabin'=>'Cabin','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Ubuntu' =>'Ubuntu','Other+Fonts'=>'Other Fonts'));
$options3[] = array("id" => "freshcodes_h6font_other",
    "label" => "Specified Other H6 Font",
    "type" => "textbox-3",
    "std" => "Arial",
    "description" => "Change your specified H6 font.");
$options3[] = array("id" => "freshcodes_h6color",
    "label" => "H6 Color",
    "type" => "textbox-1",
    "std" => "222222",
    "description" => "Change your H6 font color.");
$options3[] = array("id" => "freshcodes_h6_fontsize",
    "label" => __("H6 Text Font Size",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H6 font size Ex. 14,16,18 not add px. ",'nyclaptoprepair'),
    "std" => "18");
$options3[] = array("id" => "freshcodes_h6_fontweight",
    "label" => __("H6 Text Font Weight",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H6 font weight Ex. 400,500,600. ",'nyclaptoprepair'),
    "std" => "500");
$options3[] = array("id" => "freshcodes_h6_lineheight",
    "label" => __("H6 Text Font Line Height",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H6 Font Line Height Ex. 24,36,45,etc. ",'nyclaptoprepair'),
    "std" => "24");
$options3[] = array("id" => "freshcodes_h6_letterspacing",
    "label" => __("H6 Text Font Letter Spacing",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Set H6 Font Letter Spacing Ex. 0.5,0.8,1,etc. ",'nyclaptoprepair'),
    "std" => "0.4");
$options3[] = array("id" => "freshcodes_h6_texttransform",
    "label" => __("H6 text transform",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose H6 text transform. ",'nyclaptoprepair'),
    "options" => array('capitalize' => 'capitalize', 'uppercase' => 'uppercase', 'lowercase' => 'lowercase', 'none' => 'none', 'full-width' => 'full-width', 'full-size-kana' => 'full-size-kana'));
$options3[] = array("id" => "freshcodes_link_color",
    "label" => "Link Color",
    "type" => "textbox-1",
    "std" => "222222",
    "description" => "Change your link color.");
$options3[] = array("id" => "freshcodes_hoverlink_color",
    "label" => "Link Hover Color",
    "type" => "textbox-1",
    "std" => "808080",
    "description" => "Change your link Hover color.");
$options3[] = array("id" => "freshcodes_blog_link_color",
    "label" => "Blog Link Color",
    "type" => "textbox-1",
    "std" => "78B9C2",
    "description" => "Change your Blog link color.");
$options3[] = array("id" => "freshcodes_blog_hoverlink_color",
    "label" => "Blog Link Hover Color",
    "type" => "textbox-1",
    "std" => "78B9C2",
    "description" => "Change your Blog link Hover color.");
$options3[] = array("label" => "Blog Author Setting",
    "title" => "Author setting for Single blog page",
    "type" => "Title-1");
$options3[] = array("id" => "freshcodes_show_author_info",
    "label" => __("Show Author Box",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Show Author Infromation Box on single blog page.",'nyclaptoprepair'),
    "options" => array('no' => 'No','yes' => 'Yes')); 
$options3[] = array("id" => "freshcodes_show_related_post",
    "label" => __("Show Related Post",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Show Show Related Post on single pos/blog page.",'nyclaptoprepair'),
    "options" => array('no' => 'No','yes' => 'Yes'));         
$options3[] = array("label" =>__( "breadcrumb Settings",'nyclaptoprepair'),
    "title" =>__("breadcrumb Settings",'nyclaptoprepair'),
    "type" => "Title-1");
$options3[] = array("id" => "freshcodes_breadcrumb_bkg_color",
    "label" => __("Breadcrumb Background Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "F2F2F2",
    "description" => __("Change your body background color. ",'nyclaptoprepair'));
$options3[] = array("id" => "freshcodes_breadcrumb_image",
    "label" => __("Breadcrumb Image",'nyclaptoprepair'),
    "type" => "upload-4",
    "description" => __("Upload Your Breadcrumb. ",'nyclaptoprepair'));
$options3[] = array("id" => "freshcodes_breadcrumb_back_attachment",
    "label" => __("Breadcrumb Image Background Attachment",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Breadcrumb Image Background attachment. ",'nyclaptoprepair'),
    "options" => array('Fixed' => 'fixed', 'scroll' => 'Scroll'));
$options3[] = array("id" => "freshcodes_breadcrumb_back_position",
    "label" => __("Breadcrumb Image Background Position",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Breadcrumb Image Backgroung position. ",'nyclaptoprepair'),
    "options" => array('top+center' => 'top center', 'top+left' => 'top left', 'top+right' => 'top right', 'center+right' => 'center right', 'center+left' => 'center left', 'center+center' => 'center center', 'bottom+right' => 'bottom right', 'bottom+center' => 'bottom center', 'bottom+left' => 'bottom left'));
$options3[] = array("id" => "freshcodes_breadcrumb_back_repeat",
    "label" => __("Breadcrumb Image Background Repeat",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Breadcrumb Image Background repeat. ",'nyclaptoprepair'),
    "options" => array('no-repeat' => 'no-repeat', 'repeat' => 'repeat', 'repeat-x' => 'repeat-x', 'repeat-y' => 'repeat-y'));
$options3[] = array("id" => "freshcodes_breadcrumb_text_color",
    "label" => "Text Color",
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change your Text color.",'nyclaptoprepair'));
$options3[] = array("label" =>__( "Woocommerec breadcrumb Settings",'nyclaptoprepair'),
    "title" =>__("Woocommerece breadcrumb Settings",'nyclaptoprepair'),
    "type" => "Title-1");
$options3[] = array("id" => "freshcodes_woo_breadcrumb_bkg_color",
    "label" => __("Woocommerec Breadcrumb Background Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "F2F2F2",
    "description" => __("Change your Woocommerec Breadcrumb background color. ",'nyclaptoprepair'));
$options3[] = array("id" => "freshcodes_woo_breadcrumb_image",
    "label" => __("Woocommerec Breadcrumb Image",'nyclaptoprepair'),
    "type" => "upload-5",
    "description" => __("Upload Your Woocommerec Breadcrumb. ",'nyclaptoprepair'));
$options3[] = array("id" => "freshcodes_woo_breadcrumb_back_attachment",
    "label" => __("Woocommerec Breadcrumb Image Background Attachment",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Woocommerec Breadcrumb Image Background attachment. ",'nyclaptoprepair'),
    "options" => array('Fixed' => 'fixed', 'scroll' => 'Scroll'));
$options3[] = array("id" => "freshcodes_woo_breadcrumb_back_position",
    "label" => __("Woocommerec Breadcrumb Image Background Position",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Woocommerec Breadcrumb Image Backgroung position. ",'nyclaptoprepair'),
    "options" => array('top+center' => 'top center', 'top+left' => 'top left', 'top+right' => 'top right', 'center+right' => 'center right', 'center+left' => 'center left', 'center+center' => 'center center', 'bottom+right' => 'bottom right', 'bottom+center' => 'bottom center', 'bottom+left' => 'bottom left'));
$options3[] = array("id" => "freshcodes_woo_breadcrumb_back_repeat",
    "label" => __("Woocommerec Breadcrumb Image Background Repeat",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Woocommerec Breadcrumb Image Background repeat. ",'nyclaptoprepair'),
    "options" => array('no-repeat' => 'no-repeat', 'repeat' => 'repeat', 'repeat-x' => 'repeat-x', 'repeat-y' => 'repeat-y'));

/*===================================================================================================================
=============================================== Footer Settings ====================================================
=================================================================================================================== */
$options4 = array(array());
$options4[] = array("id" => "freshcodes_footer_bkg_color",
    "label" => __("Footer Background Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "FFFFFF",
    "description" => __("Change your footer background color. ",'nyclaptoprepair'));
$options4[] = array("id" => "freshcodes_footer_background_upload",
    "label" => __("Upload Footer  Background Image",'nyclaptoprepair'),
    "type" => "upload-1",
    "description" => __("Upload Your Footer Background Image.",'nyclaptoprepair'));
$options4[] = array("id" => "freshcodes_footer_back_repeat",
    "label" =>__( "Footer Image  Background Repeat",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Header Image Background repeate.",'nyclaptoprepair'),
    "options" => array('no-repeat' => 'no-repeat', 'repeat' => 'repeat', 'repeat-x' => 'repeat-x', 'repeat-y' => 'repeat-y'));
$options4[] = array("id" => "freshcodes_footer_back_position",
    "label" => __("Footer Image  Background Position",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Header Image Backgroung position.",'nyclaptoprepair'),
    "options" => array('top+left' => 'top left', 'top+center' => 'top center', 'top+right' => 'top right', 'center+right' => 'center right', 'center+left' => 'center left', 'center+center' => 'center center', 'bottom+right' => 'bottom right', 'bottom+center' => 'bottom center', 'bottom+left' => 'bottom left'));
$options4[] = array("id" => "freshcodes_footerheader_back_attachment",
    "label" => __("Footer Image  Background Attachment",'nyclaptoprepair'),
    "type" => "select",
    "description" => __("Choose Header Image Background attachment. ",'nyclaptoprepair'),
    "options" => array('scroll' => 'Scroll', 'Fixed' => 'fixed'));
$options4[] = array("id" => "freshcodes_footer_title_color",
    "label" => __("Footer Title Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change your footer link color. ",'nyclaptoprepair'));
$options4[] = array("id" => "freshcodes_footerlink_color",
    "label" => __("Footer Link Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" =>__( "Change your footer link color. ",'nyclaptoprepair'));
$options4[] = array("id" => "freshcodes_footerhoverlink_color",
    "label" => __("Footer Link Hover Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "808080",
    "description" => __("Change your footer link hover color. ",'nyclaptoprepair'));
$options4[] = array("id" => "freshcodes_footer_slog",
    "label" => __("Footer copyright",'nyclaptoprepair'),
    "type" => "textbox",
    "description" => __("Enter your copyright statement here. ",'nyclaptoprepair'),
    "std" => "Freshcodes.");

$options4[] = array("label" => __("Footer Newsletter setting",'nyclaptoprepair'),
    "title" => __("Footer Newsletter setting",'nyclaptoprepair'),
    "type" => "Title-1");
$options4[] = array("id" => "freshcodes_footer_newsletter_bkg_color",
    "label" => __("Newsletter Background Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "F7D929",
    "description" => __("Change your footer Newsletter Block background color. ",'nyclaptoprepair'));
$options4[] = array("id" => "freshcodes_footer_newsletter_title_color",
    "label" => __("Newsletter Title Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "FFFFFF",
    "description" => __("Change your Footer Newsletter Text color. ",'nyclaptoprepair')); 
$options4[] = array("id" => "freshcodes_footer_newsletter_text_color",
    "label" => __("Newsletter Text Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "222222",
    "description" => __("Change your Footer Newsletter Text color. ",'nyclaptoprepair'));   
$options4[] = array("id" => "freshcodes_newsletter_icon_upload",
    "label" => __("Newsletter Icon Image",'nyclaptoprepair'),
    "type" => "upload-3",
    "description" => __("Upload your Newsletter Icon Image. ",'nyclaptoprepair'));  
$options4[] = array("id" => "freshcodes_newsletter_icon_size",
    "label" => __("Icon Size",'nyclaptoprepair'),
    "type" => "textbox",
    "std" => "36",
    "description" => __("Set Icon Size. ex: 20  ",'nyclaptoprepair'));  
$options4[] = array("id" => "freshcodes_footer_newsletter_icon_color",
    "label" => __("Icon Color",'nyclaptoprepair'),
    "type" => "textbox-1",
    "std" => "F7D929",
    "description" => __("Email Icon color. ",'nyclaptoprepair'));                
//=============================================== Shop Settings ==================================================================
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) :
    $options7 = array(array());
    
    $options7[] = array("label" => __("Product setting",'nyclaptoprepair'),
        "title" => __("Product setting",'nyclaptoprepair'),
        "type" => "Title-1");
	$options7[] = array("id" => "freshcodes_stock_show",
        "label" => __("Show Products Stock Status",'nyclaptoprepair'),
        "type" => "select",
        "description" => __("Displays Products Stock Status.",'nyclaptoprepair'),
        "options" => array('no' => 'No','yes' => 'Yes'));
    $options7[] = array("id" => "freshcodes_excerpt_show",
        "label" => __("Show Products Description",'nyclaptoprepair'),
        "type" => "select",
        "description" => __("Displays Products Description.",'nyclaptoprepair'),
        "options" => array('no' => 'No','yes' => 'Yes'));
    $options7[] = array("id" => "freshcodes_woo_excerpt_length",
        "label" => __("Products Description Excerpt",'nyclaptoprepair'),
        "type" => "textbox",
        "std" => "25",
        "description" => __("Set products description excerpt",'nyclaptoprepair'));
    $options7[] = array("id" => "freshcodes_related_title",
        "label" => __("Related Products Title",'nyclaptoprepair'),
        "type" => "textbox",
        "std" => "More Collections",
        "description" => __("You can Change Related products Title on single product page",'nyclaptoprepair'));
    $options7[] = array("id" => "freshcodes_related_items",
        "label" => __("Related Products",'nyclaptoprepair'),
        "type" => "textbox",
        "std" => "12",
        "description" => __("Dispaly total number of Related products on single product page",'nyclaptoprepair'));
    $options7[] = array("id" => "freshcodes_upsells_items",
        "label" => __("Upsell Products",'nyclaptoprepair'),
        "type" => "textbox",
        "std" => "12",
        "description" => __("Dispaly total number of Upsell products on single product page",'nyclaptoprepair'));
    $options7[] = array("id" => "freshcodes_crosssell_items",
        "label" => __("Cross Sell Products",'nyclaptoprepair'),
        "type" => "textbox",
        "std" => "12",
        "description" => __("Dispaly total number of Cross sell products on checkout page",'nyclaptoprepair'));
    $options7[] = array("id" => "fresh_product_items_columns",
        "label" => __("Related & Upsell Products Columns",'nyclaptoprepair'),
        "type" => "textbox",
        "std" => "5",
        "description" => __("Dispaly total number of Related & Upsell products columns on single product page",'nyclaptoprepair'));
    $options7[] = array("id" => "freshcodes_corsssell_items_columns",
        "label" => __("Corsssell Products Columns",'nyclaptoprepair'),
        "type" => "textbox",
        "std" => "5",
        "description" => __("Dispaly total number of Corsssell products columns on cart product page",'nyclaptoprepair'));
    $options7[] = array("id" => "freshcodes_product_price_color",
        "label" => "Price color",
        "type" => "textbox-1",
        "std" => "222222",
        "description" => "Change your Price color. ");
    $options7[] = array("id" => "freshcodes_price_fontsize",
        "label" => __("Price Text Font Size",'nyclaptoprepair'),
        "type" => "textbox",
        "description" => __("Set Price font size Ex. 14,16,18 not add px. ",'nyclaptoprepair'),
        "std" => "20");
    $options7[] = array("id" => "freshcodes_price_fontweight",
        "label" => __("Price Text Font Weight",'nyclaptoprepair'),
        "type" => "textbox",
        "description" => __("Set Price font weight Ex. 400,500,600. ",'nyclaptoprepair'),
        "std" => "500");
    $options7[] = array("id" => "freshcodes_price_lineheight",
        "label" => __("Price Text Font Line Height",'nyclaptoprepair'),
        "type" => "textbox",
        "description" => __("Set Price Font Line Height Ex. 24,36,45,etc. ",'nyclaptoprepair'),
        "std" => "28");
    $options7[] = array("id" => "freshcodes_price_letterspacing",
        "label" => __("Price Text Font Letter Spacing",'nyclaptoprepair'),
        "type" => "textbox",
        "description" => __("Set Price Font Letter Spacing Ex. 0.5,0.8,1,etc. ",'nyclaptoprepair'),
        "std" => "0.4");
    $options7[] = array("id" => "freshcodes_price_texttransform",
        "label" => __("Price text transform",'nyclaptoprepair'),
        "type" => "select",
        "description" => __("Choose Price text transform. ",'nyclaptoprepair'),
        "options" => array('capitalize' => 'capitalize', 'uppercase' => 'uppercase', 'lowercase' => 'lowercase', 'none' => 'none', 'full-width' => 'full-width', 'full-size-kana' => 'full-size-kana'));
    $options7[] = array("id" => "freshcodes_product_brand",
        "label" => __("Show product brand",'nyclaptoprepair'),
        "type" => "select",
        "description" => __("Displays product brand.",'nyclaptoprepair'),
        "options" => array('no' => 'No','yes' => 'Yes'));
    $options7[] = array("label" => "Navigation Button Background setting",
    "title" => "Set Navigation Button Background setting",
    "type" => "Title-1");
    $options7[] = array("id" => "freshcodes_nav_button",
        "label" => "Navigation button background color",
        "type" => "textbox-1",
        "std" => "F0F0F0",
        "description" => "Change your Navigation button background color. ");
    $options7[] = array("id" => "freshcodes_nav_button_text_color",
        "label" => "Navigation button Text color",
        "type" => "textbox-1",
        "std" => "222222",
        "description" => "Change your Navigation button Text color. ");
    $options7[] = array("id" => "freshcodes_nav_button_bkg_hover_color",
        "label" => "Navigation button background hover color",
        "type" => "textbox-1",
        "std" => "F7D929",
        "description" => "Change your Navigation button background hover color. ");        
    $options7[] = array("id" => "freshcodes_nav_button_hover_text_color",
        "label" => "Navigation button hover Text color",
        "type" => "textbox-1",
        "std" => "222222",
        "description" => "Change your Navigation button hover Text color. ");
    $options7[] = array("label" => __("Sidebar setting for Single product page",'nyclaptoprepair'),
        "title" => __("Sidebar setting for Single product page",'nyclaptoprepair'),
        "type" => "Title-1");
    $options7[] = array("id" => "freshcodes_secondaryimage",
        "label" => __("Do you want secondary image on product?",'nyclaptoprepair'),
        "type" => "select",
        "description" => __("Enable or Disable secondary image for product. ",'nyclaptoprepair'),
        "options" => array('yes' => 'Yes', 'no' => 'No'));
    $options7[] = array("id" => "freshcodes_shop_sidebar",
        "label" =>__( "Display sidebar on Single product page?",'nyclaptoprepair'),
        "type" => "select",
        "description" => __("Enable or Disable  sidebar on Single product page. ",'nyclaptoprepair'),
        "options" => array('no' => 'No', 'yes' => 'Yes'));
    $options7[] = array("label" => __("Product Rating setting for Single product page",'nyclaptoprepair'),
        "title" => __("Product Rating setting for Single product page",'nyclaptoprepair'),
        "type" => "Title-1");
    $options7[] = array("id" => "freshcodes_product_rating",
        "label" => __("Do you want Product Rating on product?",'nyclaptoprepair'),
        "type" => "select",
        "description" => __("Enable or Disable Product Rating for product. ",'nyclaptoprepair'),
        "options" => array('yes' => 'Yes', 'no' => 'No'));
    $options7[] = array("id" => "freshcodes_product_rating_count",
        "label" => __("Do you want Product Rating Count?",'nyclaptoprepair'),
        "type" => "select",
        "description" => __("Enable or Disable Product Rating Count. ",'nyclaptoprepair'),
        "options" => array('yes' => 'Yes', 'no' => 'No'));
endif;
?>
<!-- =========================================== Call Font Script =========================================== -->
<div class="main-block freshcodes-main-block">
    <div id="wpbody-content">
        <div class="wrap">
            <div class="icon-freshcodes"><img src="<?php echo esc_url(get_option('siteurl')) . '/wp-content/themes/' . get_option('template') . '/freshcodes/freshcode_icon.png'; ?>"/>
            </div>
            <div class="freshcodes_contents">
                <div class="entry-content">
                    <p>
                    <h3>Extremely Customizable, Responsive and fluid theme framework </h3>
                    Make your site shine in few minutes by choosing from any of our high-quality premium WordPress
                    themes.<br/>
                    With our hundreds of WordPress themes to choose from, you'll have a stylishly professional site
                    that's sure to impress.
                    </p>
                </div>
            </div>
            <div id="ajax-response"></div>
        </div>
    </div>
    <h2 class="title-themeset">Freshcodes - Theme Settings</h2>
    <?php global $result;
    if ($result == 'success')
        echo '<div class="updated settings-error" id="setting-error-settings_updated"><p><strong>Settings saved.</strong></p></div>';
    ?>
    <div class="tab_main">
    <!-- =========================================== Start Tab =============================================== -->
    <div id="tab-container" class='freshcodes-tab-div tab-container'>
        <ul class='etabs'>
            <li class="tab first">
                <a href="#General" title="<?php esc_url('General Settings', 'nyclaptoprepair'); ?>">
                    <span class="title general">
                        <?php echo esc_attr_e('General', 'nyclaptoprepair'); ?>
                    </span>
                </a>
            </li>
            <li class="tab">
                <a href="#Logo">
                    <span class="title logo">
                        <?php echo esc_attr_e('Logo', 'nyclaptoprepair'); ?>
                    </span>
                </a>
            </li>
            <li class="tab header">
                <a href="#Header">
                    <span class="title header">
                        <?php echo esc_attr_e('Header', 'nyclaptoprepair'); ?>
                    </span>
                </a>
            </li>
            <li class="tab sidebartext">
                <a href="#Sidebartext">
                    <span class="title sidebar">
                         <?php echo esc_html__('Sidebar','nyclaptoprepair');?>
                    </span>
                </a>
            </li>            
            <li class="tab">
                <a href="#Content">
                    <span class="title content">
                        <?php echo esc_attr_e('Content', 'nyclaptoprepair'); ?>
                    </span>
                </a>
            </li>
            <li class="tab">
                <a href="#Footer">
                    <span class="title footer">
                        <?php echo esc_attr_e('Footer', 'nyclaptoprepair'); ?>
                    </span>
                </a>
            </li>
            <?php if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) : ?>
                <li class="tab">
                    <a href="#product">
                        <span class="title product">
                            <?php echo esc_attr_e('Product', 'nyclaptoprepair'); ?>
                        </span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    <!-- Start Panel-container -->
    <div class='panel-container'>


<!-- =========================================== Start Logo Setting =========================================== -->
<div id="Logo">
                    <form enctype="multipart/form-data" method="post" id="settingForm1" name="settingForm1">
                        <input type="hidden" name="action" value="save_options1"/>
                        <?php
                        if (!isset($_REQUEST['action'])) {
                            $_REQUEST['action'] = '';
                        }
                        if (!isset($_REQUEST['reset1'])) {
                            $_REQUEST['reset1'] = '';
                        }
                        if ('save_options1' == $_REQUEST['action']) {
                            foreach ($options10 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                if (isset($value['id']) && isset($_REQUEST[$value['id']])) {
                                    update_option($value['id'], $_REQUEST[$value['id']]);
                                }
                            }
                        } else if ('reset1' == $_REQUEST['reset1']) {
                            foreach ($options10 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                delete_option($value['id']);
                            }
                        }
                        ?>
                        <div class="form-table">
                            <?php
                            $i = 0;
                            foreach ($options10
                            as $value) {
                            if (!isset($value['type'])) {
                                $value['type'] = '';
                            }
                            switch ($value['type']) {
                            case 'textbox': ?>
                            <?php if ($i % 2 != 0) { ?>
                            <div class="odd setting_main">
                                <?php } else { ?>
                                <div class="even setting_main">
                                    <?php } ?>
                                    <div class="title">
                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                    </div>
                                    <div class="content">
                                        <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                               id="<?php echo esc_attr($value['id']); ?>" type="text"
                                               value="<?php if (get_option($value['id']) != "") {
                                                   echo esc_attr(stripslashes(get_option($value['id'])));
                                               } else {
                                                   if (!isset($value['std'])) {
                                                       $value['std'] = '';
                                                   }
                                                   echo esc_attr(stripslashes($value['std']));
                                               } ?>"/>
                                                <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                    <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                </div>
                                    </div>
                                </div>
                                <!--odd-even-->
                                <?php
                                break;
                                case 'upload': ?>
                                <?php if ($i % 2 != 0) { ?>
                                <div class="odd setting_main">
                                    <?php } else { ?>
                                    <div class="even setting_main">
                                        <?php } ?>
                                        <div class="title">
                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                            <br/>
                                            <br/>
                                            <?php if (get_option('freshcodes_logo_image') != '') { ?>
                                                <img src="<?php echo esc_url(get_option('freshcodes_logo_image')); ?>"
                                                     id="slider_logodisplay"/>&nbsp;<a id="slider_remove_link1"
                                                                                       href="javascript:freshcodes_removeImage1();"><img
                                                            src="<?php echo esc_url(get_template_directory_uri()); ?>/images/freshcodes/admin/remove.png"/></a>
                                            <?php } ?>
                                            <script>
                                                function freshcodes_removeImage1() {
                                                    document.getElementById("freshcodes_logo_image").value = "";
                                                    document.getElementById("slider_logodisplay").src = "";
                                                    document.getElementById("slider_remove_link1").innerHTML = "";
                                                }
                                            </script>
                                        </div>
                                        <div class="content">
                                            <input style=" <?php if ($value['id'] != 'freshcodes_logo_image') {
                                                echo 'display:none';
                                            } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                                   id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                   value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                            <input id="upload_image_button" class="button-primary" type="button"
                                                   value="Upload Logo"/>
                                                    <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                    </div>
                                        </div>
                                    </div>
                                    <!--even odd setting-->
                                    <!--even odd setting-->
                                    <?php break;  
                                    case 'upload-2': ?>
                                                <?php if ($i % 2 != 0) { ?>
                                                <div class="odd setting_main">
                                                    <?php } else { ?>
                                                    <div class="even setting_main">
                                                        <?php } ?>
                                                        <div class="title">
                                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                                            <br/>
                                                            <br/>
                                                            <?php if (get_option('freshcodes_mob_logo_image') != '') { ?>
                                                                <img src="<?php echo esc_url(get_option('freshcodes_mob_logo_image')); ?>"
                                                                     id="slider_backgrounddisplay"/>&nbsp;<a
                                                                        id="slider_remove_link3"
                                                                        href="javascript:freshcodes_removeImage3();"><img
                                                                            src="<?php echo esc_url(get_template_directory_uri()); ?>/images/freshcodes/admin/remove.png"/></a>
                                                            <?php } ?>
                                                            <script>
                                                                function freshcodes_removeImage3() {
                                                                    document.getElementById("freshcodes_mob_logo_image").value = "";
                                                                    document.getElementById("slider_backgrounddisplay").src = "";
                                                                    document.getElementById("slider_remove_link3").innerHTML = "";
                                                                }
                                                            </script>
                                                        </div>
                                                        <div class="content">
                                                            <input style=" <?php if ($value['id'] != 'freshcodes_mob_logo_image') {
                                                                echo 'display:none';
                                                            } ?> " class="regular-text"
                                                                   name="<?php echo esc_attr($value['id']); ?>"
                                                                   id="<?php echo esc_attr($value['id']); ?>"
                                                                   type="text"
                                                                   value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                            <input id="upload_backgroundimage_button"
                                                                   class="button-primary" type="button"
                                                                   value="Upload Image"/>
                                                                    <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div><br/>
                                                        </div>
                                                    </div>
                                        <?php break;

                                        case 'upload-3': ?>
                                            <?php if ($i % 2 != 0) { ?>
                                            <div class="odd setting_main">
                                                <?php } else { ?>
                                                <div class="even setting_main">
                                                    <?php } ?>
                                                    <div class="title">
                                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                                        <br/>
                                                        <br/>
                                                        <?php if (get_option('freshcodes_logo_image3') != '') { ?>
                                                            <img src="<?php echo esc_url(get_option('freshcodes_logo_image3')); ?>"
                                                                id="slider_homebackgrounddisplay"/>&nbsp;<a
                                                                    id="slider_remove_home_link"
                                                                    href="javascript:freshcodes_removeImagehome();"><img
                                                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/freshcodes/admin/remove.png"/></a>
                                                        <?php } ?>
                                                        <script>
                                                            function freshcodes_removeImagehome() {
                                                                document.getElementById("freshcodes_logo_image3").value = "";
                                                                document.getElementById("slider_homebackgrounddisplay").src = "";
                                                                document.getElementById("slider_remove_home_link").innerHTML = "";
                                                            }
                                                        </script>
                                                    </div>
                                                    <div class="content">
                                                        <input style=" <?php if ($value['id'] != 'freshcodes_logo_image3') {
                                                            echo 'display:none';
                                                        } ?> " class="regular-text"
                                                            name="<?php echo esc_attr($value['id']); ?>"
                                                            id="<?php echo esc_attr($value['id']); ?>"
                                                            type="text"
                                                            value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                        <input id="upload_image_button"
                                                            class="button-primary" type="button"
                                                            value="Upload Image"/>
                                                            <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                            </div><br/>
                                                    </div>
                                                </div>
                                        <?php break;
                                        case 'upload-4': ?>
                                            <?php if ($i % 2 != 0) { ?>
                                            <div class="odd setting_main">
                                                <?php } else { ?>
                                                <div class="even setting_main">
                                                    <?php } ?>
                                                    <div class="title">
                                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                                        <br/>
                                                        <br/>
                                                        <?php if (get_option('freshcodes_mob_logo_image3') != '') { ?>
                                                            <img src="<?php echo esc_url(get_option('freshcodes_mob_logo_image3')); ?>"
                                                                id="slider_backgrounddisplay"/>&nbsp;<a
                                                                    id="slider_remove_home_link"
                                                                    href="javascript:freshcodes_removeImage3();"><img
                                                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/freshcodes/admin/remove.png"/></a>
                                                        <?php } ?>
                                                        <script>
                                                            function freshcodes_removeImage3() {
                                                                document.getElementById("freshcodes_mob_logo_image3").value = "";
                                                                document.getElementById("slider_backgrounddisplay").src = "";
                                                                document.getElementById("slider_remove_link3").innerHTML = "";
                                                            }
                                                        </script>
                                                    </div>
                                                    <div class="content">
                                                        <input style=" <?php if ($value['id'] != 'freshcodes_mob_logo_image3') {
                                                            echo 'display:none';
                                                        } ?> " class="regular-text"
                                                            name="<?php echo esc_attr($value['id']); ?>"
                                                            id="<?php echo esc_attr($value['id']); ?>"
                                                            type="text"
                                                            value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                        <input id="upload_backgroundimage_button"
                                                            class="button-primary" type="button"
                                                            value="Upload Image"/>
                                                            <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                            </div><br/>
                                                    </div>
                                                </div>
                                        <?php break;

                                        case 'Title':
                                            if (!isset($value['id'])) {
                                                $value['id'] = '';
                                            }
                                            ?>
                                            <div class="background-title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                            </div>
                                            <?php break;
                                        }
                                        $i++;
                                        } ?>
                                </div>
                        <!--from-table-->
                        <div class="submit">
                            <input type="submit" value="Save Changes" class="button-primary"
                                   name="Submit">
                        </div>
                    </form>
                    <!--mainform-->
                    <!-- reset Button -->
                    <div class="reset-option">
                        <form enctype="multipart/form-data" method="post" id="settingForm1" name="settingFormx">
                            <p class="freshcodes-submit">
                                <input type="hidden" name="reset1" value="reset1"/>
                                <input type="submit" value="Set Default" class="button-primary" name="reset"/>
                            </p>
                        </form>
                    </div>
                    <!-- End Reset Button -->
                </div>
                <!--Logo-setting-->
                <div style="clear:both"></div>
                <!-- =========================================== End Logo Settings =========================================== -->
    <!-- =========================================== Start General Setting =========================================== -->
                <div id="General">
                    <form enctype="multipart/form-data" method="post" id="settingForm1" name="settingForm1">
                        <input type="hidden" name="action" value="save_options1"/>
                        <?php
                        if (!isset($_REQUEST['action'])) {
                            $_REQUEST['action'] = '';
                        }
                        if (!isset($_REQUEST['reset1'])) {
                            $_REQUEST['reset1'] = '';
                        }
                        if ('save_options1' == $_REQUEST['action']) {
                            foreach ($options1 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                if (isset($value['id']) && isset($_REQUEST[$value['id']])) {
                                    update_option($value['id'], $_REQUEST[$value['id']]);
                                }
                            }
                        } else if ('reset1' == $_REQUEST['reset1']) {
                            foreach ($options1 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                delete_option($value['id']);
                            }
                        }
                        ?>
                        <div class="form-table">
                            <?php
                            $i = 0;
                            foreach ($options1
                            as $value) {
                            if (!isset($value['type'])) {
                                $value['type'] = '';
                            }
                            switch ($value['type']) {
                            
                            case 'textbox':
                                if ($i % 2 != 0) { ?>
                                    <div class="odd setting_main">
                                        <?php } else { ?>
                                        <div class="even setting_main">
                                            <?php } ?>
                                            <div class="title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                            </div>
                                            <div class="content">
                                                <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                                    id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                    value="<?php if (get_option($value['id']) != "") {
                                                        echo esc_attr(stripslashes(get_option($value['id'])));
                                                    } else {
                                                        if (!isset($value['std'])) {
                                                            $value['std'] = '';
                                                        }
                                                        echo esc_attr(stripslashes($value['std']));
                                                    } ?>"/>
                                                    <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                    </div>
                                            </div>
                                        </div>
                                <!--odd-even-->
                                <?php
                                break;
                                
                                case 'texture':
                                    ?>
                                    <?php if ($i % 2 != 0) { ?>
                                    <div class="odd setting_main">
                                        <?php } else { ?>
                                        <div class="even setting_main">
                                            <?php }
                                            $img_dir = get_template_directory_uri() . '/images/freshcodes/admin/';
                                            ?>
                                            <div class="title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                            </div>
                                            <div class="content">
                                                <div class="freshcodes_content">
                                                    <div class="thumb-sel"><img class="thumb"
                                                                                src="<?php if (get_option($value['id']) != "") {
                                                                                    echo esc_url($img_dir . get_option($value['id']));
                                                                                } else {
                                                                                    echo esc_url($img_dir . $value['std']);
                                                                                } ?>"/> <span id="switch"
                                                                                              class="close"></span>
                                                    </div>
                                                    <div class="thumb-list">
                                                        <ul>
                                                            <?php foreach ($value['options'] as $opt_key => $opt_val) {
                                                                if (get_option($value['id']) != "") {
                                                                    if ($opt_key == get_option($value['id'])) {
                                                                        $checked = "checked=\"checked\"";
                                                                    } else {
                                                                        $checked = "";
                                                                    }
                                                                } else {
                                                                    if ($opt_key == ($value['std'])) {
                                                                        $checked = "checked=\"checked\"";
                                                                    } else {
                                                                        $checked = "";
                                                                    }
                                                                } ?>
                                                                <li>
                                                                    <input type="radio"
                                                                           name="<?php echo esc_attr($value['id']) ?>"
                                                                           value="<?php echo esc_attr($opt_key) ?>" <?php echo esc_attr($checked); ?>/>
                                                                    <img class="thumb"
                                                                         src="<?php echo esc_url($img_dir . $opt_key) ?>"
                                                                         title="<?php echo esc_attr($opt_val) ?>"/>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                    <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                     <?php break;



                                        case 'select': ?>
                                                <?php if ($i % 2 != 0) { ?>
                                                <div class="odd setting_main">
                                                    <?php } else { ?>
                                                    <div class="even setting_main">
                                                        <?php } ?>
                                                        <div class="title">
                                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                                        </div>
                                                        <div class="content">
                                                            <select class="select_input"
                                                                    name="<?php echo esc_attr($value['id']); ?>"
                                                                    id="<?php echo esc_attr($value['id']); ?>">
                                                                <?php foreach ($value['options'] as $op_id => $suboption) { ?>
                                                                    <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) {
                                                                        echo ' selected="selected"';
                                                                    } ?>><?php echo esc_html($suboption); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                            <!--even-Odd-->
                                            <?php break; //end Switch
                                            case 'textbox-1': ?>
                                            <?php if ($i % 2 != 0) { ?>
                                            <div class="odd setting_main">
                                                <?php } else { ?>
                                                <div class="even setting_main">
                                                    <?php } ?>
                                                    <div class="title">
                                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                                    </div>
                                                    <div class="content">
                                                        <?php if (get_option($value['id']) != "") {
                                                            $stylecolor = stripslashes(get_option($value['id']));
                                                        } else {
                                                            $stylecolor = stripslashes($value['std']);
                                                        }
                                                        $stylecolor = 'style="background-color:#' . $stylecolor . '"'; ?>
                                                        <input class="regular-text1"
                                                               name="<?php echo esc_attr($value['id']); ?>"
                                                               id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                               value="<?php if (get_option($value['id']) != "") {
                                                                   echo esc_attr(stripslashes(get_option($value['id'])));
                                                               } else {
                                                                   echo esc_attr(stripslashes($value['std']));
                                                               } ?>" <?php echo html_entity_decode( esc_html( $stylecolor ) );  ?> />
                                                            </div>
                                                </div>
                                                <!--odd-even-->
                                                <?php break;
                                                case 'upload-3': ?>
                                                <?php if ($i % 2 != 0) { ?>
                                                <div class="odd setting_main">
                                                    <?php } else { ?>
                                                    <div class="even setting_main">
                                                        <?php } ?>
                                                        <div class="title">
                                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                                            <br/>
                                                            <br/>
                                                            <?php if (get_option('freshcodes_background_upload') != '') { ?>
                                                                <img src="<?php echo esc_url(get_option('freshcodes_background_upload')); ?>"
                                                                     id="slider_backgrounddisplay"/>&nbsp;<a
                                                                        id="slider_remove_link3"
                                                                        href="javascript:freshcodes_removeImage3();"><img
                                                                            src="<?php echo esc_url(get_template_directory_uri()); ?>/images/freshcodes/admin/remove.png"/></a>
                                                            <?php } ?>
                                                            <script>
                                                                function freshcodes_removeImage3() {
                                                                    document.getElementById("freshcodes_background_upload").value = "";
                                                                    document.getElementById("slider_backgrounddisplay").src = "";
                                                                    document.getElementById("slider_remove_link3").innerHTML = "";
                                                                }
                                                            </script>
                                                        </div>
                                                        <div class="content">
                                                            <input style=" <?php if ($value['id'] != 'freshcodes_background_upload') {
                                                                echo 'display:none';
                                                            } ?> " class="regular-text"
                                                                   name="<?php echo esc_attr($value['id']); ?>"
                                                                   id="<?php echo esc_attr($value['id']); ?>"
                                                                   type="text"
                                                                   value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                            <input id="upload_backgroundimage_button"
                                                                   class="button-primary" type="button"
                                                                   value="Upload Image"/>
                                                                    <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div><br/>
                                                        </div>
                                                    </div>
                                        <?php break;

                                        case 'upload-2': ?>
                                            <?php if ($i % 2 != 0) { ?>
                                            <div class="odd setting_main">
                                                <?php } else { ?>
                                                <div class="even setting_main">
                                                    <?php } ?>
                                                    <div class="title">
                                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                                        <br/>
                                                        <br/>
                                                        <?php if (get_option('freshcodes_home_background_upload') != '') { ?>
                                                            <img src="<?php echo esc_url(get_option('freshcodes_home_background_upload')); ?>"
                                                                id="slider_homebackgrounddisplay"/>&nbsp;<a
                                                                    id="slider_remove_home_link"
                                                                    href="javascript:freshcodes_removeImagehome();"><img
                                                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/freshcodes/admin/remove.png"/></a>
                                                        <?php } ?>
                                                        <script>
                                                            function freshcodes_removeImagehome() {
                                                                document.getElementById("freshcodes_home_background_upload").value = "";
                                                                document.getElementById("slider_homebackgrounddisplay").src = "";
                                                                document.getElementById("slider_remove_home_link").innerHTML = "";
                                                            }
                                                        </script>
                                                    </div>
                                                    <div class="content">
                                                        <input style=" <?php if ($value['id'] != 'freshcodes_home_background_upload') {
                                                            echo 'display:none';
                                                        } ?> " class="regular-text"
                                                            name="<?php echo esc_attr($value['id']); ?>"
                                                            id="<?php echo esc_attr($value['id']); ?>"
                                                            type="text"
                                                            value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                        <input id="upload_image_button"
                                                            class="button-primary" type="button"
                                                            value="Upload Image"/>
                                                            <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                            </div><br/>
                                                    </div>
                                                </div>
                                        <?php break;

                                        case 'Title-1':
                                            if (!isset($value['id'])) {
                                                $value['id'] = '';
                                            }
                                            ?>
                                            <div class="background-title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                            </div>
                                            <?php break;
                                        }
                                        $i++;
                                        } ?>
                                </div>
                        <!--from-table-->
                        <div class="submit">
                            <input type="submit" value="Save Changes" class="button-primary"
                                   name="Submit">
                        </div>
                    </form>
                    <!--mainform-->
                    <!-- reset Button -->
                    <div class="reset-option">
                        <form enctype="multipart/form-data" method="post" id="settingForm1" name="settingFormx">
                            <p class="freshcodes-submit">
                                <input type="hidden" name="reset1" value="reset1"/>
                                <input type="submit" value="Set Default" class="button-primary" name="reset"/>
                            </p>
                        </form>
                    </div>
                    <!-- End Reset Button -->
                </div>
                <!--general-setting-->
                <div style="clear:both"></div>
                <!-- =========================================== End General Settings =========================================== -->

<!-- =========================================== Start Sidebar Text Color Settings =========================================== -->
<div id="Sidebartext">
      <form enctype="multipart/form-data" method="post" id="settingForm5" name="settingForm5"  >
        <input type="hidden" name="action" value="save_options5" />
        <?php
	if(!isset( $_REQUEST['action'] )) {$_REQUEST['action']=''; }
	if(!isset( $_REQUEST['reset5'] )) {$_REQUEST['reset5']=''; }
    if ( 'save_options5' == $_REQUEST['action'] )
     {
 		foreach ($options5 as $value) {
				if(!isset( $value['id'] )) {$value['id']=''; }
				if(isset( $value['id'] ) && isset($_REQUEST[ $value['id'] ] )){
					update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}
		}
	    } 
     else if( 'reset5' == $_REQUEST['reset5'] )
      {
 	    foreach ($options5 as $value) 
	     {
				 if(!isset( $value['id'] )) {$value['id']=''; }
				 delete_option( $value['id'] ); 
        }
		
      }
    ?>
        <div class="form-table">
        <div class="background-title">
          <label>
          <?php echo esc_html__('Sidebar Text Settings', 'nyclaptoprepair'); ?>
          </label>
        </div>
        <?php
     foreach ($options5 as $value) { 
		if(!isset( $value['type'] )) {$value['type'] =''; }
	switch ( $value['type'] ) {
		case 'select':	?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
          </div>
          <div class="content">
            <select class="select_input" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>">
              <?php foreach ($value['options'] as $op_id => $suboption) { ?>
              <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) { echo ' selected="selected"'; } ?>><?php echo esc_html($suboption); ?></option>
              <?php } ?>
            </select>
            <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                    <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                </div></div>
        </div>
        <!--even-Odd-->
        <?php	break; //end Switch
		
		case 'textbox-1':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
          <?php } else { ?>
          <div class="even setting_main">
            <?php }?>
            <div class="title">
              <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
            </div>
            <div class="content">
			 <?php if (get_option($value['id']) != "") {
             $stylecolor = stripslashes(get_option($value['id']));
             } else {
             $stylecolor = stripslashes($value['std']);
             }
           
			   $stylecolor = 'style="background-color:#' . $stylecolor . '"'; ?>
                                                        <input class="regular-text1"
                                                               name="<?php echo esc_attr($value['id']); ?>"
                                                               id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                               value="<?php if (get_option($value['id']) != "") {
                                                                   echo esc_attr(stripslashes(get_option($value['id'])));
                                                               } else {
                                                                   echo esc_attr(stripslashes($value['std']));
                                                               } ?>" <?php echo wp_kses( $stylecolor,freshcodes_allowed_html()); ?> />
                                                        
                                                            <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                            <span class="description"><?php echo esc_html($value['description']);
                                                            echo esc_attr(get_option($value['id'])); ?></span></div>
                                                            </div>
                                                </div>
         <!--odd-even-->
          <?php
	break;
			case 'Title-1':		
	if(!isset( $value['id'] )) {$value['id'] =''; }
	?>
          <div class="background-title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
          </div>
          <?php break;
		   }
		$i++;
      }
?>
        </div>
        <!--form table-->
        <div class="submit">
          <input type="submit" value="Save Changes" class="button-primary" name="Submit" >
        </div>
      </form>
      <!-- reset Button -->
      <div class="reset-option">
        <form enctype="multipart/form-data" method="post" id="settingForm6" name="settingForm6"   >
          <p class="freshcodes-submit">
            <input type="hidden" name="reset5" value="reset5" />
            <input type="submit" value="Set Default" class="button-primary" name="reset"/>
          </p>
        </form>
      </div>
      <!-- End Reset Button -->
    </div>
    <!---#color-->
    <script type="text/javascript">
function Ajax(){
var xmlHttp;
	try{	
		xmlHttp=new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
	}
	catch (e){
		try{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
		}
		catch (e){
		    try{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e){
				alert("No AJAX!?");
				return false;
			}
		}
	}
xmlHttp.onreadystatechange=function(){
	if(xmlHttp.readyState==4){
		document.getElementById('tab_main').innerHTML=xmlHttp.responseText;
		return false;
	}
}
xmlHttp.send(null);
}
window.onload=function(){
}
</script>
    <div style="clear:both"></div>
    <!-- =========================================== End Sidebar Text Color Settings =========================================== -->
                <!-- =========================================== Start Shop Settings =========================================== -->
                <?php if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) : ?>
                    <div id="product">
                        <form enctype="multipart/form-data" method="post" id="settingForm7" name="settingForm7">
                            <input type="hidden" name="action" value="save_options7"/>
                            <?php
                            if (!isset($_REQUEST['action'])) {
                                $_REQUEST['action'] = '';
                            }
                            if (!isset($_REQUEST['reset7'])) {
                                $_REQUEST['reset7'] = '';
                            }
                            if ('save_options7' == $_REQUEST['action']) {
                                foreach ($options7 as $value) {
                                    if (!isset($value['id'])) {
                                        $value['id'] = '';
                                    }
                                    if (isset($value['id']) && isset($_REQUEST[$value['id']])) {
                                        update_option($value['id'], $_REQUEST[$value['id']]);
                                    }
                                }
                            } else if ('reset7' == $_REQUEST['reset7']) {
                                foreach ($options7 as $value) {
                                    if (!isset($value['id'])) {
                                        $value['id'] = '';
                                    }
                                    delete_option($value['id']);
                                }
                            }
                            ?>
                            <div class="form-table">
                                <?php
                                foreach ($options7
                                as $value) {
                                if (!isset($value['type'])) {
                                    $value['type'] = '';
                                }
                                switch ($value['type']) {
                                case 'textbox': ?>
                                <?php if ($i % 2 != 0) { ?>
                                <div class="odd setting_main">
                                    <?php } else { ?>
                                    <div class="even setting_main">
                                        <?php } ?>
                                        <div class="title">
                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                        </div>
                                        <div class="content">
                                            <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                                   id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                   value="<?php if (get_option($value['id']) != "") {
                                                       echo esc_attr(stripslashes(get_option($value['id'])));
                                                   } else {
                                                       echo esc_attr(stripslashes($value['std']));
                                                   } ?>"/>
                                            <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                <span class="description"><?php echo esc_html($value['description']); ?></span>
                                            </div>
                                        </div>
                                    </div>
							<?php break; //end Switch
                                    case 'textbox-1': ?>
                                    <?php if ($i % 2 != 0) { ?>
                                    <div class="odd setting_main">
                                        <?php } else { ?>
                                        <div class="even setting_main">
                                            <?php } ?>
                                            <div class="title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                            </div>
                                            <div class="content">
                                            <?php if (get_option($value['id']) != "") {
                                                $stylecolor = stripslashes(get_option($value['id']));
                                            } else {
                                                $stylecolor = stripslashes($value['std']);
                                            }
                                            $stylecolor = 'style="background-color:#' . $stylecolor . '"'; ?>
                                            <input class="regular-text1"
                                                    name="<?php echo esc_attr($value['id']); ?>"
                                                    id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                    value="<?php if (get_option($value['id']) != "") {
                                                        echo esc_attr(stripslashes(get_option($value['id'])));
                                                    } else {
                                                        echo esc_attr(stripslashes($value['std']));
                                                    } ?>" <?php echo html_entity_decode( esc_html( $stylecolor ) );  ?> />
                                            

                                            <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                <span class="description"><?php echo esc_html($value['description']);
                                                echo esc_attr(get_option($value['id'])); ?></span>
                                            </div>
                                            </div>
                                        </div>
                                    <!--odd-even-->
                                    <?php break;
                                    case 'select': ?>
                                    <?php if ($i % 2 != 0) { ?>
                                    <div class="odd setting_main">
                                        <?php } else { ?>
                                        <div class="even setting_main">
                                            <?php } ?>
                                            <div class="title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                            </div>
                                            <div class="content">
                                                <select class="select_input"
                                                        name="<?php echo esc_attr($value['id']); ?>"
                                                        id="<?php echo esc_attr($value['id']); ?>">
                                                    <?php foreach ($value['options'] as $op_id => $suboption) { ?>
                                                        <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) {
                                                            echo ' selected="selected"';
                                                        } ?>><?php echo esc_html($suboption); ?></option>
                                                    <?php } ?>
                                                </select>
                                                <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                    <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--even-Odd-->
                                        <?php break; //end Switch
                                        case 'Title-1':
                                            if (!isset($value['id'])) {
                                                $value['id'] = '';
                                            }
                                            ?>
                                            <div class="background-title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                            </div>
                                            <?php break;
                                
                                        }
                                        $i++;
                                        }
                                        ?>
                                    </div>
                                    <!--form-table-->
                                    <div class="submit">
                                        <input type="submit" value="Save Changes" class="button-primary" name="Submit">
                                    </div>
                        </form>
                        <!-- reset Button -->
                        <div class="reset-option">
                            <form enctype="multipart/form-data" method="post" id="settingForm7" name="settingFormx">
                                <p class="freshcodes-submit">
                                    <input type="hidden" name="reset7" value="reset7"/>
                                    <input type="submit" value="Set Default" class="button-primary" name="reset"/>
                                </p>
                            </form>
                        </div>
                        <!-- End Reset Button -->
                    </div>
                <?php endif; ?>
                <!-- =========================================== End Shop Settings =========================================== -->
                <!-- =========================================== Start Header Settings =========================================== -->
                <div id="Header">
                    <form enctype="multipart/form-data" method="post" id="settingForm2" name="settingForm2">
                        <input type="hidden" name="action" value="save_options2"/>
                        <?php
                        if (!isset($_REQUEST['action'])) {
                            $_REQUEST['action'] = '';
                        }
                        if (!isset($_REQUEST['reset2'])) {
                            $_REQUEST['reset2'] = '';
                        }
                        if ('save_options2' == $_REQUEST['action']) {
                            foreach ($options2 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                if (isset($value['id']) && isset($_REQUEST[$value['id']])) {
                                    update_option($value['id'], $_REQUEST[$value['id']]);
                                }
                            }
                        } else if ('reset2' == $_REQUEST['reset2']) {
                            foreach ($options2 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                delete_option($value['id']);
                            }
                        }
                        ?>
                        <div class="form-table">
                            <div class="background-title">
                                <label>
                                    <?php echo esc_html__('Header Settings', 'nyclaptoprepair'); ?>
                                </label>
                            </div>
                            <?php
                            foreach ($options2
                            as $value) {
                            if (!isset($value['type'])) {
                                $value['type'] = '';
                            }
                            switch ($value['type']) {
                            case 'select': ?>
                            <?php if ($i % 2 != 0) { ?>
                            <div class="odd setting_main">
                                <?php } else { ?>
                                <div class="even setting_main">
                                    <?php } ?>
                                    <div class="title">
                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                    </div>
                                    <div class="content">
                                        <select class="select_input" name="<?php echo esc_attr($value['id']); ?>"
                                                id="<?php echo esc_attr($value['id']); ?>">
                                            <?php foreach ($value['options'] as $op_id => $suboption) { ?>
                                                <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) {
                                                    echo ' selected="selected"';
                                                } ?>><?php echo esc_html($suboption); ?></option>
                                            <?php } ?>
                                        </select>
                                        <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                            <span class="description"><?php echo esc_html($value['description']); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <!--even-Odd-->
                                <?php break; //end Switch                         
                                   
                                case 'textbox-1': ?>
                                <?php if ($i % 2 != 0) { ?>
                                <div class="odd setting_main">
                                    <?php } else { ?>
                                    <div class="even setting_main">
                                        <?php } ?>
                                        <div class="title">
                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                        </div>
                                        <div class="content">
                                            <?php if (get_option($value['id']) != "") {
                                                $stylecolor = stripslashes(get_option($value['id']));
                                            } else {
                                                $stylecolor = stripslashes($value['std']);
                                            }
                                            $stylecolor = 'style="background-color:#' . $stylecolor . '"'; ?>
                                            <input class="regular-text1"
                                                    name="<?php echo esc_attr($value['id']); ?>"
                                                    id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                    value="<?php if (get_option($value['id']) != "") {
                                                        echo stripslashes(get_option($value['id']));
                                                    } else {
                                                        echo stripslashes($value['std']);
                                                    } ?>" <?php echo html_entity_decode( esc_html( $stylecolor ) );  ?> />
                                            <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                <span class="description"><?php echo esc_html($value['description']);
                                                echo esc_attr(get_option($value['id'])); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--odd-even-->
                                    <?php
                                    break;
                                    
                                            case 'upload-1': ?>
                                            <?php if ($i % 2 != 0) { ?>
                                                <div class="odd setting_main">
                                                    <?php } else { ?>
                                                    <div class="even setting_main">
                                                        <?php } ?>
                                                        <div class="title">
                                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                                            <br/>
                                                            <br/>
                                                            <?php if (get_option('freshcodes_header_background_upload') != '') { ?>
                                                                <img src="<?php echo esc_url(get_option('freshcodes_header_background_upload')); ?>"
                                                                        id="freshcodes_header_background_display"
                                                                        class="thumb"/>&nbsp;<a
                                                                        id="freshcodes_header_background_remove_link"
                                                                        href="javascript:freshcodes_remove_header_background();"><img
                                                                            src="<?php echo esc_url(get_template_directory_uri()); ?>/images/freshcodes/admin/remove.png"/></a>
                                                            <?php } ?>
                                                            <script>
                                                                function freshcodes_remove_header_background() {
                                                                    document.getElementById("freshcodes_header_background_upload").value = "";
                                                                    document.getElementById("freshcodes_header_background_display").src = "";
                                                                    document.getElementById("freshcodes_header_background_remove_link").innerHTML = "";
                                                                }
                                                            </script>
                                                        </div>
                                                        <div class="content">
                                                            <input style=" <?php if ($value['id'] != 'freshcodes_header_background_upload') {
                                                                echo 'display:none';
                                                            } ?> " class="regular-text"
                                                                    name="<?php echo esc_attr($value['id']); ?>"
                                                                    id="<?php echo esc_attr($value['id']); ?>"
                                                                    type="text"
                                                                    value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                            <input id="upload_backgroundimage_button"
                                                                    class="button-primary" type="button"
                                                                    value="Upload Image"/>
                                                                    <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div><br/>
                                                        </div>
                                                    </div>
                                                <!-- </div> -->
                                                <!--even odd setting-->
                                                <?php break;

                                                case 'upload-2': ?>
                                                <?php if ($i % 2 != 0) { ?>
                                                    <div class="odd setting_main">
                                                        <?php } else { ?>
                                                        <div class="even setting_main">
                                                            <?php } ?>
                                                            <div class="title">
                                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                                                <br/>
                                                                <br/>
                                                                <?php if (get_option('freshcodes_header_top_icon') != '') { ?>
                                                                    <img src="<?php echo esc_url(get_option('freshcodes_header_top_icon')); ?>"
                                                                            id="freshcodes_header_background_display"
                                                                            class="thumb"/>&nbsp;<a
                                                                            id="freshcodes_header_background_remove_link"
                                                                            href="javascript:freshcodes_remove_header_background();"><img
                                                                                src="<?php echo esc_url(get_template_directory_uri()); ?>/images/freshcodes/admin/remove.png"/></a>
                                                                <?php } ?>
                                                                <script>
                                                                    function freshcodes_remove_header_background() {
                                                                        document.getElementById("freshcodes_header_top_icon").value = "";
                                                                        document.getElementById("freshcodes_header_background_display").src = "";
                                                                        document.getElementById("freshcodes_header_background_remove_link").innerHTML = "";
                                                                    }
                                                                </script>
                                                            </div>
                                                            <div class="content">
                                                                <input style=" <?php if ($value['id'] != 'freshcodes_header_top_icon') {
                                                                    echo 'display:none';
                                                                } ?> " class="regular-text"
                                                                        name="<?php echo esc_attr($value['id']); ?>"
                                                                        id="<?php echo esc_attr($value['id']); ?>"
                                                                        type="text"
                                                                        value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                                <input id="upload_backgroundimage_button"
                                                                        class="button-primary" type="button"
                                                                        value="Upload Image"/>
                                                                        <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div><br/>
                                                            </div>
                                                        </div>
                                                    <!-- </div> -->
                                                    <!--even odd setting-->
                                                    <?php break;
									
									
									case 'upload-3': ?>
                                                <?php if ($i % 2 != 0) { ?>
                                                    <div class="odd setting_main">
                                                        <?php } else { ?>
                                                        <div class="even setting_main">
                                                            <?php } ?>
                                                            <div class="title">
                                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                                                <br/>
                                                                <br/>
                                                                <?php if (get_option('freshcodes_header_link_icon') != '') { ?>
                                                                    <img src="<?php echo esc_url(get_option('freshcodes_header_link_icon')); ?>"
                                                                            id="freshcodes_header_background_display"
                                                                            class="thumb"/>&nbsp;<a
                                                                            id="freshcodes_header_background_remove_link"
                                                                            href="javascript:freshcodes_remove_header_background();"><img
                                                                                src="<?php echo esc_url(get_template_directory_uri()); ?>/images/freshcodes/admin/remove.png"/></a>
                                                                <?php } ?>
                                                                <script>
                                                                    function freshcodes_remove_header_background() {
                                                                        document.getElementById("freshcodes_header_link_icon").value = "";
                                                                        document.getElementById("freshcodes_header_background_display").src = "";
                                                                        document.getElementById("freshcodes_header_background_remove_link").innerHTML = "";
                                                                    }
                                                                </script>
                                                            </div>
                                                            <div class="content">
                                                                <input style=" <?php if ($value['id'] != 'freshcodes_header_link_icon') {
                                                                    echo 'display:none';
                                                                } ?> " class="regular-text"
                                                                        name="<?php echo esc_attr($value['id']); ?>"
                                                                        id="<?php echo esc_attr($value['id']); ?>"
                                                                        type="text"
                                                                        value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                                <input id="upload_backgroundimage_button"
                                                                        class="button-primary" type="button"
                                                                        value="Upload Image"/>
                                                                        <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div><br/>
                                                            </div>
                                                        </div>
                                                    <!-- </div> -->
                                                    <!--even odd setting-->
                                                    <?php break;


                                                case 'textbox': ?>
                                                <?php if ($i % 2 != 0) { ?>
                                                <div class="odd setting_main">
                                                    <?php } else { ?>
                                                    <div class="even setting_main">
                                                        <?php } ?>
                                                        <div class="title">
                                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                                        </div>
                                                        <div class="content">
                                                            <input class="regular-text"
                                                                name="<?php echo esc_attr($value['id']); ?>"
                                                                id="<?php echo esc_attr($value['id']); ?>"
                                                                type="text"
                                                                value="<?php if (get_option($value['id']) != "") {
                                                                    echo esc_attr(stripslashes(get_option($value['id'])));
                                                                } else {
                                                                    echo esc_attr(stripslashes($value['std']));
                                                                } ?>"/>
                                                            <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                    <!--odd-even-->

                                                <?php break;
                                                case 'Title-1':
                                                    if (!isset($value['id'])) {
                                                        $value['id'] = '';
                                                    }
                                                    ?>
                                                    <div class="background-title">
                                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                                    </div>
                                                    <?php break;                                            
                                                        }
                                                        $i++;
                                                        }
                                                        ?>
                                                </div>
                                                    <!--form table-->
                                                    <div class="submit">
                                            <input type="submit" value="Save Changes" class="button-primary"
                                                   name="Submit">
                                        </div>
                    </form>
                    <div class="reset-option">
                        <form enctype="multipart/form-data" method="post" id="settingForm2" name="settingFormx">
                            <p class="freshcodes-submit">
                                <input type="hidden" name="reset2" value="reset2"/>
                                <input type="submit" value="Set Default" class="button-primary" name="reset"/>
                            </p>
                        </form>
                    </div>
                    <!-- reset Button -->
                    <!-- End Reset Button -->
                </div>
                <!---#color-->
                <script type="text/javascript">
                    function Ajax() {
                        var xmlHttp;
                        try {
                            xmlHttp = new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
                        } catch (e) {
                            try {
                                xmlHttp = new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
                            } catch (e) {
                                try {
                                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                                } catch (e) {
                                    alert("No AJAX!?");
                                    return false;
                                }
                            }
                        }
                        xmlHttp.onreadystatechange = function () {
                            if (xmlHttp.readyState == 4) {
                                document.getElementById('tab_main').innerHTML = xmlHttp.responseText;
                                return false;
                            }
                        }
                        xmlHttp.send(null);
                    }
                    window.onload = function () {
                    }
                </script>


                <!-- =========================================== Start Content Settings =========================================== -->
                <div id="Content">
                    <form enctype="multipart/form-data" method="post" id="settingForm3" name="settingForm3">
                        <input type="hidden" name="action" value="save_options3"/>
                        <?php
                        if (!isset($_REQUEST['action'])) {
                            $_REQUEST['action'] = '';
                        }
                        if (!isset($_REQUEST['reset3'])) {
                            $_REQUEST['reset3'] = '';
                        }
                        if ('save_options3' == $_REQUEST['action']) {
                            foreach ($options3 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                if (isset($value['id']) && isset($_REQUEST[$value['id']])) {
                                    update_option($value['id'], $_REQUEST[$value['id']]);
                                }
                            }
                        } else if ('reset3' == $_REQUEST['reset3']) {
                            foreach ($options3 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                delete_option($value['id']);
                            }
                        }
                        ?>
                        <div class="form-table">
                            <div class="background-title">
                                <label>
                                    <?php echo esc_attr_e('Content Settings', 'nyclaptoprepair'); ?>
                                </label>
                            </div>
                            <?php
                            foreach ($options3
                            as $value) {
                            switch ($value['type']) {
                            case 'select':
                            ?>
                            <?php if ($i % 2 != 0) { ?>
                            <div class="odd setting_main">
                                <?php } else { ?>
                                <div class="even setting_main">
                                    <?php } ?>
                                    <div class="title">
                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                    </div>
                                    <div class="content">
                                        <select class="select_input" name="<?php echo esc_attr($value['id']); ?>"
                                                id="<?php echo esc_attr($value['id']); ?>">
                                            <?php foreach ($value['options'] as $op_id => $suboption) { ?>
                                                <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) {
                                                    echo ' selected="selected"';
                                                } ?>><?php echo esc_html($suboption); ?></option>
                                            <?php } ?>
                                        </select>
                                        <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div>
                                    </div>
                                </div>
                                <?php
                                break;
									case 'textbox-3': ?>
                        <?php if ($i % 2 != 0) { ?>
                        <div class="odd setting_main">
                            <?php } else { ?>
                            <div class="even setting_main">
                                <?php } ?>
                                <div class="title">
                                    <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                </div>
                                <div class="content">
                                    <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                           id="<?php echo esc_attr($value['id']); ?>" type="text"
                                           value="<?php if (get_option($value['id']) != "") {
                                               echo esc_attr(stripslashes(get_option($value['id'])));
                                           } else {
                                               echo esc_attr(stripslashes($value['std']));
                                           } ?>"/>
                                    <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div></span>
                                </div>
                            </div>
                            <!--odd-even-->
                            <?php
                            break;
									 case 'Title-1':
                                        if (!isset($value['id'])) {
                                            $value['id'] = '';
                                        }
                                        ?>
                                        <div class="background-title">
                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                        </div>
                                        <?php break;
                                    case 'textbox-1': ?>
                                    <?php if ($i % 2 != 0) { ?>
                                    <div class="odd setting_main">
                                        <?php } else { ?>
                                        <div class="even setting_main">
                                            <?php } ?>
                                            <div class="title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                            </div>
                                            <div class="content">
                                                <?php if (get_option($value['id']) != "") {
                                                    $stylecolor = stripslashes(get_option($value['id']));
                                                } else {
                                                    $stylecolor = stripslashes($value['std']);
                                                }
                                                $stylecolor = 'style="background-color:#' . $stylecolor . '"'; ?>
                                                <input class="regular-text1"
                                                       name="<?php echo esc_attr($value['id']); ?>"
                                                       id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                       value="<?php if (get_option($value['id']) != "") {
                                                           echo esc_attr(stripslashes(get_option($value['id'])));
                                                       } else {
                                                           echo esc_attr(stripslashes($value['std']));
                                                       } ?>" <?php echo html_entity_decode( esc_html( $stylecolor ) );  ?> />
                                               <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                <span class="description"><?php echo esc_html($value['description']);
                                                echo esc_attr(get_option($value['id'])); ?></span>
                                            </div>
                                                    </div>
                                        </div>
                                        <!--odd-even-->
                                        <?php
                                        break;
                                        case 'upload-4': ?>
                                            <?php if ($i % 2 != 0) { ?>
                                            <div class="odd setting_main">
                                                <?php } else { ?>
                                                <div class="even setting_main">
                                                    <?php } ?>
                                                    <div class="title">
                                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                                        <br/>
                                                        <br/>
                                                        <?php if (get_option('freshcodes_breadcrumb_image') != '') { ?>
                                                            <img src="<?php echo esc_url(get_option('freshcodes_breadcrumb_image')); ?>"
                                                                 id="slider_breadcrumb_display"/>&nbsp;<a
                                                                    id="slider_remove_breadcrumb_link"
                                                                    href="javascript:freshcodes_removemobbreadcrumbImage();"><img
                                                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/freshcodes/admin/remove.png"/></a>
                                                        <?php } ?>
                                                        <script>
                                                            function freshcodes_removemobbreadcrumbImage() {
                                                                document.getElementById("freshcodes_breadcrumb_image").value = "";
                                                                document.getElementById("slider_breadcrumb_display").src = "";
                                                                document.getElementById("slider_remove_breadcrumb_link").innerHTML = "";
                                                            }
                                                        </script>
                                                    </div>
                                                    <div class="content">
                                                        <input style=" <?php if ($value['id'] != 'freshcodes_breadcrumb_image') {
                                                            echo 'display:none';
                                                        } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                                               id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                               value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                        <input id="upload_image_button" class="button-primary" type="button"
                                                               value="Upload Logo"/>
                                                               <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div>
                                                    </div>
                                                </div>
                                                <!--even odd setting-->
                                                
                                                <?php
                                                break;
                                                case 'upload-5': ?>
                                                    <?php if ($i % 2 != 0) { ?>
                                                    <div class="odd setting_main">
                                                        <?php } else { ?>
                                                        <div class="even setting_main">
                                                            <?php } ?>
                                                            <div class="title">
                                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                                                <br/>
                                                                <br/>
                                                                <?php if (get_option('freshcodes_woo_breadcrumb_image') != '') { ?>
                                                                    <img src="<?php echo esc_url(get_option('freshcodes_woo_breadcrumb_image')); ?>"
                                                                         id="slider_breadcrumb_display"/>&nbsp;<a
                                                                            id="slider_remove_breadcrumb_link"
                                                                            href="javascript:freshcodes_removemobbreadcrumbImage();"><img
                                                                                src="<?php echo esc_url(get_template_directory_uri()); ?>/images/freshcodes/admin/remove.png"/></a>
                                                                <?php } ?>
                                                                <script>
                                                                    function freshcodes_removemobbreadcrumbImage() {
                                                                        document.getElementById("freshcodes_woo_breadcrumb_image").value = "";
                                                                        document.getElementById("slider_breadcrumb_display").src = "";
                                                                        document.getElementById("slider_remove_breadcrumb_link").innerHTML = "";
                                                                    }
                                                                </script>
                                                            </div>
                                                            <div class="content">
                                                                <input style=" <?php if ($value['id'] != 'freshcodes_woo_breadcrumb_image') {
                                                                    echo 'display:none';
                                                                } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                                                       id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                                       value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                                <input id="upload_image_button" class="button-primary" type="button"
                                                                       value="Upload Logo"/>
                                                                       <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <!--even odd setting-->
                                                        <?php
                                                        break;
                                                case 'textbox': ?>
                                                <?php if ($i % 2 != 0) { ?>
                                                <div class="odd setting_main">
                                                    <?php } else { ?>
                                                    <div class="even setting_main">
                                                        <?php } ?>
                                                        <div class="title">
                                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                                        </div>
                                                        <div class="content">
                                                            <input class="regular-text"
                                                                name="<?php echo esc_attr($value['id']); ?>"
                                                                id="<?php echo esc_attr($value['id']); ?>"
                                                                type="text"
                                                                value="<?php if (get_option($value['id']) != "") {
                                                                    echo esc_attr(stripslashes(get_option($value['id'])));
                                                                } else {
                                                                    echo esc_attr(stripslashes($value['std']));
                                                                } ?>"/>
                                                            <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                    <!--odd-even-->

                                                
                                            <?php break;
                                            }
                                            $i++;
                                            }
                                            ?>
                                        </div>
                                        <!--form-table-->
                                        <div class="submit">
                                            <input type="submit" value="Save Changes" class="button-primary"
                                                   name="Submit">
                                        </div>
                    </form>
                    <!-- reset Button -->
                    <div class="reset-option">
                        <form enctype="multipart/form-data" method="post" id="settingForm3" name="settingFormx">
                            <p class="freshcodes-submit">
                                <input type="hidden" name="reset3" value="reset3"/>
                                <input type="submit" value="Set Default" class="button-primary" name="reset"/>
                            </p>
                        </form>
                    </div>
                    <!-- End Reset Button -->
                </div>
                <!--Font-->
                <!-- =========================================== Start Footer Settings =========================================== -->
                <div id="Footer">
                    <form enctype="multipart/form-data" method="post" id="settingForm4" name="settingForm4">
                        <input type="hidden" name="action" value="save_options4"/>
                        <?php
                        if (!isset($_REQUEST['action'])) {
                            $_REQUEST['action'] = '';
                        }
                        if (!isset($_REQUEST['reset4'])) {
                            $_REQUEST['reset4'] = '';
                        }
                        if ('save_options4' == $_REQUEST['action']) {
                            foreach ($options4 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                if (isset($value['id']) && isset($_REQUEST[$value['id']])) {
                                    update_option($value['id'], $_REQUEST[$value['id']]);
                                }
                            }
                        } else if ('reset4' == $_REQUEST['reset4']) {
                            foreach ($options4 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                delete_option($value['id']);
                            }
                        }
                        ?>
                        <div class="form-table">
                            <div class="background-title">
                                <label>
                                    <?php echo esc_html__('Footer Settings', 'nyclaptoprepair'); ?>
                                </label>
                            </div>
                            <?php
                            foreach ($options4
                            as $value) {
                            if (!isset($value['type'])) {
                                $value['type'] = '';
                            }
                            switch ($value['type']) {
                            case 'select': ?>
                            <?php if ($i % 2 != 0) { ?>
                            <div class="odd setting_main">
                                <?php } else { ?>
                                <div class="even setting_main">
                                    <?php } ?>
                                    <div class="title">
                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                    </div>
                                    <div class="content">
                                        <select class="select_input" name="<?php echo esc_attr($value['id']); ?>"
                                                id="<?php echo esc_attr($value['id']); ?>">
                                            <?php foreach ($value['options'] as $op_id => $suboption) { ?>
                                                <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) {
                                                    echo ' selected="selected"';
                                                } ?>><?php echo esc_html($suboption); ?></option>
                                            <?php } ?>
                                        </select>
                                        <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div>
                                    </div>
                                </div>
                            <!--even-Odd-->
                    <?php break; //end Switch
                    case 'Title-1':
                        if (!isset($value['id'])) {
                            $value['id'] = '';
                        }
                        ?>
                        <div class="background-title">
                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                        </div>
                        <?php break;
                    case 'upload-1': ?>
                    <?php if ($i % 2 != 0) { ?>
                    <div class="odd setting_main">
                        <?php } else { ?>
                        <div class="even setting_main">
                            <?php } ?>
                            <div class="title">
                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                <br/>
                                <br/>
                                <?php if (get_option('freshcodes_footer_background_upload') != '') { ?>
                                    <img src="<?php echo esc_url(get_option('freshcodes_footer_background_upload')); ?>"
                                         id="slider_backgrounddisplay1" class="thumb"/>&nbsp;<a
                                            id="slider_remove_link31"
                                            href="javascript:freshcodes_removeImage31();"><img
                                                src="<?php echo esc_url(get_template_directory_uri()); ?>/images/freshcodes/admin/remove.png"/></a>
                                <?php } ?>
                                <script>
                                    function freshcodes_removeImage31() {
                                        document.getElementById("freshcodes_footer_background_upload").value = "";
                                        document.getElementById("slider_backgrounddisplay1").src = "";
                                        document.getElementById("slider_remove_link31").innerHTML = "";
                                    }
                                </script>
                            </div>
                            <div class="content">
                                <input style=" <?php if ($value['id'] != 'freshcodes_footer_background_upload') {
                                    echo 'display:none';
                                } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                       id="<?php echo esc_attr($value['id']); ?>" type="text"
                                       value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                <input id="upload_backgroundimage_button" class="button-primary"
                                       type="button" value="Upload Image"/>
                                       <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div><br/>
                            </div>
                        </div>
                        <!--even odd setting-->
                        <?php break;
                         case 'upload-2': ?>
                            <?php if ($i % 2 != 0) { ?>
                            <div class="odd setting_main">
                                <?php } else { ?>
                                <div class="even setting_main">
                                    <?php } ?>
                                    <div class="title">
                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                        <br/>
                                        <br/>
                                        <?php if (get_option('freshcodes_footer_newsletter_background_upload') != '') { ?>
                                            <img src="<?php echo esc_url(get_option('freshcodes_footer_newsletter_background_upload')); ?>"
                                                 id="slider_backgrounddisplay1" class="thumb"/>&nbsp;<a
                                                    id="slider_remove_link_newsletter"
                                                    href="javascript:freshcodes_removeImage_newsletter();"><img
                                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/freshcodes/admin/remove.png"/></a>
                                        <?php } ?>
                                        <script>
                                            function freshcodes_removeImage_newsletter() {
                                                document.getElementById("freshcodes_footer_newsletter_background_upload").value = "";
                                                document.getElementById("slider_backgrounddisplay1").src = "";
                                                document.getElementById("slider_remove_link_newsletter").innerHTML = "";
                                            }
                                        </script>
                                    </div>
                                    <div class="content">
                                        <input style=" <?php if ($value['id'] != 'freshcodes_footer_newsletter_background_upload') {
                                            echo 'display:none';
                                        } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                               id="<?php echo esc_attr($value['id']); ?>" type="text"
                                               value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                        <input id="upload_backgroundimage_button" class="button-primary"
                                               type="button" value="Upload Image"/>
                                               <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div><br/>
                                    </div>
                                </div>
                                <!--even odd setting-->
                                <?php break;
                        case 'upload-3': ?>
                            <?php if ($i % 2 != 0) { ?>
                            <div class="odd setting_main">
                                <?php } else { ?>
                                <div class="even setting_main">
                                    <?php } ?>
                                    <div class="title">
                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                        <br/>
                                        <br/>
                                        <?php if (get_option('freshcodes_newsletter_icon_upload') != '') { ?>
                                            <img src="<?php echo esc_url(get_option('freshcodes_newsletter_icon_upload')); ?>"
                                                 id="slider_backgrounddisplay1" class="thumb"/>&nbsp;<a
                                                    id="slider_remove_link_newsletter"
                                                    href="javascript:freshcodes_removeImage_newsletter();"><img
                                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/freshcodes/admin/remove.png"/></a>
                                        <?php } ?>
                                        <script>
                                            function freshcodes_removeImage_newsletter() {
                                                document.getElementById("freshcodes_newsletter_icon_upload").value = "";
                                                document.getElementById("slider_backgrounddisplay1").src = "";
                                                document.getElementById("slider_remove_link_newsletter").innerHTML = "";
                                            }
                                        </script>
                                    </div>
                                    <div class="content">
                                        <input style=" <?php if ($value['id'] != 'freshcodes_newsletter_icon_upload') {
                                            echo 'display:none';
                                        } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                               id="<?php echo esc_attr($value['id']); ?>" type="text"
                                               value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                        <input id="upload_backgroundimage_button" class="button-primary"
                                               type="button" value="Upload Image"/>
                                               <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div><br/>
                                    </div>
                                </div>
                                <!--even odd setting-->
                                <?php break;

                        case 'textbox-3': ?>
                        <?php if ($i % 2 != 0) { ?>
                        <div class="odd setting_main">
                            <?php } else { ?>
                            <div class="even setting_main">
                                <?php } ?>
                                <div class="title">
                                    <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                </div>
                                <div class="content">
                                    <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                           id="<?php echo esc_attr($value['id']); ?>" type="text"
                                           value="<?php if (get_option($value['id']) != "") {
                                               echo esc_attr(stripslashes(get_option($value['id'])));
                                           } else {
                                               echo esc_attr(stripslashes($value['std']));
                                           } ?>"/>
                                    <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div></span>
                                </div>
                            </div>
                            <!--odd-even-->
                            <?php
                            break;
                            case 'textbox-1': ?>
                            <?php if ($i % 2 != 0) { ?>
                            <div class="odd setting_main">
                                <?php } else { ?>
                                <div class="even setting_main">
                                    <?php } ?>
                                    <div class="title">
                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                    </div>
                                    <div class="content">
                                        <?php if (get_option($value['id']) != "") {
                                            $stylecolor = stripslashes(get_option($value['id']));
                                        } else {
                                            $stylecolor = stripslashes($value['std']);
                                        }
                                        $stylecolor = 'style="background-color:#' . $stylecolor . '"'; ?>
                                        <input class="regular-text1"
                                               name="<?php echo esc_attr($value['id']); ?>"
                                               id="<?php echo esc_attr($value['id']); ?>" type="text"
                                               value="<?php if (get_option($value['id']) != "") {
                                                   echo esc_attr(stripslashes(get_option($value['id'])));
                                               } else {
                                                   echo esc_attr(stripslashes($value['std']));
                                               } ?>" <?php echo html_entity_decode( esc_html( $stylecolor ) );  ?> />
                                        <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                <span class="description"><?php echo esc_html($value['description']);
                                                echo esc_attr(get_option($value['id'])); ?></span>
                                            </div>
                                            </div>
                                </div>
                                <!--odd-even-->
                                <?php
                                break;
                                case 'textbox-2': ?>
                                <?php if ($i % 2 != 0) { ?>
                                <div class="odd setting_main">
                                    <?php } else { ?>
                                    <div class="even setting_main">
                                        <?php } ?>
                                        <div class="title">
                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                        </div>
                                        <div class="content">
                                            <?php if (get_option($value['id']) != "") {
                                                $stylecolor = stripslashes(get_option($value['id']));
                                            } else {
                                                $stylecolor = stripslashes($value['std']);
                                            }
                                            $stylecolor = 'style="background-color:#' . $stylecolor . '"'; ?>
                                            <input class="regular-text1"
                                                   name="<?php echo esc_attr($value['id']); ?>"
                                                   id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                   value="<?php if (get_option($value['id']) != "") {
                                                       echo esc_attr(stripslashes(get_option($value['id'])));
                                                   } else {
                                                       echo esc_attr(stripslashes($value['std']));
                                                   } ?>" <?php echo html_entity_decode( esc_html( $stylecolor ) );  ?> />
                                            <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                <span class="description"><?php echo esc_html($value['description']);
                                                echo esc_attr(get_option($value['id'])); ?></span>
                                            </div>
                                                </div>
                                    </div>
                                    <!--odd-even-->
                                    <?php
                                    break;
                                    case 'texture':
                                    ?>
                                    <?php if ($i % 2 != 0) { ?>
                                    <div class="odd setting_main">
                                        <?php } else { ?>
                                        <div class="even setting_main">
                                            <?php }
                                            $img_dir = get_template_directory_uri() . '/images/freshcodes/admin/';
                                            ?>
                                            <div class="title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                            </div>
                                            <div class="content">
                                                <div class="freshcodes_content">
                                                    <div class="thumb-sel"><img class="thumb"
                                                                                src="<?php if (get_option($value['id']) != "") {
                                                                                    echo esc_url($img_dir . get_option($value['id']));
                                                                                } else {
                                                                                    echo esc_url($img_dir . $value['std']);
                                                                                } ?>"/> <span id="switch"
                                                                                              class="close"></span>
                                                    </div>
                                                    <div class="thumb-list">
                                                        <ul>
                                                            <?php foreach ($value['options'] as $opt_key => $opt_val) {
                                                                if (get_option($value['id']) != "") {
                                                                    if ($opt_key == get_option($value['id'])) {
                                                                        $checked = "checked=\"checked\"";
                                                                    } else {
                                                                        $checked = "";
                                                                    }
                                                                } else {
                                                                    if ($opt_key == ($value['std'])) {
                                                                        $checked = "checked=\"checked\"";
                                                                    } else {
                                                                        $checked = "";
                                                                    }
                                                                } ?>
                                                                <li>
                                                                    <input type="radio"
                                                                           name="<?php echo esc_attr($value['id']) ?>"
                                                                           value="<?php echo esc_attr($opt_key) ?>" <?php echo esc_attr($checked); ?>/>
                                                                    <img class="thumb"
                                                                         src="<?php echo esc_url($img_dir . $opt_key) ?>"
                                                                         title="<?php echo esc_attr($opt_val) ?>"/>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div>
                                            </div>
                                        </div>
                                <?php break;
                                case 'upload': ?>
                                <?php if ($i % 2 != 0) { ?>
                                <div class="odd setting_main">
                                    <?php } else { ?>
                                    <div class="even setting_main">
                                        <?php } ?>
                                        <div class="title">
                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                        </div>
                                        <div class="content">
                                            <input style=" <?php if ($value['id'] != 'freshcodes_background_upload') {
                                                echo 'display:none';
                                            } ?> " class="regular-text"
                                                   name="<?php echo esc_attr($value['id']); ?>"
                                                   id="<?php echo esc_attr($value['id']); ?>"
                                                   type="text"
                                                   value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                            <input id="upload_image_button1" class="button-primary"
                                                   type="button" value="Upload Image"/>
                                                   <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                                        <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                                    </div>
                                        </div>
                                    </div>
                                    <!--even odd setting-->
                                    <?php break;
                                    case 'textbox': ?>
                                    <?php if ($i % 2 != 0) { ?>
                                    <div class="odd setting_main">
                                        <?php } else { ?>
                                        <div class="even setting_main">
                                            <?php } ?>
                                            <div class="title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_html($value['label']); ?></label>
                                            </div>
                                            <div class="content">
                                                <input class="regular-text"
                                                       name="<?php echo esc_attr($value['id']); ?>"
                                                       id="<?php echo esc_attr($value['id']); ?>"
                                                       type="text"
                                                       value="<?php if (get_option($value['id']) != "") {
                                                           echo esc_attr(stripslashes(get_option($value['id'])));
                                                       } else {
                                                           echo esc_attr(stripslashes($value['std']));
                                                       } ?>"/>
                                                <div  class="freshcodes-tooltip"><span class="freshcodes-tooltip-text">?</span>
                                                    <span class="description"><?php echo esc_html($value['description']); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--odd-even-->
                                        <?php
                                        break;
                                        }
                                        $i++;
                                        }
                                        ?>
                                    </div>
                                <!--form table-->
                                <div class="submit">
                                    <input type="submit" value="Save Changes"
                                           class="button-primary" name="Submit">
                                </div>
                    </form>
                    <!-- reset Button -->
                    <div class="reset-option">
                        <form enctype="multipart/form-data" method="post" id="settingForm4" name="settingFormx">
                            <p class="freshcodes-submit">
                                <input type="hidden" name="reset4" value="reset4"/>
                                <input type="submit" value="Set Default" class="button-primary" name="reset"/>
                            </p>
                        </form>
                    </div>
                    <!-- End Reset Button -->
                </div>
                <div id="ajax-response"></div>
                <br class="clear">
            </div>
        </div>
        <div id="ajax-response"></div>