-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 05:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fswd14_cr10_radekslowinski_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `fswd14_cr10_radekslowinski_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fswd14_cr10_radekslowinski_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(3) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `image` varchar(155) DEFAULT NULL,
  `ISBN_code` varchar(55) DEFAULT NULL,
  `short_description` varchar(299) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `author_first_name` varchar(55) DEFAULT NULL,
  `author_last_name` varchar(55) DEFAULT NULL,
  `publisher_name` varchar(99) DEFAULT NULL,
  `publisher_address` varchar(99) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `current_status` varchar(22) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `image`, `ISBN_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `current_status`, `language`) VALUES
(1, 'Greatest Hits', 'jimmycliff1.jpg', 'ISBN N/A', 'Jimmy Cliff\'s greatest hits like \'Vietnam\' and \'You can get it if you really want\'', 'CD', 'Jimmy', 'Cliff', 'Eurotrend', 'Venloer Str. 412, 50825 Köln', '2008-05-08', 'reserved', 'english'),
(2, 'Die Sopranos', '618fcf2c5c788.jpg', 'ISBN/GTIN5051890045423', 'Erste Staffel der Geschichte der Gangster-Familie Soprano', 'DVD', 'David', 'Chase', 'Warner Home Video Germany', 'Humboldtstr. 62, 22083 Hamburg', '2003-08-12', 'reserved', 'german'),
(3, 'Fear and Loathing in Las Vegas', '618fcf44923cf.jpg', 'ISBN 0-586-08132-1', 'A Savage Journey to the Heart of the American Dream is a 1971 novel by Hunter S. Thompson, illustrated by Ralph Steadman', 'Book', 'Hunter S.', 'Thompson', 'Flamingo', '77-85 Fulham Palace Road, Hammersmith, London W6 8JB', '1993-12-04', 'available', 'english'),
(4, 'Ab die Post', '618fcf4d3aaf1.jpg', 'ISBN 978-3-442-46422-7', 'Höchstes erzählerisches Können! - Die Welt', 'Book', 'Terry', 'Pratchett', 'Goldmann Verlag', 'Neumarkter Str. 28, 81673 München', '2007-12-10', 'available', 'german'),
(5, 'Die toten Seelen', '618fcf5d03fdc.jfif', 'ISBN 9783423126076', 'Die toten Seelen ist eine Satire auf die zerfallende russische Feudalgesellschaft mit ihrer Willkürherrschaft und ihren korrupten Beamten', 'Book', 'Nikolai Wassiljewitsch', 'Gogol', 'Deutscher Taschenbuch Verlag', 'Tumblingerstr. 21, 80337 München', '1998-12-07', 'reserved', 'german'),
(6, 'Die Brüder Karamasoff', '618fcf7b4dc0f.jfif', 'ISBN 3-492-20402-3', 'Der großartigste Roman, der je geschrieben wurde - Sigmund Freud', 'Book', 'Fjodor Michajlowitsch', 'Dostojewski', 'Piper Verlag', 'Georgenstraße 4, 80799 München', '1997-01-23', 'available', 'german'),
(7, 'Der Spieler', '618fcf897cdb1.jfif', 'ISBN 3-7043-1040-9', 'Die Geschichte eines jungen Mannes, der sich am Spieltisch verschuldet. Autobiografische Züge - Radek Slowinski', 'Book', 'Fjodor Michajlowitsch', 'Dostojewski', 'Neuer Kaiser Verlag', 'Villacher Ring 59, 9020 Klagenfurt', '2002-12-02', 'reserved', 'german'),
(8, 'Boska komedia', '618fcf9b658ca.jfif', 'ISBN 83-7389-192-7', 'Epochalne dzielo Dante Aligheri - Wydawnictwo', 'Book', 'Dante', 'Aligheri', 'Wydawnictwo Zielona Sowa', '30-415 Krakow, ul. Wadowicka 8A', '2004-07-15', 'reserved', 'polish'),
(9, 'Sto lat samotnosci', 'stolat.jfif', 'ISBN 83-7316-153-8', '\'Sto lat samotności\' to historia rodu jego problemów, potknięć, utarczek wewnętrznych i konfliktów z społeczeństwem', 'Book', 'Gabriel Garcia', 'Marquez', 'De Agostini Polska Sp. z o.o.', '00-973 Warszawa, Al. Jerozolimskie 125/127', '2001-03-12', 'available', 'polish'),
(16, 'Weiberregiment', '618fdd9012960.jfif', 'ISBN 978-3-442-46195-0', 'Terry Pratchett ist schlicht und einfach der beste komische Schriftsteller unserer Zeit! - Oxford Times', 'Book', 'Terry', 'Pratchett', 'Goldmann Verlag', 'Neumarkter Str. 28, 81673 München', '2006-08-04', 'reserved', 'german'),
(18, 'Sztuka wojny', '618fd0d477115.jfif', 'ISBN 83-7361-338-2', 'Te traktaty ucza zwyciezac', 'Book', 'Sun', 'Tzu', 'Wydawnictwo HELION', '4-100 Gliwice, ul. Chopina 6', '2004-12-10', 'reserved', 'polish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
