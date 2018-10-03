# ownhealthrecord
This repository is about the Own Health Record Application Web App

## Whats about?
One problem I faced personally is, that I have different doctors and through traveling and moving to another cities, every doctor has only a snippet of my medical data records.
This can cause problems, due if Im sick and dont know the medical name for it, the doctor doesnt know about my health problems and so on.
For that reason, and because the German Insurances and Doctor Software Supplier are unable to get something working, I decide to make my own health record to have the medical history on my side.

## When it will be shared?
Soon, at least I hope.
The Problem is, Im using a HTML/CSS Dashboard Template from a third party developer and he doesnt has shared the license for it and due I really like the design of it, I want to use it. I made already a running proof of work web app withthe basic functionality, but its not yet ready for productive use and represent more a early alpha (really, I suppose you dont want just to use a one page table).


# How to use 
The current work is a proof of concept. Its working but is nothing complicated.
To use it, upload the 3 files medical-record.php, insert-medical-record.php, dbconnection.php in your directory where you want to open it on your server.

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
```

Open the install.php in your browser and type in your MySQL/Mariadb credentials, 
afterwards these are written in the db_connection.php file and you get forwarded to the application.

## Screenshot
![alt Screenshot of functional medical record](https://github.com/petrk94/ownhealthrecord/blob/master/ownhealthrecord_medrecord_dashboard.png)


## Used Dashboard Theme
The Dashboard theme, developed by Creative Tim is the <a href="https://github.com/creativetimofficial/paper-dashboard" target="_blank">Paper-Dashboard</a> and is licensed by <a href="https://www.creative-tim.com/license/" target="_blank">Creative Tim under MIT License</a>.
