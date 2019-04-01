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
if(!defined("USER_WIDTH")){ define("USER_WIDTH","width:95%"); }

 

/*
$FORUM_MAIN_START	= "<br />MAIN START";
$FORUM_MAIN_PARENT 	= "<br />MAIN PARENT";
$FORUM_MAIN_FORUM		= "<br />MAIN FORUM";
$FORUM_MAIN_END		= "<br />MAIN END";
$FORUM_NEWPOSTS_START	= "<br />NEWPOSTS-START";
$FORUM_NEWPOSTS_MAIN 	= "<br />NEWPOSTS-MAIN";
$FORUM_NEWPOSTS_END 	= "<br />NEWPOSTS END";
$FORUM_TRACK_START	= "<br />TRACK-START";
$FORUM_TRACK_MAIN	= "<br />TRACK-MAIN";
$FORUM_TRACK_END	= "<br />TRACK-END";
*/

// New in v2.x - requires a bootstrap theme be loaded.  
 

$FORUM_TEMPLATE['main']['start']			=  
"<div style='text-align:center'>\n<div class='spacer'>\n<table style='".USER_WIDTH."' class='fborder'>\n<tr>\n<td colspan='2' style='width:60%; text-align:center' class='fcaption'>{FORUMTITLE}</td>\n<td style='width:10%; text-align:center' class='fcaption'>{THREADTITLE}</td>\n<td style='width:10%; text-align:center' class='fcaption'>{REPLYTITLE}</td>\n<td style='width:20%; text-align:center' class='fcaption'>{LASTPOSTITLE}</td>\n</tr>";

$FORUM_TEMPLATE['main']['parent']			= 	" <tr>\n<td colspan='5' class='forumheader'>{PARENTNAME} {PARENTSTATUS}</td>\n</tr>";



$FORUM_TEMPLATE['main']['forum']			= "<tr>\n<td style='width:5%; text-align:center' class='forumheader2'>{NEWFLAG}</td>\n<td style='width:55%' class='forumheader2'>{FORUMNAME}<br /><span class='smallblacktext'>{FORUMDESCRIPTION}</span>{FORUMSUBFORUMS}</td>\n<td style='width:10%; text-align:center' class='forumheader3'>{THREADS}</td>\n<td style='width:10%; text-align:center' class='forumheader3'>{REPLIES}</td>\n<td style='width:20%; text-align:center' class='forumheader3'><span class='smallblacktext'>{LASTPOST}</span></td>\n</tr>";

//{LASTPOST:type=username} + {LASTPOST:type=datelink} can also be replaced by the legacy shortcodes {LASTPOST} or {LASTPOSTUSER} + {LASTPOSTDATE}

$FORUM_TEMPLATE['main']['end']				= "</table></div>\n<div class='spacer'>\n<table style='".USER_WIDTH."' class='fborder'>\n<tr>\n<td colspan='2' style='width:60%' class='fcaption'>{INFOTITLE}</td>\n</tr>\n<tr>\n<td rowspan='4' style='width:5%; text-align:center' class='forumheader3'>{LOGO}</td>\n<td style='width:auto' class='forumheader3'>{USERINFO}</td>\n</tr>\n<tr>\n<td style='width:95%' class='forumheader3'>{INFO}</td>\n</tr><tr>\n<td style='width:95%' class='forumheader3'>{FORUMINFO}</td>\n</tr>\n<tr>\n<td style='width:95%' class='forumheader3'>{USERLIST}<br />{STATLINK}</td>\n</tr>\n</table>\n</div>\n<div class='spacer'>\n<table class='fborder' style='".USER_WIDTH."'>\n<tr>\n<td class='forumheader3' style='text-align:center; width:33%'>{ICONKEY}</td>\n<td style='text-align:center; width:33%' class='forumheader3'>{SEARCH}</td>\n<td style='width:33%; text-align:center; vertical-align:middle' class='forumheader3'><span class='smallblacktext'>{PERMS}</span>\n</td>\n</tr>\n</table>\n</div>\n</div>";
 
 


// $FORUM_WRAPPER['main']['forum']['USERINFOX'] = "{FORUM_BREADCRUMB}(html before){---}(html after)";

// Tracking
 
$FORUM_TEMPLATE['track']['start'] = "<div style='text-align:center'>\n<div class='spacer'>\n<table style='".USER_WIDTH."' class='fborder'>\n<tr>\n<td colspan='3' style='width:60%' class='fcaption'>{TRACKTITLE}</td>\n</tr>\n";
       
$FORUM_TEMPLATE['track']['item'] = "<tr>
			<td style='text-align:center; vertical-align:middle; width:6%'  class='forumheader3'>{NEWIMAGE}</td>
			<td style='vertical-align:middle; text-align:left; width:70%'  class='forumheader3'><span class='mediumtext'>{TRACKPOSTNAME}</span></td>
			<td style='vertical-align:middle; text-align:center; width:24%'  class='forumheader3'><span class='mediumtext'>{UNTRACK}</span></td>
			</tr>";


$FORUM_TEMPLATE['track']['end']   = "</table>\n</div>\n</div>";




/*
$FORUM_TEMPLATE['main-end']				.= "

<div class='center'>
	<small class='muted'>{PERMS}</small>
	</div>
<table style='".USER_WIDTH."' class='fborder table'>\n<tr>
<td colspan='2' style='width:60%' class='fcaption'>{INFOTITLE}</td>\n</tr>\n<tr>
<td rowspan='4' style='width:5%; text-align:center' class='forumheader3'>{LOGO}</td>
<td style='width:auto' class='forumheader3'>{USERINFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{INFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{FORUMINFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{USERLIST}<br />{STATLINK}</td>\n</tr>\n</table>
";
*/
?>
