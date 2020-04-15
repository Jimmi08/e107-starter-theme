<?php

if(!defined('e107_INIT'))
{
	exit();
}

////// not load backcompat.css   /////////////////////////////////////////////////

//define("BOOTSTRAP", 	4);
//define("CORE_CSS", false);

////// Multilanguages/ /////////////////////////////////////////////////////////

e107::lan('theme');

////// Theme meta tags /////////////////////////////////////////////////////////

e107::meta('viewport', 'width=device-width, initial-scale=1.0');
//e107::meta('viewport', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0');

//e107::meta('apple-mobile-web-app-capable','yes');
 
//<meta http-equiv="X-UA-Compatible" content="IE=edge">    #4022
//e107::meta(null, "IE=edge", array('http-equiv' => 'X-UA-Compatible', 'content' => "IE=edge"));

////////////////////////////////////////////////////////////////////////////////

//// css and js from theme preferencies ////////////////////////////////////////
 
$inlinecss = e107::pref('theme', 'inlinecss', false);
if($inlinecss)
{
	e107::css("inline", $inlinecss);
}
$inlinejs = e107::pref('theme', 'inlinejs');
if($inlinejs)
{
	e107::js("footer-inline", $inlinejs);
}


//// Core fix //////////////////////////////////////////////////////////////
e107::js("theme", "custom/alert.js", 'jquery');

//// HTML assests //////////////////////////////////////////////////////////////

//e107::css('url', 	'');
//e107::css('url', 	'');
//e107::css('theme', 	'');
//e107::css('theme', 	'');

//e107::js("theme", 	'', 'jquery');
//e107::js("theme", 	'', 'jquery');
//e107::js("theme", 	'', 'jquery'); 
//e107::js("theme", 	'custom.js', 'jquery'); 


//// examples for IE 9 fix    ///////////////////////////////////////////////////
 
//e107::js('url','https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js','','2','<!--[if lt IE 9]>','');
//e107::js('url','https://oss.maxcdn.com/respond/1.4.2/respond.min.js','','2','','<![endif]-->');
//e107::js('url','https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js','','2','<!--[if lt IE 9]>','');
//e107::js('theme','assets/js/respond.js','','2','','<![endif]-->');

//// Custom fixes //////////////////////////////////////////////////////////////

e107::js("theme", 'custom.js', 'jquery');

////////////////////////////////////////////////////////////////////////////////

 
//// Login adn Register settings ///////////////////////////////////////////////

$login_iframe  = e107::pref('theme', 'login_iframe', false);
if(THEME_LAYOUT == "singlelogin")  {
   if($login_iframe) { define('e_IFRAME','0');  }
   else { define('e_IFRAME','1'); }
}

////////////////////////////////////////////////////////////////////////////////
class your_theme_folder_theme
{

    private $debug = false;
	/**
	 * @param string $text
	 * @return string without p tags added always with bbcodes
	 * note: this solves W3C validation issue and CSS style problems
	 * use this carefully, mainly for custom menus, let decision on theme developers
	 */

	function remove_ptags($text = '') // FIXME this is a bug in e107 if this is required.
	{

		$text = str_replace(array("<!-- bbcode-html-start --><p>", "</p><!-- bbcode-html-end -->"), "", $text);

		return $text;
	}


	function tablestyle($caption, $text, $mode, $options = array())
	{

		$style = varset($options['setStyle'], 'default');
		
		//this should be displayed only in e_debug mode
		
		echo "\n<!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->\n\n";
        
        

        switch($mode) 
        {
          case "wmessage":
          case "wm":
          $style = "wmessage";
         
        }
        
        
		echo "\n<!-- tablestyle:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->\n\n";

		echo "\n<!-- \n";

		echo json_encode($options, JSON_PRETTY_PRINT);

		echo "\n-->\n\n";
        
        
        
 		switch($style)
		{
        
                case "default" :
				if(!empty($caption))
				{
					echo '<h3 class="text-heading">' . $caption . '</h3>';
				}
				echo $text;
                break;
 
    			case 'nocaption':
    			case 'main':
    			echo $text;;
    			break;
                
            	case 'bare':
				echo $this->remove_ptags($text);
				break;

               	default:

				// default style
				// only if this always work, play with different styles

				if(!empty($caption))
				{
					echo '<div class="my-4">' . $caption . '</div>';
				}
				echo $text;

				return;
        
        }
                              


 
	 

	}

}
