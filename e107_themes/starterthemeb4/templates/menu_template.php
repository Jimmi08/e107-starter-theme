<?php
if (!defined('e107_INIT')) { exit; }

#### Panel Template - Used by menu_class.php  for Custom Menu Content.
#### Additional control over image thumbnailing is possible via SETIMAGE e.g. {SETIMAGE: w=200&h=150&crop=1}
  
	$MENU_TEMPLATE['default']['start'] 					= '<div class="card h-100 cpage-menu {CMENUNAME}"> <h4 class="card-header">{CMENUTITLE}</h4>';
	$MENU_TEMPLATE['default']['body'] 					= '<div class="card-body"><p class="card-text">{CMENUBODY}</p></div>'; 
	$MENU_TEMPLATE['default']['end'] 					  = '</div>';

	$MENU_TEMPLATE['button']['start'] 					= '<div class="card h-100 cpage-menu {CMENUNAME}">';
	$MENU_TEMPLATE['button']['body'] 				  	= '<div class="card-body"><p class="card-text">{CMENUBODY}</p></div>';
	$MENU_TEMPLATE['button']['end'] 					  = '<div class="card-footer">{CPAGEBUTTON}</div></div>'; 

	$MENU_TEMPLATE['buttom-image']['start'] 			= '<div class="card h-100 cpage-menu {CMENUNAME}">{SETIMAGE: w=360}';
	$MENU_TEMPLATE['buttom-image']['body'] 				= '<div>{CMENUIMAGE}</div>{CPAGEBUTTON}';
	$MENU_TEMPLATE['buttom-image']['end'] 				= '</div>';

	$MENU_TEMPLATE['image-only']['start'] 				= '<div class="card h-100 cpage-menu {CMENUNAME}">{SETIMAGE: w=360}';
	$MENU_TEMPLATE['image-only']['body'] 				= '{CMENUIMAGE}';
	$MENU_TEMPLATE['image-only']['end'] 				= '</div>';

	$MENU_TEMPLATE['image-text-button']['start'] 		= '<div class="card h-100 cpage-menu {CMENUNAME}">{SETIMAGE: w=360}{CMENUIMAGE}';
	$MENU_TEMPLATE['image-text-button']['body'] 		= '<div class="card-body"><p class="card-text">{CMENUBODY}</p></div>';
	$MENU_TEMPLATE['image-text-button']['end'] 			= '<div class="card-footer">{CPAGEBUTTON}</div></div>'; 
?>