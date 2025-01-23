<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $result = $conn->query("SELECT nom, capacité FROM salles");
    $salles = $result->fetch_all(MYSQLI_ASSOC);

    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Liste des Salles</h1>

        <table border='1'>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Capacité</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    foreach ($salles as $champs) {
                        echo ("<tr>
                            <td>" . $champs['nom'] . "</td>
                            <td>" . $champs['capacité'] . "</td>
                        </tr>");
                    }
                ?>

            </tbody>
        </table>
    </body>
</html>