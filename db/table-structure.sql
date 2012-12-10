-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2012 at 06:03 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `answer_text` varchar(800) CHARACTER SET utf8 DEFAULT NULL,
  `answer_image` varchar(450) CHARACTER SET utf8 DEFAULT NULL,
  `correct_answer` int(11) NOT NULL,
  `priority` int(11) DEFAULT NULL,
  `correct_answer_text` varchar(800) CHARACTER SET utf8 DEFAULT NULL,
  `answer_pos` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL,
  `answer_text_eng` varchar(800) CHARACTER SET utf8 DEFAULT NULL,
  `control_type` int(11) DEFAULT NULL,
  `answer_parent_id` int(11) DEFAULT NULL,
  `text_unit` char(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answers`
--


-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE IF NOT EXISTS `assignments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_id` int(11) NOT NULL DEFAULT '0',
  `org_quiz_id` int(11) NOT NULL DEFAULT '0',
  `results_mode` int(11) NOT NULL DEFAULT '0',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `quiz_time` int(11) NOT NULL DEFAULT '0',
  `show_results` int(11) NOT NULL DEFAULT '0',
  `pass_score` decimal(10,2) NOT NULL DEFAULT '0.00',
  `quiz_type` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `by` int(4) NOT NULL,
  `review` int(1) NOT NULL DEFAULT '0',
  `desc` text NOT NULL,
  `start_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `assignments`
--


-- --------------------------------------------------------

--
-- Table structure for table `assignment_users`
--

CREATE TABLE IF NOT EXISTS `assignment_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment_id` int(11) NOT NULL DEFAULT '0',
  `user_type` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `assignment_id` (`assignment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=119 ;

--
-- Dumping data for table `assignment_users`
--


-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE IF NOT EXISTS `cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cats`
--


-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `class` varchar(255) NOT NULL,
  `sch_id` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `classes`
--


-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `config_id` int(3) NOT NULL AUTO_INCREMENT,
  `param` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`config_id`, `param`, `value`) VALUES
(1, 'signup', '0');

-- --------------------------------------------------------

--
-- Table structure for table `imported_users`
--

CREATE TABLE IF NOT EXISTS `imported_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `surname` varchar(255) NOT NULL DEFAULT '',
  `user_name` varchar(150) NOT NULL DEFAULT '',
  `password` varchar(150) NOT NULL DEFAULT '',
  `sch` int(4) NOT NULL,
  `cls` int(4) NOT NULL,
  `cats` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `imported_users`
--

INSERT INTO `imported_users` (`id`, `name`, `surname`, `user_name`, `password`, `sch`, `cls`, `cats`) VALUES
(1, 'test1', 'test2', 'user1', 'ee11cbb19052e40b07aac0ca060c23ee', 0, 0, ''),
(2, 'test2', 'test2', 'user2', 'ee11cbb19052e40b07aac0ca060c23ee', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `priority` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `module_name`, `file_name`, `parent_id`, `priority`) VALUES
(1, 'Test Managment', NULL, 0, '1'),
(2, 'Categories', 'cats', 1, '1'),
(3, 'Quizzes', 'quizzes', 1, '2'),
(4, 'Local users', 'local_users', 1, '4'),
(5, 'Test Assignments', NULL, 0, '2'),
(6, 'Assignments', 'assignments', 5, '6'),
(7, 'New Assignment', 'add_assignment', 5, '7'),
(8, 'Assignments', NULL, 0, '3'),
(9, 'Active Assignments', 'active_assignments', 8, '1'),
(10, 'My old assigments', 'old_assignments', 8, '2'),
(11, 'New user', 'add_edit_user', 1, '5'),
(12, 'New Quiz', 'add_edit_quiz', 1, '3'),
(13, 'School Management', NULL, 0, '4'),
(14, 'Schools', 'schools', 13, '5'),
(15, 'Classes', 'classes', 13, '5');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_text` varchar(3800) DEFAULT NULL,
  `question_type_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `point` decimal(18,0) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `parent_id` int(11) NOT NULL,
  `question_total` decimal(18,0) DEFAULT NULL,
  `check_total` int(11) DEFAULT NULL,
  `header_text` varchar(1500) CHARACTER SET utf8 DEFAULT NULL,
  `footer_text` varchar(1500) CHARACTER SET utf8 DEFAULT NULL,
  `question_text_eng` varchar(1800) CHARACTER SET utf8 DEFAULT NULL,
  `help_image` varchar(550) CHARACTER SET utf8 DEFAULT NULL,
  `reason` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `quiz_id` (`quiz_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `questions`
--


-- --------------------------------------------------------

--
-- Table structure for table `question_groups`
--

CREATE TABLE IF NOT EXISTS `question_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(450) NOT NULL,
  `show_header` int(11) NOT NULL,
  `group_total` decimal(18,0) NOT NULL,
  `show_footer` int(11) DEFAULT NULL,
  `check_total` decimal(18,0) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `group_name_eng` varchar(450) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1820 ;

--
-- Dumping data for table `question_groups`
--


-- --------------------------------------------------------

--
-- Table structure for table `question_types`
--

CREATE TABLE IF NOT EXISTS `question_types` (
  `id` int(11) NOT NULL,
  `question_type` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_types`
--

INSERT INTO `question_types` (`id`, `question_type`) VALUES
(0, 'Multi answer (checkbox)'),
(3, 'Free text (textarea)'),
(4, 'Multi text (numbers only)'),
(1, 'One answer (radio button)'),
(2, 'One answer (radio image)');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE IF NOT EXISTS `quizzes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `quiz_name` varchar(500) NOT NULL,
  `quiz_desc` varchar(500) NOT NULL,
  `added_date` datetime NOT NULL,
  `parent_id` int(11) NOT NULL,
  `show_intro` int(11) NOT NULL,
  `intro_text` varchar(3850) DEFAULT NULL,
  `author` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `quizzes`
--


-- --------------------------------------------------------

--
-- Table structure for table `roles_rights`
--

CREATE TABLE IF NOT EXISTS `roles_rights` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `roles_rights`
--

INSERT INTO `roles_rights` (`Id`, `role_id`, `module_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 4),
(4, 1, 6),
(5, 1, 7),
(12, 1, 12),
(11, 1, 11),
(9, 2, 9),
(10, 2, 10),
(13, 3, 3),
(15, 3, 6),
(16, 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `sch_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `schools`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Surname` varchar(150) NOT NULL,
  `added_date` datetime NOT NULL,
  `user_type` int(11) DEFAULT NULL,
  `email` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `sch` int(4) NOT NULL DEFAULT '0',
  `cls` int(4) NOT NULL DEFAULT '0',
  `cats` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `Password`, `Name`, `Surname`, `added_date`, `user_type`, `email`, `sch`, `cls`, `cats`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', '0000-00-00 00:00:00', 1, 'admin', 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE IF NOT EXISTS `user_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_quiz_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `user_answer_id` int(11) DEFAULT NULL,
  `user_answer_text` varchar(3800) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_answers`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_quizzes`
--

CREATE TABLE IF NOT EXISTS `user_quizzes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `success` int(11) DEFAULT NULL,
  `finish_date` datetime DEFAULT NULL,
  `pass_score_point` decimal(10,2) DEFAULT NULL,
  `pass_score_perc` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `assignment_id` (`assignment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `user_quizzes`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE IF NOT EXISTS `user_types` (
  `id` int(11) NOT NULL,
  `type_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `type_name`) VALUES
(1, 'Admin'),
(2, 'Siswa'),
(3, 'Guru');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_imported_users`
--
CREATE TABLE IF NOT EXISTS `v_imported_users` (
`UserID` int(11)
,`Name` varchar(250)
,`Surname` varchar(255)
,`UserName` varchar(150)
,`Password` varchar(150)
,`sch` int(4)
,`cls` int(4)
,`cats` varchar(255)
);
-- --------------------------------------------------------

--
-- Structure for view `v_imported_users`
--
DROP TABLE IF EXISTS `v_imported_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_imported_users` AS select `imported_users`.`id` AS `UserID`,`imported_users`.`name` AS `Name`,`imported_users`.`surname` AS `Surname`,`imported_users`.`user_name` AS `UserName`,`imported_users`.`password` AS `Password`,`imported_users`.`sch` AS `sch`,`imported_users`.`cls` AS `cls`,`imported_users`.`cats` AS `cats` from `imported_users`;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `question_groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `assignment_users`
--
ALTER TABLE `assignment_users`
  ADD CONSTRAINT `assignment_users_ibfk_1` FOREIGN KEY (`assignment_id`) REFERENCES `assignments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `question_groups`
--
ALTER TABLE `question_groups`
  ADD CONSTRAINT `question_groups_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_quizzes`
--
ALTER TABLE `user_quizzes`
  ADD CONSTRAINT `user_quizzes_ibfk_1` FOREIGN KEY (`assignment_id`) REFERENCES `assignments` (`id`) ON DELETE CASCADE;
