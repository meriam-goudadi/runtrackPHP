<?php
function leetSpeak($str) {
    $leet = array('a' => '4', 'e' => '3', 'i' => '1', 'o' => '0', 't' => '7');
    $str = strtolower($str);  // Convertit la chaîne en minuscule pour la comparaison
    $strLeet = '';

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (isset($leet[$char])) {
            $strLeet .= $leet[$char];  // Remplace par le caractère "leet"
        } else {
            $strLeet .= $char;  // Garde le caractère inchangé
        }
    }

    return $strLeet;
}

// Exemple d'appel
echo leetSpeak("Bonjour");  // Affiche "B0nj0ur"
?>
