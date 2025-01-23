<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $resultat = $conn->query("SELECT SUM(capacité) AS totale FROM salles");
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
        <h1>Capacité Totale des salles</h1>

        <table border='1'>
            <thead>
                <tr>
                    <th>Capacité Totale</th>
                </tr>
            </thead>
            <tbody>

                <?php
                  
                        echo ("<tr>
                            <td>" . $salles['totale'] . "</td>
                        </tr>");
                    
                ?>

            </tbody>
        </table>
    </body>
</html>