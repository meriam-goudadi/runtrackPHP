<?php
$host = 'localhost';
$username = "root";
$password = "";

try {
    $bdd  = new PDO("mysql:host=$host;dbname=jour08;charset=utf8", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connection Réussi';
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
$sql = "SELECT * FROM etudiants";
$resultat = $bdd->prepare($sql);
$resultat->execute();
$etudiants = $resultat->fetchAll(PDO::FETCH_ASSOC);
/* var_dump($etudiants); */
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau PHP-(SQL)</title>
</head>

<body>
    <table border='1'>
        <thead>
            <tr>
                <th class="tab">Nom</th>
                <th class="tab">Prénom</th>
                <th class="tab">Naissance</th>
                <th class="tab">Sexe</th>
                <th class="tab">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($etudiants as $etudiant) {
                echo "<tr>
                            <td class=\"tab\">$etudiant[nom]</td>
                            <td class=\"tab\">$etudiant[prénom]</td>
                            <td class=\"tab\">$etudiant[naissance]</td>
                            <td class=\"tab\">$etudiant[sexe]</td>
                            <td class=\"tab\">$etudiant[email]</td>
                        </tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>