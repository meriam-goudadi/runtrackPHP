<?php
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Appel de la fonction avec différentes valeurs
bonjour(true);  // Affiche "Bonjour"
bonjour(false); // Affiche "Bonsoir"
?>
