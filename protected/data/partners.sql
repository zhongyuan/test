-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 01 月 21 日 06:22
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `cos`
--

-- --------------------------------------------------------

--
-- 表的结构 `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `name` varchar(50) NOT NULL COMMENT '企业名称',
  `logo` varchar(20) NOT NULL COMMENT '企业logo',
  `link` varchar(50) DEFAULT NULL COMMENT '网站链接',
  `sorting` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '排序序号',
  `record_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建日期',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='合伙伙伴基本信息表' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
