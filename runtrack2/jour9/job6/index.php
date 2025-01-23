<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $resultat = $conn->query("SELECT COUNT(*) AS total FROM etudiants");
    $etudiants = $resultat->fetch_ASSOC();

    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Nombre Total d'étudiants</h1>

        <table border='1'>
            <thead>
                <tr>
                    <th>Nombre d'étudiants</th>
                </tr>
            </thead>
            <tbody>

                <?php
                  
                        echo ("<tr>
                            <td>" . $etudiants['total'] . "</td>
                        </tr>");
                    
                ?>

            </tbody>
        </table>
    </body>
</html>