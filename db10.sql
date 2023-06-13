-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 24 juin 2022 à 20:35
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db10`
--

-- --------------------------------------------------------

--
-- Structure de la table `absence`
--

CREATE TABLE `absence` (
  `id` int(11) NOT NULL,
  `date_absence` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `nombredheur` int(11) DEFAULT '1',
  `employe_id` int(11) DEFAULT NULL,
  `detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `absence`
--

INSERT INTO `absence` (`id`, `date_absence`, `nombredheur`, `employe_id`, `detail`) VALUES
(11, '2022-06-22 23:58:25', 14, 30, ' maldie'),
(12, '2022-06-24 17:39:32', 2, 36, ' maladie');

-- --------------------------------------------------------

--
-- Structure de la table `conge`
--

CREATE TABLE `conge` (
  `id` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `employe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `conge`
--

INSERT INTO `conge` (`id`, `date_debut`, `date_fin`, `employe_id`) VALUES
(1, '2022-06-23', '2022-06-26', 29),
(2, '2022-06-25', '2022-06-30', 30),
(3, '2022-06-24', '2022-06-30', 29),
(4, '2022-06-26', '2022-07-07', 33);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `nomdepartement` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id`, `nomdepartement`) VALUES
(11, 'informaticien'),
(12, 'gestionnaire'),
(13, 'infographiste'),
(16, 'comptable');

-- --------------------------------------------------------

--
-- Structure de la table `employer`
--

CREATE TABLE `employer` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `num` varchar(50) NOT NULL,
  `departement_id` int(11) NOT NULL,
  `chemin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employer`
--

INSERT INTO `employer` (`id`, `nom`, `prenom`, `email`, `num`, `departement_id`, `chemin`) VALUES
(29, 'aloui', 'oussama', 'ous1234@gmail.com', '0612001200', 13, 'img/1655942159per1.jpg'),
(30, 'lwanbani', 'ilyass', 'ilyasslwa@gmail.com', '06858645356', 13, 'img/1655942284per1.jpg'),
(33, 'talbi', 'mustapha', 'mustapaha@gmail.com', '0745758697', 11, 'img/1655947774per1.jpg'),
(36, 'tbahi', 'zineb', 'zineb@gmail.com', '012545466', 11, 'img/1656078551avatar4.png'),
(37, 'Rhazal', 'Oussama', 'oussama@gmail.com', '0602392909', 11, 'img/1656097032avatarous.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `absence`
--
ALTER TABLE `absence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_emp_abs` (`employe_id`);

--
-- Index pour la table `conge`
--
ALTER TABLE `conge`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employe_id` (`employe_id`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departement_id` (`departement_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `absence`
--
ALTER TABLE `absence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `conge`
--
ALTER TABLE `conge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `absence`
--
ALTER TABLE `absence`
  ADD CONSTRAINT `fk_emp_abs` FOREIGN KEY (`employe_id`) REFERENCES `employer` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `conge`
--
ALTER TABLE `conge`
  ADD CONSTRAINT `conge_ibfk_1` FOREIGN KEY (`employe_id`) REFERENCES `employer` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `employer`
--
ALTER TABLE `employer`
  ADD CONSTRAINT `employer_ibfk_1` FOREIGN KEY (`departement_id`) REFERENCES `departement` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
