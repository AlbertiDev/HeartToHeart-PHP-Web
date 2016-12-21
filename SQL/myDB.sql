-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2016 at 01:46 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `faqet`
--

CREATE TABLE IF NOT EXISTS `faqet` (
  `id` int(11) NOT NULL,
  `titulli` varchar(100) NOT NULL,
  `pershkrimi` varchar(1000) NOT NULL,
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqet`
--

INSERT INTO `faqet` (`id`, `titulli`, `pershkrimi`, `kategori`) VALUES
(1, 'HOME', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', ''),
(2, 'ABOUT US', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', ''),
(3, 'Services', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', ''),
(4, 'Rreth nesh', 'Ky tekst dhe titull eshte duke u shfaqur nga databaza nga tabela faqet nga rreshti me id numer 4. Per te kuptuar me shume se si eshte realizuar hap fajllin about_us.php dhe shiko kodin brenda', ''),
(5, 'Lajmet nga databaza', 'Edhe lajmet njejt si ne faqen about us, jane duke u lexuar nga databaza nga tabela faqet ajo cka i karakterizon lajmet qe te mos lexohen si lajme dhe faqet tjera eshte se ne DB eshte nje atribut me shume ku e percakto kategorine e tire, Lajme', 'Lajme'),
(6, 'TEST 1 TITULLI', 'TEST 1 pershkrimi', 'Lajme'),
(7, 'TEST 2 titulli', 'TEST 2 pershkrimi', 'Lajme'),
(8, 'TESTI 3', 'TESTI 3', 'Lajme');
-- --------------------------------------------------------

--
-- Table structure for table `kontakti`
--

CREATE TABLE IF NOT EXISTS `kontakti` (
  `id` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rdb` varchar(50) NOT NULL,
  `ckb` text NOT NULL,
  `sltm` varchar(50) NOT NULL,
  `komentet` varchar(512) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontakti`
--

INSERT INTO `kontakti` (`id`, `emri`, `email`, `rdb`, `ckb`, `sltm`, `komentet`) VALUES
(1, 'Albert', 'albert.dev@gmail.com', 'Mashkull', 'MYSQL,MSSQL', 'Programer', 'Me koment :)'),
(2, 'Filan', 'filan@fisteku.com', 'Mashkull', 'SQL', 'Dev', 'MSG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(64) NOT NULL,
  `surname` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `username`, `password`, `name`, `surname`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Albert', 'Dev', 'albert.dev@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqet`
--
ALTER TABLE `faqet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontakti`
--
ALTER TABLE `kontakti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqet`
--
ALTER TABLE `faqet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kontakti`
--
ALTER TABLE `kontakti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
