-- database
CREATE SCHEMA IF NOT EXISTS `ssvdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ;
USE `ssvdb`;

-----------************* table declarations START ****************--------------

-- demo table
CREATE TABLE IF NOT EXISTS demo (
  id BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(255)
  );








-----------************* table declarations END ****************--------------

-- ALL PRIVILEGES to user ssv
GRANT ALL PRIVILEGES ON ssvdb.* TO 'ssv'@'%';
FLUSH PRIVILEGES;
