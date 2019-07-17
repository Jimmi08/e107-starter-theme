<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

$FAQS_TEMPLATE['start']	= "
<div class='faq-start'>{FAQ_SUBMIT_QUESTION: expand=1}
{FAQ_SUBMIT_QUESTION_LIST}
";


$FAQS_TEMPLATE['end']	= " </div>
	<div class='faq-submit-question'></div>
";

$FAQS_TEMPLATE['all']['start'] = "

	<h2 class='faq-listall'>{FAQ_CATEGORY=extend} </h2>
	<div class='mb-4' id='accordion{FAQ_CATEGORY_ID}' role='tablist' aria-multiselectable='true'>
 
";
$FAQS_TEMPLATE['all']['item'] = "
		 {FAQ_QUESTION=accordion|tags=1|share=1}";
		 
$FAQS_TEMPLATE['all']['end'] = "
</div></div>
";

$FAQS_TEMPLATE['caption'] = "{FAQ_CAPTION} <small>{FAQ_COUNT}</small>";


