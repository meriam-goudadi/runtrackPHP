<?php
// Démarre la session
session_start();

// Vérifie si le formulaire a été soumis
if (isset($_POST['submit']) && isset($_POST['prenom']) && $_POST['prenom'] !== '') {
    // Si la variable de session 'prenoms' n'existe pas, on l'initialise comme un tableau vide
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }
    
    // Ajouter le prénom soumis dans le tableau de la session
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

// Réinitialiser la liste si le bouton 'reset' a été cliqué
if (isset($_POST['reset'])) {
    // Supprimer la variable de session 'prenoms'
    unset($_SESSION['prenoms']);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Prénoms</title>
</head>
<body>
    <!-- Formulaire pour ajouter un prénom -->
    <form method="POST">
        <label for="prenom">Entrez un prénom :</label>
        <input type="text" name="prenom" id="prenom">
        <button type="submit" name="submit">Ajouter</button>
    </form>

    <hr>

    <!-- Afficher la liste des prénoms -->
    <h3>Liste des prénoms :</h3>
    <?php
    if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
        echo "<ul>";
        foreach ($_SESSION['prenoms'] as $prenom) {
            echo "<li>" . htmlspecialchars($prenom) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Aucun prénom ajouté.</p>";
    }
    ?>

    <!-- Formulaire pour réinitialiser la liste -->
    <form method="POST">
        <button type="submit" name="reset">Réinitialiser la liste</button>
    </form>
</body>
</html>
