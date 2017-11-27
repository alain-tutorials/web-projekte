-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 27 Novembre 2017 à 10:55
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ratespiel`
--

-- --------------------------------------------------------

--
-- Structure de la table `auswahl`
--

CREATE TABLE IF NOT EXISTS `auswahl` (
  `id` tinyint(3) unsigned NOT NULL,
  `frage_nummer` tinyint(3) unsigned NOT NULL,
  `is_richtig` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `auswahl`
--

INSERT INTO `auswahl` (`id`, `frage_nummer`, `is_richtig`, `text`) VALUES
(1, 1, 1, 'PHP: Hypertext Preprocessor'),
(2, 1, 0, 'Private Home Page'),
(3, 1, 0, 'Personal Home Page'),
(4, 1, 0, 'Personal Hypertext Preprocessor'),
(6, 2, 1, 'echo "Hello World";'),
(7, 2, 0, '"Hello World";'),
(8, 2, 0, 'Document.Write("Hello World");'),
(12, 3, 0, 'ASP'),
(13, 3, 0, 'RUBY'),
(14, 3, 1, 'PHP');

-- --------------------------------------------------------

--
-- Structure de la table `fragen`
--

CREATE TABLE IF NOT EXISTS `fragen` (
  `frage_nummer` tinyint(3) unsigned NOT NULL,
  `frage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `fragen`
--

INSERT INTO `fragen` (`frage_nummer`, `frage`) VALUES
(1, 'What does PHP stand for?'),
(2, 'How do you write "Hello World" in PHP'),
(3, 'What is the best server side language?');

-- --------------------------------------------------------


--
-- Index pour les tables exportées
--

--
-- Index pour la table `auswahl`
--
ALTER TABLE `auswahl`
  ADD PRIMARY KEY (`id`);


--
-- Index pour la table `fragen`
--
ALTER TABLE `fragen`
  ADD PRIMARY KEY (`frage_nummer`);

--
-- AUTO_INCREMENT pour la table `auswahl`
--
ALTER TABLE `auswahl`
  MODIFY `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
