<?php
$str = 'La Plateforme';
$str2 = 'Vive';
$str3 = '!';
echo "$str2 $str $str3 <br>";
echo "$str2" . ' ' . "$str" . ' ' . "$str3<br>"; /* autre manière de l'afficher mais sans espace */
?>

<?php
$val = "6";
$val1 = "4";
echo "$val" + "$val1";
?>

<?php
$mybool = true;
echo "<br>la valeur est égale à" . ' ' . ($mybool ? 'true': 'false');
?>

<!-- exercice bonus par moi-même pour moi-même -->
<?php
$nom = 'Goudadi';
$prenom = 'Mériam';
$note1 = 15;
$note2 = 19;
$moyenne = ($note1 + $note2) / 2;

echo '<br>Mlle ' . "$nom". ' ' . "$prenom" . ' ' . 'a eu une moyenne de ' . (($note1 + $note2) / 2) . ' sur 20 !<br>';
echo "Mlle $nom $prenom a eu $moyenne de moyenne."
?>