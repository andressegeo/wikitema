-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 08 Juillet 2017 à 18:07
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `wikitema`
--

DELIMITER $$
--
-- Fonctions
--
CREATE DEFINER=`castinge`@`%` FUNCTION `DP1`(password VARCHAR(255)) RETURNS varchar(128) CHARSET latin1
    READS SQL DATA
    DETERMINISTIC
BEGIN
	DECLARE result VARCHAR(128) DEFAULT '';
	DECLARE passwordLen INT;
	DECLARE decodeByte CHAR(3);
	DECLARE plainBytes VARCHAR(128);
	DECLARE startIndex INT DEFAULT 3;
	DECLARE currentByte INT DEFAULT 1;
	DECLARE hexByte CHAR(3);

	SET passwordLen = LENGTH(password);
	IF passwordLen > 0 AND passwordLen % 2 = 0 THEN
		SET decodeByte = CONV((SUBSTRING(password, 1, 2)), 16, 10);
		SET plainBytes = UNHEX(SUBSTRING(password, 1, 2));

		REPEAT
			SET hexByte = CONV((SUBSTRING(password, startIndex, 2)), 16, 10);
			SET plainBytes = CONCAT(plainBytes, UNHEX(HEX(hexByte ^ decodeByte)));

			SET startIndex = startIndex + 2;
			SET currentByte = currentByte + 1;

		UNTIL startIndex > passwordLen
		END REPEAT;

		SET result = plainBytes;
	END IF;

	RETURN result;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `bo_articles`
--

CREATE TABLE IF NOT EXISTS `bo_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `commentaire` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `bo_articles`
--

INSERT INTO `bo_articles` (`id`, `theme`, `titre`, `commentaire`) VALUES
(1, 'certifications', 'Iso 9001', 'test tes de test'),
(2, 'check', 'check001', 'testt check'),
(3, 'Films', 'dracula', 'sdfsbdfsdfnsdbf,sdf'),
(4, 'certifications', 'Iso 9002', 'certification iso');

-- --------------------------------------------------------

--
-- Structure de la table `bo_messages`
--

CREATE TABLE IF NOT EXISTS `bo_messages` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL COMMENT 'id destinataire',
  `id_sender` int(11) NOT NULL COMMENT 'id expediteur',
  `timbre` datetime NOT NULL COMMENT 'date expedition',
  `message` text NOT NULL COMMENT 'contenu',
  `attach` varchar(100) DEFAULT NULL COMMENT 'Nom du fichier joint',
  `lu` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'lu ?'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Messagerie interne';

--
-- Contenu de la table `bo_messages`
--

INSERT INTO `bo_messages` (`id`, `id_user`, `id_sender`, `timbre`, `message`, `attach`, `lu`) VALUES
(1, 2017001, 2017002, '2017-07-07 00:21:00', 'hello friend', NULL, 0),
(2, 2017002, 2017001, '2017-07-06 08:18:00', 'hi my misterOond friend', NULL, 0),
(3, 2017001, 2017002, '2017-07-28 09:00:00', 'test form', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `bo_themes`
--

CREATE TABLE IF NOT EXISTS `bo_themes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `bo_themes`
--

INSERT INTO `bo_themes` (`id`, `label`) VALUES
(1, 'certifications'),
(2, 'test'),
(3, 'reTest'),
(4, 'paf'),
(5, 'tchek'),
(6, 'pif'),
(7, 'check'),
(8, 'Seminaire'),
(9, 'Films');

-- --------------------------------------------------------

--
-- Structure de la table `bo_users`
--

CREATE TABLE IF NOT EXISTS `bo_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nom complet',
  `login` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Login',
  `motdepasse_pwd` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mot de passe',
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id_BO_users_level` int(11) NOT NULL COMMENT 'Groupe',
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='users admins' AUTO_INCREMENT=7 ;

--
-- Contenu de la table `bo_users`
--

INSERT INTO `bo_users` (`id`, `id_user`, `nom`, `login`, `motdepasse_pwd`, `email`, `id_BO_users_level`) VALUES
(1, 2017001, 'Andresse NJEUNGOUE', 'andressen', '349bae18ef728806f4550489e7d9f909', 'andressegeofried@gmail.com', 100),
(2, 2017002, 'christophe MANAUD', 'christophem', '8caa772c1fb09d197215925835468500', 'andressekiller@gmail.com', 50),
(5, 20175666, 'tartapion', 'taps', 'dac3437271041c215da8ee3191471931', 'tarp@gmail.com', 50),
(6, 2017006, 'Exemple test', 'exemple', '771f5924706521c73464341fc48afb05', 'exemple@gmail.com', 50);

-- --------------------------------------------------------

--
-- Structure de la table `bo_users_level`
--

CREATE TABLE IF NOT EXISTS `bo_users_level` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `bo_users_level`
--

INSERT INTO `bo_users_level` (`id`, `nom`) VALUES
(50, 'Author'),
(100, 'Admin'),
(1, 'Aboné');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
