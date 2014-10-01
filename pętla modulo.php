<?php
$licz = 1;
while ($licz<=100){
	if ($licz % 5 == 0){
		print "pięć ";
	}
	if ($licz % 3 == 0){
		print "trzy";
	}
	if (($licz % 3 != 0) and ($licz % 5 != 0)){
		print $licz;
	}
	print "\n";
		$licz = $licz +1;
}
