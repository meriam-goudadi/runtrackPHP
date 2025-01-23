<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $resultat = $conn->query("SELECT AVG(capacité) AS moyenne FROM salles");
    $salles = $resultat->fetch_ASSOC();

    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Capacité moyenne des salles</h1>

        <table border='1'>
            <thead>
                <tr>
                    <th>Capacité moyenne</th>
                </tr>
            </thead>
            <tbody>

                <?php

                        echo ("<tr>
                            <td>" . $salles['moyenne'] . "</td>
                        </tr>");
                    
                ?>

            </tbody>
        </table>
    </body>
</html>