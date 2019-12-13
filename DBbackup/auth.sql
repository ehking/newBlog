-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `auth`;
CREATE DATABASE `auth` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `auth`;

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `dispaly_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `des` text COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `permissions` (`id`, `name`, `dispaly_name`, `des`) VALUES
(1,	'create_post',	'ایجاد پست',	'صثیبزصثبصب'),
(2,	'delete_post',	'پاگ گردن پست',	'صنثپیمصثپبصثپ'),
(3,	'add_permission',	'add permission',	'eefer'),
(4,	'edit_permission',	'edit permission',	'edit_permissione'),
(5,	'del_permission',	'del permission',	'del_ permission'),
(6,	'view_roles',	'view_roles',	'view_rolesview_rolesview_rolesview_roles'),
(7,	'add_roles',	'view_rolesview_rolesview_roles',	'view_rolesview_rolesview_roles'),
(8,	'edit_roles',	'edit_roles',	'edit_rolesedit_rolesedit_roles'),
(9,	'del_roles',	'del_roles',	'del_rolesdel_rolesdel_rolesdel_roles'),
(10,	'test212',	'test212',	'test212test212test212'),
(11,	'wecfwe',	'test212sef',	'test212edf'),
(12,	'wfwe',	'wedfwe',	'wefw'),
(13,	'view_permission',	'view_permission',	'view_permission')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`), `dispaly_name` = VALUES(`dispaly_name`), `des` = VALUES(`des`);

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  KEY `permission_id` (`permission_id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `permission_role_ibfk_1` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  CONSTRAINT `permission_role_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1,	1),
(2,	1),
(6,	1),
(7,	1),
(8,	1),
(9,	1),
(4,	1),
(4,	2),
(2,	2),
(3,	2),
(1,	4),
(2,	4),
(3,	4),
(4,	4),
(7,	4),
(2,	11),
(3,	11),
(13,	1)
ON DUPLICATE KEY UPDATE `permission_id` = VALUES(`permission_id`), `role_id` = VALUES(`role_id`);

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `display_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Des` text COLLATE utf8_bin DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `roles` (`id`, `name`, `display_name`, `Des`, `type`, `status`) VALUES
(1,	'tets1',	'test',	'we;flmwe;lfmw;emf;mwefwe',	NULL,	1),
(2,	'df',	'wedfwef',	'we',	NULL,	0),
(3,	'we',	'wed',	'we',	NULL,	0),
(4,	't',	'wedncf',	'srfserferferf',	NULL,	0),
(9,	'qwd',	'qwd',	'qwd',	NULL,	1),
(11,	'test2',	'qwd',	'qwd',	NULL,	1)
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`), `display_name` = VALUES(`display_name`), `Des` = VALUES(`Des`), `type` = VALUES(`type`), `status` = VALUES(`status`);

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `role_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `role_user_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1,	1),
(1,	2)
ON DUPLICATE KEY UPDATE `user_id` = VALUES(`user_id`), `role_id` = VALUES(`role_id`);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `full_name` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `phone_number` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `users` (`id`, `user_name`, `full_name`, `phone_number`, `email`, `password`) VALUES
(1,	'ehsan',	'ehsanbaghbanan',	'324',	'`we3d',	'12345')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `user_name` = VALUES(`user_name`), `full_name` = VALUES(`full_name`), `phone_number` = VALUES(`phone_number`), `email` = VALUES(`email`), `password` = VALUES(`password`);

-- 2019-12-13 15:58:34
