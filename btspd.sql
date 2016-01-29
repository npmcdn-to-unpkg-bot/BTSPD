-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 01 月 29 日 17:11
-- 服务器版本: 5.5.38
-- PHP 版本: 5.4.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `btspd`
--

-- --------------------------------------------------------

--
-- 表的结构 `btspd_admin`
--

CREATE TABLE IF NOT EXISTS `btspd_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `group` int(3) NOT NULL DEFAULT '1',
  `zt` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `btspd_admin`
--

INSERT INTO `btspd_admin` (`id`, `username`, `pwd`, `group`, `zt`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `btspd_dl`
--

CREATE TABLE IF NOT EXISTS `btspd_dl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(50) NOT NULL,
  `time` int(11) NOT NULL,
  `zt` int(3) NOT NULL DEFAULT '1',
  `sj` varchar(30) NOT NULL DEFAULT 'none',
  `wx` varchar(200) NOT NULL DEFAULT 'none',
  `mail` varchar(200) NOT NULL DEFAULT 'none',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`),
  KEY `id_3` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `btspd_dl_big`
--

CREATE TABLE IF NOT EXISTS `btspd_dl_big` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(50) NOT NULL,
  `time` int(11) NOT NULL,
  `zt` int(3) NOT NULL DEFAULT '1',
  `sj` varchar(30) NOT NULL DEFAULT 'none',
  `wx` varchar(200) NOT NULL DEFAULT 'none',
  `mail` varchar(200) NOT NULL DEFAULT 'none',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `btspd_dl_middle`
--

CREATE TABLE IF NOT EXISTS `btspd_dl_middle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(50) NOT NULL,
  `time` int(11) NOT NULL,
  `zt` int(3) NOT NULL DEFAULT '1',
  `sj` varchar(30) NOT NULL DEFAULT 'none',
  `wx` varchar(200) NOT NULL DEFAULT 'none',
  `mail` varchar(200) NOT NULL DEFAULT 'none',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `btspd_dl_room`
--

CREATE TABLE IF NOT EXISTS `btspd_dl_room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(50) NOT NULL,
  `time` int(11) NOT NULL,
  `zt` int(3) NOT NULL DEFAULT '1',
  `sj` varchar(30) NOT NULL DEFAULT 'none',
  `wx` varchar(200) NOT NULL DEFAULT 'none',
  `mail` varchar(200) NOT NULL DEFAULT 'none',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `btspd_dl_small`
--

CREATE TABLE IF NOT EXISTS `btspd_dl_small` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(50) NOT NULL,
  `time` int(11) NOT NULL,
  `zt` int(3) NOT NULL DEFAULT '1',
  `sj` varchar(30) NOT NULL DEFAULT 'none',
  `wx` varchar(200) NOT NULL DEFAULT 'none',
  `mail` varchar(200) NOT NULL DEFAULT 'none',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
