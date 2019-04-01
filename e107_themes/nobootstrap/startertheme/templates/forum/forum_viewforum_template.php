<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system
|
|     Copyright (C) 2001-2002 Steve Dunstan (jalist@e107.org)
|     Copyright (C) 2008-2010 e107 Inc (e107.org)
|
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $URL: https://e107.svn.sourceforge.net/svnroot/e107/trunk/e107_0.7/e107_plugins/forum/templates/forum_viewforum_template.php $
|     $Revision: 11678 $
|     $Id: forum_viewforum_template.php 11678 2010-08-22 00:43:45Z e107coders $
|     $Author: e107coders $
+----------------------------------------------------------------------------+
*/
if (!defined('e107_INIT')) { exit; }
if(!defined("USER_WIDTH")){ define("USER_WIDTH","width:95%"); }

 
$FORUM_VIEWFORUM_TEMPLATE['header'] = "

	<div style='text-align:center'>
	<div class='spacer'>
	<table style='".USER_WIDTH."' class='fborder' >
	<tr>
	<td class='fcaption'>{BREADCRUMB}</td>
	</tr>
	{SUBFORUMS}
	<tr>
	<td style='width:80%' class='forumheader'>
	<span class='mediumtext'>{FORUMTITLE}</span></td>
	</tr>
	</table>
	</div>

	<table style='".USER_WIDTH."'>
	<tr>
	<td style='width:80%'>
	<span class='mediumtext'>{THREADPAGES}</span>
	</td>
	<td style='width:20%; text-align:right'>
	{NEWTHREADBUTTON}
	</td>
	</tr>
	</table>

	<div class='spacer'>
	<table style='".USER_WIDTH."' class='fborder'>
	<tr>
	<td style='width:3%' class='fcaption'>&nbsp;</td>
	<td style='width:47%' class='fcaption'>{THREADTITLE}</td>
	<td style='width:20%; text-align:center' class='fcaption'>{STARTERTITLE}</td>
	<td style='width:5%; text-align:center' class='fcaption'>{REPLYTITLE}</td>
	<td style='width:5%; text-align:center' class='fcaption'>{VIEWTITLE}</td>
	<td style='width:20%; text-align:center' class='fcaption'>{LASTPOSTITLE}</td>
	</tr>";
 

$FORUM_VIEWFORUM_TEMPLATE['start']= "
	<div style='text-align:center'>
	<div class='spacer'>
	<table style='".USER_WIDTH."' class='fborder' >
	<tr>
 
	</tr>
 
	</table>
	</div>
	";
 

$FORUM_VIEWFORUM_TEMPLATE['item'] =  "
		<tr>
		<td style='vertical-align:middle; text-align:center; width:3%' class='forumheader3'>{ICON}</td>
		<td style='vertical-align:middle; text-align:left; width:47%' class='forumheader3'>

		<table style='width:100%'>
		<tr>
		<td style='width:90%'><span class='mediumtext'><b>{THREADTYPE}{THREADNAME}</b></span><br /><span class='smalltext'>{PAGES}</span></td>
		<td style='width:10%; white-space:nowrap;'>{ADMIN_ICONS}</td>
		</tr>
		</table>

		</td>

		<td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{POSTER}<br />{THREADDATE}</td>
		<td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{REPLIES}</td>
		<td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{VIEWS}</td>
		<td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{LASTPOST}</td>
		</tr>";
 

$FORUM_VIEWFORUM_TEMPLATE['item-sticky'] = "
		<tr>
		<td style='vertical-align:middle; text-align:center; width:3%' class='forumheader3'>{ICON}</td>
		<td style='vertical-align:middle; text-align:left; width:47%' class='forumheader3'>

		<table style='width:100%'>
		<tr>
		<td style='width:90%'><span class='mediumtext'><b>{THREADTYPE}{THREADNAME}</b></span> <span class='smalltext'>{PAGES}</span></td>
		<td style='width:10%; white-space:nowrap;'>{ADMIN_ICONS}</td>
		</tr>
		</table>

		</td>

		<td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{POSTER}<br />{THREADDATE}</td>
		<td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{REPLIES}</td>
		<td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{VIEWS}</td>
		<td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{LASTPOST}</td>
		</tr>";
 

$FORUM_VIEWFORUM_TEMPLATE['item-announce'] = "
		<tr>
		<td style='vertical-align:middle; text-align:center; width:3%' class='forumheader3'>{ICON}</td>
		<td style='vertical-align:middle; text-align:left; width:47%' class='forumheader3'>

		<table style='width:100%'>
		<tr>
		<td style='width:90%'><span class='mediumtext'><b>{THREADTYPE}{THREADNAME}</b></span> <span class='smalltext'>{PAGES}</span></td>
		<td style='width:10%; white-space:nowrap;'>{ADMIN_ICONS}</td>
		</tr>
		</table>

		</td>

		<td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{POSTER}<br />{THREADDATE}</td>
		<td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{REPLIES}</td>
		<td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{VIEWS}</td>
		<td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{LASTPOST}</td>
		</tr>";
 
$FORUM_VIEWFORUM_TEMPLATE['footer'] = "
		</table>
		</div>

		<table style='".USER_WIDTH."'>
		<tr>
		<td style='width:80%'><span class='mediumtext'>{THREADPAGES}</span>
		</td>
		<td style='width:20%; text-align:right'>
		{NEWTHREADBUTTON}
		</td>
		</tr>
		<tr>
		<td colspan ='2'>
		{FORUMJUMP}
		</td>
		</tr>
		</table>

		<div class='spacer'>
		<table class='fborder' style='".USER_WIDTH."'>
		<tr>
		<td style='vertical-align:middle; width:50%' class='forumheader3'><span class='smalltext'>{MODERATORS}</span></td>
		<td style='vertical-align:middle; width:50%' class='forumheader3'><span class='smalltext'>{BROWSERS}</span></td>
		</tr>
		</table>
		</div>

		<div class='spacer'>
		<table class='fborder' style='".USER_WIDTH."'>
		<tr>
		<td style='vertical-align:middle; width:50%' class='forumheader3'>{ICONKEY}</td>
		<td style='vertical-align:middle; text-align:center; width:50%' class='forumheader3'><span class='smallblacktext'>{PERMS}</span><br /><br />{SEARCH}
		</td>
		</tr>
		</table>
		</div>
		</div>
		<div class='spacer'>
		<div style='text-align:center;'>
		</div>
	</div>
";
/*
		<a href='".e_PLUGIN."rss_menu/rss.php?11.1.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss1.png' alt='".LAN_431."' style='vertical-align: middle; border: 0;' /></a>
		<a href='".e_PLUGIN."rss_menu/rss.php?11.2.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss2.png' alt='".LAN_432."' style='vertical-align: middle; border: 0;' /></a>
		<a href='".e_PLUGIN."rss_menu/rss.php?11.3.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss3.png' alt='".LAN_433."' style='vertical-align: middle; border: 0;' /></a>
*/ 

$FORUM_VIEWFORUM_TEMPLATE['end'] = "
		<table style='".USER_WIDTH."'>
		<tr>
		<td colspan ='2'>
		{FORUMJUMP}
		</td>
		</tr>
		</table>
		<div class='nforumdisclaimer' style='text-align:center'>Powered by <b>e107 Forum System</b></div></div>
";
 

$FORUM_VIEWFORUM_TEMPLATE['sub-header'] = "
	<tr>
	<td colspan='2'>
		<br />
		<div>
		<table style='width:100%'>
		<tr>
			<td class='fcaption' style='width: 5%'>&nbsp;</td>
			<td class='fcaption' style='width: 45%'>".LAN_FORUM_1002."</td>
			<td class='fcaption' style='width: 10%'>".LAN_FORUM_0003."</td>
			<td class='fcaption' style='width: 10%'>".LAN_FORUM_0002."</td>
			<td class='fcaption' style='width: 30%'>".LAN_FORUM_0004."</td>
		</tr>
	";
 
$FORUM_VIEWFORUM_TEMPLATE['sub-item'] = "
	<tr>
		<td class='forumheader3' style='text-align:center'>{NEWFLAG}</td>
		<td class='forumheader3' style='text-align:left'><b>{SUB_FORUMTITLE}</b><br />{SUB_DESCRIPTION}</td>
		<td class='forumheader3' style='text-align:center'>{SUB_THREADS}</td>
		<td class='forumheader3' style='text-align:center'>{SUB_REPLIES}</td>
		<td class='forumheader3' style='text-align:center'>{SUB_LASTPOST}</td>
	</tr>
	";
 

$FORUM_VIEWFORUM_TEMPLATE['sub-footer'] = "
	</table><br /><br />
	</div>
	</td>
	</tr>
	";
 
$FORUM_VIEWFORUM_TEMPLATE['divider-important'] = "<tr><td class='forumheader'>&nbsp;</td><td colspan='5'  class='forumheader'><span class='mediumtext'><b>".LAN_FORUM_1006."</b></span></td></tr>";
 
$FORUM_VIEWFORUM_TEMPLATE['divider-normal'] = "<tr><td class='forumheader'>&nbsp;</td><td colspan='5'  class='forumheader'><span class='mediumtext'><b>".LAN_FORUM_1007."</b></span></td></tr>";
 

$FORUM_CRUMB['sitename']['value'] = "<a class='forumlink' {SITENAME_HREF}>{SITENAME}</a>";
$FORUM_CRUMB['sitename']['sep'] = " :: ";

$FORUM_CRUMB['forums']['value'] = "<a class='forumlink' {FORUMS_HREF}>{FORUMS_TITLE}</a>";
$FORUM_CRUMB['forums']['sep'] = " :: ";

$FORUM_CRUMB['parent']['value'] = "{PARENT_TITLE}";
$FORUM_CRUMB['parent']['sep'] = " :: ";

$FORUM_CRUMB['subparent']['value'] = "<a class='forumlink' {SUBPARENT_HREF}>{SUBPARENT_TITLE}</a>";
$FORUM_CRUMB['subparent']['sep'] = " :: ";

$FORUM_CRUMB['forum']['value'] = "{FORUM_TITLE}";

?>