-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Ven 06 Mars 2015 à 22:49
-- Version du serveur: 5.5.41
-- Version de PHP: 5.3.10-1ubuntu3.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `hr`
--

-- --------------------------------------------------------

--
-- Structure de la table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `deptno` int(11) NOT NULL AUTO_INCREMENT,
  `deptname` varchar(30) NOT NULL,
  PRIMARY KEY (`deptno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `dept`
--

INSERT INTO `dept` (`deptno`, `deptname`) VALUES
(1, 'IT'),
(2, 'SALES'),
(4, 'FINANCIAL'),
(5, 'ADMINISTRATION'),
(7, 'Communication');

-- --------------------------------------------------------

--
-- Structure de la table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `empno` int(11) NOT NULL AUTO_INCREMENT,
  `ename` text NOT NULL,
  `job` text NOT NULL,
  `hiredate` date NOT NULL,
  `comm` int(11) DEFAULT NULL,
  `sal` float NOT NULL,
  `deptno` int(11) NOT NULL,
  PRIMARY KEY (`empno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `emp`
--

INSERT INTO `emp` (`empno`, `ename`, `job`, `hiredate`, `comm`, `sal`, `deptno`) VALUES
(6, 'ABD ALI GHAZRANI', 'DEVELOPER', '1991-02-04', 20, 6500, 1),
(7, 'MUSSTAFA BAAZIZ', 'DEVELOPER', '1990-01-05', 10, 2364, 1),
(8, 'YOUNES ELBORAKI', 'DEVELOPER', '1990-03-03', 10, 4500, 1),
(9, 'NAIM SOUFIANE', 'SALESMAN', '1989-03-11', 10, 6500, 2),
(10, 'YOUSSEF CHEGRI', 'ENGINNER', '1995-03-10', 0, 8000, 1),
(11, 'HAMADA AMINE', 'MANAGER', '1985-03-03', 0, 9000, 5),
(12, 'NOURA ALAOUI', 'ACCOUNTANT', '1991-03-11', 20, 5400, 4),
(13, 'KAWTAR SAMLALI', 'COMMUNITY MANAG', '1986-08-06', 30, 23400, 7);

-- --------------------------------------------------------

--
-- Structure de la table `interns`
--

CREATE TABLE IF NOT EXISTS `interns` (
  `internid` int(11) NOT NULL AUTO_INCREMENT,
  `intername` varchar(50) NOT NULL,
  `college` varchar(30) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `deptno` int(11) NOT NULL,
  `job` varchar(20) NOT NULL,
  PRIMARY KEY (`internid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `interns`
--

INSERT INTO `interns` (`internid`, `intername`, `college`, `datefrom`, `dateto`, `deptno`, `job`) VALUES
(3, 'zaka milion', 'moulay ismail', '2014-04-06', '2014-06-06', 6, 'PAINTER'),
(7, 'HAMZA MUBARIK', 'SOFOGEM', '2015-03-04', '2015-05-09', 1, 'TECHNICIAN'),
(8, 'AMINE NOUACHE', 'FEDE', '2015-03-24', '2015-06-19', 1, 'TECHNICIAN'),
(9, 'SAKADI MAKADI', 'FEDE', '2015-03-25', '2015-07-17', 2, 'SALESMAN'),
(10, 'IKRAM AKHAT', 'CUNNY', '2015-03-11', '2015-06-27', 4, 'BACKOFFICE');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `login` varchar(30) NOT NULL,
  `pass` varchar(60) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`login`, `pass`) VALUES
('admin', 'test'),
('test', 'test'),
('user', 'test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
