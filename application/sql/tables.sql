#25/06/19

ALTER TABLE `user_model` ADD `is_active` INT(11) NOT NULL DEFAULT '0' AFTER `password`;

CREATE TABLE `user_details_model` (
  `ud_id` int(11) NOT NULL,
  `ud_userid` int(11) NOT NULL COMMENT 'foerign key of user model',
  `ud_firstname` varchar(250) NOT NULL,
  `ud_lastname` varchar(250) NOT NULL
);



ALTER TABLE `user_details_model`
  MODIFY `ud_id` int(11) NOT NULL AUTO_INCREMENT;

  #on developmnt only 
INSERT INTO `user_details_model` (`ud_id`, `ud_userid`, `ud_firstname`, `ud_lastname`) VALUES ('1', '1', 'Aleesha', 'Noushad'), ('2', '2', 'christee', 'gloria');
#21/06/19
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
);
ALTER TABLE `ci_sessions` ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

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
