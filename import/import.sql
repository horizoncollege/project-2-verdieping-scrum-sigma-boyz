DROP DATABASE IF EXISTS project_pastebin;
CREATE DATABASE project_pastebin;

USE project_pastebin;

CREATE TABLE code_table (
code_id int AUTO_INCREMENT PRIMARY KEY,
code_author varchar(15) NOT NULL,
code_title varchar(30) NOT NULL,
code_function LONGTEXT NOT NULL,
code LONGTEXT NOT NULL
) 
AUTO_INCREMENT=1000;

INSERT INTO code_table ( code_author, code_title, code_function, code)
VALUES
( 'fred', 'free robux', 'make free robux', '<?php echo uniqid(); ?> dit word gebruikt om code_id te maken in de php file'),
( 'henkie spenkie', 'Ram downloader', 'Increase your ram', '<?php get password; echo: "hacked lol" ?> ')