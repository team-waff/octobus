-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 24 mars 2019 à 00:50
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
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `course`
--

INSERT INTO `course` (`pk`, `name`) VALUES
(1, 'sucrerie'),
(2, 'orangerie');

-- --------------------------------------------------------

--
-- Structure de la table `point`
--

DROP TABLE IF EXISTS `point`;
CREATE TABLE IF NOT EXISTS `point` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `fk_course` int(11) NOT NULL DEFAULT '1',
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `point`
--

INSERT INTO `point` (`pk`, `fk_course`, `longitude`, `latitude`) VALUES
(1, 1, '50.71450058690936', '4.601708203499331'),
(2, 1, '50.71468496053445', '4.60189447876896'),
(3, 1, '50.71479063707474', '4.601577910661952'),
(4, 1, '50.71490347223056', '4.601162529656479'),
(5, 1, '50.7149785691454', '4.600671126140041'),
(6, 1, '50.71502758888179', '4.60021481643444'),
(7, 1, '50.7150456167816', '4.59979743839585'),
(8, 1, '50.71505575571052', '4.599470375156298'),
(9, 1, '50.71506263850596', '4.599106968272793'),
(10, 1, '50.71501662036024', '4.598720615033152'),
(11, 1, '50.71497004890731', '4.598348088802209'),
(12, 1, '50.71491817449169', '4.597969396658685'),
(13, 1, '50.71487181828997', '4.597627727743485'),
(14, 1, '50.7148272453296', '4.597344618174617'),
(15, 1, '50.71476526141635', '4.596976125623864'),
(16, 1, '50.7146928863702', '4.596626989520736'),
(17, 1, '50.71463684860658', '4.596343121068371'),
(18, 1, '50.71459733608883', '4.596101663767258'),
(19, 1, '50.71448331800505', '4.595743251330868'),
(20, 1, '50.71450626436042', '4.595616260376836'),
(21, 1, '50.71456780636473', '4.595407810067163'),
(22, 1, '50.71464613210478', '4.595208460139737'),
(23, 1, '50.71474565125922', '4.594999029243832'),
(24, 1, '50.71483092516121', '4.594763886302593'),
(25, 1, '50.71491943568071', '4.594510858653759'),
(26, 1, '50.71502685339674', '4.594262121308619'),
(27, 1, '50.71511012484848', '4.594005437974551'),
(28, 1, '50.71518286131486', '4.593787108185364'),
(29, 1, '50.71529561352097', '4.593577282993902'),
(30, 1, '50.71537433017478', '4.593359056287096'),
(31, 1, '50.71544566971414', '4.593181556235299'),
(32, 1, '50.71559210968403', '4.592869168256635'),
(33, 1, '50.7156856466683', '4.592595777258735'),
(34, 1, '50.71577205301627', '4.592358657014255'),
(35, 1, '50.7158952906483', '4.592093333888025'),
(36, 1, '50.71596714290543', '4.591869693748338'),
(37, 1, '50.71605303797936', '4.59159691974855'),
(38, 1, '50.7161036314436', '4.591335540189114'),
(39, 1, '50.71620383615878', '4.591116324237083'),
(40, 1, '50.7162585162032', '4.590969924804387'),
(41, 1, '50.7162679678813', '4.59084390494366'),
(42, 1, '50.71625452993239', '4.590706628701067'),
(43, 1, '50.71619567182188', '4.590587843554149'),
(44, 1, '50.71613184408067', '4.590535396040956'),
(45, 1, '50.71606617751272', '4.59045544628466'),
(46, 1, '50.71595904809907', '4.590364769713728'),
(47, 1, '50.71585391285458', '4.590291182853323'),
(48, 1, '50.71577447102991', '4.590175654114748'),
(49, 1, '50.71568391578', '4.59008760934841'),
(50, 1, '50.71559063366718', '4.590000619570249'),
(51, 1, '50.71549633151462', '4.589906683592413'),
(52, 1, '50.7153993053278', '4.589798126633291'),
(53, 1, '50.71533686058978', '4.589710118052468'),
(54, 1, '50.71529637214257', '4.589616837745989'),
(55, 1, '50.71526940456995', '4.589471273820815'),
(56, 1, '50.71523045532953', '4.589325926886588'),
(57, 1, '50.7152096009773', '4.589144550114945'),
(58, 1, '50.71518611967341', '4.589008089901077'),
(59, 1, '50.71517329903858', '4.58884725817388'),
(60, 1, '50.71516005775202', '4.588683555196367'),
(61, 1, '50.71514244361955', '4.588535222716647'),
(62, 1, '50.71513163838769', '4.588387699508239'),
(63, 1, '50.71507625004271', '4.587861358669705'),
(64, 1, '50.71504691108719', '4.587622488620284'),
(65, 1, '50.71500994977372', '4.58739123058892'),
(66, 1, '50.71498719500929', '4.587133536467338'),
(67, 1, '50.71496350520236', '4.586937361501267'),
(68, 1, '50.71494535265345', '4.586717709613948'),
(69, 1, '50.71491186699556', '4.58645257044285'),
(70, 1, '50.71489725099767', '4.58620584182921'),
(71, 1, '50.71485786540193', '4.585936401686772'),
(72, 1, '50.71482756387007', '4.585661247831132'),
(73, 1, '50.71481200587441', '4.585401252789236'),
(74, 1, '50.71477350999231', '4.585090184971192'),
(75, 1, '50.71478447513373', '4.584886775102984'),
(76, 1, '50.71479983982889', '4.58462151202408'),
(77, 1, '50.71481814316659', '4.584408424002653'),
(78, 1, '50.71485019208662', '4.584084642521007'),
(79, 1, '50.71487426506152', '4.583801969209409'),
(80, 1, '50.71487210484691', '4.583577217385518'),
(81, 1, '50.7148968868004', '4.583419119941981'),
(82, 1, '50.71489288721631', '4.583314742266058'),
(83, 1, '50.71487319150956', '4.583221924628862'),
(84, 1, '50.71482717164705', '4.583152606261836'),
(85, 1, '50.71477823737348', '4.583038390695711'),
(86, 1, '50.71471454956494', '4.582901245641018'),
(87, 1, '50.71467378990098', '4.582799743541333'),
(88, 1, '50.71463647794916', '4.58270866004219'),
(89, 1, '50.71459528153126', '4.582606223167247'),
(90, 1, '50.71456796369501', '4.582545587228157'),
(91, 1, '50.7145515564569', '4.582499795832781'),
(92, 1, '50.71456205850914', '4.582458528403349'),
(93, 1, '50.71461613209684', '4.582400355836505'),
(94, 1, '50.71469888290656', '4.582313811804804'),
(95, 1, '50.71480126325886', '4.582201484993831'),
(96, 1, '50.71488940227516', '4.582115943275062'),
(97, 1, '50.71494886630463', '4.582036406372119'),
(98, 1, '50.71504897392583', '4.58191369768257'),
(99, 1, '50.71514042888065', '4.581806449621597'),
(100, 1, '50.71519586068077', '4.581747237855187'),
(101, 1, '50.71523432717557', '4.5816923808863'),
(102, 1, '50.71523899247448', '4.581637982287954');

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
  `status` int(11) NOT NULL COMMENT '0 = start 1 = running 2= stop',
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ride`
--

INSERT INTO `ride` (`pk`, `fk_course`, `start_time`, `moment`, `status`) VALUES
(1, 1, '2019-03-23 08:20:00', '2019-03-23', 2),
(2, 2, '2019-03-23 07:00:00', '2019-03-23', 1),
(3, 1, '2019-03-25 07:00:00', '2019-03-25', 1),
(4, 1, '2019-03-26 08:00:00', '2019-03-26', 1),
(5, 1, '2019-03-27 07:30:00', '2019-03-27', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ride_child`
--

DROP TABLE IF EXISTS `ride_child`;
CREATE TABLE IF NOT EXISTS `ride_child` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `fk_ride` int(11) NOT NULL,
  `fk_child` int(11) NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ride_child`
--

INSERT INTO `ride_child` (`pk`, `fk_ride`, `fk_child`) VALUES
(4, 3, 11),
(7, 3, 14),
(8, 1, 11),
(9, 2, 14),
(10, 1, 14);

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
