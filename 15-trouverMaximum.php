<?php


function trouverMax($tableau) {
    
    if (empty($tableau)) {
        return null;
    }

    return max($tableau);
}

$nombres = array(5, 12, 8, 3, 10, 6);

$valeurMaximale = trouverMax($nombres);
echo "La valeur maximale dans le tableau est : $valeurMaximale\n";
?>
