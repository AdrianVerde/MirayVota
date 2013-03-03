CREATE TABLE IF NOT EXISTS `Candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listId` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partyId` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Parties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `logo` varchar(512) NOT NULL,
  `foundation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Promises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `promiseDate` date NOT NULL,
  `description` varchar(256) NOT NULL,
  `promiseSource` varchar(512) NOT NULL,
  `status` enum('pending','accomplished','broken') NOT NULL,
  `resolutionDate` date NOT NULL,
  `resolutionSource` varchar(512) NOT NULL,
  `partyId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partyId` int(11) NOT NULL,
  `description` varchar(512) NOT NULL,
  `position` enum('favorable','opposed','unclear') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
