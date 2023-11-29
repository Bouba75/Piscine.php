<?php

function NombreLettre ($lettre, $chaine){

$lettre = strtolower ($lettre);
$chaine = strtolower ( $chaine);

return substr_count($chaine, $lettre);
}

$lettreChoisie = 'B';
$chaineDeTexte = 'ChampionsLeague';

$resultat = NombreLettre ($lettreChoisie, $chaineDeTexte);

echo "Le nombre d'occurrences de la lettre '$lettreChoisie' 
dans la chaîne '$chaineDeTexte' est : $resultat   \n";


?>
