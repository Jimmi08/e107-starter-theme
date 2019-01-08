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
	 $SOCIAL_XURL_TEMPLATE['default']['start'] = '<ul class="socials-about">';
	 $SOCIAL_XURL_TEMPLATE['default']['item'] = '
   <li><a href="{XURL_ICONS_HREF}" target="_blank"  title="{XURL_ICONS_TITLE}"><i class="fa fa-{XURL_ICONS_ID}"></i></a></li>';
	 $SOCIAL_XURL_TEMPLATE['default']['end'] = '</ul>'; 
 
                
	 $SOCIAL_XURL_TEMPLATE['contact']['start'] = '<div class="social-buttons">';
	 $SOCIAL_XURL_TEMPLATE['contact']['item'] = '
    <a class="btn btn-social btn-simple" href="{XURL_ICONS_HREF}" target="_blank"  title="{XURL_ICONS_TITLE}"><i class="fa fa-{XURL_ICONS_ID}"></i></a> '; 
	 $SOCIAL_XURL_TEMPLATE['contact']['end'] = '</div>';

 
   // if you need caption, use shortcode menu with  {XURL_ICONS: template=footer}    
	/* <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                <i class="fab fa-twitter"></i>
              </a> */                                            
	 $SOCIAL_XURL_TEMPLATE['footer']['start'] = '<h3 class="title">Follow us:</h3><div class="btn-wrapper profile">';
	 $SOCIAL_XURL_TEMPLATE['footer']['item'] = ' 
   <a  class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip"   data-original-title="Follow us" 
	  href="{XURL_ICONS_HREF}" target="_blank" title="{XURL_ICONS_TITLE}">
     <i class="fab fa-{XURL_ICONS_ID}"></i>  
   </a>
   </li>';
	 $SOCIAL_XURL_TEMPLATE['footer']['end'] = '</div>';
	 
 
	 $SOCIAL_XURL_TEMPLATE['footer-small']['start'] = '  ';
	 $SOCIAL_XURL_TEMPLATE['footer-small']['item'] = ' 
   <a class="btn btn-social btn-{XURL_ICONS_ID} btn-simple"  href="{XURL_ICONS_HREF}" target="_blank" title="{XURL_ICONS_TITLE}">
     <i class="fa fa-{XURL_ICONS_ID}"></i> 
   </a>
   ';
	 $SOCIAL_XURL_TEMPLATE['footer-small']['end'] = ' ';	 