SELECT nom, MAX(capacité) FROM salles REPLACE('BiggestRoom');

/* SELECT etage.nom_etage, 
       salle.nom_salle AS "Biggest Room", 
       salle.capacite
FROM salles salle
JOIN etages etage ON salle.id_etage = etage.id_etage
WHERE salle.capacite = (SELECT MAX(capacite) FROM salles);
