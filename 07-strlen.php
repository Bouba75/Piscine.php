<?php

use LDAP\Result;

function Verifierlongueur ($chaine){
if (strlen($chaine) >10 ){
    return "longue";
}
else {
    return "courte";
}
}
$chaine1 = "Visca Barca ! " ;
$chaine2 = "Vamos" ; 

$result1 = Verifierlongueur($chaine1);
$result2 = Verifierlongueur ($chaine2);

echo $result1   . "\n";
echo $result2   . "\n";

?>
