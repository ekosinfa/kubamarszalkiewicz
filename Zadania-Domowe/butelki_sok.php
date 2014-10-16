<?php
$lb = 99; // lb to liczba butelek
while($lb >= 2){
	print "$lb butelek soku jabłkowego na ścianie, $lb butelek soku\r\n";
	$lb = $lb - 1;
	print "Weż jedną i podaj dalej, $lb butelek soku na ścianie.\r\n";
}
print "$lb butelek soku jabłkowego na ścianie, $lb butelek soku.\r\n";
$lb = $lb - 1;
print "Weż jedną i podaj dalej, nie ma więcej butelek soku na ścianie.\r\n";
print "Nie ma więcej butelek soku na ścianie, nie ma więcej butelek soku.\r\n";
$lb = 99;
print "Idź do sklepu i kup więcej, $lb butelek soku na scianie.\r\n";
?>
