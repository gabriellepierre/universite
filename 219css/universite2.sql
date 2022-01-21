-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 27 nov. 2021 à 12:00
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `universite2`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours1ereannee`
--

DROP TABLE IF EXISTS `cours1ereannee`;
CREATE TABLE IF NOT EXISTS `cours1ereannee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `code` int(11) NOT NULL,
  `crédits` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `cours1ereannee`
--

INSERT INTO `cours1ereannee` (`id`, `nom`, `code`, `crédits`) VALUES
(1, 'Editique 1 : structurer et publier des documents sur Internet', 204, 3),
(2, 'Langages du web niveau 1', 212, 6),
(3, 'Éditique 2 : conception de sites', 216, 3),
(4, 'Algorithmique', 222, 3),
(5, 'Ordinateurs et périphériques, systèmes d\'exploitation', 209, 3);

-- --------------------------------------------------------

--
-- Structure de la table `cours2emeannee`
--

DROP TABLE IF EXISTS `cours2emeannee`;
CREATE TABLE IF NOT EXISTS `cours2emeannee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `credits` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `cours2emeannee`
--

INSERT INTO `cours2emeannee` (`id`, `nom`, `code`, `credits`) VALUES
(1, 'Web dynamique et bases de données', 219, 6),
(2, 'Javascript avancé', 223, 6),
(3, 'Intégration multimédia niveau 1', 234, 3),
(4, 'Plateformes mobiles', 236, 3),
(5, 'Connaissance des réseaux', 214, 6);

-- --------------------------------------------------------

--
-- Structure de la table `courslicencepro`
--

DROP TABLE IF EXISTS `courslicencepro`;
CREATE TABLE IF NOT EXISTS `courslicencepro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `code` int(11) NOT NULL,
  `credits` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `courslicencepro`
--

INSERT INTO `courslicencepro` (`id`, `nom`, `code`, `credits`) VALUES
(1, 'Services aux entreprises', 310, 3),
(2, 'Médias numériques', 311, 6),
(3, 'Technologies pour les systèmes d\'information', 312, 6),
(4, 'Techniques de veilles', 313, 3);

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_etudiant` int(11) NOT NULL,
  `motdepasse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `classe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `numero_etudiant`, `motdepasse`, `nom`, `prenom`, `mail`, `classe`) VALUES
(1, 123456, 'Exemple?', 'Caillaux', 'Manon', 'manon.caillaux@etu.unilim.fr', 'deust2'),
(2, 987654, 'Exemple2!', 'Pierre', 'Gabrielle', 'gabrielle.pierre@etu.unilim.fr', 'deust2'),
(3, 15951, 'Testtest!', 'Vacher', 'Théo', 'theo.vacher@etu.unilim.fr', 'deust2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
