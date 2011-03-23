<?php

return array(
	
	"DROP TABLE IF EXISTS test_authors;",

	"CREATE TABLE test_authors (
	  id serial,
	  name varchar(255) NOT NULL,
	  password varchar(255) NOT NULL,
	  email varchar(255) NOT NULL,
	  test_role_id bigint NOT NULL,
	  PRIMARY KEY (id)
	);",

	"INSERT INTO test_authors (id,name,email,password,test_role_id)
	VALUES
		(1,'Jonathan Geiger','jonathan@jonathan-geiger.com','',1)
		(2,'Paul Banks','paul@banks.com','',0);
		(3,'Bobby Tables','bobby@sql-injection.com','',2);",
		
	"SELECT setval('test_authors_id_seq', (select max(id) + 1 from test_authors));",

	"DROP TABLE IF EXISTS test_categories;",

	"CREATE TABLE test_categories (
	  id serial,
	  name varchar(255) NOT NULL,
	  parent_id bigint NOT NULL,
	  PRIMARY KEY (id)
	);",

	"INSERT INTO test_categories (id,name,parent_id)
	VALUES
		(1,'Category One',0),
		(2,'Category Two',0),
		(3,'Category Three',1);",
		
	"SELECT setval('test_categories_id_seq', (select max(id) + 1 from test_categories));",
	
	"DROP TABLE IF EXISTS test_categories_test_posts;",

	"CREATE TABLE test_categories_test_posts (
	  test_category_id bigint NOT NULL,
	  test_post_id bigint NOT NULL
	);",

	"INSERT INTO test_categories_test_posts (test_category_id,test_post_id)
	VALUES
		(1,1),
		(2,1),
		(3,1),
		(2,2),
		(1,3),
		(2,3);",

	"DROP TABLE IF EXISTS test_posts;",

	"CREATE TABLE test_posts (
	  id serial,
	  name varchar(255) NULL,
	  slug varchar(255) NULL,
	  status varchar(255) NULL,
	  created bigint DEFAULT NULL,
	  updated bigint DEFAULT NULL,
	  published bigint DEFAULT NULL,
	  test_author_id bigint DEFAULT NULL,
	  approved_by bigint NULL,
	  PRIMARY KEY (id),
	  CHECK (status IN ('draft', 'review', 'published'))
	);",

	"INSERT INTO test_posts (id,name,slug,status,created,updated,published,test_author_id,approved_by)
	VALUES
		(1,'First Post','first-post','draft',1264985737,1264985737,1264985737,1,NULL),
		(2,'Second Post','second-post','review',1264985737,1264985737,1264985737,1,1);",

	"SELECT setval('test_posts_id_seq', (select max(id) + 1 from test_posts));",

	"DROP TABLE IF EXISTS test_roles;",

	"CREATE TABLE test_roles (
	  id serial,
	  name varchar(255) NOT NULL,
	  PRIMARY KEY (id)
	);",

	"INSERT INTO test_roles (id,name)
	VALUES
		(1,'Staff'),
		(2,'Freelancer');",
		
	"SELECT setval('test_roles_id_seq', (select max(id) + 1 from test_roles));",
);