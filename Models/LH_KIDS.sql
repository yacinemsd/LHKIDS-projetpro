-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 05 Mars 2019 à 09:45
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `LH_KIDS`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `image_path` varchar(50) NOT NULL,
  `outing_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`image_id`, `image_path`, `outing_id`) VALUES
(3, 'trees-grass-lawn-park.jpg', 20),
(4, 'water-fight-children-water-play-51349.jpeg', 21),
(18, '', 38),
(19, 'bow.jpeg', 39),
(20, '', 40),
(21, '', 41),
(22, 'quint-paintball-enfant-foret.jpg', 42);

-- --------------------------------------------------------

--
-- Structure de la table `outing`
--

CREATE TABLE `outing` (
  `outing_id` int(11) NOT NULL,
  `outing_postDateTime` datetime DEFAULT NULL,
  `outing_title` varchar(50) NOT NULL,
  `outing_place` varchar(50) NOT NULL,
  `outing_date` date NOT NULL,
  `outing_startTime` time NOT NULL,
  `outing_endTime` time NOT NULL,
  `outing_description` text NOT NULL,
  `outingType_id` int(11) NOT NULL,
  `outingEnvironment_id` int(11) NOT NULL,
  `outingAge_id` int(11) NOT NULL,
  `outingPrice_id` int(11) NOT NULL,
  `userOuting_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `outing`
--

INSERT INTO `outing` (`outing_id`, `outing_postDateTime`, `outing_title`, `outing_place`, `outing_date`, `outing_startTime`, `outing_endTime`, `outing_description`, `outingType_id`, `outingEnvironment_id`, `outingAge_id`, `outingPrice_id`, `userOuting_id`) VALUES
(20, NULL, 'foret', 'foret du lion', '2019-02-21', '18:49:00', '17:40:00', 'sortie à la foret', 9, 2, 1, 1, 38),
(21, NULL, 'plage', 'plage', '2019-02-27', '06:29:00', '09:29:00', 'sortie a la plage', 1, 2, 5, 1, 38),
(38, '2019-02-25 16:10:18', 'arena 5', 'arena5', '2019-02-25', '16:09:00', '16:10:00', 'ok', 1, 1, 5, 2, 42),
(39, '2019-02-27 11:09:39', 'Bowling', 'Bowling Le Havre', '2019-02-28', '18:00:00', '20:00:00', 'Sortie au bowling, lieu agréable et prix raisonnable variant selon l\'âge et les équipements.', 1, 1, 4, 2, 42),
(40, '2019-02-28 11:05:45', 'test', '', '2019-02-19', '11:05:00', '11:05:00', 'ok', 8, 2, 2, 1, 42),
(41, '2019-02-28 12:36:27', 'plage', 'plage du havre', '2019-02-28', '12:00:00', '16:30:00', 'ok', 7, 2, 1, 1, 42),
(42, '2019-03-04 11:48:03', 'Paintball pour enfant de -10 ans ', 'Lille et ses environs', '2019-04-19', '09:30:00', '18:00:00', 'Petite sortie pour nos petits guerriers, je veux leur instruire la survie ! ', 1, 2, 4, 2, 43);

-- --------------------------------------------------------

--
-- Structure de la table `outingAge`
--

CREATE TABLE `outingAge` (
  `outingAge_id` int(11) NOT NULL,
  `outingAge_age` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `outingAge`
--

INSERT INTO `outingAge` (`outingAge_id`, `outingAge_age`) VALUES
(1, 'Tout âge'),
(2, '1an et plus'),
(3, '3ans et plus'),
(4, '6ans et plus'),
(5, '10ans et plus');

-- --------------------------------------------------------

--
-- Structure de la table `outingEnvironment`
--

CREATE TABLE `outingEnvironment` (
  `outingEnvironment_id` int(11) NOT NULL,
  `outingEnvironment_environment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `outingEnvironment`
--

INSERT INTO `outingEnvironment` (`outingEnvironment_id`, `outingEnvironment_environment`) VALUES
(1, 'Intérieur'),
(2, 'Extérieur'),
(3, 'Intérieur et Extérieur');

-- --------------------------------------------------------

--
-- Structure de la table `outingPrice`
--

CREATE TABLE `outingPrice` (
  `outingPrice_id` int(11) NOT NULL,
  `outingPrice_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `outingPrice`
--

INSERT INTO `outingPrice` (`outingPrice_id`, `outingPrice_price`) VALUES
(1, 'Gratuit'),
(2, 'Payant');

-- --------------------------------------------------------

--
-- Structure de la table `outingType`
--

CREATE TABLE `outingType` (
  `outingType_id` int(11) NOT NULL,
  `outingType_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `outingType`
--

INSERT INTO `outingType` (`outingType_id`, `outingType_type`) VALUES
(1, 'Sport'),
(4, 'Culturelle'),
(7, 'Ludique'),
(8, 'Artistique'),
(9, 'Autres');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_lastname` varchar(50) NOT NULL,
  `user_firstname` varchar(50) NOT NULL,
  `user_mail` varchar(100) NOT NULL,
  `user_pseudo` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_reasons` text NOT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `userType_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_id`, `user_lastname`, `user_firstname`, `user_mail`, `user_pseudo`, `user_password`, `user_reasons`, `user_image`, `userType_id`) VALUES
(24, 'Huet', 'Jonathan', 'harissa76@ticho.fr', 'rrrrrrr76', '$2y$10$lVd3nF5Gx9vUJfPbvPVqeO1jha0tJpMgZhY8NnC1SjxTN9VsxCY/K', 'A la recherche de redha le tunisien et abdallah le marocain. rrrr', NULL, 9),
(26, 'Benhamouda', 'yassine', 'ben@yas.fr', 'fluide76', '$2y$10$eJf3QUflTfj801lhJESTB.9p/Qrv52YI.QdxAqJtmkDoYZ/k.f2S6', ' Cherche du fluide', NULL, 11),
(29, 'Yacine', 'messaoudi', 'yas@yas.fr', 'yasssss', '$2y$10$6TPCM8TAtVEdxiHy3MXJoOv0mZHGkSGswHDa6Eh4fHugjnFIT817G', ' ezaeaz', 'arena5.jpeg', 6),
(30, 'Yacine', 'Yacine', 'yacine76@gmail.com', 'yassinee', '$2y$10$vcCBo44Nr/IWP77Gf3vAMuGSF.JLhYqz.twNuSvXIo4J7/QAE8J4.', ' ezaeaze', 'arena5.jpeg', 5),
(33, 'Yacine', 'Messaoudi', 'yacine76@gmail.com', 'yacine76', '$2y$10$beWKcYZ4erDGpv/dfGXvdO1ci.07xsr5iZ/fUEYykzx/U8uBIIugS', ' ezaeza', '', 5),
(37, 'Yacine', 'Messaoudi', 'yacine76@gmail.com', 'yacine7666', '$2y$10$wLYuMvINPhPHZFUGPMPIL.CDU2LqBmQyj8zMjJXiB4KMsw.N1cR7m', ' ', '', 7),
(38, 'smiley', 'smile', 'lion@lion.fr', 'smiley', '$2y$10$7PNg8po.bTQo0slEALCAMe/Q5jSiR9zke53LAD4usG/oLfoxQzkte', ' bonjour', 'lion-2521451_960_720.png', 9),
(42, 'Messaoudi', 'Yacine', 'yacine@gmail.com', 'yacine1', '$2y$10$4aXLGaP11YFURuOIbtowd.bPXmHGfhBrsRmi2Ej3u0gVtgsUCB5M.', 'A la recherche de nouvelles activités au havre ', 'avatar.png', 5),
(43, 'Halberda', 'Robin', 'robin.halberda@orange.fr', 'TheRockJr', '$2y$10$5Y0ASRuVWrctqfGbRxkUNe2LvGqmDvByiCv3vAsI4fzZnAy5214SO', 'Le plaisir de mes gosses ! ', 'Dwayne_Johnson_Hercules_2014_(cropped).jpg', 5);

-- --------------------------------------------------------

--
-- Structure de la table `userType`
--

CREATE TABLE `userType` (
  `userType_id` int(11) NOT NULL,
  `userType_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `userType`
--

INSERT INTO `userType` (`userType_id`, `userType_type`) VALUES
(5, 'Papa'),
(6, 'Maman'),
(7, 'Tonton'),
(8, 'Tata'),
(9, 'Papi'),
(10, 'Mami'),
(11, 'Nounou'),
(12, 'Autres');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `images_outing_FK` (`outing_id`);

--
-- Index pour la table `outing`
--
ALTER TABLE `outing`
  ADD PRIMARY KEY (`outing_id`),
  ADD KEY `outing_outingType_FK` (`outingType_id`),
  ADD KEY `outing_outingEnvironment0_FK` (`outingEnvironment_id`),
  ADD KEY `outing_outingAge1_FK` (`outingAge_id`),
  ADD KEY `outing_outingPrice2_FK` (`outingPrice_id`),
  ADD KEY `outing_userOuting_Id_FK` (`userOuting_id`);

--
-- Index pour la table `outingAge`
--
ALTER TABLE `outingAge`
  ADD PRIMARY KEY (`outingAge_id`);

--
-- Index pour la table `outingEnvironment`
--
ALTER TABLE `outingEnvironment`
  ADD PRIMARY KEY (`outingEnvironment_id`);

--
-- Index pour la table `outingPrice`
--
ALTER TABLE `outingPrice`
  ADD PRIMARY KEY (`outingPrice_id`);

--
-- Index pour la table `outingType`
--
ALTER TABLE `outingType`
  ADD PRIMARY KEY (`outingType_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_userType_FK` (`userType_id`);

--
-- Index pour la table `userType`
--
ALTER TABLE `userType`
  ADD PRIMARY KEY (`userType_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `outing`
--
ALTER TABLE `outing`
  MODIFY `outing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT pour la table `outingAge`
--
ALTER TABLE `outingAge`
  MODIFY `outingAge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `outingEnvironment`
--
ALTER TABLE `outingEnvironment`
  MODIFY `outingEnvironment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `outingPrice`
--
ALTER TABLE `outingPrice`
  MODIFY `outingPrice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `outingType`
--
ALTER TABLE `outingType`
  MODIFY `outingType_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT pour la table `userType`
--
ALTER TABLE `userType`
  MODIFY `userType_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_outing_FK` FOREIGN KEY (`outing_id`) REFERENCES `outing` (`outing_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `outing`
--
ALTER TABLE `outing`
  ADD CONSTRAINT `outing_outingAge1_FK` FOREIGN KEY (`outingAge_id`) REFERENCES `outingAge` (`outingAge_id`),
  ADD CONSTRAINT `outing_outingEnvironment0_FK` FOREIGN KEY (`outingEnvironment_id`) REFERENCES `outingEnvironment` (`outingEnvironment_id`),
  ADD CONSTRAINT `outing_outingPrice2_FK` FOREIGN KEY (`outingPrice_id`) REFERENCES `outingPrice` (`outingPrice_id`),
  ADD CONSTRAINT `outing_outingType_FK` FOREIGN KEY (`outingType_id`) REFERENCES `outingType` (`outingType_id`),
  ADD CONSTRAINT `outing_userOuting_Id_FK` FOREIGN KEY (`userOuting_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_userType_FK` FOREIGN KEY (`userType_id`) REFERENCES `userType` (`userType_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
