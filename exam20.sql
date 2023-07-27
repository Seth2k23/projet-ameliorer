-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 27 juil. 2023 à 08:31
-- Version du serveur :  8.0.33-0ubuntu0.20.04.2
-- Version de PHP : 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exam20`
--

-- --------------------------------------------------------

--
-- Structure de la table `localite`
--

CREATE TABLE `localite` (
  `codelocalite` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nomlocalite` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `localite`
--

INSERT INTO `localite` (`codelocalite`, `nomlocalite`) VALUES
('P001', 'Cotonou'),
('P002', 'Porto-novo'),
('P003', 'Bohicon');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `codeProjet` varchar(55) NOT NULL,
  `nomprojet` varchar(100) DEFAULT NULL,
  `dateLancement` date DEFAULT NULL,
  `duree` varchar(55) DEFAULT NULL,
  `codelocalite` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`codeProjet`, `nomprojet`, `dateLancement`, `duree`, `codelocalite`) VALUES
('P001', 'Elevage de lapin', '2018-01-23', '2 ans', 'P002'),
('P002', 'Amenagement du terrrritoire', '2020-01-29', '3 mois', 'P003'),
('P003', 'Construction', '2023-07-13', '1 an', 'P003'),
('P004', 'site web', '2023-07-26', '3 mois', 'P001');

-- --------------------------------------------------------

--
-- Structure de la table `suivi`
--

CREATE TABLE `suivi` (
  `numsuivi` varchar(50) NOT NULL,
  `datesuivi` date DEFAULT NULL,
  `pourcentage` varchar(55) DEFAULT NULL,
  `codeProjet` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `localite`
--
ALTER TABLE `localite`
  ADD PRIMARY KEY (`codelocalite`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`codeProjet`),
  ADD KEY `codelocalite` (`codelocalite`);

--
-- Index pour la table `suivi`
--
ALTER TABLE `suivi`
  ADD PRIMARY KEY (`numsuivi`),
  ADD KEY `codeProjet` (`codeProjet`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `projet_ibfk_1` FOREIGN KEY (`codelocalite`) REFERENCES `localite` (`codelocalite`);

--
-- Contraintes pour la table `suivi`
--
ALTER TABLE `suivi`
  ADD CONSTRAINT `suivi_ibfk_1` FOREIGN KEY (`codeProjet`) REFERENCES `projet` (`codeProjet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
