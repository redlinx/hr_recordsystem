-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2014 at 06:36 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rms`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_education`(
															IN schoolName VARCHAR(45),
															IN address VARCHAR(50),
															IN year DATE,
															IN degree VARCHAR(45),
															IN type INT,
															IN empID INT)
BEGIN
	INSERT INTO `rms`.`faculty_education`
	(
	`school_name`,
	`address`,
	`year`,
	`degree`,
	`educ_type_type_id`,
	`faculty_profile_emp_id`)
	VALUES
	(
	schoolName,
	address,
	year,
	degree,
	type,
	empID
	);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_faculty`(
														IN emp_lname VARCHAR(45),
														IN emp_fname VARCHAR(45),
														IN emp_mname VARCHAR(45),
														IN emp_bday DATE,
														IN emp_gender VARCHAR(45),
														IN emp_civStat VARCHAR(45),
														IN emp_cellNo VARCHAR(45),
														IN emp_tellNo VARCHAR(45),
														IN emp_email VARCHAR(45),
														IN username VARCHAR(45),
														IN userpass VARCHAR(45),
														IN progID INT
														)
BEGIN
	INSERT INTO `rms`.`faculty_profile`
	(
	`lastname`,
	`firstname`,
	`middlename`,
	`bday`,
	`gender`,
	`civil_status`,
	`cell_no`,
	`tell_no`,
	`email`,
	`date_log`)
	VALUES
	(
	emp_lname,
	emp_fname,
	emp_mname,
	emp_bday,
	emp_gender,
	emp_civStat,
	emp_cellNo,
	emp_tellNo,
	emp_email,
	NOW());

	INSERT INTO `rms`.`faculty_account`
	(
	`username`,
	`password`,
	`date_hired`,
	`status`,
	`faculty_profile_emp_id`,
	`faculty_rank_rank_id`,
	`prog_id`)
	VALUES
	(
	username,
	userpass,
	NOW(),
	0,
	(SELECT last_insert_id()),
	NULL,
	progID);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_training`(
								 IN trainingTitle VARCHAR(45),
								 IN venue VARCHAR(45),
								 IN date DATE,
								 IN organizer VARCHAR(45),
								 IN role VARCHAR(45),
								 IN type INT,
								 IN empID INT)
BEGIN
	INSERT INTO `rms`.`faculty_training`
(
`training_title`,
`venue`,
`date`,
`organizer`,
`role`,
`training_type_type_id`,
`faculty_profile_emp_id`)
VALUES
(
trainingTitle,
venue,
date,
organizer,
role,
type,
empID);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `changePass`(IN accountID INT,
														 IN newPass VARCHAR(45),
														 IN current_password VARCHAR(45))
BEGIN
UPDATE `faculty_account`
SET
`password` = newPass
WHERE account_id = accountID
AND password = current_password;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_ABA`()
BEGIN
	SELECT	lastname, firstname, middlename, prog_id, emp_id
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id
	
	WHERE prog_id = 8;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_Admin`()
BEGIN
	SELECT	lastname, firstname, middlename, prog_id, emp_id
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id
	
	WHERE prog_id = 11;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_byProgram`(IN progID INT)
BEGIN
	SELECT	lastname, firstname, middlename, prog_id, emp_id
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id
	
	WHERE prog_id = progID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_Educ`()
BEGIN
	SELECT	lastname, firstname, middlename, prog_id, emp_id
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id
	
	WHERE prog_id = 9;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_educType`()
BEGIN
	SELECT * FROM rms.educ_type;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_Eng`()
BEGIN
	SELECT	lastname, firstname, middlename, prog_id, emp_id
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id
	
	WHERE prog_id = 10;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_faculty`()
BEGIN
	
	SELECT	*
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_ITE`()
BEGIN
	SELECT	lastname, firstname, middlename, prog_id, emp_id
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id
	
	WHERE prog_id = 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_LA`()
BEGIN
	SELECT	lastname, firstname, middlename, prog_id, emp_id
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id
	
	WHERE prog_id = 7;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_MLS`()
BEGIN
	SELECT	lastname, firstname, middlename, prog_id, emp_id
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id
	
	WHERE prog_id = 2;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_Music`()
BEGIN
	SELECT	lastname, firstname, middlename, prog_id, emp_id
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id
	
	WHERE prog_id = 5;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_NDHM`()
BEGIN
	SELECT	lastname, firstname, middlename, prog_id, emp_id
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id
	
	WHERE prog_id = 4;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_Nursing`()
BEGIN
	SELECT	lastname, firstname, middlename, prog_id, emp_id
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id
	
	WHERE prog_id = 6;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_PharmaChem`()
BEGIN
	SELECT	lastname, firstname, middlename, prog_id, emp_id
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id
	
	WHERE prog_id = 3;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_program`()
BEGIN
	SELECT * FROM rms.program;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_regularization_candidate`()
BEGIN
	SELECT
		YEAR(NOW()) - YEAR(faculty_account.date_hired) AS Years_Of_Service,
		faculty_account.date_hired,
		faculty_profile.firstname,
		faculty_profile.lastname

	FROM faculty_account
	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id

	WHERE YEAR(NOW())-YEAR(faculty_account.date_hired) > 2 AND faculty_account.status = 0;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_trainingType`()
BEGIN
	SELECT * FROM rms.training_type;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_education`( IN empID INT,
																IN educID INT,
																IN school_name VARCHAR(45),
																IN address VARCHAR(45),
																IN year DATE,
																IN degree VARCHAR(45),
																IN type INT)
BEGIN
	UPDATE `rms`.`faculty_education`
	SET
	`school_name` = school_name,
	`address` = address,
	`year` = year,
	`degree` = degree,
	`educ_type_type_id` = type

	WHERE faculty_profile_emp_id = empID 
	AND educ_id = educID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_faculty`(	IN empID INT,
																IN emp_lname VARCHAR(45),
																IN emp_fname VARCHAR(45),
																IN emp_mname VARCHAR(45),
																IN emp_bday DATE,
																IN emp_gender VARCHAR(45),
																IN emp_civStat VARCHAR(45),
																IN emp_cellNo VARCHAR(45),
																IN emp_tellNo VARCHAR(45),
																IN emp_email VARCHAR(45)
																)
BEGIN

UPDATE `rms`.`faculty_profile`
	SET
	`lastname` 		= emp_lname,
	`firstname` 	= emp_fname,
	`middlename` 	= emp_mname,
	`bday` 			= emp_bday,
	`gender` 		= emp_gender,
	`civil_status` 	= emp_civStat,
	`cell_no` 		= emp_cellNo,
	`tell_no` 		= emp_tellNo,
	`email` 		= emp_email

	WHERE `emp_id` = empID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `user_login`(IN username VARCHAR(45),
														 IN password VARCHAR(45)
														)
BEGIN

SELECT  faculty_account.account_id,
		faculty_account.username, 
		faculty_account.password,
		faculty_account.type,
		faculty_account.level,
		faculty_profile.firstname,
		faculty_profile.lastname,
		faculty_profile.emp_id

FROM faculty_account

INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id

WHERE faculty_account.username = username


;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_faculty_education`(IN empID INT)
BEGIN
	SELECT
			faculty_education.school_name,
			faculty_education.address,
			faculty_education.year,
			educ_type.type_desc,
			faculty_education.degree
			
			
	FROM faculty_education
	
	INNER JOIN faculty_profile ON faculty_education.faculty_profile_emp_id = faculty_profile.emp_id
	INNER JOIN educ_type ON educ_type.type_id = faculty_education.educ_type_type_id

	WHERE faculty_profile.emp_id = empID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_faculty_profile`(IN empID INT)
BEGIN
	
	SELECT	faculty_account.username,
			faculty_profile.lastname,
			faculty_profile.firstname,
			faculty_profile.middlename,
			faculty_profile.bday,
			faculty_profile.gender,
			faculty_profile.civil_status,
			faculty_profile.cell_no,
			faculty_profile.tell_no,
			faculty_profile.email,
			program.prog_name

	FROM faculty_account
	
	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id
	INNER JOIN program ON program.prog_id = faculty_account.prog_id

	WHERE faculty_profile.emp_id = empID;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `educ_type`
--

CREATE TABLE IF NOT EXISTS `educ_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_desc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `educ_type`
--

INSERT INTO `educ_type` (`type_id`, `type_desc`) VALUES
(1, 'Grade School'),
(2, 'High School'),
(3, 'College'),
(4, 'M.A.'),
(5, 'Ph. D.'),
(6, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_account`
--

CREATE TABLE IF NOT EXISTS `faculty_account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `date_hired` datetime DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `faculty_profile_emp_id` int(11) DEFAULT NULL,
  `faculty_rank_rank_id` int(11) DEFAULT NULL,
  `prog_id` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`account_id`),
  KEY `fk_faculty_account_faculty_profile1_idx` (`faculty_profile_emp_id`),
  KEY `fk_faculty_account_faculty_rank1_idx` (`faculty_rank_rank_id`),
  KEY `fk_faculty_account_Program1_idx` (`prog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `faculty_account`
--

INSERT INTO `faculty_account` (`account_id`, `username`, `password`, `date_hired`, `status`, `faculty_profile_emp_id`, `faculty_rank_rank_id`, `prog_id`, `level`, `type`) VALUES
(26, 'krosel', '1234', '2009-01-17 20:45:04', '', 224, NULL, 3, 1, 1),
(27, 'rcarbon', 'temp', '2000-02-23 00:00:00', '', 225, NULL, 9, 1, 1),
(28, 'erosel', 'temp', '2001-12-12 00:00:00', '', 226, NULL, 3, 1, 1),
(31, 'cmartin', 'temp', '2003-06-23 00:00:00', '0', 229, NULL, 5, 1, 1),
(32, 'cuyamot', 'temp', '1995-05-25 00:00:00', '0', 230, NULL, 6, 1, 1),
(33, 'ivan', 'temp', '2014-01-21 10:54:59', '0', 231, NULL, 1, 1, 1),
(34, 'Jazz', 'temp', '2014-01-21 10:55:59', '0', 232, NULL, 1, 1, 1),
(35, 'jess', 'temp', '2014-01-21 10:56:42', '0', 233, NULL, 1, 1, 1),
(36, 'james', 'temp', '2014-01-21 10:57:39', '0', 234, NULL, 1, 1, 1),
(39, 'jake', 'temp', '2014-01-21 10:59:12', '0', 237, NULL, 2, 1, 1),
(40, 'alexus', 'temp', '2014-01-21 11:00:04', '0', 238, NULL, 2, 1, 1),
(41, 'janpol', 'temp', '2014-01-21 11:00:54', '0', 239, NULL, 2, 1, 1),
(42, 'lara', 'temp', '2014-01-21 11:01:31', '0', 240, NULL, 2, 1, 1),
(43, 'emelyn', 'temp', '2014-01-21 11:02:16', '0', 241, NULL, 3, 1, 1),
(44, 'jameson', 'temp', '2014-01-21 11:03:52', '0', 242, NULL, 3, 1, 1),
(45, 'lebron', 'temp', '2014-01-21 11:04:45', '0', 243, NULL, 4, 1, 1),
(46, 'kobe', 'temp', '2014-01-21 11:05:23', '0', 244, NULL, 4, 1, 1),
(47, 'durant', 'temp', '2014-01-21 11:06:17', '0', 245, NULL, 4, 1, 1),
(48, 'paul', 'temp', '2014-01-21 11:07:27', '0', 246, NULL, 5, 1, 1),
(49, 'ibaka', 'temp', '2014-01-21 11:08:23', '0', 247, NULL, 5, 1, 1),
(50, 'westbrook', 'temp', '2014-01-21 11:09:32', '0', 248, NULL, 5, 1, 1),
(51, 'davis', 'temp', '2014-01-21 11:10:38', '0', 249, NULL, 6, 1, 1),
(52, 'bynum@gmail.com', 'temp', '2014-01-21 11:11:32', '0', 250, NULL, 6, 1, 1),
(53, 'farmar', 'tamp', '2014-01-21 11:12:37', '0', 251, NULL, 6, 1, 1),
(54, 'richardson@gmail.com', 'temp', '2014-01-21 11:14:01', '0', 252, NULL, 7, 1, 1),
(55, 'young', 'temp', '2014-01-21 11:14:44', '0', 253, NULL, 6, 1, 1),
(56, 'gasol', 'temp', '2014-01-21 11:15:29', '0', 254, NULL, 7, 1, 1),
(57, 'reyes', 'temp', '2014-01-21 11:16:37', '0', 255, NULL, 7, 1, 1),
(58, 'taylor', 'temp', '2014-01-21 11:17:31', '0', 256, NULL, 7, 1, 1),
(59, 'shen', 'temp', '2014-01-21 11:18:34', '0', 257, NULL, 8, 2, 1),
(60, 'francis', 'temp', '2014-01-21 11:19:16', '0', 258, NULL, 8, 2, 1),
(61, 'barrios', 'temp', '2014-01-21 11:20:06', '0', 259, NULL, 8, 3, 1),
(62, 'lulo', 'temp', '2014-01-21 11:20:57', '0', 260, NULL, 9, 2, 1),
(63, 'alvin', 'temp', '2014-01-21 11:21:52', '0', 261, NULL, 9, 1, 1),
(64, '', '', '2014-01-21 11:22:13', '0', 262, NULL, 1, 1, 1),
(65, 'mahinay', 'temp', '2014-01-21 11:23:00', '0', 263, NULL, 9, 1, 1),
(66, 'la', 'temp', '2014-01-21 11:23:52', '0', 264, NULL, 10, 1, 1),
(67, 'kraken', 'temp', '2014-01-21 11:24:39', '0', 265, NULL, 10, 1, 1),
(68, 'jimmy', 'temp', '2014-01-21 11:25:13', '0', 266, NULL, 10, 1, 1),
(69, 'viri', 'temp', '2014-01-21 11:26:06', '0', 267, NULL, 11, 2, 1),
(70, 'eric', 'temp', '2014-01-21 11:27:00', '0', 268, NULL, 11, 2, 1),
(71, 'bruce', 'temp', '2014-01-21 17:37:57', '0', 269, NULL, 1, 1, 1),
(72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_children`
--

CREATE TABLE IF NOT EXISTS `faculty_children` (
  `child_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `bday` varchar(45) DEFAULT NULL,
  `faculty_profile_emp_id` int(11) NOT NULL,
  PRIMARY KEY (`child_id`),
  KEY `fk_faculty_children_faculty_profile1_idx` (`faculty_profile_emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_education`
--

CREATE TABLE IF NOT EXISTS `faculty_education` (
  `educ_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(45) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `year` varchar(45) DEFAULT NULL,
  `degree` varchar(45) DEFAULT NULL,
  `educ_type_type_id` int(11) NOT NULL,
  `faculty_profile_emp_id` int(11) NOT NULL,
  PRIMARY KEY (`educ_id`),
  KEY `fk_faculty_education_educ_type1_idx` (`educ_type_type_id`),
  KEY `fk_faculty_education_faculty_profile1_idx` (`faculty_profile_emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `faculty_education`
--

INSERT INTO `faculty_education` (`educ_id`, `school_name`, `address`, `year`, `degree`, `educ_type_type_id`, `faculty_profile_emp_id`) VALUES
(2, 'SPC', 'Davao City', '2005-03-25', 'Grade School Graduate', 1, 224),
(6, 'HCDC', 'Davao City', '2009-03-25', 'High School Graduate', 2, 224),
(9, 'ADDU', 'Davao City', '2013-03-25', 'BSIT', 2, 224),
(29, 'UIC', 'Davao City', '2001-03-23', 'High School Graduate', 2, 226),
(44, 'HCDC', 'Davao City', '2001-03-23', 'Grade School Graduate', 1, 226);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_profile`
--

CREATE TABLE IF NOT EXISTS `faculty_profile` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `bday` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `civil_status` varchar(45) DEFAULT NULL,
  `cell_no` varchar(11) DEFAULT NULL,
  `tell_no` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `date_log` datetime DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=270 ;

--
-- Dumping data for table `faculty_profile`
--

INSERT INTO `faculty_profile` (`emp_id`, `lastname`, `firstname`, `middlename`, `bday`, `gender`, `civil_status`, `cell_no`, `tell_no`, `email`, `date_log`) VALUES
(223, 'Tico', 'Wency', 'Dango', '1995-02-23', 'Male', 'Single', '09876543211', '123-4567', 'wenztico@gmail.com', '2014-01-17 20:36:39'),
(224, 'Rosel', 'Kokie', 'Dango', '1998-05-28', 'Male', 'Complicated', '0987654321', '123-4567', 'koke@gmail.com', '2009-01-17 20:45:04'),
(225, 'Carbon', 'Raymund', 'Labor', '1994-04-19', 'Male', 'Single', '09481231376', '258-1212', 'butch@gmail.com', '2014-01-17 20:45:04'),
(226, 'Rosel', 'An Mariel', 'Dango', '1997-07-02', 'Female', 'Widow', '0987654321', '123-4567', 'erosel@gmail.com', '2014-01-17 20:46:32'),
(229, 'Martin', 'Coco', 'John', '1995-01-10', 'Male', 'Single', '09481231376', '258-1212', 'cocomartin@yahoo.com', '2014-01-21 10:52:04'),
(230, 'Uyamot', 'Carollene', 'Dango', '1995-02-23', 'Female', 'Married', '09481231376', '258-1212', 'uyamotcah@gmail.com', '2014-01-21 10:52:58'),
(231, 'SombillA', 'Ivan', 'Karl', '1994-07-28', 'Male', 'Single', '09097829965', '258-1212', 'ivansombilla@gmail.com', '2014-01-21 10:54:59'),
(232, 'Intes', 'Jaspher', 'Elmer', '1994-02-23', 'Male', 'Single', '09876543211', '258-1212', 'Jazz@gmail.com', '2014-01-21 10:55:59'),
(233, 'Garcia', 'Jess', 'Anzilo', '1969-10-23', 'Male', 'Single', '2143-34235', '214-3422', 'Jess@gmail.com', '2014-01-21 10:56:42'),
(234, 'pantaleon', 'James', 'Mitchelle', '1993-03-06', 'Male', 'Single', '09097829965', '123-4567', 'James@gmail.com', '2014-01-21 10:57:39'),
(235, 'Padilla', 'Jake', 'Oliver', '1994-09-09', '', '', '', '', '', '2014-01-21 10:58:09'),
(236, 'Padilla', 'Jake', '', '0000-00-00', '', '', '', '', '', '2014-01-21 10:58:21'),
(237, 'Padilla', 'Jake', 'Oliver', '1994-09-09', 'Male', 'Single', '0987654321', '123-4567', 'Jake@gmail.com', '2014-01-21 10:59:12'),
(238, 'Fontanilla', 'Alexus', 'Quibod', '1994-03-23', 'Male', 'Single', '09481231376', '258-3138', 'alexus@gmail.com', '2014-01-21 11:00:04'),
(239, 'Dayrit', 'Janpol', 'Popol', '1994-12-12', 'Male', 'Single', '0987654321', '285-3181', 'janpol@gmail.com', '2014-01-21 11:00:54'),
(240, 'Rago', 'Lara', 'gaga', '1995-02-23', 'Male', 'Single', '09481231376', '258-1212', 'lara@gmail.com', '2014-01-21 11:01:31'),
(241, 'Dela Cruz', 'Emelyn', 'Agtang', '1994-04-19', 'Male', 'Single', '09876543211', '258-1212', 'emui@gmail.com', '2014-01-21 11:02:15'),
(242, 'Mandap', 'Jameson', 'Soliva', '1995-02-23', 'Male', 'Single', '09481231376', '258-1212', 'jameson@gmail.com', '2014-01-21 11:03:52'),
(243, 'Lebron', 'James', 'King', '1998-05-28', 'Male', 'Single', '0987654321', '258-1212', 'lebron@gmail.com', '2014-01-21 11:04:45'),
(244, 'Kobe', 'Bryant', 'Banga', '1995-02-23', 'Male', 'Single', '09097829965', '258-1212', 'kobe@gmail.com', '2014-01-21 11:05:23'),
(245, 'Durant', 'Kevin', 'Balot', '1995-01-10', 'Male', 'Married', '0987654321', '258-1212', 'durant@gmail.com', '2014-01-21 11:06:17'),
(246, 'Paul', 'Cris', 'Gamay', '1994-04-19', 'Male', 'Single', '0987654321', '258-1212', 'paul@gmail.com', '2014-01-21 11:07:27'),
(247, 'Ibaka', 'Serge', 'Block', '1993-11-13', 'Male', 'Single', '09097829965', '123-4567', 'ibaka@gmail.com', '2014-01-21 11:08:23'),
(248, 'Westbrook', 'Russel', 'Baki', '1992-11-12', 'Male', 'Single', '09481231376', '258-3138', 'westbrook@gmail.com', '2014-01-21 11:09:31'),
(249, 'Davis', 'Baron', 'kg', '1994-04-23', 'Male', 'Married', '0987654321', '258-1212', 'davis@gmail.com', '2014-01-21 11:10:38'),
(250, 'Bynum', 'Andrew', 'drew', '1993-04-14', 'Male', 'Married', '0987654321', '258-1212', 'bynum@gmail.com', '2014-01-21 11:11:32'),
(251, 'Farmar', 'Jordan', 'Micheal', '1994-09-24', 'Male', 'Single', '09097829965', '258-3138', 'farmar@gmail.com', '2014-01-21 11:12:37'),
(252, 'Richardson', 'Quentin', 'bogo', '1994-05-21', 'Male', 'Widow', '09481231376', '258-3138', 'richardson@gmail.com', '2014-01-21 11:14:01'),
(253, 'young', 'nick', 'son', '1994-06-19', 'Male', 'Widow', '09097829965', '258-1212', 'young@gmail.com', '2014-01-21 11:14:44'),
(254, 'Gasol', 'Pau', 'Nene', '1995-03-03', 'Male', 'Single', '0987654321', '258-1212', 'gasol@gmail.com', '2014-01-21 11:15:28'),
(255, 'Reyes', 'Christine', 'Lami', '1993-04-14', 'Female', 'Married', '0987654321', '258-3138', 'reyes@gmail.com', '2014-01-21 11:16:37'),
(256, 'Taylor', 'Maui', 'Lami', '1994-07-07', 'Female', 'Married', '09876543211', '258-3138', 'taylor@gmail.com', '2014-01-21 11:17:31'),
(257, 'Maranguit', 'Shenn', 'CN', '1969-10-23', 'Female', 'Single', '0987654321', '258-1212', 'maranguit@gmail.com', '2014-01-21 11:18:34'),
(258, 'Padao', 'Francis', 'Rey', '1993-11-13', 'Male', 'Single', '09481231376', '258-1212', 'francis@gmail.com', '2014-01-21 11:19:16'),
(259, 'Barrios', 'Exander', 'T.', '1993-11-13', 'Male', 'Single', '09097829965', '285-3181', 'barrios@gmail.com', '2014-01-21 11:20:06'),
(260, 'Lulo', 'Oliver', 'Greamsnake', '1993-04-14', 'Male', 'Single', '0987654321', '258-3138', 'Lulo@gmail.com', '2014-01-21 11:20:57'),
(261, 'Soliven', 'Alvin', 'Jay', '1993-11-13', 'Male', 'Widow', '0987654321', '258-3138', 'Soliven@gmail.com', '2014-01-21 11:21:52'),
(262, 'Mahinay', 'Rene', 'R.', '1994-04-04', 'Male', '', '', '', '', '2014-01-21 11:22:13'),
(263, 'Mahinay', 'Rene', 'R.', '1998-05-28', 'Male', 'Married', '09097829965', '258-3138', 'rene@gmail.com', '2014-01-21 11:23:00'),
(264, 'Tenorio', 'LA', 'captain', '1995-02-23', 'Male', 'Single', '09481231376', '258-1212', 'la@gmail.com', '2014-01-21 11:23:52'),
(265, 'Fajardo', 'Kraken', 'G.', '1995-01-10', 'Male', 'Single', '09481231376', '258-1212', 'kraken@gmail.com', '2014-01-21 11:24:39'),
(266, 'Alapag', 'Jimmy', 'R.', '1995-02-23', 'Male', 'Single', '09481231376', '123-4567', 'jimmy@gmail.com', '2014-01-21 11:25:13'),
(267, 'Viri', 'Maria', 'Marissa', '1994-06-19', 'Female', 'Single', '09481231376', '258-1212', 'viri@gmail.com', '2014-01-21 11:26:06'),
(268, 'Emberda', 'Eric', 'G.', '1994-06-06', 'Male', 'Single', '09481231376', '258-1212', 'eric@gmail.com', '2014-01-21 11:27:00'),
(269, 'Bruce', 'Lee', 'sample', '1994-07-28', 'Male', 'Single', '0987654321', '258-3138', 'wenztico@gmail.com', '2014-01-21 17:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_rank`
--

CREATE TABLE IF NOT EXISTS `faculty_rank` (
  `rank_id` int(11) NOT NULL,
  `rank_desc` varchar(45) DEFAULT NULL,
  `date_log` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`rank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_skills`
--

CREATE TABLE IF NOT EXISTS `faculty_skills` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(45) DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  PRIMARY KEY (`skill_id`),
  KEY `fk_faculty_skills_faculty_profile1_idx` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_spouse`
--

CREATE TABLE IF NOT EXISTS `faculty_spouse` (
  `spouse_id` varchar(45) NOT NULL,
  `lastname` int(11) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `birth_place` varchar(45) DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  `faculty_spousecol` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `educational_attainment` varchar(45) DEFAULT NULL,
  `occupation` varchar(45) DEFAULT NULL,
  `employer` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `SSS` varchar(45) DEFAULT NULL,
  `pag_ibig` varchar(45) DEFAULT NULL,
  `philhealth` varchar(45) DEFAULT NULL,
  `TIN` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`spouse_id`),
  KEY `fk_faculty_spouse_faculty_profile1_idx` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_status`
--

CREATE TABLE IF NOT EXISTS `faculty_status` (
  `status_id` int(11) NOT NULL,
  `status_desc` varchar(45) DEFAULT NULL,
  `date_log` datetime DEFAULT NULL,
  `faculty_account_account_id` int(11) NOT NULL,
  PRIMARY KEY (`status_id`),
  KEY `fk_faculty_status_faculty_account1_idx` (`faculty_account_account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_training`
--

CREATE TABLE IF NOT EXISTS `faculty_training` (
  `training_id` int(11) NOT NULL AUTO_INCREMENT,
  `training_title` varchar(45) DEFAULT NULL,
  `venue` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `organizer` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `training_type_type_id` int(11) NOT NULL,
  `faculty_profile_emp_id` int(11) NOT NULL,
  PRIMARY KEY (`training_id`),
  KEY `fk_faculty_training_faculty_profile1_idx` (`faculty_profile_emp_id`),
  KEY `fk_faculty_training_training_type1_idx` (`training_type_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faculty_training`
--

INSERT INTO `faculty_training` (`training_id`, `training_title`, `venue`, `date`, `organizer`, `role`, `training_type_type_id`, `faculty_profile_emp_id`) VALUES
(1, 'DevCon Summit', 'CAP Auditorium', '2013-12-01', 'DevCon', 'Participant', 1, 224),
(2, 'GraphiCon', 'UIC', '2014-01-12', 'UIC', 'Speaker', 1, 226);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_work_exp`
--

CREATE TABLE IF NOT EXISTS `faculty_work_exp` (
  `work_exp_id` int(11) NOT NULL,
  `company` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `date_log` datetime DEFAULT NULL,
  `faculty_profile_emp_id` int(11) NOT NULL,
  PRIMARY KEY (`work_exp_id`),
  KEY `fk_faculty_work_exp_faculty_profile1_idx` (`faculty_profile_emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `prog_id` int(11) NOT NULL AUTO_INCREMENT,
  `prog_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`prog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`prog_id`, `prog_name`) VALUES
(1, 'ITE'),
(2, 'MLS'),
(3, 'PharmaChem'),
(4, 'NDHM'),
(5, 'Music'),
(6, 'Nursing'),
(7, 'LA'),
(8, 'ABA'),
(9, 'Educ'),
(10, 'Eng'),
(11, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `training_type`
--

CREATE TABLE IF NOT EXISTS `training_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_desc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `training_type`
--

INSERT INTO `training_type` (`type_id`, `type_desc`) VALUES
(1, 'Local'),
(2, 'National'),
(3, 'International');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(45) DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_upload_faculty_profile1_idx` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `file_name`, `emp_id`) VALUES
(1, 'Untitled9.png', 226),
(2, '994661_10201082644244699_747886588_n.jpg', 224),
(3, '994661_10201082644244699_747886588_n1.jpg', 224),
(4, '224.jpg', 224),
(5, '224_4.jpg', 224),
(6, '224_6.jpg', 224),
(7, '224_7.jpg', 224);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty_account`
--
ALTER TABLE `faculty_account`
  ADD CONSTRAINT `fk_faculty_account_faculty_profile1` FOREIGN KEY (`faculty_profile_emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_faculty_account_faculty_rank1` FOREIGN KEY (`faculty_rank_rank_id`) REFERENCES `faculty_rank` (`rank_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_faculty_account_Program1` FOREIGN KEY (`prog_id`) REFERENCES `program` (`prog_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty_children`
--
ALTER TABLE `faculty_children`
  ADD CONSTRAINT `fk_faculty_children_faculty_profile1` FOREIGN KEY (`faculty_profile_emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty_education`
--
ALTER TABLE `faculty_education`
  ADD CONSTRAINT `fk_faculty_education_educ_type1` FOREIGN KEY (`educ_type_type_id`) REFERENCES `educ_type` (`type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_faculty_education_faculty_profile1` FOREIGN KEY (`faculty_profile_emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty_skills`
--
ALTER TABLE `faculty_skills`
  ADD CONSTRAINT `fk_faculty_skills_faculty_profile1` FOREIGN KEY (`emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty_spouse`
--
ALTER TABLE `faculty_spouse`
  ADD CONSTRAINT `fk_faculty_spouse_faculty_profile1` FOREIGN KEY (`emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty_status`
--
ALTER TABLE `faculty_status`
  ADD CONSTRAINT `fk_faculty_status_faculty_account1` FOREIGN KEY (`faculty_account_account_id`) REFERENCES `faculty_account` (`account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty_training`
--
ALTER TABLE `faculty_training`
  ADD CONSTRAINT `fk_faculty_training_faculty_profile1` FOREIGN KEY (`faculty_profile_emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_faculty_training_training_type1` FOREIGN KEY (`training_type_type_id`) REFERENCES `training_type` (`type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty_work_exp`
--
ALTER TABLE `faculty_work_exp`
  ADD CONSTRAINT `fk_faculty_work_exp_faculty_profile1` FOREIGN KEY (`faculty_profile_emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `fk_upload_faculty_profile1` FOREIGN KEY (`emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
