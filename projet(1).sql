-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 30 avr. 2025 à 12:50
-- Version du serveur : 8.4.3
-- Version de PHP : 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `card`
--

CREATE TABLE `card` (
  `idCard` int NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `card`
--

INSERT INTO `card` (`idCard`, `name`) VALUES
(2, 'Corki'),
(3, 'Rumble'),
(4, 'Lulu'),
(5, 'Pyke'),
(6, 'Graves'),
(7, 'Fizz'),
(8, 'Nautilus'),
(9, 'Garen'),
(10, 'Kayle'),
(11, 'Poppy'),
(12, 'Lux'),
(13, 'Olaf'),
(14, 'Trundle'),
(15, 'Volibear'),
(16, 'Sejuani'),
(17, 'Viego'),
(18, 'Kalista'),
(19, 'Maokai'),
(20, 'Gwen'),
(21, 'Ahri'),
(22, 'Yasuo'),
(23, 'Yone'),
(25, 'Riven'),
(26, 'Darius'),
(27, 'Draven'),
(28, 'Sion'),
(29, 'Vi'),
(30, 'Caitlyn'),
(31, 'Camille'),
(32, 'Orianna'),
(34, 'Taliyah'),
(35, 'Naafiri'),
(36, 'Xerath'),
(37, 'Azir'),
(38, 'Veigar'),
(39, 'Irelia');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `iduser` int NOT NULL,
  `pseudo` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`iduser`, `pseudo`, `email`, `password`) VALUES
(13, 'Ailesbfdbcdv', 'cc@slt', '$2y$10$MVE3HypGsuyB4F8ImCrBUOsSbtKb.43pb51f0qkC4dxBFcvnKoe6S');

-- --------------------------------------------------------

--
-- Structure de la table `usercard`
--

CREATE TABLE `usercard` (
  `iduser` int NOT NULL,
  `idCard` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`idCard`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `pseudo_UNIQUE` (`pseudo`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Index pour la table `usercard`
--
ALTER TABLE `usercard`
  ADD PRIMARY KEY (`iduser`,`idCard`),
  ADD KEY `idCard` (`idCard`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `card`
--
ALTER TABLE `card`
  MODIFY `idCard` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `usercard`
--
ALTER TABLE `usercard`
  ADD CONSTRAINT `usercard_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `mydb`.`user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usercard_ibfk_2` FOREIGN KEY (`idCard`) REFERENCES `mydb`.`card` (`idCard`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
