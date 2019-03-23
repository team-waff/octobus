-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 23 mars 2019 à 18:07
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `octobus`
--
CREATE DATABASE IF NOT EXISTS `octobus` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `octobus`;

-- --------------------------------------------------------

--
-- Structure de la table `accountable`
--

DROP TABLE IF EXISTS `accountable`;
CREATE TABLE IF NOT EXISTS `accountable` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `CREDATE` datetime DEFAULT NULL,
  `MODDATE` datetime DEFAULT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `accountable`
--

INSERT INTO `accountable` (`pk`, `name`, `firstname`, `email`, `tel`, `CREDATE`, `MODDATE`) VALUES
(5, 'Delbar', 'Benjamin', 'benjamin.delbar@wavre.be', '010230423', '2019-03-23 09:59:32', NULL),
(3, 'verheyen', 'Raphael', 'raphael.verheyen@wavre.be', '010230419', '2019-03-23 09:58:45', NULL),
(4, 'Henrion', 'Pierre', 'pierre.henrion@wavre.be', '010230422', '2019-03-23 09:58:45', NULL),
(6, 'Lacroix', 'Alexandre', 'alexandre.lacroix@wavre.be', '010230425', '2019-03-23 09:59:32', NULL),
(7, 'Huguier', 'Stephane', 'stephane.huguier@wavre.be', '010230426', '2019-03-23 10:00:22', NULL),
(8, 'Caprasse', 'Amandine', 'amandine.caprasse@wavre.be', '010230427', '2019-03-23 10:00:22', NULL);

--
-- Déclencheurs `accountable`
--
DROP TRIGGER IF EXISTS `before_insert_accountable`;
DELIMITER $$
CREATE TRIGGER `before_insert_accountable` BEFORE INSERT ON `accountable` FOR EACH ROW BEGIN
    SET NEW.CREDATE = NOW();
END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `before_update_accountable`;
DELIMITER $$
CREATE TRIGGER `before_update_accountable` BEFORE UPDATE ON `accountable` FOR EACH ROW BEGIN
    SET NEW.MODDATE = NOW();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `accountable_child`
--

DROP TABLE IF EXISTS `accountable_child`;
CREATE TABLE IF NOT EXISTS `accountable_child` (
  `fk_parent` int(11) NOT NULL,
  `fk_child` int(11) NOT NULL,
  `fk_role` int(11) NOT NULL,
  `CREDATE` datetime DEFAULT NULL,
  `MODDATE` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `accountable_child`
--

INSERT INTO `accountable_child` (`fk_parent`, `fk_child`, `fk_role`, `CREDATE`, `MODDATE`) VALUES
(5, 5, 3, '2019-03-23 10:17:18', NULL),
(3, 4, 2, '2019-03-23 10:17:18', NULL),
(3, 3, 2, '2019-03-23 10:17:18', NULL),
(4, 14, 2, '2019-03-23 10:17:18', NULL),
(4, 11, 4, '2019-03-23 10:17:18', NULL),
(6, 12, 2, '2019-03-23 10:17:18', NULL),
(6, 13, 2, '2019-03-23 10:17:18', NULL),
(6, 6, 2, '2019-03-23 10:17:18', NULL),
(7, 15, 2, '2019-03-23 10:17:18', NULL),
(8, 16, 1, '2019-03-23 10:17:18', NULL);

--
-- Déclencheurs `accountable_child`
--
DROP TRIGGER IF EXISTS `before_insert_accountable_child`;
DELIMITER $$
CREATE TRIGGER `before_insert_accountable_child` BEFORE INSERT ON `accountable_child` FOR EACH ROW BEGIN
    SET NEW.CREDATE = NOW();
END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `before_update_accountable_child`;
DELIMITER $$
CREATE TRIGGER `before_update_accountable_child` BEFORE UPDATE ON `accountable_child` FOR EACH ROW BEGIN
    SET NEW.MODDATE = NOW();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `child`
--

DROP TABLE IF EXISTS `child`;
CREATE TABLE IF NOT EXISTS `child` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `isvalide` tinyint(1) NOT NULL DEFAULT '0',
  `validedate` date NOT NULL,
  `avatar` int(11) NOT NULL DEFAULT '0',
  `fk_classroom` int(11) NOT NULL,
  `CREDATE` datetime DEFAULT NULL,
  `MODDATE` datetime DEFAULT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `child`
--

INSERT INTO `child` (`pk`, `name`, `firstname`, `birthdate`, `isvalide`, `validedate`, `avatar`, `fk_classroom`, `CREDATE`, `MODDATE`) VALUES
(3, 'verheyen', 'Elena', '2017-09-11', 1, '2019-03-03', 1, 10, '2019-03-23 10:03:44', '2019-03-23 15:22:56'),
(4, 'Verheyen', 'David', '2015-06-01', 1, '2018-06-19', 2, 10, '2019-03-23 10:03:44', '2019-03-23 15:22:56'),
(5, 'Delbar', 'Junior', '2016-03-22', 1, '2018-08-14', 3, 11, '2019-03-23 10:03:44', '2019-03-23 15:22:56'),
(6, 'Lacroix', 'Cecile', '2015-11-05', 1, '2018-04-24', 1, 12, '2019-03-23 10:03:44', '2019-03-23 15:22:56'),
(14, 'Henrion', 'Perceval', '2012-12-12', 1, '2017-10-16', 2, 12, '2019-03-23 10:09:19', '2019-03-23 15:22:56'),
(13, 'Lacroix', 'karadok', '2010-12-10', 1, '2017-04-18', 3, 12, '2019-03-23 10:09:19', '2019-03-23 15:22:56'),
(12, 'Lacroix', 'Lilly', '2001-01-02', 1, '2017-10-18', 1, 12, '2019-03-23 10:09:19', '2019-03-23 15:22:56'),
(11, 'Henrion', 'Jeannine', '2010-09-01', 1, '2019-03-20', 2, 10, '2019-03-23 10:04:12', '2019-03-23 15:22:56'),
(15, 'Huguier', 'Hugue', '2009-09-25', 1, '2018-07-12', 3, 12, '2019-03-23 10:09:19', '2019-03-23 15:22:56'),
(16, 'Caprasse', 'Vanille', '2015-11-11', 1, '2019-03-06', 1, 11, '2019-03-23 10:09:19', '2019-03-23 15:22:56');

--
-- Déclencheurs `child`
--
DROP TRIGGER IF EXISTS `before_insert_child`;
DELIMITER $$
CREATE TRIGGER `before_insert_child` BEFORE INSERT ON `child` FOR EACH ROW BEGIN
    SET NEW.CREDATE = NOW();
END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `before_update_child`;
DELIMITER $$
CREATE TRIGGER `before_update_child` BEFORE UPDATE ON `child` FOR EACH ROW BEGIN
    SET NEW.MODDATE = NOW();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `classroom`
--

DROP TABLE IF EXISTS `classroom`;
CREATE TABLE IF NOT EXISTS `classroom` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `fk_school` int(11) NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classroom`
--

INSERT INTO `classroom` (`pk`, `name`, `fk_school`) VALUES
(1, '1A', 2),
(2, '1B', 2),
(3, '1C', 2),
(4, '2A', 2),
(5, '3A', 2),
(6, '3B', 2),
(7, '4A', 2),
(8, '4B', 2),
(9, '4C', 2),
(10, '5A', 2),
(11, '6A', 2),
(12, '6B', 2);

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `start_pos_lat` text NOT NULL,
  `start_pos_long` text NOT NULL,
  `end_pos_lat` text NOT NULL,
  `end_pos_long` text NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `course`
--

INSERT INTO `course` (`pk`, `start_pos_lat`, `start_pos_long`, `end_pos_lat`, `end_pos_long`, `name`) VALUES
(1, '50.718123', '4.611852', '50.718380', '4.612356', 'sucrerie'),
(2, '45.236595', '2.326598', '47.236548', '1.142536', 'orangerie');

-- --------------------------------------------------------

--
-- Structure de la table `ride`
--

DROP TABLE IF EXISTS `ride`;
CREATE TABLE IF NOT EXISTS `ride` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `fk_course` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `moment` date NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 = en attente 2 = demarrer 3 = arreter',
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ride`
--

INSERT INTO `ride` (`pk`, `fk_course`, `start_time`, `moment`, `status`) VALUES
(1, 1, '2019-03-23 06:23:42', '2019-03-23', 2),
(2, 2, '2019-03-23 06:35:48', '2019-03-23', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ride_child`
--

DROP TABLE IF EXISTS `ride_child`;
CREATE TABLE IF NOT EXISTS `ride_child` (
  `fk_ride` int(11) NOT NULL,
  `fk_child` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`pk`, `name`) VALUES
(1, 'Maman'),
(2, 'Papa'),
(3, 'Tuteur'),
(4, 'Kidnappeur');

-- --------------------------------------------------------

--
-- Structure de la table `school`
--

DROP TABLE IF EXISTS `school`;
CREATE TABLE IF NOT EXISTS `school` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `school`
--

INSERT INTO `school` (`pk`, `name`) VALUES
(1, 'Par dela l eau'),
(2, 'ecole vie'),
(3, 'ecole de l amitiee'),
(4, 'ecole de musique');

-- --------------------------------------------------------

--
-- Structure de la table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `fk_ride` int(11) NOT NULL,
  `fk_parent` int(11) NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `track`
--

DROP TABLE IF EXISTS `track`;
CREATE TABLE IF NOT EXISTS `track` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `ts` timestamp NOT NULL COMMENT 'timestamp',
  `fk_ride` int(11) NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
