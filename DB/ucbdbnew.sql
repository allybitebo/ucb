CREATE TABLE IF NOT EXISTS `bureaus` (
`bureau_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shortname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extension` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`bureau_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `schools` (
`school_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shortname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `extension` int(11) NOT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `directline` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tweeter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gplus` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bureau_id` int(10) unsigned NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`school_id`),
  CONSTRAINT `FK_bureau_id` FOREIGN KEY (`bureau_id`) REFERENCES `bureaus` (`bureau_id`),
  INDEX `index_bureau_school_id` (`bureau_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE IF NOT EXISTS `departments` (
`department_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shortname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extension` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `department_school_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`department_id`),
  CONSTRAINT `FK_department_school_id` FOREIGN KEY (`department_school_id`) REFERENCES `schools` (`school_id`),
  INDEX `index_dept_school_id` (`department_school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `systemusers` (
	`user_account_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`user_first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`user_middle_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`user_last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`account_password` text NOT NULL,
	`account_type` varchar(30) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
    `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY (`user_account_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE IF NOT EXISTS `consultants` (
`consultant_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `displayname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `consultant_department_id` int(10) unsigned NOT NULL,
  `consultant_user_account_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`consultant_id`),
  CONSTRAINT `FK_consultant_department_id` FOREIGN KEY (`consultant_department_id`) REFERENCES `departments` (`department_id`),
  CONSTRAINT `FK_consultant_user_id` FOREIGN KEY (`consultant_user_account_id`) REFERENCES `systemusers` (`user_account_id`),
  INDEX `index_consultant_department_id` (`consultant_department_id`),
  INDEX `index_consultant_user_id` (`consultant_user_account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE IF NOT EXISTS `sectors` (
`sector_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`sector_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE IF NOT EXISTS `domains` (
`domain_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `domain_sector_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`domain_id`),
  CONSTRAINT `FK_domain_sector_id` FOREIGN KEY (`domain_sector_id`) REFERENCES `sectors` (`sector_id`),
  INDEX `index_sector_id` (`domain_sector_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE IF NOT EXISTS `subjects` (
`subject_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject_sector_id` int(10) unsigned NOT NULL,
  `subject_domain_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`subject_id`),
  CONSTRAINT `FK_subject_sector_id` FOREIGN KEY (`subject_sector_id`) REFERENCES `sectors` (`sector_id`),
  CONSTRAINT `FK_subject_domain_id` FOREIGN KEY (`subject_domain_id`) REFERENCES `domains` (`domain_id`),
  INDEX `index_subject_sector_id` (`subject_sector_id`),
   INDEX `index_subject_domain_id` (`subject_domain_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE IF NOT EXISTS `competences` (
`competence_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `competence_sector_id` int(10) unsigned NOT NULL,
  `competence_domain_id` int(10) unsigned NOT NULL,
  `competence_subject_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`competence_id`),
  CONSTRAINT `FK_competence_sector_id` FOREIGN KEY (`competence_sector_id`) REFERENCES `sectors` (`sector_id`),
  CONSTRAINT `FK_competence_domain_id` FOREIGN KEY (`competence_domain_id`) REFERENCES `domains` (`domain_id`),
  CONSTRAINT `FK_competence_subject_id` FOREIGN KEY (`competence_subject_id`) REFERENCES `subjects` (`subject_id`),
  INDEX `index_subject_sector_id` (`competence_sector_id`),
  INDEX `index_competence_domain_id` (`competence_domain_id`),
  INDEX `index_competence_subject_id` (`competence_subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `projects` (
`project_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_number` varchar(50) NOT NULL,
  `project_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_type_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `days` int(11) NOT NULL,
  `total_amount` int(11) unsigned NOT NULL,
  `project_status` varchar(100)  NOT NULL,
  `project_sector_id` int(10) unsigned NOT NULL,
  `project_bureau_id` int (10) unsigned NULL,
  `project_school_id` int (10) unsigned NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`project_id`),
  CONSTRAINT `FK_project_bureau_id` FOREIGN KEY (`project_bureau_id`) REFERENCES `bureaus` (`bureau_id`),
  CONSTRAINT `FK_project_school_id` FOREIGN KEY (`project_school_id`) REFERENCES `schools` (`school_id`),
  CONSTRAINT `FK_project_sector_id` FOREIGN KEY (`project_sector_id`) REFERENCES `sectors` (`sector_id`),
  INDEX `index_project_bureau_id` (`project_bureau_id`),
  INDEX `index_project_school_id` (`project_school_id`),
  INDEX `index_project_sector_id` (`project_sector_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `clients` (
`client_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `client_short_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `client_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `client_Telephone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `client_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `client_website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `client_sector` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `client_project` (
`client_project_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clnt_proj_client_id` int(10) unsigned NOT NULL,
  `clnt_proj_project_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`client_project_id`),
  CONSTRAINT `FK_clnt_proj_client_id` FOREIGN KEY (`clnt_proj_client_id`) REFERENCES `clients` (`client_id`),
  CONSTRAINT `FK_clnt_proj_project_id` FOREIGN KEY (`clnt_proj_project_id`) REFERENCES `projects` (`project_id`),
  INDEX `index_clnt_proj_client_id` (`clnt_proj_client_id`),
  INDEX `index_clnt_proj_project_id` (`clnt_proj_project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `payments` (
`payment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `installment_number` int(11) NOT NULL,
  `payment_client_id` int(10) unsigned NOT NULL,
  `payment_project_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`payment_id`),
  CONSTRAINT `FK_payment_client_id` FOREIGN KEY (`payment_client_id`) REFERENCES `clients` (`client_id`),
  CONSTRAINT `FK_payment_project_id` FOREIGN KEY (`payment_project_id`) REFERENCES `projects` (`project_id`),
  INDEX `index_cpayment_client_id` (`payment_client_id`),
  INDEX `index_payment_project_id` (`payment_project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `consultant_project` (
`consultant_project_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cons_proj_consultant_id` int(10) unsigned NOT NULL,
  `cons_proj_project_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`consultant_project_id`),
  CONSTRAINT `FK_cons_proj_consultant_id` FOREIGN KEY (`cons_proj_consultant_id`) REFERENCES `consultants` (`consultant_id`),
  CONSTRAINT `FK_cons_proj_project_id` FOREIGN KEY (`cons_proj_project_id`) REFERENCES `projects` (`project_id`),
  INDEX `index_cons_proj_consultant_id` (`cons_proj_consultant_id`),
  INDEX `index_cons_proj_project_id` (`cons_proj_project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `officers` (
`officer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `displayname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `officer_bureau_id` int(10) unsigned NULL,
  `officer_school_id` int(10) unsigned NULL,
  `officer_user_account_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`officer_id`),
  CONSTRAINT `FK_officer_bureau_id` FOREIGN KEY (`officer_bureau_id`) REFERENCES `bureaus` (`bureau_id`),
  CONSTRAINT `FK_officer_school_id` FOREIGN KEY (`officer_school_id`) REFERENCES `schools` (`school_id`),
  CONSTRAINT `FK_officer_user_id` FOREIGN KEY (`officer_user_account_id`) REFERENCES `systemusers` (`user_account_id`),
  INDEX `index_officer_bureau_id` (`officer_bureau_id`),
  INDEX `index_officer_school_id` (`officer_school_id`),
  INDEX `index_officer_user_id` (`officer_user_account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

//added by shio 27-1-2016

CREATE TABLE IF NOT EXISTS `consultant_competence` (
`consu_compe_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `consu_compe_consultant_id` int(10) unsigned NOT NULL,
  `consu_compe_competence_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`consu_compe_id`),
  CONSTRAINT `FK_consu_compe_consultant_id` FOREIGN KEY (`consu_compe_consultant_id`) REFERENCES `consultants` (`consultant_id`),
  CONSTRAINT `FK_consu_compe_competence_id` FOREIGN KEY (`consu_compe_competence_id`) REFERENCES `competences` (`competence_id`),
  INDEX `index_consu_compe_consultant_id` (`consu_compe_consultant_id`),
  INDEX `index_consu_compe_competence_id` (`consu_compe_competence_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;