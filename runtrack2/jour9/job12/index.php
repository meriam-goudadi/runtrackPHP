<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $resultat = $conn->query("SELECT nom, prénom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'");
    $etudiants = $resultat->fetch_all(MYSQLI_ASSOC);

    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Etudiants nés entre 1998 et 2018</h1>

        <table border='1'>
            <thead>
                <tr>
                    
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Naissance</th>
                   
                </tr>
            </thead>
            <tbody>

                <?php
                    foreach ($etudiants as $champs) {
                        echo ("<tr>
                            <td>" . $champs['nom'] . "</td>
                            <td>" . $champs['prénom'] . "</td>
                            <td>" . $champs['naissance'] . "</td>
                        </tr>");
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>