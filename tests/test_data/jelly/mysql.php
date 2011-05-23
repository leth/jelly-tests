<?php

// Data for MySQL databases
return array
(
	"DROP TABLE IF EXISTS `test_authors`;",

	"CREATE TABLE `test_authors` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `name` varchar(255) NOT NULL,
	  `password` varchar(255) NOT NULL,
	  `email` varchar(255) NOT NULL,
	  `test_role_id` int(11) NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;",

	"INSERT INTO `test_authors` (`id`,`name`,`email`,`password`,`test_role_id`)
	VALUES
		(1,'Jonathan Geiger','jonathan@jonathan-geiger.com','',1),
		(2,'Paul Banks','paul@banks.com','',0),
		(3,'Bobby Tables','bobby@sql-injection.com','',2);",

	"DROP TABLE IF EXISTS `test_categories`;",

	"CREATE TABLE `test_categories` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `name` varchar(255) NOT NULL,
	  `parent_id` int(11) NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;",

	"INSERT INTO `test_categories` (`id`,`name`,`parent_id`)
	VALUES
		(1,'Category One',0),
		(2,'Category Two',0),
		(3,'Category Three',1);",

	"DROP TABLE IF EXISTS `test_categories_test_posts`;",

	"CREATE TABLE `test_categories_test_posts` (
	  `test_category_id` int(11) NOT NULL,
	  `test_post_id` int(11) NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;",

	"INSERT INTO `test_categories_test_posts` (`test_category_id`,`test_post_id`)
	VALUES
		(1,1),
		(2,1),
		(3,1),
		(2,2),
		(1,3),
		(2,3);",

	"DROP TABLE IF EXISTS `test_posts`;",

	"CREATE TABLE `test_posts` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `name` varchar(255) NOT NULL,
	  `slug` varchar(255) NOT NULL,
	  `status` enum('published','draft','review') NOT NULL,
	  `created` int(11) DEFAULT NULL,
	  `updated` int(11) DEFAULT NULL,
	  `published` int(11) DEFAULT NULL,
	  `test_author_id` int(11) DEFAULT NULL,
	  `approved_by` int(11) DEFAULT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;",

	"INSERT INTO `test_posts` (`id`,`name`,`slug`,`status`,`created`,`updated`,`published`,`test_author_id`,`approved_by`)
	VALUES
		(1,'First Post','first-post','draft',1264985737,1264985737,1264985737,1,NULL),
		(2,'Second Post','second-post','review',1264985737,1264985737,1264985737,1,1);",

	"DROP TABLE IF EXISTS `test_roles`;",

	"CREATE TABLE `test_roles` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `name` varchar(32) NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;",

	"INSERT INTO `test_roles` (`id`,`name`)
	VALUES
		(1,'Staff'),
		(2,'Freelancer');",
);