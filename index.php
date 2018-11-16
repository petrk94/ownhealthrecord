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
include_once 'includes/db_connect.php';
include_once 'includes/functions.php'; 
sec_session_start();



if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Secure Login: Log In</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/styles/main.css" />
        <script type="text/JavaScript" src="assets/js/sha512.js"></script> 
        <script type="text/JavaScript" src="assets/js/forms.js"></script> 
    </head>
<link href="assets/css/login.css" rel="stylesheet" />
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="assets/ownhealthrecord_logo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="includes/process_login.php" method="post" name="login_form">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Login" onclick="formhash(this.form, this.form.password);">
    </form>
	
	
      
	  
	  
	  
    <!-- Remind Passowrd -->
    <div id="formFooter">
	<p>If you don't have a login, please <a href="signup.php">Create Account</a></p>
	<p>You are currently logged <?php echo $logged ?>.</p>
	<p>If you are done, please <a href="includes/logout.php">log out</a>.</p>
    </div>

  </div>
</div>
</html>