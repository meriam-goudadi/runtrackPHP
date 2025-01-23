<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $resultat = $conn->query("SELECT * FROM salles ORDER BY capacité");
    $salles = $resultat->fetch_all(MYSQLI_ASSOC);

    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Capacité des salles par ordre croissant</h1>

        <table border='1'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Etage</th>
                    <th>Capacité</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    foreach ($salles as $champs) {
                        echo ("<tr>
                            <td>" . $champs['ID'] . "</td>
                            <td>" . $champs['nom'] . "</td>
                            <td>" . $champs['ID_étage'] . "</td>
                            <td>" . $champs['capacité'] . "</td>
                        </tr>");
                    }
                ?>

            </tbody>
        </table>
    </body>
</html>