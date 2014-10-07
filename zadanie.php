<?php
//Wydawnictwo "Komiks" sprzedało we wrześniu 17905 komiksów. Teraz musi zapłacić
//podatek za nie. Stwórz program pomagający to obliczyć wiedząc, że: podatek od
//komiksów o bohaterach wynosi 11%, od komiksów inspirowanych anime 8%, a od
//innych 6%. Poniżej jest tablica ze sprzedanymi komiksami.

$komiksy = array(
	"1"=>array(
		'tytul'=>'SuperMaxxx',
		'egzemplarze_sprzedane'=>'3975',
		'cena'=>'23.49',
		'gatunek'=>'bohaterowie'),
	"2"=>array(
		'tytul'=>'Chan zdobywca',
		'egzemplarze_sprzedane'=>'279',
		'cena'=>'13.56',
		'gatunek'=>'anime'),
	"3"=>array(
		'tytul'=>'Miasto cienia VI',
		'egzemplarze_sprzedane'=>'10760',
		'cena'=>'5.55',
		'gatunek'=>'bohaterowie'),
	"4"=>array(
		'tytul'=>'Jak poznałem Alexa',
		'egzemplarze_sprzedane'=>'2891',
		'cena'=>'12.44',
		'gatunek'=>'inne')
	);

//Pamiętajcie o <?php na początku.

?>
