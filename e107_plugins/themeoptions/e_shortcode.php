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
  
	function __construct()
	{
		$this->pref = e107::getPref();
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
  
  /* class: classes list otherwise always core classes */
    
	function sc_theme_social_login($parm)
	{
    $parms = eHelper::scParams($parm);
		$pref = e107::getPref('social_login_active');
		$tp = e107::getParser();
			
		$size = empty($parm['size']) ? '3x' : $parm['size'];	
		$class = vartrue($parms['class']) ?  $parms['class'] : 'signup-xup  btn btn-primary';
		 	
		if(!empty($pref))
		{
			$text = "";
			$providers = e107::getPref('social_login'); 

			foreach($providers as $p=>$v)
			{
				
        $p = strtolower($p);
        $itemclass = vartrue($parms['classprov']) ?  $class.' '.$parms['classprov'].$p : $class;   
				if($v['enabled'] == 1)
				{
					
				//		$text .= "<a href='".e107::getUrl()->create('system/xup/login?provider='.$p.'&back='.base64_encode(e_REQUEST_URL))."'><img class='e-tip' title='Register using your {$p} account' src='".e_IMAGE_ABS."xup/{$p}.png' alt='' /></a>";		
				
					$ic = strtolower($p);
					
					if($ic == 'live')
					{
						$ic = 'windows';
					}
					
					// 'signup' Creates a new XUP user if not found, otherwise it logs the person in. 
					
					$button = (defset('FONTAWESOME') === 4) ? $tp->toGlyph('fa-'.$ic, array('size'=>$size)) : "<img class='e-tip' title='Register using your {$p} account' src='".e_IMAGE_ABS."xup/{$p}.png' alt='' />";			
					$text .= " <a title='Sign-in using your {$p} account' role='button' class='".$itemclass."' href='".e107::getUrl()->create('system/xup/signup?provider='.$p.'&back='.base64_encode(e_REQUEST_URL))."'>".$button."</a> ";		
				}
				//TODO different icon options. see: http://zocial.smcllns.com/
			}	
			
		//	$text .= "<hr />";
			return $text;	
		}	
	}
  
  /* type:  tag (default), link */
  /* class: classes list or empty  example: {THEME_FPW_LINK: class=btn btn-warning} */  
  /* defined in theme LAN LAN_TO_LOGINPAGENAME */
  
 	function sc_theme_pagetitle($parm='')
	{
   if(defined('PAGE_NAME') )  { return PAGE_NAME; }
   if((strpos(e_REQUEST_URI, 'login') !== false)) {return LAN_TO_LOGINPAGENAME;}
  }
}
?>