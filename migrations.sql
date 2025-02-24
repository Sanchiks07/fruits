-- 0.
DROP DATABASE IF EXISTS fruits;

-- 1. izveidot datubāzi
CREATE DATABASE fruits;

-- 2. izmantot datubāzi
USE fruits;

-- 3. iezveidot tabulu
CREATE TABLE fruits (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(5200)
);

-- 4. ielikt saturu post tabulā
INSERT INTO fruits
(name)
VALUES
("Ābols"),
("Apelsīns"),
("Banāns");

SELECT * FROM fruits;