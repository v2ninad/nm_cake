
CREATE TABLE `cake_sessions` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `data` text,
  `expires` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
ALTER TABLE  `setups` ADD PRIMARY KEY (  `fieldname` );
ALTER TABLE  `members` CHANGE  `product`  `product` INT( 11 ) NULL DEFAULT NULL;
