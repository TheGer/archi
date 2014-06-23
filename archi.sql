-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2014 at 11:35 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `archi`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvalrequest`
--

CREATE TABLE IF NOT EXISTS `approvalrequest` (
  `approvalrequestid` int(11) NOT NULL,
  `contractno` int(11) NOT NULL,
  `arno` int(11) NOT NULL,
  `to` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `comments` text NOT NULL,
  `commentsforonbehalfof` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `approval` varchar(100) NOT NULL,
  `approvalto` varchar(100) NOT NULL,
  `reviewby` varchar(100) NOT NULL,
  `foronbehalfof` varchar(100) NOT NULL,
  `titleof` varchar(100) NOT NULL,
  `received` varchar(100) NOT NULL,
  `drawinglist` text NOT NULL,
  `projectid` int(11) NOT NULL,
  KEY `fk_approvalrequest_project1_idx` (`projectid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `attendanceid` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `company` varchar(45) NOT NULL,
  `role` varchar(45) DEFAULT NULL,
  `responsibility` varchar(45) DEFAULT NULL,
  `acronym` varchar(45) DEFAULT NULL,
  `note` text,
  `presentabsent` tinyint(1) NOT NULL,
  `meetingid` int(11) NOT NULL,
  PRIMARY KEY (`attendanceid`),
  KEY `fk_attendance_minutesofmeeting1_idx` (`meetingid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dailyrecord`
--

CREATE TABLE IF NOT EXISTS `dailyrecord` (
  `dailyrecordid` int(25) NOT NULL AUTO_INCREMENT,
  `wind` varchar(50) NOT NULL,
  `maxtemp` int(25) NOT NULL,
  `relativehumidity` int(25) NOT NULL,
  `date` varchar(50) NOT NULL,
  `supervisors` int(25) NOT NULL,
  `tradesmen` int(25) NOT NULL,
  `labour` int(25) NOT NULL,
  `builder` int(25) NOT NULL,
  `equipment` text NOT NULL,
  `works` text NOT NULL,
  `remarks` text NOT NULL,
  `deliveries` text NOT NULL,
  `phonecalls` text NOT NULL,
  `visitors` text NOT NULL,
  `nonconformance` text NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `signed` tinyint(1) NOT NULL,
  `projectid` int(11) NOT NULL,
  PRIMARY KEY (`dailyrecordid`),
  KEY `fk_dailyrecord_project_idx` (`projectid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='daily record form' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `financialmatters`
--

CREATE TABLE IF NOT EXISTS `financialmatters` (
  `financialmattersid` int(11) NOT NULL,
  `meetingid` int(11) NOT NULL,
  `note` varchar(45) NOT NULL,
  `actionby` varchar(45) NOT NULL,
  `duedate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`financialmattersid`),
  KEY `fk_generalmatters_minutesofmeeting1_idx` (`meetingid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `generalmatters`
--

CREATE TABLE IF NOT EXISTS `generalmatters` (
  `generalmattersid` int(11) NOT NULL,
  `meetingid` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `ref` varchar(45) NOT NULL,
  `notes` varchar(45) DEFAULT NULL,
  `milestonedate` varchar(45) DEFAULT NULL,
  `milestonedescription` varchar(45) DEFAULT NULL,
  `generalmatterscol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`generalmattersid`),
  KEY `fk_generalmatters_minutesofmeeting1_idx` (`meetingid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `healthandsafety`
--

CREATE TABLE IF NOT EXISTS `healthandsafety` (
  `healthandsafetyid` int(11) NOT NULL,
  `note` text NOT NULL,
  `actionby` varchar(45) NOT NULL,
  `duedate` varchar(45) NOT NULL,
  `meetingid` int(11) NOT NULL,
  PRIMARY KEY (`healthandsafetyid`),
  KEY `fk_progressofworks_minutesofmeeting1_idx` (`meetingid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `minutesofmeeting`
--

CREATE TABLE IF NOT EXISTS `minutesofmeeting` (
  `minutesofmeetingid` int(11) NOT NULL,
  `projectid` int(11) NOT NULL,
  `time` varchar(45) NOT NULL,
  `place` varchar(45) NOT NULL,
  `typeofmeeting` varchar(45) NOT NULL,
  `meetingnumber` int(11) NOT NULL,
  `date` varchar(45) NOT NULL,
  `nextmeetingdate` varchar(45) DEFAULT NULL,
  `nextmeetingtime` varchar(45) DEFAULT NULL,
  `nextmeetinglocation` varchar(45) DEFAULT NULL,
  `sectionbcontractnumber` varchar(45) DEFAULT NULL,
  `sectionbtitle` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`minutesofmeetingid`),
  KEY `fk_minutesofmeeting_project1_idx` (`projectid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `noticetocheck`
--

CREATE TABLE IF NOT EXISTS `noticetocheck` (
  `noticetocheckid` int(11) NOT NULL,
  `projectid` int(11) NOT NULL,
  `contractnumber` varchar(45) DEFAULT NULL,
  `to` varchar(45) DEFAULT NULL,
  `from` varchar(45) DEFAULT NULL,
  `referencenumber` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `description` text,
  `concealmentdate` varchar(45) DEFAULT NULL,
  `concealmenttime` varchar(45) DEFAULT NULL,
  `comments` text,
  `inspectedbyname` varchar(45) DEFAULT NULL,
  `inspectedbyposition` varchar(45) DEFAULT NULL,
  `inspectedbydate` varchar(45) DEFAULT NULL,
  `consultantname` varchar(45) DEFAULT NULL,
  `consultantposition` varchar(45) DEFAULT NULL,
  `consultantdate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`noticetocheckid`),
  KEY `fk_noticetocheck_project1_idx` (`projectid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `progressofworks`
--

CREATE TABLE IF NOT EXISTS `progressofworks` (
  `progressofworkid` int(11) NOT NULL,
  `note` text NOT NULL,
  `actionby` varchar(45) NOT NULL,
  `duedate` varchar(45) NOT NULL,
  `meetingid` int(11) NOT NULL,
  PRIMARY KEY (`progressofworkid`),
  KEY `fk_progressofworks_minutesofmeeting1_idx` (`meetingid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `projectid` int(11) NOT NULL AUTO_INCREMENT,
  `projectname` varchar(45) NOT NULL,
  `startdate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`projectid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rfi`
--

CREATE TABLE IF NOT EXISTS `rfi` (
  `rfiid` int(11) NOT NULL,
  `projectid` int(11) NOT NULL,
  `to` varchar(45) DEFAULT NULL,
  `issue` text,
  `datesubmitted` varchar(45) DEFAULT NULL,
  `datereceived` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`rfiid`),
  KEY `fk_rfi_project1_idx` (`projectid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `roleid` int(11) NOT NULL,
  `rolename` varchar(45) NOT NULL,
  PRIMARY KEY (`roleid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE IF NOT EXISTS `sample` (
  `sampleid` int(11) NOT NULL,
  `sarid` int(11) NOT NULL,
  `drawingnumber` varchar(45) DEFAULT NULL,
  `specificationsection` text,
  `certificate` text,
  `specifications` text,
  `sample` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sampleid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `technicalmatters`
--

CREATE TABLE IF NOT EXISTS `technicalmatters` (
  `technicalmattersid` int(11) NOT NULL,
  `meetingid` int(11) NOT NULL,
  `note` varchar(45) NOT NULL,
  `actionby` varchar(45) NOT NULL,
  `duedate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`technicalmattersid`),
  KEY `fk_generalmatters_minutesofmeeting1_idx` (`meetingid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `roleid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `variationattachment`
--

CREATE TABLE IF NOT EXISTS `variationattachment` (
  `variationattachmentid` int(11) NOT NULL,
  `variationorderid` int(11) NOT NULL,
  `attachmentpath` varchar(45) DEFAULT NULL,
  `attachmentdescription` text,
  PRIMARY KEY (`variationattachmentid`),
  KEY `fk_variationattachment_variationorder1_idx` (`variationorderid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `variationorder`
--

CREATE TABLE IF NOT EXISTS `variationorder` (
  `variationorderid` int(11) NOT NULL,
  `projectid` int(11) NOT NULL,
  `contractnumber` varchar(45) DEFAULT NULL,
  `to` varchar(45) DEFAULT NULL,
  `from` varchar(45) DEFAULT NULL,
  `referencenumber` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `variationdetails` text,
  `variationreason` text,
  `costbreakdown` text,
  `effectsonduration` text,
  `requestedbyuomdate` varchar(45) DEFAULT NULL,
  `approveddate` varchar(45) DEFAULT NULL,
  `approvedconsultantdate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`variationorderid`),
  KEY `fk_variationorder_project1_idx` (`projectid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approvalrequest`
--
ALTER TABLE `approvalrequest`
  ADD CONSTRAINT `fk_approvalrequest_project1` FOREIGN KEY (`projectid`) REFERENCES `project` (`projectid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `fk_attendance_minutesofmeeting1` FOREIGN KEY (`meetingid`) REFERENCES `minutesofmeeting` (`minutesofmeetingid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dailyrecord`
--
ALTER TABLE `dailyrecord`
  ADD CONSTRAINT `fk_dailyrecord_project` FOREIGN KEY (`projectid`) REFERENCES `project` (`projectid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `financialmatters`
--
ALTER TABLE `financialmatters`
  ADD CONSTRAINT `fk_generalmatters_minutesofmeeting100` FOREIGN KEY (`meetingid`) REFERENCES `minutesofmeeting` (`minutesofmeetingid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `generalmatters`
--
ALTER TABLE `generalmatters`
  ADD CONSTRAINT `fk_generalmatters_minutesofmeeting1` FOREIGN KEY (`meetingid`) REFERENCES `minutesofmeeting` (`minutesofmeetingid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `healthandsafety`
--
ALTER TABLE `healthandsafety`
  ADD CONSTRAINT `fk_progressofworks_minutesofmeeting10` FOREIGN KEY (`meetingid`) REFERENCES `minutesofmeeting` (`minutesofmeetingid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `minutesofmeeting`
--
ALTER TABLE `minutesofmeeting`
  ADD CONSTRAINT `fk_minutesofmeeting_project1` FOREIGN KEY (`projectid`) REFERENCES `project` (`projectid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `noticetocheck`
--
ALTER TABLE `noticetocheck`
  ADD CONSTRAINT `fk_noticetocheck_project1` FOREIGN KEY (`projectid`) REFERENCES `project` (`projectid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `progressofworks`
--
ALTER TABLE `progressofworks`
  ADD CONSTRAINT `fk_progressofworks_minutesofmeeting1` FOREIGN KEY (`meetingid`) REFERENCES `minutesofmeeting` (`minutesofmeetingid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rfi`
--
ALTER TABLE `rfi`
  ADD CONSTRAINT `fk_rfi_project1` FOREIGN KEY (`projectid`) REFERENCES `project` (`projectid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `technicalmatters`
--
ALTER TABLE `technicalmatters`
  ADD CONSTRAINT `fk_generalmatters_minutesofmeeting10` FOREIGN KEY (`meetingid`) REFERENCES `minutesofmeeting` (`minutesofmeetingid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `variationattachment`
--
ALTER TABLE `variationattachment`
  ADD CONSTRAINT `fk_variationattachment_variationorder1` FOREIGN KEY (`variationorderid`) REFERENCES `variationorder` (`variationorderid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `variationorder`
--
ALTER TABLE `variationorder`
  ADD CONSTRAINT `fk_variationorder_project1` FOREIGN KEY (`projectid`) REFERENCES `project` (`projectid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
