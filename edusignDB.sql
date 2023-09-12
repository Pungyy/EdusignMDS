-- Base de données : `edusign`
--
CREATE DATABASE IF NOT EXISTS edusign;

USE edusign;

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

DROP TABLE IF EXISTS `prof`;
CREATE TABLE IF NOT EXISTS `prof` (
  `idProf` varchar(50) NOT NULL,
  `nomProf` varchar(50) DEFAULT NULL,
  `prenomProf` varchar(50) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  PRIMARY KEY (`idProf`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `idEtudiant` varchar(50) NOT NULL,
  `nomEtudiant` varchar(50) DEFAULT NULL,
  `prenomEtudiant` varchar(50) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `mdpEtudiant` varchar(50) DEFAULT NULL,

  PRIMARY KEY (`idEtudiant`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Etudiant`
--

INSERT INTO `Etudiant` (`idEtudiant`, `nomEtudiant`, `prenomEtudiant`, `dateNaissance`, `mdpEtudiant`) VALUES
('j67', 'Jeannus', 'Jean', '2003-01-01','JJ6701'),
('M22', 'Maximus', 'Max', '2018-04-22', 'MM2204'),
('R22', 'Roger', 'Albert', '2022-11-22', 'RA2211');

-- --------------------------------------------------------

--
-- Structure de la table `QRcode`
--

DROP TABLE IF EXISTS `QRcode`;
CREATE TABLE IF NOT EXISTS `QRcode` (
  `idQRcode` varchar(50) NOT NULL,
  `lienQRcode` varchar(50) NOT NULL,
  PRIMARY KEY (`idQRcode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
