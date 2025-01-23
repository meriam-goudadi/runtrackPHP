SELECT étages.nom as nom_étage, salles.nom as nom_salle
FROM étages JOIN salles WHERE salles.ID_étage = étages.ID;