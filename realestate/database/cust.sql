
CREATE TABLE IF NOT EXISTS `customer` (
  `id_property` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `mobile_phone` varchar(11) NOT NULL,
  `cus_email` varchar(11) NOT NULL,
  `reason` varchar(333) NOT NULL,
  PRIMARY KEY (`id_property`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

