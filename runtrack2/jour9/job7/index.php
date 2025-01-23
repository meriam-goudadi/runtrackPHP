<?php
    $hostname = "localhost";
    $dbname = 'jour08';
    $username = 'root';
    $password = '';
            
    //On établit la connexion
    $conn = new mysqli($hostname, $username, $password, $dbname);
    $resultat = $conn->query("SELECT superficie AS totale FROM étages");
    $étages = $resultat->fetch_ASSOC();

    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Superficie Totale des étages</h1>

        <table border='1'>
            <thead>
                <tr>
                    <th>Superficie Totale</th>
                </tr>
            </thead>
            <tbody>

                <?php
                  
                        echo ("<tr>
                            <td>" . $étages['totale'] . "</td>
                        </tr>");
                    
                ?>

            </tbody>
        </table>
    </body>
</html>