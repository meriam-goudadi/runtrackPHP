<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$resultat = "";

for ($i = 0; $i < strlen($str); $i += 2) {
    $resultat .= $str[$i];
}
echo "$resultat";
?>