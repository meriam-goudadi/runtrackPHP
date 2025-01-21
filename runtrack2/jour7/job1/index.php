<?php
// Démarre la session pour pouvoir utiliser les variables de session
session_start();

// Vérifie si la variable de session 'nbvisites' existe, sinon initialise-la à 0
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

// Incrémente le compteur de visites
$_SESSION['nbvisites']++;

// Si le bouton "reset" est cliqué, réinitialise le compteur
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>
<body>
    <!-- Affiche le nombre de visites -->
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>

    <!-- Formulaire avec un bouton reset -->
     <form method="POST">
        <button type="submit" name="reset">Reset</button>
     </form>
</body>
</html>