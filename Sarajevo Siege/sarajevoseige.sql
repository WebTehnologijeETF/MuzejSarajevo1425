-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2015 at 10:44 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sarajevoseige`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE IF NOT EXISTS `komentari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vijest` int(11) NOT NULL,
  `autor` varchar(30) COLLATE ucs2_slovenian_ci NOT NULL,
  `sadrzaj` varchar(1000) COLLATE ucs2_slovenian_ci NOT NULL,
  `datumObjave` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vijest` (`vijest`)
) ENGINE=InnoDB  DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovenian_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `vijest`, `autor`, `sadrzaj`, `datumObjave`) VALUES
(2, 3, 'nepoznat', 'Svaka čast ', '2015-05-28 20:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `vijest`
--

CREATE TABLE IF NOT EXISTS `vijest` (
  `naslov` varchar(100) CHARACTER SET latin1 NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(30) CHARACTER SET latin1 NOT NULL,
  `tekst` varchar(10000) CHARACTER SET latin1 NOT NULL,
  `datumObjave` timestamp NOT NULL,
  `url` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovenian_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vijest`
--

INSERT INTO `vijest` (`naslov`, `id`, `autor`, `tekst`, `datumObjave`, `url`) VALUES
('Obilježena godišnjica masakra na Markalama', 2, 'neko neko', 'Sje?anjem na 68 ubijenih i 144 ranjenih Sarajlija na Markalama, kao i sje?anjem na 11.541 ubijenih i više od 50.000 ranjenih naših sugra?ana danas je obilježena  21. godišnjica od masakra na pijaci Markale kao i Dan sje?anja na sve stradale gra?ane Sarajeva u periodu opsade 1992-1995. godina', '2015-05-28 19:03:01', 'http://prntscr.com/7aaw93'),
('Sve?ano otvorenje vje?nice', 3, '', 'Sarajevska Vije?nica, simbol Sarajeva i Bosne i Herecegovine, nakon 22 godine ponovo je otvorena danas, 9. maja, na Dan Evrope i Dan pobjede nad fašizmom', '2015-05-28 20:42:42', ''),
('Obilježena godišnjica stradanja šest civila na Trgu heroja u Sarajevu', 4, 'admin', 'Na Trgu heroja u sarajevskoj Op?ini Novo Sarajevo danas je obilježena 22. godišnjica stradanja gra?ana Sarajeva, šest civila, od kojih dvoje djece', '2015-05-28 20:43:22', 'nema slike');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentari`
--
ALTER TABLE `komentari`
  ADD CONSTRAINT `komentari_ibfk_1` FOREIGN KEY (`vijest`) REFERENCES `vijest` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
