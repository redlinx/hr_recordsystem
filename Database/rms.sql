-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2014 at 02:54 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rms`
--
CREATE DATABASE IF NOT EXISTS `rms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rms`;

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_children`(
								 IN name VARCHAR(45),
								 IN bday DATE,
								 IN empID INT)
BEGIN
	INSERT INTO `rms`.`faculty_children`
	(
	`name`,
	`bday`,
	`emp_id`)
	VALUES
	(
	name,
	bday,
	empID);

END$$

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
	`type_id`,
	`emp_id`)
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
														IN lastname VARCHAR(45),
														IN firstname VARCHAR(45),
														IN middlename VARCHAR(45),
														IN bday DATE,
														IN gender VARCHAR(45),
														IN civStat VARCHAR(45),
														IN cellNo VARCHAR(45),
														IN tellNo VARCHAR(45),
														IN email VARCHAR(45),
														IN username VARCHAR(45),
														IN password VARCHAR(45),
														IN progID INT,
														IN levelID INT													
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
	lastname,
	firstname,
	middlename,
	bday,
	gender,
	civStat,
	cellNo,
	tellNo,
	email,
	NOW());

	INSERT INTO `rms`.`faculty_account`
	(
	`username`,
	`password`,
	`date_hired`,
	`status`,
	`faculty_profile_emp_id`,
	`faculty_rank_rank_id`,
	`prog_id`,
	`level`)
	VALUES
	(
	username,
	password,
	NOW(),
	0,
	(SELECT last_insert_id()),
	NULL,
	progID,
	levelID);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_rankMember`(IN empID INT)
BEGIN
INSERT INTO `rms`.`ranking_members`
(
`faculty_emp_id`)
VALUES
(
empID
);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_skills`(
														 IN skill_name VARCHAR(45),
														 IN empID INT)
BEGIN
INSERT INTO `rms`.`faculty_skills`
(
`skill_name`,
`emp_id`)
VALUES
(
skill_name,
empID);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_spouse`( IN lastname VARCHAR(45),
								IN firstname VARCHAR(45),
								IN middlename VARCHAR(45),
								IN bday DATE,
								IN birth_place VARCHAR(45),
								IN empID INT,
								IN spousecol VARCHAR(45),
								IN contact VARCHAR(45),
								IN educ_attain VARCHAR(45),
								IN occupation VARCHAR(45),
								IN employer VARCHAR(45),
								IN address VARCHAR(45),
								IN SSS VARCHAR(45),
								IN pag_ibig VARCHAR(45),
								IN philhealth VARCHAR(45),
								IN TIN VARCHAR(45)
							)
BEGIN
INSERT INTO `rms`.`faculty_spouse`
(
`lastname`,
`firstname`,
`middlename`,
`bday`,
`birth_place`,
`emp_id`,
`faculty_spousecol`,
`contact_no`,
`educational_attainment`,
`occupation`,
`employer`,
`address`,
`SSS`,
`pag_ibig`,
`philhealth`,
`TIN`)
VALUES
(
lastname,
firstname,
middlename,
bday,
birth_place,
empID,
spousecol,
contact,
educ_attain,
occupation,
employer,
address,
SSS,
pag_ibig,
philhealth,
TIN);

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

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_work`(
							IN company VARCHAR(45),
							IN address VARCHAR(45),
							IN position VARCHAR(45),
							IN start_date DATE,
							IN end_date DATE,
							IN empID INT
						)
BEGIN
INSERT INTO `rms`.`faculty_work_exp`
(
`company`,
`address`,
`position`,
`start_date`,
`end_date`,
`date_log`,
`emp_id`)
VALUES
(
company,
address,
position,
start_date,
end_date,
NOW(),
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_byProgram`(IN progID INT)
BEGIN
	SELECT	lastname, firstname, middlename, prog_id, emp_id
	
	FROM faculty_account
	
	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id
	
	WHERE prog_id = progID AND level = 1
	ORDER BY lastname ASC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_category`()
BEGIN
	SELECT * FROM upload_category;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_committee`()
BEGIN
	
	SELECT	*
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id

	WHERE faculty_account.level = 6;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_educNoti`()
BEGIN

SELECT
    faculty_profile.lastname,
    faculty_profile.firstname,
	faculty_profile.emp_id,
	faculty_education.status,
	faculty_education.educ_id,
	faculty_education.school_name,
	faculty_education.address,
	faculty_education.year,
	educ_type.type_desc,
	faculty_education.degree
	

FROM faculty_education

INNER JOIN faculty_profile ON faculty_education.emp_id = faculty_profile.emp_id
INNER JOIN educ_type ON faculty_education.type_id = educ_type.type_id

where status = 0
;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_educType`()
BEGIN
	SELECT * FROM rms.educ_type;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_faculty`()
BEGIN
	
	SELECT	*
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_level`()
BEGIN
	SELECT * FROM rms.faculty_level;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_notification`()
BEGIN

SELECT
		file_name,
		faculty_profile.lastname,
		faculty_profile.firstname,
		upload_category.category_name,
        upload.title,
        upload.upload_id
								
FROM upload

INNER JOIN faculty_profile ON upload.emp_id = faculty_profile.emp_id
INNER JOIN upload_category ON upload.category_id = upload_category.category_id

where status = 0

;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_profUpdate`()
BEGIN

SELECT
		faculty_account.account_id,
		faculty_account.username,
		faculty_profile.lastname,
		faculty_profile.firstname,
		faculty_profile.middlename,
		faculty_profile.bday,
		DATE_FORMAT(bday, '%c') AS Month,
		DATE_FORMAT(bday, '%b') AS MonthName,
		DATE_FORMAT(bday, '%e') AS Day,
		DATE_FORMAT(bday, '%Y') AS Year,
		faculty_profile.gender,
		faculty_profile.civil_status,
		faculty_account.email,
		faculty_profile.cell_no,
		faculty_profile.tell_no,
		faculty_profile.emp_id,
		faculty_account.prog_id,
		program.prog_name	
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id

	INNER JOIN program ON program.prog_id = faculty_account.prog_id

where prof_status = 0

;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_program`()
BEGIN
	SELECT * FROM rms.program;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_rankMember`()
BEGIN
SELECT
	ranking_members.faculty_emp_id,
	faculty_profile.lastname,
	faculty_profile.firstname,
	ranking_members.rankProgram

FROM ranking_members
INNER JOIN faculty_profile ON ranking_members.faculty_emp_id = faculty_profile.emp_id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_rank_points`(IN empID INT)
BEGIN
SELECT * ,
educational_qualification + teaching_proficiency + research + community_services + training_programs + involvements AS TOTAL

FROM rms.ranking_points

WHERE faculty_profile_emp_id = empID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_regularization_candidate`()
BEGIN
	SELECT
		YEAR(NOW()) - YEAR(faculty_account.date_hired) AS Years_Of_Service,
		faculty_account.date_hired,
		faculty_profile.firstname,
		faculty_profile.lastname,
		faculty_account.account_id,
		faculty_account.faculty_profile_emp_id,
		DATE_FORMAT(faculty_account.date_hired, '%b') AS MonthName,
		DATE_FORMAT(faculty_account.date_hired, '%e') AS Day,
		DATE_FORMAT(faculty_account.date_hired, '%Y') AS Year
		

	FROM faculty_account
	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id

	WHERE YEAR(NOW())-YEAR(faculty_account.date_hired) > 2 AND faculty_account.status = 0;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_regular_Faculty`()
BEGIN
	SELECT
		faculty_account.account_id,
		faculty_profile.firstname,
		faculty_profile.lastname,
        faculty_profile.middlename,
        faculty_account.date_hired,
        DATE_FORMAT(date_hired, '%c') AS Month,
		DATE_FORMAT(date_hired, '%b') AS MonthName,
		DATE_FORMAT(date_hired, '%e') AS Day,
		DATE_FORMAT(date_hired, '%Y') AS Year,
        
		faculty_account.faculty_profile_emp_id,
		faculty_account.date_regular,
        DATE_FORMAT(date_regular, '%c') AS RMonth,
		DATE_FORMAT(date_regular, '%b') AS RMonthName,
		DATE_FORMAT(date_regular, '%e') AS RDay,
		DATE_FORMAT(date_regular, '%Y') AS RYear
        

	FROM faculty_account
	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id

	WHERE faculty_account.date_regular AND faculty_account.status = 1
	ORDER BY lastname ASC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_trainingNoti`()
BEGIN

SELECT
    faculty_profile.lastname,
    faculty_profile.firstname,
	faculty_training.training_status,
	faculty_profile.emp_id,
	faculty_training.training_id,
    training_type.type_desc,
    training_type.type_id

FROM faculty_training

 JOIN faculty_profile ON faculty_training.faculty_profile_emp_id = faculty_profile.emp_id
 JOIN training_type ON faculty_training.training_type_type_id = training_type.type_id

where training_status = 0
;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_trainingType`()
BEGIN
	SELECT * FROM rms.training_type;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_unRegular_Faculty`()
BEGIN
	SELECT
		faculty_account.account_id,
		faculty_profile.firstname,
		faculty_profile.lastname,
        faculty_profile.middlename,
        faculty_account.date_hired,
        DATE_FORMAT(date_hired, '%c') AS Month,
		DATE_FORMAT(date_hired, '%b') AS MonthName,
		DATE_FORMAT(date_hired, '%e') AS Day,
		DATE_FORMAT(date_hired, '%Y') AS Year,
        
		faculty_account.faculty_profile_emp_id
        

	FROM faculty_account
	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id

	WHERE faculty_account.date_hired AND faculty_account.status = 0
	ORDER BY lastname ASC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_workExp`()
BEGIN

SELECT
    faculty_profile.lastname,
    faculty_profile.firstname,
    faculty_work_exp.work_status,
    faculty_work_exp.work_exp_id,
    faculty_profile.emp_id
   
FROM faculty_work_exp
INNER JOIN faculty_profile ON faculty_work_exp.emp_id = faculty_profile.emp_id
where work_status = 0

;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `hr_update_faculty_profile`(	IN empID INT,
																			IN emp_lname VARCHAR(45),
																			IN emp_fname VARCHAR(45),
																			IN emp_mname VARCHAR(45),
																			IN emp_bday DATE,
																			IN birthplace VARCHAR(50),
																			IN emp_gender VARCHAR(45),
																			IN emp_civStat VARCHAR(45),
																			IN emp_cellNo VARCHAR(45),
																			IN emp_tellNo VARCHAR(45),
																			IN emp_email VARCHAR(45),
																			IN progID INT,
																			IN city_add VARCHAR(50),
																			IN prov_add VARCHAR(50),
																			IN philhealth INT,
																			IN pag_ibig INT,
																			IN sss INT,
																			IN tin INT
																		)
BEGIN

UPDATE `rms`.`faculty_profile`
	SET
	`emp_id`		= empID,
	`lastname` 		= emp_lname,
	`firstname` 	= emp_fname,
	`middlename` 	= emp_mname,
	`bday` 			= emp_bday,
	`bithplace`		= birthplace,
	`gender` 		= emp_gender,
	`civil_status` 	= emp_civStat,
	`cell_no` 		= emp_cellNo,
	`tell_no` 		= emp_tellNo,
	`email` 		= emp_email,
	`city_add`		= city_add,
	`prov_add`		= prov_add,
	`philhealth`	= philhealth,
	`pag_ibig`		= pag_ibig,
	`sss`			= sss,
	`tin`			= tin

	WHERE `emp_id` = empID;

UPDATE `rms`.`faculty_account`
	SET
	`prog_id` = progID

WHERE `faculty_profile_emp_id` = empID;
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `rankCom_login`(IN username VARCHAR(45), IN password VARCHAR(45))
BEGIN
SELECT * FROM rms.ranking_committee
WHERE ranking_committee.username =username;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ranking_profile`(IN empID INT)
BEGIN
SELECT * FROM ranking_members

WHERE faculty_emp_id = empID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `rank_faculty`(
									IN empID INT,
									IN EQ INT,
									IN TeachP INT,
									IN Research INT,
									IN CS INT,
									IN TrainP INT,
									IN Involvement INT
									)
BEGIN
INSERT INTO `rms`.`ranking_points`
(
`faculty_profile_emp_id`,
`educational_qualification`,
`teaching_proficiency`,
`research`,
`community_services`,
`training_programs`,
`involvements`)
VALUES
(
empID,
EQ,
TeachP,
Research,
CS,
TrainP,
Involvement);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `set_rankMember`( IN empID INT)
BEGIN
SELECT emp_id, lastname, firstname FROM faculty_profile
WHERE emp_id = empID;


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `set_RankProgram`(IN empID INT)
BEGIN
SELECT * FROM ranking_members
WHERE faculty_emp_id = empID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEduc`( IN educID INT)
BEGIN
SELECT faculty_education.educ_id, faculty_education.status, faculty_education.emp_id FROM faculty_education
WHERE faculty_education.educ_id = educID;


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateProf`( IN empID INT)
BEGIN
SELECT emp_id, lastname, firstname, prof_status FROM faculty_profile
WHERE emp_id = empID;


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateRegularization`( IN accountID INT)
BEGIN
SELECT faculty_account.account_id, faculty_account.status, faculty_account.faculty_profile_emp_id
FROM faculty_account
WHERE faculty_account.account_id = accountID;


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateTraining`( IN trainingID INT)
BEGIN
SELECT faculty_training.training_id, faculty_training.training_status, faculty_profile_emp_id FROM faculty_training
WHERE faculty_training.training_id = trainingID;


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUpload`(IN uploadID INT)
BEGIN
SELECT upload.upload_id, upload.status, upload.emp_id FROM upload
WHERE upload.upload_id = uploadID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateWorkExp`( IN WorkID INT)
BEGIN
SELECT faculty_work_exp.work_exp_id, faculty_work_exp.work_status, faculty_work_exp.emp_id FROM faculty_work_exp
WHERE faculty_work_exp.work_exp_id = workID;


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_children`(	IN childID INT,
																IN name VARCHAR(45),
																IN bday DATE,
																IN empID INT)
BEGIN
	UPDATE `rms`.`faculty_children`
	SET
	`child_id` = childID,
	`name` = name,
	`bday` = bday

	WHERE emp_id = empID
	AND `child_id` = childID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_education`( 
																IN educID INT,
																IN school_name VARCHAR(45),
																IN address VARCHAR(45),
																IN year YEAR,
																IN degree VARCHAR(45),
																IN type INT,
																IN empID INT)
BEGIN
	UPDATE `rms`.`faculty_education`
	SET
	`educ_id` = educID,
	`school_name` = school_name,
	`address` = address,
	`year` = year,
	`degree` = degree,
	`type_id` = type

	WHERE emp_id = empID 
	AND educ_id = educID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_faculty`(	IN empID INT,
																IN emp_lname VARCHAR(45),
																IN emp_fname VARCHAR(45),
																IN emp_mname VARCHAR(45),
																IN emp_bday DATE,
																IN birthplace VARCHAR(50),
																IN emp_gender VARCHAR(45),
																IN emp_civStat VARCHAR(45),
																IN emp_cellNo VARCHAR(45),
																IN emp_tellNo VARCHAR(45),
																IN emp_email VARCHAR(45),
																IN city_add VARCHAR(50),
																IN prov_add VARCHAR(50),
																IN philhealth INT,
																IN pag_ibig INT,
																IN sss INT,
																IN tin INT
																)
BEGIN

UPDATE `rms`.`faculty_profile`
	SET
	`lastname` 		= emp_lname,
	`firstname` 	= emp_fname,
	`middlename` 	= emp_mname,
	`bday` 			= emp_bday,
	`bithplace`		= birthplace,
	`gender` 		= emp_gender,
	`civil_status` 	= emp_civStat,
	`cell_no` 		= emp_cellNo,
	`tell_no` 		= emp_tellNo,
	`email` 		= emp_email,
	`city_add`		= city_add,
	`prov_add`		= prov_add,
	`philhealth`	= philhealth,
	`pag_ibig`		= pag_ibig,
	`sss`			= sss,
	`tin`			= tin

	WHERE `emp_id` = empID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_form_children`(IN childID INT)
BEGIN
	SELECT	
			faculty_children.child_id,
			faculty_children.name,
			faculty_children.bday,
			faculty_children.emp_id
			
	FROM faculty_children
	
	INNER JOIN faculty_profile ON faculty_children.emp_id = faculty_profile.emp_id

	WHERE faculty_children.child_id = childID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_form_education`(IN educID INT)
BEGIN
	SELECT
			faculty_education.educ_id,
			faculty_education.school_name,
			faculty_education.address,
			faculty_education.year,
			educ_type.type_desc,
			faculty_education.degree,
			faculty_education.emp_id
			
			
	FROM faculty_education
	
	INNER JOIN faculty_profile ON faculty_education.emp_id = faculty_profile.emp_id
	INNER JOIN educ_type ON educ_type.type_id = faculty_education.type_id

	WHERE faculty_education.educ_id = educID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_form_skill`(IN skillID INT)
BEGIN
	SELECT	
			faculty_skills.skill_id,
			faculty_skills.skill_name,
			faculty_skills.emp_id
			
	FROM faculty_skills
	
	INNER JOIN faculty_profile ON faculty_skills.emp_id = faculty_profile.emp_id

	WHERE faculty_skills.skill_id = skillID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_form_training`(IN trainingID INT)
BEGIN
	SELECT
		faculty_training.training_id,
		faculty_training.training_title,
		faculty_training.venue,
		faculty_training.date,
		faculty_training.organizer,
		faculty_training.role,
		training_type.type_desc,
		faculty_training.faculty_profile_emp_id

	FROM faculty_training

	INNER JOIN faculty_profile ON faculty_training.faculty_profile_emp_id = faculty_profile.emp_id
	INNER JOIN training_type ON training_type.type_id = faculty_training.training_type_type_id

	WHERE faculty_training.training_id = trainingID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_form_work`(IN workID INT)
BEGIN
	SELECT	
			faculty_work_exp.work_exp_id,
			faculty_work_exp.company,
			faculty_work_exp.address,
			faculty_work_exp.position,
			faculty_work_exp.start_date,
			faculty_work_exp.end_date,
			faculty_work_exp.emp_id
			
	FROM faculty_work_exp
	
	INNER JOIN faculty_profile ON faculty_work_exp.emp_id = faculty_profile.emp_id

	WHERE faculty_work_exp.work_exp_id = workID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_level`(IN empID INT)
BEGIN
UPDATE `rms`.`faculty_account`
SET

`level` = 6

WHERE `faculty_profile_emp_id` = empID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_program`(IN empID INT, IN progID INT)
BEGIN

UPDATE `rms`.`ranking_members`
	SET
	`rankProgram` 		= progID
	WHERE `faculty_emp_id` = empID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_skill`(	IN skillID INT,
															IN skill_name VARCHAR(45),
															IN empID INT)
BEGIN
	UPDATE `rms`.`faculty_skills`
	SET
	`skill_id` = skillID,
	`skill_name` = skill_name

	WHERE emp_id = empID
	AND `skill_id` = skillID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_spouse`(
															IN spouse_id INT,
															IN lastname VARCHAR(45),
															IN firstname VARCHAR(45),
															IN middlename VARCHAR(45),
															IN bday DATE,
															IN birth_place VARCHAR(45),
															IN empID INT,
															IN spousecol VARCHAR(45),
															IN contact VARCHAR(45),
															IN educ_attain VARCHAR(45),
															IN occupation VARCHAR(45),
															IN employer VARCHAR(45),
															IN address VARCHAR(45),
															IN SSS VARCHAR(45),
															IN pag_ibig VARCHAR(45),
															IN philhealth VARCHAR(45),
															IN TIN VARCHAR(45)
															)
BEGIN
	UPDATE `rms`.`faculty_spouse`
	SET
		`lastname` 					= lastname,
		`firstname` 				= firstname,
		`middlename` 				= middlename,
		`bday` 						= bday,
		`birth_place` 				= birth_place,
		`faculty_spousecol` 		= spousecol,
		`contact_no` 				= contact,
		`educational_attainment` 	= educ_attain,
		`occupation` 				= occupation,
		`employer` 					= employer,
		`address` 					= address,
		`SSS` 						= SSS,
		`pag_ibig` 					= pag_ibig,
		`philhealth` 				= philhealth,
		`TIN` 						= TIN

	WHERE `emp_id` = empID
	AND `spouse_id` = spouse_id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_training`( 
																IN trainingID INT,
																IN training_title VARCHAR(45),
																IN venue VARCHAR(45),
																IN date DATE,
																IN organizer VARCHAR(45),
																IN role VARCHAR(45),
																IN type INT,
																IN empID INT)
BEGIN
	UPDATE `rms`.`faculty_training`
	SET
	`training_id` = trainingID,
	`training_title` = training_title,
	`venue` = venue,
	`date` = date,
	`organizer` = organizer,
	`role` = role,
	`training_type_type_id` = type


	WHERE faculty_profile_emp_id = empID 
	AND training_id = trainingID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_work`(	IN workID INT,
															IN company VARCHAR(45),
															IN address VARCHAR(45),
															IN position VARCHAR(45),
															IN start_date DATE,
															IN end_date DATE,
															IN empID int)
BEGIN
	UPDATE `rms`.`faculty_work_exp`
	SET
	`work_exp_id` = workID,
	`company` = company,
	`address` = address,
	`position` = position,
	`start_date` = start_date,
	`end_date` = end_date

	WHERE emp_id = empID
	AND `work_exp_id` = workID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `upload`(IN file_name VARCHAR(45),
							IN category_id INT,
							IN empID INT
							)
BEGIN
	INSERT INTO `rms`.`upload`
	(
	`file_name`,
	`category_id`,
	`emp_id`)
	VALUES
	(
	file_name,
	cetegory_id,
	empID);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `user_login`(IN username VARCHAR(45),
														 IN password VARCHAR(45)
														)
BEGIN

SELECT  faculty_account.account_id,
		faculty_account.username, 
		faculty_account.password,
		faculty_account.level,
		faculty_profile.firstname,
		faculty_profile.lastname,
		faculty_profile.emp_id

FROM faculty_account

INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id

WHERE faculty_account.username = username


;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `verify_education`(IN empID INT,
                                     IN educID INT)
BEGIN

UPDATE `rms`.`faculty_education`
SET
`status` = 1
WHERE `emp_id` = empID
AND educ_id = educID; 


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `verify_profile`(IN empID INT)
BEGIN

UPDATE `rms`.`faculty_profile`
SET
`prof_status` = 1
WHERE `emp_id` = empID; 


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `verify_regularization`( IN empID INT,
                                                                      IN accountID INT)
BEGIN

UPDATE `rms`.`faculty_account`
SET
`date_regular` = NOW(),
`status` = 1
WHERE `faculty_profile_emp_id` = empID
AND account_id  = accountID;


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `verify_training`(IN empID INT,
                                     IN trainingID INT)
BEGIN

UPDATE `rms`.`faculty_training`
SET
`training_status` = 1
WHERE `faculty_profile_emp_id` = empID
AND training_id  = trainingID; 


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `verify_upload`( IN empID INT,
                                   IN uploadID INT)
BEGIN

UPDATE `rms`.`upload`
SET
`status` = 1
WHERE `emp_id` = empID
AND upload_id = uploadID; 

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `verify_workExp`(IN empID INT,
                                                              IN workID INT)
BEGIN

UPDATE `rms`.`faculty_work_exp`
SET
`work_status` = 1
WHERE `emp_id` = empID
AND  work_exp_id = workID;


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_faculty`(IN empID INT)
BEGIN
	SELECT
		faculty_account.account_id,
		faculty_account.username,
		faculty_profile.lastname,
		faculty_profile.firstname,
		faculty_profile.middlename,
		faculty_profile.bday,
		DATE_FORMAT(bday, '%c') AS Month,
		DATE_FORMAT(bday, '%b') AS MonthName,
		DATE_FORMAT(bday, '%e') AS Day,
		DATE_FORMAT(bday, '%Y') AS Year,
		faculty_profile.birthplace,
		faculty_profile.gender,
		faculty_profile.civil_status,
		faculty_account.email,
		faculty_profile.cell_no,
		faculty_profile.tell_no,
		faculty_profile.city_add,
		faculty_profile.prov_add,
		faculty_profile.philhealth,
		faculty_profile.pag_ibig,
		faculty_profile.sss,
		faculty_profile.tin,
		faculty_profile.emp_id,
		faculty_account.prog_id,
		program.prog_name	
	
	FROM faculty_account

	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id

	INNER JOIN program ON program.prog_id = faculty_account.prog_id

	WHERE faculty_profile.emp_id = empID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_faculty_children`(IN empID INT)
BEGIN
	SELECT
		faculty_children.child_id,
		faculty_children.name,
		faculty_children.child_bday,
		DATE_FORMAT(child_bday, '%c') AS Month,
		DATE_FORMAT(child_bday, '%b') AS MonthName,
		DATE_FORMAT(child_bday, '%e') AS Day,
		DATE_FORMAT(child_bday, '%Y') AS Year

	FROM faculty_children

	INNER JOIN faculty_profile ON faculty_children.emp_id = faculty_profile.emp_id

	WHERE faculty_profile.emp_id = empID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_faculty_education`(IN empID INT)
BEGIN
	SELECT
			faculty_education.educ_id,
			faculty_education.school_name,
			faculty_education.address,
			faculty_education.year,
			educ_type.type_desc,
			faculty_education.degree,
			faculty_education.emp_id
			
			
	FROM faculty_education
	
	INNER JOIN faculty_profile ON faculty_education.emp_id = faculty_profile.emp_id
	INNER JOIN educ_type ON educ_type.type_id = faculty_education.type_id

	WHERE faculty_profile.emp_id = empID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_faculty_profile`(IN empID INT)
BEGIN
	
	SELECT	faculty_account.username,
			faculty_profile.lastname,
			faculty_profile.firstname,
			faculty_profile.middlename,
			faculty_profile.bday,
			DATE_FORMAT(bday, '%c') AS Month,
			DATE_FORMAT(bday, '%b') AS MonthName,
			DATE_FORMAT(bday, '%e') AS Day,
			DATE_FORMAT(bday, '%Y') AS Year,
			faculty_profile.birthplace,
			faculty_profile.gender,
			faculty_profile.civil_status,
			faculty_profile.cell_no,
			faculty_profile.tell_no,
			faculty_profile.city_add,
			faculty_profile.prov_add,
			faculty_profile.philhealth,
			faculty_profile.pag_ibig,
			faculty_profile.sss,
			faculty_profile.tin,
			faculty_account.email,
			faculty_account.prog_id,
			program.prog_name

	FROM faculty_account
	
	INNER JOIN faculty_profile ON faculty_account.faculty_profile_emp_id = faculty_profile.emp_id
	INNER JOIN program ON program.prog_id = faculty_account.prog_id

	WHERE faculty_profile.emp_id = empID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_faculty_skills`(IN empID INT)
BEGIN
	SELECT
		faculty_skills.skill_id,
		faculty_skills.skill_name

	FROM faculty_skills

	INNER JOIN faculty_profile ON faculty_skills.emp_id = faculty_profile.emp_id

	WHERE faculty_profile.emp_id = empID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_faculty_spouse`(IN empID INT)
BEGIN
	SELECT
	faculty_spouse.spouse_id,
	faculty_spouse.lastname,
	faculty_spouse.firstname,
	faculty_spouse.middlename,
	faculty_spouse.spouse_bday,
	DATE_FORMAT(spouse_bday, '%c') AS Month,
	DATE_FORMAT(spouse_bday, '%b') AS MonthName,
	DATE_FORMAT(spouse_bday, '%e') AS Day,
	DATE_FORMAT(spouse_bday, '%Y') AS Year,
	faculty_spouse.birth_place,
	faculty_spouse.emp_id,
	faculty_spouse.faculty_spousecol,
	faculty_spouse.contact_no,
	faculty_spouse.educational_attainment,
	faculty_spouse.occupation,
	faculty_spouse.employer,
	faculty_spouse.address,
	faculty_spouse.SSS,
	faculty_spouse.pag_ibig,
	faculty_spouse.philhealth,
	faculty_spouse.TIN

	FROM faculty_spouse
	
	INNER JOIN faculty_profile ON faculty_spouse.emp_id = faculty_profile.emp_id

	WHERE faculty_profile.emp_id = empID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_faculty_training`(IN empID INT)
BEGIN
	SELECT
		faculty_training.training_id,
		faculty_training.training_title,
		faculty_training.venue,
		faculty_training.date,
		DATE_FORMAT(date, '%c') AS Month,
		DATE_FORMAT(date, '%b') AS MonthName,
		DATE_FORMAT(date, '%e') AS Day,
		DATE_FORMAT(date, '%Y') AS Year,
		faculty_training.organizer,
		faculty_training.role,
		training_type.type_desc

	FROM faculty_training

	INNER JOIN faculty_profile ON faculty_training.faculty_profile_emp_id = faculty_profile.emp_id
	INNER JOIN training_type ON training_type.type_id = faculty_training.training_type_type_id

	WHERE faculty_profile.emp_id = empID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_faculty_work`(IN empID INT)
BEGIN
	SELECT	faculty_work_exp.work_exp_id,
			faculty_work_exp.company,
			faculty_work_exp.address,
			faculty_work_exp.position,
			faculty_work_exp.start_date,
			DATE_FORMAT(start_date, '%c') AS StartMonth,
			DATE_FORMAT(start_date, '%b') AS StartMonthName,
			DATE_FORMAT(start_date, '%e') AS StartDay,
			DATE_FORMAT(start_date, '%Y') AS StartYear,
			faculty_work_exp.end_date,
			DATE_FORMAT(end_date, '%c') AS EndMonth,
			DATE_FORMAT(end_date, '%b') AS EndMonthName,
			DATE_FORMAT(end_date, '%e') AS EndDay,
			DATE_FORMAT(end_date, '%Y') AS EndYear,
			DATE_FORMAT(end_date, '%Y') - DATE_FORMAT(start_date, '%Y') AS YearsOfService
			
	FROM faculty_work_exp
	
	INNER JOIN faculty_profile ON faculty_work_exp.emp_id = faculty_profile.emp_id

	WHERE faculty_profile.emp_id = empID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_picture`(IN uploadID INT)
BEGIN
SELECT
			upload.upload_id,
			upload.file_name,
			upload.title,
			upload.category_id,
			upload_category.category_name,
			upload.emp_id,
			upload.remarks
			
			
	FROM upload
	
	INNER JOIN faculty_profile ON upload.emp_id = faculty_profile.emp_id
	INNER JOIN upload_category ON upload_category.category_id = upload.category_id

	WHERE upload.upload_id = uploadID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_upload`(IN empID INT)
BEGIN
SELECT
			upload.upload_id,
			upload.file_name,
			upload.title,
			upload.category_id,
			upload_category.category_name,
			upload.emp_id,
			upload.remarks
			
			
	FROM upload
	
	INNER JOIN faculty_profile ON upload.emp_id = faculty_profile.emp_id
	INNER JOIN upload_category ON upload_category.category_id = upload.category_id

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
  `rank_id` int(11) DEFAULT NULL,
  `prog_id` int(11) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `rs` varchar(45) DEFAULT NULL,
  `date_regular` datetime DEFAULT NULL,
  `ranking_level` int(11) DEFAULT '0',
  PRIMARY KEY (`account_id`),
  KEY `fk_faculty_account_faculty_profile1_idx` (`faculty_profile_emp_id`),
  KEY `fk_faculty_account_faculty_rank1_idx` (`rank_id`),
  KEY `fk_faculty_account_Program1_idx` (`prog_id`),
  KEY `fk_faculty_account_facutly_level1_idx1` (`level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `faculty_account`
--

INSERT INTO `faculty_account` (`account_id`, `username`, `password`, `date_hired`, `status`, `faculty_profile_emp_id`, `rank_id`, `prog_id`, `level`, `email`, `rs`, `date_regular`, `ranking_level`) VALUES
(26, 'krosel', 'temp', '2009-01-17 20:45:04', '1', 224, NULL, 3, 1, 'krosel@gmail.com', NULL, '2014-02-27 14:55:28', 0),
(27, 'rcarbon', 'temp', '2000-02-23 00:00:00', '0', 225, NULL, 9, 1, 'rcarbon@gmail.com', NULL, NULL, 0),
(28, 'erosel', 'temp', '2001-12-12 00:00:00', '0', 226, NULL, 4, 1, 'erosel@gmail.com', NULL, NULL, 0),
(31, 'cmartin', 'temp', '2003-06-23 00:00:00', '0', 229, NULL, 5, 1, 'cmartin@gmail.com', NULL, NULL, 0),
(32, 'cuyamot', 'temp', '1995-05-25 00:00:00', '1', 230, NULL, 6, 1, 'cuyamot@gmail.com', NULL, '2001-03-12 00:00:00', 0),
(33, 'ivan', 'new', '2009-01-21 10:54:59', '0', 231, NULL, 1, 1, 'ivan@gmail.com', NULL, NULL, 0),
(34, 'Jazz', '1234567', '2010-01-21 10:55:59', '0', 232, NULL, 1, 1, 'jazz@gmail.com', NULL, NULL, 0),
(35, 'jess', 'temp', '2011-01-21 10:56:42', '0', 233, NULL, 1, 1, 'jess@gmail.com', NULL, NULL, 0),
(36, 'james', 'temp', '2001-01-21 10:57:39', '0', 234, NULL, 1, 1, 'james@gmail.com', NULL, NULL, 0),
(39, 'jake', 'temp', '2014-01-21 10:59:12', '0', 237, NULL, 2, 1, 'jake@gmail.com', NULL, NULL, 0),
(40, 'alexus', 'temp', '2014-01-21 11:00:04', '0', 238, NULL, 2, 6, 'alexus@gmail.com', NULL, NULL, 0),
(41, 'janpol', 'temp', '2014-01-21 11:00:54', '0', 239, NULL, 2, 1, 'janpol@gmail.com', NULL, NULL, 0),
(42, 'lara', 'temp', '2014-01-21 11:01:31', '0', 240, NULL, 2, 1, 'lara@gmail.com', NULL, NULL, 0),
(43, 'emelyn', 'temp', '2014-01-21 11:02:16', '0', 241, NULL, 9, 1, 'emelyn@gmail.com', NULL, NULL, 0),
(44, 'jameson', 'temp', '2014-01-21 11:03:52', '0', 242, NULL, 3, 6, 'jameson@gmail.com', NULL, NULL, 0),
(45, 'lebron', 'temp', '2014-01-21 11:04:45', '0', 243, NULL, 4, 1, 'lebron@gmail.com', NULL, NULL, 0),
(46, 'kobe', 'temp', '2014-01-21 11:05:23', '0', 244, NULL, 4, 1, 'kobe@gmail.com', NULL, NULL, 0),
(47, 'durant', 'temp', '2014-01-21 11:06:17', '0', 245, NULL, 4, 1, 'durant@gmail.com', NULL, NULL, 0),
(48, 'paul', 'temp', '2014-01-21 11:07:27', '0', 246, NULL, 5, 1, 'paul@gmail.com', NULL, NULL, 0),
(49, 'ibaka', 'temp', '2014-01-21 11:08:23', '0', 247, NULL, 5, 1, 'ibaka@gmail.com', NULL, NULL, 0),
(50, 'westbrook', 'temp', '2014-01-21 11:09:32', '0', 248, NULL, 5, 1, 'westbrook@gmail.com', NULL, NULL, 0),
(51, 'davis', 'temp', '2014-01-21 11:10:38', '0', 249, NULL, 6, 1, 'davis@gmail.com', NULL, NULL, 0),
(52, 'bynum', 'temp', '2014-01-21 11:11:32', '0', 250, NULL, 6, 1, 'bynum@gmail.com', NULL, NULL, 0),
(53, 'farmar', 'tamp', '2014-01-21 11:12:37', '0', 251, NULL, 6, 1, 'farmar@gmail.com', NULL, NULL, 0),
(54, 'richardson', 'temp', '2014-01-21 11:14:01', '0', 252, NULL, 7, 1, 'richardsom@gmail.com', NULL, NULL, 0),
(55, 'young', 'temp', '2014-01-21 11:14:44', '0', 253, NULL, 6, 1, 'young@gmail.com', NULL, NULL, 0),
(56, 'gasol', 'temp', '2014-01-21 11:15:29', '0', 254, NULL, 7, 1, 'gasol@gmail.com', NULL, NULL, 0),
(57, 'reyes', 'temp', '2014-01-21 11:16:37', '0', 255, NULL, 7, 1, 'reyes@gmail.com', NULL, NULL, 0),
(58, 'taylor', 'temp', '2014-01-21 11:17:31', '0', 256, NULL, 7, 1, 'taylor@gmail.com', NULL, NULL, 0),
(59, 'shen', 'temp', '2014-01-21 11:18:34', '0', 257, NULL, 8, 6, 'shen@gmail.com', NULL, NULL, 0),
(60, 'francis', 'temp', '2014-01-21 11:19:16', '0', 258, NULL, 8, 1, 'francis@gmail.com', NULL, NULL, 0),
(61, 'barrios', 'temp', '2014-01-21 11:20:06', '0', 259, NULL, 8, 3, 'barrios@gmail.com', NULL, NULL, 0),
(62, 'lulo', 'temp', '2014-01-21 11:20:57', '0', 260, NULL, 9, 1, 'lulo@gmail.com', NULL, NULL, 0),
(63, 'alvin', 'temp', '2014-01-21 11:21:52', '0', 261, NULL, 9, 1, 'alvin@gmail.com', NULL, NULL, 0),
(65, 'mahinay', 'temp', '2014-01-21 11:23:00', '0', 263, NULL, 9, 1, 'mahinay@gmail.com', NULL, NULL, 0),
(66, 'la', 'temp', '2014-01-21 11:23:52', '0', 264, NULL, 10, 1, 'la@gmail.com', NULL, NULL, 0),
(67, 'kraken', 'temp', '2014-01-21 11:24:39', '0', 265, NULL, 10, 1, 'kraken@gmail.com', NULL, NULL, 0),
(68, 'jimmy', 'temp', '2014-01-21 11:25:13', '0', 266, NULL, 10, 1, 'jimmy@gmail.com', NULL, NULL, 0),
(69, 'viri', 'temp', '2014-01-21 11:26:06', '0', 267, NULL, 11, 2, 'viri@gmail.com', NULL, NULL, 0),
(70, 'eric', 'temp', '2014-01-21 11:27:00', '0', 268, NULL, 11, 2, 'eric@gmail.com', NULL, NULL, 0),
(71, 'bruce', 'temp', '2014-01-21 17:37:57', '0', 269, NULL, 1, 2, 'bruce@gmail.com', NULL, NULL, 0),
(73, 'hro', 'temp', '2014-02-02 10:56:13', '0', 270, NULL, 11, 2, 'humanresourceoffice@uic.edu.ph', NULL, NULL, 0),
(75, 'aaming', 'temp', '2014-02-04 14:36:53', '0', 272, NULL, 9, 1, 'aaming@gmail.com', NULL, NULL, 0),
(76, 'vhong', 'temp', '2014-02-04 16:20:03', '0', 273, NULL, 1, 6, 'vhong@gmail.com', NULL, NULL, 0),
(77, 'ebarios', 'temp', '2014-02-08 21:24:44', NULL, 274, NULL, 1, 6, 'ebarios@gmail.com', NULL, NULL, 0),
(78, 'jmolina', 'temp', '2014-02-08 21:43:42', NULL, 275, NULL, 4, 6, 'jmolina@gmail.com', NULL, NULL, 0),
(79, 'rankingchairman', 'temp', '2014-02-09 16:58:42', '0', 276, NULL, 11, 5, 'rankingchairman@uic.edu.ph', NULL, NULL, 0),
(80, 'jflorres', 'temp', '2014-02-10 09:41:15', '0', 277, NULL, 1, 1, 'jflorres@gmail.com', NULL, NULL, 0),
(81, 'hilak', 'temp', '2014-02-11 16:26:44', NULL, 278, NULL, 1, 6, 'hilak@gmail.com', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_children`
--

CREATE TABLE IF NOT EXISTS `faculty_children` (
  `child_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `child_bday` varchar(45) DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  PRIMARY KEY (`child_id`),
  KEY `fk_faculty_children_faculty_profile1_idx` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `faculty_children`
--

INSERT INTO `faculty_children` (`child_id`, `name`, `child_bday`, `emp_id`) VALUES
(1, 'Sid Rosel', NULL, 224),
(2, 'Johnny Deep', NULL, 224),
(3, 'Johny Kausapin', NULL, 224),
(4, 'Kirk', NULL, 231),
(5, 'karl', NULL, 242);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_education`
--

CREATE TABLE IF NOT EXISTS `faculty_education` (
  `educ_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(45) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `degree` varchar(45) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  PRIMARY KEY (`educ_id`),
  KEY `fk_faculty_education_educ_type1_idx` (`type_id`),
  KEY `fk_faculty_education_faculty_profile1_idx` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `faculty_education`
--

INSERT INTO `faculty_education` (`educ_id`, `school_name`, `address`, `year`, `status`, `degree`, `type_id`, `emp_id`) VALUES
(2, 'San Pedro College', 'Davao City', 2003, 0, 'Grade School Graduate', 1, 224),
(9, 'Ateneo', 'Davao City', 2013, 0, 'High School Graduate', 2, 224),
(29, 'UIC', 'Davao City', 2001, 0, 'High School Graduate', 2, 226),
(44, 'HCDC', 'Davao City', 2001, 0, 'Grade School Graduate', 1, 226),
(47, 'Ateneo', 'Davao City', 2000, 0, 'MIS', 4, 224),
(48, 'UIC', 'Davao City', 2005, 0, 'BSIT', 3, 231),
(49, 'San Pedro College', 'Davao City', 2000, 0, 'MIS', 4, 242);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_level`
--

CREATE TABLE IF NOT EXISTS `faculty_level` (
  `level_id` int(11) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(45) NOT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `faculty_level`
--

INSERT INTO `faculty_level` (`level_id`, `level_name`) VALUES
(1, 'Faculty'),
(2, 'Human Resource'),
(3, 'Dean'),
(4, 'Administrator'),
(5, 'Ranking Chairman'),
(6, 'Ranking Member');

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
  `birthplace` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `civil_status` varchar(45) DEFAULT NULL,
  `cell_no` varchar(11) DEFAULT NULL,
  `tell_no` varchar(45) DEFAULT NULL,
  `city_add` varchar(50) DEFAULT NULL COMMENT 'City Address',
  `prov_add` varchar(50) DEFAULT NULL COMMENT 'Provincial Address',
  `philhealth` int(11) DEFAULT NULL,
  `sss` int(11) DEFAULT NULL,
  `pag_ibig` int(11) DEFAULT NULL,
  `tin` varchar(45) DEFAULT NULL,
  `date_log` datetime DEFAULT NULL,
  `prof_status` int(11) DEFAULT '0',
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=280 ;

--
-- Dumping data for table `faculty_profile`
--

INSERT INTO `faculty_profile` (`emp_id`, `lastname`, `firstname`, `middlename`, `bday`, `birthplace`, `gender`, `civil_status`, `cell_no`, `tell_no`, `city_add`, `prov_add`, `philhealth`, `sss`, `pag_ibig`, `tin`, `date_log`, `prof_status`) VALUES
(223, 'Tico', 'Wency', 'Dango', '1995-02-23', '', 'Male', 'Single', '09876543211', '123-4567', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-17 20:36:39', 0),
(224, 'Rosel', 'Sidney', 'Dango', '1998-05-28', 'Digos City', 'Male', 'Married', '090987877', '258-0908', 'Calinan, Davao City', 'Cogon, Digos City', NULL, NULL, NULL, NULL, '2009-01-17 20:45:04', 0),
(225, 'Carbon', 'Raymund', 'Labor', '1994-04-19', NULL, 'Male', 'Single', '09481231376', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-17 20:45:04', 0),
(226, 'Rosel', 'An Mariel', 'Dango', '1997-07-02', NULL, 'Female', 'Widow', '0987654321', '123-4567', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-17 20:46:32', 0),
(229, 'Martin', 'Coco', 'John', '1995-01-10', NULL, 'Male', 'Single', '09481231376', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 10:52:04', 0),
(230, 'Uyamot', 'Carollene', 'Dango', '1995-02-23', NULL, 'Female', 'Married', '09481231376', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 10:52:58', 0),
(231, 'Sombilla', 'Ivan', 'Karl', '1994-07-28', NULL, 'Male', 'Single', '09097829965', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 10:54:59', 0),
(232, 'Intes', 'Jaspher', 'Elmer', '1994-02-23', NULL, 'Male', 'Single', '09876543211', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 10:55:59', 0),
(233, 'Garcia', 'Jess', 'Anzilo', '1969-10-23', NULL, 'Male', 'Single', '2143-34235', '214-3422', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 10:56:42', 0),
(234, 'pantaleon', 'James', 'Mitchelle', '1993-03-06', NULL, 'Male', 'Single', '09097829965', '123-4567', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 10:57:39', 0),
(237, 'Padilla', 'Jake', 'Oliver', '1994-09-09', NULL, 'Male', 'Single', '0987654321', '123-4567', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 10:59:12', 0),
(238, 'Fontanilla', 'Alexus', 'Quibod', '1994-03-23', NULL, 'Male', 'Single', '09481231376', '258-3138', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:00:04', 0),
(239, 'Dayrit', 'Janpol', 'Popol', '1994-12-12', NULL, 'Male', 'Single', '0987654321', '285-3181', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:00:54', 0),
(240, 'Rago', 'Lara', 'gaga', '1995-02-23', NULL, 'Male', 'Single', '09481231376', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:01:31', 0),
(241, 'Dela Cruz', 'Emelyn', 'Agtang', '1994-04-19', NULL, 'Female', 'Single', '09876543211', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:02:15', 0),
(242, 'Mandap', 'Jim', 'Soliva', '1994-06-19', NULL, 'Male', 'Single', '09481231376', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:03:52', 0),
(243, 'Lebron', 'James', 'King', '1998-05-28', NULL, 'Male', 'Single', '0987654321', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:04:45', 0),
(244, 'Kobe', 'Bryant', 'Banga', '1995-02-23', NULL, 'Male', 'Single', '09097829965', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:05:23', 0),
(245, 'Durant', 'Kevin', 'Balot', '1995-01-10', NULL, 'Male', 'Married', '0987654321', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:06:17', 0),
(246, 'Paul', 'Cris', 'Gamay', '1994-04-19', NULL, 'Male', 'Single', '0987654321', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:07:27', 0),
(247, 'Ibaka', 'Serge', 'Block', '1993-11-13', NULL, 'Male', 'Single', '09097829965', '123-4567', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:08:23', 0),
(248, 'Westbrook', 'Russel', 'Baki', '1992-11-12', NULL, 'Male', 'Single', '09481231376', '258-3138', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:09:31', 0),
(249, 'Davis', 'Baron', 'kg', '1994-04-23', NULL, 'Male', 'Married', '0987654321', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:10:38', 0),
(250, 'Bynum', 'Andrew', 'drew', '1993-04-14', NULL, 'Male', 'Married', '0987654321', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:11:32', 0),
(251, 'Farmar', 'Jordan', 'Micheal', '1994-09-24', NULL, 'Male', 'Single', '09097829965', '258-3138', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:12:37', 0),
(252, 'Richardson', 'Quentin', 'bogo', '1994-05-21', NULL, 'Male', 'Widow', '09481231376', '258-3138', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:14:01', 0),
(253, 'young', 'nick', 'son', '1994-06-19', NULL, 'Male', 'Widow', '09097829965', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:14:44', 0),
(254, 'Gasol', 'Pau', 'Nene', '1995-03-03', NULL, 'Male', 'Single', '0987654321', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:15:28', 0),
(255, 'Reyes', 'Christine', 'Lami', '1993-04-14', NULL, 'Female', 'Married', '0987654321', '258-3138', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:16:37', 0),
(256, 'Taylor', 'Maui', 'Lami', '1994-07-07', NULL, 'Female', 'Married', '09876543211', '258-3138', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:17:31', 0),
(257, 'Maranguit', 'Shenn', 'CN', '1969-10-23', NULL, 'Female', 'Single', '0987654321', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:18:34', 0),
(258, 'Padao', 'Francis', 'Rey', '1993-11-13', NULL, 'Male', 'Single', '09481231376', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:19:16', 0),
(259, 'Barrios', 'Exander', 'T.', '1993-11-13', NULL, 'Male', 'Single', '09097829965', '285-3181', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:20:06', 0),
(260, 'Lulo', 'Oliver', 'Greamsnake', '1993-04-14', NULL, 'Male', 'Single', '0987654321', '258-3138', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:20:57', 0),
(261, 'Soliven', 'Alvin', 'Jay', '1993-11-13', NULL, 'Male', 'Widow', '0987654321', '258-3138', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:21:52', 0),
(263, 'Mahinay', 'Rene', 'R.', '1998-05-28', NULL, 'Male', 'Married', '09097829965', '258-3138', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:23:00', 0),
(264, 'Tenorio', 'LA', 'captain', '1995-02-23', NULL, 'Male', 'Single', '09481231376', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:23:52', 0),
(265, 'Fajardo', 'Kraken', 'G.', '1995-01-10', NULL, 'Male', 'Single', '09481231376', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:24:39', 0),
(266, 'Alapag', 'Jimmy', 'R.', '1995-02-23', NULL, 'Male', 'Single', '09481231376', '123-4567', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:25:13', 0),
(267, 'Viri', 'Maria', 'Marissa', '1994-06-19', NULL, 'Female', 'Single', '09481231376', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:26:06', 0),
(268, 'Cabale', 'Mae', 'Dango', '1998-05-28', NULL, 'Female', 'Single', '09481231376', '258-1212', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 11:27:00', 0),
(269, 'Bruce', 'Lee', 'sample', '1994-07-28', NULL, 'Male', 'Single', '0987654321', '258-3138', NULL, NULL, NULL, NULL, NULL, NULL, '2014-01-21 17:37:57', 0),
(270, 'Resource', 'Human', 'Office', '1998-05-28', NULL, 'Male', 'Married', '091231376', '258-0908', NULL, NULL, NULL, NULL, NULL, NULL, '2014-02-02 10:56:13', 0),
(271, 'Aming', 'Aplikal', 'Ambot', '1980-02-02', NULL, 'Male', 'Single', '09321626570', '228-2831', NULL, NULL, NULL, NULL, NULL, NULL, '2014-02-04 14:34:37', 0),
(272, 'Aming', 'Aplikal', 'Ambot', '1996-12-03', NULL, 'Female', 'Married', '0987654321', '228-2831', NULL, NULL, NULL, NULL, NULL, NULL, '2014-02-04 14:36:53', 0),
(273, 'Navaro', 'Vhong', 'Ambot', '2014-01-01', NULL, 'Male', 'Single', '09321626570', '228-2831', NULL, NULL, NULL, NULL, NULL, NULL, '2014-02-04 16:20:03', 0),
(274, 'Barios', 'Exander', 'T', NULL, NULL, 'Male', 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-02-08 21:24:44', 0),
(275, 'Molina', 'Jayson', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-02-08 21:43:42', 0),
(276, 'Chairman', 'Ranking', 'ranking chairman', '2014-01-01', NULL, 'Male', 'Single', 'NULL', 'NULL', NULL, NULL, NULL, NULL, NULL, NULL, '2014-02-09 16:58:42', 0),
(277, 'Florres', 'Jerry', 'Henry', '1970-07-04', NULL, 'Male', 'Married', '0987654321', '123-4567', NULL, NULL, NULL, NULL, NULL, NULL, '2014-02-10 09:41:15', 0),
(278, 'Hilak', 'Lara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-02-11 16:26:44', 0),
(279, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_rank`
--

CREATE TABLE IF NOT EXISTS `faculty_rank` (
  `rank_id` int(11) NOT NULL AUTO_INCREMENT,
  `rank_desc` varchar(45) DEFAULT NULL,
  `date_log` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`rank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_skills`
--

CREATE TABLE IF NOT EXISTS `faculty_skills` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(45) DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  PRIMARY KEY (`skill_id`),
  KEY `fk_faculty_skills_faculty_profile1_idx` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `faculty_skills`
--

INSERT INTO `faculty_skills` (`skill_id`, `skill_name`, `emp_id`) VALUES
(1, 'PHP Programming', 224),
(3, 'Programming', 224),
(4, 'Networking', 224),
(5, 'Database Programming', 224),
(6, 'Programming', 231),
(7, 'Programming', 242);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_spouse`
--

CREATE TABLE IF NOT EXISTS `faculty_spouse` (
  `spouse_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `spouse_bday` date DEFAULT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `faculty_spouse`
--

INSERT INTO `faculty_spouse` (`spouse_id`, `lastname`, `firstname`, `middlename`, `spouse_bday`, `birth_place`, `emp_id`, `faculty_spousecol`, `contact_no`, `educational_attainment`, `occupation`, `employer`, `address`, `SSS`, `pag_ibig`, `philhealth`, `TIN`) VALUES
(2, 'Cabale', 'Kristine Mae', 'Sanchez', NULL, 'Davao City', 224, 'ambot', '09481231376', 'College Graduate', 'Teacher', 'ADDU', 'Davao City', '1234', '4321', '1234', '4321'),
(8, 'Garcia', 'Jess', 'Anzilo', NULL, 'Cebu City', 272, '123', '123', 'College', 'Faculty', 'Ambot', 'Davao City', '1234', '12334', '123124', '1231'),
(9, 'Sombilla', 'Kirk', 'Kyle', NULL, 'Cebu', 231, '213', '123', 'College Graduate', 'Teacher', 'ADDU', 'Toril, Davao City', '1234', '4321', '1234', '4321');

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
  `training_status` varchar(45) DEFAULT '0',
  PRIMARY KEY (`training_id`),
  KEY `fk_faculty_training_faculty_profile1_idx` (`faculty_profile_emp_id`),
  KEY `fk_faculty_training_training_type1_idx` (`training_type_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `faculty_training`
--

INSERT INTO `faculty_training` (`training_id`, `training_title`, `venue`, `date`, `organizer`, `role`, `training_type_type_id`, `faculty_profile_emp_id`, `training_status`) VALUES
(1, 'DevCon Summit', 'CAP Auditorium', '2014-01-30', 'DevCon', 'Participant', 2, 224, '0'),
(2, 'GraphiCon', 'UIC', '2014-01-12', 'UIC', 'Speaker', 1, 226, '0'),
(3, 'MSITS', 'Almendras Gym', '2014-01-30', 'MSITS', 'Participant', 2, 224, '0'),
(4, 'DevCon Summit', 'SMX Convention Center', '2013-12-01', 'DevCon', 'Participant', 3, 231, '0'),
(5, 'Devcon', 'Marco Polo', '2010-06-03', 'Organizer', 'Speaker', 1, 242, '0');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_work_exp`
--

CREATE TABLE IF NOT EXISTS `faculty_work_exp` (
  `work_exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `date_log` datetime DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  `work_status` int(11) DEFAULT '0',
  PRIMARY KEY (`work_exp_id`),
  KEY `fk_faculty_work_exp_faculty_profile1_idx` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `faculty_work_exp`
--

INSERT INTO `faculty_work_exp` (`work_exp_id`, `company`, `address`, `position`, `start_date`, `end_date`, `date_log`, `emp_id`, `work_status`) VALUES
(1, 'San Miguel Corp.', 'Toril, Davao City', 'Finance Officer', '2000-08-08', '2008-03-01', '2014-02-02 14:23:40', 224, NULL),
(2, 'San Miguel Corp.', 'Davao City', 'Dean', '2004-05-01', '2013-12-01', '2014-02-03 17:08:50', 231, NULL),
(3, 'Sutherland', 'Davao City', 'Call Center', '2010-03-02', '2013-03-04', '2014-02-04 16:18:29', 242, NULL);

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
-- Table structure for table `ranking_members`
--

CREATE TABLE IF NOT EXISTS `ranking_members` (
  `rankMember_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_emp_id` int(11) NOT NULL,
  `rankProgram` int(11) DEFAULT NULL,
  PRIMARY KEY (`rankMember_id`),
  KEY `fk_ranking_members_program1_idx` (`rankProgram`),
  KEY `fk_ranking_members_faculty_profile1_idx` (`faculty_emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `ranking_members`
--

INSERT INTO `ranking_members` (`rankMember_id`, `faculty_emp_id`, `rankProgram`) VALUES
(6, 274, 3),
(7, 242, 1),
(8, 238, 3),
(9, 275, 2),
(10, 257, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ranking_points`
--

CREATE TABLE IF NOT EXISTS `ranking_points` (
  `ranking_point_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_profile_emp_id` int(11) NOT NULL,
  `educational_qualification` int(11) DEFAULT NULL,
  `teaching_proficiency` int(11) DEFAULT NULL,
  `research` int(11) DEFAULT NULL,
  `community_services` int(11) DEFAULT NULL,
  `training_programs` int(11) DEFAULT NULL,
  `involvements` int(11) DEFAULT NULL,
  PRIMARY KEY (`ranking_point_id`),
  KEY `fk_ranking_points_faculty_profile1_idx` (`faculty_profile_emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ranking_points`
--

INSERT INTO `ranking_points` (`ranking_point_id`, `faculty_profile_emp_id`, `educational_qualification`, `teaching_proficiency`, `research`, `community_services`, `training_programs`, `involvements`) VALUES
(4, 239, 0, 0, 0, 0, 0, 0),
(6, 239, 2, 7, 5, 4, 1, 1),
(7, 237, 2, 7, 5, 4, 1, 1);

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
  `upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`upload_id`),
  KEY `fk_upload_upload_category1_idx` (`category_id`),
  KEY `fk_upload_faculty_profile1_idx` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`upload_id`, `file_name`, `title`, `category_id`, `emp_id`, `remarks`, `status`) VALUES
(4, 'Rosel_2_13.jpg', NULL, 2, 224, NULL, 0),
(5, 'Rosel_3_12.jpg', NULL, 3, 224, NULL, 0),
(6, '224_6.jpg', NULL, 4, 224, NULL, 0),
(7, '224_7.jpg', NULL, 3, 224, NULL, 0),
(9, '224_81.jpg', NULL, NULL, 224, NULL, 0),
(10, '224_9.jpg', NULL, NULL, 224, NULL, 0),
(11, '231_10.jpg', NULL, NULL, 231, NULL, 0),
(12, 'Aming_1_11.jpg', NULL, 1, 272, NULL, 0),
(13, 'Rosel_profPic1.jpg', NULL, NULL, NULL, NULL, 0),
(14, 'Rosel_An_Mariel_profPic.jpg', NULL, NULL, NULL, NULL, 0),
(15, 'Fajardo_Kraken_profPic.jpg', NULL, NULL, NULL, NULL, 0),
(16, 'Rosel_Sidney_profPic.jpg', NULL, NULL, NULL, NULL, 0),
(19, 'Chairman_Ranking_profPic.jpg', NULL, NULL, NULL, NULL, 0),
(20, 'Rosel_Sidney_profPic.jpg', NULL, NULL, NULL, NULL, 0),
(24, 'Cabale_Mae_profPic.jpg', NULL, NULL, NULL, NULL, 0),
(25, 'Resource_Human_profPic.png', NULL, NULL, NULL, NULL, 0),
(33, 'Intes_Jaspher_profPic.jpg', NULL, NULL, NULL, NULL, 0),
(34, 'Cabale_Mae_profPic.jpg', NULL, NULL, NULL, NULL, 0),
(36, 'Resource_Human_profPic.jpg', NULL, NULL, 270, NULL, 0),
(37, 'Resource_Human_profPic.jpg', NULL, NULL, 270, NULL, 0),
(38, 'Resource_Human_profPic.jpg', NULL, NULL, 270, NULL, 0),
(39, 'Rosel_1_22.jpg', 'Sample', 1, 224, 'Sample lng ni xa', 0),
(40, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upload_category`
--

CREATE TABLE IF NOT EXISTS `upload_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `upload_category`
--

INSERT INTO `upload_category` (`category_id`, `category_name`) VALUES
(1, 'Educational Qualification'),
(2, 'Community Extension Service'),
(3, 'Training Programs and Seminars'),
(4, 'Involvement in Professional Organization');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty_account`
--
ALTER TABLE `faculty_account`
  ADD CONSTRAINT `fk_faculty_account_faculty_profile1` FOREIGN KEY (`faculty_profile_emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_faculty_account_faculty_rank1` FOREIGN KEY (`rank_id`) REFERENCES `faculty_rank` (`rank_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_faculty_account_facutly_level1` FOREIGN KEY (`level`) REFERENCES `faculty_level` (`level_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_faculty_account_Program1` FOREIGN KEY (`prog_id`) REFERENCES `program` (`prog_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty_children`
--
ALTER TABLE `faculty_children`
  ADD CONSTRAINT `fk_faculty_children_faculty_profile1` FOREIGN KEY (`emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty_education`
--
ALTER TABLE `faculty_education`
  ADD CONSTRAINT `fk_faculty_education_educ_type1` FOREIGN KEY (`type_id`) REFERENCES `educ_type` (`type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_faculty_education_faculty_profile1` FOREIGN KEY (`emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty_skills`
--
ALTER TABLE `faculty_skills`
  ADD CONSTRAINT `fk_faculty_skills_faculty_profile1` FOREIGN KEY (`emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty_spouse`
--
ALTER TABLE `faculty_spouse`
  ADD CONSTRAINT `emp_id` FOREIGN KEY (`emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_faculty_work_exp_faculty_profile1` FOREIGN KEY (`emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ranking_members`
--
ALTER TABLE `ranking_members`
  ADD CONSTRAINT `fk_ranking_members_faculty_profile1` FOREIGN KEY (`faculty_emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ranking_members_program1` FOREIGN KEY (`rankProgram`) REFERENCES `program` (`prog_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ranking_points`
--
ALTER TABLE `ranking_points`
  ADD CONSTRAINT `fk_ranking_points_faculty_profile1` FOREIGN KEY (`faculty_profile_emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `fk_upload_faculty_profile1` FOREIGN KEY (`emp_id`) REFERENCES `faculty_profile` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_upload_upload_category1` FOREIGN KEY (`category_id`) REFERENCES `upload_category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
