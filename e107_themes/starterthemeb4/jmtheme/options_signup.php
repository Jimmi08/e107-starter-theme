<?php


$sitetheme = e107::getPref('sitetheme');
 
$themeconf =  e107::pref('theme', 'filter_color', '');
 
$filter_css = explode(',', $themeconf);
$filter_colors[''] = '';
foreach($filter_css as $css){
  $filter_colors[$css] = $css;
}

/*
$footerlist = array(
 'footer-default' => '4 columns Footer',
 'footer-small'   => 'Simple Footer',
 'footer-none'  => 'No Footer' 
);
*/

/* SHORTCODE CAN'T HAVE - , prefs can !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  */
//  return preg_replace_callback("#\{([a-zA-Z0-9_]+)\}#", array($this, 'simpleReplace'), $template); */


$options['signup']  = array(
  		'fields'    => array(
 
          "bodyclass"=>array(
        				'title' => 'Body Classes for this layout',
                'type'  => 'text',
        				'inuse' => true,
                'writeParms'=>array('size'=>'block-level')
      					),  
          "filter_color"=>array(
        				'title' => 'Filter color for full page or page header. This needs to be supported by layout itself',
                'type'  => 'dropdown',
        				'inuse' => true,
                'writeParms'=>array('size'=>'block-level', 'optArray'=>$filter_colors)
      					), 	
          "left_text"=>array(
        				'title' => 'Welcome text on left site. Shortcodes can be used',
                'type'  => 'textarea',
        				'inuse' => true,
                'writeParms'=>array('size'=>'block-level' )
      					), 								
															
								               
          "no-image"=>array(
        				'title' => 'No background image, neither default one',
                'type'  => 'boolean',
        				'inuse' => true
      					),
          "background-image-url"=>array(
        				'title' => 'Background Image Path',
                'type'  => 'text',
        				'inuse' => true,
                'writeParms'=>array('size'=>'block-level')
      					), 
          "background-image"=>array(
        				'title' => 'Background Image [if the path is not set]',
                'type'  => 'image',
        				'inuse' => true
      					),                  
  
      ),
   );
?>