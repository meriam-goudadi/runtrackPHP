<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dessiner une maison</title>
</head>
<body>
    <h1>Dessiner une maison</h1>
    <form method="post" action="">
        <label for="width">Largeur :</label>
        <input type="number" id="width" name="width" required>
        <br>
        <label for="height">Hauteur :</label>
        <input type="number" id="height" name="height" required>
        <br>
        <button type="submit">Dessiner la maison</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $width = intval($_POST['width']);
        $height = intval($_POST['height']);

        // Générer la maison
        $house = '';

        // Dessiner le toit
        for ($i = 1; $i <= $height; $i++) {
            $spaces = str_repeat(' ', $height - $i);
            $roof = str_repeat('/', $i) . str_repeat('\\', $i);
            $house .= $spaces . $roof . $spaces . "\n";
        }

        // Dessiner le corps de la maison
        for ($i = 1; $i <= $height; $i++) {
            $wall = '|' . str_repeat(' ', $width * 2 - 2) . '|';
            $house .= $wall . "\n";
        }

        // Afficher la maison
        echo "<pre>$house</pre>";
    }
    ?>
</body>
</html>