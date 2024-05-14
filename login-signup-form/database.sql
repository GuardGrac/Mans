CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(128) NOT NULL,
 `email` varchar(128) NOT NULL,
 `password` varchar(1024) NOT NULL,
 PRIMARY KEY (`id`)
 );