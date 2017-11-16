-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 01 Novembre 2016 à 07:30
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `laravel_tuto`
--

-- --------------------------------------------------------

--
-- Structure de la table `adressbuch`
--

CREATE TABLE `adressbuch` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `strasse_hausNr` varchar(50) DEFAULT NULL,
  `plz` varchar(50) DEFAULT NULL,
  `stadt` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `adressbuch`
--

INSERT INTO `adressbuch` (`id`, `name`, `strasse_hausNr`, `plz`, `stadt`) VALUES
(1, 'Guy Roux', 'Rue de Lorgneres 34', '77503', NULL),
(2, 'Didier Deschamp', 'Rue Leclerc 13', '92411', NULL),
(3, 'Gilles Omer', 'Prinzenallée 28', '13318', 'Berlin'),
(4, 'Alain Kamgue', 'Rhinstr. 7', '10315', 'Berlin'),
(5, 'Mario Ballotelli', 'Rue OGC Sportif de Nice . 9', '89762', 'Nizzea'),
(6, 'Alain Juppe', 'Rue des martigues 30', '90221', 'Bordeaux'),
(7, 'Alain Juppe', 'Rue des martigues 30', '90221', 'Bordeaux'),
(8, 'Jobcenter Lichtenberg', 'Gotlide Str. 93', '10365', 'Berlin'),
(9, 'Rigobert Song Bahanag', 'Rue Hopital Salpetriere 18', '55618', 'Paris'),
(10, 'Gilles Omer', 'Prinzenallée 28', '13318', 'Berlin'),
(11, 'Bernard Tapie', 'Rue la Canebiere 7', '02411', 'Marseile'),
(14, 'Tatiana Biang', 'Makepe Nouveau terrain', 'Douala 4', 'Douala');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adressbuch`
--
ALTER TABLE `adressbuch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adressbuch`
--
ALTER TABLE `adressbuch`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
