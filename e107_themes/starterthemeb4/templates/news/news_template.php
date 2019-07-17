<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;

global $sc_style;



$NEWS_TEMPLATE = array();


$NEWS_MENU_TEMPLATE['list']['start']       = '<div class="thumbnails">';
$NEWS_MENU_TEMPLATE['list']['end']         = '</div>';


$NEWS_INFO = array(
	'default' 	=> array('title' => LAN_DEFAULT, 	'description' => 'unused'),
	'list' 	    => array('title' => LAN_LIST, 		'description' => 'unused'),
	'2-column'  => array('title' => "2 Column (experimental)",     'description' => 'unused'), //@todo more default listing options.
);


// XXX The ListStyle template offers a listed summary of items with a minimum of 10 items per page. 
// As displayed by news.php?cat.1 OR news.php?all 
// {NEWSBODY} should not appear in the LISTSTYLE as it is NOT the same as what would appear on news.php (no query) 


        
$NEWS_WRAPPER['list']['item']['NEWSIMAGE: item=1&type=src'] = '<a href="{NEWSURL}"><img class="card-img-top" src="{---}" alt="{NEWS_TITLE}"></a>';
// Template/CSS to be reviewed for best bootstrap implementation 
/*    <!-- Blog Post -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <a href="#">
              <img class="img-fluid rounded" src="http://placehold.it/750x300" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        Posted on January 1, 2017 by
        <a href="#">Start Bootstrap</a>
      </div>
    </div> */
$NEWS_TEMPLATE['list']['caption']	= '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['start']	= '{SETIMAGE: w=750&h=300&crop=1}';
$NEWS_TEMPLATE['list']['end']	= '';
$NEWS_TEMPLATE['list']['item']	= '
     <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
              {NEWSIMAGE: item=1&type=src}
							{NEWSVIDEO: item=1}
          </div>
          <div class="col-lg-6">
            <h2 class="card-title">{NEWS_TITLE}</h2>
            <small>{NEWSTAGS} {NEWSCOMMENTS} {EMAILICON} {PRINTICON} {PDFICON} </small>
            <p class="card-text">{NEWS_SUMMARY}</p>
            <a href="{NEWSURL}" class="btn btn-primary">'.LAN_READ_MORE.' &rarr;</a>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        Posted on {NEWSDATE=short} by {NEWSAUTHOR}
      </div>
    </div>
';

 
//$NEWS_MENU_TEMPLATE['list']['separator']   = '<br />';

 
$NEWS_WRAPPER['default']['item']['NEWSIMAGE: item=1&type=src'] = '<img class="card-img-top" src="{---}" alt="{NEWS_TITLE}">';

/*
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>
        */
        

$NEWS_TEMPLATE['default']['caption'] = PAGE_NAME;
$NEWS_TEMPLATE['default']['start']	= '{SETIMAGE: w=750&h=300&crop=1}';
$NEWS_TEMPLATE['default']['item'] = '		
        <div class="card mb-4">
          {NEWSIMAGE: item=1&type=src}
					{NEWSVIDEO: item=1}
          <div class="card-body"> 
            <h2 class="card-title">{NEWS_TITLE}</h2>
						<small>{NEWSTAGS} {NEWSCOMMENTS} {EMAILICON} {PRINTICON} {PDFICON} </small>  
            <p class="card-text">{NEWS_SUMMARY}</p>
            <a href="{NEWSURL}" class="btn btn-primary">'.LAN_READ_MORE.' &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on {NEWSDATE=short} by {NEWSAUTHOR} 
              {ADMINOPTIONS}
          </div>
        </div>
';

$NEWS_TEMPLATE['default']['end']	= '';

$NEWS_WRAPPER['category'] =   $NEWS_WRAPPER['list'];
$NEWS_TEMPLATE['category']          = $NEWS_TEMPLATE['list'];
$NEWS_TEMPLATE['category']['start']	= '<!-- Category News Template -->';

/**
 * @todo (experimental)
 */
$NEWS_TEMPLATE['2-column']['caption']  = '{NEWS_CATEGORY_NAME}';
$NEWS_TEMPLATE['2-column']['start']    = '<div class="row">';
$NEWS_TEMPLATE['2-column']['item']     = '<div class="item col-md-6">
											{SETIMAGE: w=400&h=400&crop=1}
											{NEWSTHUMBNAIL=placeholder}
	                                            <h3>{NEWS_TITLE}</h3>
	                                            <p>{NEWS_SUMMARY}</p>
	                                         	<p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
            							  </div>';
$NEWS_TEMPLATE['2-column']['end']      = '</div>';


/*
 * 	<hr />
	<h3>About the Author</h3>
	<div class="media">
			<div class="media-left">{SETIMAGE: w=80&h=80&crop=1}{NEWS_AUTHOR_AVATAR: shape=circle}</div>
			<div class="media-body">
				<h4>{NEWS_AUTHOR}</h4>
					{NEWS_AUTHOR_SIGNATURE}
					<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">My Articles</a>
			</div>
	</div>
 */


### Related 'start' - Options: Core 'single' shortcodes including {SETIMAGE}
### Related 'item' - Options: {RELATED_URL} {RELATED_IMAGE} {RELATED_TITLE} {RELATED_SUMMARY}
### Related 'end' - Options:  Options: Core 'single' shortcodes including {SETIMAGE}
/*
$NEWS_TEMPLATE['related']['start'] = "<hr><h4>".defset('LAN_RELATED', 'Related')."</h4><ul class='e-related'>";
$NEWS_TEMPLATE['related']['item'] = "<li><a href='{RELATED_URL}'>{RELATED_TITLE}</a></li>";
$NEWS_TEMPLATE['related']['end'] = "</ul>";*/

$NEWS_TEMPLATE['related']['start'] = '{SETIMAGE: w=350&h=350&crop=1}<h2 class="caption">You Might Also Like</h2><div class="row">';
$NEWS_TEMPLATE['related']['item'] = '<div class="col-md-4"><a href="{RELATED_URL}">{RELATED_IMAGE}</a><h3><a href="{RELATED_URL}">{RELATED_TITLE}</a></h3></div>';
$NEWS_TEMPLATE['related']['end'] = '</div>';