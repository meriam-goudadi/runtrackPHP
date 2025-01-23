-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 22 jan. 2025 à 13:12
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jour08`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prénom` varchar(255) NOT NULL,
  `naissance` int NOT NULL,
  `sexe` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`ID`, `nom`, `prénom`, `naissance`, `sexe`, `email`) VALUES
(1, 'Zimmermann', 'Cyril', 19890102, 'homme', 'cyril@laplateforme.io'),
(2, 'Soriano', 'Jessica', 19950908, 'femme', 'jessica@laplateforme.io'),
(3, 'Roumégas', 'Roxan', 20160908, 'homme', 'roxan@laplateforme.io'),
(4, 'Assens', 'Pascal', 19991231, 'homme', 'pascal@laplateforme.io'),
(5, 'Cristinelli', 'Terry', 20050201, 'homme', 'terry@laplateforme.io'),
(6, 'Habib', 'Ruben', 19930526, 'homme', 'ruben.habib@laplateforme.io'),
(7, 'Dupont', 'Toto', 20191107, 'homme', 'toto@laplateforme.io'),
(8, 'Zimmermann', 'Cyril', 19890102, 'homme', 'cyril@laplateforme.io'),
(9, 'Soriano', 'Jessica', 19950908, 'femme', 'jessica@laplateforme.io'),
(10, 'Roumégas', 'Roxan', 20160908, 'homme', 'roxan@laplateforme.io'),
(11, 'Assens', 'Pascal', 19991231, 'homme', 'pascal@laplateforme.io'),
(12, 'Cristinelli', 'Terry', 20050201, 'homme', 'terry@laplateforme.io'),
(13, 'Habib', 'Ruben', 19930526, 'homme', 'ruben.habib@laplateforme.io'),
(14, 'Dupont', 'Toto', 20191107, 'homme', 'toto@laplateforme.io');

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

DROP TABLE IF EXISTS `salles`;
CREATE TABLE IF NOT EXISTS `salles` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `ID_étage` int NOT NULL,
  `capacité` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`ID`, `nom`, `ID_étage`, `capacité`) VALUES
(1, 'Lounge', 1, 100),
(2, 'Studio Son', 1, 5),
(3, 'Broadcasting', 2, 50),
(4, 'Bocal Peda', 2, 4),
(5, 'Coworking', 2, 80),
(6, 'Studio Video', 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `étage`
--

DROP TABLE IF EXISTS `étage`;
CREATE TABLE IF NOT EXISTS `étage` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `numéro` int NOT NULL,
  `supercie` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `étage`
--

INSERT INTO `étage` (`ID`, `nom`, `numéro`, `supercie`) VALUES
(1, 'RDC', 0, 500),
(2, 'R+1', 1, 500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
