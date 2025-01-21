<?php
// Vérification si le bouton 'reset' a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser le cookie en lui donnant une date d'expiration passée
    setcookie("nbvisites", 0, time() - 3600); // Expiration passée pour effacer le cookie
}

// Vérification de l'existence du cookie 'nbvisites'
if (isset($_COOKIE['nbvisites'])) {
    // Si le cookie existe, incrémenter la valeur de 1
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    // Si le cookie n'existe pas, initialiser la valeur à 1 (première visite)
    $nbvisites = 1;
}

// Créer ou mettre à jour le cookie 'nbvisites' avec la nouvelle valeur
setcookie("nbvisites", $nbvisites, time() + 3600);  // Le cookie expire dans 1 heure
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Visites</title>
</head>
<body>
    <!-- Affichage du nombre de visites -->
    <p>Nombre de visites : <?php echo $nbvisites; ?></p>

    <!-- Formulaire pour réinitialiser le compteur -->
    <form method="POST">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>
</body>
</html>
