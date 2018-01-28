CREATE DATABASE rpg;

CREATE TABLE IF NOT EXISTS rpg.characters(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    class VARCHAR(30) NOT NULL,
    race VARCHAR(30) NOT NULL,
    gender CHAR(1) NOT NULL,
    strength INT(3) NOT NULL,
    dexterity INT(3) NOT NULL,
    intelligence INT(3) NOT NULL,
    wisdom INT(3) NOT NULL,
    charisma INT(3) NOT NULL,
    luck INT(3) NOT NULL,
    userid INT NOT NULL
);

CREATE TABLE IF NOT EXISTS rpg.characters_test(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30),
    class VARCHAR(30),
    race VARCHAR(30),
    gender CHAR(1),
    strength INT(3),
    dexterity INT(3),
    intelligence INT(3),
    wisdom INT(3),
    charisma INT(3),
    luck INT(3),
    userid INT
);

CREATE TABLE IF NOT EXISTS rpg.users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE USER 'db_user'@'localhost' IDENTIFIED BY 'Tere12345';
GRANT SELECT,INSERT,DELETE,UPDATE ON rpg.* TO 'db_user'@'localhost';