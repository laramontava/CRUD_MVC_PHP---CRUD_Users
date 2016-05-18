CREATE DATABASE IF NOT EXISTS `usersapp`;
USE `usersapp`;

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `dni` varchar(10) CHARACTER SET latin1 NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `surname` varchar(100) CHARACTER SET latin1 NOT NULL,
  `date_birthday` varchar(20) CHARACTER SET latin1 NOT NULL,
  `sexo` varchar(10) CHARACTER SET latin1 NOT NULL,
  `mobile` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `user` varchar(45) CHARACTER SET latin1 NOT NULL,
  `pass` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`dni`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;