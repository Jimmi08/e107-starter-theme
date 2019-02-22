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

 
define('VIEWPORT', 		"width=device-width, initial-scale=1.0");
/* example for set specific body class  */
//define('BODYTAG', '<body class="body-class '.THEME_LAYOUT.'">');


 
// load translated strings
e107::lan('theme');

// applied before every layout.
$LAYOUT['_header_'] = '
{NAVIGATION}';

// applied after every layout. 
$LAYOUT['_footer_'] = '
{SETSTYLE=footer}
<div>{MENU=31}</div>';



// $LAYOUT is a combined $HEADER and $FOOTER, automatically split at the point of "{---}"

$LAYOUT['homepage'] = '
{SETSTYLE=homepage}
{FEATUREBOX}
<div>
{ALERTS} 
{MENU=1} 
{---} 
{MENU=2} 
</div>
';
 

$LAYOUT['full'] = '  
{SETSTYLE=full}
<div>	
  {ALERTS}
  {MENU=3}
  {---}
  {MENU=4}
</div>';

$LAYOUT['sidebar_right'] =  '   
 
<div>	  
 {ALERTS}   
	<div id="main">    
		<div id="content">	
     {SETSTYLE=main}    
		 {---}     
		</div>    
		<div id="sidebar">      
			{SETSTYLE=sidebar}       
			{MENU=5}       
		</div>  
	</div>
</div>';

$LAYOUT['sidebar_left'] =  $LAYOUT['sidebar_right'];


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
	
 	
	if($style == 'homepage')
	{
  	if(!empty($caption))
  	{
  		echo '<h2 class="caption">'.$caption.'</h2>';
  	} 
  	echo $text;
		return;		
	}	

	if($style == 'full')
	{
  	if(!empty($caption))
  	{
  		echo '<h2 class="caption">'.$caption.'</h2>';
  	} 
  	echo $text;
		return;		
	}

	if($style == 'main')
	{
  	if(!empty($caption))
  	{
  		echo '<h2 class="caption">'.$caption.'</h2>';
  	} 
  	echo $text;
		return;		
	}

	if($style == 'sidebar')
	{
  	if(!empty($caption))
  	{
  		echo '<h2 class="caption">'.$caption.'</h2>';
  	} 
  	echo $text;
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
 
 
?>
