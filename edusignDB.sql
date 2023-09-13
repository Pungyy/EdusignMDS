--
-- Base de données : `edusign`
--

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
  `mailEtudiant` varchar(50) DEFAULT NULL
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
  `mailProf` varchar(50) DEFAULT NULL

) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `qrcode`
--

CREATE TABLE `qrcode` (
  `idQRcode` varchar(50) NOT NULL,
  `lienQRcode` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
