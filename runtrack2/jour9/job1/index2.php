<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $result = $conn->query("SELECT * FROM etudiants");
    $etudiants = $result->fetch_all(MYSQLI_ASSOC);

    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Liste des étudiants</h1>

        <table border='1'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    foreach ($etudiants as $etudiant => $champs) {
                        echo("
                        <tr>
                            <td>" . $champs['ID'] . "</td>
                            <td>" . $champs['nom'] . "</td>
                            <td>" . $champs['prénom'] . "</td>
                            <td>" . $champs['sexe'] . "</td>
                            <td>" . $champs['email'] . "</td>

                        </tr>");
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>