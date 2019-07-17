<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }
// New in v2.x - requires a bootstrap theme be loaded.

//TODO Find a good place to put a {SEARCH} dropdown.

$FORUM_VIEWFORUM_TEMPLATE = array();

$FORUM_VIEWFORUM_TEMPLATE['caption'] 				= "";
$FORUM_VIEWFORUM_TEMPLATE['start'] 				= "<div id='forum-viewforum'>";
$FORUM_VIEWFORUM_TEMPLATE['header'] 			= "<div class=' row-fluid'></div>
													<div class='row row-fluid'>
													<div class='col-md-9 span9 pull-left'><h3>{FORUMIMAGE:h=60}{FORUMTITLE}</h3></div>
													<div class='col-md-3 span3 pull-right right' style='padding-top:10px'>{NEWTHREADBUTTONX}</div></div>
													<table class='table table-hover table-striped table-bordered'>
													<colgroup>
													<col style='width:3%' />
													<col />
													<col style='width:8%' />
													<col class='hidden-xs' style='width:8%' />
													<col class='hidden-xs' style='width:20%' />
													</colgroup>
												
													{SUBFORUMS}";


$FORUM_VIEWFORUM_TEMPLATE['item'] 				= "<tr>
												    <td>{ICON}</td>
												    <td>
												        <div class='row'>
												            <div class='col-xs-12 col-md-9'>
												            {THREADNAME}
												            <div><small>".LAN_FORUM_1004.": {POSTER} {THREADTIMELAPSE} &nbsp;</small></div>
												            </div><div class='col-xs-12 col-md-3 text-right'> {PAGESX}</div>
												        </div>
												    </td>
												    <td class='text-center'>{REPLIESX}</td><td class='hidden-xs text-center'>{VIEWSX}</td>
												    <td class='hidden-xs'><small>{LASTPOSTUSER} {LASTPOSTDATE} </small><div class='span2 right pull-right'>{ADMINOPTIONS}</div></td>
												</tr>\n";


$FORUM_VIEWFORUM_TEMPLATE['item-sticky'] 		= $FORUM_VIEWFORUM_TEMPLATE['item'] ; // "<tr><td>{THREADNAME}</td></tr>\n";
$FORUM_VIEWFORUM_TEMPLATE['item-announce'] 		= $FORUM_VIEWFORUM_TEMPLATE['item'] ; // "<tr><td>{THREADNAME}</td></tr>\n";


$FORUM_VIEWFORUM_TEMPLATE['sub-header']			= "<tr>
													<th colspan='2'>".LAN_FORUM_1002."</th>
													<th class='text-center'>".LAN_FORUM_0003."</th>
													<th class='hidden-xs text-center'>".LAN_FORUM_0002."</th>
													<th class='hidden-xs'>".LAN_FORUM_0004."</th>
												</tr>";

$FORUM_VIEWFORUM_TEMPLATE['sub-item']			= "<tr><td>{NEWFLAG}</td>
												<td><div>{SUB_FORUMIMAGE:h=50}{SUB_FORUMTITLE}</div><small>{SUB_DESCRIPTION}</small></td>
												<td class='text-center'>{SUB_REPLIESX}</td>
												<td class='hidden-xs text-center'>{SUB_THREADSX}</td>
												<td class='hidden-xs'><small>{SUB_LASTPOSTUSER} {SUB_LASTPOSTDATE}</small></td>
												</tr>\n";


$FORUM_VIEWFORUM_TEMPLATE['sub-footer']			= "";		

/* Examples top divider with shortcodes - working
$FORUM_VIEWFORUM_TEMPLATE['divider-important']	= "<tr><th colspan='2'>".LAN_FORUM_1006." {FORUMTITLE}</th><th class='text-center'>".LAN_FORUM_0003."</th><th class='hidden-xs text-center'>".LAN_FORUM_1005."</th><th class='hidden-xs'>".LAN_FORUM_0004."</th></tr>";
$FORUM_VIEWFORUM_TEMPLATE['divider-normal']		= "<tr><th colspan='2'>".LAN_FORUM_1007." {FORUMTITLE}</th><th class='text-center' >".LAN_FORUM_0003."</th><th class='hidden-xs text-center'>".LAN_FORUM_1005."</th><th class='hidden-xs'>".LAN_FORUM_0004."</th></tr>";
*/
$FORUM_VIEWFORUM_TEMPLATE['divider-important']	= "<tr><th colspan='2'>".LAN_FORUM_1006."</th><th class='text-center'>".LAN_FORUM_0003."</th><th class='hidden-xs text-center'>".LAN_FORUM_1005."</th><th class='hidden-xs'>".LAN_FORUM_0004."</th></tr>";
$FORUM_VIEWFORUM_TEMPLATE['divider-normal']		= "<tr><th colspan='2'>".LAN_FORUM_1007."</th><th class='text-center' >".LAN_FORUM_0003."</th><th class='hidden-xs text-center'>".LAN_FORUM_1005."</th><th class='hidden-xs'>".LAN_FORUM_0004."</th></tr>";

$SC_WRAPPER['VIEWABLE_BY'] = "<div class='panel panel-default' style='margin-top:10px'><div class='panel-heading'>".LAN_FORUM_8012."</div><div class='panel-body'>{---}</div></div>";

$FORUM_VIEWFORUM_TEMPLATE['footer'] 				= "</table>
												<div class='row row-fluid'>

												<div class='col-md-5 span5 pull-left left' style='padding-top:10px'>{THREADPAGES}</div><div class='col-md-3 span3 pull-right right' style='padding-top:10px'>{NEWTHREADBUTTONX}</div>

												</div>

												<div>
													<div class='panel panel-default' style='margin-top:50px'>
													<div class='panel-heading'>".LAN_FORUM_8011."</div>
													<div class='panel-body'>
													{ICONKEY}

													</div>
													</div>
												</div>
												<div class='forum-perms'>{PERMS}</div>

												{VIEWABLE_BY}

												";
$FORUM_VIEWFORUM_TEMPLATE['end'] 					= "</div>\n<!--- END --> \n";

// define {ICONKEY}
$FORUM_VIEWFORUM_TEMPLATE['iconkey'] 			= "
												<div class='row' >
													<div class='col-sm-3 col-xs-6'>".IMAGE_new_small." ".LAN_FORUM_0039."</div>
													<div class='col-sm-3 col-xs-6'>".IMAGE_nonew_small." ".LAN_FORUM_0040."</div>
													<div class='col-sm-3 col-xs-6'>".IMAGE_sticky_small." ".LAN_FORUM_1011."</div>
													<div class='col-sm-3 col-xs-6'>".IMAGE_announce_small." ".LAN_FORUM_1013."</div>
												</div>

												<div class='row' >
													<div class='col-sm-3 col-xs-6'>".IMAGE_new_popular_small." ".LAN_FORUM_0039." ".LAN_FORUM_1010."</div>
													<div class='col-sm-3 col-xs-6'>".IMAGE_nonew_popular_small." ".LAN_FORUM_0040." ".LAN_FORUM_1010."</div>
													<div class='col-sm-3 col-xs-6'>".IMAGE_noreplies_small." ".LAN_FORUM_1021."</div>
													<div class='col-sm-3 col-xs-6'>".IMAGE_closed_small." ".LAN_FORUM_1014."</div>
												</div>
												";



// $FORUM_VIEWFORUM_WRAPPER['THREADNAME']          = "<span class='label label-info'>{---}</span>";





