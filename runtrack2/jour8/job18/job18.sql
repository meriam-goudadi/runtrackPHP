SELECT étages.nom, salles.nom AS "Biggest Room", salle.capacité
FROM salles
JOIN étages ON salles.ID_étages = étages.ID_étages
WHERE salles.capacité = (SELECT MAX(capacité) FROM salles);
