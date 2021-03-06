<?php

if (!defined('e107_INIT')) { exit; }    

$sitetheme = e107::getPref('sitetheme');

e107::themeLan('admin', $sitetheme, true);

if(isset($_POST['importThemeDemo']))
{
	$xmlArray = array();
	e107::getDebug()->log("Retrieving demo data from xml file");
	$themepath = e_THEME.$sitetheme."/install/install.xml"; 
	$xmlArray = e107::getSingleton('xmlClass')->loadXMLfile($themepath); 
	$ret = e107::getSingleton('xmlClass')->e107Import($xmlArray);
	if($ret)
	{
		$mes = e107::getMessage();
		$mes->add("Importing Theme Demo Content:", E_MESSAGE_SUCCESS);
	}
	
	$mes->render();
}

 
class theme_config implements e_theme_config
{

  var $filter_color = '';

	function __construct()
	{
	$this->filter_colors = "purple,blue,green,orange,red,rose"; 
	}
 
	function config()
	{
		$fields = array(
			'cardmenu_look' => array('title' => LAN_THEMEPREF_04, 'type'=>'boolean', 'writeParms'=>array(),'help'=>''),			
			'login_iframe' => array('title' => LAN_THEMEPREF_06, 'type'=>'boolean', 'writeParms'=>array(),'help'=>''), 	
			'signup_extended' => array('title' => LAN_THEMEPREF_07, 'type'=>'boolean', 'writeParms'=>array(),'help'=>''),
			'filter_color' => array('title' => LAN_THEMEPREF_08, 'data'=>'str', 'noedit'=>true, 'type' => 'tags',
			 'writeParms'=>array('default'=>$this->filter_colors, 'size'=>'block-level') ),		
			'map'  	=> array('title' => LAN_THEMEPREF_05, 'type'=>'textarea', 'writeParms'=>array('size'=>'block-level'),'help'=>''),	
			'inlinecss'  	=> array('title' => LAN_THEMEPREF_01, 'type'=>'textarea', 'writeParms'=>array('size'=>'block-level'),'help'=>''),
			'inlinejs'  	=> array('title' => LAN_THEMEPREF_02, 'type'=>'textarea', 'writeParms'=>array('size'=>'block-level'),'help'=>''),	
		);
		return $fields;
	}

	function help()
	{
		/* only if install.xml exists */
		/* check if all required plugins are installed */
		
		$text = "<div class='center buttons-bar'><form method='post' action='".e_SELF."?".e_QUERY."' id='core-db-import-form'>";
		$text .=  e107::getForm()->admin_button('importThemeDemo', 'Install Demo', 'other');
		$text .= '</form></div>';
 
	 	return $text;
	}
	
	function process()
	{
	 	return '';
	}

}

