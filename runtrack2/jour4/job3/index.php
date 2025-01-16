<?php
// Affichage du nombre d'arguments passés via GET
echo "Nombre d'arguments POST : " . count($_POST);
?>

<form method="GET" action="votre_script.php">
    <input type="text" name="arg1" value="test1">
    <input type="text" name="arg2" value="test2">
    <input type="submit" value="Envoyer">
</form>