<?php

// Data for SQLite databases
return array
(
	"DROP TABLE IF EXISTS test_authors;",
	
	"CREATE TABLE test_authors (
	  id INTEGER PRIMARY KEY,
	  name TEXT NOT NULL,
	  password TEXT NOT NULL,
	  email TEXT NOT NULL,
	  test_role_id INTEGER NOT NULL
	);",
	
	"INSERT INTO test_authors (id,name,email,password,test_role_id)
	VALUES (1,'Jonathan Geiger','jonathan@jonathan-geiger.com','',1);",
	
	"INSERT INTO test_authors (id,name,email,password,test_role_id)
	VALUES (2,'Paul Banks','paul@banks.com','',0);",
	
	"INSERT INTO test_authors (id,name,email,password,test_role_id)
	VALUES (3,'Bobby Tables','bobby@sql-injection.com','',2);",
	
	"DROP TABLE IF EXISTS test_categories;",

	"CREATE TABLE test_categories (
	  id INTEGER PRIMARY KEY,
	  name TEXT NOT NULL,
	  parent_id INTEGER NOT NULL
	);",

	"INSERT INTO test_categories (id,name,parent_id)
	VALUES (1,'Category One',0);",

	"INSERT INTO test_categories (id,name,parent_id)
	VALUES (2,'Category Two',0);",

	"INSERT INTO test_categories (id,name,parent_id)
	VALUES (3,'Category Three',1);",

	"DROP TABLE IF EXISTS test_categories_test_posts;",

	"CREATE TABLE test_categories_test_posts (
	  test_category_id INTEGER NOT NULL,
	  test_post_id INTEGER NOT NULL
	);",

	"INSERT INTO test_categories_test_posts (test_category_id,test_post_id)
	VALUES (1,1);",

	"INSERT INTO test_categories_test_posts (test_category_id,test_post_id)
	VALUES (2,1);",

	"INSERT INTO test_categories_test_posts (test_category_id,test_post_id)
	VALUES (3,1);",

	"INSERT INTO test_categories_test_posts (test_category_id,test_post_id)
	VALUES (2,2);",

	"INSERT INTO test_categories_test_posts (test_category_id,test_post_id)
	VALUES (1,3);",

	"INSERT INTO test_categories_test_posts (test_category_id,test_post_id)
	VALUES (2,3);",

	"DROP TABLE IF EXISTS test_posts;",

	"CREATE TABLE test_posts (
	  id INTEGER PRIMARY KEY,
	  name TEXT NULL,
	  slug TEXT NULL,
	  status TEXT NULL,
	  created INTEGER NULL,
	  updated INTEGER NULL,
	  published INTEGER NULL,
	  test_author_id INTEGER NULL,
	  approved_by INTEGER NULL
	);",

	"INSERT INTO test_posts (id,name,slug,status,created,updated,published,test_author_id,approved_by)
	VALUES (NULL,'First Post','first-post','draft',1264985737,1264985737,1264985737,1,NULL);",

	"INSERT INTO test_posts (id,name,slug,status,created,updated,published,test_author_id,approved_by)
	VALUES (NULL,'Second Post','second-post','review',1264985737,1264985737,1264985737,1,1);",

	"DROP TABLE IF EXISTS test_roles;",

	"CREATE TABLE test_roles (
	  id INTEGER PRIMARY KEY,
	  name TEXT NOT NULL
	);",

	"INSERT INTO test_roles (id,name)
	VALUES (1,'Staff');",

	"INSERT INTO test_roles (id,name)
	VALUES (2,'Freelancer');",
);