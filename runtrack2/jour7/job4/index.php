<?php
// Vérification si le formulaire de connexion a été soumis
if (isset($_POST['connexion']) && isset($_POST['prenom']) && $_POST['prenom'] !== '') {
    // Enregistrer le prénom dans un cookie qui expire dans 1 heure
    setcookie("prenom", $_POST['prenom'], time() + 3600);
}

// Vérification si le bouton "Déconnexion" a été cliqué
if (isset($_POST['deco'])) {
    // Supprimer le cookie en définissant une expiration dans le passé
    setcookie("prenom", "", time() - 3600);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>

<?php
// Vérifier si le cookie 'prenom' existe
if (isset($_COOKIE['prenom'])) {
    // Si le cookie existe, afficher le message de bienvenue
    echo "<p>Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " !</p>";
    // Afficher le bouton de déconnexion
    echo '<form method="POST">
            <button type="submit" name="deco">Déconnexion</button>
          </form>';
} else {
    // Sinon afficher le formulaire de connexion
    echo '<form method="POST">
            <label for="prenom">Entrez votre prénom :</label>
            <input type="text" name="prenom" id="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
          </form>';
}
?>

</body>
</html>
