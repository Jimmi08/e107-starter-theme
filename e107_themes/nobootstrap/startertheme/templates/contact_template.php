<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2016 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Contact Template
 */
 // $Id$

if (!defined('e107_INIT')) { exit; }

/*
if(!isset($CONTACT_INFO))
{
	$CONTACT_INFO = "
	<table style='".USER_WIDTH."' cellpadding='1' cellspacing='7'>
	<tr>
		<td>
		{SITECONTACTINFO}
		<br />
		</td>
	</tr>
	</table>";
}
*/

$CONTACT_TEMPLATE['info'] = "

	<div id='contactInfo' >
		<address>{SITECONTACTINFO}</address>
	</div>

";


$CONTACT_TEMPLATE['menu'] =  '
	<div class="contactMenuForm">
		<div class="control-group form-group"><div class="controls">
			<label for="contactName">'.LANCONTACT_03.'</label>
				{CONTACT_NAME}
		 </div></div>
		<div class="control-group form-group"><div class="controls">
			<label class="control-label" for="contactEmail">'.LANCONTACT_04.'</label>
				{CONTACT_EMAIL}
		</div></div>
		<div class="control-group form-group"><div class="controls">
			<label for="contactBody" >'.LANCONTACT_06.'</label>
				{CONTACT_BODY=rows=5&cols=30}
		</div></div>
		<div class="control-group form-group"><div class="controls"><label for="gdpr">'.LANCONTACT_24.'</label>
			<div class="checkbox">
				<label>{CONTACT_GDPR_CHECK} '.LANCONTACT_21.'</label>
				<div class="help-block">{CONTACT_GDPR_LINK}</div> 
			</div>
		</div></div>
		{CONTACT_SUBMIT_BUTTON}
	</div>       
 ';
 
 
	// Option I - new sc style variable and format, global available per shortcode (mode also applied)
	// sc_style is renamed to sc_wrapper and uppercased now - distinguished from the legacy $sc_style variable and compatible with the new template standards, we deprecate $sc_style soon
 
	// $SC_WRAPPER['CONTACT_EMAIL_COPY'] 		= "<tr><td>{---}".LANCONTACT_07."</td></tr>";
	// $SC_WRAPPER['CONTACT_PERSON'] 			= "<tr><td>".LANCONTACT_14."<br />{---}</td></tr>";
	// $SC_WRAPPER['CONTACT_IMAGECODE'] 			= "<tr><td>".LANCONTACT_16."<br />{---}";
	// $SC_WRAPPER['CONTACT_IMAGECODE_INPUT'] 	= "{---}</td></tr>";
 
 	
	// Option II - Wrappers, used ONLY with batch objects, requires explicit wrapper registration
	// In this case (see contact.php) e107::getScBatch('contact')->wrapper('contact/form')
	// Only one Option is used - WRAPPER > SC_STYLE

	$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE'] 			= "<div class='control-group form-group'><label for='code-verify'>{CONTACT_IMAGECODE_LABEL}</label> {---}";
	$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE_INPUT'] 	= "{---}</div>";
	$CONTACT_WRAPPER['form']['CONTACT_EMAIL_COPY'] 			= "<div class='control-group form-group'>{---}".LANCONTACT_07."</div>";
	$CONTACT_WRAPPER['form']['CONTACT_PERSON']				= "<div class='control-group form-group'><label for='contactPerson'>".LANCONTACT_14."</label>{---}</div>";

	$CONTACT_TEMPLATE['form'] = "
	<form action='".e_SELF."' method='post' id='contactForm' >

	{CONTACT_PERSON}
	<div class='control-group form-group'><div class='controls'><label for='contactName'>".LANCONTACT_03."</label>
		{CONTACT_NAME}
	</div></div>
	<div class='control-group form-group'><div class='controls'><label for='contactEmail'>".LANCONTACT_04."</label>
		{CONTACT_EMAIL}
	</div></div>
	<div class='control-group form-group'><div class='controls'><label for='contactSubject'>".LANCONTACT_05."</label>
		{CONTACT_SUBJECT}
	</div></div>

		{CONTACT_EMAIL_COPY}

	<div class='control-group form-group'><div class='controls'><label for='contactBody'>".LANCONTACT_06."</label>
		{CONTACT_BODY}
	</div></div>

	{CONTACT_IMAGECODE}
	{CONTACT_IMAGECODE_INPUT}

	<div class='form-group'><label for='gdpr'>".LANCONTACT_24."</label>
		<div class='checkbox'>
			<label>{CONTACT_GDPR_CHECK} ".LANCONTACT_21."</label>
			<div class='help-block'>{CONTACT_GDPR_LINK}</div> 
		</div>
	</div>
	
	

	<div class='form-group'>
	{CONTACT_SUBMIT_BUTTON}
	</div>

	</form>";

	// Customize the email subject
	// Variables:  CONTACT_SUBJECT and CONTACT_PERSON as well as any custom fields set in the form. )
	$CONTACT_TEMPLATE['email']['subject'] = "{CONTACT_SUBJECT}";
	
	
	//see theme preferences
	$CONTACT_TEMPLATE['map'] = e107::pref('theme', 'map');
	
	/* prepared for $CONTACT_TEMPLATE['layout'] */
  /* caption has to be here because there is 2x tablerender and h1 would be there 2x */
  /* LANs are not loaded in layout files */
  
  $CONTACT_TEMPLATE['layout']  =  
  '<div class="container"> 
    <h1 class="mt-4 mb-3">'.PAGE_NAME.'</h1> 
    <!-- Content Row -->
     <div class="row">
       <!-- Map Column -->
       <div class="col-lg-8 mb-4"> '
			   .$CONTACT_TEMPLATE['map'].'
       </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
			   <h3>'.LANCONTACT_01.'</h3> ' 
         .$CONTACT_TEMPLATE['info'].
			'</div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <div class="row">
      <div class="col-lg-8 mb-4">
			<h3>'.LANCONTACT_02.'</h3>' 
			.$CONTACT_TEMPLATE['form'].
	'   </div>
    </div> 
		<!-- /.row -->
  </div>
	<!-- /.container -->';
	
	/* use this for 2.2.1 */
  $CONTACT_TEMPLATE['info'] = '';
	$CONTACT_TEMPLATE['form'] = $CONTACT_TEMPLATE['layout'];	
	

?>
