<?php
$konta = array(

"1"=>array(
  'imie'=>'Wioletta',
  'nazwisko'=>'Marcinek',
  'stan_konta'=>'6792zl',
  'przedmiot'=>'Polski'),
"2"=>array(
  'imie'=>'Tomasz',
  'nazwisko'=>'Orka',
  'stan_konta'=> '99zl',
  'przedmiot'=>'Biologia',
  ),
"3"=>array(
  'imie'=>'Marta',
  'nazwisko'=>'Stopa',
  'stan_konta'=>'3151zl',
  'przedmiot'=>'Matematyka'),
  );
  foreach($konta as $konto){
  	print $konto['imie'];
  	print ' '.$konto['nazwisko'];
  	if($konto['przedmiot']=='Matematyka'){
  		$konto['stan_konta'] = $konto['stan_konta']*0.43;
  		print ' '.$konto['stan_konta']."\n";
  	}
  	if($konto['przedmiot']=='Biologia'){
  		$konto['stan_konta'] = $konto['stan_konta']*0.08;
  		print ' '.$konto['stan_konta']."\n";
  	}
  	if($konto['przedmiot']=='Polski'){
  		$konto['stan_konta'] = $konto['stan_konta']*0.77;
  		print ' '.$konto['stan_konta']."\n";
  	}
  }
  ?>
