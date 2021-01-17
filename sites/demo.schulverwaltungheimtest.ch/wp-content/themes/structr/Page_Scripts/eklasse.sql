-- phpMyAdmin SQL Dump
-- version 4.9.6
-- https://www.phpmyadmin.net/
--
-- Host: 9b1qp.myd.infomaniak.com
-- Erstellungszeit: 12. Jan 2021 um 13:40
-- Server-Version: 5.7.30-log
-- PHP-Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `9b1qp_demoeklasse`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_Abwesenheiten`
--

CREATE TABLE `sv_Abwesenheiten` (
  `wdt_ID` int(11) NOT NULL,
  `SchülerID` int(11) DEFAULT NULL,
  `Nachname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Vorname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KursID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datum` date DEFAULT NULL,
  `abwesend` int(11) DEFAULT NULL,
  `Kommentar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datum1` date DEFAULT NULL,
  `abwesend1` int(11) DEFAULT NULL,
  `Kommentar1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datum2` date DEFAULT NULL,
  `abwesend2` int(11) DEFAULT NULL,
  `Kommentar2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datum3` date DEFAULT NULL,
  `abwesend3` int(11) DEFAULT NULL,
  `Kommentar3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datum4` date DEFAULT NULL,
  `abwesend4` int(11) DEFAULT NULL,
  `kommentar4` text COLLATE utf8_unicode_ci,
  `Datum5` date DEFAULT NULL,
  `abwesend5` int(11) DEFAULT NULL,
  `kommentar5` text COLLATE utf8_unicode_ci,
  `Datum6` date DEFAULT NULL,
  `abwesend6` int(11) DEFAULT NULL,
  `kommentar6` text COLLATE utf8_unicode_ci,
  `Datum7` date DEFAULT NULL,
  `abwesend7` int(11) DEFAULT NULL,
  `kommentar7` text COLLATE utf8_unicode_ci,
  `Datum8` date DEFAULT NULL,
  `abwesend8` int(11) DEFAULT NULL,
  `kommentar8` text COLLATE utf8_unicode_ci,
  `Datum9` date DEFAULT NULL,
  `abwesend9` int(11) DEFAULT NULL,
  `kommentar9` text COLLATE utf8_unicode_ci,
  `Datum10` date DEFAULT NULL,
  `abwesend10` int(11) DEFAULT NULL,
  `kommentar10` text COLLATE utf8_unicode_ci,
  `Datum11` date DEFAULT NULL,
  `abwesend11` int(11) DEFAULT NULL,
  `kommentar11` text COLLATE utf8_unicode_ci,
  `Datum12` date DEFAULT NULL,
  `abwesend12` int(11) DEFAULT NULL,
  `kommentar12` text COLLATE utf8_unicode_ci,
  `Datum13` date DEFAULT NULL,
  `abwesend13` int(11) DEFAULT NULL,
  `kommentar13` text COLLATE utf8_unicode_ci,
  `Datum14` date DEFAULT NULL,
  `abwesend14` int(11) DEFAULT NULL,
  `kommentar14` text COLLATE utf8_unicode_ci,
  `Datum15` date DEFAULT NULL,
  `abwesend15` int(11) DEFAULT NULL,
  `kommentar15` text COLLATE utf8_unicode_ci,
  `Datum16` date DEFAULT NULL,
  `abwesend16` int(11) DEFAULT NULL,
  `kommentar16` text COLLATE utf8_unicode_ci,
  `Datum17` date DEFAULT NULL,
  `abwesend17` int(11) DEFAULT NULL,
  `kommentar17` text COLLATE utf8_unicode_ci,
  `Datum18` date DEFAULT NULL,
  `abwesend18` int(11) DEFAULT NULL,
  `kommentar18` text COLLATE utf8_unicode_ci,
  `Datum19` date DEFAULT NULL,
  `abwesend19` int(11) DEFAULT NULL,
  `kommentar19` text COLLATE utf8_unicode_ci,
  `Datum20` date DEFAULT NULL,
  `abwesend20` int(11) DEFAULT NULL,
  `kommentar20` text COLLATE utf8_unicode_ci,
  `Datum21` date DEFAULT NULL,
  `abwesend21` int(11) DEFAULT NULL,
  `kommentar21` text COLLATE utf8_unicode_ci,
  `Datum22` date DEFAULT NULL,
  `abwesend22` int(11) DEFAULT NULL,
  `kommentar22` text COLLATE utf8_unicode_ci,
  `Datum23` date DEFAULT NULL,
  `abwesend23` int(11) DEFAULT NULL,
  `kommentar23` text COLLATE utf8_unicode_ci,
  `Datum24` date DEFAULT NULL,
  `abwesend24` int(11) DEFAULT NULL,
  `kommentar24` text COLLATE utf8_unicode_ci,
  `Datum25` date DEFAULT NULL,
  `abwesend25` int(11) DEFAULT NULL,
  `kommentar25` text COLLATE utf8_unicode_ci,
  `Datum26` date DEFAULT NULL,
  `abwesend26` int(11) DEFAULT NULL,
  `kommentar26` text COLLATE utf8_unicode_ci,
  `Datum27` date DEFAULT NULL,
  `abwesend27` int(11) DEFAULT NULL,
  `kommentar27` text COLLATE utf8_unicode_ci,
  `Datum28` date DEFAULT NULL,
  `abwesend28` int(11) DEFAULT NULL,
  `kommentar28` text COLLATE utf8_unicode_ci,
  `Datum29` date DEFAULT NULL,
  `abwesend29` int(11) DEFAULT NULL,
  `kommentar29` text COLLATE utf8_unicode_ci,
  `Datum30` date DEFAULT NULL,
  `abwesend30` int(11) DEFAULT NULL,
  `kommentar30` text COLLATE utf8_unicode_ci,
  `Datum31` date DEFAULT NULL,
  `abwesend31` int(11) DEFAULT NULL,
  `kommentar31` text COLLATE utf8_unicode_ci,
  `Datum32` date DEFAULT NULL,
  `abwesend32` int(11) DEFAULT NULL,
  `kommentar32` text COLLATE utf8_unicode_ci,
  `Datum33` date DEFAULT NULL,
  `abwesend33` int(11) DEFAULT NULL,
  `kommentar33` text COLLATE utf8_unicode_ci,
  `Datum34` date DEFAULT NULL,
  `abwesend34` int(11) DEFAULT NULL,
  `kommentar34` text COLLATE utf8_unicode_ci,
  `Datum35` date DEFAULT NULL,
  `abwesend35` int(11) DEFAULT NULL,
  `kommentar35` text COLLATE utf8_unicode_ci,
  `Datum36` date DEFAULT NULL,
  `abwesend36` int(11) DEFAULT NULL,
  `kommentar36` text COLLATE utf8_unicode_ci,
  `Datum37` date DEFAULT NULL,
  `abwesend37` int(11) DEFAULT NULL,
  `kommentar37` text COLLATE utf8_unicode_ci,
  `Datum38` date DEFAULT NULL,
  `abwesend38` int(11) DEFAULT NULL,
  `kommentar38` text COLLATE utf8_unicode_ci,
  `Datum39` date DEFAULT NULL,
  `abwesend39` int(11) DEFAULT NULL,
  `kommentar39` text COLLATE utf8_unicode_ci,
  `Datum40` date DEFAULT NULL,
  `abwesend40` int(11) DEFAULT NULL,
  `kommentar40` text COLLATE utf8_unicode_ci,
  `Datum41` date DEFAULT NULL,
  `abwesend41` int(11) DEFAULT NULL,
  `kommentar41` text COLLATE utf8_unicode_ci,
  `Datum42` date DEFAULT NULL,
  `abwesend42` int(11) DEFAULT NULL,
  `kommentar42` text COLLATE utf8_unicode_ci,
  `Datum43` date DEFAULT NULL,
  `abwesend43` int(11) DEFAULT NULL,
  `kommentar43` text COLLATE utf8_unicode_ci,
  `Datum44` date DEFAULT NULL,
  `abwesend44` int(11) DEFAULT NULL,
  `kommentar44` text COLLATE utf8_unicode_ci,
  `Datum45` date DEFAULT NULL,
  `abwesend45` int(11) DEFAULT NULL,
  `kommentar45` text COLLATE utf8_unicode_ci,
  `Datum46` date DEFAULT NULL,
  `abwesend46` int(11) DEFAULT NULL,
  `kommentar46` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_AbwesenheitenGesamt`
--

CREATE TABLE `sv_AbwesenheitenGesamt` (
  `SchülerID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KursID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Abwesenheit` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_AbwesenheitenKompakt`
--

CREATE TABLE `sv_AbwesenheitenKompakt` (
  `SchuelerID` int(11) DEFAULT NULL,
  `Klasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kursname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datum` date DEFAULT NULL,
  `Kommentar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KommentVerw` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Abwesenheitsdauer` int(11) DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `Vorname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nachname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lehrer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Entschuldigt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_Kurse`
--

CREATE TABLE `sv_Kurse` (
  `ID` int(11) NOT NULL,
  `Klasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KursID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Uhrzeit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Startdatum` date DEFAULT NULL,
  `Enddatum` date DEFAULT NULL,
  `Lehrperson` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LP_ID` int(11) DEFAULT NULL,
  `Farbe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kursname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Zimmer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FieldID` int(11) DEFAULT NULL,
  `Stundenplan` tinyint(1) DEFAULT NULL,
  `Profil` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_KurseAll`
--

CREATE TABLE `sv_KurseAll` (
  `ID` int(11) NOT NULL,
  `Kursname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KursID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datum` date DEFAULT NULL,
  `Tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Start` datetime DEFAULT NULL,
  `Ende` datetime DEFAULT NULL,
  `Lektionen` int(11) DEFAULT NULL,
  `Klasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Zimmer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ZI_ID` int(11) DEFAULT NULL,
  `Lehrperson` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LP_ID` int(11) DEFAULT NULL,
  `Farbe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Startdatum` date DEFAULT NULL,
  `Enddatum` date DEFAULT NULL,
  `Stundenplan` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_KurseStammdaten`
--

CREATE TABLE `sv_KurseStammdaten` (
  `ID` int(11) NOT NULL,
  `KursKuerzel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Kursname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Farbe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lehrer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LP_ID` int(11) DEFAULT NULL,
  `Zimmer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Profil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_Kurshistorie`
--

CREATE TABLE `sv_Kurshistorie` (
  `ID` int(11) NOT NULL,
  `Stattgefunden` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datum` date DEFAULT NULL,
  `KursID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lehrer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kommentar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lektionen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_Kurshistorie_1`
--

CREATE TABLE `sv_Kurshistorie_1` (
  `ID` int(11) NOT NULL,
  `Stattgefunden` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datum` date DEFAULT NULL,
  `KursID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lehrer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kommentar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lektionen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_Lehrpersonen`
--

CREATE TABLE `sv_Lehrpersonen` (
  `ID` int(11) NOT NULL,
  `Vorname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nachname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Loginname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Kurs10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs11` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs12` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs13` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs14` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs15` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs16` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs17` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs18` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs19` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs20` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs21` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs22` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs23` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs24` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs25` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs26` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs27` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs28` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs29` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs30` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `sv_Lehrpersonen`
--

INSERT INTO `sv_Lehrpersonen` (`ID`, `Vorname`, `Nachname`, `EMAIL`, `Loginname`, `Kurs1`, `Kurs2`, `Kurs3`, `Kurs4`, `Kurs5`, `Kurs6`, `Kurs7`, `Kurs8`, `Kurs9`, `User_ID`, `Kurs10`, `Kurs11`, `Kurs12`, `Kurs13`, `Kurs14`, `Kurs15`, `Kurs16`, `Kurs17`, `Kurs18`, `Kurs19`, `Kurs20`, `Kurs21`, `Kurs22`, `Kurs23`, `Kurs24`, `Kurs25`, `Kurs26`, `Kurs27`, `Kurs28`, `Kurs29`, `Kurs30`) VALUES
(1, 'Markus', 'Specht', 'heim_martin@gmx.net', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_Lernende`
--

CREATE TABLE `sv_Lernende` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Vorname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Klasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Loginname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Profil` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WinLogin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SchulMail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Laptop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `sv_Lernende`
--

INSERT INTO `sv_Lernende` (`ID`, `Name`, `Vorname`, `Klasse`, `Loginname`, `EMail`, `User_ID`, `Profil`, `WinLogin`, `SchulMail`, `Laptop`, `Status`) VALUES
(3, 'Nietnagel', 'Pepe1', 'testklasse', 'TestSchueler', 'pepe.nietnagel@provider.ch', 242, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_LernendeModule`
--

CREATE TABLE `sv_LernendeModule` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Vorname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `EMail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul4` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul5` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul6` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul7` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul8` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul9` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul10` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul11` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul12` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Profil` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Loginname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `WinLogin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SchulMail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `aktiv` tinyint(1) DEFAULT NULL,
  `Geburtsdatum` date DEFAULT NULL,
  `Nation` varchar(255) DEFAULT NULL,
  `Strasse` varchar(255) DEFAULT NULL,
  `Hausnummer` varchar(255) DEFAULT NULL,
  `PLZ` varchar(255) DEFAULT NULL,
  `Wohnort` varchar(255) DEFAULT NULL,
  `Telefon` varchar(255) DEFAULT NULL,
  `ElternTel` varchar(255) DEFAULT NULL,
  `ElternMail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `sv_LernendeModule`
--

INSERT INTO `sv_LernendeModule` (`ID`, `Name`, `Vorname`, `User_ID`, `EMail`, `Modul1`, `Modul2`, `Modul3`, `Modul4`, `Modul5`, `Modul6`, `Modul7`, `Modul8`, `Modul9`, `Modul10`, `Modul11`, `Modul12`, `Profil`, `Loginname`, `WinLogin`, `SchulMail`, `aktiv`, `Geburtsdatum`, `Nation`, `Strasse`, `Hausnummer`, `PLZ`, `Wohnort`, `Telefon`, `ElternTel`, `ElternMail`) VALUES
(2, 'Nietnagel', 'Pepe1', 242, 'pepe.nietnagel@provider.ch', 'testklasse', '', '', '', '', '', '', '', '', '', '', '', '', 'TestSchueler', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_LernenderKurs`
--

CREATE TABLE `sv_LernenderKurs` (
  `ID` int(11) NOT NULL,
  `SchuelerID` int(11) DEFAULT NULL,
  `KursID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Abwesenheiten` int(11) DEFAULT NULL,
  `Klasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Vorname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nachname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Profil` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Note1` float DEFAULT NULL,
  `Note2` float DEFAULT NULL,
  `Note3` float DEFAULT NULL,
  `Note4` float DEFAULT NULL,
  `Note5` float DEFAULT NULL,
  `Note6` float DEFAULT NULL,
  `Note7` float DEFAULT NULL,
  `Note8` float DEFAULT NULL,
  `Note9` float DEFAULT NULL,
  `Notenschnitt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_Log`
--

CREATE TABLE `sv_Log` (
  `ID` int(11) NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `URL` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Datum` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `sv_Log`
--

INSERT INTO `sv_Log` (`ID`, `User_ID`, `URL`, `Datum`) VALUES
(1, 250, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:06:07'),
(2, 250, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:06:07'),
(3, 250, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:06:07'),
(4, 250, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:06:07'),
(5, 250, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:06:07'),
(6, 250, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:06:07'),
(7, 250, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:06:07'),
(8, 250, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:06:07'),
(9, 250, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:06:07'),
(10, 250, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:06:07'),
(11, 250, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwesenheitenKompakt_Lehrer.php?l=&_=1610028368445', '2021-01-07 15:06:08'),
(12, 250, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Lehrer.php?l=&_=1610028368446', '2021-01-07 15:06:08'),
(13, 250, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=250&start=2021-01-01&end=2021-02-01&_=1610028368447', '2021-01-07 15:06:08'),
(14, 250, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValues.php?q=&s=&_=1610028368448', '2021-01-07 15:06:08'),
(15, 250, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValues.php?k=&s=&_=1610028368449', '2021-01-07 15:06:08'),
(16, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-07 15:06:17'),
(17, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-07 15:06:17'),
(18, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610028378823', '2021-01-07 15:06:18'),
(19, 1, 'https://release.schulverwaltungheimtest.ch/klassenbuch-der-lehrpersonen/', '2021-01-07 15:10:18'),
(20, 1, 'https://release.schulverwaltungheimtest.ch/klassenbuch-der-lehrpersonen/', '2021-01-07 15:10:18'),
(21, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:10:25'),
(22, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:10:25'),
(23, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:10:25'),
(24, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:10:25'),
(25, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:10:25'),
(26, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:10:25'),
(27, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:10:25'),
(28, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:10:25'),
(29, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:10:25'),
(30, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:10:25'),
(31, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Lehrer.php?l=&_=1610028627041', '2021-01-07 15:10:26'),
(32, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwesenheitenKompakt_Lehrer.php?l=&_=1610028627040', '2021-01-07 15:10:26'),
(33, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610028627042', '2021-01-07 15:10:27'),
(34, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValues.php?q=&s=&_=1610028627043', '2021-01-07 15:10:27'),
(35, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValues.php?k=&s=&_=1610028627044', '2021-01-07 15:10:27'),
(36, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-07 15:10:33'),
(37, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:10:39'),
(38, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:10:39'),
(39, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:10:39'),
(40, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:10:39'),
(41, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:10:39'),
(42, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:10:39'),
(43, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:10:39'),
(44, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:10:39'),
(45, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:10:39'),
(46, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:10:39'),
(47, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:10:39'),
(48, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-07 15:13:10'),
(49, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:13:13'),
(50, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:13:13'),
(51, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:13:13'),
(52, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:13:13'),
(53, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:13:13'),
(54, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:13:13'),
(55, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:13:13'),
(56, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:13:13'),
(57, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:13:13'),
(58, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:13:13'),
(59, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:13:13'),
(60, 1, 'https://release.schulverwaltungheimtest.ch/klassenbuch-der-lehrpersonen/', '2021-01-07 15:18:52'),
(61, 1, 'https://release.schulverwaltungheimtest.ch/klassenbuch-der-lehrpersonen/', '2021-01-07 15:18:52'),
(62, 1, 'https://release.schulverwaltungheimtest.ch/notenbuch-lehrer-archiv/', '2021-01-07 15:18:56'),
(63, 1, 'https://release.schulverwaltungheimtest.ch/notenbuch-lehrer-archiv/', '2021-01-07 15:18:56'),
(64, 1, 'https://release.schulverwaltungheimtest.ch/notenbuch-lehrer-archiv/', '2021-01-07 15:18:56'),
(65, 1, 'https://release.schulverwaltungheimtest.ch/notenbuch-lehrer-archiv/', '2021-01-07 15:18:56'),
(66, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValuesArchiv.php?k=%C2%9E%C3%A9e&s=&_=1610029137463', '2021-01-07 15:18:57'),
(67, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValuesArchiv.php?q=%C2%9E%C3%A9e&s=&_=1610029137462', '2021-01-07 15:18:57'),
(68, 1, 'https://release.schulverwaltungheimtest.ch/lehrerverwaltung/', '2021-01-07 15:19:20'),
(69, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetLehrpersonen_Archiv.php?q=&_=1610029161367', '2021-01-07 15:19:21'),
(70, 1, 'https://release.schulverwaltungheimtest.ch/lehrpersonen-zuordnen/', '2021-01-07 15:19:40'),
(71, 1, 'https://release.schulverwaltungheimtest.ch/lehrpersonen-zuordnen/?Loginname=admin%20heim_martin@gmx.net%20ID:1&Lehrpersonen=Specht%20Markus%20ID:1', '2021-01-07 15:20:00'),
(72, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/lehrerzuordnenscr.php?q=Specht%20Markus%20ID:1&h=admin%20heim_martin@gmx.net%20ID:1', '2021-01-07 15:20:00'),
(73, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-07 15:20:15'),
(74, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:19'),
(75, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:19'),
(76, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:19'),
(77, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:19'),
(78, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:19'),
(79, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:19'),
(80, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:19'),
(81, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:19'),
(82, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:19'),
(83, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:19'),
(84, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:19'),
(85, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/addLernende.php?k=2&l=undefined', '2021-01-07 15:20:36'),
(86, 1, 'https://release.schulverwaltungheimtest.ch/DBFuellung/DBFuellungSchuelereingabe.php', '2021-01-07 15:20:58'),
(87, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:59'),
(88, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:59'),
(89, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:59'),
(90, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:59'),
(91, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:59'),
(92, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:59'),
(93, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:59'),
(94, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:59'),
(95, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:59'),
(96, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:59'),
(97, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-07 15:20:59'),
(98, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/', '2021-01-07 15:21:09'),
(99, 1, 'https://release.schulverwaltungheimtest.ch/lernende-automatisch-zuordnen/', '2021-01-07 15:21:13'),
(100, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/?wdtNonceFrontendEdit=842258ffd9&_wp_http_referer=%2Flernende-automatisch-zuordnen%2F&table_1_length=25&s=', '2021-01-07 15:21:19'),
(101, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/?wdtNonceFrontendEdit=842258ffd9&_wp_http_referer=%2Flernende-automatisch-zuordnen%2F&table_1_length=25&s=', '2021-01-07 15:22:08'),
(102, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:23:15'),
(103, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:23:15'),
(104, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:23:15'),
(105, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:23:15'),
(106, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:23:15'),
(107, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:23:15'),
(108, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:23:15'),
(109, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:23:15'),
(110, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:23:15'),
(111, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 15:23:15'),
(112, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwesenheitenKompakt_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610029397355', '2021-01-07 15:23:17'),
(113, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610029397356', '2021-01-07 15:23:17'),
(114, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610029397358', '2021-01-07 15:23:17'),
(115, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValues.php?k=&s=&_=1610029397360', '2021-01-07 15:23:17'),
(116, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610029397357', '2021-01-07 15:23:17'),
(117, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValues.php?q=&s=&_=1610029397359', '2021-01-07 15:23:17'),
(118, 1, 'https://release.schulverwaltungheimtest.ch/kurse/', '2021-01-07 15:23:22'),
(119, 1, 'https://release.schulverwaltungheimtest.ch/stundenplan-2/', '2021-01-07 15:23:25'),
(120, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/showstundenplan.php?q=Dummy&k=&d=', '2021-01-07 15:23:29'),
(121, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-07 15:23:40'),
(122, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-07 15:23:40'),
(123, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-07 15:23:40'),
(124, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-07 15:23:40'),
(125, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610029422043', '2021-01-07 15:23:42'),
(126, 1, 'https://release.schulverwaltungheimtest.ch/ihr-stundenplan-der-regelmaessigen-kurse/', '2021-01-07 15:23:56'),
(127, 1, 'https://release.schulverwaltungheimtest.ch/ihr-stundenplan-der-regelmaessigen-kurse/', '2021-01-07 15:23:56'),
(128, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/showstundenplanlehrerind.php?q=1&k=', '2021-01-07 15:23:58'),
(129, 1, 'https://release.schulverwaltungheimtest.ch/settings/', '2021-01-07 15:24:01'),
(130, 1, 'https://release.schulverwaltungheimtest.ch/notenbuch-lehrer/', '2021-01-07 15:24:24'),
(131, 1, 'https://release.schulverwaltungheimtest.ch/notenbuch-lehrer/', '2021-01-07 15:24:24'),
(132, 1, 'https://release.schulverwaltungheimtest.ch/notenbuch-lehrer/', '2021-01-07 15:24:24'),
(133, 1, 'https://release.schulverwaltungheimtest.ch/notenbuch-lehrer/', '2021-01-07 15:24:24'),
(134, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValues.php?q=%C2%9E%C3%A9e&s=&_=1610029466280', '2021-01-07 15:24:26'),
(135, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValues.php?k=%C2%9E%C3%A9e&s=&_=1610029466281', '2021-01-07 15:24:26'),
(136, 1, 'https://release.schulverwaltungheimtest.ch/notenbuch-lehrer-archiv/', '2021-01-07 15:24:30'),
(137, 1, 'https://release.schulverwaltungheimtest.ch/notenbuch-lehrer-archiv/', '2021-01-07 15:24:30'),
(138, 1, 'https://release.schulverwaltungheimtest.ch/notenbuch-lehrer-archiv/', '2021-01-07 15:24:30'),
(139, 1, 'https://release.schulverwaltungheimtest.ch/notenbuch-lehrer-archiv/', '2021-01-07 15:24:30'),
(140, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValuesArchiv.php?k=%C2%9E%C3%A9e&s=&_=1610029471618', '2021-01-07 15:24:31'),
(141, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValuesArchiv.php?q=%C2%9E%C3%A9e&s=&_=1610029471617', '2021-01-07 15:24:31'),
(142, 1, 'https://release.schulverwaltungheimtest.ch/meine-lernenden/', '2021-01-07 15:24:37'),
(143, 1, 'https://release.schulverwaltungheimtest.ch/meine-lernenden/', '2021-01-07 15:24:37'),
(144, 1, 'https://release.schulverwaltungheimtest.ch/mein-kollegium/', '2021-01-07 15:24:39'),
(145, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetLehrpersonen_Archiv.php?q=&_=1610029480788', '2021-01-07 15:24:40'),
(146, 1, 'https://release.schulverwaltungheimtest.ch/kurse-archiv/', '2021-01-07 15:24:52'),
(147, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurse_Archiv.php?q=&_=1610029494116', '2021-01-07 15:24:54'),
(148, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Archiv.php?q=&_=1610029494117', '2021-01-07 15:24:54'),
(149, 1, 'https://release.schulverwaltungheimtest.ch/notenblatt-archiv/', '2021-01-07 15:24:56'),
(150, 1, 'https://release.schulverwaltungheimtest.ch/users-archiv/', '2021-01-07 15:25:01'),
(151, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetUsers_Archiv.php?q=&_=1610029502745', '2021-01-07 15:25:03'),
(152, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-07 15:25:11'),
(153, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/', '2021-01-07 15:25:16'),
(154, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-07 17:15:42'),
(155, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-07 17:15:42'),
(156, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610036143170', '2021-01-07 17:15:45'),
(157, 1, 'https://release.schulverwaltungheimtest.ch/mein-kollegium/', '2021-01-07 17:15:54'),
(158, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetLehrpersonen_Archiv.php?q=&_=1610036154885', '2021-01-07 17:15:57'),
(159, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:16:05'),
(160, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:16:05'),
(161, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:16:05'),
(162, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:16:05'),
(163, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:16:05'),
(164, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:16:05'),
(165, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:16:05'),
(166, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:16:05'),
(167, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:16:05'),
(168, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:16:05'),
(169, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610036165412', '2021-01-07 17:16:07'),
(170, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610036165414', '2021-01-07 17:16:07'),
(171, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValues.php?q=&s=&_=1610036165415', '2021-01-07 17:16:07'),
(172, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610036165413', '2021-01-07 17:16:07'),
(173, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwesenheitenKompakt_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610036165411', '2021-01-07 17:16:07'),
(174, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValues.php?k=&s=&_=1610036165416', '2021-01-07 17:16:08'),
(175, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:17:34'),
(176, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:17:34'),
(177, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:17:34'),
(178, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:17:34'),
(179, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:17:34'),
(180, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:17:34'),
(181, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:17:34'),
(182, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:17:34'),
(183, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:17:34'),
(184, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 17:17:34'),
(185, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwesenheitenKompakt_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610036255310', '2021-01-07 17:17:36'),
(186, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610036255311', '2021-01-07 17:17:36'),
(187, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610036255312', '2021-01-07 17:17:36'),
(188, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValues.php?q=&s=&_=1610036255314', '2021-01-07 17:17:36'),
(189, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610036255313', '2021-01-07 17:17:36'),
(190, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValues.php?k=&s=&_=1610036255315', '2021-01-07 17:17:36'),
(191, 1, 'https://release.schulverwaltungheimtest.ch/kurse/', '2021-01-07 17:17:52'),
(192, 1, 'https://release.schulverwaltungheimtest.ch/ausserordentliche-kurseingabe/', '2021-01-07 17:17:56'),
(193, 1, 'https://release.schulverwaltungheimtest.ch/ausserordentliche-kurseingabe/', '2021-01-07 17:17:56'),
(194, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/getKursname.php?q=Dummy', '2021-01-07 17:17:59'),
(195, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/getcolorAK.php?q=undefined', '2021-01-07 17:17:59'),
(196, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/getcolorAK.php?q=-Select-', '2021-01-07 17:18:01'),
(197, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/getLehrerAK.php?q=-Select-', '2021-01-07 17:18:01'),
(198, 1, 'https://release.schulverwaltungheimtest.ch/settings/', '2021-01-07 17:18:40'),
(199, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 19:32:59'),
(200, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 19:32:59'),
(201, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 19:33:00'),
(202, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 19:33:00'),
(203, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 19:33:00'),
(204, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 19:33:00'),
(205, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 19:33:00'),
(206, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 19:33:00'),
(207, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 19:33:00'),
(208, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-07 19:33:00'),
(209, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwesenheitenKompakt_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610044380496', '2021-01-07 19:33:01'),
(210, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610044380498', '2021-01-07 19:33:01'),
(211, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610044380497', '2021-01-07 19:33:01'),
(212, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610044380499', '2021-01-07 19:33:01'),
(213, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValues.php?q=&s=&_=1610044380500', '2021-01-07 19:33:01'),
(214, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValues.php?k=&s=&_=1610044380501', '2021-01-07 19:33:01'),
(215, 401, 'https://release.schulverwaltungheimtest.ch/mail-der-kurstermine/', '2021-01-07 19:33:21'),
(216, 401, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=401&start=2021-01-01&end=2021-02-01&_=1610044401965', '2021-01-07 19:33:22'),
(217, 401, 'https://release.schulverwaltungheimtest.ch/ihre-uebersicht/', '2021-01-07 19:33:24'),
(218, 401, 'https://release.schulverwaltungheimtest.ch/ihre-uebersicht/', '2021-01-07 19:33:24'),
(219, 401, 'https://release.schulverwaltungheimtest.ch/mail-der-kurstermine/', '2021-01-07 19:33:28'),
(220, 401, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=401&start=2021-01-01&end=2021-02-01&_=1610044408643', '2021-01-07 19:33:29'),
(221, 401, 'https://release.schulverwaltungheimtest.ch/notenbuch-schueler/', '2021-01-07 19:33:44'),
(222, 401, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValuesSchueler.php?k=1&s=&_=1610044424453', '2021-01-07 19:33:45'),
(223, 401, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValuesSchueler.php?k=1&s=&_=1610044424454', '2021-01-07 19:33:45'),
(224, 401, 'https://release.schulverwaltungheimtest.ch/individueller-stundenplan/', '2021-01-07 19:34:01'),
(225, 401, 'https://release.schulverwaltungheimtest.ch/individueller-stundenplan/', '2021-01-07 19:34:01'),
(226, 401, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/showstundenplanschuelerind.php?q=401&k=', '2021-01-07 19:34:03'),
(227, 401, 'https://release.schulverwaltungheimtest.ch/deine-pruefungstermine/', '2021-01-07 19:34:07'),
(228, 401, 'https://release.schulverwaltungheimtest.ch/deine-pruefungstermine/', '2021-01-07 19:34:07'),
(229, 401, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=401&start=2021-01-01&end=2021-02-01&_=1610044448002', '2021-01-07 19:34:08'),
(230, 401, 'https://release.schulverwaltungheimtest.ch/mail-der-kurstermine/', '2021-01-07 19:34:10'),
(231, 401, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=401&start=2021-01-01&end=2021-02-01&_=1610044450863', '2021-01-07 19:34:11'),
(232, 401, 'https://release.schulverwaltungheimtest.ch/deine-pruefungstermine/', '2021-01-07 19:34:15'),
(233, 401, 'https://release.schulverwaltungheimtest.ch/deine-pruefungstermine/', '2021-01-07 19:34:15'),
(234, 401, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=401&start=2021-01-01&end=2021-02-01&_=1610044455249', '2021-01-07 19:34:15'),
(235, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-07 19:34:29'),
(236, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-07 19:34:29'),
(237, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610044469939', '2021-01-07 19:34:30'),
(238, 1, 'https://release.schulverwaltungheimtest.ch/kurse/', '2021-01-07 19:34:34'),
(239, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen-verwaltung-2/', '2021-01-07 19:35:10'),
(240, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen-verwaltung-2/', '2021-01-07 19:35:10'),
(241, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen-verwaltung-2/', '2021-01-07 19:35:10'),
(242, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610044510409', '2021-01-07 19:35:11'),
(243, 1, 'https://release.schulverwaltungheimtest.ch/noteneingabe-2/', '2021-01-07 19:35:14'),
(244, 1, 'https://release.schulverwaltungheimtest.ch/noteneingabe-2/', '2021-01-07 19:35:14'),
(245, 1, 'https://release.schulverwaltungheimtest.ch/notenblatt/', '2021-01-07 19:35:18'),
(246, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/showtableNotenblatt.php?k=Dummy&s=', '2021-01-07 19:35:21'),
(247, 1, 'https://release.schulverwaltungheimtest.ch/noten-und-abwesenheiten-nach-schuelern/', '2021-01-07 19:35:27'),
(248, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValuesSchuelerVerw.php?l=&s=&_=1610044527797', '2021-01-07 19:35:28'),
(249, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValuesSchuelerVerw.php?l=&s=&_=1610044527798', '2021-01-07 19:35:28'),
(250, 1, 'https://release.schulverwaltungheimtest.ch/import-pruefungstermine/', '2021-01-07 19:35:32'),
(251, 1, 'https://release.schulverwaltungheimtest.ch/meine-lernenden/', '2021-01-07 19:36:43'),
(252, 1, 'https://release.schulverwaltungheimtest.ch/meine-lernenden/', '2021-01-07 19:36:43'),
(253, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-07 19:36:49'),
(254, 1, 'https://release.schulverwaltungheimtest.ch/uebersicht-des-schuelers/?q=1', '2021-01-07 19:37:00'),
(255, 1, 'https://release.schulverwaltungheimtest.ch/profilmanagement/', '2021-01-07 19:37:12'),
(256, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-07 22:02:12'),
(257, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-07 22:02:12'),
(258, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610053333757', '2021-01-07 22:02:13'),
(259, 1, 'https://release.schulverwaltungheimtest.ch/kurse-der-lernenden-2/', '2021-01-07 22:02:25'),
(260, 1, 'https://release.schulverwaltungheimtest.ch/kurse-der-lernenden-2/', '2021-01-07 22:02:25'),
(261, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-07 22:02:39'),
(262, 1, 'https://release.schulverwaltungheimtest.ch/lehrerverwaltung/', '2021-01-07 22:03:08'),
(263, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetLehrpersonen_Archiv.php?q=&_=1610053389716', '2021-01-07 22:03:10'),
(264, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-07 22:04:16'),
(265, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/', '2021-01-07 22:04:23'),
(266, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/lernendezuordnenscr.php?q=Nietnagel%20Pepe%20ID:2&h=HeimSt%20stheim6@googlemail.com%20ID:233', '2021-01-07 22:04:46'),
(267, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-07 22:05:15'),
(268, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-07 22:05:31'),
(269, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/', '2021-01-07 22:05:38'),
(270, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/lernendezuordnenscr.php?q=Nietnagel%20Pepe%20ID:2&h=TestSchueler%20pepe.nietnagel@provider.ch%20ID:242', '2021-01-07 22:05:53'),
(271, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-07 22:06:17'),
(272, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-08 11:36:19'),
(273, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-08 11:36:19'),
(274, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610102181056', '2021-01-08 11:36:21'),
(275, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-08 11:36:25'),
(276, 1, 'https://release.schulverwaltungheimtest.ch/klassenbuch-der-lehrpersonen/', '2021-01-08 11:36:39'),
(277, 1, 'https://release.schulverwaltungheimtest.ch/klassenbuch-der-lehrpersonen/', '2021-01-08 11:36:39'),
(278, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwesenheitenKompakt_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610102200777', '2021-01-08 11:36:41'),
(279, 1, 'https://release.schulverwaltungheimtest.ch/kurse/', '2021-01-08 12:22:16'),
(280, 1, 'https://release.schulverwaltungheimtest.ch/kursformular/', '2021-01-08 12:22:28'),
(281, 1, 'https://release.schulverwaltungheimtest.ch/kursformular/', '2021-01-08 12:22:28'),
(282, 1, 'https://release.schulverwaltungheimtest.ch/kursformular/', '2021-01-08 12:22:28'),
(283, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/KursdatenEingabe.php?q=Dummy&k=', '2021-01-08 12:22:32'),
(284, 1, 'https://release.schulverwaltungheimtest.ch/kurse-stammdaten/', '2021-01-08 12:22:39'),
(285, 1, 'https://release.schulverwaltungheimtest.ch/stundenplanzeiten-stammdaten/', '2021-01-08 12:22:42'),
(286, 1, 'https://release.schulverwaltungheimtest.ch/kurse-stammdaten/', '2021-01-08 12:22:49'),
(287, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-08 12:36:35'),
(288, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:36:39'),
(289, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:36:39'),
(290, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:36:39'),
(291, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:36:39'),
(292, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:36:39'),
(293, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:36:39'),
(294, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:36:39'),
(295, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:36:39'),
(296, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:36:39'),
(297, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:36:39'),
(298, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:36:39'),
(299, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 12:36:45'),
(300, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 12:36:45'),
(301, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 12:47:47'),
(302, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 12:47:47'),
(303, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 12:47:47'),
(304, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 12:47:47'),
(305, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 12:47:47'),
(306, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 12:47:47'),
(307, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 12:47:47'),
(308, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 12:47:47'),
(309, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 12:47:47'),
(310, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 12:47:47'),
(311, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwesenheitenKompakt_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610106469707', '2021-01-08 12:47:50'),
(312, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610106469708', '2021-01-08 12:47:50'),
(313, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610106469710', '2021-01-08 12:47:50'),
(314, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValues.php?q=&s=&_=1610106469711', '2021-01-08 12:47:50'),
(315, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610106469709', '2021-01-08 12:47:50'),
(316, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValues.php?k=&s=&_=1610106469712', '2021-01-08 12:47:50'),
(317, 1, 'https://release.schulverwaltungheimtest.ch/abweingb_sc/', '2021-01-08 12:48:18'),
(318, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/getKursname.php?q=Dummy', '2021-01-08 12:48:21'),
(319, 1, 'https://release.schulverwaltungheimtest.ch/meine-kurshistorie/', '2021-01-08 12:49:38'),
(320, 1, 'https://release.schulverwaltungheimtest.ch/meine-lernenden/', '2021-01-08 12:49:42'),
(321, 1, 'https://release.schulverwaltungheimtest.ch/meine-lernenden/', '2021-01-08 12:49:42'),
(322, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-08 12:50:01'),
(323, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:50:07'),
(324, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:50:07'),
(325, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:50:07'),
(326, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:50:07'),
(327, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:50:07'),
(328, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:50:07'),
(329, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:50:07'),
(330, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:50:07'),
(331, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:50:07'),
(332, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:50:07'),
(333, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 12:50:07'),
(334, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/addLernendetoClass.php?k=1&l=2&m=Dummy', '2021-01-08 12:50:14'),
(335, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen-verwaltung-2/', '2021-01-08 12:57:45'),
(336, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen-verwaltung-2/', '2021-01-08 12:57:45'),
(337, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen-verwaltung-2/', '2021-01-08 12:57:45'),
(338, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610107066705', '2021-01-08 12:57:46'),
(339, 1, 'https://release.schulverwaltungheimtest.ch/noteneingabe-2/', '2021-01-08 12:57:49'),
(340, 1, 'https://release.schulverwaltungheimtest.ch/noteneingabe-2/', '2021-01-08 12:57:49'),
(341, 1, 'https://release.schulverwaltungheimtest.ch/noten-und-abwesenheiten-nach-schuelern/', '2021-01-08 12:57:57'),
(342, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValuesSchuelerVerw.php?l=&s=&_=1610107079010', '2021-01-08 12:57:59'),
(343, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValuesSchuelerVerw.php?l=&s=&_=1610107079011', '2021-01-08 12:57:59'),
(344, 1, 'https://release.schulverwaltungheimtest.ch/pruefungsliste/', '2021-01-08 12:58:07'),
(345, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/showtable.php?k=Alle', '2021-01-08 12:58:10'),
(346, 1, 'https://release.schulverwaltungheimtest.ch/klassenbuch-der-lehrpersonen/', '2021-01-08 12:58:21'),
(347, 1, 'https://release.schulverwaltungheimtest.ch/klassenbuch-der-lehrpersonen/', '2021-01-08 12:58:21'),
(348, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwesenheitenKompakt_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610107103325', '2021-01-08 12:58:23'),
(349, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-08 12:59:05'),
(350, 1, 'https://release.schulverwaltungheimtest.ch/schueleruebersicht/', '2021-01-08 12:59:09'),
(351, 1, 'https://release.schulverwaltungheimtest.ch/schueleruebersicht/', '2021-01-08 12:59:09'),
(352, 1, 'https://release.schulverwaltungheimtest.ch/schueleruebersicht/?q=Stefan%20Heim%20ID:1', '2021-01-08 12:59:13'),
(353, 1, 'https://release.schulverwaltungheimtest.ch/schueleruebersicht/?q=Stefan%20Heim%20ID:1', '2021-01-08 12:59:13'),
(354, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-08 13:09:55'),
(355, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 13:10:08'),
(356, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 13:10:08'),
(357, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 13:10:08'),
(358, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 13:10:08'),
(359, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 13:10:08'),
(360, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 13:10:08'),
(361, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 13:10:08'),
(362, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 13:10:08'),
(363, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 13:10:08'),
(364, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 13:10:08'),
(365, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 13:10:08'),
(366, 1, 'https://release.schulverwaltungheimtest.ch/kurse/', '2021-01-08 13:10:41'),
(367, 1, 'https://release.schulverwaltungheimtest.ch/ausserordentliche-kurseingabe/', '2021-01-08 13:10:46'),
(368, 1, 'https://release.schulverwaltungheimtest.ch/ausserordentliche-kurseingabe/', '2021-01-08 13:10:46'),
(369, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/getcolorAK.php?q=undefined', '2021-01-08 13:11:05'),
(370, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/getKursname.php?q=Dummy', '2021-01-08 13:11:05'),
(371, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/getcolorAK.php?q=-Select-', '2021-01-08 13:11:06'),
(372, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/getLehrerAK.php?q=-Select-', '2021-01-08 13:11:06'),
(373, 1, 'https://release.schulverwaltungheimtest.ch/mail-der-kurstermine/', '2021-01-08 14:17:07'),
(374, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610111828813', '2021-01-08 14:17:08'),
(375, 1, 'https://release.schulverwaltungheimtest.ch/kurse-archiv/', '2021-01-08 14:17:16'),
(376, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurse_Archiv.php?q=&_=1610111838258', '2021-01-08 14:17:18'),
(377, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Archiv.php?q=&_=1610111838259', '2021-01-08 14:17:18'),
(378, 1, 'https://release.schulverwaltungheimtest.ch/users-archiv/', '2021-01-08 14:17:20'),
(379, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetUsers_Archiv.php?q=&_=1610111842034', '2021-01-08 14:17:21'),
(380, 1, 'https://release.schulverwaltungheimtest.ch/stundenplaenearchiv/', '2021-01-08 14:24:42'),
(381, 1, 'https://release.schulverwaltungheimtest.ch/stundenplaenearchiv/?Semester=', '2021-01-08 14:24:46'),
(382, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen-archiv/', '2021-01-08 14:24:50'),
(383, 1, 'https://release.schulverwaltungheimtest.ch/kurse/', '2021-01-08 14:24:56'),
(384, 1, 'https://release.schulverwaltungheimtest.ch/stundenplan-2/', '2021-01-08 14:25:01'),
(385, 1, 'https://release.schulverwaltungheimtest.ch/stundenplan-2/', '2021-01-08 14:25:02'),
(386, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/showstundenplan.php?q=Dummy&k=&d=', '2021-01-08 14:25:05'),
(387, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/checkStundenplan.php?q=&k=08:15&d=Montag&c=Dummy', '2021-01-08 14:25:10'),
(388, 1, 'https://release.schulverwaltungheimtest.ch/kurse-stammdaten/', '2021-01-08 14:48:35'),
(389, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/createKursST.php?k=test&l=tst&f=008080&z=&lp=Markus%20Specht%20ID:1&p=', '2021-01-08 14:48:49'),
(390, 1, 'https://release.schulverwaltungheimtest.ch/kurse-stammdaten/', '2021-01-08 14:48:51'),
(391, 1, 'https://release.schulverwaltungheimtest.ch/stundenplan-2/', '2021-01-08 14:48:58'),
(392, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/showstundenplan.php?q=Dummy&k=&d=', '2021-01-08 14:49:01'),
(393, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/checkStundenplan.php?q=tst&k=08:15&d=Montag&c=Dummy', '2021-01-08 14:49:04'),
(394, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/checkStundenplan.php?q=&k=08:15&d=Montag&c=Dummy', '2021-01-08 14:49:07'),
(395, 1, 'https://release.schulverwaltungheimtest.ch/kurse-stammdaten/', '2021-01-08 14:49:11'),
(396, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelKursST.php?k=1', '2021-01-08 14:49:16'),
(397, 1, 'https://release.schulverwaltungheimtest.ch/kurse-stammdaten/', '2021-01-08 14:49:18'),
(398, 1, 'https://release.schulverwaltungheimtest.ch/stundenplan-2/', '2021-01-08 14:49:24'),
(399, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/showstundenplan.php?q=Dummy&k=&d=', '2021-01-08 14:49:27'),
(400, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/showstundenplan.php?q=Dummy&k=&d=2021-01-04', '2021-01-08 15:08:53'),
(401, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/showstundenplan.php?q=Dummy&k=&d=2021-01-26', '2021-01-08 15:09:01'),
(402, 1, 'https://release.schulverwaltungheimtest.ch/stundenplan-der-lehrer-bearbeiten/', '2021-01-08 15:11:04'),
(403, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/showstundenplanlehrererst.php?q=Markus%20Specht%20ID:1&k=&d=', '2021-01-08 15:11:07'),
(404, 1, 'https://release.schulverwaltungheimtest.ch/kurse-der-lernenden-2/', '2021-01-08 15:11:21'),
(405, 1, 'https://release.schulverwaltungheimtest.ch/kurse-der-lernenden-2/', '2021-01-08 15:11:21'),
(406, 1, 'https://release.schulverwaltungheimtest.ch/kurse/', '2021-01-08 15:11:35'),
(407, 1, 'https://release.schulverwaltungheimtest.ch/lehrerverwaltung/', '2021-01-08 15:11:47'),
(408, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetLehrpersonen_Archiv.php?q=&_=1610115109575', '2021-01-08 15:11:49'),
(409, 1, 'https://release.schulverwaltungheimtest.ch/lehrerverwaltung/', '2021-01-08 15:11:59'),
(410, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetLehrpersonen_Archiv.php?q=&_=1610115121308', '2021-01-08 15:12:01'),
(411, 1, 'https://release.schulverwaltungheimtest.ch/lehrpersonen-zuordnen/', '2021-01-08 15:12:02'),
(412, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:36:42'),
(413, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:36:42'),
(414, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:36:42'),
(415, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:36:42'),
(416, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610116603996', '2021-01-08 15:36:43'),
(417, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:36:57'),
(418, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:36:57'),
(419, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:36:57'),
(420, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:36:57'),
(421, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610116636159', '2021-01-08 15:37:16'),
(422, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:41:25');
INSERT INTO `sv_Log` (`ID`, `User_ID`, `URL`, `Datum`) VALUES
(423, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:41:25'),
(424, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:41:25'),
(425, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:41:25'),
(426, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610116886852', '2021-01-08 15:41:26'),
(427, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:50:05'),
(428, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:50:05'),
(429, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:50:05'),
(430, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 15:50:05'),
(431, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610117412836', '2021-01-08 15:50:12'),
(432, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 15:57:25'),
(433, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 15:57:25'),
(434, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 15:57:25'),
(435, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 15:57:25'),
(436, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 15:57:25'),
(437, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 15:57:25'),
(438, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 15:57:25'),
(439, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 15:57:25'),
(440, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 15:57:25'),
(441, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-08 15:57:25'),
(442, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwesenheitenKompakt_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610117846888', '2021-01-08 15:57:26'),
(443, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610117846889', '2021-01-08 15:57:26'),
(444, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610117846890', '2021-01-08 15:57:26'),
(445, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610117846891', '2021-01-08 15:57:26'),
(446, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValues.php?q=&s=&_=1610117846892', '2021-01-08 15:57:26'),
(447, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValues.php?k=&s=&_=1610117846893', '2021-01-08 15:57:26'),
(448, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 17:29:52'),
(449, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 17:29:52'),
(450, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 17:29:52'),
(451, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-08 17:29:52'),
(452, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610123394400', '2021-01-08 17:29:53'),
(453, 1, 'https://release.schulverwaltungheimtest.ch/kurse/', '2021-01-08 17:59:58'),
(454, 1, 'https://release.schulverwaltungheimtest.ch/stundenplanzeiten-stammdaten/', '2021-01-08 18:00:01'),
(455, 1, 'https://release.schulverwaltungheimtest.ch/DBFuellung/DBFuellungZeiten.php', '2021-01-08 18:00:07'),
(456, 1, 'https://release.schulverwaltungheimtest.ch/stundenplanzeiten-stammdaten/', '2021-01-08 18:00:08'),
(457, 1, 'https://release.schulverwaltungheimtest.ch/stundenplan-2/', '2021-01-08 18:00:11'),
(458, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/showstundenplan.php?q=Dummy&k=&d=', '2021-01-08 18:00:14'),
(459, 1, 'https://release.schulverwaltungheimtest.ch/stundenplanzeiten-stammdaten/', '2021-01-08 18:00:23'),
(460, 1, 'https://release.schulverwaltungheimtest.ch/DBFuellung/DBFuellungZeiten.php', '2021-01-08 18:00:27'),
(461, 1, 'https://release.schulverwaltungheimtest.ch/stundenplanzeiten-stammdaten/', '2021-01-08 18:00:28'),
(462, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-08 18:06:08'),
(463, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:06:11'),
(464, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:06:11'),
(465, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:06:11'),
(466, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:06:11'),
(467, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:06:11'),
(468, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:06:11'),
(469, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:06:11'),
(470, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:06:11'),
(471, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:06:11'),
(472, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:06:11'),
(473, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:06:11'),
(474, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Dummy', '2021-01-08 18:06:17'),
(475, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Dummy', '2021-01-08 18:06:17'),
(476, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/klasseloeschen.php?k=Dummy', '2021-01-08 18:07:03'),
(477, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:07:06'),
(478, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:07:06'),
(479, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:07:06'),
(480, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:07:06'),
(481, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:07:06'),
(482, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:07:06'),
(483, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:07:06'),
(484, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:07:06'),
(485, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:07:06'),
(486, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:07:06'),
(487, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:07:06'),
(488, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:07:11'),
(489, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:07:11'),
(490, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelSchueler.php?k=1&l=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:07:18'),
(491, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelSchueler.php?k=1&l=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:07:18'),
(492, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelSchueler.php?k=1&l=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:07:18'),
(493, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=', '2021-01-08 18:07:27'),
(494, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=', '2021-01-08 18:07:27'),
(495, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:07:28'),
(496, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:07:28'),
(497, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelSchueler.php?k=1&l=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:07:38'),
(498, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelSchueler.php?k=1&l=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:07:38'),
(499, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelSchueler.php?k=1&l=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:07:38'),
(500, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:07:49'),
(501, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:07:49'),
(502, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelSchueler.php?k=1&l=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:08:01'),
(503, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelSchueler.php?k=1&l=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:08:01'),
(504, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelSchueler.php?k=1&l=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:08:01'),
(505, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=', '2021-01-08 18:08:10'),
(506, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=', '2021-01-08 18:08:10'),
(507, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:08:13'),
(508, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:08:13'),
(509, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-08 18:08:37'),
(510, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:14:16'),
(511, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:14:16'),
(512, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:14:16'),
(513, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:14:16'),
(514, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:14:16'),
(515, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:14:16'),
(516, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:14:16'),
(517, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:14:16'),
(518, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:14:16'),
(519, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:14:16'),
(520, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:14:16'),
(521, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:14:20'),
(522, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:14:20'),
(523, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelSchueler.php?k=1&l=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:14:24'),
(524, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelSchueler.php?k=1&l=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:14:24'),
(525, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelSchueler.php?k=1&l=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:14:24'),
(526, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=', '2021-01-08 18:14:27'),
(527, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=', '2021-01-08 18:14:27'),
(528, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:14:29'),
(529, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:14:29'),
(530, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:14:35'),
(531, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:14:35'),
(532, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelSchueler.php?k=2&l=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:14:47'),
(533, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelSchueler.php?k=2&l=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:14:47'),
(534, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/DelSchueler.php?k=2&l=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:14:47'),
(535, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=', '2021-01-08 18:14:50'),
(536, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=', '2021-01-08 18:14:50'),
(537, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:14:51'),
(538, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:14:51'),
(539, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 18:15:39'),
(540, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:15:55'),
(541, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:15:55'),
(542, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:15:55'),
(543, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:15:55'),
(544, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:15:55'),
(545, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:15:55'),
(546, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:15:55'),
(547, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:15:55'),
(548, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:15:55'),
(549, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:15:55'),
(550, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:15:55'),
(551, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:16:00'),
(552, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:16:00'),
(553, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:16:13'),
(554, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:16:13'),
(555, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/UpdateSchueler.php?k=2&l=Nietnagel&m=Pepe1&n=&o=TestSchueler&p=pepe.nietnagel@provider.ch&q=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:16:20'),
(556, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/UpdateSchueler.php?k=2&l=Nietnagel&m=Pepe1&n=&o=TestSchueler&p=pepe.nietnagel@provider.ch&q=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:16:20'),
(557, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/UpdateSchueler.php?k=2&l=Nietnagel&m=Pepe1&n=&o=TestSchueler&p=pepe.nietnagel@provider.ch&q=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:16:20'),
(558, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=', '2021-01-08 18:16:22'),
(559, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=', '2021-01-08 18:16:22'),
(560, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:16:24'),
(561, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:16:24'),
(562, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/addLernende.php?k=1&l=undefined', '2021-01-08 18:17:04'),
(563, 1, 'https://release.schulverwaltungheimtest.ch/DBFuellung/DBFuellungSchuelereingabe.php', '2021-01-08 18:17:07'),
(564, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:17:08'),
(565, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:17:08'),
(566, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:17:08'),
(567, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:17:08'),
(568, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:17:08'),
(569, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:17:08'),
(570, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:17:08'),
(571, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:17:08'),
(572, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:17:08'),
(573, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:17:08'),
(574, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:17:08'),
(575, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:17:15'),
(576, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:17:15'),
(577, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/UpdateSchueler.php?k=3&l=Nietnagel&m=Pepe1&n=&o=TestSchueler&p=pepe.nietnagel@provider.ch&q=testklasse', '2021-01-08 18:17:21'),
(578, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/UpdateSchueler.php?k=3&l=Nietnagel&m=Pepe1&n=&o=TestSchueler&p=pepe.nietnagel@provider.ch&q=testklasse', '2021-01-08 18:17:21'),
(579, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/UpdateSchueler.php?k=3&l=Nietnagel&m=Pepe1&n=&o=TestSchueler&p=pepe.nietnagel@provider.ch&q=testklasse', '2021-01-08 18:17:21'),
(580, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=', '2021-01-08 18:17:24'),
(581, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=', '2021-01-08 18:17:25'),
(582, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:17:26'),
(583, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=Alle%20Sch%C3%BCler%20(unabh%C3%A4ngig%20von%20der%20Klasse)', '2021-01-08 18:17:26'),
(584, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:17:29'),
(585, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:17:29'),
(586, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:25:59'),
(587, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:25:59'),
(588, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:25:59'),
(589, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:25:59'),
(590, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:25:59'),
(591, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:25:59'),
(592, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:25:59'),
(593, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:25:59'),
(594, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:25:59'),
(595, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:25:59'),
(596, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:25:59'),
(597, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:49'),
(598, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:49'),
(599, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:49'),
(600, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:49'),
(601, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:49'),
(602, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:49'),
(603, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:49'),
(604, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:49'),
(605, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:49'),
(606, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:49'),
(607, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:49'),
(608, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:52'),
(609, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:52'),
(610, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:52'),
(611, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:52'),
(612, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:52'),
(613, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:52'),
(614, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:52'),
(615, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:52'),
(616, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:52'),
(617, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:52'),
(618, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:27:52'),
(619, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:27:57'),
(620, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:27:57'),
(621, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:28:06'),
(622, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:28:06'),
(623, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/UpdateSchueler.php?k=3&l=Nietnagel&m=Pepe&n=&o=TestSchueler&p=pepe.nietnagel@provider.ch&q=testklasse', '2021-01-08 18:28:12'),
(624, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/UpdateSchueler.php?k=3&l=Nietnagel&m=Pepe&n=&o=TestSchueler&p=pepe.nietnagel@provider.ch&q=testklasse', '2021-01-08 18:28:12'),
(625, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/UpdateSchueler.php?k=3&l=Nietnagel&m=Pepe&n=&o=TestSchueler&p=pepe.nietnagel@provider.ch&q=testklasse', '2021-01-08 18:28:12'),
(626, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=', '2021-01-08 18:28:16'),
(627, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=', '2021-01-08 18:28:16'),
(628, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:28:19'),
(629, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:28:19'),
(630, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:28:24'),
(631, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:28:24'),
(632, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:28:24'),
(633, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:28:24'),
(634, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:28:24'),
(635, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:28:24'),
(636, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:28:24'),
(637, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:28:24'),
(638, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:28:24'),
(639, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:28:24'),
(640, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:28:24'),
(641, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 18:28:34'),
(642, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-08 18:29:22'),
(643, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 18:29:37'),
(644, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:42'),
(645, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:42'),
(646, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:42'),
(647, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:42'),
(648, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:42'),
(649, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:42'),
(650, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:42'),
(651, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:42'),
(652, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:42'),
(653, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:43'),
(654, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:43'),
(655, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/addLernende.php?k=1&l=3', '2021-01-08 18:30:50'),
(656, 1, 'https://release.schulverwaltungheimtest.ch/DBFuellung/DBFuellungSchuelereingabe.php', '2021-01-08 18:30:53'),
(657, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:54'),
(658, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:54'),
(659, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:54'),
(660, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:54'),
(661, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:54'),
(662, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:54'),
(663, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:54'),
(664, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:54'),
(665, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:54'),
(666, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:54'),
(667, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:30:54'),
(668, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 18:31:04'),
(669, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:31:27'),
(670, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:31:27'),
(671, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:31:27'),
(672, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:31:27'),
(673, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:31:27'),
(674, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:31:27'),
(675, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:31:27'),
(676, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:31:27'),
(677, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:31:27'),
(678, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:31:27'),
(679, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:31:27'),
(680, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:31:31'),
(681, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:31:31'),
(682, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/UpdateSchueler.php?k=3&l=Nietnagel&m=Pepe1&n=&o=TestSchueler&p=pepe.nietnagel@provider.ch&q=testklasse', '2021-01-08 18:31:40'),
(683, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/UpdateSchueler.php?k=3&l=Nietnagel&m=Pepe1&n=&o=TestSchueler&p=pepe.nietnagel@provider.ch&q=testklasse', '2021-01-08 18:31:40'),
(684, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/UpdateSchueler.php?k=3&l=Nietnagel&m=Pepe1&n=&o=TestSchueler&p=pepe.nietnagel@provider.ch&q=testklasse', '2021-01-08 18:31:40'),
(685, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:31:46'),
(686, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:31:46'),
(687, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=tk2', '2021-01-08 18:31:49'),
(688, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=tk2', '2021-01-08 18:31:49'),
(689, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:31:58'),
(690, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-08 18:31:58'),
(691, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 18:32:10'),
(692, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:32:37'),
(693, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:32:37'),
(694, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:32:37'),
(695, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:32:37'),
(696, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:32:37'),
(697, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:32:37'),
(698, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:32:37'),
(699, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:32:37'),
(700, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:32:37'),
(701, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:32:37'),
(702, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:32:37'),
(703, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/addLernende.php?k=1&l=4', '2021-01-08 18:32:47'),
(704, 1, 'https://release.schulverwaltungheimtest.ch/DBFuellung/DBFuellungSchuelereingabe.php', '2021-01-08 18:33:04'),
(705, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:04'),
(706, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:04'),
(707, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:04'),
(708, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:04'),
(709, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:04'),
(710, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:04'),
(711, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:04'),
(712, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:04'),
(713, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:04'),
(714, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:04'),
(715, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:04'),
(716, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/', '2021-01-08 18:33:17'),
(717, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/lernendezuordnenscr.php?q=Nietnagel%20Pepe1%20ID:5&h=HeimSt1%20stheim@gmx.de%20ID:234', '2021-01-08 18:33:26'),
(718, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:33'),
(719, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:33'),
(720, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:33'),
(721, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:33'),
(722, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:33'),
(723, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:33'),
(724, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:33'),
(725, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:33'),
(726, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:33'),
(727, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:33'),
(728, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:33:33'),
(729, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/', '2021-01-08 18:34:00'),
(730, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/lernendezuordnenscr.php?q=Nietnagel%20Pepe1%20ID:5&h=TestSchueler%20pepe.nietnagel@provider.ch%20ID:242', '2021-01-08 18:34:31'),
(731, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 18:34:43'),
(732, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/', '2021-01-08 18:49:52'),
(733, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/lernendezuordnenscr.php?q=Nietnagel%20Pepe1%20ID:5&h=HeimSt1%20stheim@gmx.de%20ID:234', '2021-01-08 18:50:00'),
(734, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:50:04'),
(735, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:50:04'),
(736, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:50:04'),
(737, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:50:04'),
(738, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:50:04'),
(739, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:50:04'),
(740, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:50:04'),
(741, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:50:04'),
(742, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:50:04'),
(743, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:50:04'),
(744, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:50:04'),
(745, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 18:50:44'),
(746, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 18:59:23'),
(747, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:59:27'),
(748, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:59:27'),
(749, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:59:27'),
(750, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:59:27'),
(751, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:59:27'),
(752, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:59:27'),
(753, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:59:27'),
(754, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:59:27'),
(755, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:59:27'),
(756, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:59:27'),
(757, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 18:59:27'),
(758, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/', '2021-01-08 18:59:30'),
(759, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/lernendezuordnenscr.php?q=Nietnagel%20Pepe1%20ID:5&h=HeimSt1%20stheim@gmx.de%20ID:234', '2021-01-08 18:59:47'),
(760, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/lernendezuordnenscr.php?q=Nietnagel%20Pepe1%20ID:2&h=TestSchueler%20pepe.nietnagel@provider.ch%20ID:242', '2021-01-08 18:59:55'),
(761, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/lernendezuordnenscr.php?q=Nietnagel%20Pepe1%20ID:2&h=TestSchueler%20pepe.nietnagel@provider.ch%20ID:242', '2021-01-08 19:00:01'),
(762, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:04'),
(763, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:04'),
(764, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:04'),
(765, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:04'),
(766, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:04'),
(767, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:04'),
(768, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:04'),
(769, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:04'),
(770, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:04'),
(771, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:04'),
(772, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:04'),
(773, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:52'),
(774, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:52'),
(775, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:52'),
(776, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:52'),
(777, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:52'),
(778, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:52'),
(779, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:52'),
(780, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:52'),
(781, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:52'),
(782, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:52'),
(783, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:00:52'),
(784, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 19:00:55'),
(785, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/', '2021-01-08 19:01:04'),
(786, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/lernendezuordnenscr.php?q=Nietnagel%20Pepe1%20ID:2&h=TestSchueler%20pepe.nietnagel@provider.ch%20ID:242', '2021-01-08 19:01:11'),
(787, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:01:14'),
(788, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:01:14'),
(789, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:01:14'),
(790, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:01:14'),
(791, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:01:14'),
(792, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:01:14'),
(793, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:01:14'),
(794, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:01:14'),
(795, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:01:14'),
(796, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:01:14'),
(797, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:01:14'),
(798, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 19:01:20'),
(799, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/', '2021-01-08 19:02:01'),
(800, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/lernendezuordnenscr.php?q=Nietnagel%20Pepe1%20ID:2&h=TestSchueler%20pepe.nietnagel@provider.ch%20ID:242', '2021-01-08 19:02:07'),
(801, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 19:02:10'),
(802, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:02:53'),
(803, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:02:53'),
(804, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:02:53'),
(805, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:02:53'),
(806, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:02:53'),
(807, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:02:53'),
(808, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:02:53'),
(809, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:02:53'),
(810, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:02:53'),
(811, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:02:53'),
(812, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:02:53'),
(813, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/addLernende.php?k=1&l=5', '2021-01-08 19:03:02'),
(814, 1, 'https://release.schulverwaltungheimtest.ch/DBFuellung/DBFuellungSchuelereingabe.php', '2021-01-08 19:03:12'),
(815, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:03:13'),
(816, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:03:13'),
(817, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:03:13'),
(818, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:03:13'),
(819, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:03:13'),
(820, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:03:13'),
(821, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:03:13'),
(822, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:03:13'),
(823, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:03:13'),
(824, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:03:13'),
(825, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:03:13'),
(826, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/', '2021-01-08 19:03:16'),
(827, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/lernendezuordnenscr.php?q=Nietnagel%20Pepe1%20ID:6&h=HeimSt%20stheim6@googlemail.com%20ID:233', '2021-01-08 19:03:28'),
(828, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 19:03:32'),
(829, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:19');
INSERT INTO `sv_Log` (`ID`, `User_ID`, `URL`, `Datum`) VALUES
(830, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:19'),
(831, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:19'),
(832, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:19'),
(833, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:19'),
(834, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:19'),
(835, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:19'),
(836, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:19'),
(837, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:19'),
(838, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:19'),
(839, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:19'),
(840, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:26'),
(841, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:26'),
(842, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:26'),
(843, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:26'),
(844, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:26'),
(845, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:26'),
(846, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:26'),
(847, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:26'),
(848, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:26'),
(849, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:26'),
(850, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:26'),
(851, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/klasseloeschen.php?k=tk2', '2021-01-08 19:04:39'),
(852, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:43'),
(853, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:43'),
(854, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:43'),
(855, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:43'),
(856, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:43'),
(857, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:43'),
(858, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:43'),
(859, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:43'),
(860, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:43'),
(861, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:43'),
(862, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:43'),
(863, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/klasseloeschen.php?k=tk3', '2021-01-08 19:04:49'),
(864, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:52'),
(865, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:52'),
(866, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:52'),
(867, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:52'),
(868, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:52'),
(869, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:52'),
(870, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:52'),
(871, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:52'),
(872, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:52'),
(873, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:52'),
(874, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:04:52'),
(875, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/klasseloeschen.php?k=tk4', '2021-01-08 19:05:00'),
(876, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:05:03'),
(877, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:05:03'),
(878, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:05:03'),
(879, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:05:03'),
(880, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:05:03'),
(881, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:05:03'),
(882, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:05:03'),
(883, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:05:03'),
(884, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:05:03'),
(885, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:05:03'),
(886, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:05:03'),
(887, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 19:05:05'),
(888, 1, 'https://release.schulverwaltungheimtest.ch/kurse/', '2021-01-08 19:08:17'),
(889, 1, 'https://release.schulverwaltungheimtest.ch/kurse-stammdaten/', '2021-01-08 19:08:20'),
(890, 0, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-08 19:55:35'),
(891, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-08 19:55:40'),
(892, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-08 19:55:40'),
(893, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610132142571', '2021-01-08 19:55:42'),
(894, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-08 19:55:46'),
(895, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610132158162', '2021-01-08 19:55:57'),
(896, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-08 19:57:59'),
(897, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:07'),
(898, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:07'),
(899, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:07'),
(900, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:07'),
(901, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:07'),
(902, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:07'),
(903, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:07'),
(904, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:07'),
(905, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:07'),
(906, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:07'),
(907, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:07'),
(908, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/addLernende.php?k=1&l=3', '2021-01-08 19:58:20'),
(909, 1, 'https://release.schulverwaltungheimtest.ch/DBFuellung/DBFuellungSchuelereingabe.php', '2021-01-08 19:58:32'),
(910, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:33'),
(911, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:33'),
(912, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:33'),
(913, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:33'),
(914, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:33'),
(915, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:33'),
(916, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:33'),
(917, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:33'),
(918, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:33'),
(919, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:33'),
(920, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 19:58:33'),
(921, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 19:59:00'),
(922, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-08 19:59:59'),
(923, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:00:05'),
(924, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:00:05'),
(925, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:00:05'),
(926, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:00:05'),
(927, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:00:05'),
(928, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:00:05'),
(929, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:00:05'),
(930, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:00:05'),
(931, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:00:05'),
(932, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:00:05'),
(933, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:00:05'),
(934, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/addLernende.php?k=1&l=7', '2021-01-08 20:00:18'),
(935, 1, 'https://release.schulverwaltungheimtest.ch/DBFuellung/DBFuellungSchuelereingabe.php', '2021-01-08 20:01:14'),
(936, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:01:15'),
(937, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:01:15'),
(938, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:01:15'),
(939, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:01:15'),
(940, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:01:15'),
(941, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:01:15'),
(942, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:01:15'),
(943, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:01:15'),
(944, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:01:15'),
(945, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:01:15'),
(946, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:01:15'),
(947, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 20:01:37'),
(948, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/', '2021-01-08 20:02:07'),
(949, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/lernendezuordnenscr.php?q=Nietnagel%20Pepe1%20ID:8&h=HeimSt%20stheim6@googlemail.com%20ID:233', '2021-01-08 20:02:19'),
(950, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 20:02:31'),
(951, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:02:56'),
(952, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:02:56'),
(953, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:02:56'),
(954, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:02:56'),
(955, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:02:56'),
(956, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:02:56'),
(957, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:02:56'),
(958, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:02:56'),
(959, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:02:56'),
(960, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:02:56'),
(961, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:02:56'),
(962, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/klasseloeschen.php?k=Tk1', '2021-01-08 20:03:06'),
(963, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/klasseloeschen.php?k=Tk2', '2021-01-08 20:03:13'),
(964, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:18'),
(965, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:18'),
(966, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:18'),
(967, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:18'),
(968, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:18'),
(969, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:18'),
(970, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:18'),
(971, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:18'),
(972, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:18'),
(973, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:18'),
(974, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:18'),
(975, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:33'),
(976, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:33'),
(977, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:33'),
(978, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:33'),
(979, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:33'),
(980, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:33'),
(981, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:33'),
(982, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:33'),
(983, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:33'),
(984, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:33'),
(985, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-08 20:03:33'),
(986, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-08 20:03:42'),
(987, 1, 'https://release.schulverwaltungheimtest.ch/kurse-archiv/', '2021-01-08 20:05:05'),
(988, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurse_Archiv.php?q=&_=1610132707310', '2021-01-08 20:05:08'),
(989, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Archiv.php?q=&_=1610132707311', '2021-01-08 20:05:08'),
(990, 1, 'https://release.schulverwaltungheimtest.ch/kurse-archiv/', '2021-01-08 20:05:13'),
(991, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Archiv.php?q=&_=1610132714723', '2021-01-08 20:05:15'),
(992, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurse_Archiv.php?q=&_=1610132714722', '2021-01-08 20:05:15'),
(993, 1, 'https://release.schulverwaltungheimtest.ch/17586-2/', '2021-01-08 20:05:23'),
(994, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetLernendeModule_Archiv.php?q=&_=1610132724683', '2021-01-08 20:05:25'),
(995, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetLernende_Archiv.php?q=&_=1610132724684', '2021-01-08 20:05:25'),
(996, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetLernendeModule_Archiv.php?q=&_=1610132724685', '2021-01-08 20:05:29'),
(997, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetLernende_Archiv.php?q=&_=1610132724686', '2021-01-08 20:05:29'),
(998, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetLernendeModule_Archiv.php?q=&_=1610132724687', '2021-01-08 20:05:30'),
(999, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetLernende_Archiv.php?q=&_=1610132724688', '2021-01-08 20:05:30'),
(1000, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-09 10:24:25'),
(1001, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-09 10:24:25'),
(1002, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610184267437', '2021-01-09 10:24:26'),
(1003, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-09 10:24:43'),
(1004, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-09 10:24:50'),
(1005, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-09 17:28:02'),
(1006, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-09 17:28:02'),
(1007, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610209682865', '2021-01-09 17:28:04'),
(1008, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-09 17:28:13'),
(1009, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-09 17:28:13'),
(1010, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-09 17:28:13'),
(1011, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-09 17:28:13'),
(1012, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610209693541', '2021-01-09 17:28:15'),
(1013, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-09 17:28:20'),
(1014, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-09 17:28:20'),
(1015, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-09 17:28:20'),
(1016, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-09 17:28:20'),
(1017, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-09 17:28:20'),
(1018, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-09 17:28:20'),
(1019, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-09 17:28:20'),
(1020, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-09 17:28:20'),
(1021, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-09 17:28:20'),
(1022, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-09 17:28:20'),
(1023, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwesenheitenKompakt_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610209700184', '2021-01-09 17:28:21'),
(1024, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610209700185', '2021-01-09 17:28:21'),
(1025, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610209700186', '2021-01-09 17:28:21'),
(1026, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610209700187', '2021-01-09 17:28:21'),
(1027, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValues.php?q=&s=&_=1610209700188', '2021-01-09 17:28:21'),
(1028, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValues.php?k=&s=&_=1610209700189', '2021-01-09 17:28:22'),
(1029, 1, 'https://release.schulverwaltungheimtest.ch/ihr-stundenplan-der-regelmaessigen-kurse/', '2021-01-09 17:28:30'),
(1030, 1, 'https://release.schulverwaltungheimtest.ch/ihr-stundenplan-der-regelmaessigen-kurse/', '2021-01-09 17:28:30'),
(1031, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/showstundenplanlehrerind.php?q=1&k=', '2021-01-09 17:28:32'),
(1032, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-09 17:28:40'),
(1033, 1, 'https://release.schulverwaltungheimtest.ch/uebersicht-des-schuelers/?q=2', '2021-01-09 17:28:50'),
(1034, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-10 13:50:16'),
(1035, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-10 13:50:16'),
(1036, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610283017105', '2021-01-10 13:50:17'),
(1037, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-10 13:51:06'),
(1038, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-10 13:51:14'),
(1039, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 13:51:16'),
(1040, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 13:51:16'),
(1041, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 13:51:16'),
(1042, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 13:51:16'),
(1043, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 13:51:16'),
(1044, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 13:51:16'),
(1045, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 13:51:16'),
(1046, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 13:51:16'),
(1047, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 13:51:16'),
(1048, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 13:51:16'),
(1049, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 13:51:16'),
(1050, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-10 13:51:23'),
(1051, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-10 13:51:23'),
(1052, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-10 15:52:49'),
(1053, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 15:52:59'),
(1054, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 15:52:59'),
(1055, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 15:52:59'),
(1056, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 15:52:59'),
(1057, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 15:52:59'),
(1058, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 15:52:59'),
(1059, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 15:52:59'),
(1060, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 15:52:59'),
(1061, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 15:52:59'),
(1062, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 15:52:59'),
(1063, 1, 'https://release.schulverwaltungheimtest.ch/klassen-und-lernendenverwaltung-2/', '2021-01-10 15:52:59'),
(1064, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-10 15:53:21'),
(1065, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/schuelerbearbeiten.php?k=testklasse', '2021-01-10 15:53:21'),
(1066, 1, 'https://release.schulverwaltungheimtest.ch/kurse/', '2021-01-10 15:53:36'),
(1067, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen-verwaltung-2/', '2021-01-10 15:53:43'),
(1068, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen-verwaltung-2/', '2021-01-10 15:53:43'),
(1069, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen-verwaltung-2/', '2021-01-10 15:53:43'),
(1070, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610290424270', '2021-01-10 15:53:44'),
(1071, 1, 'https://release.schulverwaltungheimtest.ch/notenblatt/', '2021-01-10 15:53:51'),
(1072, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/showtableNotenblatt.php?k=testklasse&s=', '2021-01-10 15:53:54'),
(1073, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-11 16:54:13'),
(1074, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-11 16:54:13'),
(1075, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610380453811', '2021-01-11 16:54:14'),
(1076, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-11 16:54:32'),
(1077, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-11 16:54:32'),
(1078, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-11 16:54:32'),
(1079, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-11 16:54:32'),
(1080, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-11 16:54:32'),
(1081, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-11 16:54:32'),
(1082, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-11 16:54:32'),
(1083, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-11 16:54:32'),
(1084, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-11 16:54:32'),
(1085, 1, 'https://release.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-11 16:54:32'),
(1086, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwesenheitenKompakt_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610380473073', '2021-01-11 16:54:33'),
(1087, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610380473074', '2021-01-11 16:54:33'),
(1088, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610380473075', '2021-01-11 16:54:34'),
(1089, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValues.php?q=&s=&_=1610380473077', '2021-01-11 16:54:34'),
(1090, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610380473076', '2021-01-11 16:54:34'),
(1091, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValues.php?k=&s=&_=1610380473078', '2021-01-11 16:54:34'),
(1092, 1, 'https://release.schulverwaltungheimtest.ch/ihr-stundenplan-der-regelmaessigen-kurse/', '2021-01-11 16:54:42'),
(1093, 1, 'https://release.schulverwaltungheimtest.ch/ihr-stundenplan-der-regelmaessigen-kurse/', '2021-01-11 16:54:42'),
(1094, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-11 16:54:45'),
(1095, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-11 16:59:37'),
(1096, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-11 16:59:37'),
(1097, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-11 16:59:37'),
(1098, 1, 'https://release.schulverwaltungheimtest.ch/pruefungen/', '2021-01-11 16:59:37'),
(1099, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610380777826', '2021-01-11 16:59:38'),
(1100, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-12 09:37:14'),
(1101, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-12 09:37:14'),
(1102, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610440636315', '2021-01-12 09:37:15'),
(1103, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-12 10:02:21'),
(1104, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/', '2021-01-12 10:02:25'),
(1105, 1, 'https://release.schulverwaltungheimtest.ch/lernende-automatisch-zuordnen/', '2021-01-12 10:02:28'),
(1106, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/?wdtNonceFrontendEdit=4176bce71e&_wp_http_referer=%2Flernende-automatisch-zuordnen%2F&table_1_length=25&s=', '2021-01-12 10:02:34'),
(1107, 1, 'https://release.schulverwaltungheimtest.ch/17871-2/', '2021-01-12 10:02:45'),
(1108, 1, 'https://release.schulverwaltungheimtest.ch/kurse-archiv/', '2021-01-12 10:51:32'),
(1109, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Archiv.php?q=&_=1610445094510', '2021-01-12 10:51:34'),
(1110, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurse_Archiv.php?q=&_=1610445094509', '2021-01-12 10:51:34'),
(1111, 1, 'https://release.schulverwaltungheimtest.ch/users-archiv/', '2021-01-12 10:51:35'),
(1112, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetUsers_Archiv.php?q=&_=1610445097157', '2021-01-12 10:51:37'),
(1113, 1, 'https://release.schulverwaltungheimtest.ch/settings/', '2021-01-12 10:51:48'),
(1114, 1, 'https://release.schulverwaltungheimtest.ch/lernende/', '2021-01-12 10:51:50'),
(1115, 1, 'https://release.schulverwaltungheimtest.ch/lernende-zuordnen-2/', '2021-01-12 10:51:53'),
(1116, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-12 10:56:46'),
(1117, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-12 10:56:46'),
(1118, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610445408707', '2021-01-12 10:56:48'),
(1119, 1, 'https://release.schulverwaltungheimtest.ch/stundenplan-2/', '2021-01-12 10:56:52'),
(1120, 1, 'https://release.schulverwaltungheimtest.ch/Ajax_Scripts/showstundenplan.php?q=testklasse&k=&d=', '2021-01-12 10:56:56'),
(1121, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-12 11:04:58'),
(1122, 1, 'https://release.schulverwaltungheimtest.ch/terminkalender/', '2021-01-12 11:04:58'),
(1123, 1, 'https://release.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610445900398', '2021-01-12 11:04:59'),
(1124, 1, 'http://demo.schulverwaltungheimtest.ch/lernende/', '2021-01-12 11:37:47'),
(1125, 1, 'http://demo.schulverwaltungheimtest.ch/settings/', '2021-01-12 11:37:56'),
(1126, 1, 'http://demo.schulverwaltungheimtest.ch/settings/', '2021-01-12 11:49:02'),
(1127, 1, 'http://demo.schulverwaltungheimtest.ch/terminkalender/', '2021-01-12 11:49:21'),
(1128, 1, 'http://demo.schulverwaltungheimtest.ch/terminkalender/', '2021-01-12 11:49:21'),
(1129, 1, 'http://demo.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610448563290', '2021-01-12 11:49:22'),
(1130, 1, 'https://demo.schulverwaltungheimtest.ch/terminkalender/', '2021-01-12 11:49:44'),
(1131, 1, 'https://demo.schulverwaltungheimtest.ch/terminkalender/', '2021-01-12 11:49:44'),
(1132, 1, 'https://demo.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610448586517', '2021-01-12 11:49:45'),
(1133, 1, 'https://demo.schulverwaltungheimtest.ch/lernende/', '2021-01-12 11:50:02'),
(1134, 1, 'https://demo.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-12 11:50:08'),
(1135, 1, 'https://demo.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-12 11:50:08'),
(1136, 1, 'https://demo.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-12 11:50:08'),
(1137, 1, 'https://demo.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-12 11:50:08'),
(1138, 1, 'https://demo.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-12 11:50:08'),
(1139, 1, 'https://demo.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-12 11:50:08'),
(1140, 1, 'https://demo.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-12 11:50:08'),
(1141, 1, 'https://demo.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-12 11:50:08'),
(1142, 1, 'https://demo.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-12 11:50:08'),
(1143, 1, 'https://demo.schulverwaltungheimtest.ch/uebersichtlehrer/', '2021-01-12 11:50:08'),
(1144, 1, 'https://demo.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwesenheitenKompakt_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610448610558', '2021-01-12 11:50:10'),
(1145, 1, 'https://demo.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetKurshistorie_Lehrer.php?l=Markus%20Specht%20ID:1&_=1610448610559', '2021-01-12 11:50:10'),
(1146, 1, 'https://demo.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610448610560', '2021-01-12 11:50:10'),
(1147, 1, 'https://demo.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetPruefterminValues.php?q=1&start=2021-01-01&end=2021-02-01&_=1610448610561', '2021-01-12 11:50:10'),
(1148, 1, 'https://demo.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetNotenValues.php?q=&s=&_=1610448610562', '2021-01-12 11:50:10'),
(1149, 1, 'https://demo.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetAbwValues.php?k=&s=&_=1610448610563', '2021-01-12 11:50:10'),
(1150, 1, 'https://demo.schulverwaltungheimtest.ch/settings/', '2021-01-12 11:50:42'),
(1151, 1, 'https://demo.schulverwaltungheimtest.ch/terminkalender/', '2021-01-12 11:55:49'),
(1152, 1, 'https://demo.schulverwaltungheimtest.ch/terminkalender/', '2021-01-12 11:55:49'),
(1153, 1, 'https://demo.schulverwaltungheimtest.ch/wp-content/themes/structr/Page_Scripts/GetCalendarValues.php?q=1000000&k=&l=&start=2021-01-01&end=2021-02-01&_=1610448951803', '2021-01-12 11:55:51');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_Noten`
--

CREATE TABLE `sv_Noten` (
  `ID` int(11) NOT NULL,
  `SchuelerID` int(11) DEFAULT NULL,
  `KursID` varchar(255) DEFAULT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `Gewichtung` int(11) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Datum` date DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Zeit` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_NotenDel`
--

CREATE TABLE `sv_NotenDel` (
  `ID` int(11) NOT NULL,
  `SchuelerID` int(11) DEFAULT NULL,
  `KursID` varchar(255) DEFAULT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `Gewichtung` int(11) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Datum` date DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Zeit` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_Profile`
--

CREATE TABLE `sv_Profile` (
  `ID` int(11) NOT NULL,
  `Beschreibung` varchar(255) DEFAULT NULL,
  `Profil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_Pruefungen`
--

CREATE TABLE `sv_Pruefungen` (
  `ID` int(11) NOT NULL,
  `Kursname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `KursID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datum` date DEFAULT NULL,
  `Tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Start` datetime DEFAULT NULL,
  `Ende` datetime DEFAULT NULL,
  `Klasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Zimmer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ZI_ID` int(11) DEFAULT NULL,
  `Lehrperson` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LP_ID` int(11) DEFAULT NULL,
  `Farbe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gewichtung` float DEFAULT NULL,
  `Pruefungsname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kommentar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lernziele` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_Rechner`
--

CREATE TABLE `sv_Rechner` (
  `ID` int(11) NOT NULL,
  `bezeichnung` varchar(255) DEFAULT NULL,
  `modell` varchar(255) DEFAULT NULL,
  `skunumber` varchar(255) DEFAULT NULL,
  `serialtagnumber` varchar(255) DEFAULT NULL,
  `garantieab` date DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL,
  `office` varchar(255) DEFAULT NULL,
  `aktiviertdurch` varchar(255) DEFAULT NULL,
  `zugewiesenan` varchar(255) DEFAULT NULL,
  `reader` varchar(255) DEFAULT NULL,
  `software` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `visionnc` varchar(255) DEFAULT NULL,
  `sicherheit` varchar(255) DEFAULT NULL,
  `standort` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `bemerkung` varchar(255) DEFAULT NULL,
  `zussw` varchar(255) DEFAULT NULL,
  `update_am` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_RecoverLernende`
--

CREATE TABLE `sv_RecoverLernende` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Vorname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Klasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Loginname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Profil` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WinLogin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SchulMail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Laptop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `sv_RecoverLernende`
--

INSERT INTO `sv_RecoverLernende` (`ID`, `Name`, `Vorname`, `Klasse`, `Loginname`, `EMail`, `User_ID`, `Profil`, `WinLogin`, `SchulMail`, `Laptop`, `Status`) VALUES
(1, 'Heim', 'Stefan', 'Dummy', 'sheim', 'info@gaming-machines.net', 401, '', '', '', '', ''),
(2, 'Nietnagel', 'Pepe', 'Dummy', 'TestSchueler', 'pepe.nietnagel@provider.ch', 242, '', '', '', '', ''),
(4, 'Nietnagel', 'Pepe1', 'tk2', 'TestSchueler', 'pepe.nietnagel@provider.ch', 242, '', '', '', '', ''),
(5, 'Nietnagel', 'Pepe1', 'tk3', 'HeimSt1', 'stheim@gmx.de', 234, '', '', '', '', ''),
(6, 'Nietnagel', 'Pepe1', 'tk4', 'HeimSt', 'stheim6@googlemail.com', 233, '', '', '', '', ''),
(7, 'Nietnagel', 'Pepe1', 'Tk1', 'TestSchueler', 'pepe.nietnagel@provider.ch', 242, '', '', '', '', ''),
(8, 'Nietnagel ', 'Pepe1', 'Tk2', 'HeimSt', 'stheim6@googlemail.com', 233, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_SemesterArchiv`
--

CREATE TABLE `sv_SemesterArchiv` (
  `ID` int(11) NOT NULL,
  `Semesterkuerzel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `sv_SemesterArchiv`
--

INSERT INTO `sv_SemesterArchiv` (`ID`, `Semesterkuerzel`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_Settings`
--

CREATE TABLE `sv_Settings` (
  `Semesterkuerzel` varchar(255) DEFAULT NULL,
  `Semesteranfang` date DEFAULT NULL,
  `Semesterende` date DEFAULT NULL,
  `Ferien1von` date DEFAULT NULL,
  `Ferien1bis` date DEFAULT NULL,
  `Ferien2von` date DEFAULT NULL,
  `Ferien2bis` date DEFAULT NULL,
  `Ferien3von` date DEFAULT NULL,
  `Ferien3bis` date DEFAULT NULL,
  `Ferien4von` date DEFAULT NULL,
  `Ferien4bis` date DEFAULT NULL,
  `Ferien5von` date DEFAULT NULL,
  `Ferien5bis` date DEFAULT NULL,
  `ID` int(11) DEFAULT NULL,
  `Klassenbuch` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_text`
--

CREATE TABLE `sv_text` (
  `Meldung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `sv_text`
--

INSERT INTO `sv_text` (`Meldung`) VALUES
('Es sind keine Prüfungen eingetragen');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_Zeiten`
--

CREATE TABLE `sv_Zeiten` (
  `ID` int(11) NOT NULL,
  `Uhrzeit1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Uhrzeit2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Uhrzeit3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Uhrzeit4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Uhrzeit5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Uhrzeit6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Uhrzeit7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Uhrzeit8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Uhrzeit9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Uhrzeit10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `sv_Zeiten`
--

INSERT INTO `sv_Zeiten` (`ID`, `Uhrzeit1`, `Uhrzeit2`, `Uhrzeit3`, `Uhrzeit4`, `Uhrzeit5`, `Uhrzeit6`, `Uhrzeit7`, `Uhrzeit8`, `Uhrzeit9`, `Uhrzeit10`, `Tag`) VALUES
(92, '08:15', '09:05', '10:10', '11:00', '11:45', '13:15', '14:05', '15:10', '16:00', '16:45', 'Montag'),
(93, '08:15', '09:05', '10:10', '11:00', '11:45', '13:15', '14:05', '15:10', '16:00', '16:45', 'Dienstag'),
(94, '08:15', '09:05', '10:10', '11:00', '11:45', '13:15', '14:05', '15:10', '16:00', '16:45', 'Mittwoch'),
(95, '08:15', '09:05', '10:10', '11:00', '11:45', '13:15', '14:05', '15:10', '16:00', '16:45', 'Donnerstag'),
(96, '08:15', '09:05', '10:10', '11:00', '11:45', '13:15', '14:05', '15:10', '16:00', '16:45', 'Freitag'),
(97, '08:15', '09:05', '10:10', '11:00', '11:45', '13:15', '14:05', '15:10', '16:00', '16:45', 'Samstag');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_ZeitenStundenplan`
--

CREATE TABLE `sv_ZeitenStundenplan` (
  `ID` int(11) NOT NULL,
  `Tag` varchar(255) NOT NULL,
  `Klasse` varchar(255) DEFAULT NULL,
  `Uhrzeit1` time DEFAULT NULL,
  `Uhrzeit2` time DEFAULT NULL,
  `Uhrzeit3` time DEFAULT NULL,
  `Uhrzeit4` time DEFAULT NULL,
  `Uhrzeit5` time DEFAULT NULL,
  `Uhrzeit6` time DEFAULT NULL,
  `Uhrzeit7` time DEFAULT NULL,
  `Uhrzeit8` time DEFAULT NULL,
  `Uhrzeit9` time DEFAULT NULL,
  `Uhrzeit10` time DEFAULT NULL,
  `Semester` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sv_Zimmer`
--

CREATE TABLE `sv_Zimmer` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LehrerPC` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Beamer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lautsprecher` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Visualizer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AnzahlNBs` int(11) DEFAULT NULL,
  `Drucker` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AccPoint` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Switch` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LetztesUpdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `_AbwesenheitenGesamt`
--

CREATE TABLE `_AbwesenheitenGesamt` (
  `SchülerID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KursID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Abwesenheit` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `_AbwesenheitenKompakt`
--

CREATE TABLE `_AbwesenheitenKompakt` (
  `SchuelerID` int(11) DEFAULT NULL,
  `Klasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kursname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datum` date DEFAULT NULL,
  `Kommentar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KommentVerw` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Abwesenheitsdauer` int(11) DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `Vorname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nachname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lehrer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Entschuldigt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `_Kurse`
--

CREATE TABLE `_Kurse` (
  `ID` int(11) NOT NULL,
  `Klasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KursID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Uhrzeit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Startdatum` date DEFAULT NULL,
  `Enddatum` date DEFAULT NULL,
  `Lehrperson` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LP_ID` int(11) DEFAULT NULL,
  `Farbe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kursname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Zimmer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FieldID` int(11) DEFAULT NULL,
  `Stundenplan` tinyint(1) DEFAULT NULL,
  `Profil` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `_Kurshistorie`
--

CREATE TABLE `_Kurshistorie` (
  `ID` int(11) NOT NULL,
  `Stattgefunden` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datum` date DEFAULT NULL,
  `KursID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lehrer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kommentar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lektionen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `_Lehrpersonen`
--

CREATE TABLE `_Lehrpersonen` (
  `ID` int(11) NOT NULL,
  `Vorname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nachname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Loginname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Kurs10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs11` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs12` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs13` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs14` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs15` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs16` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs17` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs18` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs19` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs20` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs21` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs22` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs23` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs24` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs25` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs26` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs27` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs28` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs29` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kurs30` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `_Lehrpersonen`
--

INSERT INTO `_Lehrpersonen` (`ID`, `Vorname`, `Nachname`, `EMAIL`, `Loginname`, `Kurs1`, `Kurs2`, `Kurs3`, `Kurs4`, `Kurs5`, `Kurs6`, `Kurs7`, `Kurs8`, `Kurs9`, `User_ID`, `Kurs10`, `Kurs11`, `Kurs12`, `Kurs13`, `Kurs14`, `Kurs15`, `Kurs16`, `Kurs17`, `Kurs18`, `Kurs19`, `Kurs20`, `Kurs21`, `Kurs22`, `Kurs23`, `Kurs24`, `Kurs25`, `Kurs26`, `Kurs27`, `Kurs28`, `Kurs29`, `Kurs30`) VALUES
(1, 'Markus', 'Specht', 'heim_martin@gmx.net', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `_Lernende`
--

CREATE TABLE `_Lernende` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Vorname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Klasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Loginname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Profil` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WinLogin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SchulMail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Laptop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `_Lernende`
--

INSERT INTO `_Lernende` (`ID`, `Name`, `Vorname`, `Klasse`, `Loginname`, `EMail`, `User_ID`, `Profil`, `WinLogin`, `SchulMail`, `Laptop`, `Status`) VALUES
(3, 'Nietnagel', 'Pepe1', 'testklasse', 'TestSchueler', 'pepe.nietnagel@provider.ch', 242, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `_LernendeModule`
--

CREATE TABLE `_LernendeModule` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Vorname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `EMail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul4` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul5` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul6` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul7` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul8` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul9` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul10` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul11` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Modul12` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Profil` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Loginname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `WinLogin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SchulMail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `aktiv` tinyint(1) DEFAULT NULL,
  `Geburtsdatum` date DEFAULT NULL,
  `Nation` varchar(255) DEFAULT NULL,
  `Strasse` varchar(255) DEFAULT NULL,
  `Hausnummer` varchar(255) DEFAULT NULL,
  `PLZ` varchar(255) DEFAULT NULL,
  `Wohnort` varchar(255) DEFAULT NULL,
  `Telefon` varchar(255) DEFAULT NULL,
  `ElternTel` varchar(255) DEFAULT NULL,
  `ElternMail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `_LernendeModule`
--

INSERT INTO `_LernendeModule` (`ID`, `Name`, `Vorname`, `User_ID`, `EMail`, `Modul1`, `Modul2`, `Modul3`, `Modul4`, `Modul5`, `Modul6`, `Modul7`, `Modul8`, `Modul9`, `Modul10`, `Modul11`, `Modul12`, `Profil`, `Loginname`, `WinLogin`, `SchulMail`, `aktiv`, `Geburtsdatum`, `Nation`, `Strasse`, `Hausnummer`, `PLZ`, `Wohnort`, `Telefon`, `ElternTel`, `ElternMail`) VALUES
(2, 'Nietnagel', 'Pepe1', 242, 'pepe.nietnagel@provider.ch', 'testklasse', '', '', '', '', '', '', '', '', '', '', '', '', 'TestSchueler', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `_LernenderKurs`
--

CREATE TABLE `_LernenderKurs` (
  `ID` int(11) NOT NULL,
  `SchuelerID` int(11) DEFAULT NULL,
  `KursID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Abwesenheiten` int(11) DEFAULT NULL,
  `Klasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Vorname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nachname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Profil` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Note1` float DEFAULT NULL,
  `Note2` float DEFAULT NULL,
  `Note3` float DEFAULT NULL,
  `Note4` float DEFAULT NULL,
  `Note5` float DEFAULT NULL,
  `Note6` float DEFAULT NULL,
  `Note7` float DEFAULT NULL,
  `Note8` float DEFAULT NULL,
  `Note9` float DEFAULT NULL,
  `Notenschnitt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `_Noten`
--

CREATE TABLE `_Noten` (
  `ID` int(11) NOT NULL,
  `SchuelerID` int(11) DEFAULT NULL,
  `KursID` varchar(255) DEFAULT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `Gewichtung` int(11) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Datum` date DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Zeit` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `_Profile`
--

CREATE TABLE `_Profile` (
  `ID` int(11) NOT NULL,
  `Beschreibung` varchar(255) DEFAULT NULL,
  `Profil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `_Pruefungen`
--

CREATE TABLE `_Pruefungen` (
  `ID` int(11) NOT NULL,
  `Kursname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `KursID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datum` date DEFAULT NULL,
  `Tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Start` datetime DEFAULT NULL,
  `Ende` datetime DEFAULT NULL,
  `Klasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Zimmer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ZI_ID` int(11) DEFAULT NULL,
  `Lehrperson` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LP_ID` int(11) DEFAULT NULL,
  `Farbe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gewichtung` float DEFAULT NULL,
  `Pruefungsname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kommentar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lernziele` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `_Rechner`
--

CREATE TABLE `_Rechner` (
  `ID` int(11) NOT NULL,
  `bezeichnung` varchar(255) DEFAULT NULL,
  `modell` varchar(255) DEFAULT NULL,
  `skunumber` varchar(255) DEFAULT NULL,
  `serialtagnumber` varchar(255) DEFAULT NULL,
  `garantieab` date DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL,
  `office` varchar(255) DEFAULT NULL,
  `aktiviertdurch` varchar(255) DEFAULT NULL,
  `zugewiesenan` varchar(255) DEFAULT NULL,
  `reader` varchar(255) DEFAULT NULL,
  `software` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `visionnc` varchar(255) DEFAULT NULL,
  `sicherheit` varchar(255) DEFAULT NULL,
  `standort` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `bemerkung` varchar(255) DEFAULT NULL,
  `zussw` varchar(255) DEFAULT NULL,
  `update_am` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `_RecoverLernende`
--

CREATE TABLE `_RecoverLernende` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Vorname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Klasse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Loginname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Profil` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WinLogin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SchulMail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Laptop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `_RecoverLernende`
--

INSERT INTO `_RecoverLernende` (`ID`, `Name`, `Vorname`, `Klasse`, `Loginname`, `EMail`, `User_ID`, `Profil`, `WinLogin`, `SchulMail`, `Laptop`, `Status`) VALUES
(1, 'Heim', 'Stefan', 'Dummy', 'sheim', 'info@gaming-machines.net', 401, '', '', '', '', ''),
(2, 'Nietnagel', 'Pepe', 'Dummy', 'TestSchueler', 'pepe.nietnagel@provider.ch', 242, '', '', '', '', ''),
(4, 'Nietnagel', 'Pepe1', 'tk2', 'TestSchueler', 'pepe.nietnagel@provider.ch', 242, '', '', '', '', ''),
(5, 'Nietnagel', 'Pepe1', 'tk3', 'HeimSt1', 'stheim@gmx.de', 234, '', '', '', '', ''),
(6, 'Nietnagel', 'Pepe1', 'tk4', 'HeimSt', 'stheim6@googlemail.com', 233, '', '', '', '', ''),
(7, 'Nietnagel', 'Pepe1', 'Tk1', 'TestSchueler', 'pepe.nietnagel@provider.ch', 242, '', '', '', '', ''),
(8, 'Nietnagel ', 'Pepe1', 'Tk2', 'HeimSt', 'stheim6@googlemail.com', 233, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `_ZeitenStundenplan`
--

CREATE TABLE `_ZeitenStundenplan` (
  `ID` int(11) NOT NULL,
  `Tag` varchar(255) NOT NULL,
  `Klasse` varchar(255) DEFAULT NULL,
  `Uhrzeit1` time DEFAULT NULL,
  `Uhrzeit2` time DEFAULT NULL,
  `Uhrzeit3` time DEFAULT NULL,
  `Uhrzeit4` time DEFAULT NULL,
  `Uhrzeit5` time DEFAULT NULL,
  `Uhrzeit6` time DEFAULT NULL,
  `Uhrzeit7` time DEFAULT NULL,
  `Uhrzeit8` time DEFAULT NULL,
  `Uhrzeit9` time DEFAULT NULL,
  `Uhrzeit10` time DEFAULT NULL,
  `Semester` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `sv_Abwesenheiten`
--
ALTER TABLE `sv_Abwesenheiten`
  ADD PRIMARY KEY (`wdt_ID`);

--
-- Indizes für die Tabelle `sv_AbwesenheitenGesamt`
--
ALTER TABLE `sv_AbwesenheitenGesamt`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_AbwesenheitenKompakt`
--
ALTER TABLE `sv_AbwesenheitenKompakt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indizes für die Tabelle `sv_Kurse`
--
ALTER TABLE `sv_Kurse`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_KurseAll`
--
ALTER TABLE `sv_KurseAll`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_KurseStammdaten`
--
ALTER TABLE `sv_KurseStammdaten`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_Kurshistorie`
--
ALTER TABLE `sv_Kurshistorie`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indizes für die Tabelle `sv_Kurshistorie_1`
--
ALTER TABLE `sv_Kurshistorie_1`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indizes für die Tabelle `sv_Lehrpersonen`
--
ALTER TABLE `sv_Lehrpersonen`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_Lernende`
--
ALTER TABLE `sv_Lernende`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_LernendeModule`
--
ALTER TABLE `sv_LernendeModule`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_LernenderKurs`
--
ALTER TABLE `sv_LernenderKurs`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_Log`
--
ALTER TABLE `sv_Log`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_Noten`
--
ALTER TABLE `sv_Noten`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_NotenDel`
--
ALTER TABLE `sv_NotenDel`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_Profile`
--
ALTER TABLE `sv_Profile`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_Pruefungen`
--
ALTER TABLE `sv_Pruefungen`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_Rechner`
--
ALTER TABLE `sv_Rechner`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indizes für die Tabelle `sv_RecoverLernende`
--
ALTER TABLE `sv_RecoverLernende`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_SemesterArchiv`
--
ALTER TABLE `sv_SemesterArchiv`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_Settings`
--
ALTER TABLE `sv_Settings`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indizes für die Tabelle `sv_Zeiten`
--
ALTER TABLE `sv_Zeiten`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_ZeitenStundenplan`
--
ALTER TABLE `sv_ZeitenStundenplan`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sv_Zimmer`
--
ALTER TABLE `sv_Zimmer`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `_AbwesenheitenGesamt`
--
ALTER TABLE `_AbwesenheitenGesamt`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `_AbwesenheitenKompakt`
--
ALTER TABLE `_AbwesenheitenKompakt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indizes für die Tabelle `_Kurse`
--
ALTER TABLE `_Kurse`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `_Kurshistorie`
--
ALTER TABLE `_Kurshistorie`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indizes für die Tabelle `_Lehrpersonen`
--
ALTER TABLE `_Lehrpersonen`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `_Lernende`
--
ALTER TABLE `_Lernende`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `_LernendeModule`
--
ALTER TABLE `_LernendeModule`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `_LernenderKurs`
--
ALTER TABLE `_LernenderKurs`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `_Noten`
--
ALTER TABLE `_Noten`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `_Profile`
--
ALTER TABLE `_Profile`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `_Pruefungen`
--
ALTER TABLE `_Pruefungen`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `_Rechner`
--
ALTER TABLE `_Rechner`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indizes für die Tabelle `_RecoverLernende`
--
ALTER TABLE `_RecoverLernende`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `_ZeitenStundenplan`
--
ALTER TABLE `_ZeitenStundenplan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `sv_Abwesenheiten`
--
ALTER TABLE `sv_Abwesenheiten`
  MODIFY `wdt_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sv_AbwesenheitenGesamt`
--
ALTER TABLE `sv_AbwesenheitenGesamt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sv_AbwesenheitenKompakt`
--
ALTER TABLE `sv_AbwesenheitenKompakt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sv_Kurse`
--
ALTER TABLE `sv_Kurse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sv_KurseAll`
--
ALTER TABLE `sv_KurseAll`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sv_KurseStammdaten`
--
ALTER TABLE `sv_KurseStammdaten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `sv_Kurshistorie`
--
ALTER TABLE `sv_Kurshistorie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sv_Kurshistorie_1`
--
ALTER TABLE `sv_Kurshistorie_1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sv_Lehrpersonen`
--
ALTER TABLE `sv_Lehrpersonen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `sv_Lernende`
--
ALTER TABLE `sv_Lernende`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `sv_LernenderKurs`
--
ALTER TABLE `sv_LernenderKurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sv_Log`
--
ALTER TABLE `sv_Log`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1154;

--
-- AUTO_INCREMENT für Tabelle `sv_Noten`
--
ALTER TABLE `sv_Noten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sv_NotenDel`
--
ALTER TABLE `sv_NotenDel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sv_Profile`
--
ALTER TABLE `sv_Profile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sv_Pruefungen`
--
ALTER TABLE `sv_Pruefungen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sv_Rechner`
--
ALTER TABLE `sv_Rechner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sv_RecoverLernende`
--
ALTER TABLE `sv_RecoverLernende`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `sv_SemesterArchiv`
--
ALTER TABLE `sv_SemesterArchiv`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `sv_Zeiten`
--
ALTER TABLE `sv_Zeiten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT für Tabelle `sv_ZeitenStundenplan`
--
ALTER TABLE `sv_ZeitenStundenplan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sv_Zimmer`
--
ALTER TABLE `sv_Zimmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `_AbwesenheitenGesamt`
--
ALTER TABLE `_AbwesenheitenGesamt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `_AbwesenheitenKompakt`
--
ALTER TABLE `_AbwesenheitenKompakt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `_Kurse`
--
ALTER TABLE `_Kurse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `_Kurshistorie`
--
ALTER TABLE `_Kurshistorie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `_Lehrpersonen`
--
ALTER TABLE `_Lehrpersonen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `_Lernende`
--
ALTER TABLE `_Lernende`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `_LernenderKurs`
--
ALTER TABLE `_LernenderKurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `_Noten`
--
ALTER TABLE `_Noten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `_Profile`
--
ALTER TABLE `_Profile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `_Pruefungen`
--
ALTER TABLE `_Pruefungen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `_Rechner`
--
ALTER TABLE `_Rechner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `_RecoverLernende`
--
ALTER TABLE `_RecoverLernende`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `_ZeitenStundenplan`
--
ALTER TABLE `_ZeitenStundenplan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
