<?php
function transformation($str, $option) {
    switch ($option) {
        case 'gras':
            $words = explode(' ', $str);
            foreach ($words as &$word) {
                if (ctype_upper($word[0])) {
                    $word = "<b>$word</b>";  // Met en gras les mots commençant par une majuscule
                }
            }
            return implode(' ', $words);

        case 'cesar':
            $shift = 2;
            $newStr = '';
            for ($i = 0; $i < strlen($str); $i++) {
                $newStr .= chr(ord($str[$i]) + $shift);  // Décale chaque caractère
            }
            return $newStr;

        case 'plateforme':
            $words = explode(' ', $str);
            foreach ($words as &$word) {
                if (substr($word, -2) == 'me') {
                    $word = str_replace('me', '_', $word);  // Remplace "me" par "_"
                }
            }
            return implode(' ', $words);

        default:
            return $str;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $str = $_POST['str'];
    $option = $_POST['option'];
    echo transformation($str, $option);
}
?>

<!-- Formulaire HTML -->
<form method="POST" action="">
    <label for="str">Texte:</label>
    <input type="text" id="str" name="str" required><br><br>
    
    <label for="option">Transformation:</label>
    <select id="option" name="option">
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select><br><br>
    
    <input type="submit" value="Appliquer">
</form>
