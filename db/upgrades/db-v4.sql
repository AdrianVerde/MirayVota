ALTER TABLE `Parties`
  DROP `votes`,
  DROP `votesObtained`,
  DROP `deputies`,
  DROP `senators`;

CREATE TABLE IF NOT EXISTS `Elections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `description` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ElectionResults` (
  `electionsId` int(11) NOT NULL,
  `partyId` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  PRIMARY KEY (`electionsId`, `partyId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

ALTER TABLE `Lists`
  ADD `electionsId` int(11);