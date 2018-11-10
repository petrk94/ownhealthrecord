# The Developer Log
### 10.11.2018 - Back to work
 Hey guys
 
 after one month of break on this project, caused by another workload and unmotivation, I have finally brang me up to continue the work on it. One problem I faced in the Guardian is, that its seach for changed files in subdirectories is not really so easy as I thought. For that reason I have stopped the work on the Guardian for the moment.
 I started now to make some tests with the encryption and decryption of the information in the MySQL database.
 
 The medical-record.php, doctor-list.php and medicine.php pages now encrypt and decrypt the information. After filling the fields with your medical information and click on save entry, the data will be handled by insert-#X.php, this is encrypting the data with AES_ENCRYPT and a secret key you have to use in your db_connect.php. The data will be stored encrypted in the MySQL database table, so even if you get a data breach in your MySQL Server, without the Secret key, your data will be safe (no guarantee, but its a safe way to encrypt data) and can not be decrypted. For a later release I hope to find a solution which make it possible to another key instead of a manually hard coded in the db_connect.php
 
 Check it out on the screenshots below (first: how it looks after sending the data; second: how it looks in your database)
 
 ![](images/Decrypted%20data.PNG)

![](images/encrypted%20data.PNG)

### 19.10.2018 - run your Server secure
Hey guys

I just have added some links about how to run your server in a secure way for production usage. I think this are information which you should definitive check out before running OwnHealthRecord for own production usage (even its not yet ready for production). Check out the links in the README file.

### 13.10.2018 - Guardian
Hey guys

on the roadmap I wrote about a "Guardian" and yes, this is maybe a own project for this project. Guardian will run over a cronjob from time to time and will check the files whether it got changed etc. This is pretty interesting. I decided to get it verified with a hash function. So the first run is a indexing of all files in the application folder, Guardian will create a list (I think about a CSV file or plain text for the moment) and in this file will be every file and its hash listed (still thinking about which hash function will be nice enough, I suppose SHA256/512?). If there will be another run, Guardian will check every hash of the files again and verify it with the origin hash list. If they are valid, everything is fine. But if it is not the same, Guardian will write this incident in a log file and send it over email to the user.
For now I have the scan and hashing functionality. See screenshot:

![](images/guardian_alphademo.PNG)

### 11.10.2018 - Login get beautiful
Hey guys

as already communicated in the roadmap, I dont like the latest basic html code login interface, so I was on the search and looked for an open source free available login form, and I found it.

![](images/OHR_beautifullogin.PNG)

For now its in the repo only, so you have to clone it to test it, but its just for the eyes, nothing regarding the functionality.
Ps. Did I told you about the new logo I created :) (ok, an free icon and a text, well how you want to call it)?

### 11.10.2018 - Start of the Developer Log
Hello,

Yes, thats my first try to start a developer log book.
It should not be like a blog, but more information stuff of what changes are made or what just got changed etc. 