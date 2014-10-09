-- phpMyAdmin SQL Dump
-- version 3.2.1
-- http://www.phpmyadmin.net
--
-- 主机: 192.168.176.128:3306
-- 生成日期: 2014 年 10 月 06 日 08:14
-- 服务器版本: 5.1.69
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bookshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'root', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- 表的结构 `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bname` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `brand`
--

INSERT INTO `brand` (`id`, `bname`, `class_id`) VALUES
(1, '软件编程', 1),
(3, '文学', 3),
(4, 'Linux', 1),
(5, '小说', 3),
(6, '艺术', 9);

-- --------------------------------------------------------

--
-- 表的结构 `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `class`
--

INSERT INTO `class` (`id`, `cname`) VALUES
(1, '计算机类'),
(3, '励志类'),
(9, '人文艺术');

-- --------------------------------------------------------

--
-- 表的结构 `commit`
--

CREATE TABLE IF NOT EXISTS `commit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `commit`
--

INSERT INTO `commit` (`id`, `content`, `user_id`, `shop_id`, `time`) VALUES
(1, '1111111111111', 5, 7, 1397198241),
(2, '2222222222222', 5, 7, 1397198490),
(3, '3333333333333333333', 5, 7, 1397198493),
(4, '44444444444444', 5, 7, 1397198505),
(5, '55555555555555555', 5, 7, 1397198542),
(6, '111111111111111111111', 7, 9, 1397198687),
(7, '22222222222222', 7, 9, 1397198690),
(8, '333333333333333', 5, 9, 1397198951),
(9, '11111', 5, 8, 1397210245);

-- --------------------------------------------------------

--
-- 表的结构 `conn`
--

CREATE TABLE IF NOT EXISTS `conn` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rname` varchar(50) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `conn`
--

INSERT INTO `conn` (`id`, `rname`, `addr`, `tel`, `email`, `user_id`) VALUES
(3, '小蛋', '火星', '250', 'lqqhwei@163.com', 5),
(4, '小蛋2', '火星2', '1192', 'lqqhwei@163.com2', 5),
(6, '邓泉', '长沙民政学院22号', '1333787878', 'quanquan@163.com', 9),
(7, '邓泉泉', '软件学院1234班', '88766325', 'quanquan@163.com', 11);

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `price` float NOT NULL,
  `time` int(11) NOT NULL,
  `conn_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`id`, `code`, `user_id`, `shop_id`, `num`, `price`, `time`, `conn_id`, `status_id`) VALUES
(6, '14125655491615082792', 11, 15, 1, 45, 1412565549, 7, 1),
(4, '13972114811946213855', 5, 8, 1, 3000, 1397211481, 4, 2),
(5, '13972114811946213855', 5, 10, 2, 300, 1397211481, 4, 2);

-- --------------------------------------------------------

--
-- 表的结构 `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `shelf` tinyint(4) NOT NULL,
  `image` varchar(100) NOT NULL,
  `brand_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `shop`
--

INSERT INTO `shop` (`id`, `sname`, `price`, `stock`, `shelf`, `image`, `brand_id`) VALUES
(20, '黑客攻防', 14, 10, 1, '1412499755297767177.jpg', 1),
(19, '码农增刊Linus与Linux', 3, 18, 1, '1412499664538637927.jpg', 1),
(18, '鸟哥的Linux私房菜', 58, 99, 1, '1412499591103348540.jpg', 1),
(17, '数值计算', 45, 10, 1, '1412499504625179748.jpg', 1),
(15, '啊哈算法', 45, 20, 1, '14124993421813531257.jpg', 1),
(16, '西藏生死书', 39.08, 33, 1, '1412499450690054564.jpg', 3),
(14, '你可以爱', 19, 15, 1, '14124961112066985552.jpg', 3),
(21, 'Linux程序设计(第4版)', 77, 90, 1, '14124998212011015987.jpg', 1),
(22, '人生就是放下', 25.4, 87, 1, '14124999921376617896.jpg', 3),
(23, '一切都是最好的安排', 23.88, 17, 1, '1412500104320879407.jpg', 3),
(24, '艺术通史', 72, 13, 1, '14125003121012616088.jpg', 6),
(25, '美的历史', 16, 17, 1, '1412500596625760966.jpg', 6),
(26, '康定斯基论点线面', 38, 38, 1, '14125006811354104954.jpg', 6);

-- --------------------------------------------------------

--
-- 表的结构 `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `status`
--

INSERT INTO `status` (`id`, `sname`) VALUES
(1, '未发货'),
(2, '已发货'),
(3, '已付款'),
(4, '已确认');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `time`) VALUES
(6, 'user2', '202cb962ac59075b964b07152d234b70', 1397121134),
(5, 'user1', '202cb962ac59075b964b07152d234b70', 1397120699),
(7, 'user3', '202cb962ac59075b964b07152d234b70', 1397122922),
(8, 'alix', '202cb962ac59075b964b07152d234b70', 1412492981),
(9, 'gongbiao', 'e10adc3949ba59abbe56e057f20f883e', 1412493060),
(10, '谢龙', '202cb962ac59075b964b07152d234b70', 1412500856),
(11, '邓泉', 'e10adc3949ba59abbe56e057f20f883e', 1412564646);
