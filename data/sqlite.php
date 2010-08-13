<?php

// Data for SQLite databases
return array
(
	"DROP TABLE IF EXISTS authors;",
	
	"CREATE TABLE authors (
	  id INTEGER PRIMARY KEY,
	  name TEXT NULL,
	  password TEXT NULL,
	  email TEXT NULL,
	  role_id INTEGER NOT NULL
	);",
	
	"INSERT INTO authors (id,name,email,role_id)
	VALUES (1,'Jonathan Geiger','jonathan@jonathan-geiger.com',1);",
	
	"DROP TABLE IF EXISTS categories;",

	"CREATE TABLE categories (
	  id INTEGER PRIMARY KEY,
	  name TEXT NOT NULL,
	  parent_id INTEGER NOT NULL
	);",

	"INSERT INTO categories (id,name,parent_id)
	VALUES (1,'Category One',0);",

	"INSERT INTO categories (id,name,parent_id)
	VALUES (2,'Category Two',0);",

	"INSERT INTO categories (id,name,parent_id)
	VALUES (3,'Category Three',1);",

	"DROP TABLE IF EXISTS categories_posts;",

	"CREATE TABLE categories_posts (
	  category_id INTEGER NOT NULL,
	  post_id INTEGER NOT NULL
	);",

	"INSERT INTO categories_posts (category_id,post_id)
	VALUES (1,1);",

	"INSERT INTO categories_posts (category_id,post_id)
	VALUES (2,1);",

	"INSERT INTO categories_posts (category_id,post_id)
	VALUES (3,1);",

	"INSERT INTO categories_posts (category_id,post_id)
	VALUES (2,2);",

	"INSERT INTO categories_posts (category_id,post_id)
	VALUES (1,3);",

	"INSERT INTO categories_posts (category_id,post_id)
	VALUES (2,3);",

	"DROP TABLE IF EXISTS posts;",

	"CREATE TABLE posts (
	  id INTEGER PRIMARY KEY,
	  name TEXT NULL,
	  slug TEXT NULL,
	  status TEXT NULL,
	  created INTEGER NULL,
	  updated INTEGER NULL,
	  published INTEGER NULL,
	  author_id INTEGER NULL,
	  approved_by INTEGER NULL
	);",

	"INSERT INTO posts (id,name,slug,status,created,updated,published,author_id,approved_by)
	VALUES (NULL,'First Post','first-post','draft',1264985737,1264985737,1264985737,1,NULL);",

	"INSERT INTO posts (id,name,slug,status,created,updated,published,author_id,approved_by)
	VALUES (NULL,'Second Post','second-post','review',1264985737,1264985737,1264985737,1,1);",

	"DROP TABLE IF EXISTS roles;",

	"CREATE TABLE roles (
	  id INTEGER PRIMARY KEY,
	  name TEXT NOT NULL
	);",

	"INSERT INTO roles (id,name)
	VALUES (1,'Staff');",

	"INSERT INTO roles (id,name)
	VALUES (2,'Freelancer');",
	
	// Filterable Jelly test data.
	
	// "DROP TABLE IF EXISTS libraries;",
	// 
	// "CREATE TABLE libraries (
	//   id INTEGER PRIMARY KEY,
	//   name TEXT NULL
	// );",
	// 
	// "INSERT INTO libraries (id, name)
	// VALUES (NULL, 'Library One');",
	// 
	// "INSERT INTO libraries (id, name)
	// VALUES (NULL, 'Library Two');",
	
	"DROP TABLE IF EXISTS members",
	
	"CREATE TABLE members (
		id INTEGER PRIMARY KEY,
		name TEXT NULL
	);",
	
	"INSERT INTO members (id, name)
	VALUES (NULL, 'Bob');",
	
	"INSERT INTO members (id, name)
	VALUES (NULL, 'Joe');",
	
	"DROP TABLE IF EXISTS books",
	
	"CREATE TABLE books (
		id INTEGER PRIMARY KEY,
		name TEXT NULL
	);",
	
	"INSERT INTO books (id, name)
	VALUES (NULL, 'Book One');",
	
	"INSERT INTO books (id, name)
	VALUES (NULL, 'Book Two');",

	"INSERT INTO books (id, name)
	VALUES (NULL, 'Book Three');",
	
	"DROP TABLE IF EXISTS loans",
	
	"CREATE TABLE loans (
		id INTEGER PRIMARY KEY,
		book_id INTEGER,
		member_id INTEGER,
		issued INTEGER,
		due INTEGER,
		returned INTEGER NULL
	);",
	
	"INSERT INTO loans (id, book_id, member_id, issued, due, returned)
	VALUES (NULL, 1, 1, ". strtotime('10 days ago') .', '. strtotime('yesterday') .', '. strtotime('5 days ago') .");",

	"INSERT INTO loans (id, book_id, member_id, issued, due, returned)
	VALUES (NULL, 1, 2, ". strtotime('yesterday') .', '. strtotime('tomorrow') .", NULL);",
	
	"INSERT INTO loans (id, book_id, member_id, issued, due, returned)
	VALUES (NULL, 2, 2, ". strtotime('2 days ago') .', '. strtotime('yesterday') .", NULL);",

	"INSERT INTO loans (id, book_id, member_id, issued, due, returned)
	VALUES (NULL, 3, 2, ". strtotime('3 days ago') .', '. strtotime('2 days ago') .', '. strtotime('1 day ago') .");",
	
);