-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 22 Novembre 2017 à 10:46
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projects`

--
-- Structure de la table `chatten`
--

CREATE TABLE IF NOT EXISTS `chatten` (
  `id` smallint(5) unsigned NOT NULL,
  `user` varchar(50) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `chatten`
--

INSERT INTO `chatten` (`id`, `user`, `message`, `time`) VALUES
(1, 'Antoine', 'Et Paris ne regarde pas le rugby ce soir? Paris n''est pas léquipe de France ! les caprices du Roi Neymard et ceux de ses coéquipiers parisiens , comme ceux du manipulateur Benzema nintéresse que l''Equipe et pas ses lecteurs. Les overdoses du ', '23:10:00'),
(2, 'John', 'tu as le droit de ne [as lire les articles sur le foot et de ne pas acheter l''équipe. Tu peux acheter Ski Magazine. Par contre : Rugby? c''est quoi?\r\n00répondresignaler', '11:09:00'),
(3, 'clotarri', 'Vous voulez mettre ? tout prix Griezmann au m?me niveau que Benzema. Les comparer mdr. Je vous rappelles que Benzema n''en déplaise ? Deschamps que c''est une star mondiale confirmé depuis 10 ans au meilleur club du monde. Quant ? Griezmann, qui est un bon joueur , joue que depuis 3ans dans la copie version chinoise', '10:50:00'),
(4, 'lars76', 'tu as le droit de ne [as lire les articles sur le foot et de ne pas acheter l''équipe. Tu peux acheter Ski Magazine. Par contre : Rugby? c''est quoi?\r\n00répondresignaler', '11:16:00'),
(5, 'Juliusblancus ', 'Benzema est un attaquant mais pas un bon buteur.Avec les défenses modernes plus rapides il ne vaut plus grand chose.De plus il a tout d''une bonne t?te ? claque.', '09:55:00'),
(6, '''Ben-yedder''', '''pourquoi il n', '09:21:12'),
(7, '''Seville''', '''un match de fou hier soir''', '09:25:31'),
(8, 'Benzema', 'Il est devenu le meilleur buteur francais de la champions league', '09:29:00'),
(9, 'France-insoumise', 'L'' effet multiplicateur pourrait amener 180 milliard', '09:47:38');

-- --------------------------------------------------------

--
-- Index pour la table `chatten`
--
ALTER TABLE `chatten`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `chatten`
--
ALTER TABLE `chatten`
  MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
