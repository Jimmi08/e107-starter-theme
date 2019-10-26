<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes. 
 *
*/


class theme_shortcodes extends e_shortcode
{
    var $override = true;
    var $file_extension = '.html';
    var $sitetheme = 'bootstrap4';

    private $pm_prefs = null;
    private $pm = null;
    
    function __construct()
    {
        if( e107::isInstalled('pm') )
        {
            e107::includeLan(e_PLUGIN.'pm/languages/'.e_LANGUAGE.'.php');
            require_once(e_PLUGIN."pm/pm_func.php");
    
            $this->pm = new pmbox_manager();
    
            $this->pm_prefs = $this->pm->prefs();	
        }
      
        $this->sitetheme = e107::getPref('sitetheme');
  
        if(e107::isInstalled('jmtheme')) 
        {
            $where = 'layout_theme = "'.$this->sitetheme.'" AND layout_mode = "'.THEME_LAYOUT.'" LIMIT 1 ';
          $this->customlayout = e107::getDb()->retrieve('jmlayout', '*', $where ); 
        }
          
        if (is_readable(e_THEME.$this->sitetheme."/theme.html")) 
        {
             $this->file_extension = ".html";
  
        }
        else $this->file_extension = ".php";           
    }

	function sc_layout_header($parm)
	{    
		$header = varset( $this->customlayout['layout_header'] , "header_default");	  
		$headerpath = e_THEME. $this->sitetheme.'/headers/'.$header. $this->file_extension;
 
		if(file_exists($headerpath)) {    
			$text = file_get_contents($headerpath);    	 
			$text = e107::getParser()->parseTemplate($text);  
        } 
	    else $text = '';
		return $text;
    }		
  
	function sc_layout_footer($parm)
	{
		$footer = varset( $this->customlayout['layout_footer'] , "footer_default");
		$footerpath = e_THEME. $this->sitetheme.'/footers/'.$footer.$this->file_extension;

		if(file_exists($footerpath)) {
		    $text = file_get_contents($footerpath); 
            $text = e107::getParser()->parseTemplate($text);      
		} 
        else $text = '';
		return $text;
    }	    
}






