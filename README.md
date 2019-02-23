![](images/ownhealthrecord_logo.png)
[![Backers on Open Collective](https://opencollective.com/ownhealthrecord/backers/badge.svg)](#backers)
 [![Sponsors on Open Collective](https://opencollective.com/ownhealthrecord/sponsors/badge.svg)](#sponsors) 

# OwnHealthRecord
This is a repository for the Own Health Record Application Web App

Developed by <a href="https://github.com/petrk94" target="_blank">Petr Kirpeit</a>

# Newest update
Want to get every update without waiting for the next release?
Check the Developer Log to see the latest changes, before it releases. 
---> <a href="DeveloperLog.md" target="_blank">DEVELOPER LOG</a>

## Whats about?
The problem I am faced with is that each time I got a new doctor, I had to provide a lot of information manually; this led to everyone of my doctors having only a snippet of my medical records.
This can cause problems, as the doctor needs my records to see my previous health, and how it is affecting my current health. Without this knowledge the doctor could misdiagnose my illness and impede my path to regain my health.
For these reasons, and because the German Insurances and Doctor Software Supplier are unable to release their own solution, I have decided to make OwnHealthRecord.

## When will it be ready?
I have already made a running proof of concept web app with the basic functionality, however, it is not ready for stable use and is more of an alpha release. It is constantly being changed and updated with new features so there is not set release date.


# Requirements
* LAMP Stack
* PHP 7
* A MySQL/MariaDB database

The web app is using PHP and MySQL, because its the most used environment you will find on nearly every server. This can be used on a root server as well as on a SharedHost or VPS.

## SQLite?
For the time being I have no capacity to implement it as a separate function. If you want to contribute to it, you are welcome to open an issue and discuss it.

# How to use
# How do I use this?
Upload the files or clone the repo to your document root / html folder on your server, 
Then, create a new MySQL database on via PHPMyAdmin and import the database-structure.sql file to your MySQL/MariaDB database. This will contain the tables medicalrecords, doctors, medicine and user.


### DB Connection
Go to the includes folder in your OwnHealthRecord directory and open psl-config.php, Once open, type in your database login credentials. In a future version this step will be replaced by a installer.

**Important: The Secret Key must be changed by yourself, this is important to encrypt the data with AES_Encrypt** 

## Current Functionality
* medical-Record.php - here you can write down your personal medical record and have it display what is saved in the database.


* doctors-list.php - here you can write and see all your doctors contact information as well the treatment time, so you will not forget when you were there and how long the appointement was. 
    
    Example:
    
    Treatment period 01.2018 - 10.2018.


  
* medicine.php - here you can add your medication, dose, period of usage, a link to a website with information about the medicine you are taking and additional warnings from your doctor.


## Screenshot
![](images/ownhealthrecord_medrecord%20v0.3.png)
Screenshot from V0.3

![](images/ownhealthrecord_medrecord_dashboard.png)
Screenshot from V0.1

## Attention - Safety - No guarantee
This software is built by me, there is **no guarantee** that everything will work properly. It is made for selfhosting, so you must take care of the server's security and protection of the data. For the login always use an HTTPS connection with a valid SSL certificate. The database entries are encrypted, but this doesn't guarantee the data's security. The password is hashed and salted for improved security.

## Your own server - Your own security
This application has to run on a secure environment, if you want to use it for production. So if you store your medical record on your own server, you must take care of your own security to keep it running secure.


For this reason, I have collected some links which provide guides to securing your server:

* https://www.digitalocean.com/community/tutorials/7-security-measures-to-protect-your-servers
* <a href="https://www.rackaid.com/blog/server-security-tips/" target="_blank">79 Server Security Tips for You to Secure Your Server</a>
* <a href="https://www.linode.com/docs/security/securing-your-server/" target="_blank">How to Secure Your Server</a>
* <a href="https://medium.com/viithiisys/10-steps-to-secure-linux-server-for-production-environment-a135109a57c5" target="_blank">10 steps to secure Linux Server for Production Environment</a>


## License

The Application is Open Source and can be used for private/individual purposes for free. The usage of code which is not listed below "Third Party Libraries/Code/Sources" for commercial interests is restricted and only legal after my approval, any other commercial usage is prohibited.

## Third Party Libraries/Code/Sources

The Dashboard theme, developed by Creative Tim is the <a href="https://github.com/creativetimofficial/paper-dashboard" target="_blank">Paper-Dashboard</a> and is licensed by <a href="https://www.creative-tim.com/license/" target="_blank">Creative Tim under the MIT License</a>.

The account and login functionality was developed by Github User <a href="https://github.com/peredurabefrog" target="_blank">peredurabefrog</a>.
His <a href="https://github.com/peredurabefrog/phpSecureLogin" target="_blank">phpSecureLogin</a> script is very helpful for the implementation of the account functionality and protection of information. 
Here is the code explanation: https://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL

The AES_Encryption code is based on this tutorial:
http://thinkdiff.net/mysql/encrypt-mysql-data-using-aes-techniques/ by <a href="https://github.com/mahmudahsan" target="_blank">mahmudahsan</a>

https://www.w3resource.com/mysql/encryption-and-compression-functions/aes_decrypt().php
# Roadmap
- [ ] 2-Factor-Authentication
- [x] Encrypted medical information in MySQL Database
- [ ] SQlite3 Support
- 20% - Guardian (a cron script which runs in the background and detects changes in the code, if a change is detected, it notifies the user about a possible data breach)
- [x] nice login form
- [x] nice signup form
- 10% add allergies page (requested via reddit by @Laxmin)
- [x] Upload functionality to upload medical images

  - [ ] add DICOM Viewer (https://www.dicomlibrary.com/; https://github.com/nanodocumet/Nanodicom; https://deanvaughan.org/wordpress/dicom-php-class/; )
- [ ] Export functionality (divers. formats)


# Planned Featues
- [ ] Ability to upload files with medical file extensions (https://en.wikipedia.org/wiki/List_of_file_formats#Biomedical_imaging)
- [ ] Health Check reminder
- [ ] Reminder for vaccination (+ emailing function)
- [ ] Timeline/log page, see all updates in your account (updates in medical record, uploaded images, reminder for health checks)
- [ ] Multi User functionality
- [ ] API 
 
## Contributors

This project exists thanks to all the people who contribute. 
<a href="https://github.com/petrk94/ownhealthrecord/graphs/contributors"><img src="https://opencollective.com/ownhealthrecord/contributors.svg?width=890&button=false" /></a>


## Backers

Thank you to all our backers! 🙏 [[Become a backer](https://opencollective.com/ownhealthrecord#backer)]

<a href="https://opencollective.com/ownhealthrecord#backers" target="_blank"><img src="https://opencollective.com/ownhealthrecord/backers.svg?width=890"></a>


## Sponsors

Support this project by becoming a sponsor. Your logo will show up here with a link to your website. [[Become a sponsor](https://opencollective.com/ownhealthrecord#sponsor)]

<a href="https://opencollective.com/ownhealthrecord/sponsor/0/website" target="_blank"><img src="https://opencollective.com/ownhealthrecord/sponsor/0/avatar.svg"></a>
<a href="https://opencollective.com/ownhealthrecord/sponsor/1/website" target="_blank"><img src="https://opencollective.com/ownhealthrecord/sponsor/1/avatar.svg"></a>
<a href="https://opencollective.com/ownhealthrecord/sponsor/2/website" target="_blank"><img src="https://opencollective.com/ownhealthrecord/sponsor/2/avatar.svg"></a>
<a href="https://opencollective.com/ownhealthrecord/sponsor/3/website" target="_blank"><img src="https://opencollective.com/ownhealthrecord/sponsor/3/avatar.svg"></a>
<a href="https://opencollective.com/ownhealthrecord/sponsor/4/website" target="_blank"><img src="https://opencollective.com/ownhealthrecord/sponsor/4/avatar.svg"></a>
<a href="https://opencollective.com/ownhealthrecord/sponsor/5/website" target="_blank"><img src="https://opencollective.com/ownhealthrecord/sponsor/5/avatar.svg"></a>
<a href="https://opencollective.com/ownhealthrecord/sponsor/6/website" target="_blank"><img src="https://opencollective.com/ownhealthrecord/sponsor/6/avatar.svg"></a>
<a href="https://opencollective.com/ownhealthrecord/sponsor/7/website" target="_blank"><img src="https://opencollective.com/ownhealthrecord/sponsor/7/avatar.svg"></a>
<a href="https://opencollective.com/ownhealthrecord/sponsor/8/website" target="_blank"><img src="https://opencollective.com/ownhealthrecord/sponsor/8/avatar.svg"></a>
<a href="https://opencollective.com/ownhealthrecord/sponsor/9/website" target="_blank"><img src="https://opencollective.com/ownhealthrecord/sponsor/9/avatar.svg"></a>


