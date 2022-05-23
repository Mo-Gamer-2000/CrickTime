CREATE DATABASE CrickTimeDB;

CREATE USER 'Admin'@'localhost' IDENTIFIED BY 'qwerty';
CREATE USER 'Admin'@'127.0.0.1' IDENTIFIED BY 'qwerty';

GRANT ALL ON CrickTimeDB.* TO 'Admin'@'localhost';
GRANT ALL ON CrickTimeDB.* TO 'Admin'@'127.0.0.1';


USE CrickTimeDB; 

CREATE TABLE members (
     id INTEGER NOT NULL 
     AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(128),
     email VARCHAR(128),
     password VARCHAR(128),
     INDEX(email)
) ENGINE=InnoDB CHARSET=utf8;

INSERT INTO members (name,email,password,image,image_text) VALUES ('Admin','Admin@gmail.com','Admin');