-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2015 at 12:25 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovenian_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `vijest`, `autor`, `sadrzaj`, `datumObjave`) VALUES
(2, 3, 'nepoznat', 'Svaka čast ', '2015-05-28 20:27:59'),
(3, 3, 'autor 2', 'jos jedan komentar na ovu vijest', '2015-06-16 13:59:06');

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
) ENGINE=InnoDB  DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovenian_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vijest`
--

INSERT INTO `vijest` (`naslov`, `id`, `autor`, `tekst`, `datumObjave`, `url`) VALUES
('Obilježena godišnjica masakra na Markalama', 2, 'neko neko', 'Prije 21 godinu, u masakru na Markalama, živote je izgubilo 68 gra?ana. Granata ispaljena sa položaja Vojske RS teško je ranila 142 osobe.\r\nPorodica, prijatelji, gra?ani, danas su se prisjetili nastradalih u masarku.\r\nIfet Drugovac, je, prije 21. godinu, došao na Markale, da kupi namirnice za sebe I za svoju porodicu.\r\nMUNEVERA DRUGOVAC: Išao je, bio je dvostruki borac, gore s puškom. Ovdje je došao to jutro da proda cigare, da nam kupi brašna. 55\r\nMunevera je, za tragediju na Markalama, saznala na vijestima.  Odmah je otišla u bolnicu. Svaki put je teško do?i na Markale, znaju?i šta se na ovom mjestu dogodilo, kaže Munevera.\r\nJedan od ranjenih toga dana je I Hasan Banda.\r\nHASAN BANDA: Tog dana, ja sam došao usput, svratio sam na pijacu da kupim nešto djeci, u tom momentu je granata pala. Poslije toga samo sam ?uo jauke. Nave?e sam se probudio u bolnici i samo se toga sje?am od tog dana.\r\nKaže, i danas dolazi da kupuje na pijacu Markale, što ga svaki putt podsjeti na zlo?in od prije 21. godinu. Tek je nekolicina gra?ana, došla odati po?ast nastradalima.\r\nADEM TURKOVI?: Imamo ljude koji su tu, bili tu, ostali tu, navodno ne znaju ništa, a sve znaju. Znaju ko je pucao, znaju ko je ubijao, sve znaju. Nemamo puno tu šta pri?ati.Žalosno. Evo od našeg grada izašlo 150- 200 ljudi.\r\nPeti februar ujedno je i dan sje?anja na stradale gra?ane Sarajeva.\r\nNEDIM GRABOVICA- PREDSJEDNIK UDRUŽENJA UBIJEDNE DJECE SARAJEVA : Meni, osobno su, posebno teški ovi dani, ju?e kada smo bili na Dobrinji gdje je ubijeno devet naših sugr?ana, i prejku?e kada je moja rahmetli k?erka trebala napuniti trideset tri godine, da je nisu zlo?inci ubili.\r\nIVO KOMŠI? - GRADONA?ELNIK SARAJEVA : Svi oni koji su krivi za patnje Sarajlija, za onih 1400 i nešto dana, ne?e odgovarati, jer pravda ipak nije toliko široka i ne?e dohvatiti sve one koji su krivi za te patnje.\r\nNajbitnije je, da se masakr na Markalama ne zaboravi I da mla?e generacije nastave obilježavati peti februar, kazao je Komši?. Za ovaj, i brojne druge zlo?ine, na doživotni zatvor osu?en je Stanislav Gali?, zapovjednik u Vojsci RS.', '2015-06-16 15:44:17', 'http://prntscr.com/7aaw93'),
('Sve?ano otvorenje vje?nice', 3, '', 'Sarajevska Vije?nica sve?ano ?e biti otvorena danas, 9. maja na Dan Evrope. Sve?ano otvaranje obnovljene zgrade Vije?nice, koja je u toku posljednjeg rata spaljena, po?inje u 17 sati i 30 minuta.\r\n\r\nSVJETSKI SIMBOL SUSRETA CIVILIZACIJA\r\n\r\nVije?nica je gra?ena u pseudo-maurskom stilu, za koji su stilski izvori na?eni u islamskoj umjetnosti Španije i sjeverne Afrike i prvi put otvorena 20. aprila 1896., i bila u funkciji sve do 25. avgusta 1992. godine, kada je zapaljena sa srpskih položaja oko Sarajeva.\r\n\r\nOd 1996. do danas traje njena restauracija, pa je skladu sa arhitekturom objekta izvedena raskošna fasada sa reprezentativnim pro?eljem s trijemom, bojena crveno-žuto sa ornamentalnom fajansnom oplatom. Kuriozitet je da su iz poznate tvornice Žolnaj iz Pe?uha, koja je u vrijeme izgradnje Vije?nice radila ukrasne plo?e od fajansa, sami ponudili da te plo?e ponovo urade po originalnim kalupima koje su sa?uvali. Ujedno, originalna vrata Vije?nice je sa?uvala Nacionalna i univerzitetska biblioteka (NUB) BiH, te je restauracija vrata ura?ena u Kiseljaku. Skoro sav gra?evinski materijal poti?e iz Bosne, izuzev stupova od granita, crno-crvenkastih, koji su iz Tirola, a stepenice od mramora iz Ma?arske.\r\n\r\n SVE?ANA CEREMONIJA\r\n\r\nCeremonija otvaranja sarajevske Vije?nice  po?inje u 17.30 sati prijemom gradona?elnika Sarajeva Ive Komši?a za oko 300 zvanica iz politi?kog, javnog i kulturnog života grada i zemlje.\r\n\r\nGradona?elnik Ivo Komši? ?e u znak zahvalnosti prijateljima donatorima koji su u proteklih 18 godina pomogli obnovu Vije?nice uru?iti priznanja i poklone.\r\nOsim gradona?elnika Sarajeva, na ceremoniji u Vije?nici prisutnim ?e se obratiti visoki predstavnik u BiH Valentin Incko (Inzko), predsjedavaju?i Predsjedništva BiH Bakir Izetbegovi?, te šef Delegacije EU i specijalni predstavnik EU u BiH Peter Sorensen.\r\n\r\nU okviru ceremonije, za gra?ane Sarajeva ?e u parku preko puta Vije?nice biti organizovan muzi?ko-scenski program, u kojem ?e sudjelovati 200 mladih sarajevskih kreativaca, kao i priznatih sarajevskih i bh. umjetnika.\r\n\r\nOvaj program ?e zapo?eti u 19.00 sati koncertom Sarajevske filhamonije.\r\n\r\nKako je re?eno, kruna bogatog programa bi?e prikazivanje 3D maping video projekcije na zgradi Vije?nice, a BH Telecom ?e tokom održavanja ceremonije obezbijediti besplatan beži?ni internet.\r\n\r\nZgrada Vije?nice bi?e otvorena na Dan Evrope i Dan pobjede nad fašizmom.\r\n\r\nZbog održavanja ceremonije  do?i ?e do  izmjene režima saobra?aja svih vidova javnog gradskog prevoza od 17.00 do 22.00 sati, a tramvajski saobra?aj bi?e preusmjeren na okretnicu Skenderija.\r\n\r\nTaxi stajalište “Vije?nica” bi?e dislocirano na lokalitet taxi stajališta “Latinska ?uprija” i “Zelene beretke”.', '2015-06-16 16:18:41', '');

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
