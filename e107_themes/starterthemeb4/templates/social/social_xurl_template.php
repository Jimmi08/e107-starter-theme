<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */



	/**
	 * {XURL_ICONS} template
	 */
	 $SOCIAL_XURL_TEMPLATE['default']['start'] = '<p class="xurl-social-icons hidden-print">';
	 $SOCIAL_XURL_TEMPLATE['default']['item'] = '<a target="_blank" href="{XURL_ICONS_HREF}" data-tooltip-position="top" class="e-tip social-icon social-{XURL_ICONS_ID}" title="{XURL_ICONS_TITLE}"><span class="fa fa-fw fa-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a>';
	 $SOCIAL_XURL_TEMPLATE['default']['end'] = '</p>';

	/**
	 * {XURL_ICONS} template
	 */
	 
	 $SOCIAL_XURL_TEMPLATE['footer']['start'] = '<div class="d-flex justify-content-center"><ul class="list-inline social-buttons">';
	 $SOCIAL_XURL_TEMPLATE['footer']['item'] = ' 
 <a class="btn btn-primary m-1"  title="{XURL_ICONS_TITLE}"><i class="fab fa-{XURL_ICONS_ID}"></i></a> ';
	 $SOCIAL_XURL_TEMPLATE['footer']['end'] = '</ul></div>';
