-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2013 at 03:05 PM
-- Server version: 5.5.27
-- PHP Version: 5.3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cos`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `country` varchar(20) DEFAULT NULL COMMENT '国家',
  `company` varchar(20) DEFAULT NULL COMMENT '公司',
  `address` varchar(100) DEFAULT NULL COMMENT '地址',
  `county` varchar(20) DEFAULT NULL COMMENT '县',
  `state` varchar(20) DEFAULT NULL COMMENT '州',
  `zip_code` varchar(10) DEFAULT NULL COMMENT '邮编',
  `update_time` int(11) NOT NULL,
  `record_time` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='地址';

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`user_id`, `country`, `company`, `address`, `county`, `state`, `zip_code`, `update_time`, `record_time`) VALUES
(3, NULL, NULL, NULL, NULL, NULL, NULL, 1365992893, 1365992893),
(4, NULL, NULL, NULL, NULL, NULL, NULL, 1365993247, 1365993247),
(5, NULL, NULL, NULL, NULL, NULL, NULL, 1365993309, 1365993309),
(6, NULL, NULL, NULL, NULL, NULL, NULL, 1365995173, 1365995173);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `staff_name` varchar(10) NOT NULL COMMENT '管理人员名字',
  `pass_word` int(6) NOT NULL COMMENT '密码',
  `authority` tinyint(2) NOT NULL DEFAULT '1' COMMENT '权限',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0-在职，1-离职状态',
  `update_time` int(11) NOT NULL,
  `record_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `staff_name` (`staff_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='管理人员账户' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `staff_name`, `pass_word`, `authority`, `status`, `update_time`, `record_time`) VALUES
(1, 'zhongyuan', 111111, 1, 0, 1366025036, 1366025036);

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE IF NOT EXISTS `api` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `name` varchar(100) NOT NULL DEFAULT '0' COMMENT '节点名',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父节点',
  `path` varchar(255) NOT NULL DEFAULT '0' COMMENT '存放路径',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '-2审核失败，-1待审核，0为删除，1为正常或审核通过',
  `staff_id` int(11) NOT NULL DEFAULT '0' COMMENT '增加节点的人',
  `update_time` int(11) NOT NULL DEFAULT '0',
  `record_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='cos开发者模块' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(20) NOT NULL,
  `img_type` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img_name`, `img_type`) VALUES
(1, 'scene_1.jpg', 0),
(2, 'scene_2.jpg', 0),
(3, 'scene_3.jpg', 0),
(4, 'scene_1.jpg', 0),
(5, 'scene_2.jpg', 0),
(6, 'scene_3.jpg', 0),
(7, 'scene_1.jpg', 0),
(8, 'scene_2.jpg', 0),
(9, 'scene_3.jpg', 0),
(10, 'scene_1.jpg', 0),
(11, 'scene_2.jpg', 0),
(12, 'scene_3.jpg', 0),
(13, 'scene_1.jpg', 0),
(14, 'scene_2.jpg', 0),
(15, 'scene_3.jpg', 0),
(16, 'scene_1.jpg', 0),
(17, 'scene_2.jpg', 0),
(18, 'scene_3.jpg', 0),
(19, 'scene_1.jpg', 0),
(20, 'scene_2.jpg', 0),
(21, 'scene_3.jpg', 0),
(22, 'scene_1.jpg', 0),
(23, 'scene_2.jpg', 0),
(24, 'scene_3.jpg', 0),
(25, 'scene_1.jpg', 0),
(26, 'scene_2.jpg', 0),
(27, 'scene_3.jpg', 0),
(28, 'scene_1.jpg', 0),
(29, 'scene_2.jpg', 0),
(30, 'scene_3.jpg', 0),
(31, 'scene_1.jpg', 0),
(32, 'scene_2.jpg', 0),
(33, 'scene_3.jpg', 0),
(34, 'scene_1.jpg', 0),
(35, 'scene_2.jpg', 0),
(36, 'scene_3.jpg', 0),
(37, 'scene_1.jpg', 0),
(38, 'scene_2.jpg', 0),
(39, 'scene_3.jpg', 0),
(40, 'scene_1.jpg', 0),
(41, 'scene_2.jpg', 0),
(42, 'scene_3.jpg', 0),
(43, 'scene_1.jpg', 0),
(44, 'scene_2.jpg', 0),
(45, 'scene_3.jpg', 0),
(46, 'scene_1.jpg', 0),
(47, 'scene_2.jpg', 0),
(48, 'scene_3.jpg', 0),
(49, 'scene_1.jpg', 0),
(50, 'scene_2.jpg', 0),
(51, 'scene_3.jpg', 0),
(52, 'scene_1.jpg', 0),
(53, 'scene_2.jpg', 0),
(54, 'scene_3.jpg', 0),
(55, 'scene_1.jpg', 0),
(56, 'scene_2.jpg', 0),
(57, 'scene_3.jpg', 0),
(58, 'scene_1.jpg', 0),
(59, 'scene_2.jpg', 0),
(60, 'scene_3.jpg', 0),
(61, 'scene_1.jpg', 0),
(62, 'scene_2.jpg', 0),
(63, 'scene_3.jpg', 0),
(64, 'scene_1.jpg', 0),
(65, 'scene_2.jpg', 0),
(66, 'scene_3.jpg', 0),
(67, 'scene_1.jpg', 0),
(68, 'scene_2.jpg', 0),
(69, 'scene_3.jpg', 0),
(70, 'scene_1.jpg', 0),
(71, 'scene_2.jpg', 0),
(72, 'scene_3.jpg', 0),
(73, 'scene_1.jpg', 0),
(74, 'scene_2.jpg', 0),
(75, 'scene_3.jpg', 0),
(76, 'scene_1.jpg', 0),
(77, 'scene_2.jpg', 0),
(78, 'scene_3.jpg', 0),
(79, 'scene_1.jpg', 0),
(80, 'scene_2.jpg', 0),
(81, 'scene_3.jpg', 0),
(82, 'scene_1.jpg', 0),
(83, 'scene_2.jpg', 0),
(84, 'scene_3.jpg', 0),
(85, 'scene_1.jpg', 0),
(86, 'scene_2.jpg', 0),
(87, 'scene_3.jpg', 0),
(88, 'scene_1.jpg', 0),
(89, 'scene_2.jpg', 0),
(90, 'scene_3.jpg', 0),
(91, 'scene_1.jpg', 0),
(92, 'scene_2.jpg', 0),
(93, 'scene_3.jpg', 0),
(94, 'scene_1.jpg', 0),
(95, 'scene_2.jpg', 0),
(96, 'scene_3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsDetail`
--

CREATE TABLE IF NOT EXISTS `newsDetail` (
  `news_id` int(11) NOT NULL COMMENT '新闻id',
  `news_detail` text NOT NULL COMMENT '新闻内容',
  `update_time` int(11) NOT NULL COMMENT '更新时间',
  `record_time` int(11) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='新闻内容表';

--
-- Dumping data for table `newsDetail`
--

INSERT INTO `newsDetail` (`news_id`, `news_detail`, `update_time`, `record_time`) VALUES
(9, '<p>\n	<span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;HTC执行长周永明表示：“人们总是希望能够以相片或歌曲来记录或纪念生活中最精彩与美好的当下， 而这样的消费者心声便是HTC One系列的设计原点与创意初衷。我们相信HTC One精湛的拍摄功能 与忠于原音的高音质效果将让使用者爱不释手，不仅是划时代的移动通信产品，更以前所未有的方式提供最佳的个人化使用体验。”</span> \n</p>\n<p style="text-align:center;">\n	<span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;"><img src="http://cosweb/images/news/newsDetail/news_big_1.jpg" alt="" /><br />\n</span> \n</p>\n<p>\n	<br />\n</p>\n<p>\n	<br />\n</p>\n<p style="font-family:STHeiti;font-size:medium;vertical-align:middle;text-indent:35px;background-color:#FFFFFF;">\n	HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[2]\n</p>\n<p style="font-family:STHeiti;font-size:medium;vertical-align:middle;text-indent:35px;background-color:#FFFFFF;">\n	HTC One赶在三星Galaxy S4和苹果iPhone 5S之前发布，400万像素UltraPixel相机堪称智能手机史上的一大创新。这枚1/3英寸BSI Ult raPixel全新摄像头拥有F/2.0光圈，进光量是传统传感器的3倍以上，低光性能显著提高。它支持进阶360度全景、多轴光学防震、多影像组合等 功能。该机采用一体成型的铝合金机身，内置HTC Sense 5.0 UI，搭载Snapdragon 600四核处理器，整体性能相比骁龙S4 Pro提升了40%，而且具有更低的功耗。[3]\n</p>\n<p>\n	<br />\n</p>\n<hr style="page-break-after:always;" class="ke-pagebreak" />\n<p>\n	<span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HTC One赶在三星Galaxy S4和苹果iPhone 5S之前发布，400万像素UltraPixel相机堪称智能手机史上的一大创新。这枚1/3英寸BSI Ult raPixel全新摄像头拥有F/2.0光圈，进光量是传统传感器的3倍以上，低光性能显著提高。它支持进阶360度全景、多轴光学防震、多影像组合等 功能。该机采用一体成型的铝合金机身，内置HTC Sense 5.0 UI，搭载Snapdragon 600四核处理器，整体性能相比骁龙S4 Pro提升了40%，而且具有更低的功耗。[4]</span> \n</p>\n<p>\n	<span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[5]</span> \n</p>\n<p>\n	<span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[6]</span> \n</p>\n<p>\n	<span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[7]</span> \n</p>\n<hr style="page-break-after:always;" class="ke-pagebreak" />\n<p>\n	<span></span><span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[8]</span> \n</p>\n<p>\n	<span></span><span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[9]</span> \n</p>\n<p>\n	<span></span><span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[10]</span> \n</p>\n<p>\n	<span></span><span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[11]</span><span></span> \n</p>', 1366094517, 1366094517),
(10, '<p>\n	<span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;HTC执行长周永明表示：“人们总是希望能够以相片或歌曲来记录或纪念生活中最精彩与美好的当下， 而这样的消费者心声便是HTC One系列的设计原点与创意初衷。我们相信HTC One精湛的拍摄功能 与忠于原音的高音质效果将让使用者爱不释手，不仅是划时代的移动通信产品，更以前所未有的方式提供最佳的个人化使用体验。”</span> \n</p>\n<p style="text-align:center;">\n	<span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;"><img src="http://cosweb/images/news/newsDetail/news_big_1.jpg" alt="" /><br />\n</span> \n</p>\n<p>\n	<br />\n</p>\n<p>\n	<br />\n</p>\n<p style="font-family:STHeiti;font-size:medium;vertical-align:middle;text-indent:35px;background-color:#FFFFFF;">\n	HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[2]\n</p>\n<p style="font-family:STHeiti;font-size:medium;vertical-align:middle;text-indent:35px;background-color:#FFFFFF;">\n	HTC One赶在三星Galaxy S4和苹果iPhone 5S之前发布，400万像素UltraPixel相机堪称智能手机史上的一大创新。这枚1/3英寸BSI Ult raPixel全新摄像头拥有F/2.0光圈，进光量是传统传感器的3倍以上，低光性能显著提高。它支持进阶360度全景、多轴光学防震、多影像组合等 功能。该机采用一体成型的铝合金机身，内置HTC Sense 5.0 UI，搭载Snapdragon 600四核处理器，整体性能相比骁龙S4 Pro提升了40%，而且具有更低的功耗。[3]\n</p>\n<p>\n	<br />\n</p>\n<hr style="page-break-after:always;" class="ke-pagebreak" />\n<p>\n	<span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HTC One赶在三星Galaxy S4和苹果iPhone 5S之前发布，400万像素UltraPixel相机堪称智能手机史上的一大创新。这枚1/3英寸BSI Ult raPixel全新摄像头拥有F/2.0光圈，进光量是传统传感器的3倍以上，低光性能显著提高。它支持进阶360度全景、多轴光学防震、多影像组合等 功能。该机采用一体成型的铝合金机身，内置HTC Sense 5.0 UI，搭载Snapdragon 600四核处理器，整体性能相比骁龙S4 Pro提升了40%，而且具有更低的功耗。[4]</span> \n</p>\n<p>\n	<span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[5]</span> \n</p>\n<p>\n	<span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[6]</span> \n</p>\n<p>\n	<span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[7]</span> \n</p>\n<hr style="page-break-after:always;" class="ke-pagebreak" />\n<p>\n	<span></span><span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[8]</span> \n</p>\n<p>\n	<span></span><span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[9]</span> \n</p>\n<p>\n	<span></span><span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[10]</span> \n</p>\n<p>\n	<span></span><span style="font-family:STHeiti;font-size:medium;line-height:24px;background-color:#FFFFFF;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;HTC One系列提供最高质感的感官体验，整合最新的Android 4.0操作系统（ICS），以及全新HTC Sense 4.0 ，搭载ImageSense全新拍摄与影像提升功能，让HTC One产品系列于市场中一枝独秀。此外，HTC Sense 4.0不仅能提升音质，更让在移动设备上听音乐的操作更人性化、更简单。 北京时间2013年2月19日晚11点至20日凌晨1点，在英国伦敦和美国纽约两地正式发布了HTC One智能手机。这部手机采用高通骁龙Snapdragon 600四核处理器，并采用多种HTC的新技术。HTC One搭载最新的Android 4.1.2系统及Sense 5界面，采用BoomSound与HTC One前置立体声扬 声器搭配，并采用了Sense Voice通话降噪技术和独家的Ultrapixel传感器透光技术。极致炫酷的全铝制一体成型外壳；靓丽高清的主屏幕，汇 聚你所喜欢的一切；更有活灵活现动态照片库，独具匠心的双前置立体扬声器设计，薪HTC One以前所未有的姿态推翻您对智能手机的固有体验。[11]</span><span></span> \n</p>', 1366094743, 1366094743);

-- --------------------------------------------------------

--
-- Table structure for table `newsList`
--

CREATE TABLE IF NOT EXISTS `newsList` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '新闻id，自增',
  `title` varchar(30) NOT NULL COMMENT '新闻标题',
  `outline` varchar(255) NOT NULL COMMENT '新闻简介',
  `image_name` varchar(20) NOT NULL COMMENT '新闻关联小图片',
  `type` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0-最新消息,1-大会首页,2-开发者大赛新闻报道',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0-激活 1-屏蔽',
  `update_time` int(11) NOT NULL COMMENT '更新时间',
  `record_time` int(11) NOT NULL COMMENT '记录时间',
  PRIMARY KEY (`id`),
  KEY `title` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `newsList`
--

INSERT INTO `newsList` (`id`, `title`, `outline`, `image_name`, `type`, `status`, `update_time`, `record_time`) VALUES
(1, '9COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极', '9COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！9COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！9COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！', 'type_1_1.jpg', 0, 0, 1333333333, 1333333333),
(2, '8COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极', '8COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！8COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！8COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！', 'type_1_2.jpg', 0, 0, 1333333333, 1333333333),
(3, '7COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极', '7COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！7COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！7COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！', 'type_1_3.jpg', 0, 0, 1366009709, 1366009709),
(4, '6COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极', '6COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！6COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！6COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！', 'type_1_4.jpg', 0, 0, 1366009789, 1366009789),
(5, '5COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极', '5COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！5COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！5COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！', 'type_1_5.jpg', 0, 0, 1366009790, 1366009790),
(6, '4COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极', '4COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极4COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极4COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极', 'type_1_6.jpg', 0, 0, 1366009911, 1366009911),
(7, '3COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极', '3COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极3COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极3COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极', 'type_1_7.jpg', 0, 0, 1366009962, 1366009962),
(8, '2COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极', '2COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极2COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极2COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极', 'type_1_8.jpg', 0, 0, 1366010007, 1366010007),
(9, '就发生设计的菲拉斯飓风路径是否', '阿斯顿法师就发啦健身房就阿拉斯加的发生就废了；撒酒疯啊手机飞达拉斯加弗利萨即发即收啊手机发生纠纷拉手积分； 啊手机菲拉斯解放路撒娇的弗拉所肩负的啊手机的弗拉是京东方', 'type_3_1.jpg', 2, 0, 1366094517, 1366094517),
(10, '就发生设计的菲拉斯飓风路径是否', '阿斯顿法师就发啦健身房就阿拉斯加的发生就废了；撒酒疯啊手机飞达拉斯加弗利萨即发即收啊手机发生纠纷拉手积分； 啊手机菲拉斯解放路撒娇的弗拉所肩负的啊手机的弗拉是京东方', 'type_2_1.jpg', 1, 0, 1366094743, 1366094743);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(30) NOT NULL,
  `contact_name` varchar(20) NOT NULL COMMENT '主联系人，也是leader',
  `contact_email` varchar(50) NOT NULL COMMENT '联系人邮箱',
  `contact_phone` char(13) NOT NULL COMMENT '电话',
  `contact_company` varchar(20) DEFAULT NULL COMMENT '公司名',
  `user_id` int(11) NOT NULL COMMENT '当前登陆者id',
  `update_time` int(11) NOT NULL,
  `record_time` int(11) NOT NULL,
  PRIMARY KEY (`team_id`),
  KEY `team_name` (`team_name`,`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='队伍' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `contact_name`, `contact_email`, `contact_phone`, `contact_company`, `user_id`, `update_time`, `record_time`) VALUES
(1, 'wola', 'liang', 'liang@qq.com', '13761588052', 'dd', 12, 1366269901, 1366269901),
(2, 'haha', 'hahaliang', 'haha@qq.com', '1382848938', 'sss', 5, 1366342670, 1366342670),
(3, 'haha', 'hahaliang', 'haha@qq.com', '1382848938', 'sss', 5, 1366342746, 1366342746),
(4, 'ssf', 'dd', 'sadf@qq.com', '13456678897', NULL, 1, 1366360468, 1366360468),
(5, 'fff', 'ldd', 'sdf@qq.com', '13456678897', NULL, 2, 1366360605, 1366360605),
(6, 'sdvv', 'sdfd', 'sdfa@sdf.com', '13456678897', NULL, 3, 1366360777, 1366360777),
(7, 'sscc', 'sdd', 'sdfa@sdf.com', '13761556789', NULL, 4, 1366360887, 1366360887);

-- --------------------------------------------------------

--
-- Table structure for table `teamMember`
--

CREATE TABLE IF NOT EXISTS `teamMember` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(20) NOT NULL,
  `team_id` int(11) NOT NULL COMMENT '所属团队id',
  `member_email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `member_phone` int(11) DEFAULT NULL COMMENT '电话',
  `member_company` varchar(20) DEFAULT NULL COMMENT '公司',
  `update_time` int(11) NOT NULL,
  `record_time` int(11) NOT NULL,
  PRIMARY KEY (`member_id`),
  KEY `team_id` (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='队员表' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `teamMember`
--

INSERT INTO `teamMember` (`member_id`, `member_name`, `team_id`, `member_email`, `member_phone`, `member_company`, `update_time`, `record_time`) VALUES
(1, 'hh', 3, 'dd@qq.com', 1242353513, 'sssf', 1366343118, 1366343118),
(2, 'ddd', 3, 'ss@qq.com', 1124242342, 'sjgo;ajg', 1366343502, 1366343502),
(3, 'ddd', 3, 'ss@qq.com', 1124242342, 'sjgo;ajg', 1366343502, 1366343502),
(4, 'ddd', 3, '', 0, '', 1366343502, 1366343502);

-- --------------------------------------------------------

--
-- Table structure for table `teamWork`
--

CREATE TABLE IF NOT EXISTS `teamWork` (
  `work_id` int(11) NOT NULL AUTO_INCREMENT,
  `work_name` varchar(20) NOT NULL,
  `team_id` int(11) NOT NULL DEFAULT '0',
  `work_brief` varchar(50) NOT NULL,
  `work_detail` text,
  `work_fee` decimal(5,2) NOT NULL DEFAULT '0.00',
  `work_category` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `reward_category` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0-未获奖，1-积极参与奖  2-最佳设计奖 3-最佳体验奖 4-最佳创意奖 5-终极大奖',
  `update_time` int(11) NOT NULL DEFAULT '0',
  `record_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`work_id`),
  KEY `team_id` (`team_id`),
  KEY `reward_category` (`reward_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `teamWork`
--

INSERT INTO `teamWork` (`work_id`, `work_name`, `team_id`, `work_brief`, `work_detail`, `work_fee`, `work_category`, `reward_category`, `update_time`, `record_time`) VALUES
(1, 'Static', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(2, '起床啦', 0, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 0, 0, 1366097205, 1366097205),
(3, 'POP', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(4, 'Turnplay', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(5, 'Static', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(6, '起床啦', 0, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 0, 0, 1366097205, 1366097205),
(7, 'POP', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(8, 'Turnplay', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(9, 'Static', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(10, '起床啦', 0, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 0, 0, 1366097205, 1366097205),
(11, 'POP', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(12, 'Turnplay', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(13, 'Static', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(14, '起床啦', 0, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 0, 0, 1366097205, 1366097205),
(15, 'POP', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(16, 'Turnplay', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(17, 'Static', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(18, '起床啦', 0, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 0, 0, 1366097205, 1366097205),
(19, 'POP', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(20, 'Turnplay', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(21, 'Static', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(22, '起床啦', 0, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 0, 0, 1366097205, 1366097205),
(23, 'POP', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(24, 'Turnplay', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(25, 'Static', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(26, '起床啦', 0, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 0, 0, 1366097205, 1366097205),
(27, 'POP', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(28, 'Turnplay', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(29, 'Static', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(30, '起床啦', 0, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 0, 0, 1366097205, 1366097205),
(31, 'POP', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205),
(32, 'Turnplay', 100, '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的', '静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类， 每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好 处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内 存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类 对象的利息全改变过来了；', '0.00', 100, 10, 1366097205, 1366097205);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `passwd` char(32) NOT NULL,
  `question_id` tinyint(3) DEFAULT '0',
  `answer` varchar(30) DEFAULT NULL,
  `birthday` int(11) DEFAULT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `contact_type` tinyint(2) NOT NULL DEFAULT '0',
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL,
  `record_time` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `passwd`, `question_id`, `answer`, `birthday`, `first_name`, `last_name`, `language`, `contact_type`, `status`, `update_time`, `record_time`) VALUES
(1, 'zhongyuan@qq.com', '1', 0, NULL, NULL, 'liang', NULL, NULL, 0, 0, 133333333, 133333333),
(2, 'dfasf@qq.com', '96e79218965eb72c92a549dd5a330112', 0, '', 0, '111', '111', 'zh-cn', 100, 0, 1365991680, 1365991680),
(3, 'liang@qq.com', '96e79218965eb72c92a549dd5a330112', 0, '', 0, '1111', '1111', 'zh-cn', 100, 0, 1365992893, 1365992893),
(4, 'woqu@qq.com', '96e79218965eb72c92a549dd5a330112', 0, '', 0, '11', '11', 'zh-cn', 100, 0, 1365993247, 1365993247),
(5, 'wula@qq.com', '96e79218965eb72c92a549dd5a330112', 0, '', 0, 'ff', 'ff', 'zh-cn', 100, 0, 1365993309, 1365993309),
(6, 'wuwu@qq.com', '96e79218965eb72c92a549dd5a330112', 0, '', 0, 'liang', 'liang', 'zh-cn', 100, 0, 1365995173, 1365995173);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
