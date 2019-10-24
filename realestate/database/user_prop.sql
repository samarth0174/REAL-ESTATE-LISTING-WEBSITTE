CREATE TABLE IF NOT EXISTS `user_prop` (
  `id_property` int(5) NOT NULL AUTO_INCREMENT,
  
  `name` varchar(26) NOT NULL,
  `email` varchar(26) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `name_property` varchar(250) NOT NULL,
  `type_property` varchar(255) NOT NULL,
  `add1` varchar(300) NOT NULL,
  `add2` varchar(300) NOT NULL,
  `price` varchar(300) NOT NULL,
  `price_type` varchar(300) NOT NULL,
  `land_area` varchar(300) NOT NULL,
  `groos_floor_area` varchar(300) NOT NULL,
  `leasehold` varchar(300) NOT NULL,
  `beds` varchar(333) NOT NULL,
  `baths` varchar(333) NOT NULL,
  `per_squre_feet` varchar(333) NOT NULL,
  `squre_feet` varchar(333) NOT NULL,
  `text` varchar(30000) NOT NULL,
  PRIMARY KEY (`id_property`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;
