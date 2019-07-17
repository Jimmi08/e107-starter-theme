<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }
if (!defined('USER_WIDTH')) { define('USER_WIDTH', 'display:block'); } // v1.x compat.

// v2.x Bootstrap Template.  - Overrides the above templates. 


$DOWNLOAD_TEMPLATE['categories']['start'] = "
	<div class='table-responsive'>
         <table id='download' class='table table-striped fborder'>
		      <colgroup>
		         <col style='width:3%'/>
		         <col style='width:60%'/>
		         <col style='width:10%'/>
		         <col style='width:17%'/>
		         <col style='width:10%'/>
		      </colgroup>
		      <thead>
               <tr>
                  <th colspan='2'>{LAN=LAN_CATEGORY}</th>
                  <th>{LAN=LAN_FILES}</th>
                  <th>{LAN=LAN_SIZE}</th>
                  <th>{LAN=LAN_dl_77}</th>
               </tr>
            </thead>
            <tbody>";


$DOWNLOAD_TEMPLATE['categories']['parent'] = "
               <tr>
                  <td>
                     {DOWNLOAD_CAT_MAIN_ICON}
                  </td>
                  <td>
                     {DOWNLOAD_CAT_MAIN_NAME}<br/>
                     <small class='muted text-muted'>{DOWNLOAD_CAT_MAIN_DESCRIPTION}</small>
                  </td>
                   <td>{DOWNLOAD_CAT_MAIN_COUNT} </td>
                  <td>{DOWNLOAD_CAT_MAIN_SIZE} </td>
                   <td>{DOWNLOAD_CAT_MAIN_DOWNLOADED} </td>
               </tr>";

$DOWNLOAD_TEMPLATE['categories']['child'] = "
               <tr>
                  <td>{DOWNLOAD_CAT_SUB_ICON} </td>
                  <td>
                     {DOWNLOAD_CAT_SUB_NEW_ICON} {DOWNLOAD_CAT_SUB_NAME}<br/>
                     <small>{DOWNLOAD_CAT_SUB_DESCRIPTION}</small>
                  </td>
                  <td>{DOWNLOAD_CAT_SUB_COUNT} </td>
                  <td>{DOWNLOAD_CAT_SUB_SIZE} </td>
                  <td>{DOWNLOAD_CAT_SUB_DOWNLOADED} </td>
               </tr>
               {DOWNLOAD_CAT_SUBSUB}";


$DOWNLOAD_TEMPLATE['categories']['subchild'] = "
	            <tr>
	               <td>
	            	  {DOWNLOAD_CAT_SUBSUB_ICON}
	            	</td>
	            	<td >
	            	<div class='col-md-offset-1'>
	            		{DOWNLOAD_CAT_SUBSUB_NEW_ICON} {DOWNLOAD_CAT_SUBSUB_NAME}<br/>
	            		<small class='muted text-muted'>
	            	 		{DOWNLOAD_CAT_SUBSUB_DESCRIPTION}
	            		</small>
	            		</div>
	          		</td>
	            	
	               <td>{DOWNLOAD_CAT_SUBSUB_COUNT} </td>
	               <td>{DOWNLOAD_CAT_SUBSUB_SIZE} </td>
	               <td>{DOWNLOAD_CAT_SUBSUB_DOWNLOADED} </td>
	            </tr>";


$DOWNLOAD_TEMPLATE['categories']['end'] = "
            </tbody>
         </table>
	</div>
	<div class='clearfix table'>
		<div class='pull-left float-left'><small>{DOWNLOAD_CAT_NEWDOWNLOAD_TEXT}</small></div>
		<div class='pull-right float-right'>{DOWNLOAD_CAT_SEARCH}</div>
	</div>";

// ##### ------------------------------------------------------------------------------------------


//FIXME - not being utilized at the moment. 

$DOWNLOAD_WRAPPER['view']['DOWNLOAD_VIEW_AUTHOR_LAN'] 			= "<tr><td style='width:20%'>{---}</td>";
$DOWNLOAD_WRAPPER['view']['DOWNLOAD_VIEW_AUTHOR'] 				= "<td style='width:80%'>{---}</td>";
$DOWNLOAD_WRAPPER['view']['DOWNLOAD_VIEW_AUTHOREMAIL_LAN'] 		= "<tr><td style='width:20%'>{---}</td>";
$DOWNLOAD_WRAPPER['view']['DOWNLOAD_VIEW_AUTHOREMAIL'] 			= "<td style='width:80%'>{---}</td>";
$DOWNLOAD_WRAPPER['view']['DOWNLOAD_VIEW_AUTHORWEBSITE_LAN'] 	= "<tr><td style='width:20%'>{---}</td>";
$DOWNLOAD_WRAPPER['view']['DOWNLOAD_VIEW_AUTHORWEBSITE'] 		= "<td style='width:80%'>{---}</td>";
$DOWNLOAD_WRAPPER['view']['DOWNLOAD_REPORT_LINK'] 				= "<tr><td style='width:20%' colspan='2'>{---}</td></tr>";


$DOWNLOAD_TEMPLATE['view']['caption']       = "{LAN=LAN_PLUGIN_DOWNLOAD_NAME}";
$DOWNLOAD_TEMPLATE['view']['pagetitle']     = "{DOWNLOAD_VIEW_NAME} / {DOWNLOAD_CATEGORY} / {LAN=LAN_PLUGIN_DOWNLOAD_NAME}";
$DOWNLOAD_TEMPLATE['view']['start']         = "";

$DOWNLOAD_TEMPLATE['view']['item'] = "
      <div id='download'>
		   <table class='table table-striped'>
		      <colgroup>
		         <col style='width:30%;'>
		         <col style='width:70%;'>
		      </colgroup>
		      <tr>
		         <td colspan='2' class='fcaption' style='text-align:left;'>
		            <h4>{DOWNLOAD_VIEW_NAME} {DOWNLOAD_ADMIN_EDIT}</h4>
		         </td>
		      </tr>
		      {DOWNLOAD_VIEW_AUTHOR_LAN}
		      {DOWNLOAD_VIEW_AUTHOR}
		      {DOWNLOAD_VIEW_AUTHOREMAIL_LAN}
		      {DOWNLOAD_VIEW_AUTHOREMAIL}
		      {DOWNLOAD_VIEW_AUTHORWEBSITE_LAN}
		      {DOWNLOAD_VIEW_AUTHORWEBSITE}
		      <tr>
   		      <td>{DOWNLOAD_VIEW_DESCRIPTION_LAN}</td>
	   	      <td>{DOWNLOAD_VIEW_DESCRIPTION}</td>
		      </tr>
		      <tr>
		         <td>{DOWNLOAD_VIEW_IMAGE_LAN}</td>
		         <td>{DOWNLOAD_VIEW_IMAGE}</td>
		      </tr>
		      <tr>
		         <td>{DOWNLOAD_VIEW_FILESIZE_LAN}</td>
		         <td>{DOWNLOAD_VIEW_FILESIZE}</td>
		      </tr>
		      <tr>
	   	      <td>{DOWNLOAD_VIEW_DATE_LAN}</td>
		         <td>{DOWNLOAD_VIEW_DATE=long}</td>
		      </tr>
		      <tr>
		         <td>{DOWNLOAD_VIEW_REQUESTED_LAN}</td>
		         <td>{DOWNLOAD_VIEW_REQUESTED}</td>
		      </tr>
		      <tr>
   		      <td>{DOWNLOAD_VIEW_LINK_LAN}</td>
	   	      <td>{DOWNLOAD_VIEW_LINK: size=2x}</td>
		      </tr>
		      <tr>
		         <td>{DOWNLOAD_VIEW_RATING_LAN}</td>
		         <td>{DOWNLOAD_VIEW_RATING}</td>
		      </tr>
			{DOWNLOAD_REPORT_LINK}
		   </table>
		   
		</div>\n";

$DOWNLOAD_TEMPLATE['view']['end'] = "";

/*
$DOWNLOAD_TEMPLATE['view']['nextprev'] = "
<div style='text-align:center'>
	<table style='".USER_WIDTH."'>
	<tr>
	<td style='width:40%;'>{DOWNLOAD_VIEW_PREV}</td>
	<td style='width:20%; text-align: center;'>{DOWNLOAD_BACK_TO_LIST}</td>
	<td style='width:40%; text-align: right;'>{DOWNLOAD_VIEW_NEXT}</td>
	</tr>
	</table>
</div>\n";
*/

$DOWNLOAD_TEMPLATE['view']['nextprev'] = '
    <div class="float-left">
    	{DOWNLOAD_VIEW_PREV}
	</div>
	<div class="text-center ">
		{DOWNLOAD_BACK_TO_LIST}
	</div>
	<div class="float-right">
    	{DOWNLOAD_VIEW_NEXT}
	</div>
';

// ##### ------------------------------------------------------------------------------------------

//$DOWNLOAD_TEMPLATE['list']['caption'] = "Test custom caption";

$DOWNLOAD_TEMPLATE['list']['start'] = "
	<form method='post' action='".e_SELF."?".e_QUERY."'>
		<div class='table-responsive'>
            <table id='download' class='table table-striped'>\n
               <colgroup>
                  <col style='width:35%;'/>
                  <col style='width:15%;'/>
                  <col style='width:20%;'/>
                  <col style='width:10%;'/>
                  <col style='width:5%;'/>
                  <col style='width:10%;'/>
                  <col style='width:5%;'/>
               </colgroup>
               <tr>
                  <th>{DOWNLOAD_LIST_CAPTION=name}</th>
                  <th>{DOWNLOAD_LIST_CAPTION=datestamp}</th>
                  <th>{DOWNLOAD_LIST_CAPTION=author}</th>
                  <th>{DOWNLOAD_LIST_CAPTION=filesize}</th>
                  <th>{DOWNLOAD_LIST_CAPTION=requested}</th>
                  <th>{DOWNLOAD_LIST_CAPTION=rating}</th>
                  <th class='text-center'>{DOWNLOAD_LIST_CAPTION=link}</th>
               </tr>";

               
               
$DOWNLOAD_TEMPLATE['list']['item'] = "
		         <tr>
		            <td>
		               {DOWNLOAD_LIST_NEWICON} {DOWNLOAD_LIST_NAME}
		            </td>
		            <td>
		               {DOWNLOAD_LIST_DATESTAMP}
		            </td>
		            <td>
		               {DOWNLOAD_LIST_AUTHOR}
		            </td>
		            <td>
		               {DOWNLOAD_LIST_FILESIZE}
		            </td>
		            <td>
		               {DOWNLOAD_LIST_REQUESTED}
		            </td>
		            <td>
		               {DOWNLOAD_LIST_RATING}
		            </td>
		            <td class='text-center'>
		               {DOWNLOAD_LIST_LINK}
		            </td>
		         </tr>";

		         
		         
$DOWNLOAD_TEMPLATE['list']['end'] = "
		         <tr>
		         	<td colspan='3'>{DOWNLOAD_BACK_TO_CATEGORY_LIST}</td>
		            <td colspan='4' style='text-align:right;'><small class='muted text-muted'>{DOWNLOAD_LIST_TOTAL_AMOUNT} {DOWNLOAD_LIST_TOTAL_FILES}</small></td>
		         </tr>
		      </table>
		</div>
	</form>
		\n";



$DOWNLOAD_TEMPLATE['list']['nextprev'] = "		
			<div class='text-center'>
			{DOWNLOAD_LIST_NEXTPREV}					
			</div>";

/*	
$sc_style['DOWNLOAD_LIST_NEXTPREV']['pre'] = "<div class='nextprev'>";
$sc_style['DOWNLOAD_LIST_NEXTPREV']['post'] = "	</div>";
*/		
			
// ##### ------------------------------------------------------------------------------------------			
			
			
$DOWNLOAD_TEMPLATE['mirror']['start'] = "
	<div class='table-responsive'>
	   <table id='download' class='table table-striped'>
	      <colgroup>
	         <col style='width:1%'/>
	         <col style='width:29%'/>
	         <col style='width:40%'/>
	         <col style='width:20%'/>
	         <col style='width:10%'/>
	      </colgroup>
	      <tr>
	         <th class='fcaption'>{DOWNLOAD_MIRROR_REQUEST_ICON}</th>
	         <th class='fcaption' colspan='5'><h4>{DOWNLOAD_MIRROR_REQUEST}</h4></th>
	      </tr>
	      <tr>
	         <th colspan='2'>{LAN=LAN_dl_68}</th>
	         <th>{LAN=LAN_ABOUT}</th>
	         <th>{LAN=LAN_LOCATION}</th>
	         <th>{LAN=LAN_SIZE}</th>
	         <th>{LAN=LAN_DOWNLOAD}</th>
	      </tr>
	";			
			
			
$DOWNLOAD_TEMPLATE['mirror']['item']  = "
	      <tr>
	         <td>{DOWNLOAD_MIRROR_IMAGE}</td>
	         <td>
	            {DOWNLOAD_MIRROR_NAME}<br />
	            <small>
                  {DOWNLOAD_MIRROR_REQUESTS}
                  <br/>{DOWNLOAD_TOTAL_MIRROR_REQUESTS}
               </small>
	         </td>
	         <td>{DOWNLOAD_MIRROR_DESCRIPTION}</td>
	         <td>{DOWNLOAD_MIRROR_LOCATION}</td>
	         <td>{DOWNLOAD_MIRROR_FILESIZE}</td>
	         <td class='center text-center'>{DOWNLOAD_MIRROR_LINK}</td>
	      </tr>
	";

$DOWNLOAD_TEMPLATE['mirror']['end'] = "
	   </table>
	</div>
	";			

	
// All Download Pgaes.. 	
	
//$DOWNLOAD_TEMPLATE['header'] = '{DOWNLOAD_BREADCRUMB}';
//from 2.2.2 breadcrumbs moved to magic shortcodes, used in theme layout directly
$DOWNLOAD_TEMPLATE['header'] = '';
$DOWNLOAD_TEMPLATE['footer'] = '';

?>