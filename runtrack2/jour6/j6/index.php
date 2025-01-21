<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer le style choisi dans la liste déroulante
    $style = $_POST['style'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec Style</title>
    
    <?php
    // En fonction du style choisi, inclure le fichier CSS correspondant
    if (isset($style)) {
        echo '<link rel="stylesheet" href="' . $style . '.css">';
    }
    ?>
</head>
<body>
    <form method="POST">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
        <button type="submit">Valider</button>
    </form>
</body>
</html>
