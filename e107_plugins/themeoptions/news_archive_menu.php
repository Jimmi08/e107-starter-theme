<?php
/**
 * Copyright (C) 2008-2011 e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News by month menu
 */

if (!defined('e107_INIT')) { exit; }

$cString = 'nq_news_months_menu_'.md5(serialize($parm));
$cached = e107::getCache()->retrieve($cString);

if(!empty($parm))
{
	if(is_string($parm))
	{
		parse_str($parm, $parms);
	}
	else
	{
		$parms = $parm;
	}

}


if(false === $cached)
{   
	if(!function_exists('newsFormatDate'))
	{
		function newsFormatDate($year, $month, $day = "") {
			$date = $year;
			$date .= (strlen($month) < 2)?"0".$month:
			$month;
			$date .= (strlen($day) < 2 && $day != "")?"0".$day:
			$day;
			return $date;
		}
	}
	
	if(!isset($parms['showarchive']))
	{
		$parms['showarchive'] = 0;
	}

	
//	e107::lan('blogcalendar_menu', e_LANGUAGE); // FIXME decide on language file structure (#743)
	e107::includeLan(e_PLUGIN.'blogcalendar_menu/languages/'.e_LANGUAGE.'.php');

	$tp = e107::getParser();
	$sql = e107::getDb();
	
	$marray  = e107::getDate()->terms('month');
	

	//$parms['year'] = "2011 0";
	if(vartrue($parms['year']))
	{
		$date = $parms['year'];
		list($cur_year, $cur_month) = explode(" ", date($date));
		$start = mktime(0, 0, 0, 1, 1, $cur_year);
		$end = mktime(23, 59, 59, 12, 31, $cur_year);
		
		
		echo $cur_year;
		echo $end;
	}
	else 
	{
		$date = "Y n";
		list($cur_year, $cur_month) = explode(" ", date($date));
		$start = mktime(0, 0, 0, 1, 1, $cur_year);
		$end = time();
	}
	
	$req_year = $cur_year;
	if(e_PAGE == 'news.php' && strstr(e_QUERY, "month")) 
	{
		$tmp = explode('.', e_QUERY);
		$item = $tmp[1];
		$req_month = intval(substr($item, 4, 2));
		$req = 'month';
	} 
	else 
	{
		$req_month = $cur_month;
	}

	$xmonth_cnt = array();
	$month_links = array();
	 
	$sql->db_Mark_Time('News months menu');
	if(!$sql->select("news", "news_id, news_datestamp, news_render_type", "WHERE news_class IN (".USERCLASS_LIST.")
		AND (FIND_IN_SET('0', news_render_type) OR FIND_IN_SET(1, news_render_type))  ORDER BY news_datestamp DESC", true, true))
	{
	
   
		e107::getCache()->set($cString, '');
		return '';
	}    
	while ($news = $sql->fetch())
	{	
		$xmonth = date("n", $news['news_datestamp']);
		$xyear  = date("Y", $news['news_datestamp']);

		if (!isset($month_links[$xyear][$xmonth]) || !$month_links[$xyear][$xmonth])
		{
			$month_links[$xyear][$xmonth] = e107::getUrl()->create('news/list/month', 'id='.newsFormatDate($xyear, $xmonth));//e_BASE."news.php?month.".formatDate($req_year, $xmonth);
		}
		
   $months[$xyear][$xmonth] = 1;
	}

  
	e107::getDebug()->log($month_links);

	// go over the link array and create the option fields
	$menu_text = array();
	$template = e107::getTemplate('news', 'news_menu', 'months');
	$bullet = defined('BULLET') ? THEME_ABS.'images/'.BULLET : THEME_ABS.'images/bullet2.gif';
	$vars = new e_vars(array('bullet' => $bullet));
	foreach($months as $year=>$val)
		{
 
			foreach($val as $month=>$v)
			{        
					$vars->addData(array(
					'active' => $index == $req_month ? " active" : '',
					'url' => $month_links[$year][$month],
					'month' => $marray[$month].' '.$year ,
					'count' => $xmonth_cnt[$index],
					));
					$menu_text[] = $tp->simpleParse($template['item'], $vars);
			}
		}
		
 
	$cached = $template['start'].implode(varset($template['separator'],''), $menu_text).$template['end'];

	$ns->setContent('text', $cached);

	if($cached) 
	{
		if(!$parms['showarchive'])
		{
			$footer = '<div class="e-menu-link news-menu-archive"><a class="btn btn-default btn-sm" href="'.e_PLUGIN_ABS.'blogcalendar_menu/archive.php">'.BLOGCAL_L2.'</a></div>';
			$ns->setContent('footer', $footer);
			$cached .= $footer;

		}
		$cached = $ns->tablerender(BLOGCAL_L1." ".$req_year, $cached, 'news_archive_menu', true);
	}
	e107::getCache()->set($cString, $cached);
}

echo $cached;
