-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 03 jan. 2022 à 13:53
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
-- Base de données : `tunflix`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(12) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idadmin`, `mail`, `password`, `role`, `prenom`, `nom`) VALUES
(1, 'foulen@exemple.com', '123456789', 'Visualiser', 'foulen', 'ben foulen'),
(2, 'johndoe@test.com', 'testtest', 'Visualiser', 'john', 'doe'),
(3, 'responsable@sponsoring.tn', '987654321', 'Visualiser', 'responsable', 'sponsoring'),
(4, 'test@test.com', 'dhia', 'Modifier', 'john', 'doe');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `idfilm` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(60) CHARACTER SET utf8 NOT NULL,
  `categorie` varchar(30) CHARACTER SET utf8 NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `year` int(11) NOT NULL,
  `urlfilm` varchar(255) NOT NULL,
  `urlcover` varchar(255) NOT NULL,
  `abonnement` varchar(10) NOT NULL,
  PRIMARY KEY (`idfilm`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`idfilm`, `titre`, `categorie`, `description`, `year`, `urlfilm`, `urlcover`, `abonnement`) VALUES
(39, 'Avatar', 'Sci-fi', 'Jake, who is paraplegic, replaces his twin on the Na\'vi inhabited Pandora for a corporate mission. After the natives accept him as one of their own, he must decide where his loyalties lie.', 2009, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(20).jpg', 'Free'),
(38, 'Free Guy', 'Adventure', 'When a bank teller discovers he\'s actually a background player in an open-world video game, he decides to become the hero of his own story -- one that he can rewrite himself. In a world where there\'s no limits, he\'s determined to save the day his way before it\'s too late, and maybe find a little romance with the coder who conceived him.', 2021, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(11).jpg', 'Premium'),
(37, 'Avengers: Endgame', 'Action', 'After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.', 2019, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(10).jpg', 'Premium'),
(36, 'Polis', 'Sci-fi', 'Polis is a 2014 American science fiction short film directed by Steven Ilous. It was written by Steven Ilous and Daniel Perea. It won the New Regency and Defy Media PROTOTYPE competition in January 2015, the prize for which was a feature development deal at New Regency.', 2014, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(9).jpg', 'Free'),
(35, 'Harry Potter and the Philosopher\'s Stone', 'Fantasy', 'Harry Potter, an eleven-year-old orphan, discovers that he is a wizard and is invited to study at Hogwarts. Even as he escapes a dreary life and enters a world of magic, he finds trouble awaiting him.', 2001, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(8).jpg', 'Free'),
(34, 'Project Power', 'Action', 'A former soldier teams up with a cop to find the source behind a dangerous pill that provides temporary, unpredictable superpowers.', 2020, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(7).jpg', 'Free'),
(33, 'Resident Evil: Afterlife', 'Horror', 'Alice learns of a mysterious haven named Arcadia while fighting the Umbrella Corporation. She decides to join a group of survivors headed to Arcadia, unaware that they are walking into a trap.', 2010, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(6).jpg', 'Free'),
(32, 'The Avengers', 'Adventure', 'Nick Fury is compelled to launch the Avengers Initiative when Loki poses a threat to planet Earth. His squad of superheroes put their minds together to accomplish the task.', 2012, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(5).jpg', 'Premium'),
(31, 'Tanhaji', 'Action', 'Tanhaji, a Maratha warrior, is Shivaji Maharaj\'s trusted lieutenant. When the Mughals invade and conquer Kondhana fort, he sets out to reclaim it for his king and country.', 2020, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(4).jpg', 'Free'),
(30, 'Underworld: Blood Wars', 'Action', 'Selene decides to find a way to end the conflict between the Lycan clan and the Vampire faction, who are trying to hunt her down. She tries everything in her hand to save humanity.', 2017, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(3).jpg', 'Free'),
(28, 'Warcraft', 'Fantasy ', 'A few human survivors must team up with a group of dissenting Orcs to stop an Orc horde from invading their planet through a magic portal.', 2016, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(1).jpg', 'Free'),
(29, 'Venom', 'Action', 'While trying to take down Carlton, the CEO of Life Foundation, Eddie, a journalist, investigates experiments of human trials. Unwittingly, he gets merged with a symbiotic alien with lethal abilities.', 2018, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(2).jpg', 'Premium'),
(40, 'Titanic', 'Romance', 'Seventeen-year-old Rose hails from an aristocratic family and is set to be married. When she boards the Titanic, she meets Jack Dawson, an artist, and falls in love with him.', 1997, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(12).jpg', 'Free'),
(41, 'Fantastic Four', 'Action', 'Four youngsters gain unique superpowers after being teleported to an alternate universe. They must unite and use their powers to fight against a computer mechanic, who transforms into an evil doctor.', 2015, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(13).jpg', 'Free'),
(42, 'Dvitva', 'Acion', 'Dvitva is a psychological drama thriller starring Puneeth Rajkumar in the lead role, directed by Pawan Kumar and produced by Vijay Kiragandur.', 2022, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(14).jpg', 'Premium'),
(43, 'Us', 'Horror', 'Adelaide Wilson and her family are attacked by mysterious figures dressed in red. Upon closer inspection, the Wilsons realise that the intruders are exact lookalikes of them.', 2019, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(15).jpg', 'Free'),
(44, 'Bloodshot', 'Action', 'Ray Garrison, an elite soldier killed in battle, is resurrected and given superhuman abilities. As he sets out to get revenge, he uncovers secrets about his life and the people supposedly helping him.', 2020, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(16).jpg', 'Free'),
(45, 'Spider-Man: No Way Home', 'Adventure', 'With Spider-Man\'s identity now revealed, our friendly neighborhood web-slinger is unmasked and no longer able to separate his normal life as Peter Parker from the high stakes of being a superhero. When Peter asks for help from Doctor Strange, the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.', 2021, 'http://tunflix.6te.net/img/1.mp4', 'http://tunflix.6te.net/m-img/m%20(18).jpg', 'Premium');

-- --------------------------------------------------------

--
-- Structure de la table `mylist`
--

DROP TABLE IF EXISTS `mylist`;
CREATE TABLE IF NOT EXISTS `mylist` (
  `movieid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`movieid`,`userid`),
  KEY `fk_userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mylist`
--

INSERT INTO `mylist` (`movieid`, `userid`) VALUES
(44, 7),
(45, 7);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mailuser` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `abonnement` varchar(10) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`iduser`, `nom`, `prenom`, `mailuser`, `password`, `abonnement`) VALUES
(1, 'ben foulen', 'foulen', 'user@mail.com', 'hellohello', 'premium'),
(2, 'doe', 'john', 'johndoe@mail.com', '7897213cf', 'Premium'),
(3, 'salah', 'ahmed', 'as45@test.com', '457892312', 'premium'),
(7, 'dfdf', 'fdfdf', 'fdf@fd', '0a5b3913cbc9a9092311630e869b4442', 'Premium'),
(8, 'dhia', 'dhia', 'dhia@dhia', 'bd56248397f29f50fd3b998f0de6f928', 'Free');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
