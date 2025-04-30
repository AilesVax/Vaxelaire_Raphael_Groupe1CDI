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
-- Base de données : `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `idbook` int NOT NULL,
  `title` varchar(75) NOT NULL,
  `author` varchar(75) NOT NULL,
  `date_publication` date NOT NULL,
  `category_idtable1` int DEFAULT NULL,
  `disponible` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`idbook`, `title`, `author`, `date_publication`, `category_idtable1`, `disponible`) VALUES
(7, 'Le Petit Prince', 'Antoine de Saint-Exupéry', '2022-05-19', NULL, 1),
(8, 'La Peste', 'Albert Camus', '2001-05-19', NULL, 0),
(9, '1984', 'Geoge Orwell', '1949-06-08', NULL, 1),
(10, 'L etranger', 'Alber Camus', '1942-05-19', NULL, 0),
(12, 'L etranger', 'Alber Camus', '1942-05-19', NULL, 1),
(20, 'dsdfsf', 'sdfsf', '2025-04-03', NULL, 1),
(21, 'dsdfsf', 'sdfsf', '2025-04-03', NULL, 1),
(22, 'dsdfsf', 'sdfsf', '2025-04-03', NULL, 1),
(23, 'dsdfsf', 'sdfsf', '2025-04-03', NULL, 1),
(24, 'dsdfsf', 'sdfsf', '2025-04-03', NULL, 1),
(25, 'dsdfsf', 'sdfsf', '2025-04-03', NULL, 1),
(26, 'dsdfsf', 'sdfsf', '2025-04-03', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `idtable1` int NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `iduser` int NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`iduser`, `email`, `password`) VALUES
(1, 'jdhgeghrz@dbjgdfn', '$2y$10$S0Rqp7KzKQzcsgrjVRL6pObEJWbdktnbeUkLeXYgSqOwtCFPXmTdi'),
(2, 'raph@lol', '$2y$10$obsZzSLtzn6g4gaWA/LV9u3UjxSgUUm25brSzL/liZ4bFP63AW1nG'),
(3, 'sqfqsgfsgsFD@gbbb', '$2y$10$fGqO.QYM8xceVUMtpio99.oAUTn/Vf29FayxcwYUVOrkr0UgvdM4G'),
(4, 'ffsqvsqqv@dgbdsn', '$2y$10$eOLNQ6kdzDtm1CEb91ryqOOWklQvN.ZWR/f7QRo4PNuuxYeAP9EZu'),
(5, 'ggt@tg', '$2y$10$MJaxMrXsoRIyEdog3h3J5u3xhiFTyRTWnYDeh6F4cIZ16WytFt.0C');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`idbook`),
  ADD KEY `fk_book_table1_idx` (`category_idtable1`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idtable1`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `idbook` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `idtable1` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_book_table1` FOREIGN KEY (`category_idtable1`) REFERENCES `category` (`idtable1`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
