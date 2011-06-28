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
	
	// Filterable Jelly test data.
	
	// "DROP TABLE IF EXISTS libraries;",
	// 
	// "CREATE TABLE test_libraries (
	//   id INTEGER PRIMARY KEY,
	//   name TEXT NULL
	// );",
	// 
	// "INSERT INTO test_libraries (id, name)
	// VALUES (NULL, 'Library One');",
	// 
	// "INSERT INTO test_libraries (id, name)
	// VALUES (NULL, 'Library Two');",
	
	"DROP TABLE IF EXISTS members",
	
	"CREATE TABLE test_members (
		id INTEGER PRIMARY KEY,
		name TEXT NULL
	);",
	
	"INSERT INTO test_members (id, name)
	VALUES (NULL, 'Bob');",
	
	"INSERT INTO test_members (id, name)
	VALUES (NULL, 'Joe');",

	"INSERT INTO test_members (id, name)
	VALUES (NULL, 'Jim');",
	
	"DROP TABLE IF EXISTS books",
	
	"CREATE TABLE test_books (
		id INTEGER PRIMARY KEY,
		name TEXT NULL
	);",
	
	"INSERT INTO test_books (id, name)
	VALUES (NULL, 'Book One');",
	
	"INSERT INTO test_books (id, name)
	VALUES (NULL, 'Book Two');",
	
	"INSERT INTO test_books (id, name)
	VALUES (NULL, 'Book Three');",

	"INSERT INTO test_books (id, name)
	VALUES (NULL, 'Book Four');",

	"DROP TABLE IF EXISTS loans",
	
	"CREATE TABLE test_loans (
		id INTEGER PRIMARY KEY,
		test_book_id INTEGER,
		test_member_id INTEGER,
		issued INTEGER,
		due INTEGER,
		returned INTEGER NULL
	);",
	
	"INSERT INTO test_loans (id, test_book_id, test_member_id, issued, due, returned)
	VALUES (NULL, 1, 1, ". strtotime('10 days ago') .', '. strtotime('yesterday') .', '. strtotime('5 days ago') .");",
	
	"INSERT INTO test_loans (id, test_book_id, test_member_id, issued, due, returned)
	VALUES (NULL, 1, 2, ". strtotime('yesterday') .', '. strtotime('tomorrow') .", NULL);",
	
	"INSERT INTO test_loans (id, test_book_id, test_member_id, issued, due, returned)
	VALUES (NULL, 2, 2, ". strtotime('2 days ago') .', '. strtotime('yesterday') .", NULL);",
	
	"INSERT INTO test_loans (id, test_book_id, test_member_id, issued, due, returned)
	VALUES (NULL, 3, 2, ". strtotime('3 days ago') .', '. strtotime('2 days ago') .', '. strtotime('1 day ago') .");",

	"INSERT INTO test_loans (id, test_book_id, test_member_id, issued, due, returned)
	VALUES (NULL, 3, 3, ". strtotime('1 day ago') .', '. strtotime('tomorrow') .', NULL);',

	"CREATE TABLE test_books_test_members (
		id INTEGER PRIMARY KEY,
		test_book_id INTEGER,
		test_member_id INTEGER,
		issued INTEGER,
		due INTEGER,
		returned INTEGER NULL
	);",

	"INSERT INTO test_books_test_members SELECT * FROM test_loans;",
);