<?php
$licz = 1;
while ($licz<=100){
	if ($licz % 5 == 0){
		print "pięć ";
	}
	else{
	}
	if ($licz % 3 == 0){
		print "trzy";
	}
	else {
	}
	if (($licz % 3 != 0) and ($licz % 5 != 0)){
		print $licz;
	}
	else{
		
	}
	print "\n";
		$licz = $licz +1;
}
