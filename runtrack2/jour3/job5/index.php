<?php
// Définition de la chaîne de caractères
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

// Définition du dictionnaire avec les voyelles et consonnes
$dic = [
    'voyelles' => ['a', 'e', 'i', 'o', 'u', 'y'],
    'consonnes' => []
];

// Variables pour stocker le comptage des voyelles et consonnes
$count_vowels = 0;
$count_consonants = 0;

// Conversion de la chaîne en minuscules pour simplifier la comparaison
$str = strtolower($str);

// Parcours de chaque caractère de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    
    // Vérification si le caractère est une voyelle
    if (in_array($char, $dic['voyelles'])) {
        $count_vowels++;
    }
    // Vérification si le caractère est une consonne
    elseif (ctype_alpha($char)) { // Verifie si c'est une lettre (ignore les espaces et autres caractères)
        $count_consonants++;
    }
}

// Affichage des résultats dans un tableau HTML
echo "<table border='1'>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>$count_vowels</td>
                <td>$count_consonants</td>
            </tr>
        </tbody>
      </table>";
?>
