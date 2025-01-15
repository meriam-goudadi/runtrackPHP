<?php
$str = "“I'm sorry Dave I'm afraid I can't
do that.”";
$voyelles = "aeiouyAEIOUY";
$resultat = "";

for ($i = 0; $i < strlen($str); $i++) {
    if (strpos($voyelles, $str[$i]) !== false) {
        $resultat .= $str[$i];
    }
} echo $resultat;
?>