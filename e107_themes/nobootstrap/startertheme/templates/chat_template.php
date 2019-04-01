<?php

// ##### CHAT TABLE -----------------------------------------------------------------------------
if(!$CHAT_TABLE_START){
		$CHAT_TABLE_START = "";
}
if(!$CHAT_TABLE){
		$CHAT_TABLE = "\n
		<div class='indent'>
			<div class='forumheader3'>
				<img src='".THEME."images/bullet2.gif' alt='bullet' /> \n<b>{CHAT_TABLE_NICK}</b> ".CHATBOX_L22." {CHAT_TABLE_DATESTAMP}<br />
				<div class='defaulttext'>{CHAT_TABLE_MESSAGE}</div>\n
			</div>
		</div>\n";

}
if(!$CHAT_TABLE_END){
		$CHAT_TABLE_END = "";
}
// ##### ------------------------------------------------------------------------------------------


?>