#19/09/19
DROP TABLE IF EXISTS `user_details_model`;
CREATE TABLE `user_details_model` (
  `ud_id` int(11) NOT NULL,
  `ud_userid` int(11) NOT NULL,
  `ud_address` varchar(255) DEFAULT NULL,
  `ud_phone` varchar(50) DEFAULT NULL,
  `ud_education` varchar(255) DEFAULT NULL,
  `ud_occupation` varchar(255) DEFAULT NULL,
  `ud_companyname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `user_details_model`
  ADD PRIMARY KEY (`ud_id`);
  ALTER TABLE `user_details_model`
  MODIFY `ud_id` int(11) NOT NULL AUTO_INCREMENT;

#25/06/19

ALTER TABLE `user_model` ADD `is_active` INT(11) NOT NULL DEFAULT '0' AFTER `password`;

#21/06/19
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(250) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);
  ALTER TABLE `ci_sessions` CHANGE `session_id` `session_id` INT(40) NOT NULL AUTO_INCREMENT;

CREATE TABLE `user_model` (
  `userid` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `usertype` int(10) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`userid`)
);

INSERT INTO `user_model` (`userid`, `firstname`, `lastname`, `email`, `usertype`, `password`) VALUES
(1, 'Aleesha ', 'Noushad', 'aleeshanoushad@gmail.com', 0, 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'christee', 'gloria', 'christeegloria@gmail.com', 0, 'e10adc3949ba59abbe56e057f20f883e');
