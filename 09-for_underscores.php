<?php

function afficherMessage($iteration) {
    echo 'Hello';

    if ($iteration === 5) {
        echo '_ _ _';
    }

    echo "\n";
}

for ($i = 1; $i <= 10; $i++) {
    afficherMessage($i);
}

?>
