<?php

for ($i = 0; $i <= 100; $i++) {
    if ($i <= 20) {
        // Afficher en italique si le nombre est entre 0 et 20
        echo "<i>$i</i><br>";
    } elseif ($i >= 25 && $i <= 50) {
        // Souligner le nombre si il est entre 25 et 50
        if ($i == 42) {
            // Afficher "La Plateforme_" à la place de 42
            echo "La Plateforme_<br>";
        } else {
            echo "<u>$i</u><br>";
        }
    } else {
        // Afficher normalement pour les autres nombres
        echo "$i<br>";
    }
}

?>
