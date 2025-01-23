<?php
// Connexion à la base de données -->
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour08";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée :" . $conn->connect_error);
}

// Requête SQL pour récupérer les données
$sql = "SELECT * FROM etudiants";
$resultat = $conn->query($sql);

// Vérifier si des données ont été retournées
if ($resultat->num_rows > 0) {
    
    // Début du tableau HTML
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";

    // Afficher les noms des colonnes (thead)
    while ($fieldinfo = $resultat->fetch_field()) {
        echo "<th>" . $fieldinfo->name . "</th>";
    }
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    // Afficher les données (tbody)
    while ($row = $resultat->FETCH_ASSOC()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "Aucune donnée trouvée.";
}

// Fermer la connexion :
$conn->close();
?>