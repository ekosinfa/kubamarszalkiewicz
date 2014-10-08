<?php
//Państwa, miasta.
$rzeczy = array(
	"panstwa"=>array(
		'I'=>'Irlandia',
		'D'=>'Dania'),
	"miasta"=>array(
		'I'=>'Istad',
		'D'=>'Dom'),
	);

$litera = 'I;'

foreach($rzeczy as $rzecz){
	print $rzecz["$litera"];
}
