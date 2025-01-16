<?php
// Vérification si des arguments GET existent
if (!empty($_GET)) {
    echo "<table border='1'>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>";

    // Parcours de tous les arguments $_GET
    foreach ($_GET as $key => $value) {
        echo "<tr>
                <td>$key</td>
                <td>$value</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "Aucun argument GET n'a été fourni.";
}
?>

<form method="GET" action="votre_script.php">
    <input type="text" name="arg1" value="valeur1">
    <input type="text" name="arg2" value="valeur2">
    <input type="submit" value="Envoyer">
</form>
