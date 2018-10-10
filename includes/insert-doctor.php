<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require('dbconnection.php');

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_table);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$doctor_name = $mysqli->real_escape_string($_REQUEST['doctor_name']);
$doctor_type = $mysqli->real_escape_string($_REQUEST['doctor_type']);
$address = $mysqli->real_escape_string($_REQUEST['address']);
$phone = $mysqli->real_escape_string($_REQUEST['phone']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$threatment_period = $mysqli->real_escape_string($_REQUEST['threatment_period']);



// Attempt insert query execution
$sql = "INSERT INTO doctors (doctor_name, doctor_type, address, phone, email, threatment_period) VALUES ('$doctor_name', '$doctor_type', '$address', '$phone', '$email', '$threatment_period')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
	header('Location: medicine.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>