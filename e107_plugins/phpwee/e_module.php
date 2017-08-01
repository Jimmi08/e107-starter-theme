<?php

require_once ("phpwee.php");

function print_performance_graph($subject,$minified,$html){
	$before = strlen(gzcompress($html));
	$after = strlen(gzcompress($minified));	
	$improvement =  100 * (1-($after/$before));
	echo  "<table style='width:100%; border:1px solid grey;text-align:center'><tr><th colspan=3><b>$subject</th><tr><th>Gzipped Bytes Before PHPWee</th><th>Gzipped Bytes After PHPWee</th><th>% Performance Boost</th></tr><tr><td>$before before</td><td>$after after</td><td> $improvement % faster </td></table><br><br>";
}



?>