<?php
/*
* Copyright (c) e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id: e_shortcode.php 12438 2011-12-05 15:12:56Z secretr $
*
*/

if (!defined('e107_INIT')) { exit; }
 
class themeoptions_shortcodes extends e_shortcode
{
	protected $userReg = false; // user registration pref.

	public $var;	
	public $pref;  
	public $tojm_pref;
	  
	function __construct()
	{
		$this->pref = e107::getPref();
		$this->tojm_pref = e107::pref('themeoptions');;
		
    // needed for login shortcodes
		$this->userReg = intval($pref['user_reg']);	
    
   
	}
 
  /* type:  tag (default), link */
  /* class: classes list or empty  example: {THEME_FPW_LINK: class=btn btn-warning} */  
 	function sc_theme_fpw_link($parm='')
	{

    $parms = eHelper::scParams($parm);
    $type  = vartrue($parms['type']) ?  vartrue($parms['type'])  : 'tag';    
    $class = vartrue($parms['class']) ? "class='".$parms['class']."'" : ' ';
 
		if (!$this->pref['auth_method'] || $this->pref['auth_method'] == 'e107')
		{
			return $type == 'link' ? SITEURL.'fpw.php' : 
      "<a ".$class." id='login_menu_link_fpw' href='".SITEURL."fpw.php' title=\"".LAN_LOGIN_12."\">".LAN_LOGIN_12."</a>";
		}
		return '';

	}

  /* type:  tag (default), link */
  /* class: classes list or empty  example: {THEME_FPW_LINK: class=btn btn-warning} */
  /* id: tag id or empty  example: {THEME_SIGNUP_LINK: class=btn btn-warning&id=login_menu_link_signup} */     
 	function sc_theme_signup_link($parm='')
	{ 
    $parms = eHelper::scParams($parm);
    
    $type  = vartrue($parms['type']) ?  vartrue($parms['type'])  : 'tag';    
    $class = vartrue($parms['class']) ? "class='".$parms['class']."'" : ' ';
    $id = vartrue($parms['id']) ? "id='".$parms['id']."'" : ' ';
 
		if ($this->pref['user_reg'] == 1)
		{
			if (!$this->pref['auth_method'] || $this->pref['auth_method'] == 'e107')
			{
				return $parm == 'link' ? e_SIGNUP : 
        "<a ".$class." ".$id." href='".e_SIGNUP."' title=\"".LAN_LOGIN_11."\">".LAN_LOGIN_11."</a>";
			}
 		}
		return '';
	}
  
  /* class: classes list otherwise always core classes */  
	function sc_theme_login_submit($parm="") //FIXME use $frm
	{
    $parms = eHelper::scParams($parm);
    if(empty($this->pref['user_reg']))
		{
			return null;
		}
    $class = vartrue($parms['class']) ?  $parms['class'] : 'btn btn-primary btn-large btn-lg button';
 
		return "<input class='".$class."' type='submit' name='userlogin' value=\"".LAN_LOGIN_9."\" />";
	}
  
 
  
  /* returns title of page for using in theme - mainly in separate header above content */
  /* example {TOJM_PAGETITLE} */  
  
 	function sc_tojm_pagetitle($parm='')
	{
   if(defined('e_PAGETITLE') )  { return e_PAGETITLE; }
   if(defined('PAGE_NAME') )  { return PAGE_NAME; }
   if((strpos(e_REQUEST_URI, 'login') !== false)) {return LAN_TO_LOGINPAGENAME;}
  }
  
  /* replace of SITETAG shortcode */
  /* multilan option */
  /* example {TOJM_SITETAG} */
  
 	function sc_tojm_sitetag($parm='')
	{     
	 $sitetag = $this->tojm_pref['site_tag'][e_LANGUAGE]; 
	 return e107::getParser()->toHTML($sitetag, false, 'emotes_off,defs');
  }  
  
  /* replace of SITETAG shortcode */
  /* multilan option */ 
  /* example {TOJM_SITEDESCRIPTION} */
  
 	function sc_tojm_sitedescription($parm='')
	{     
	 $sitedesc = $this->tojm_pref['site_description'][e_LANGUAGE]; 
	 return e107::getParser()->toHTML($sitedesc, false, 'emotes_off,defs');
  }    
   
}
?>