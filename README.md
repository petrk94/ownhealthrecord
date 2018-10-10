# ownhealthrecord
This repository is about the Own Health Record Application Web App

## Whats about?
One problem I faced personally is, that I have different doctors and through traveling and moving to another cities, every doctor has only a snippet of my medical data records.
This can cause problems, due if Im sick and dont know the medical name for it, the doctor doesnt know about my health problems and so on.
For that reason, and because the German Insurances and Doctor Software Supplier are unable to get something working, I decide to make my own health record to have the medical history on my side.

## When it will be shared?
Soon, at least I hope.
The Problem is, ~~Im using a HTML/CSS Dashboard Template from a third party developer and he doesnt has shared the license for it and due I really like the design of it, I want to use it~~. I made already a running proof of concept web app with the basic functionality, but its not yet ready for productive use and represent more a early alpha (really, I suppose you dont want just to use a one page table).

# Requirements
* LAMP Stack
* PHP 7
* A MySQL/MariaDB database

# How to use 
Upload the files or clone the repo to your Document Root / html folder on your server, 
You have to create on mysql via PHPMyAdmin a new database and run the SQL commands to generate the right table.

```

CREATE TABLE IF NOT EXISTS `medicalrecords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `responsive_doctor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `issue_description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `diagnosis` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `prescribed_solution` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
  )
  
  
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `doctor_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_type` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `treatment_period` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
  )  
```

Open the install.php in your browser and type in your MySQL/Mariadb credentials, 
afterwards these are written in the dbconnection.php file and you get forwarded to the application.

## Current Functionality
* medical-Record.php - here you can write down your personal medical record and get it    displayed what was saved in the database.

* doctors-list.php - here you can see all your doctors contact information as well the    threatment time, so you will not forget when you was there and how long the doctor has
  cared about your health like, Threatment period 01.2018 - 10.2018.
  
* medicine.php - here you can add your medication, dosis, period of usage, link to a    
  information website about the medicine you are taking and additional warnings by your doctor.


## Screenshot
![alt Screenshot of functional medical record](https://github.com/petrk94/ownhealthrecord/blob/master/ownhealthrecord_medrecord_dashboard.png)


## Used Dashboard Theme
The Dashboard theme, developed by Creative Tim is the <a href="https://github.com/creativetimofficial/paper-dashboard" target="_blank">Paper-Dashboard</a> and is licensed by <a href="https://www.creative-tim.com/license/" target="_blank">Creative Tim under MIT License</a>.
