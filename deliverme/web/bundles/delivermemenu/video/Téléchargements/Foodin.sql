-- phpMyAdmin SQL Dump
-- version 4.5.5
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Ven 18 Mars 2016 à 18:11
-- Version du serveur :  10.0.23-MariaDB-0+deb8u1
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Foodin`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adesse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adesselivraison` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datenaissance` date NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `passe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `prenom`, `adesse`, `adesselivraison`, `datenaissance`, `user_id`, `passe`, `telephone`) VALUES
(1, 'achsmi', '18 rue paris', '15 rue paris', '2011-01-01', 10, 'LgzTwCwvYI', '5555555'),
(2, 'achsmi', '18 rue paris', '25 rue de teste', '2011-01-01', 17, '7YTlJ04wNw', '53235555555553'),
(3, 'smiii', '15 rue paris', '15 rue paris', '2011-01-01', 20, 'ZHYADPL2Ro', '45415122121');

-- --------------------------------------------------------

--
-- Structure de la table `clientadress`
--

CREATE TABLE `clientadress` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adress` longtext COLLATE utf8_unicode_ci NOT NULL,
  `autreadress` longtext COLLATE utf8_unicode_ci NOT NULL,
  `codepostal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `information` longtext COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `clientadress`
--

INSERT INTO `clientadress` (`id`, `client_id`, `prenom`, `nom`, `adress`, `autreadress`, `codepostal`, `telephone`, `information`, `titre`) VALUES
(1, 1, 'achraf', 'smida', '25 rue de teste', '25', '7005', '52094866', 'sfsdfsdfdsf', 'titre1'),
(2, 3, 'aaaaaaaaaa', 'bbbbbbbbbbbbbbbbbb', 'aaaaaaaaaaaaaaaaa@mail.com', 'aaaaaaaaaaaaaaaaa@mail.com', '7555555', '525545454', 'sdfffffffffff', 'titre');

-- --------------------------------------------------------

--
-- Structure de la table `codepostale`
--

CREATE TABLE `codepostale` (
  `id` int(11) NOT NULL,
  `codepostale` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dayofweek`
--

CREATE TABLE `dayofweek` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `dayofweek`
--

INSERT INTO `dayofweek` (`id`, `libelle`) VALUES
(1, 'Lundi'),
(2, 'Mardi'),
(3, 'Mercredi'),
(4, 'Jeudi'),
(5, 'Vendredi'),
(6, 'Samedi'),
(7, 'Dimanche');

-- --------------------------------------------------------

--
-- Structure de la table `disponibility`
--

CREATE TABLE `disponibility` (
  `id` int(11) NOT NULL,
  `runner_id` int(11) DEFAULT NULL,
  `dayofweek_id` int(11) DEFAULT NULL,
  `horrairezone_id` int(11) DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `disponibility`
--

INSERT INTO `disponibility` (`id`, `runner_id`, `dayofweek_id`, `horrairezone_id`, `value`) VALUES
(1, 3, 1, 1, '0'),
(2, 3, 1, 2, '1'),
(3, 3, 1, 3, '0'),
(4, 3, 1, 4, '0'),
(5, 3, 1, 7, '0'),
(6, 3, 1, 8, '0'),
(7, 3, 1, 9, '0'),
(8, 3, 1, 10, '0'),
(9, 3, 1, 11, '0'),
(10, 3, 1, 12, '0'),
(11, 3, 1, 13, '0'),
(12, 3, 1, 14, '0'),
(13, 3, 1, 15, '0'),
(14, 3, 1, 16, '0'),
(15, 3, 2, 1, '0'),
(16, 3, 2, 2, '0'),
(17, 3, 2, 3, '0'),
(18, 3, 2, 4, '0'),
(19, 3, 2, 7, '0'),
(20, 3, 2, 8, '0'),
(21, 3, 2, 9, '0'),
(22, 3, 2, 10, '0'),
(23, 3, 2, 11, '0'),
(24, 3, 2, 12, '0'),
(25, 3, 2, 13, '0'),
(26, 3, 2, 14, '0'),
(27, 3, 2, 15, '0'),
(28, 3, 2, 16, '0'),
(29, 3, 3, 1, '0'),
(30, 3, 3, 2, '0'),
(31, 3, 3, 3, '0'),
(32, 3, 3, 4, '0'),
(33, 3, 3, 7, '0'),
(34, 3, 3, 8, '0'),
(35, 3, 3, 9, '1'),
(36, 3, 3, 10, '0'),
(37, 3, 3, 11, '0'),
(38, 3, 3, 12, '0'),
(39, 3, 3, 13, '0'),
(40, 3, 3, 14, '1'),
(41, 3, 3, 15, '0'),
(42, 3, 3, 16, '0'),
(43, 3, 4, 1, '0'),
(44, 3, 4, 2, '0'),
(45, 3, 4, 3, '0'),
(46, 3, 4, 4, '0'),
(47, 3, 4, 7, '0'),
(48, 3, 4, 8, '0'),
(49, 3, 4, 9, '1'),
(50, 3, 4, 10, '0'),
(51, 3, 4, 11, '0'),
(52, 3, 4, 12, '0'),
(53, 3, 4, 13, '1'),
(54, 3, 4, 14, '0'),
(55, 3, 4, 15, '0'),
(56, 3, 4, 16, '0'),
(57, 3, 5, 1, '0'),
(58, 3, 5, 2, '0'),
(59, 3, 5, 3, '0'),
(60, 3, 5, 4, '0'),
(61, 3, 5, 7, '0'),
(62, 3, 5, 8, '0'),
(63, 3, 5, 9, '0'),
(64, 3, 5, 10, '0'),
(65, 3, 5, 11, '1'),
(66, 3, 5, 12, '0'),
(67, 3, 5, 13, '0'),
(68, 3, 5, 14, '0'),
(69, 3, 5, 15, '0'),
(70, 3, 5, 16, '0'),
(71, 3, 6, 1, '0'),
(72, 3, 6, 2, '0'),
(73, 3, 6, 3, '0'),
(74, 3, 6, 4, '0'),
(75, 3, 6, 7, '0'),
(76, 3, 6, 8, '0'),
(77, 3, 6, 9, '0'),
(78, 3, 6, 10, '0'),
(79, 3, 6, 11, '0'),
(80, 3, 6, 12, '0'),
(81, 3, 6, 13, '0'),
(82, 3, 6, 14, '1'),
(83, 3, 6, 15, '1'),
(84, 3, 6, 16, '1'),
(85, 3, 7, 1, '0'),
(86, 3, 7, 2, '0'),
(87, 3, 7, 3, '1'),
(88, 3, 7, 4, '0'),
(89, 3, 7, 7, '0'),
(90, 3, 7, 8, '0'),
(91, 3, 7, 9, '0'),
(92, 3, 7, 10, '0'),
(93, 3, 7, 11, '0'),
(94, 3, 7, 12, '0'),
(95, 3, 7, 13, '0'),
(96, 3, 7, 14, '0'),
(97, 3, 7, 15, '1'),
(98, 3, 7, 16, '0');

-- --------------------------------------------------------

--
-- Structure de la table `forniteur`
--

CREATE TABLE `forniteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `forniteur`
--

INSERT INTO `forniteur` (`id`, `nom`) VALUES
(1, 'ENSALADAS'),
(2, 'TOSTAS'),
(3, 'TIPICOS'),
(4, 'MARISCOS'),
(5, 'CARNES'),
(7, 'categorie'),
(8, 'jean david');

-- --------------------------------------------------------

--
-- Structure de la table `horrairezone`
--

CREATE TABLE `horrairezone` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datedebut` time NOT NULL,
  `datefin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `horrairezone`
--

INSERT INTO `horrairezone` (`id`, `libelle`, `datedebut`, `datefin`) VALUES
(1, '08h-> 09h', '08:00:00', '09:00:00'),
(2, '09h -> 10h', '09:00:00', '10:00:00'),
(3, '10h -> 11h ', '10:00:00', '11:00:00'),
(4, '11h -> 12h ', '11:00:00', '12:00:00'),
(7, '12h -> 13h ', '12:00:00', '13:00:00'),
(8, '13h -> 14h ', '13:00:00', '14:00:00'),
(9, '14h -> 15h ', '14:00:00', '15:00:00'),
(10, '15h -> 16h ', '15:00:00', '16:00:00'),
(11, '16h -> 17h ', '16:00:00', '17:00:00'),
(12, '17h -> 18h ', '17:00:00', '18:00:00'),
(13, '18h -> 19h ', '18:00:00', '19:00:00'),
(14, '19h -> 20h ', '19:00:00', '20:00:00'),
(15, '20h -> 21h ', '20:00:00', '21:00:00'),
(16, '21h -> 22h ', '21:00:00', '22:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `horrairezonequart`
--

CREATE TABLE `horrairezonequart` (
  `id` int(11) NOT NULL,
  `horrairezone_id` int(11) DEFAULT NULL,
  `minute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `horrairezonequart`
--

INSERT INTO `horrairezonequart` (`id`, `horrairezone_id`, `minute`, `libelle`) VALUES
(1, 1, '00', '08H:00'),
(2, 1, '15', '08H:15'),
(3, 1, '30', '08H:30'),
(4, 1, '45', '08H:45'),
(5, 2, '00', '09H:00'),
(6, 2, '15', '09H:15'),
(7, 2, '30', '09H:30'),
(8, 2, '45', '09H:45'),
(9, 3, '00', '10H:00'),
(10, 3, '15', '10H:15'),
(11, 3, '30', '10H:30'),
(12, 3, '45', '10H:45'),
(13, 4, '00', '11H:00'),
(14, 4, '15', '11H:15'),
(15, 4, '30', '11H:30'),
(16, 4, '45', '11H:45'),
(17, 7, '00', '12H:00'),
(18, 7, '15', '12H:15'),
(19, 7, '30', '12H:30'),
(20, 7, '45', '12H:45'),
(21, 8, '00', '13H:00'),
(22, 8, '15', '13H:15'),
(23, 8, '30', '13H:30'),
(24, 8, '45', '13H:45'),
(25, 9, '00', '14H:00'),
(26, 9, '15', '14H:15'),
(27, 9, '30', '14H:30'),
(28, 9, '45', '14H:45'),
(29, 10, '00', '15H:00'),
(30, 10, '15', '15H:15'),
(31, 10, '30', '15H:30'),
(32, 10, '45', '15H:45'),
(33, 11, '00', '16H:00'),
(34, 11, '15', '16H:15'),
(35, 11, '30', '16H:30'),
(36, 11, '45', '16H:45'),
(37, 12, '00', '17H:00'),
(38, 12, '15', '17H:15'),
(39, 12, '30', '17H:30'),
(40, 12, '45', '17H:45'),
(41, 13, '00', '18H:00'),
(42, 13, '15', '18H:15'),
(43, 13, '30', '18H:30'),
(44, 13, '45', '18H:45'),
(45, 14, '00', '19H:00'),
(46, 14, '15', '19H:15'),
(47, 14, '30', '19H:30'),
(48, 14, '45', '19H:45'),
(49, 15, '00', '20H:00'),
(50, 15, '15', '20H:15'),
(51, 15, '30', '20H:30'),
(52, 15, '45', '20H:45'),
(53, 16, '00', '21H:00'),
(54, 16, '15', '21H:15'),
(55, 16, '30', '21H:30'),
(56, 16, '45', '21H:45');

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `id` int(11) NOT NULL,
  `ville_id` int(11) DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adressedeusieme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codepostal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `information` longtext COLLATE utf8_unicode_ci NOT NULL,
  `telfix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telmobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ordre`
--

CREATE TABLE `ordre` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `runner_id` int(11) DEFAULT NULL,
  `ordredate` datetime NOT NULL,
  `datacreated` datetime NOT NULL,
  `ordrestatut` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordretype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prixtotal` double NOT NULL,
  `adresslivraison_id` int(11) DEFAULT NULL,
  `adressfacturation_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ordre`
--

INSERT INTO `ordre` (`id`, `client_id`, `restaurant_id`, `runner_id`, `ordredate`, `datacreated`, `ordrestatut`, `ordretype`, `prixtotal`, `adresslivraison_id`, `adressfacturation_id`) VALUES
(1, 1, 1, NULL, '2016-03-05 22:37:06', '2016-03-05 22:37:06', '1', '2', 50, NULL, NULL),
(2, 1, 1, NULL, '2016-03-05 23:00:33', '2016-03-05 23:00:33', '1', '2', 50, NULL, NULL),
(3, 1, 1, 3, '2016-03-06 10:52:55', '2016-03-06 10:52:55', '1', '1', 50, NULL, NULL),
(4, 1, 1, 3, '2016-03-06 11:52:40', '2016-03-06 11:52:40', '1', '1', 50, NULL, NULL),
(5, 3, 11, 3, '2016-03-16 13:03:33', '2016-03-16 13:03:33', '1', '1', 50, NULL, NULL),
(6, 3, 11, 3, '2016-03-16 13:04:19', '2016-03-16 13:04:19', '1', '1', 50, NULL, NULL),
(7, 3, 11, 3, '2016-03-16 14:37:16', '2016-03-16 14:37:16', '1', '1', 50, NULL, NULL),
(8, 3, 11, 3, '2016-03-16 14:43:45', '2016-03-16 14:43:45', '1', '1', 50, NULL, NULL),
(9, 3, 11, 3, '2016-03-16 14:47:13', '2016-03-16 14:47:13', '1', '1', 50, NULL, NULL),
(10, 3, 11, 3, '2016-03-16 14:48:36', '2016-03-16 14:48:36', '1', '1', 50, NULL, NULL),
(11, 3, 11, 3, '2016-03-16 14:48:47', '2016-03-16 14:48:47', '1', '1', 50, NULL, NULL),
(12, 3, 11, 3, '2016-03-16 14:49:08', '2016-03-16 14:49:08', '1', '1', 50, NULL, NULL),
(13, 3, 11, 3, '2016-03-16 14:49:31', '2016-03-16 14:49:31', '1', '1', 50, NULL, NULL),
(14, 3, 11, 3, '2016-03-16 14:50:00', '2016-03-16 14:50:00', '1', '1', 50, NULL, NULL),
(15, 3, 11, 3, '2016-03-16 14:57:22', '2016-03-16 14:57:22', '1', '1', 50, NULL, NULL),
(16, 3, 11, 3, '2016-03-16 14:58:28', '2016-03-16 14:58:28', '1', '1', 50, NULL, NULL),
(17, 3, 11, 3, '2016-03-16 15:04:12', '2016-03-16 15:04:12', '1', '1', 10, NULL, NULL),
(18, 3, 11, 3, '2016-03-16 15:04:56', '2016-03-16 15:04:56', '1', '1', 10, NULL, NULL),
(19, 3, 11, 3, '2016-03-16 15:06:23', '2016-03-16 15:06:23', '1', '1', 10, NULL, NULL),
(20, 3, 11, 3, '2016-03-16 15:11:42', '2016-03-16 15:11:42', '1', '1', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ordredetails`
--

CREATE TABLE `ordredetails` (
  `id` int(11) NOT NULL,
  `ordre_id` int(11) DEFAULT NULL,
  `plat_id` int(11) DEFAULT NULL,
  `prix` double NOT NULL,
  `remarque` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ordredetails`
--

INSERT INTO `ordredetails` (`id`, `ordre_id`, `plat_id`, `prix`, `remarque`) VALUES
(1, 17, 6, 10, '                                           \n\n                                             '),
(2, 18, 6, 10, '                                           \n\n                                             '),
(3, 19, 6, 10, '                                           \n\n                                             '),
(4, 20, 6, 10, '                                           \n\n                                             ');

-- --------------------------------------------------------

--
-- Structure de la table `ordredetailsuupliment`
--

CREATE TABLE `ordredetailsuupliment` (
  `id` int(11) NOT NULL,
  `ordredetails_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ouverture`
--

CREATE TABLE `ouverture` (
  `id` int(11) NOT NULL,
  `dayofweek_id` int(11) DEFAULT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `de` time DEFAULT NULL,
  `jusqa` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ouverture`
--

INSERT INTO `ouverture` (`id`, `dayofweek_id`, `restaurant_id`, `de`, `jusqa`) VALUES
(2, 1, 1, '14:42:30', '17:42:30'),
(3, 1, 1, '02:45:45', '01:45:45'),
(4, 4, 1, '20:46:45', '19:46:30'),
(5, 1, 8, '00:08:15', '23:06:15'),
(6, 1, 1, '22:33:15', '00:16:15');

-- --------------------------------------------------------

--
-- Structure de la table `ouverturereservation`
--

CREATE TABLE `ouverturereservation` (
  `id` int(11) NOT NULL,
  `dayofweek_id` int(11) DEFAULT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `de` time DEFAULT NULL,
  `jusqa` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ouverturereservation`
--

INSERT INTO `ouverturereservation` (`id`, `dayofweek_id`, `restaurant_id`, `de`, `jusqa`) VALUES
(1, 1, 1, '14:33:15', '14:37:15'),
(2, 1, 1, '20:33:15', '00:37:15');

-- --------------------------------------------------------

--
-- Structure de la table `photorestaurant`
--

CREATE TABLE `photorestaurant` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `photorestaurant`
--

INSERT INTO `photorestaurant` (`id`, `restaurant_id`, `name`, `photo`) VALUES
(1, 1, 'photo1', '80e112563a16429ad412adc4cd6289a462c39d0b.jpeg'),
(2, 1, 'photo2', 'd31996fc60e3090530672b9b794a14296fcdf770.jpeg'),
(3, 1, 'photo3', '305aaacbe0435dff745ebbf9d68461ba1eae6c1d.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `forniteur_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `garnitures` longtext COLLATE utf8_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TVA_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `plat`
--

INSERT INTO `plat` (`id`, `restaurant_id`, `forniteur_id`, `nom`, `garnitures`, `prix`, `photo`, `TVA_id`) VALUES
(1, 1, 1, 'BABA GHANNOUG', 'Purée d\'avocat aux crevettes servie avec Nachos', 5, 'd4a1774dc4550675c2001e0060cf0651e9f743ee.png', 1),
(2, 1, 1, 'ENSALADA DE LA CASA', 'Tomate, jambon serrano, mozzarella di bufala, salade verte, poivron, crouûtons, oignon frits', 6.5, '747a1975fa32e03af0da896403ac05dc501d1846.png', 1),
(3, 1, 2, 'PAN CON TOMATE', 'Pains grillés à la tomate, à l\'ail et à l\'huile d\'olive', 3.4, 'b0b788899544948c0a9ad11fdc1952ca2dec4bc4.png', 1),
(4, 1, 3, 'PULPITOS EN SALSA PICANTE', 'Petits poulpes en sauce tomate piquante', 6.5, '7dfebfa49847d096dedb24fa91eb576408c233a0.png', 1),
(5, 1, 7, 'testplat', 'testttttttttttttttttt', 50, '726c5dc336f7c2512cb7b9bdc13b1cf0681f4623.png', 6),
(6, 11, 1, 'testplats', 'fsddddddddd', 10, 'ac15f03fa05798f940540955906c59b3439a44df.jpeg', 1),
(7, 11, 1, 'plat2', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 11, '2ede6a50ac3e3bbea57927e304faf99926833850.jpeg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `runner_id` int(11) DEFAULT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `datereservation` datetime NOT NULL,
  `numbreplace` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statut` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id`, `client_id`, `restaurant_id`, `datereservation`, `numbreplace`, `statut`) VALUES
(1, 1, 1, '2016-03-15 16:35:00', '5', '1'),
(2, 3, 1, '2016-03-15 19:25:00', '5', '1'),
(3, 3, 1, '2016-03-09 22:30:00', '5', '1'),
(4, 3, 1, '2016-03-09 22:30:00', '5', '1'),
(5, 3, 1, '2016-03-09 22:30:00', '5', '1'),
(6, 3, 1, '2016-03-09 22:30:00', '5', '1'),
(7, 3, 1, '2016-03-09 22:30:00', '5', '1'),
(8, 3, 1, '2016-03-09 22:30:00', '5', '1'),
(9, 3, 1, '2016-03-09 22:30:00', '5', '1'),
(10, 3, 1, '2016-03-09 22:30:00', '5', '1'),
(11, 3, 1, '2016-03-09 22:30:00', '5', '1'),
(12, 3, 1, '2016-03-09 22:30:00', '5', '1'),
(13, 3, 1, '2016-03-09 22:30:00', '5', '1'),
(14, 3, 1, '2016-03-09 22:30:00', '5', '1'),
(15, 3, 1, '2016-03-09 22:30:00', '5', '1'),
(16, 3, 1, '2016-03-09 22:30:00', '5', '1'),
(17, 3, 1, '2016-03-09 22:30:00', '5', '1'),
(18, 1, 11, '2016-03-22 09:45:00', '5', '1'),
(19, 1, 11, '2016-03-09 18:55:00', '5', '1'),
(20, 1, 11, '2016-03-09 22:55:00', '5', '1'),
(21, 1, 11, '2016-03-09 22:55:00', '5', '1'),
(22, 1, 11, '2016-03-09 22:55:00', '5', '1'),
(23, 1, 11, '2016-03-13 21:00:23', '7', '1'),
(24, 1, 11, '2016-03-13 21:00:32', '7', '1'),
(25, 1, 11, '2016-03-31 21:50:00', '7', '1'),
(26, 1, 11, '2016-03-31 21:50:00', '7', '1'),
(27, 1, 11, '2016-03-30 21:00:00', '4', '1'),
(28, 1, 11, '2016-03-23 21:25:00', '7', '1'),
(29, 1, 11, '2016-03-24 21:45:00', '5', '1'),
(30, 1, 11, '2016-03-24 21:05:00', '5', '1'),
(31, 1, 11, '2016-03-24 21:25:00', '7', '1'),
(32, 1, 11, '2016-03-23 21:05:00', '5', '1'),
(33, 1, 11, '2016-03-23 21:05:00', '5', '1'),
(34, 1, 11, '2016-03-23 21:30:00', '5', '1'),
(35, 1, 11, '2016-03-29 21:50:00', '5', '1'),
(36, 1, 11, '2016-03-29 21:50:00', '5', '1'),
(37, 1, 11, '2016-03-24 21:30:00', '5', '1'),
(38, 1, 11, '2016-03-23 21:35:00', '5', '1'),
(39, 1, 11, '2016-03-23 21:30:00', '5', '1'),
(40, 3, 11, '2016-03-22 22:40:00', '5', '1'),
(41, 3, 11, '2016-03-22 22:40:00', '5', '1'),
(42, 3, 11, '2016-03-23 06:40:00', '5', '1'),
(43, 3, 1, '2016-03-17 22:35:00', '5', '1'),
(44, 3, 1, '2016-03-17 22:35:00', '5', '1'),
(45, 3, 11, '2016-03-23 22:40:00', '5', '1'),
(46, 3, 11, '2016-03-23 21:50:00', '5', '1'),
(47, 3, 11, '2016-03-23 21:50:00', '5', '1'),
(48, 3, 11, '2016-03-16 20:40:00', '5', '1');

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `ville_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prestation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `livraison` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `takeaway` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commandetable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `passe` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `restaurant`
--

INSERT INTO `restaurant` (`id`, `ville_id`, `nom`, `adresse`, `longitude`, `latitude`, `tel`, `email`, `prestation`, `photo`, `livraison`, `takeaway`, `commandetable`, `status`, `user_id`, `passe`) VALUES
(1, 6, 'TAPAS CAFE', '6 Place des Augustins, 13100 Aix-en-Provence, France', 43.5272233, 5.446410799999967, '06562626262', 'tapas@gmail.com', 'A l\'origine, dans les tavernes andalouses, on recouvrait (tapar) les verres de tranches de chorizo ou de jambon pour garder l\'arôme du vin. Aujourd\'hui les Espagnols ont adopté l\'idée de la "tapa" pour toutes sortes de petits plats froids ou chauds, qu\'il', '74904cbf89012eb2f3ff4d8918434e5abe68e523.jpeg', '1', '1', '1', '1', 11, ''),
(2, 2, 'DA VITO', '8 Rue Boulegon - 13100 Aix-En-Provence', 43.5309829, 5.449373000000037, '555555555555', 'davito@gmail.com', 'Chez Da Vito, le fruit d\'un mélange de traditions napolitaines et de recettes familiales transmises de père en fils. C\'est une véritable trattoria italienne où règne constamment un parfum de Napoli, avec des produits frais provenant des meilleurs producte', 'c233993bce2b6c5bee28df9acebf8cba91e397b2.jpeg', '1', '1', '0', '1', NULL, ''),
(3, 2, 'LE RIAD', '21 Rue Lieutaud, 13100 Aix-en-Provence, France', 43.5293683, 5.44520979999993, '454555555555', 'leriad@gmail.com', 'Le Riad, Cuisine Oriental : Il est la référence Orientale sur Aix-en-Provence. Vous pourrez y apprécier une cuisine délicate et subtile associant en une harmonie unique les saveurs de la gastronomie marocaine', '7dd8bc8cfa3e5e04958f0fe83ec5ab05638cc308.jpeg', '1', '0', '1', '1', NULL, ''),
(4, 6, 'NINO CAFÉ', '41 Cours Mirabeau, 13100 Aix-en-Provence, France', 43.527045, 5.449369299999944, '4555555555', 'email@email.com', 'Le Nino Café Brasserie vous propose une cuisine originale composée de spécialités de cuisine d’inspiration Bistronomie – Cette cuisine est caractéristique d’un savoir faire français en proposant une carte riche et variée, permettant de contenter toutes gé', '09482a41cbcc99e88f6d1e0660557d2687138669.jpeg', '1', '0', '1', '1', NULL, ''),
(5, 6, 'LE MAHARAJA', '16 Rue Des Tanneurs - 13100 Aix En Provence', 43.5280228, 5.446154500000034, '54444444', 'lamahraja@gmail.com', 'lamharaja', 'a054c8bf9f6798df5b7ad43497dfda6af053d67b.jpeg', '1', '1', '1', '1', NULL, ''),
(6, 6, 'LI PALACE', '4 Rue Emeric David, 13100 Aix-en-Provence, France', 43.5281415, 5.452018800000019, '555555555555', 'lipalace', 'Le Restaurant Li Palace vous accueil avec Le chef Christophe PAN, et vous préparera les plats de la carte composée, d\'une cuisine chinoise authentique aux influences Sichuanaise tel que les raviolis Chinois faite maison avec des pâtes fraîches. \r\n\r\nAccomp', 'd13622caee77676cdea474f4b1006610f842e8da.jpeg', '1', '0', '0', '1', NULL, ''),
(7, 6, 'FRESH BOX', '11 Rue Granet, 13100 Aix-en-Provence, France', 43.5299022, 5.448974200000066, '5255555', 'freshbox', 'Découvrez cette enseigne qui s\'est imposé de part son partis pris et qui s\'impose comme une référence. Des plats sains et équilibrés composés de produits frais. Nos Woks sont des recettes exclusives composées par notre chef wokeur', 'ed38cd015fac93830912798edd1b87041e842a56.jpeg', '1', '0', '1', '1', NULL, ''),
(8, 2, 'test', 'Calle 8, Buenos Aires, Argentine', -34.9125278, -57.95525169999996, '6555555555', 'aaaaaa@gmail.com', 'sdqqqqqqqqqqqqqqqqqq', '42106b6bc11676cd858466cd3a16898c3e3dcfa5.png', '1', '1', '1', '1', NULL, ''),
(9, 6, 'achraf smida', '25 rue de teste', 44.647708, -1.1801792999999634, '555555555555', 'email@email.com', 'dfssssssssssssssssss', '1fea80a8637b1481d762a02a671d4d6f88a497c7.jpeg', '1', '1', '1', '1', NULL, ''),
(10, 6, 'achraf smida', '25 Rue de Testé, 32100 Condom, France', 43.9520635, 0.3599309999999605, '555555555555', 'achraf@gmail.com', 'dvs', 'e393428a946e535d37e26b31892826bc2d81fc1f.png', '1', '1', '1', '1', 16, ''),
(11, 6, 'testt', '25 Rue de la Teste de Buch, 14320 May-sur-Orne, France', 49.1000449, -0.3700327000000243, '555555555555', 'qfdsfdsf@gmail.com', 'sdfffffffffffffffffdsfsdf', 'bbe3e6a76c31d2acb90b56bd181afd096f874ad9.jpeg', '1', '1', '1', '1', 21, 'e2qXecImz9');

-- --------------------------------------------------------

--
-- Structure de la table `restaurant_codepostale`
--

CREATE TABLE `restaurant_codepostale` (
  `restaurant_id` int(11) NOT NULL,
  `codepostale_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `restaurant_speciality`
--

CREATE TABLE `restaurant_speciality` (
  `restaurant_id` int(11) NOT NULL,
  `speciality_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `restaurant_speciality`
--

INSERT INTO `restaurant_speciality` (`restaurant_id`, `speciality_id`) VALUES
(8, 8),
(9, 1),
(9, 3),
(10, 1),
(10, 4),
(11, 1),
(11, 3);

-- --------------------------------------------------------

--
-- Structure de la table `restaurant_vilecodepostal`
--

CREATE TABLE `restaurant_vilecodepostal` (
  `restaurant_id` int(11) NOT NULL,
  `vilecodepostal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `restaurant_vilecodepostal`
--

INSERT INTO `restaurant_vilecodepostal` (`restaurant_id`, `vilecodepostal_id`) VALUES
(9, 1),
(9, 4),
(9, 5),
(9, 6),
(9, 7),
(10, 1),
(10, 4),
(10, 5),
(10, 6),
(10, 7),
(11, 1),
(11, 4),
(11, 5),
(11, 6),
(11, 7);

-- --------------------------------------------------------

--
-- Structure de la table `runner`
--

CREATE TABLE `runner` (
  `id` int(11) NOT NULL,
  `ville_id` int(11) DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `situation_professionnelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `passe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `presentation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `User_id` int(11) DEFAULT NULL,
  `dateregistre` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `runner`
--

INSERT INTO `runner` (`id`, `ville_id`, `prenom`, `tel`, `situation_professionnelle`, `age`, `passe`, `presentation`, `User_id`, `dateregistre`) VALUES
(3, 6, 'smi', '32555555555', 'celibataire', 28, 'UPXh37NB7w', 'dfsffffffffffffff', 9, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `runnerpath`
--

CREATE TABLE `runnerpath` (
  `id` int(11) NOT NULL,
  `runner_id` int(11) DEFAULT NULL,
  `fromlong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `formlat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tolong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tolati` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fromtime` datetime NOT NULL,
  `totime` datetime NOT NULL,
  `day` date NOT NULL,
  `ordre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `runnerpath`
--

INSERT INTO `runnerpath` (`id`, `runner_id`, `fromlong`, `formlat`, `tolong`, `tolati`, `fromtime`, `totime`, `day`, `ordre_id`) VALUES
(1, 3, '5.4464108', '43.5272233', '5.4462804', '43.5271909', '2016-03-06 14:00:00', '2016-03-06 14:00:06', '2016-03-06', 1),
(2, 3, '5.4464108', '43.5272233', '5.4462475', '43.5271314', '2016-03-06 14:14:53', '2016-03-06 14:15:00', '2016-03-06', 4),
(3, 3, '-0.3700327', '49.1000449', '-0.3700327', '49.1000449', '2016-03-16 19:00:00', '2016-03-16 19:00:00', '2016-03-16', 5),
(4, 3, '-0.3700327', '49.1000449', '-0.3700327', '49.1000449', '2016-03-16 14:00:00', '2016-03-17 14:00:00', '2016-03-17', 6),
(5, 3, '-0.3700327', '49.1000449', '-0.3707099', '49.0999258', '2016-03-16 19:14:40', '2016-03-16 19:15:00', '2016-03-16', 7),
(6, 3, '-0.3700327', '49.1000449', '-0.3700327', '49.1000449', '2016-03-16 19:30:00', '2016-03-16 19:30:00', '2016-03-16', 8),
(7, 3, '-0.3700327', '49.1000449', '-0.3700327', '49.1000449', '2016-03-16 14:15:00', '2016-03-17 14:15:00', '2016-03-17', 14),
(8, 3, '-0.3700327', '49.1000449', '-0.3700327', '49.1000449', '2016-03-16 14:30:00', '2016-03-17 14:30:00', '2016-03-17', 15),
(9, 3, '-0.3700327', '49.1000449', '-0.3700327', '49.1000449', '2016-03-16 14:45:00', '2016-03-17 14:45:00', '2016-03-17', 16),
(10, 3, '-0.3700327', '49.1000449', '-0.3700327', '49.1000449', '2016-03-16 18:00:00', '2016-03-17 18:00:00', '2016-03-17', 17),
(11, 3, '-0.3700327', '49.1000449', '-0.3700327', '49.1000449', '2016-03-16 18:15:00', '2016-03-17 18:15:00', '2016-03-17', 18),
(12, 3, '-0.3700327', '49.1000449', '-0.3700327', '49.1000449', '2016-03-16 18:30:00', '2016-03-17 18:30:00', '2016-03-17', 19),
(13, 3, '-0.3700327', '49.1000449', '-0.3700327', '49.1000449', '2016-03-16 19:45:00', '2016-03-16 19:45:00', '2016-03-16', 20);

-- --------------------------------------------------------

--
-- Structure de la table `runner_vehicule`
--

CREATE TABLE `runner_vehicule` (
  `runner_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `runner_vehicule`
--

INSERT INTO `runner_vehicule` (`runner_id`, `vehicule_id`) VALUES
(3, 1),
(3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `rvw`
--

CREATE TABLE `rvw` (
  `id` int(11) NOT NULL,
  `dayofweek_id` int(11) DEFAULT NULL,
  `vehicule_id` int(11) DEFAULT NULL,
  `runner_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `rvw`
--

INSERT INTO `rvw` (`id`, `dayofweek_id`, `vehicule_id`, `runner_id`) VALUES
(1, 1, 2, 3),
(2, 2, 3, 3),
(3, 3, 1, 3),
(4, 4, 2, 3),
(5, 5, 3, 3),
(6, 6, 3, 3),
(7, 7, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `speciality`
--

CREATE TABLE `speciality` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `speciality`
--

INSERT INTO `speciality` (`id`, `nom`) VALUES
(1, 'Restaurant Trattoria Italienne'),
(2, 'Restaurant Tapas Espagnol'),
(3, 'Restaurant Oriental'),
(4, 'Restaurant Bistronomique'),
(5, 'Restaurant Indien'),
(6, 'Restaurant Chinois'),
(7, 'spécialite'),
(8, 'spécialite2'),
(9, 'spécialite 3'),
(10, 'jean david');

-- --------------------------------------------------------

--
-- Structure de la table `supplimentchoice`
--

CREATE TABLE `supplimentchoice` (
  `id` int(11) NOT NULL,
  `supplimenttype_id` int(11) DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `supplimentchoice`
--

INSERT INTO `supplimentchoice` (`id`, `supplimenttype_id`, `libelle`, `prix`) VALUES
(1, 1, 'coca cola', '1');

-- --------------------------------------------------------

--
-- Structure de la table `supplimenttype`
--

CREATE TABLE `supplimenttype` (
  `id` int(11) NOT NULL,
  `plat_id` int(11) DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `supplimenttype`
--

INSERT INTO `supplimenttype` (`id`, `plat_id`, `libelle`) VALUES
(1, 1, 'boison');

-- --------------------------------------------------------

--
-- Structure de la table `tva`
--

CREATE TABLE `tva` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tva`
--

INSERT INTO `tva` (`id`, `libelle`) VALUES
(1, '10'),
(2, '20'),
(5, '30'),
(6, '40');

-- --------------------------------------------------------

--
-- Structure de la table `TVA`
--

CREATE TABLE `TVA` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `TVA`
--

INSERT INTO `TVA` (`id`, `libelle`) VALUES
(1, '10'),
(2, '20'),
(5, '30'),
(6, '40'),
(7, '60'),
(8, '80');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(9, 'Ach', 'ach', 'achsmi@gmail.com', 'achsmi@gmail.com', 1, 'du75ng606xskkkcwcwws00ok4wookcw', '$2y$13$du75ng606xskkkcwcwws0u1HcDoPy2pocnq9AO5B.CGKWjAVturcO', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:11:"ROLE_RUNNER";}', 0, NULL),
(10, 'achsmi', 'achsmi', 'aaaaa@gmail.com', 'aaaaa@gmail.com', 0, '9eudgnt3k7400s48og8ko8wcc40gwkc', '$2y$13$9eudgnt3k7400s48og8kou2GIY3HVeWD1yclBmXypyZwFt2nJtINa', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:11:"ROLE_CLIENT";}', 0, NULL),
(11, 'resto', 'resto', 'achsmi23@gmail.com', 'achsmi23@gmail.com', 1, 'ja3j0zupjjswsg0kg0sgk0g40cg8488', '$2y$13$ja3j0zupjjswsg0kg0sgkueHucJiA6Nl0SFw/WruIOHrwvk6FtCMa', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:15:"ROLE_RESTAURANT";}', 0, NULL),
(12, 'admin', 'admin', 'admin@admin.com', 'admin@admin.com', 1, 'r4ik2vhs8vks4ckg4w8woww0ss8wgoc', '$2y$13$r4ik2vhs8vks4ckg4w8wouYyrMvUBZu3xpDtQL3emgZ4hH4bYzX7K', '2016-03-18 12:02:55', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(13, 'aaaaaaaaaaaaaaa@gmail.com', 'aaaaaaaaaaaaaaa@gmail.com', 'aaaaaaaaaaaaaaa@gmail.com', 'aaaaaaaaaaaaaaa@gmail.com', 1, 'bx36k5j163kkc4kkc80g0w4c0o8sg', '$2y$13$bx36k5j163kkc4kkc80g0uq6U/tZR3nIpJ3XcIzHtMNiAHYj2BCee', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:15:"ROLE_RESTAURANT";}', 0, NULL),
(14, 'aaaaaaaaaaaaaaaaaaaaaaaaaaa@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa@gmail.com', 1, '5nh7gxbiw78kog4wgww404o4owk0wsw', '$2y$13$5nh7gxbiw78kog4wgww40uMUe9UItJlMwj9c6GusmLpR9MQzXdVSi', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:15:"ROLE_RESTAURANT";}', 0, NULL),
(16, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa@gmail.com', 1, 'b6a44szlunswcw0004s8gwoowwwsw0k', '$2y$13$b6a44szlunswcw0004s8guE3QgmwMfOhk9XrdQaVMC7OY9O7LDB9u', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:15:"ROLE_RESTAURANT";}', 0, NULL),
(17, 'Smida', 'smida', 'achrafsmida@hotmailr.fr', 'achrafsmida@hotmailr.fr', 0, 'f8oggn4seggsg4kk04w8go8o4ksk04o', '$2y$13$f8oggn4seggsg4kk04w8gec3tzrZlAvHFWOjsvOIYh3a1MuaK8w2m', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:11:"ROLE_CLIENT";}', 0, NULL),
(20, 'achsmiiiiiiiiiii', 'achsmiiiiiiiiiii', 'aaaaaaaaaaaaaaaaaagggggggggggggggaaaaaaaaa@gmail.com', 'aaaaaaaaaaaaaaaaaagggggggggggggggaaaaaaaaa@gmail.com', 0, 't1qou90rzq8gocg0kocogo0c8404cs8', '$2y$13$t1qou90rzq8gocg0kocogeRQ7S9rjU3uUJXRyBka5aGX2J8BgQ5li', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:11:"ROLE_CLIENT";}', 0, NULL),
(21, 'achsmiachsmiachsmi', 'achsmiachsmiachsmi', 'achsmu2111111111111111@gmail.com', 'achsmu2111111111111111@gmail.com', 1, 'jmhic1vvi7wcwcgsw8ogcw8g0088w0w', '$2y$13$jmhic1vvi7wcwcgsw8ogcu8lQ8tndr6R7A5U4lH2fq5ibwMHAOHb2', '2016-03-16 20:20:43', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:15:"ROLE_RESTAURANT";}', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `choice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `porcentage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantite` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `type`, `choice`, `porcentage`, `quantite`) VALUES
(1, 'velo', '3', '1', '20'),
(2, 'voiture', '2', '1', '50'),
(3, 'camion', '4', '20', '80');

-- --------------------------------------------------------

--
-- Structure de la table `vilecodepostal`
--

CREATE TABLE `vilecodepostal` (
  `id` int(11) NOT NULL,
  `ville_id` int(11) DEFAULT NULL,
  `codepostal` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `vilecodepostal`
--

INSERT INTO `vilecodepostal` (`id`, `ville_id`, `codepostal`) VALUES
(1, 6, '13110'),
(4, 6, '13000'),
(5, 6, '13120'),
(6, 6, '13340'),
(7, 6, '13333'),
(8, 5, '15010'),
(9, 4, '5556255'),
(10, 4, '656565');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `espace` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`id`, `nom`, `photo`, `espace`, `ticket`) VALUES
(2, 'Lyon', '885eddd93e157621d18638dd4ac435eb932824cb.jpeg', '', ''),
(4, 'Paris', '13a7acb0ce3339be57c25e2b682c30b52fc27290.jpeg', '0', '1'),
(5, 'Nice', '49fbd74d5d232e03e1efe7412040aaa9664a84f1.jpeg', '', ''),
(6, 'Aix-En-Provence', '218d156acd44cf66243d73ed92b8e4931f95ff1c.jpeg', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C744045568D3EA09` (`user_id`);

--
-- Index pour la table `clientadress`
--
ALTER TABLE `clientadress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75B9B79519EB6921` (`client_id`);

--
-- Index pour la table `codepostale`
--
ALTER TABLE `codepostale`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dayofweek`
--
ALTER TABLE `dayofweek`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `disponibility`
--
ALTER TABLE `disponibility`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_38BB92603C7FB593` (`runner_id`),
  ADD KEY `IDX_38BB9260BDA75AA` (`dayofweek_id`),
  ADD KEY `IDX_38BB92606A42A4E3` (`horrairezone_id`);

--
-- Index pour la table `forniteur`
--
ALTER TABLE `forniteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `horrairezone`
--
ALTER TABLE `horrairezone`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `horrairezonequart`
--
ALTER TABLE `horrairezonequart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CDA5AA9B6A42A4E3` (`horrairezone_id`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A60C9F1FA73F0036` (`ville_id`);

--
-- Index pour la table `ordre`
--
ALTER TABLE `ordre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_737992C919EB6921` (`client_id`),
  ADD KEY `IDX_737992C9B1E7706E` (`restaurant_id`),
  ADD KEY `IDX_737992C93C7FB593` (`runner_id`),
  ADD KEY `IDX_737992C922A117B1` (`adresslivraison_id`),
  ADD KEY `IDX_737992C96754BF3C` (`adressfacturation_id`);

--
-- Index pour la table `ordredetails`
--
ALTER TABLE `ordredetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F645EB569291498C` (`ordre_id`),
  ADD KEY `IDX_F645EB56D73DB560` (`plat_id`);

--
-- Index pour la table `ordredetailsuupliment`
--
ALTER TABLE `ordredetailsuupliment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9EBD73FEB54C08FC` (`ordredetails_id`);

--
-- Index pour la table `ouverture`
--
ALTER TABLE `ouverture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_43461EABBDA75AA` (`dayofweek_id`),
  ADD KEY `IDX_43461EABB1E7706E` (`restaurant_id`);

--
-- Index pour la table `ouverturereservation`
--
ALTER TABLE `ouverturereservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A3697A81BDA75AA` (`dayofweek_id`),
  ADD KEY `IDX_A3697A81B1E7706E` (`restaurant_id`);

--
-- Index pour la table `photorestaurant`
--
ALTER TABLE `photorestaurant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_ABF7E503B1E7706E` (`restaurant_id`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2038A207B1E7706E` (`restaurant_id`),
  ADD KEY `IDX_2038A2072B26F253` (`TVA_id`),
  ADD KEY `IDX_2038A207FF35A821` (`forniteur_id`);

--
-- Index pour la table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_462CE4F53C7FB593` (`runner_id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_42C8495519EB6921` (`client_id`),
  ADD KEY `IDX_42C84955B1E7706E` (`restaurant_id`);

--
-- Index pour la table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_EB95123FA73F0036` (`ville_id`),
  ADD KEY `IDX_EB95123F68D3EA09` (`user_id`);

--
-- Index pour la table `restaurant_codepostale`
--
ALTER TABLE `restaurant_codepostale`
  ADD PRIMARY KEY (`restaurant_id`,`codepostale_id`),
  ADD KEY `IDX_B8C28A5EB1E7706E` (`restaurant_id`),
  ADD KEY `IDX_B8C28A5E47AA4555` (`codepostale_id`);

--
-- Index pour la table `restaurant_speciality`
--
ALTER TABLE `restaurant_speciality`
  ADD PRIMARY KEY (`restaurant_id`,`speciality_id`),
  ADD KEY `IDX_56ED80BFB1E7706E` (`restaurant_id`),
  ADD KEY `IDX_56ED80BF3B5A08D7` (`speciality_id`);

--
-- Index pour la table `restaurant_vilecodepostal`
--
ALTER TABLE `restaurant_vilecodepostal`
  ADD PRIMARY KEY (`restaurant_id`,`vilecodepostal_id`),
  ADD KEY `IDX_83917378B1E7706E` (`restaurant_id`),
  ADD KEY `IDX_839173782725977C` (`vilecodepostal_id`);

--
-- Index pour la table `runner`
--
ALTER TABLE `runner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F92B8B3EA73F0036` (`ville_id`),
  ADD KEY `IDX_F92B8B3E68D3EA09` (`User_id`);

--
-- Index pour la table `runnerpath`
--
ALTER TABLE `runnerpath`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_44D1472D3C7FB593` (`runner_id`),
  ADD KEY `IDX_44D1472D9291498C` (`ordre_id`);

--
-- Index pour la table `runner_vehicule`
--
ALTER TABLE `runner_vehicule`
  ADD PRIMARY KEY (`runner_id`,`vehicule_id`),
  ADD KEY `IDX_106A1D063C7FB593` (`runner_id`),
  ADD KEY `IDX_106A1D064A4A3511` (`vehicule_id`);

--
-- Index pour la table `rvw`
--
ALTER TABLE `rvw`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1F305FC3BDA75AA` (`dayofweek_id`),
  ADD KEY `IDX_1F305FC34A4A3511` (`vehicule_id`),
  ADD KEY `IDX_1F305FC33C7FB593` (`runner_id`);

--
-- Index pour la table `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `supplimentchoice`
--
ALTER TABLE `supplimentchoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E65698C7DE6AD42A` (`supplimenttype_id`);

--
-- Index pour la table `supplimenttype`
--
ALTER TABLE `supplimenttype`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4B56F0D73DB560` (`plat_id`);

--
-- Index pour la table `tva`
--
ALTER TABLE `tva`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `TVA`
--
ALTER TABLE `TVA`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2DA1797792FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_2DA17977A0D96FBF` (`email_canonical`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vilecodepostal`
--
ALTER TABLE `vilecodepostal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_705E2342A73F0036` (`ville_id`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `clientadress`
--
ALTER TABLE `clientadress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `codepostale`
--
ALTER TABLE `codepostale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `dayofweek`
--
ALTER TABLE `dayofweek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `disponibility`
--
ALTER TABLE `disponibility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT pour la table `forniteur`
--
ALTER TABLE `forniteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `horrairezone`
--
ALTER TABLE `horrairezone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `horrairezonequart`
--
ALTER TABLE `horrairezonequart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ordre`
--
ALTER TABLE `ordre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `ordredetails`
--
ALTER TABLE `ordredetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `ordredetailsuupliment`
--
ALTER TABLE `ordredetailsuupliment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ouverture`
--
ALTER TABLE `ouverture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `ouverturereservation`
--
ALTER TABLE `ouverturereservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `photorestaurant`
--
ALTER TABLE `photorestaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `plat`
--
ALTER TABLE `plat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT pour la table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `runner`
--
ALTER TABLE `runner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `runnerpath`
--
ALTER TABLE `runnerpath`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `rvw`
--
ALTER TABLE `rvw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `speciality`
--
ALTER TABLE `speciality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `supplimentchoice`
--
ALTER TABLE `supplimentchoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `supplimenttype`
--
ALTER TABLE `supplimenttype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `tva`
--
ALTER TABLE `tva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `TVA`
--
ALTER TABLE `TVA`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `vilecodepostal`
--
ALTER TABLE `vilecodepostal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_C744045568D3EA09` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `clientadress`
--
ALTER TABLE `clientadress`
  ADD CONSTRAINT `FK_75B9B79519EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `disponibility`
--
ALTER TABLE `disponibility`
  ADD CONSTRAINT `FK_38BB92603C7FB593` FOREIGN KEY (`runner_id`) REFERENCES `runner` (`id`),
  ADD CONSTRAINT `FK_38BB92606A42A4E3` FOREIGN KEY (`horrairezone_id`) REFERENCES `horrairezone` (`id`),
  ADD CONSTRAINT `FK_38BB9260BDA75AA` FOREIGN KEY (`dayofweek_id`) REFERENCES `dayofweek` (`id`);

--
-- Contraintes pour la table `horrairezonequart`
--
ALTER TABLE `horrairezonequart`
  ADD CONSTRAINT `FK_CDA5AA9B6A42A4E3` FOREIGN KEY (`horrairezone_id`) REFERENCES `horrairezone` (`id`);

--
-- Contraintes pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `FK_A60C9F1FA73F0036` FOREIGN KEY (`ville_id`) REFERENCES `ville` (`id`);

--
-- Contraintes pour la table `ordre`
--
ALTER TABLE `ordre`
  ADD CONSTRAINT `FK_737992C919EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_737992C922A117B1` FOREIGN KEY (`adresslivraison_id`) REFERENCES `clientadress` (`id`),
  ADD CONSTRAINT `FK_737992C93C7FB593` FOREIGN KEY (`runner_id`) REFERENCES `runner` (`id`),
  ADD CONSTRAINT `FK_737992C96754BF3C` FOREIGN KEY (`adressfacturation_id`) REFERENCES `clientadress` (`id`),
  ADD CONSTRAINT `FK_737992C9B1E7706E` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`);

--
-- Contraintes pour la table `ordredetails`
--
ALTER TABLE `ordredetails`
  ADD CONSTRAINT `FK_F645EB569291498C` FOREIGN KEY (`ordre_id`) REFERENCES `ordre` (`id`),
  ADD CONSTRAINT `FK_F645EB56D73DB560` FOREIGN KEY (`plat_id`) REFERENCES `plat` (`id`);

--
-- Contraintes pour la table `ordredetailsuupliment`
--
ALTER TABLE `ordredetailsuupliment`
  ADD CONSTRAINT `FK_9EBD73FEB54C08FC` FOREIGN KEY (`ordredetails_id`) REFERENCES `ordredetails` (`id`);

--
-- Contraintes pour la table `ouverture`
--
ALTER TABLE `ouverture`
  ADD CONSTRAINT `FK_43461EABB1E7706E` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`),
  ADD CONSTRAINT `FK_43461EABBDA75AA` FOREIGN KEY (`dayofweek_id`) REFERENCES `dayofweek` (`id`);

--
-- Contraintes pour la table `ouverturereservation`
--
ALTER TABLE `ouverturereservation`
  ADD CONSTRAINT `FK_A3697A81B1E7706E` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`),
  ADD CONSTRAINT `FK_A3697A81BDA75AA` FOREIGN KEY (`dayofweek_id`) REFERENCES `dayofweek` (`id`);

--
-- Contraintes pour la table `photorestaurant`
--
ALTER TABLE `photorestaurant`
  ADD CONSTRAINT `FK_ABF7E503B1E7706E` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`);

--
-- Contraintes pour la table `plat`
--
ALTER TABLE `plat`
  ADD CONSTRAINT `FK_2038A2072B26F253` FOREIGN KEY (`TVA_id`) REFERENCES `tva` (`id`),
  ADD CONSTRAINT `FK_2038A207B1E7706E` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`),
  ADD CONSTRAINT `FK_2038A207FF35A821` FOREIGN KEY (`forniteur_id`) REFERENCES `forniteur` (`id`);

--
-- Contraintes pour la table `position`
--
ALTER TABLE `position`
  ADD CONSTRAINT `FK_462CE4F53C7FB593` FOREIGN KEY (`runner_id`) REFERENCES `runner` (`id`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_42C8495519EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_42C84955B1E7706E` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`);

--
-- Contraintes pour la table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `FK_EB95123F68D3EA09` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_EB95123FA73F0036` FOREIGN KEY (`ville_id`) REFERENCES `ville` (`id`);

--
-- Contraintes pour la table `restaurant_codepostale`
--
ALTER TABLE `restaurant_codepostale`
  ADD CONSTRAINT `FK_B8C28A5E47AA4555` FOREIGN KEY (`codepostale_id`) REFERENCES `codepostale` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B8C28A5EB1E7706E` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `restaurant_speciality`
--
ALTER TABLE `restaurant_speciality`
  ADD CONSTRAINT `FK_56ED80BF3B5A08D7` FOREIGN KEY (`speciality_id`) REFERENCES `speciality` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_56ED80BFB1E7706E` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `restaurant_vilecodepostal`
--
ALTER TABLE `restaurant_vilecodepostal`
  ADD CONSTRAINT `FK_839173782725977C` FOREIGN KEY (`vilecodepostal_id`) REFERENCES `vilecodepostal` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_83917378B1E7706E` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `runner`
--
ALTER TABLE `runner`
  ADD CONSTRAINT `FK_F92B8B3E68D3EA09` FOREIGN KEY (`User_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_F92B8B3EA73F0036` FOREIGN KEY (`ville_id`) REFERENCES `ville` (`id`);

--
-- Contraintes pour la table `runnerpath`
--
ALTER TABLE `runnerpath`
  ADD CONSTRAINT `FK_44D1472D3C7FB593` FOREIGN KEY (`runner_id`) REFERENCES `runner` (`id`),
  ADD CONSTRAINT `FK_44D1472D9291498C` FOREIGN KEY (`ordre_id`) REFERENCES `ordre` (`id`);

--
-- Contraintes pour la table `runner_vehicule`
--
ALTER TABLE `runner_vehicule`
  ADD CONSTRAINT `FK_106A1D063C7FB593` FOREIGN KEY (`runner_id`) REFERENCES `runner` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_106A1D064A4A3511` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `rvw`
--
ALTER TABLE `rvw`
  ADD CONSTRAINT `FK_1F305FC33C7FB593` FOREIGN KEY (`runner_id`) REFERENCES `runner` (`id`),
  ADD CONSTRAINT `FK_1F305FC34A4A3511` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`id`),
  ADD CONSTRAINT `FK_1F305FC3BDA75AA` FOREIGN KEY (`dayofweek_id`) REFERENCES `dayofweek` (`id`);

--
-- Contraintes pour la table `supplimentchoice`
--
ALTER TABLE `supplimentchoice`
  ADD CONSTRAINT `FK_E65698C7DE6AD42A` FOREIGN KEY (`supplimenttype_id`) REFERENCES `supplimenttype` (`id`);

--
-- Contraintes pour la table `supplimenttype`
--
ALTER TABLE `supplimenttype`
  ADD CONSTRAINT `FK_4B56F0D73DB560` FOREIGN KEY (`plat_id`) REFERENCES `plat` (`id`);

--
-- Contraintes pour la table `vilecodepostal`
--
ALTER TABLE `vilecodepostal`
  ADD CONSTRAINT `FK_705E2342A73F0036` FOREIGN KEY (`ville_id`) REFERENCES `ville` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
