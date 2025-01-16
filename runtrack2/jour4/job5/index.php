<?php
// Vérification après la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupération des valeurs saisies par l'utilisateur
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Vérification des informations de connexion
    if ($username == "John" && $password == "Rambo") {
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>

<!-- Formulaire de connexion -->
<form method="POST" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <input type="submit" value="Se connecter">
</form>