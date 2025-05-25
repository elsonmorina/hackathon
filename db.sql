CREATE TABLE `users`(
	`id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) NOT NULL,
    `surname` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `country` varchar(255) NOT NULL,
    `amount` int(1000) NOT NULL,
    `credit_card`int(255) NOT NULL
);
