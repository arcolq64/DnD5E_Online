--
-- Table structure for table `facebook_connect`
--

CREATE TABLE IF NOT EXISTS `facebook_connect` (
	`id` int(11),
	`app_id` varchar(100),
	`secret` varchar(100),
	`user_id` varchar(100),
	`access_token` text,
	`facebook_page` varchar(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `facebook_connect` (`id`, `app_id`, `secret`, `user_id`, `access_token`, `facebook_page`) VALUES
(1, '', '', '', '', '');

-- ------------------------------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`password` char(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`salt` char(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`role` int(11) NOT NULL,
	`state` tinyint(3) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`),
	UNIQUE KEY `username` (`username`),
	UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `salt`, `email`, `role`, `state`) VALUES
(1, 'Admin', 'admin', 'fd7e8a4c36e88f882e1a3db5ef3b14f1e1a0b0a7a12b660f70f2bda389c94355', '32adb74318e6e57f', 'admin@gmail.com', 1, 1);