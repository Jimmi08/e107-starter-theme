<?php
/*
* Copyright (c) 2012 e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id: e_shortcode.php 12438 2011-12-05 15:12:56Z secretr $
*
* Navigation Template 
*/

 
// TEMPLATE FOR {NAVIGATION=main}
$NAVIGATION_TEMPLATE['main']['start'] = '<ul class="navbar-nav ml-auto">';

// Main Link
$NAVIGATION_TEMPLATE['main']['item'] = '
	<li class="nav-item">
		<a class="nav-link" role="button" href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">
		 {LINK_ICON}{LINK_NAME} 
		</a> 
	</li>
';

// Main Link - active state
$NAVIGATION_TEMPLATE['main']['item_active'] = '
	<li class="nav-item active">
		<a class="nav-link e-tip" role="button"  data-target="#" href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">
		 {LINK_ICON} {LINK_NAME}
		</a>
	</li>
';

// Main Link which has a sub menu. 
$NAVIGATION_TEMPLATE['main']['item_submenu'] = '
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle"  id="navbarDropdown{LINK_IDENTIFIER}"  role="button" data-toggle="dropdown" data-target="#" href="{LINK_URL}" title="{LINK_DESCRIPTION}">
		 {LINK_ICON}{LINK_NAME} 
		</a> 
		{LINK_SUB}
	</li>
';

// Main Link which has a sub menu - active state.
$NAVIGATION_TEMPLATE['main']['item_submenu_active'] = '
	<li class="nav-item dropdown active">
		<a class="nav-link dropdown-toggle"  id="navbarDropdown{LINK_PARENT}"  role="button" data-toggle="dropdown" data-target="#" href="{LINK_URL}" title="{LINK_DESCRIPTION}">
		 {LINK_ICON}{LINK_NAME} 
		</a> 
		{LINK_SUB}
	</li>
';	

$NAVIGATION_TEMPLATE['main']['end'] = '</ul>';	

// Sub menu 
$NAVIGATION_TEMPLATE['main']['submenu_start'] = '
		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown{LINK_IDENTIFIER}">
';

// Sub menu Link 
$NAVIGATION_TEMPLATE['main']['submenu_item'] = '
				<a class=" dropdown-item" href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
';

// Sub menu Link - active state
$NAVIGATION_TEMPLATE['main']['submenu_item_active'] = '
				<a class=" dropdown-item active" href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
';
$NAVIGATION_TEMPLATE['main']['submenu_end'] = '</div>';

// Sub menu
$NAVIGATION_TEMPLATE['main']['submenu_lowerstart'] = '';

// Sub Menu Link which has a sub menu. 
$NAVIGATION_TEMPLATE['main']['submenu_loweritem'] = '';

$NAVIGATION_TEMPLATE['main']['submenu_loweritem_active'] = '';


$NAVIGATION_TEMPLATE['main']['submenu_lowerend'] = '';
 
// standard one line footer links - horizontal navigation  1 level
$NAVIGATION_TEMPLATE["footer"]["start"] 				=  '<nav class="nav justify-content-center">';
$NAVIGATION_TEMPLATE["footer"]["item"] 					= '<a class="nav-link"  href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a> ';
$NAVIGATION_TEMPLATE["footer"]["item_submenu"] 			= '<a class="nav-link" href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a> ';
$NAVIGATION_TEMPLATE["footer"]["item_active"] 			= '<a class="nav-link  active" href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a> ';
$NAVIGATION_TEMPLATE["footer"]["end"] 					= "</nav>";
$NAVIGATION_TEMPLATE["footer"]["submenu_start"] 		= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_item"]			= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_loweritem"] 	= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_item_active"] 	= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_end"] 			= "";


// footer column links - vertical navigation , 1 level
$NAVIGATION_TEMPLATE["alt"] = $NAVIGATION_TEMPLATE["footer"];
$NAVIGATION_TEMPLATE["alt"]["start"] 				=  '<nav class="nav flex-column">';


?>