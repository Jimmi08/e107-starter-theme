<?php
/**
 * Bootstrap 3 Theme for e107 v2.x
 */
if (!defined('e107_INIT')) { exit; }

define("BOOTSTRAP", 	3);
define("FONTAWESOME", 	4);
define('VIEWPORT', 		"width=device-width, initial-scale=1.0");


/* @see https://www.cdnperf.com */
// Warning: Some bootstrap CDNs are not compiled with popup.js
// use https if e107 is using https.

e107::js("url", 			"https://cdn.jsdelivr.net/bootstrap/3.3.6/js/bootstrap.min.js", 'jquery', 2);
e107::css('url', 'https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css');
e107::css('url',    'https://cdn.jsdelivr.net/fontawesome/4.5.0/css/font-awesome.min.css');



e107::js("footer-inline", 	"$('.e-tip').tooltip({container: 'body'})"); // activate bootstrap tooltips. 

// Legacy Stuff.
define('OTHERNEWS_COLS',false); // no tables, only divs. 
define('OTHERNEWS_LIMIT', 3); // Limit to 3. 
define('OTHERNEWS2_COLS',false); // no tables, only divs. 
define('OTHERNEWS2_LIMIT', 3); // Limit to 3. 
define('COMMENTLINK', 	e107::getParser()->toGlyph('fa-comment'));
define('COMMENTOFFSTRING', '');

define('PRE_EXTENDEDSTRING', '<br />');

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
	
	if($style == 'navdoc' || $style == 'none')
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

// applied before every layout.
$LAYOUT['_header_'] = '
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{SITEURL}">{BOOTSTRAP_BRANDING}</a>
        </div>
        <div class="navbar-collapse collapse {BOOTSTRAP_NAV_ALIGN}">
        	{NAVIGATION=main}
         	{BOOTSTRAP_USERNAV: placement=top}
        </div><!--/.navbar-collapse -->
      </div>
    </div>

  
	
';

// applied after every layout. 
$LAYOUT['_footer_'] = '<hr>
{SETSTYLE=default}
<footer>
	<div class="container">
		<div class="row">

		</div>	 <!-- /row -->
	</div> <!-- /container -->
</footer>
';



// $LAYOUT is a combined $HEADER and $FOOTER, automatically split at the point of "{---}"

$LAYOUT['home'] =  '
<div class="container">
  {ALERTS}
</div>
{SETSTYLE=jumbotron}
{WMESSAGE=force}   
{SETSTYLE=default}
<div class="container">	
{MENU=1}
{---}
</div>
<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    {SETSTYLE=col-md-4}
    {MENU=2}
    {MENU=3}
    {MENU=4}
  </div>  
  <div class="row">
    {SETSTYLE=col-md-4}
    {MENU=5}
  </div>
  {SETSTYLE=default}
  <div class="row" >
  
  </div>
</div>
';

//TODO Add {GALLERY_PORTFOLIO}  to portfolio_menu.php 
$LAYOUT['modern_business_home'] =  '{SETSTYLE=none}
{FEATUREBOX}   
<div class="container">	
  {ALERTS}
  <!-- Start Menu 1 --> 
    {MENU=10}
    <!-- End Menu 1 --> 
  </div>
  <div class="section">
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        {SETSTYLE=col-md-4}
        {CMENU=jumbotron-menu-1}
        {CMENU=jumbotron-menu-2}
        {CMENU=jumbotron-menu-3}
      </div>
    </div>
  </div>
</div><!-- /.container -->
{---}';


$LAYOUT['full'] = '  
{SETSTYLE=default}
<div class="container">	
  {ALERTS}
  {MENU=1}
  {---}
</div>';

$LAYOUT['sidebar_right'] =  '   
{SETSTYLE=default}
<div class="container">	
  {ALERTS}
  <div class="row">
    <div class="col-xs-12 col-md-8">	
    {---}
    </div>
    <div id="sidebar" class="col-xs-12 col-md-4">
      {SETSTYLE=menu}
      {MENU=1}
      </div>
  </div>
</div>';

$LAYOUT['sidebar_left'] =  $LAYOUT['sidebar_right'];


 
 
 
 
$NEWSCAT = "\n\n\n\n<!-- News Category -->\n\n\n\n
	<div style='padding:2px;padding-bottom:12px'>
	<div class='newscat_caption'>
	{NEWSCATEGORY}
	</div>
	<div style='width:100%;text-align:left'>
	{NEWSCAT_ITEM}
	</div>
	</div>
";


$NEWSCAT_ITEM = "\n\n\n\n<!-- News Category Item -->\n\n\n\n
		<div style='width:100%;display:block'>
		<table style='width:100%'>
		<tr><td style='width:2px;vertical-align:middle'>&#8226;&nbsp;</td>
		<td style='text-align:left;height:10px'>
		{NEWSTITLELINK}
		</td></tr></table></div>
";

?>
