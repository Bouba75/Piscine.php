<?php



function AffichageTableau ( $tableau ){
foreach ($tableau as $element){

    echo $element   . "\n";
}
}
$list = array ('Pomme', 'Banane', 'Orange', 'Fraise', 'Kiwi');

AffichageTableau ( $list);







?>
