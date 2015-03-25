-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-03-19 01:58:53
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `herotv`
--

-- --------------------------------------------------------

--
-- 表的结构 `hero_admin_groups`
--

CREATE TABLE IF NOT EXISTS `hero_admin_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户id',
  `groupname` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `hero_admin_groups`
--

INSERT INTO `hero_admin_groups` (`id`, `uid`, `groupname`, `route`, `created_at`, `updated_at`) VALUES
(1, '1', '管理员', '1,2,3,4,5,6,16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '2', '测试用户组', '1,3,4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `hero_admin_routes`
--

CREATE TABLE IF NOT EXISTS `hero_admin_routes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `routename` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '节点名称',
  `routesurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '路由的地址',
  `fid` int(5) NOT NULL COMMENT '路由的fid',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `hero_admin_routes`
--

INSERT INTO `hero_admin_routes` (`id`, `routename`, `routesurl`, `fid`, `created_at`, `updated_at`) VALUES
(1, '后台用户管理', 'admins', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '用户管理', 'users', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '系统设置', 'system', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '常规', 'index', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '权限管理', 'auth', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '菜单管理', 'auth', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '用户组管理', 'group', 5, '2015-03-19 06:56:29', '2015-03-19 06:56:29');

-- --------------------------------------------------------

--
-- 表的结构 `hero_admin_users`
--

CREATE TABLE IF NOT EXISTS `hero_admin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `groupid` bigint(20) NOT NULL,
  `nikename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(80) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `hero_admin_users`
--

INSERT INTO `hero_admin_users` (`id`, `groupid`, `nikename`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, '王玉松', 'wangyusong', '$2y$10$DKWk3aOrc40lGkhf7EuycuWe520gk8AHkVHUdPMv02.C1AQR.1Ypa', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, '测试账号', 'admin', '$2y$10$DKWk3aOrc40lGkhf7EuycuWe520gk8AHkVHUdPMv02.C1AQR.1Ypa', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `hero_migrations`
--

CREATE TABLE IF NOT EXISTS `hero_migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `hero_migrations`
--

INSERT INTO `hero_migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_03_16_175910_create_admin_users_table', 1),
('2015_03_16_181049_create_admin_groups_table', 2),
('2015_03_16_181057_create_admin_routes_table', 2);

-- --------------------------------------------------------

--
-- 表的结构 `hero_password_resets`
--

CREATE TABLE IF NOT EXISTS `hero_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `hero_users`
--

CREATE TABLE IF NOT EXISTS `hero_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
