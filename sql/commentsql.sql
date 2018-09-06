-- create the database and use it
CREATE DATABASE IF NOT EXISTS anaxdb;


-- skapaar en avändare med lösenord pass
GRANT ALL ON anaxdb.* TO admin@localhost IDENTIFIED BY "anax";

USE anaxdb;

DROP TABLE IF EXISTS Comment2;

SET NAMES utf8;

--
-- Table Comment
--

CREATE TABLE Comment2 (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `title` VARCHAR(80),
    `content` VARCHAR(455) NOT NULL,
    `userMail` VARCHAR(80) NOT NULL,
    `userId` INTEGER

) ENGINE INNODB CHARACTER SET utf8 COLLATE utf8_swedish_ci;

INSERT INTO `Comment2` (`title`, `content`, `userMail`, `userId`) VALUES
	("ForTest", "test", "admin@hotmail.com", "1");


SELECT * FROM Comment2;
