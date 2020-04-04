<?php

/**
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * @file
 * Bootstrap 3 Theme for e107 v2.x.
 */
 

if(!defined('e107_INIT'))
{
	exit;
}

define("BOOTSTRAP", 	3);
define("FONTAWESOME", 	4);
define('VIEWPORT', 		"width=device-width, initial-scale=1.0");
/* example for set specific body class  */
//define('BODYTAG', '<body class="body-class '.THEME_LAYOUT.'">');


if(!defined('e_SEARCH')) {  
  define('e_SEARCH', e_HTTP.'search.php');
}

// load libraries 
e107::library('load', 'bootstrap');
e107::library('load', 'fontawesome');

/* example you need this if your login page has header and footer */
// if((strpos(e_REQUEST_URI, 'login') !== false)) {define('e_IFRAME','0');}


/* example load custom css */
//e107::css("theme", "css/style.css");

/* example load google fonts */
//e107::css("url", "//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400");


/* example when you need different assets for diffent layout 
if(THEME_LAYOUT == 'homepage') {
	e107::js("theme", "js/wow.js", 'jquery');
}
*/



//e107::js("footer", 	    'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', 'jquery' );
//e107::js("theme", "js/bootstrap.min.js", 'jquery');
//e107::js("theme", "js/jquery.easing.min.js", 'jquery');

//e107::js("theme", "js/scripts.js", 'jquery');

/* example for IE fix
e107::js('url','https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js','','2','<!--[if lt IE 9]>','');
e107::js('url','https://oss.maxcdn.com/respond/1.4.2/respond.min.js','','2','','<![endif]-->');
*/

e107::js("footer-inline", 	"$('.e-tip').tooltip({container: 'body'})"); // activate bootstrap tooltips. 

// Legacy Stuff.
define('OTHERNEWS_COLS',false); // no tables, only divs. 
define('OTHERNEWS_LIMIT', 3); // Limit to 3. 
define('OTHERNEWS2_COLS',false); // no tables, only divs. 
define('OTHERNEWS2_LIMIT', 3); // Limit to 3. 
define('COMMENTLINK', 	e107::getParser()->toGlyph('fa-comment'));
define('COMMENTOFFSTRING', '');
define('PRE_EXTENDEDSTRING', '<br />');

// load translated strings
e107::lan('theme');

 



 
////////////////////////////////////////////////////////////////////////////////
class starter_theme
{
     
         
     /**
     * @param string $caption
     * @example  []Heading 1
     * @example  [Heading2] 
     * @return empty string if correct syntax is used
     */
    function checkcaption( $caption ) 
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
     * @param string $caption
     * @param string $text
     * @param string $id : id of the current render
     * @param array $info : current style and other menu data. 
     */
    function tablestyle($caption, $text, $id='', $info=array()) 
    {
    //	global $style; // no longer needed. 
    	
    	$style = $info['setStyle'];
    	
    	echo "<!-- tablestyle: style=".$style." id=".$id." -->\n\n";
    	
    	$type = $style;
      
    	if(empty($caption))
    	{
    		$type = 'box';
    	}
    	
      /* if no content, no display of html tags */
    	if(empty($text))
    	{
    		return '';
    	}
      
      /* displays only content */  
    	if($style == 'none')
    	{
    		echo $text;
    		return;
    	}
    	
    	if($style == 'jumbotron')
    	{
    		echo '<div class="jumbotron">
          	<div class="container">';
            	if(!empty($caption))
    	        {
    	            echo '<h1>'.$caption.'</h1>';
    	        }
            echo '
            	'.$text.'
          	</div>
        	</div>';	
    		return;
    	}
    	
    	if($style == 'col-md-4' || $style == 'col-md-6' || $style == 'col-md-8')
    	{
    		echo ' <div class="col-xs-12 '.$style.'">';
    		
    		if(!empty($caption))
    		{
                echo '<h2>'.$caption.'</h2>';
    		}
    
    		echo '
              '.$text.'
            </div>';
    		return;	
    		
    	}
    		
    	if($style == 'menu')
    	{
    		echo '<div class="panel panel-default">
    	  <div class="panel-heading">'.$caption.'</div>
    	  <div class="panel-body">
    	   '.$text.'
    	  </div>
    	</div>';
    		return;
    		
    	}	
    
    	if($style == 'portfolio')
    	{
    		 echo '
    		 <div class="col-lg-4 col-md-4 col-sm-6">
                '.$text.'
    		</div>';	
    		return;
    	}
    
    
    
    	// default.
    
    	if(!empty($caption))
    	{
    		echo '<h2 class="caption">'.$caption.'</h2>';
    	}
    
    	echo $text;
    
    
    					
    	return;
    	
    	
    	
    } 
} 
 
// News item styling
$NEWSSTYLE = '
{NEWSTITLE}
{NEWSAUTHOR}
{NEWSDATE=short}
{NEWSIMAGE}
{NEWSBODY} {EXTENDED}

';

// Comment Styling
$COMMENTSTYLE = '
{AVATAR} 
{USERNAME}
{REPLY}
{TIMEDATE}
{COMMENT} 
';

// news.php?cat.1
$NEWSLISTSTYLE = '
{NEWSTITLE}
{NEWSDATE=short}
{NEWSAUTHOR}
{NEWSIMAGE}
{NEWSBODY} 
{EXTENDED}
{EMAILICON} 
{PRINTICON}
{PDFICON}
{ADMINOPTIONS}
{NEWSCOMMENTS}
';

$NEWSARCHIVE ='
{ARCHIVE_BULLET}
{ARCHIVE_LINK}
{ARCHIVE_AUTHOR}
{ARCHIVE_DATESTAMP}
{ARCHIVE_CATEGORY}
';
//Render news categories on the bottom of the page
$NEWSCAT = '
{NEWSCATEGORY}
{NEWSCAT_ITEM}
';
//Loop for news items in category
$NEWSCAT_ITEM = '
{NEWSTITLELINK}
    
';

?>
