-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 06 月 10 日 13:54
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `my_tp`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_ip`
--

CREATE TABLE IF NOT EXISTS `tp_ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(100) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bz` varchar(200) DEFAULT NULL,
  `ztid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tp_ip`
--

INSERT INTO `tp_ip` (`id`, `ip`, `userid`, `addtime`, `bz`, `ztid`) VALUES
(6, '192.168.9.68', 0, '2011-09-29 08:22:02', '6;', 11),
(7, '192.168.9.68', 0, '2011-09-29 08:22:06', '6;', 11);

-- --------------------------------------------------------

--
-- 表的结构 `tp_wt`
--

CREATE TABLE IF NOT EXISTS `tp_wt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `ztid` int(11) DEFAULT NULL,
  `wttype` int(11) DEFAULT '0',
  `tp_total` int(11) NOT NULL DEFAULT '0',
  `px` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `tp_wt`
--

INSERT INTO `tp_wt` (`id`, `title`, `ztid`, `wttype`, `tp_total`, `px`) VALUES
(1, '嗯嗯呢', 11, 0, 21, 0),
(3, 'wep', 11, 1, 21, 1),
(4, '觉得活动做得好不', 6, 0, 12, 0),
(5, '哈哈', 12, 0, 0, 0),
(6, '呵呵', 12, 0, 0, 0),
(7, '你还', 13, 0, 3, 0),
(8, '你也不坏', 1, 0, 0, 1),
(9, '你觉得好看么', 1, 0, 0, 0),
(10, '你觉得好看么？', 1, 0, 0, 0),
(11, '你是谁呀', 1, 0, 0, 0),
(12, '真的对么', 15, 0, 0, 5),
(13, '4', 35, 0, 0, 5),
(14, '我也爱你', 36, 0, 0, 5),
(15, '得修改修改', 37, 0, 4, 5);

-- --------------------------------------------------------

--
-- 表的结构 `tp_xx`
--

CREATE TABLE IF NOT EXISTS `tp_xx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `tp_total` int(11) NOT NULL DEFAULT '0',
  `px` int(11) NOT NULL DEFAULT '0',
  `wtid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `tp_xx`
--

INSERT INTO `tp_xx` (`id`, `title`, `tp_total`, `px`, `wtid`) VALUES
(1, '额问问', 1, 1, 3),
(2, '哈哈', 17, 0, 1),
(3, '工', 2, 0, 3),
(4, '哦', 20, 0, 3),
(5, '呵呵', 4, 1, 1),
(6, '好', 4, 0, 4),
(7, '不好', 3, 2, 4),
(8, '一般', 5, 1, 4),
(9, '你好坏', 2, 0, 7),
(10, '你也不好', 1, 1, 7),
(11, '好看', 0, 0, 9),
(12, '不好看', 0, 1, 9),
(13, '大的', 0, 0, 12),
(14, '热热', 0, 0, 12),
(15, '真的么', 0, 1, 14),
(16, '真的啊', 0, 2, 14),
(17, '是的', 0, 3, 14),
(18, '我爱你的', 0, 4, 14),
(19, 'A选项', 1, 1, 15),
(20, 'B选项', 2, 2, 15),
(21, 'C选项', 1, 3, 15),
(22, 'D选项', 0, 4, 15);

-- --------------------------------------------------------

--
-- 表的结构 `tp_zt`
--

CREATE TABLE IF NOT EXISTS `tp_zt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `endtime` datetime NOT NULL,
  `iscookies` int(11) NOT NULL DEFAULT '1',
  `isdl` int(11) NOT NULL DEFAULT '1',
  `isip` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=38 ;

--
-- 转存表中的数据 `tp_zt`
--

INSERT INTO `tp_zt` (`id`, `title`, `addtime`, `endtime`, `iscookies`, `isdl`, `isip`) VALUES
(37, '太简单了', '2015-06-10 10:43:13', '2015-06-25 00:00:00', 1, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
