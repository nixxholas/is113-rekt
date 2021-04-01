CREATE DATABASE IF NOT EXISTS `week12` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `week11`;

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(256) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

