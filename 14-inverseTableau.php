<?php



function InverserTableau ($tableau){
    
    return array_reverse($tableau);
}
$nombres = array(1, 2, 3, 4, 5);

$tableauInverse = InverserTableau( $nombres);

echo "Tableau bon" . implode( ',', $nombres)  . "\n";

echo "Tableau inversé " . implode( ',', $tableauInverse)  . "\n";





?>
