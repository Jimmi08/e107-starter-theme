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
if(!defined("USER_WIDTH")){ define("USER_WIDTH","width:95%;margin-left:auto;margin-right:auto"); }
 
 
// New in v2.x - requires a bootstrap theme be loaded.  

$FORUM_VIEWTOPIC_TEMPLATE['caption'] 	= "";
$FORUM_VIEWTOPIC_TEMPLATE['start'] 	= "
<div class='forum-viewtopic' id='forum-viewtopic'>

	<div class='row'>
		<div class='col-md-12 pull-left'><h3>{THREADNAME}</h3></div>
	</div>
  
	<div class='row row-fluid'>
		<div class='col-md-9 span9 pull-left'>{GOTOPAGES}</div>   
    <div class='col-md-3 span3 pull-right right text-right' style='padding-top:10px'>{TRACK} {BUTTONSX}</div>
	</div>
	
	{MESSAGE}
 

";
/* the same code for reply and first post */
$forumpost =  '<div class="card-body bg-light pt-2 pb-2">
      <div class="row d-md-block">
      <div class="postbody float-md-right col-lg-9 col-md-8 col-sm-12">
         <div id="post_content23">
           <div class="clearfix mb-2 pb-2 border-bottom">
           <hr class="d-md-none mt-0 mb-1">
           <div class="float-left mt-2">
                <i class="fa fa-file-o fa-fw" aria-hidden="true"></i>
                <strong>{POSTER}</strong> » {THREADDATESTAMP=relative}
						</div>
            <div class="float-right">  {POSTOPTIONS}
            </div>
           </div>
           <div class="content pb-2"> 
                        {POLL}
												{THREAD_TEXT}
												{ATTACHMENTS: modal=1}
           </div>
         </div>
      </div>
      
  
        <dl id="profile23" class="postprofile float-md-right col-lg-3 col-md-4 col-sm-12 mb-0 border-right">
					<dt class="text-center mb-2">
										<p class="mb-1"> {USERCOMBO} </br> {CUSTOMTITLE}</p>
										<div class="mb-1 d-none d-md-block">{AVATAR: shape=rounded}</div>
										
					</dt>
				<dt class="text-center user-badge">{LEVEL=badge}{LEVEL=glyph}</dt>				
        <dt class="text-center forum-viewtopic-customtitle">{CUSTOMTITLE}</dt>										
			 </dl>
     
      
      </div>
    </div>
    <div class="card-footer bg-secondary p-1 pl-3 pr-3 text-right">     
     <div class="text-left"> <small> {SIGNATURE=clean}</small>
     </div>
     <div class="text-right">
					<a href="#page-top" class=" text-white" data-toggle="tooltip" data-placement="top" 
          title="" data-original-title="Top"><i class="fa fa-chevron-up" aria-hidden="true"></i>
          <span class="sr-only">Top</span></a> 
      </div>  
	   </div>';

$FORUM_VIEWTOPIC_TEMPLATE['replies'] =    
'<div id="post-{POSTID}" class="forum-viewtopic-post card mb-3 reply"> 
'.$forumpost.'
</div>    
     ' ;

$cardheader = '<div id="post-{POSTID}" class="card-header bg-secondary">
			<div class="row">
				 <div class="col-lg-9 col-md-8 col-sm-8"><a href="#p-{POSTID}" class="text-white">{THREADNAME}</a></div>
			    <div class="col-lg-3 col-md-4 d-none d-md-block">
									&nbsp;
					 </div>                                                                  
           <div class="col-lg-3 col-md-4 d-none d-md-block">   
           
			</div>
		</div>
    </div>';
    
$FORUM_VIEWTOPIC_TEMPLATE['thread'] =    
'<div id="post-{POSTID}" class="forum-viewtopic-post card mb-3">
    '.$cardheader.'              
    '.$forumpost.'
</div>    
     ' ;
     
 

$FORUM_VIEWTOPIC_TEMPLATE['end'] = " 
<div class='col-xs-12'>
	<hr />
</div>

	<div class='row row-fluid'>
		<div class='col-md-9 span9 pull-left'>{GOTOPAGES}</div>
    <div class='col-md-3 span3 pull-right right text-right' style='padding-top:10px'>{TRACK} {BUTTONSX}</div>
	</div>
  
 
<div class='row'>
	<div class='col-xs-12 col-md-8 col-md-offset-2 offset-md-2'>
		{QUICKREPLY}
	</div>
</div>
<small class='text-muted'>{MODERATORS}</small>
{THREADSTATUS}
</div>
";









$FORUM_VIEWTOPIC_TEMPLATE['deleted'] = "
									<li id='post-{POSTID}' class='forum-viewtopic-deleted forum-viewtopic-post'>
										<div class='hidden-xs row row-fluid btn-navbar navbar-btn'>

												{SETIMAGE: w=100&h=0&crop=0}
												<div class='col-xs-2 span2 left text-left'>
													<div class='row'>
														<div class='col-xs-12 col-md-12 forum-user-combo'>{USERCOMBO}<br />{CUSTOMTITLE}</div>
													</div>

												{NEWFLAG} {ANON_IP}</div>
												<div class='col-xs-4 col-sm-3 text-muted span4 text-muted muted'><small>{THREADDATESTAMP=relative}</small></div>
												<div class='col-xs-5 text-muted span5 text-muted muted right text-right'><small>{LASTEDIT}{LASTEDITBY=link}</small></div>
												<div class='col-xs-3 col-sm-2 span1 right text-right'>{POSTOPTIONS}</div>

										</div>

										<div class='row row-fluid'  >

											<div class='col-xs-12 col-md-2 span2 left'>
													<div class='row'>

													<div class='col-xs-3 col-md-12 text-center'>{AVATAR: shape=rounded}</div>
													<div class='col-xs-6 visible-xs'>{USERCOMBO}<br />{CUSTOMTITLE}</div>
														<div class='col-xs-6 col-md-12 hidden-xs'>
															<small>
																{LEVEL=badge} {LEVEL=glyph}
															</small>
														</div>
														<div class='visible-xs col-xs-3'><div class='clearfix'>{POSTOPTIONS}</div><div class='pull-right '><br /><small class='text-muted'>{THREADDATESTAMP=relative}</small></div></div>
													</div>
											</div>
											<div class='visible-xs col-xs-12'><hr /></div>
											<div class='col-xs-12 col-md-9 span9 forum-thread-text '>
												{POSTDELETED}
											</div>
										</div>


										<div class='row row-fluid'>
											<div class='col-xs-2 span2 finfobar'>
												&nbsp;
											</div>
											<div class='col-xs-9 span9  finfobar' >
												<small> {SIGNATURE=clean}</small>
											</div>

											<div class='col-xs-3 span3'>
											</div>
										</div>


									</li>

									";



	
$FORUM_VIEWTOPIC_WRAPPER['thread']['ATTACHMENTS'] = "<div class='forum-viewtopic-attachments'>{---}</div>";
$FORUM_VIEWTOPIC_WRAPPER['thread']['CUSTOMTITLE'] = "<span class='forum-viewtopic-customtitle'><small>{---}</small></span>";

$FORUM_VIEWTOPIC_WRAPPER['replies']['ATTACHMENTS'] = $FORUM_VIEWTOPIC_WRAPPER['thread']['ATTACHMENTS'];
$FORUM_VIEWTOPIC_WRAPPER['replies']['CUSTOMTITLE'] = $FORUM_VIEWTOPIC_WRAPPER['thread']['CUSTOMTITLE'];

