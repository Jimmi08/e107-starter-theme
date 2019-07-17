<?php

if(!defined('e107_INIT'))
{
	exit();
}

e107::lan('theme');

e107::meta('viewport', 'width=device-width, initial-scale=1.0');
//e107::meta('apple-mobile-web-app-capable','yes');


$bootswatch = e107::pref('theme', 'bootswatch', false);
if($bootswatch) {
	e107::css('url', 'https://bootswatch.com/4/' . $bootswatch . '/bootstrap.min.css');
	e107::css('url', 'https://bootswatch.com/4/' . $bootswatch . '/bootstrap.min.css');
}

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

e107::js("theme", 'custom.js', 'jquery');

$login_iframe  = e107::pref('theme', 'login_iframe', false);
if(THEME_LAYOUT == "singlelogin" && $login_iframe )  {
  define('e_IFRAME','0');  
}
if(THEME_LAYOUT == "singlesignup" && $login_iframe )  {
  define('e_IFRAME','0');  
}

	class bootstrap4_theme
	{

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


			if($mode == 'wmessage' OR $mode == 'wm')
			{
				$style = 'wmessage';
			}
 
			
			if($style === 'listgroup' && empty($options['list']))
			{
				$style = 'cardmenu';
			}

 
			if($style === 'cardmenu' && !empty($options['list']))
			{
				$style = 'listgroup';
			}
    
      // in iframe SETSTYLE is ignored
			if($mode === 'login_page'  )
			{                  
				$style = 'singlelogin';
			}
			if($mode === 'fpw'  )
			{                  
				$style = 'singlelogin';
			}
			if($mode === 'coppa'  )
			{                  
				$style = 'singlelogin';
			}
			if($mode === 'signup'  )
			{                  
				$style = 'singlelogin';
			}      
      
            			
			/* Changing card look via prefs */
			if(!e107::pref('theme', 'cardmenu_look') && $style == 'cardmenu')
			{
				$style = 'menu';
			}

			echo "\n<!-- tablestyle:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->\n\n";

			echo "\n<!-- \n";

			echo json_encode($options, JSON_PRETTY_PRINT);

			echo "\n-->\n\n";

			switch($style)
			{

				/*  case 'home':
					  echo $caption;
					  echo $text;
				  break;

				  case 'menu':
					  echo $caption;
					  echo $text;
				  break;

				  case 'full':
					  echo $caption;
					  echo $text;
				  break;
		*/
		
				case 'wmessage':		
		    echo '<div class="jumbotron"><div class="container text-center">';
		        if(!empty($caption))
		        {
		          echo '<h1 class="display-4">'.$caption.'</h1>';
		        }
		       
		    echo '<p class="lead">'.$this->remove_ptags($text).'</p>';
		    echo '</div></div>';
        	break;
    
				case 'bare':
					echo $this->remove_ptags($text);
					break;


				case 'nocaption':
				case 'main':
					echo $text;;
					break;


				case 'menu':
					echo '<div class=" mb-4">';
					if(!empty($caption))
					{
						echo '<h5 >' . $caption . '</h5>';
					}
					echo $text;
					echo '</div>';
					break;


				case 'cardmenu':
					echo '<div class="card mb-4">';
					if(!empty($caption))
					{
						echo '<h5 class="card-header">' . $caption . '</h5>';
					}
					echo '<div class="card-body">';
					echo $text;
					echo '</div>
						</div>';
					break;


				case 'listgroup': 
					echo '<div class="card mb-4">';
					if(!empty($caption))
					{
						echo '<h5 class="card-header">' . $caption . '</h5>';
					}
					echo $text;

					if(!empty($options['footer'])) // XXX @see news-months menu.
			        {
			            echo '<div class="card-footer">
		                      '.$options['footer'].'
		                    </div>';
			        }


					echo '</div>';
					break;
          
         case 'singlelogin': {   
         echo '<div class="container  justify-content-center text-center my-5" id="fpw-page">
                 <div class="row  align-items-center">';
          
            echo '<div class="card card-signin col-md-6 offset-md-3 " id="login-template"><div class="card-body">';
  					if(!empty($caption))
  					{
  						echo '<h5 class="card-title text-center">' . $caption . '</h5>';
  					}
  					echo $text;    
  					if(!empty($options['footer'])) // XXX @see news-months menu.
  			        {
  			            echo '<div class="card-footer">
  		                      '.$options['footer'].'
  		                    </div>';
  			        }
  					echo '</div></div>';
            echo '</div></div>';
  					break;                
         }

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
