<?php
// Vérification après la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];

    // Vérification si le nombre est pair ou impair
    if (is_numeric($nombre)) {
        if ($nombre % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre valide.";
    }
}
?>

<!-- Formulaire GET -->
<form method="GET" action="">
    <label for="nombre">Nombre :</label>
    <input type="text" id="nombre" name="nombre" required><br><br>
    
    <input type="submit" value="Vérifier">
</form>