<?php 

function addition ( $nb1 , $nb2) 

{
$result = $nb1 + $nb2 ;
return $result;
}


$nb1 = 5;
$nb2 = 3;
$result = addition($nb1, $nb2);

echo $result . "\n";

?>