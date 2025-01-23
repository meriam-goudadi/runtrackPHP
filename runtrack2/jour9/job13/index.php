<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $resultat = $conn->query("SELECT étages.nom as nom_étage, salles.nom as nom_salle
        FROM étages JOIN salles WHERE salles.ID_étage = étages.ID;");
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
        <h1>Nom des salles et Nom de leur étage</h1>

        <table border='1'>
            <thead>
                <tr>
                    <th>Etage</th>
                    <th>Salle</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    foreach ($salles as $champs) {
                        echo ("<tr>
                            <td>" . $champs['nom_étage'] . "</td>
                            <td>" . $champs['nom_salle'] . "</td>
                        </tr>");
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>