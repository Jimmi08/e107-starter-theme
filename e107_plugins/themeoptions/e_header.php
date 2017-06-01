<?php
/*
 * Bootstrap Colorpicker  - Colorpicker Enabler for e107
 *
 * Copyright (C) 2015 Patrick Weaver (http://trickmod.com/)
 * For additional information refer to the README.md file.
 *
 */
if(!defined('e107_INIT')){ exit; }


if(e107::pref('themeoptions', 'colorpicker_enabled') == true)
{   
	e107::css('themeoptions', 'css/bootstrap-colorpicker.min.css');
	e107::js('themeoptions', 'js/bootstrap-colorpicker.min.js', 'jquery');
	e107::js('themeoptions', 'js/script.js', 'jquery');
}
 