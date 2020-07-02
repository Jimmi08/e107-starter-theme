<?php
/*
* e107 website system
*
* Copyright (C) 2008-2013 e107 Inc (e107.org)
* Released under the terms and conditions of the
* GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
*
* e107 {THEME_NAME} theme
*
* #######################################
* #     e107 website system theme       #
* #     by Jimako                    	 #
* #     https://www.e107sk.com          #
* #######################################
*/

if (!defined('e107_INIT')) { exit; }

e107::lan('theme'); 

////////////////////////////////////////////////////////////////////////////////
class theme implements e_theme_render
{
	var $theme_prefs = array();
        
    function __construct() {
      
    	$theme_prefs = e107::getPref('sitetheme');

		//meta tags examples related to theme 
	  	e107::meta('viewport', 'width=device-width, initial-scale=1, shrink-to-fit=no');
		//e107::meta('viewport', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0');
		//e107::meta('viewport', 'width=device-width, initial-scale=1.0');
		//e107::meta('apple-mobile-web-app-capable','yes');
		//<meta http-equiv="X-UA-Compatible" content="IE=edge">    #4022
		//e107::meta(null, "IE=edge", array('http-equiv' => 'X-UA-Compatible', 'content' => "IE=edge"));

		//remove core css - if you want the control of your css see e107.css - copy part of it to theme if it is still needed
		//see fix.css here
		define("CORE_CSS", false); 

	
		////  HTML assests - FONTS //////////////////////////////////////////////////////////////
        e107::css('url', 	'https://fonts.googleapis.com/css?family=Montserrat:400,700');
        e107::css('url', 	'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
		  
		//// HTML assests - CSS /////////////////////////////////////////////////////////////////
		//check theme.xml for loading bootstrap from core. It could be compiled in css with other name
		//e107::css('url', 	'');
		//e107::css('url', 	'');
		//e107::css('theme', 	'');
		//e107::css('theme', 	'');

		e107::css('theme',  'fix.css');
        e107::css('theme', 	'css/styles.css');
  	    e107::css('theme', 	'css/forum.css');			
  		e107::css('theme', 	'style.css'); //if it is not used in theme.xml  

		//// HTML assests - JAVASCRIPT ////////////////////////////////////////////////////////////
		//e107::js("theme", 	'', 'jquery');
		//e107::js("theme", 	'', 'jquery');
		//e107::js("theme", 	'', 'jquery'); 
		//e107::js("theme", 	'custom.js', 'jquery');

		e107::js("theme", 	"js/bootstrap.bundle.min.js", "jquery");
		e107::js("theme", 	"js/jquery.easing.min.js", "jquery");
		//// Custom fixes //////////////////////////////////////////////////////////////
		e107::js("theme", 	'fix.js', 'jquery'); 
		e107::js("theme", 	'js/scripts.js', 'jquery'); 

		//// examples for IE 9 fix    ///////////////////////////////////////////////////
		//e107::js('url','https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js','','2','<!--[if lt IE 9]>','');
		//e107::js('url','https://oss.maxcdn.com/respond/1.4.2/respond.min.js','','2','','<![endif]-->');
		//e107::js('url','https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js','','2','<!--[if lt IE 9]>','');
		//e107::js('theme','assets/js/respond.js','','2','','<![endif]-->');
 
		/* example for generated css code, theme needs support this */
        /* if($theme_prefs['use_hoverdropdowm']) {
            $code = '
            .dropdown:hover>.dropdown-menu {
            	display: block;
            }  
            .dropdown>.dropdown-toggle:active {
                pointer-events: none;
            }';
            e107::css("inline", $code);
		} */
		
		/* if theme have inline css or js options */
		$this->getInlineCodes();

        if(e_PAGE == "login.php") {
        	define("e_IFRAME","0");  
        }
	}

	function getInlineCodes() 
	{
		$inlinecss = e107::pref('theme', 'custom_css', FALSE);
		if($inlinecss) { 
			e107::css("inline", $inlinecss);
		}
		/* 
		$inlinejs = e107::pref('theme', 'inlinejs');
		if($inlinejs) { 
			e107::js("footer-inline", $inlinejs);
		}
		*/
	}

	/**
	 * @param string 
	 * @example  []Heading 1
	 * @example  [Heading2] 
	 * @return empty string if correct syntax is used
	 */
	function checkcaption( $caption = '' ) 
	{
		// get rid of any leading and trailing spaces
		$title = trim( $caption );
		// check the first and last character, if [ and ] set the title to empty  - this always doesn't work because admin stuff in captions
		if ( $title[0]== '[' && $title[strlen($title) - 1] == ']' ) $title = '';   
		// so just put [] at the beginning of menu title
		if ( $title[0]== '[' && $title[1] == ']' ) $title = '';  
		return $title;
	}

	/**
	 * @param string 
	 * @return string without p tags added always with bbcodes
	 * note: this solves W3C validation issue and CSS style problems
	 * use this carefully, mainly for custom menus, let decision on theme developers
	 */

	function remove_ptags($text = '') // FIXME this is a bug in e107 if this is required.
	{
		$text = str_replace(array("<!-- bbcode-html-start --><p>", "</p><!-- bbcode-html-end -->"), "", $text);
		return $text;
	}

	/**
	 * @param string 
	 * @param string 
	 * @param string  : id of the current render
	 * @param array  : current style and other menu data.
	 */
	function tablestyle($caption, $text, $mode = '', $options = array())
	{

		$style = varset($options['setStyle'], 'default');
		
		if(e_DEBUG) {
			echo "
            <!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->       
            ";
		}
		// simplify switch for tablestyle - use only $style, no $id, no $mode - easier to maintain and copy
		switch($mode) 
		{
			case "wmessage":
			case "wm":
				$style = "wm";
			break;
			case "nocaption":
				$style = $mode;
			case "contact-menu":
			case "contact-form":
			case "contactus_form":
				$style = "default";
			break;
		}

		//real used tablestyle 
		if(e_DEBUG) {
		echo "
              <!-- tablestyle:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->              
              ";
		echo "<!--";

		echo json_encode($options, JSON_PRETTY_PRINT);

		echo "-->";
		}
		
		//way how to rid caption by inserting correct data 
		$caption = $this->checkcaption($caption);

		switch($style)
		{
			case "wm":
				echo '<div class="masthead-subheading">'.$caption.'</div>';
				echo '<div class="masthead-heading text-uppercase">'.$text.'</div>';
			break;
                
            case "singleform" :
			if(!empty($caption))
			{
				echo '<h1 class="display-5">'.$caption.'</h1>';
			}
			echo $text;
                
			case "footer":
			break;

			case 'notitle':
			case 'nocaption':
				echo $text;
			break;

			case 'notags':
			case 'bare':	
				echo  $this->remove_ptags($text) ;
				return;
			break;

			case "main" :  //recommended for home layout
				if(!empty($caption))
				{
					echo '<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">'.$caption.'</h2>';
					echo '
					<div class="divider-custom">
						<div class="divider-custom-line"></div>
						<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
						<div class="divider-custom-line"></div>
					</div>'; 
				}
				echo $text;
			return;

			case "default" : //recommended for all other layouts
				if(!empty($caption))
				{
					echo '<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">'.$caption.'</h2>';
					echo '
					<div class="divider-custom">
						<div class="divider-custom-line"></div>
						<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
						<div class="divider-custom-line"></div>
					</div>'; 
				}
				echo $text;
				return;
			break;

			default:  // it is not the same as style default, only sometimes 
			if(!empty($caption))
			{
				echo '<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">'.$caption.'</h2>';
                echo '
				<div class="divider-custom">
					<div class="divider-custom-line"></div>
					<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
					<div class="divider-custom-line"></div>
				</div>'; 
			}
			echo $text;
			return;	
		}
	}
}