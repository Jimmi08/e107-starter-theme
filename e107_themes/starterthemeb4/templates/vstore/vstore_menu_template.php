<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */     

	$VSTORE_MENU_TEMPLATE = array();

	// Catiegories menu
	$VSTORE_MENU_TEMPLATE['categories']['start'] = '
    <ul class="vstore-categories list-group list-group-flush">
    ';

	$VSTORE_MENU_TEMPLATE['categories']['end'] = '
    </ul>
    ';

	$VSTORE_MENU_TEMPLATE['categories']['item'] = '
    <li class="list-group-item {MENU_CAT:active}"><a href="{MENU_CAT:url}" class="vstore-categories-item {MENU_CAT:active}">
        {MENU_CAT:name}</a></li>
  
    
    ';

