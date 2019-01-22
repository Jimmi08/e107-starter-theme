<?php
/*
* Copyright (c) 2012 e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id: e_shortcode.php 12438 2011-12-05 15:12:56Z secretr $
*
* Navigation Template 
*/

 
// TEMPLATE FOR {NAVIGATION=main}
$NAVIGATION_TEMPLATE['main']['start'] = '<ul class="navbar-nav mr-auto">';

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
		<a class="nav-link dropdown-toggle"  aria-haspopup="true" aria-expanded="false"  data-toggle="dropdown" data-target="#" href="{LINK_URL}" title="{LINK_DESCRIPTION}">
		 {LINK_ICON}{LINK_NAME} 
		</a> 
		{LINK_SUB}
	</li>
';

// Main Link which has a sub menu - active state.
$NAVIGATION_TEMPLATE['main']['item_submenu_active'] = '
	<li class="nav-item dropdown active">
		<a class="nav-link dropdown-toggle"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-target="#" href="{LINK_URL}">
		 {LINK_ICON}{LINK_NAME}
		</a>
		{LINK_SUB}
	</li>
';	

$NAVIGATION_TEMPLATE['main']['end'] = '</ul>';	

// Sub menu 
$NAVIGATION_TEMPLATE['main']['submenu_start'] = '<div class="dropdown-menu" aria-labelledby="{LINK_DEPTH}">';

// Sub menu Link 
$NAVIGATION_TEMPLATE['main']['submenu_item'] = ' 
	<a class="dropdown-item" href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
';

// Sub menu Link - active state
$NAVIGATION_TEMPLATE['main']['submenu_item_active'] = '
  <a class="dropdown-item active" href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
';
$NAVIGATION_TEMPLATE['main']['submenu_end'] = '</div>';

// Sub menu
$NAVIGATION_TEMPLATE['main']['submenu_lowerstart'] = '
		<ul class="dropdown-menu submenu-start lower submenu-level-{LINK_DEPTH}" role="menu" >
';
 
// TEMPLATE FOR {NAVIGATION=sidebar}

$NAVIGATION_TEMPLATE['sidebar']['start'] 				= '<ul class="nav">
														';

$NAVIGATION_TEMPLATE['sidebar']['item'] 				= '<li class="nav-item">
<a class="nav-link" href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';
$NAVIGATION_TEMPLATE['sidebar']['item_active'] 		= '<li class="nav-item active"{LINK_OPEN}>
<a class="nav-link active" href="{LINK_URL}" title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>';


$NAVIGATION_TEMPLATE['sidebar']['item_submenu'] 		= '
<li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#link-{LINK_ID}">
              {LINK_ICON}
              <p> {LINK_NAME}
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="link-{LINK_ID}">{LINK_SUB}</div>
</li>';
 
$NAVIGATION_TEMPLATE['sidebar']['item_submenu_active'] 		= '
<li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#link-{LINK_ID}" aria-expanded="true">
              {LINK_ICON}
              <p> {LINK_NAME}
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse show" id="link-{LINK_ID}">{LINK_SUB}</div>
</li>';

$NAVIGATION_TEMPLATE['sidebar']['end'] 				= '</ul>
														';

$NAVIGATION_TEMPLATE['sidebar']['submenu_start'] 		= '<ul class="nav">';

$NAVIGATION_TEMPLATE['sidebar']['submenu_item']		= '
<li class="nav-item" ><a class="nav-link"  href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['sidebar']['submenu_item_active']		= '
<li class="nav-item active" ><a class="nav-link"  href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['sidebar']['submenu_loweritem'] = '
			<li role="menuitem"  class="nav-item">
				<a class="nav-link"  href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				{LINK_SUB}
			</li>
';

$NAVIGATION_TEMPLATE['side']['submenu_loweritem_active'] = '<li class="nav-item active"><a class="nav-link"  href="{LINK_URL}">{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['side']['submenu_end'] 		= '</ul>';



// TEMPLATE FOR {NAVIGATION=side}

$NAVIGATION_TEMPLATE['side']['start'] 				= '<ul class="listgroup nav-side">
														';

$NAVIGATION_TEMPLATE['side']['item'] 				= '<li class="list-group-item"><a href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['side']['item_submenu'] 		= '<li class="nav-header">{LINK_ICON}{LINK_NAME}{LINK_SUB}</li>
														';

$NAVIGATION_TEMPLATE['side']['item_active'] 		= '<li class="list-group-item active"{LINK_OPEN}><a class="list-group-item active" href="{LINK_URL}" title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['side']['end'] 				= '</ul>
														';

$NAVIGATION_TEMPLATE['side']['submenu_start'] 		= '';

$NAVIGATION_TEMPLATE['side']['submenu_item']		= '<li class="list-group-item" ><a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['side']['submenu_loweritem'] = '
			<li role="menuitem" class="dropdown-submenu">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				{LINK_SUB}
			</li>
';

$NAVIGATION_TEMPLATE['side']['submenu_item_active'] = '<li class="active"><a href="{LINK_URL}">{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['side']['submenu_end'] 		= '';


// Footer links.  

$NAVIGATION_TEMPLATE["footer"]["start"] 				= '<ul class="nav">';
$NAVIGATION_TEMPLATE["footer"]["item"] 					=  '<li class="nav-item"><a href="{LINK_URL}" {LINK_OPEN} class="nav-link" title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>';
$NAVIGATION_TEMPLATE["footer"]["item_submenu"] 			= "";
$NAVIGATION_TEMPLATE["footer"]["item_active"] 			= '<li class="nav-item active"><a href="{LINK_URL}" {LINK_OPEN} class="nav-link" title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>';
$NAVIGATION_TEMPLATE["footer"]["end"] 					= '</ul>';
$NAVIGATION_TEMPLATE["footer"]["submenu_start"] 		= '';
$NAVIGATION_TEMPLATE["footer"]["submenu_item"]			= '';
$NAVIGATION_TEMPLATE["footer"]["submenu_loweritem"] 	= '';
$NAVIGATION_TEMPLATE["footer"]["submenu_item_active"] 	= '';
$NAVIGATION_TEMPLATE["footer"]["submenu_end"] 			= '';


$NAVIGATION_TEMPLATE['alt']['start'] 				= '<ul class="nav nav-list">
														';

$NAVIGATION_TEMPLATE['alt']['item'] 				= '<li><a href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['alt']['item_submenu'] 		= '<li class="nav-header">{LINK_ICON}{LINK_NAME}{LINK_SUB}</li>
														';

$NAVIGATION_TEMPLATE['alt']['item_active'] 		= '<li class="active"{LINK_OPEN}><a href="{LINK_URL}" title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['alt']['end'] 				= '</ul>
														';

$NAVIGATION_TEMPLATE['alt']['submenu_start'] 		= '';

$NAVIGATION_TEMPLATE['alt']['submenu_item']		= '<li><a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['alt']['submenu_loweritem'] = '
			<li role="menuitem" class="dropdown-submenu">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				{LINK_SUB}
			</li>
';

$NAVIGATION_TEMPLATE['alt']['submenu_item_active'] = '<li class="active"><a href="{LINK_URL}">{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['alt']['submenu_end'] 		= '';


$NAVIGATION_TEMPLATE['alt5'] 						= $NAVIGATION_TEMPLATE['alt'];
$NAVIGATION_TEMPLATE['alt6'] 						= $NAVIGATION_TEMPLATE['alt'];

$NAVIGATION_TEMPLATE['alt5']['start'] 				= '<ul class="nav nav-list nav-alt5">';
$NAVIGATION_TEMPLATE['alt6']['start'] 				= '<ul class="nav nav-list nav-alt6">';




?>