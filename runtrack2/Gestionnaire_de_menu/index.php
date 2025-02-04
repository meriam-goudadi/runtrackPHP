<?php
// Connexion à la base de données avec PDO
try {
    $pdo = new PDO('mysql:host=localhost;dbname= gestionnaire_de_menu', 'user', 'MDP');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}


// Récupérer tous les menus avec leurs plats associés
$query = "
    SELECT m.id AS menu_id, m.name AS menu_name, m.description AS menu_description,
           d.name AS plat_name, d.price AS plat_prix
    FROM menus m
    LEFT JOIN plat_menu pm ON m.id = pm.menu_id
    LEFT JOIN plat d ON pm.plat_id = d.id
    ORDER BY m.id, d.name
";


$result = $pdo->query($query);


// Initialiser un tableau pour organiser les menus et les plats
$menus = [];


while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    // Organiser les menus et plats
    $menus[$row['menu_id']]['id'] = $row['menu_id'];
    $menus[$row['menu_id']]['nom'] = $row['menu_nom'];
    $menus[$row['menu_id']]['plat'][] = [
        'nom' => $row['plat_nom'],
        'prix' => $row['plat_prix']
    ];
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menus et Plats</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color:blue;
        }
        .menu {
            margin-bottom: 20px;
        }
        .menu-nom {
            font-size: 20px;
            font-weight: bold;
        }
        .menu-description {
            font-style: italic;
            margin-bottom: 10px;
        }
        .plat-item {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <h1>Menus et Plats</h1>


    <?php foreach ($menus as $menu): ?>
        <div class="menu">
            <p class="menu-nom"><?= htmlspecialchars($menu['nom']) ?></p>
            <p class="menu-description"><?= htmlspecialchars($menu['description']) ?></p>
           
            <?php if (isset($menu['plat'])): ?>
                <ul>
                    <?php foreach ($menu['plat'] as $plat): ?>
                        <li class="plat-item"><?= htmlspecialchars($plat['nom']) ?> - <?= number_format($plat['prix'], 2) ?> €</li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Aucun plat associé à ce menu</p>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>
