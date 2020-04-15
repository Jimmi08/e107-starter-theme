<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */




$NEWS_VIEW_INFO = array(

	'default' 	=> array('title' => LAN_DEFAULT, 							'description' => 'unused'),
	'videos' 	=> array('title' => "Videos (experimental)", 							'description' => 'unused'),
);


// Default
 
$NEWS_VIEW_WRAPPER['default']['item']['NEWSIMAGE: item=1&type=src'] = '<img class="img-fluid rounded" src="{---}" alt="{NEWS_TITLE}">';


$NEWS_VIEW_TEMPLATE['default']['caption'] = '{NEWS_TITLE} by {NEWSAUTHOR}'; // render it doesn't work in 2.2.1
$NEWS_VIEW_TEMPLATE['default']['item'] = '
<article>
<h1 class="mt-4 mb-3">{NEWS_TITLE}
  <small>by
    {NEWSAUTHOR}
  </small>
</h1>
    
{SETIMAGE: w=900&h=300&crop=1}
{NEWSIMAGE: item=1&type=src} 
<hr>
<!-- Date/Time -->
<p>Posted on {NEWSDATE=long}</p>   
{NEWSTAGS} {NEWSCOMMENTS} {EMAILICON} {PRINTICON} {PDFICON} {ADMINOPTIONS}
<hr>

<div class="body">
	<p class="lead">{NEWS_SUMMARY}</p>
	{NEWS_BODY=body}
</div>
<div class="row  news-images-1">
  		<div class="col-md-6">{NEWSIMAGE: item=2}</div>
  		<div class="col-md-6">{NEWSIMAGE: item=3}</div>
  	</div>
  	<div class="row news-images-2">
  		<div class="col-md-6">{NEWSIMAGE: item=4}</div>
  		<div class="col-md-6">{NEWSIMAGE: item=5}</div>
</div>

<div class="news-videos-1">
{NEWSVIDEO: item=1}
{NEWSVIDEO: item=2}
{NEWSVIDEO: item=3}
{NEWSVIDEO: item=4}
{NEWSVIDEO: item=5}
</div>
			
     
<div class="body-extended">
	{NEWS_BODY=extended}
</div>   
	<hr />
	{NEWSRELATED}
	<hr>
	{NEWSNAVLINK}
	     
</article>

 

';


// @todo add more templates. eg. 'videos' , 'slideshow images', 'full width image'  - help and ideas always appreciated.


// Videos
$NEWS_VIEW_TEMPLATE['videos']['item'] = '<div class="view-item"><div class="alert alert-warning">Empty news_view_template.php (videos) - have ideas? let us know.</div></div>';



