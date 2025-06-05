-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 05 juin 2025 à 19:52
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
-- Base de données : `project_fin`
--

-- --------------------------------------------------------

--
-- Structure de la table `card`
--

CREATE TABLE `card` (
  `idcard` int NOT NULL,
  `name` varchar(45) NOT NULL,
  `user_iduser` int NOT NULL,
  `fav` tinyint(1) NOT NULL,
  `region` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `card`
--

INSERT INTO `card` (`idcard`, `name`, `user_iduser`, `fav`, `region`) VALUES
(829, 'Sejuani', 18, 0, 'freljord'),
(830, 'Nautilus', 18, 0, 'bilgewater'),
(831, 'Lulu', 18, 0, 'bandle'),
(832, 'Gwen', 18, 0, 'iles'),
(833, 'Lux', 18, 0, 'demacia'),
(834, 'Caitlyn', 18, 0, 'piltover'),
(835, 'Yone', 18, 0, 'ionia'),
(836, 'Sejuani', 18, 0, 'freljord'),
(838, 'Yasuo', 18, 0, 'ionia'),
(839, 'Lux', 18, 0, 'demacia'),
(840, 'Sejuani', 18, 0, 'freljord'),
(841, 'Azir', 8, 0, 'shurima');

-- --------------------------------------------------------

--
-- Structure de la table `carde`
--

CREATE TABLE `carde` (
  `id_cartes` int NOT NULL,
  `name` varchar(45) NOT NULL,
  `region` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `carde`
--

INSERT INTO `carde` (`id_cartes`, `name`, `region`) VALUES
(1, 'Corki', 'bandle'),
(2, 'Rumble', 'bandle'),
(3, 'Lulu', 'bandle'),
(4, 'Pyke', 'bilgewater'),
(5, 'Graves', 'bilgewater'),
(6, 'Fizz', 'bilgewater'),
(7, 'Nautilus', 'bilgewater'),
(8, 'Garen', 'demacia'),
(9, 'Kayle', 'demacia'),
(10, 'Poppy', 'demacia'),
(11, 'Lux', 'demacia'),
(12, 'Olaf', 'freljord'),
(13, 'Trundle', 'freljord'),
(14, 'Volibear', 'freljord'),
(15, 'Sejuani', 'freljord'),
(16, 'Viego', 'iles'),
(17, 'Kalista', 'iles'),
(18, 'Maokai', 'iles'),
(19, 'Gwen', 'iles'),
(20, 'Ahri', 'ionia'),
(21, 'Yasuo', 'ionia'),
(22, 'Yone', 'ionia'),
(23, 'Riven', 'noxus'),
(24, 'Darius', 'noxus'),
(25, 'Draven', 'noxus'),
(26, 'Sion', 'noxus'),
(27, 'Vi', 'piltover'),
(28, 'Caitlyn', 'piltover'),
(29, 'Camille', 'piltover'),
(30, 'Orianna', 'piltover'),
(31, 'Taliyah', 'shurima'),
(32, 'Naafiri', 'shurima'),
(33, 'Xerath', 'shurima'),
(34, 'Azir', 'shurima'),
(35, 'Veigar', 'bandle'),
(36, 'Irelia', 'ionia');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `iduser` int NOT NULL,
  `pseudo` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`iduser`, `pseudo`, `email`, `password`, `date`) VALUES
(1, 'Salut', 'raph@lol', '$2y$10$xHDltO3qKGddHGoe17O5i.y8wl8vBSfUjXbIuZhIw8ikcRwIUtwHm', '2025-06-01 23:02:47'),
(2, 'Ailesvaxxxxx', 'Raph@test', '$2y$10$cuAIOBUXuFa8MBLxGmNpQ.AF2qy4xPliXrde3AdG1f.DsC6K1BhQG', '2025-06-01 12:55:26'),
(3, 'Lollll', 'Raph2@lol', '$2y$10$HU1JtSLdOQIjBJjFt7cdneuS6IwiB7XpSR1MWk4GJT0E344mN3BXi', NULL),
(4, 'test', 'lol@lol', '$2y$10$bAzCILNfm4RjHdsz58IraeJnQmIJOmcaBDcDtIwKUHzg7yeSSA2w2', NULL),
(5, 'lol', 'test@lol', '$2y$10$si7E9ztJWkUCQtodToj/Du87AHrNH6Y.XgXpViKoBdq41fCSGjqrW', '2025-05-28 12:50:44'),
(6, 'hbhb', 'test@test', '$2y$10$dsWLvDM2iyMiCGRMGh58V.Y43Xz8t69oNPG1mchqVplUig4xWhXHe', NULL),
(7, 'test2', 'test2@lol', '$2y$10$tmeN7gLmNaMb51Hck4IY..gtHuYpppXf.p7324R.2QYnZXtppQnyq', '2025-05-31 00:34:04'),
(8, 'eval2', 'eval2@lol', '$2y$10$OUjz12A8R4NN7.FE/yowhe6CDE.95qr8lcNGqRoIsiVSzWwRMfdLW', NULL),
(18, 'test', 'eval1@lol', '$2y$10$WLZTdZWww5i0vA.sDldagO7hCH6UJ3ccByBAaWEnx566VYrAEV22.', '2025-06-01 23:53:32');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`idcard`),
  ADD KEY `fk_card_user_idx` (`user_iduser`);

--
-- Index pour la table `carde`
--
ALTER TABLE `carde`
  ADD PRIMARY KEY (`id_cartes`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `card`
--
ALTER TABLE `card`
  MODIFY `idcard` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=842;

--
-- AUTO_INCREMENT pour la table `carde`
--
ALTER TABLE `carde`
  MODIFY `id_cartes` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `fk_card_user` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
