-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 03, 2019 at 02:50 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `characters`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

DROP TABLE IF EXISTS `characters`;
CREATE TABLE IF NOT EXISTS `characters` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Game` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`ID`, `fName`, `lName`, `Game`, `Description`) VALUES
(1, 'Geralt', 'of Rivia', 'Witcher', 'Geralt is a professional monster hunter, or Witcher, as they are called in his world. By way of special training passed down through the ages and violent genetic body mutations.'),
(2, 'Sam', 'Fisher', 'Splinter Cell', 'A highly decorated Navy SEAL and CIA paramilitary ops/clandestine officer, Fisher was once a member of Third Echelon, a top-secret initiative within the National Security Agency (NSA), where he successfully carried out black bag operations as the very first field operative of the initiative\'s \"Splinter Cell\" program.'),
(18, 'Master', 'Chief', 'HALO', 'The Master Chief is a towering biochemically and cybernetically-enhanced supersoldier, raised and trained from an early age to be a weapon; he is almost faceless, never seen without his green-colored armor and helmet.'),
(7, 'Arthas', 'Menethil', 'World of Warcraft', 'Arthas Menethil, Crown Prince of Lordaeron and Knight of the Silver Hand, was the son of King Terenas Menethil II and heir to the kingdom\'s throne.'),
(8, 'Bruce', 'Wayne', 'Batman Arkham series', 'Batman operates in the fictional Gotham City with assistance from various supporting characters, including his butler Alfred, police commissioner Gordon, and vigilante allies such as Robin'),
(19, 'Ezio', 'Auditore', 'Assassin\'s Creed', 'Born into Italian nobility, Ezio follows his family heritage as an assassin, after most of his immediate kin is killed during the Pazzi conspiracy.'),
(10, 'Gordon', 'Freeman', 'Half Life', 'Dr. Gordon Freeman is a theoretical physicist who is forced to defend himself and the Human race against hostile Aliens and other enemies following an experiment gone wrong.'),
(11, 'Agent', '47', 'Hitman', '47 is an agent, a genetically enhanced supersoldier created decades ago by Doctor Petr Litvenko (CiarÃ¡n Hinds), a skilled Ukrainian geneticist.'),
(12, 'Max', 'Payne', 'Max Payne', 'Renegade DEA agent and former NYPD officer Max Payne attempts to hunt down the ones responsible for murdering his wife and child, as well as framing him for the murder of his partner, Alex Balder.'),
(15, 'John', 'Price', 'Call of Duty Modern Warfare', 'Captain John Price, callsign Bravo Six, is a British special forces soldier and a protagonist of the Modern Warfare franchise.'),
(16, 'Tommy', 'Vercetti', 'Grand Theft Auto Vice City', 'Tommy Vercetti is depicted as both intelligent and temperamental; he is easily angered and quick to resort to violence.'),
(17, 'Vito', 'Scaletta', 'Mafia 2', 'Vito was born in San Martino, Sicily in 1925 into a very poor family. At the age of seven his father decided to move the family to America to start a new life.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
