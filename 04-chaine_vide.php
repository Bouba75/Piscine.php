<?php

function verif ($Chaine) {

if ( empty ($chaine)) {
    return ' vide';
}
else {
    return ' Chaine non vide';
}
}

$chaine = 'Visca Barca';


$resulatchaine = verif($chaine);


echo $resulatchaine .  "\n";





?>
