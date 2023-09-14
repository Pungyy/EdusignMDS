-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 14 sep. 2023 à 07:15
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `edusign`
--


CREATE DATABASE IF NOT EXISTS edusign;

USE edusign;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `idEtudiant` varchar(50) NOT NULL,
  `nomEtudiant` varchar(50) DEFAULT NULL,
  `prenomEtudiant` varchar(50) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `mdpEtudiant` varchar(50) DEFAULT NULL,
  `QRcodeLu` tinyint(1) DEFAULT '0',
  `estPresent` varchar(50) NOT NULL DEFAULT 'ABSENT',
  `mailEtudiant` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idEtudiant`, `nomEtudiant`, `prenomEtudiant`, `dateNaissance`, `mdpEtudiant`, `QRcodeLu`, `estPresent`, `mailEtudiant`) VALUES
('j67', 'Jeannus', 'Jean', '2003-01-01', 'JJ6701', NULL, 'ABSENT', 'jeannus.jean@my-digital-school.org'),
('M22', 'Maximus', 'Max', '2018-04-22', 'MM2204', NULL, 'ABSENT', 'Maximus.Max@my-digital-school.org'),
('R22', 'Roger', 'Albert', '2022-11-22', 'RA2211', NULL, 'ABSENT', 'Roger.Albert@my-digital-school.org');

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

CREATE TABLE `prof` (
  `idProf` varchar(50) NOT NULL,
  `nomProf` varchar(50) DEFAULT NULL,
  `prenomProf` varchar(50) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `mdpProf` varchar(50) DEFAULT NULL,
  `mailProf` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `prof`
--

INSERT INTO `prof` (`idProf`, `nomProf`, `prenomProf`, `dateNaissance`, `mdpProf`, `mailProf`) VALUES
('P3', 'Paul', 'Pierre', '2003-03-03', 'PP0303', 'Paul.Pierre@my-digital-school.org'),
('P9', 'Pythagorus', 'Pythagore', '1999-09-09', 'PP0909', 'Pythagorus.Pythagore@my-digital-school.org');

-- --------------------------------------------------------

--
-- Structure de la table `qrcode`
--

CREATE TABLE `qrcode` (
  `idQRcode` varchar(50) NOT NULL,
  `lienQRcode` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`idEtudiant`);

--
-- Index pour la table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`idProf`);

--
-- Index pour la table `qrcode`
--
ALTER TABLE `qrcode`
  ADD PRIMARY KEY (`idQRcode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
