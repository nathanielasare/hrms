/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Prince Annan Koomson
 * Created: Jan 27, 2017
 */
Create Database 'hrms';

USE `hrms`;

CREATE TABLE `countries` (
  `id` int(6) not null  AUTO_INCREMENT,
  `name` varchar(80) NOT NULL DEFAULT '',
  `code` char(2) NOT NULL DEFAULT '',
  `code_name` varchar(10) NOT NULL DEFAULT '',
  `iso3` char(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `job_titles`
(
`id`  int(6) not null  AUTO_INCREMENT,
`name`  varchar(50) DEFAULT NULL comment 'Director',
`status` tinyint(1)  DEFAULT  comment 'Active 1, Inactive 0'
);

CREATE TABLE `marital_status`
(
`id` int not null  AUTO_INCREMENT,
`name`  varchar(50) DEFAULT NULL comment 'Single,Married, Divorced, Widow, Widower',
`status` tinyint(1)  DEFAULT  comment 'Active 1, Inactive 0'
);



CREATE TABLE `hs_hr_employee` (
  `id` int(6) not null  AUTO_INCREMENT,
  `employe_number` int(7) NOT NULL DEFAULT '0',
  `employee_id` varchar(50) DEFAULT NULL,
  `lastname` varchar(100) NOT NULL DEFAULT '',
  `firstname` varchar(100) NOT NULL DEFAULT '',
  `middle_name` varchar(100) NOT NULL DEFAULT '',
  `nick_name` varchar(100) DEFAULT '',
  `birthday` date DEFAULT NULL,
  `country_id` int(6) DEFAULT NULL,
  `gender` smallint(6) DEFAULT NULL,
  `marital_status` varchar(20) DEFAULT NULL,
  `ssn_num` varchar(50) CHARACTER SET latin1 DEFAULT '',
  `dri_lice_num` varchar(100) DEFAULT '',
  `dri_lice_exp_date` date DEFAULT NULL,
  `joined_date` date DEFAULT NULL,
  `status` int(13) DEFAULT NULL,
  `job_title_code` int(7) DEFAULT NULL,
  `street1` varchar(100) DEFAULT '',
  `street2` varchar(100) DEFAULT '',
  `city_code` varchar(100) DEFAULT '',
  `coun_code` varchar(100) DEFAULT '',
  `provin_code` varchar(100) DEFAULT '',
  `zipcode` varchar(20) DEFAULT NULL,
  `home_telephone` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `work_telephone` varchar(50) DEFAULT NULL,
  `work_email` varchar(50) DEFAULT NULL,
  `other_email` varchar(50) DEFAULT NULL,
  `smoker` smallint(6) DEFAULT '0',
  `ethnic_race_code` varchar(13) DEFAULT NULL,
  `termination_id` int(4) DEFAULT NULL,
  `emp_sin_num` varchar(100) DEFAULT '',
  `emp_other_id` varchar(100) DEFAULT '',
  `emp_military_service` varchar(100) DEFAULT '',
  `eeo_cat_code` int(11) DEFAULT NULL,
  `sal_grd_code` varchar(13) DEFAULT NULL,
  `work_station` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) 