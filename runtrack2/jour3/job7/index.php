<?php
// Définir la chaîne de caractères
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Trouver la longueur de la chaîne
$length = strlen($str);

// Créer une nouvelle chaîne vide pour stocker le résultat
$newStr = "";

// Parcourir la chaîne et remplacer chaque caractère par celui suivant
for ($i = 0; $i < $length; $i++) {
    // Si c'est le dernier caractère, on le remplace par le premier
    if ($i == $length - 1) {
        $newStr .= $str[0];
    } else {
        $newStr .= $str[$i + 1];
    }
}

// Affichage du résultat
echo $newStr;
?>
