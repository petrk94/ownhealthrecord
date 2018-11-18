
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);.container,.form{position:relative;z-index:1}.install{width:360px;padding:8% 0 0;margin:auto}.form{background:#FFF;max-width:360px;margin:0 auto 100px;padding:45px;text-align:center;box-shadow:0 0 20px 0 rgba(0,0,0,.2),0 5px 5px 0 rgba(0,0,0,.24)}.form button,.form input{outline:0;width:100%;border:0;padding:15px;font-size:14px;font-family:Roboto,sans-serif}.form input{background:#f2f2f2;margin:0 0 15px;box-sizing:border-box}.form button{text-transform:uppercase;background:#4CAF50;color:#FFF;-webkit-transition:all .3 ease;transition:all .3 ease;cursor:pointer}.form button:active,.form button:focus,.form button:hover{background:#43A047}.form .message{margin:15px 0 0;color:#b3b3b3;font-size:12px}.form .message a{color:#4CAF50;text-decoration:none}.form .register-form{display:none}.container{max-width:300px;margin:0 auto}.container:after,.container:before{content:"";display:block;clear:both}.container .info{margin:50px auto;text-align:center}.container .info h1{margin:0 0 15px;padding:0;font-size:36px;font-weight:300;color:#1a1a1a}.container .info span{color:#4d4d4d;font-size:12px}.container .info span a{color:#000;text-decoration:none}.container .info span .fa{color:#EF3B3A}body{background:#76b852;background:-webkit-linear-gradient(right,#76b852,#8DC26F);background:-moz-linear-gradient(right,#76b852,#8DC26F);background:-o-linear-gradient(right,#76b852,#8DC26F);background:linear-gradient(to left,#76b852,#8DC26F);font-family:Roboto,sans-serif;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
</style>

<div class="install">
  <div class="form">
    <form class="login-form" method="post" action="install.php">
	  <p>Installation</p>
      <input type="text" name="db_host" placeholder="MySQL/MariaDB Host"/>
	  <input type="text" name="db_user" placeholder="DB Username"/>
	  <input type="text" name="db_pass" placeholder="DB Password"/>
	  <input type="text" name="db_table" placeholder="DB Table"/>
      <button type="submit">Install</button>
    </form>
  </div>
</div>

<?php

// generate a random key as secret for the AES_ENCRYPT function in mysql
$bytes = random_bytes(20);
$secret = (bin2hex($bytes)); 

if (isset($_POST['db_host']) && isset($_POST['db_user']) && isset($_POST['db_pass']) && isset($_POST['db_table'])) { // check if both fields are set
    
   $content = "
<?php

/** 
 * Copyright (C) 2013 peredur.net
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * This file contains global configuration variables
 * Things like whether anyone can register.
 * 
 * Whether or not it's a secure (https) connection could
 * also go here...
 */

/**
 * These are the database login details
 */
   define(\"HOST\", \"" . $_POST['db_host'] . "\");			// The host you want to connect to. 
   define(\"USER\", \"" . $_POST['db_user'] . "\");			// The database username. 
   define(\"PASSWORD\", \"" . $_POST['db_pass'] . "\");		// The database password. 
   define(\"DATABASE\", \"" . $_POST['db_table'] . "\"); 	 // The database name.


/**
 * Who can register and what the default role will be
 * Values for who can register under a standard setup can be:
 *      any  == anybody can register (default)
 *      admin == members must be registered by an administrator
 *      root  == only the root user can register members
 * 
 * Values for default role can be any valid role, but it's hard to see why
 * the default 'member' value should be changed under the standard setup.
 * However, additional roles can be added and so there's nothing stopping
 * anyone from defining a different default.
 */
   define(\"CAN_REGISTER\", \"any\");
   define(\"DEFAULT_ROLE\", \"member\");


/**
 * Is this a secure connection?  The default is FALSE, but the use of an
 * HTTPS connection for logging in is recommended.
 * 
 * If you are using an HTTPS connection, change this to TRUE
 */
   define(\"SECURE\", FALSE);    // For development purposes only!!!!
   
  // this secret key got generated once you have finished the install.php
  \$secret = '$secret';
  
   ";

   file_put_contents('includes/psl-config.php',$content); // log to data.txt 
   header( "Location: index.php" );
   exit();
}
?>