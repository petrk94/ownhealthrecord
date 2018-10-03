
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

if(isset($_POST['db_host']) && isset($_POST['db_user']) && isset($_POST['db_pass']) && isset($_POST['db_table'])){
    $data = "\$db_host = " . $_POST['db_host'] .";\r\n" . "\$db_user = " . $_POST['db_user'] . ";\r\n" . "\$db_pass = ". $_POST['db_pass'] . ";\r\n" . "\$db_table = " . $_POST['db_table'] . ";";
    $ret = file_put_contents('db_connection.php', $data | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
		$host  = $_SERVER['HTTP_HOST'];
		header("Location: http://$host/medical-record.php");
    }
}
else {
   die('no post data to process');
}



?>