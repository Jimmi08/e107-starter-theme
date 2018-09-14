<?php

if (!defined('e107_INIT')) { exit; }

class theme_config implements e_theme_config
{
	function config()
	{
		$fields = array(
			'sitelogo_basic'  	  => array('title' => 'Classic site logo (white background)', 'type'=>'image', 'help'=>''),
			'sitelogo_white'      => array('title' => 'White site logo (dark background)', 'type'=>'image', 'help'=>''),
			'sitelogo_colored'    => array('title' => 'Colored site logo', 'type'=>'image', 'help'=>''),		
 		);

		return $fields;
	}
	function help()
	{
	 	return '';
	}
}

?>