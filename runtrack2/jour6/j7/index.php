<?php
function bubblesort($tab, $croissant) {
    $n = count($tab);  // Nombre d'éléments dans le tableau
    
    // Si croissant est true, trier dans l'ordre croissant, sinon dans l'ordre décroissant
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            if (($croissant && $tab[$j] > $tab[$j + 1]) || (!$croissant && $tab[$j] < $tab[$j + 1])) {
                // Échange des éléments si dans le mauvais ordre
                $temp = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $temp;
            }
        }
    }
    return $tab;  // Retourner le tableau trié
}

// Exemple d'utilisation :
$tab = ["abc", "ghi", "def"];
print_r(bubblesort($tab, true));  // Trie croissant
print_r(bubblesort($tab, false)); // Trie décroissant
?>
